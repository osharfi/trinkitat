	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
			
			<?php echo validation_errors(); ?>
<?php echo form_open('order/pay/'.$order_item[0]['orderid']); ?>	
<div class="form-group  form-inline">
    <label class="radio-inline"><input type="radio" value="1" name="pmethod" checked>كاش</label>
<label class="radio-inline"><input type="radio" value="2" name="pmethod">بنك</label>
<div id="cheqnod">
    <label for="cheqno">-رقم الشيك-
    <input type="text" class="form-control"  name="cheqno" id="cheqno"  ></label>
</div>
  
  </div>
  <input type="text" class="form-control"  name="total" id="total"  value="<?php echo $order_item[0]['total']-$order_item[0]['paid']; ?>" hidden />
  <input type="text" class="form-control"  name="oldpaid" id="oldpaid"  value="<?php echo $order_item[0]['paid']; ?>" hidden />								 
  <input type="text" class="form-control"  name="customer" id="customer"  
  value="<?php echo $order_item[0]['customer'];?>" hidden />									 
     <div class="form-group  form-inline">
    <label for="paid">المستلم</label>
    <input type="text" class="form-control"  name="paid" id="paid"  value="<?php echo set_value('paid'); ?>" required >
  </div>
  
  <input type="submit" value="اضافة" class="btn btn-primary" />
  
    <br /> 
</form>
			
      <div>
        <span># <?php echo $order_item[0]['orderid']."    السيد: ".$order_item[0]['customerName']."    ت: ".$order_item[0]['customerPhone']; ?>
      </div>
   
   
					<div id="table">
						<table>
							<tr >
								<td>النوع</td>
								<td>الطول</td>
								<td>العرض</td>
								<td>الكمية</td>
								<td>السعر</td>
							</tr>
<?php foreach ($order_item as $order_items): ?>
							<tr class="service">
								<td class="tableitem"><p class="itemtext">
								<?php echo $order_items['stockname']; ?>
								</p></td>
								<td class="tableitem"><p class="itemtext">
								<?php echo $order_items['height']; ?>
								</p></td>
								<td class="tableitem"><p class="itemtext">
								<?php echo $order_items['width']; ?>
								</p></td>
								<td class="tableitem"><p class="itemtext">
								<?php echo $order_items['quantity']; ?>
								</p></td>
								<td class="tableitem"><p class="itemtext">
								<?php echo $order_items['ltotal']; ?>
								</p></td>
							</tr>
<?php endforeach; ?>
							<tr class="tabletitle">
								<td></td>
								<td></td>
								<td></td>
								<td class="Rate">المجموع</td>
								<td class="payment"><?php echo $order_item[0]['total']; ?></td>
							</tr>
							<tr class="tabletitle">
								<td></td>
								<td></td>
								<td></td>
								<td class="Rate">مستلم</td>
								<td class="payment"><?php echo $order_item[0]['paid']; ?></td>
							</tr>
							<tr class="tabletitle">
								<td></td>
								<td></td>
								<td></td>
								<td class="Rate">متبقي</td>
								<td>
								<?php echo $order_item[0]['total']-$order_item[0]['paid'];
								 ?></td>
							</tr>							
							
						</table>
					</div><!--End Table-->

        </div>
	</div>
    </div>
	
<script type="text/javascript">
	
	$('#cheqnod').hide();
$('input:radio[name="pmethod"]').change(
    function(){
        if ($(this).is(':checked') && $(this).val() == '2') {
		$('#cheqnod').show();}
else {
$('#cheqnod').hide();}
        
    });
	
</script>
	