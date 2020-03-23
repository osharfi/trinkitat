<?php
class Shop extends CI_Controller {

    public function __construct()
        {
                parent::__construct();
						 if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
                $this->load->model('shop_model');
                $this->load->helper('url_helper');
				$this->load->library('cart');

        }

    public function index()
        {
			
			$data['order'] = $this->shop_model->get_order();
		
			$this->load->view('templates/header');
			$this->load->view('shop/index', $data);
			$this->load->view('templates/footer');
			
        }

    public function view($orderid = NULL)
        {
                $data['order_item'] = $this->shop_model->get_order($orderid);
				
    if (empty($data['order_item']))
        {
                show_404();
        }
		
        $this->load->view('shop/view', $data);
			
		}
		
		
function add()
{
	$itemid = $this->input->post('itemcode');
// Set array for send data.
$insert_data = array(
'id' => $this->input->post('itemcode'),
'name' => $this->shop_model->get_item_name($itemid),
'price' => $this->shop_model->get_item_price($itemid),
'qty' => 1
);

// This function add items into cart.

$this->cart->insert($insert_data);

// This will show insert data in cart.

redirect('shop/newc');
}

	
	function newc(){
		
			                $this->load->helper(array('form', 'url'));

               
						$data['stock'] = $this->shop_model->get_stock();

						$this->load->view('templates/header');
                        $this->load->view('shop/new', $data);
						$this->load->view('templates/footer');

                }
				
    function newadd(){
                {
				$this->load->helper(array('form', 'url'));

			if ($cart = $this->cart->contents()):

					
				$orderid=$this->shop_model->save_order();
				
				//$ord_id = $this->billing_model->insert_order($order);

			foreach ($cart as $item):
			$order_detail = array(
			'orderid' => $orderid,
			'stockid' => $item['id'],
			'quantity' => $item['qty'],
			'ltotal' => $item['price']
			);
			$cust_id = $this->shop_model->insert_order_details($order_detail);
			
			endforeach;
			
			$this->cart->destroy();
			
			$link = "<script>window.open('". site_url('shop/view/'.$orderid)." ', '_blank',  'width=450,height=500,left=160,top=170')</script>";
					
				echo $link;
			else:
			redirect('shop/newc');
			endif;
					
				
	
			//redirect('shop/');	
			$this->newc();
                }
        
	}

	function pay($orderid = NULL){
		
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');	
				$this->form_validation->set_rules(
						'paid', 'paid',
						'required|min_length[1]'
				);
    
				$ttl = $this->input->post('total');
				$this->form_validation->set_rules(
						'paid', 'paid',
						'required|less_than_equal_to['.$ttl.']'
				);	
				
				
                if ($this->form_validation->run() == FALSE)
                {
				$data['order_item'] = $this->shop_model->get_order($orderid);

						$this->load->view('templates/header');
                        $this->load->view('shop/pay', $data);
						$this->load->view('templates/footer');

                }
                else
                {
					
				$orderid=$this->shop_model->pay_order($orderid);
					
				$link = "<script>window.open('". site_url('shop/view/'.$orderid)." ', '_blank',  'width=450,height=500,left=160,top=170')</script>";
					
				echo $link;
				
		redirect('shop/');

                }
        }
	public function delete($orderid)
        {
			if($this->session->userdata('level')==='1')
                $this->shop_model->delete_order($orderid);
			
		redirect('shop/');
		}
		
	function remove($rowid) {
		// Check rowid value.
		if ($rowid==="all"){
		// Destroy data which store in session.
		$this->cart->destroy();
		}else{
		// Destroy selected rowid in session.
		$data = array(
		'rowid' => $rowid,
		'qty' => 0
		);
		// Update cart data, after cancel.
		$this->cart->update($data);
		}

		// This will show cancel data in cart.
		redirect('shop/newc');
		}

function update_cart(){

		// Recieve post values,calcute them and update
		$cart_info = $_POST['cart'] ;
		foreach( $cart_info as $id => $cart)
		{
		$rowid = $cart['rowid'];
		$price = $cart['price'];
		$amount = $price * $cart['qty'];
		$qty = $cart['qty'];

		$data = array(
		'rowid' => $rowid,
		'price' => $price,
		'amount' => $amount,
		'qty' => $qty
		);

		$this->cart->update($data);
		}
		redirect('shop/newc');
		}

function billing_view(){
// Load "billing_view".
$this->load->view('billing_view');
}

public function save_order()
{
// This will store all values which inserted from user.
$customer = array(
'name' => $this->input->post('name'),
'email' => $this->input->post('email'),
'address' => $this->input->post('address'),
'phone' => $this->input->post('phone')
);
// And store user information in database.
$cust_id = $this->billing_model->insert_customer($customer);

$order = array(
'date' => date('Y-m-d'),
'customerid' => $cust_id
);

$ord_id = $this->billing_model->insert_order($order);

if ($cart = $this->cart->contents()):
foreach ($cart as $item):
$order_detail = array(
'orderid' => $ord_id,
'productid' => $item['id'],
'quantity' => $item['qty'],
'price' => $item['price']
);

// Insert product imformation with order detail, store in cart also store in database.

$cust_id = $this->billing_model->insert_order_detail($order_detail);
endforeach;
endif;

// After storing all imformation in database load "billing_success".
$this->load->view('billing_success');
}	
	  
}
