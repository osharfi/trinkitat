	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-2">
			<h1>المبيعات</h1>
                <h2>
    <a class="nav-link" href="<?php echo base_url('order2/newc'); ?>">فاتورة</a>
                </h2>
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>التاريخ</th>						
                        <th>العميل</th>
                        <th>الهاتف</th>
						<th>السعر</th>
                        <th>المدفوع</th>
						<th>المتبقي</th>
                       <th></th>
                    </tr>
                </thead>
                <tbody id="show_data">
        <?php 
		$ttotal = 0;
		$tpaid = 0;
		foreach ($order as $order_item):
		$ttotal = $ttotal + $order_item['total'];
		$tpaid = $tpaid + $order_item['paid'];		?>
		<tr id="<?php echo $order_item['orderid']; ?>">
				<td>
					<?php echo $order_item['orderid']; ?>
				</td>
				<td>
					<?php echo $order_item['datetime']; ?>
				</td>
				<td>
					<?php  echo "<a href='". site_url('customer/statement/'.$order_item['customer'])." '> ".$order_item['customerName']." </a>";
					?>
				</td>

				<td>
					<?php echo $order_item['customerPhone']; ?>
				</td>
				<td>
					<?php echo $order_item['total']; ?>
				</td>
				<td>
					<?php echo $order_item['paid']; ?>
				</td>
				<td>
					<?php echo $order_item['total']-$order_item['paid']; ?>
				</td>
				<td>
					<?php  echo "
					    <a href='". site_url('order2/view/'.$order_item['orderid'])." ' class='js-newWindow' data-popup='width=440,height=500'>عرض</a>";	
						
						if($order_item['total'] > $order_item['paid'])
						echo "<a href='". site_url('order2/pay/'.$order_item['orderid'])." '> سداد </a>";
					
						if($this->session->userdata('level')==='1')
						echo "<a href='". site_url('order2/delete/'.$order_item['orderid'])."' onclick='return confirm(\"هل تريد مسح الايصال رقم".$order_item['orderid']."\")' class='btn btn-danger remove'> مسح </a>";
					?>
				</td>
				
		</tr>
		<?php endforeach; ?>
		<tr><td>المجموع</td><td></td><td></td><td></td><td>
					<?php echo $ttotal; ?>
		</td><td>
					<?php echo $tpaid; ?>
		</td>
		<td>
					<?php echo $ttotal-$tpaid; ?>
		</td>
		<td></td>
		</tr>
                </tbody>
            </table>
        </div>
    </div>
	
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$('#mydata').dataTable({ 
		"order": [[ 1, "desc" ]], 
		"pageLength": 50
		});
		});
		
		 $('.js-newWindow').click(function (event) {
                event.preventDefault();
                var $this = $(this);
                var url = $this.attr("href");
                var windowName = "popUp";
                var windowSize = $this.data("popup");
                window.open(url, windowName, windowSize);
            });


</script>