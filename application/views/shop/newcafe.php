<div id='content'>
<div id='tag'>
<!-- Formget Fugo logo image -->
<img src="<?php echo base_url(); ?>images/head_cart.jpg"/>
</div>
<div id="cart" >
<div id = "heading">
<h2 align="center">Products on Your Shopping Cart</h2>
</div>

<div id="text">
<?php $cart_check = $this->cart->contents();

// If cart is empty, this will show below message.
if(empty($cart_check)) {
echo 'To add products to your shopping cart click on "Add to Cart" Button';
} ?> </div>

<table id="table" border="0" cellpadding="5px" cellspacing="1px">
<?php
// All values of cart store in "$cart".
if ($cart = $this->cart->contents()): ?>
<tr id= "main_heading">
<td>Serial</td>
<td>Name</td>
<td>Price</td>
<td>Qty</td>
<td>Amount</td>
<td>Cancel Product</td>
</tr>
<?php
// Create form and send all values in "shopping/update_cart" function.
echo form_open('shop/update_cart');
$grand_total = 0;
$i = 1;

foreach ($cart as $item):
// echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
// Will produce the following output.
// <input type="hidden" name="cart[1][id]" value="1" />

echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
?>
<tr>
<td>
<?php echo $i++; ?>
</td>
<td>
<?php echo $item['name']; ?>
</td>
<td>
$ <?php echo number_format($item['price'], 2); ?>
</td>
<td>
<?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
</td>
<?php $grand_total = $grand_total + $item['subtotal']; ?>
<td>
$ <?php echo number_format($item['subtotal'], 2) ?>
</td>
<td>

<?php
// cancle image.
$path = "<img src='http://localhost/codeigniter_cart/images/cart_cross.jpg' width='25px' height='20px'>";
echo anchor('shopping/remove/' . $item['rowid'], $path); ?>
</td>
<?php endforeach; ?>
</tr>
<tr>
<td><b>Order Total: $<?php

//Grand Total.
echo number_format($grand_total, 2); ?></b></td>

<?php // "clear cart" button call javascript confirmation message ?>
<td colspan="5" align="right"><input  class ='fg-button teal' type="button" value="Clear Cart" onclick="clear_cart()">

<?php //submit button. ?>
<input class ='fg-button teal'  type="submit" value="Update Cart">
<?php echo form_close(); ?>

<!-- "Place order button" on click send "billing" controller -->
<input class ='fg-button teal' type="button" value="Place Order" onclick="window.location = 'shop/billing_view'"></td>
</tr>
<?php endif; ?>
</table>
</div>
<div id="products_e" align="center">

<h2 id="head" align="center">Products</h2>
<?php

// "$products" send from "shopping" controller,its stores all product which available in database.
foreach ($stock as $product) {
$id = $product['stockid'];
$name = $product['stockname'];
$description = $product['sec'];
$price = $product['sell'];
?>

<div id='product_div'>
<div id='image_div'>
<img src="<?php //echo base_url() . $product['picture'] ?>"/>
</div>
<div id='info_product'>
<div id='name'><?php echo $name; ?></div>
<div id='desc'> <?php echo $description; ?></div>
<div id='rs'><b>Price</b>:<big>
$<?php echo $price; ?></big></div>
<?php

// Create form and send values in 'shopping/add' function.
echo form_open('shop/add');
?>
<select name="typeofprint_1" id="typeofprint_1" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock1)
{ ?>
    <option value="<?=$stock1['stockid']?>" title="<?=$stock1['sell']?>" ><?=$stock1['stockname']?></option>
    <? } ?>
</select>
<?php
echo form_hidden('id', $id);
echo form_hidden('name', $name);
echo form_hidden('price', $price);
?> </div>
<div id='add_button'>
<?php
$btn = array(
'class' => 'fg-button teal',
'value' => 'Add to Cart',
'name' => 'action'
);

// Submit Button.
echo form_submit($btn);
echo form_close();
?>
</div>
</div>

<?php } ?>

</div>
</div>

<script type="text/javascript" src="<?php echo base_url().'assets/js/chosen.jquery.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/init.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/prism.js'?>"></script>

<script type="text/javascript">
// To conform clear all data in cart.
function clear_cart() {
var result = confirm('Are you sure want to clear all bookings?');

if (result) {
window.location = "<?php echo base_url(); ?>index.php/shopping/remove/all";
} else {
return false; // cancel button
}
}
</script>
