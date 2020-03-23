<div class="row">
<div class="col-4">

<div id="products_e" align="center">

<h2 id="head" align="center"></h2>


<?php
// Create form and send values in 'shopping/add' function.
echo form_open('shop/add');
?>

 <div class="form-group">
    <label for="itemcode">الكود Barcode</label>
<input id="itemcode" name="itemcode" />
 </div>
 <div class="form-group">
    <label for="itemlist">بحث </label>

<select name="itemlist" id="itemlist" class="chosen-select"  style="width: 200px;" >

    <option value="" > بحث </option>
<? foreach($stock as $stock1)
{ ?>
    <option value="<?=$stock1['stockid']?>" title="<?=$stock1['sell']?>" ><?=$stock1['stockname'].' '.$stock1['stockid']?></option>
    <? } ?>
</select>
 </div>

 </div>
<div id='add_button'>
<?php
$btn = array(
'class' => 'fg-button teal',
'value' => 'اضافة',
'name' => 'action'
);

// Submit Button.
echo form_submit($btn);
echo form_close();
?>
</div>
</div>
<div class="col-8">

<div id='content'>
<div id='tag'>
<!-- Formget Fugo logo image -->
          <div class=" fas fa-3x fa-shopping-cart"></div>

</div>
<div id="cart" >
<div id = "heading">
<h2 align="center">المنتجات الموجودة في سلة التسوق</h2>
</div>

<div id="text">
<?php $cart_check = $this->cart->contents();

// If cart is empty, this will show below message.
if(empty($cart_check)) {
echo 'لإضافة منتجات إلى سلة التسوق   ، انقر فوق الزر "إضافة إلى السلة';
} ?> </div>

<table id="table" border="0" cellpadding="5px" cellspacing="1px">
<?php
// All values of cart store in "$cart".
if ($cart = $this->cart->contents()): ?>
<tr id= "main_heading">
<td>الرقم التسلسلي</td>
<td>الاسم</td>
<td>السعر</td>
<td>الكمية</td>
<td>مبلغ</td>
<td>إلغاء المنتج</td>
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
 <?php echo number_format($item['price'], 2); ?> ج
</td>
<td>
<?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
</td>
<?php $grand_total = $grand_total + $item['subtotal']; ?>
<td>
 <?php echo number_format($item['subtotal'], 2) ?> ج
</td>
<td>

<?php
// cancle image.
$path = "<input type='button' class='btn btn-danger remove' value='X'>";
echo anchor('shop/remove/' . $item['rowid'], $path); ?>
</td>
<?php endforeach; ?>
</tr>
<tr>
<td><b>جمالي: <?php

echo form_hidden('total', $grand_total); 
echo form_hidden('paid', $grand_total); 

//Grand Total.
echo number_format($grand_total, 2); ?> ج </b></td>

<?php // "clear cart" button call javascript confirmation message ?>
<td colspan="5" align="right"><input  class ='fg-button teal' type="button" value="مسح الكل" onclick="clear_cart()">

<?php //submit button. ?>
<input class ='fg-button teal'  type="submit" value="تحديث">
<?php echo form_close(); ?>

<!-- "Place order button" on click send "billing" controller -->
<input class ='fg-button teal' type="button" value="اضافة" onclick="window.location = 'newadd'"></td>
</tr>
<?php endif; ?>
</table>
</div>
</div>
</div>


<div class="col-12"> 
<br /><br ><br><br><br><br><br><br>


<script type="text/javascript" src="<?php echo base_url().'assets/js/chosen.jquery.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/init.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/prism.js'?>"></script>

<script type="text/javascript">
// To conform clear all data in cart.
function clear_cart() {
var result = confirm('هل تود الغاء جميع البنود?');

if (result) {
window.location = "<?php echo base_url(); ?>shop/remove/all";
} else {
return false; // cancel button
}
}

$('select#itemlist').on('change', function() {
 $('#itemcode').val($("select#itemlist option:selected").val());

});
</script>
