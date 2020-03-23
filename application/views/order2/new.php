
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('order2/newc'); ?>	
<br>

 <div class="form-group">
    <label for="customer">العميل</label>
 
  <select name="customer" id="customer" class="chosen-select" >
  <option value="">العميل</option>
<?php
foreach($customer as $customer)
{
    ?>
    <option value="<?=$customer['customerID']?>"><?=$customer['customerName']." ".$customer['customerPhone']?></option>
    <?php
}
?>
</select>
  	
	<a href="<?php echo base_url('customer/newc'); ?>"   class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>جديد</a>
	
  </div>
  
  
  <div class="form-group form-inline">
 
<select name="typeofprint_1" id="typeofprint_1" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock1)
{ ?>
    <option value="<?=$stock1['stockid']?>" title="<?=$stock1['sell']?>" ><?=$stock1['stockname']?></option>
    <? } ?>
</select>

  

<div class="col-xs-2"><span class="add-on"><i>السعر</i></span> 
<input name="price_1" type="text" class="form-control" id="price_1" value="1" size="3"  /> 

  </div> 

<div class="col-xs-2"><span class="add-on"><i>الكمية</i></span> 
<input name="quantity_1" type="text" class="form-control" id="quantity_1" value="1" size="3"  /> 
 </div> 
 

<div class="col-xs-2"><span class="add-on"><i>المجموع</i></span> 
<input name="total_1" type="text" class="form-control" id="total_1" value="" size="6"  readonly /> 


<a href="javascript:void(0);"  id = "showdiv2" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a>

</div>
</div>

  
<div id="morediv2">	
	  <div class="form-group form-inline">
 
<select name="typeofprint_2" id="typeofprint_2" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock2)
{ ?>
    <option value="<?=$stock2['stockid']?>" title="<?=$stock2['sell']?>" ><?=$stock2['stockname']?></option>
    <? } ?>
</select>

   

<div class="col-xs-2"><span class="add-on"><i>السعر</i></span> 
<input name="price_2" type="text" class="form-control" id="price_2" value="1" size="3"  /> 

  </div> 

 

<div class="col-xs-2"><span class="add-on"><i>الكمية</i></span> 
<input name="quantity_2" type="text" class="form-control" id="quantity_2" value="1" size="3"  /> 
</div> 

  
<div class="col-xs-2"><span class="add-on"><i>المجموع</i></span> 
<input name="total_2" type="text" class="form-control" id="total_2" value="" size="6"  readonly /> 


<a href="javascript:void(0);"  id = "showdiv3" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a>

</div>
</div>
</div>
  
<div id="morediv3">	
	  <div class="form-group form-inline">
 
<select name="typeofprint_3" id="typeofprint_3" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock3)
{ ?>
    <option value="<?=$stock3['stockid']?>" title="<?=$stock3['sell']?>" ><?=$stock3['stockname']?></option>
    <? } ?>
</select>

<div class="col-xs-2"><span class="add-on"><i>السعر</i></span> 
<input name="price_3" type="text" class="form-control" id="price_3" value="1" size="3"  /> 

  </div> 



<div class="col-xs-2"><span class="add-on"><i>الكمية</i></span> 
<input name="quantity_3" type="text" class="form-control" id="quantity_3" value="1" size="3"  /> 

  </div> 



<div class="col-xs-2"><span class="add-on"><i>المجموع</i></span> 
<input name="total_3" type="text" class="form-control" id="total_3" value="" size="6"  readonly /> 


<a href="javascript:void(0);"  id = "showdiv4" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a>

</div>
</div>
</div>
    
<div id="morediv4">	
	  <div class="form-group form-inline">
 
<select name="typeofprint_4" id="typeofprint_4" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock4)
{ ?>
    <option value="<?=$stock4['stockid']?>" title="<?=$stock4['sell']?>" ><?=$stock4['stockname']?></option>
    <? } ?>
</select>

 

<div class="col-xs-2"><span class="add-on"><i>السعر</i></span> 
<input name="price_4" type="text" class="form-control" id="price_4" value="1" size="3"  /> 

  </div> 



<div class="col-xs-2"><span class="add-on"><i>الكمية</i></span> 
<input name="quantity_4" type="text" class="form-control" id="quantity_4" value="1" size="3"  /> 

  </div> 



<div class="col-xs-2"><span class="add-on"><i>المجموع</i></span> 
<input name="total_4" type="text" class="form-control" id="total_4" value="" size="6"  readonly /> 


<a href="javascript:void(0);"  id = "showdiv5" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a>

</div>
</div>
</div>


<div id="morediv5">	
	  <div class="form-group form-inline">
 
<select name="typeofprint_5" id="typeofprint_5" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock5)
{ ?>
    <option value="<?=$stock5['stockid']?>" title="<?=$stock5['sell']?>" ><?=$stock5['stockname']?></option>
    <? } ?>
</select>

 

<div class="col-xs-2"><span class="add-on"><i>السعر</i></span> 
<input name="price_5" type="text" class="form-control" id="price_5" value="1" size="3"  /> 

  </div> 



<div class="col-xs-2"><span class="add-on"><i>الكمية</i></span> 
<input name="quantity_5" type="text" class="form-control" id="quantity_5" value="1" size="3"  /> 

  </div> 


<div class="col-xs-2"><span class="add-on"><i>المجموع</i></span> 
<input name="total_5" type="text" class="form-control" id="total_5" value="" size="6"  readonly /> 


<a href="javascript:void(0);"  id = "showdiv6" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a>

</div>
</div>
</div>

<div id="morediv6">	
	  <div class="form-group form-inline">
 
<select name="typeofprint_6" id="typeofprint_6" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock6)
{ ?>
    <option value="<?=$stock6['stockid']?>" title="<?=$stock6['sell']?>" ><?=$stock6['stockname']?></option>
    <? } ?>
</select>

 

<div class="col-xs-2"><span class="add-on"><i>السعر</i></span> 
<input name="price_6" type="text" class="form-control" id="price_6" value="1" size="3"  /> 

  </div> 



<div class="col-xs-2"><span class="add-on"><i>الكمية</i></span> 
<input name="quantity_6" type="text" class="form-control" id="quantity_6" value="1" size="3"  /> 

  </div> 


<div class="col-xs-2"><span class="add-on"><i>المجموع</i></span> 
<input name="total_6" type="text" class="form-control" id="total_6" value="" size="6"  readonly /> 


<a href="javascript:void(0);"  id = "showdiv7" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a>

</div>
</div>
</div>

<div id="morediv7">	
	  <div class="form-group form-inline">
 
<select name="typeofprint_7" id="typeofprint_7" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock7)
{ ?>
    <option value="<?=$stock7['stockid']?>" title="<?=$stock7['sell']?>" ><?=$stock7['stockname']?></option>
    <? } ?>
</select>

  

<div class="col-xs-2"><span class="add-on"><i>السعر</i></span> 
<input name="price_7" type="text" class="form-control" id="price_7" value="1" size="3"  /> 

  </div> 



<div class="col-xs-2"><span class="add-on"><i>الكمية</i></span> 
<input name="quantity_7" type="text" class="form-control" id="quantity_7" value="1" size="3"  /> 

  </div> 



<div class="col-xs-2"><span class="add-on"><i>المجموع</i></span> 
<input name="total_7" type="text" class="form-control" id="total_7" value="" size="6"  readonly /> 


<a href="javascript:void(0);"  id = "showdiv8" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a>

</div>
</div>
</div>

<div id="morediv8">	
	  <div class="form-group form-inline">
 
<select name="typeofprint_8" id="typeofprint_8" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock8)
{ ?>
    <option value="<?=$stock8['stockid']?>" title="<?=$stock8['sell']?>" ><?=$stock8['stockname']?></option>
    <? } ?>
</select>

 

<div class="col-xs-2"><span class="add-on"><i>السعر</i></span> 
<input name="price_8" type="text" class="form-control" id="price_8" value="1" size="3"  /> 

  </div> 



<div class="col-xs-2"><span class="add-on"><i>الكمية</i></span> 
<input name="quantity_8" type="text" class="form-control" id="quantity_8" value="1" size="3"  /> 

  </div> 
 

<div class="col-xs-2"><span class="add-on"><i>المجموع</i></span> 
<input name="total_8" type="text" class="form-control" id="total_8" value="" size="6"  readonly /> 


<a href="javascript:void(0);"  id = "showdiv9" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a>

</div>
</div>
</div>

<div id="morediv9">	
	  <div class="form-group form-inline">
 
<select name="typeofprint_9" id="typeofprint_9" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock9)
{ ?>
    <option value="<?=$stock9['stockid']?>" title="<?=$stock9['sell']?>" ><?=$stock9['stockname']?></option>
    <? } ?>
</select>

  

<div class="col-xs-2"><span class="add-on"><i>السعر</i></span> 
<input name="price_9" type="text" class="form-control" id="price_9" value="1" size="3"  /> 

  </div> 



<div class="col-xs-2"><span class="add-on"><i>الكمية</i></span> 
<input name="quantity_9" type="text" class="form-control" id="quantity_9" value="1" size="3"  /> 

  </div> 



<div class="col-xs-2"><span class="add-on"><i>المجموع</i></span> 
<input name="total_9" type="text" class="form-control" id="total_9" value="" size="6"  readonly /> 


<a href="javascript:void(0);"  id = "showdiv10" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a>

</div>
</div>
</div>

<div id="morediv10">	
	  <div class="form-group form-inline">
 
<select name="typeofprint_10" id="typeofprint_10" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock10)
{ ?>
    <option value="<?=$stock10['stockid']?>" title="<?=$stock10['sell']?>" ><?=$stock10['stockname']?></option>
    <? } ?>
</select>

  

<div class="col-xs-2"><span class="add-on"><i>السعر</i></span> 
<input name="price_10" type="text" class="form-control" id="price_10" value="1" size="3"  /> 

  </div> 



<div class="col-xs-2"><span class="add-on"><i>الكمية</i></span> 
<input name="quantity_10" type="text" class="form-control" id="quantity_10" value="1" size="3"  /> 

  </div> 


<div class="col-xs-2"><span class="add-on"><i>المجموع</i></span> 
<input name="total_10" type="text" class="form-control" id="total_10" value="" size="6"  readonly /> 

</div>
</div>
</div>

     
     <div class="form-group  form-inline">
    <label for="total">المجموع</label>
    <input type="text" class="form-control"  name="total" id="total"  value="<?php echo set_value('total'); ?>" readonly >
  </div>
  
    <div class="form-group  form-inline">
    <label for="total">خصم</label>
    <input type="text" class="form-control"  name="discount" id="discount"  value="<?php echo set_value('discount'); ?>"  >
  </div>
  
   <div class="form-group  form-inline">
    <label class="radio-inline"><input type="radio" value="1" name="pmethod" checked>كاش</label>
<label class="radio-inline"><input type="radio" value="2" name="pmethod">بنك</label>
	 <div id="cheqnod">
    <label for="cheqno">-رقم الشيك-
    <input type="text" class="form-control"  name="cheqno" id="cheqno"  ></label>
  </div>
  
  </div>
  
     <div class="form-group  form-inline">
    <label for="paid">المستلم</label>
    <input type="text" class="form-control"  name="paid" id="paid"  value="<?php echo set_value('paid'); ?>" required >
  </div>
  
  <input type="submit" value="اضافة" class="btn btn-primary" />
  
    <br /> 
	 <br /> 
</form>
        <!--END MODAL ADD--> 
            </div> 
        </div>
    </div>    

<script type="text/javascript" src="<?php echo base_url().'assets/js/chosen.jquery.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/init.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/prism.js'?>"></script>

<script type="text/javascript">

function calculateline(i){
$('#total_'+ i +'').val(($('#price_'+ i +'').val())*($('#quantity_'+ i +'').val()));

calculatetotal();
}

function calculatetotal(){
	var i;
	var total =0;
	for (i=1; i < 11; i++)
	{
		if ($('#total_'+ i +'').val() !== "")
		{
			total = total + parseInt($('#total_'+ i +'').val());
		}
	}
	$('#total').val(total);
}

function discount(){
	calculatetotal()
	var total =0;
total = $('#total').val() - $('#discount').val();
	$('#total').val(total);
	
}

$('#cheqnod').hide();
$('input:radio[name="pmethod"]').change(
    function(){
        if ($(this).is(':checked') && $(this).val() == '2') {
		$('#cheqnod').show();}
else {
$('#cheqnod').hide();}
        
    });

$('#discount').on('keyup', function() {
discount();
});

$('#width_1').on('keyup', function() {
calculateline(1);
});
$('#height_1').on('keyup', function() {
calculateline(1);
});
$('#quantity_1').on('keyup', function() {
calculateline(1);
});
$('#price_1').on('keyup', function() {
calculateline(1);
});

$('#width_2').on('keyup', function() {
calculateline(2);
});
$('#height_2').on('keyup', function() {
calculateline(2);
});
$('#quantity_2').on('keyup', function() {
calculateline(2);
});
$('#price_2').on('keyup', function() {
calculateline(2);
});

$('#width_3').on('keyup', function() {
calculateline(3);
});
$('#height_3').on('keyup', function() {
calculateline(3);
});
$('#quantity_3').on('keyup', function() {
calculateline(3);
});
$('#price_3').on('keyup', function() {
calculateline(3);
});

$('#width_4').on('keyup', function() {
calculateline(4);
});
$('#height_4').on('keyup', function() {
calculateline(4);
});
$('#quantity_4').on('keyup', function() {
calculateline(4);
});
$('#price_4').on('keyup', function() {
calculateline(4);
});

$('#width_5').on('keyup', function() {
calculateline(5);
});
$('#height_5').on('keyup', function() {
calculateline(5);
});
$('#quantity_5').on('keyup', function() {
calculateline(5);
});
$('#price_5').on('keyup', function() {
calculateline(5);
});

$('#width_6').on('keyup', function() {
calculateline(6);
});
$('#height_6').on('keyup', function() {
calculateline(6);
});
$('#quantity_6').on('keyup', function() {
calculateline(6);
});
$('#price_6').on('keyup', function() {
calculateline(6);
});

$('#width_7').on('keyup', function() {
calculateline(7);
});
$('#height_7').on('keyup', function() {
calculateline(7);
});
$('#quantity_7').on('keyup', function() {
calculateline(7);
});
$('#price_7').on('keyup', function() {
calculateline(7);
});

$('#width_8').on('keyup', function() {
calculateline(8);
});
$('#height_8').on('keyup', function() {
calculateline(8);
});
$('#quantity_8').on('keyup', function() {
calculateline(8);
});
$('#price_8').on('keyup', function() {
calculateline(8);
});

$('#width_9').on('keyup', function() {
calculateline(9);
});
$('#height_9').on('keyup', function() {
calculateline(9);
});
$('#quantity_9').on('keyup', function() {
calculateline(9);
});
$('#price_9').on('keyup', function() {
calculateline(9);
});

$('#width_10').on('keyup', function() {
calculateline(10);
});
$('#height_10').on('keyup', function() {
calculateline(10);
});
$('#quantity_10').on('keyup', function() {
calculateline(10);
});
$('#price_10').on('keyup', function() {
calculateline(10);
});



$('#morediv2').hide();
$("#showdiv2").click(function() {
$('#morediv2').show(); });

$('#morediv3').hide();
$("#showdiv3").click(function() {
$('#morediv3').show(); });

$('#morediv4').hide();
$("#showdiv4").click(function() {
$('#morediv4').show(); });

$('#morediv5').hide();
$("#showdiv5").click(function() {
$('#morediv5').show(); });

$('#morediv6').hide();
$("#showdiv6").click(function() {
$('#morediv6').show(); });

$('#morediv7').hide();
$("#showdiv7").click(function() {
$('#morediv7').show(); });

$('#morediv8').hide();
$("#showdiv8").click(function() {
$('#morediv8').show(); });

$('#morediv9').hide();
$("#showdiv9").click(function() {
$('#morediv9').show(); });

$('#morediv10').hide();
$("#showdiv10").click(function() {
$('#morediv10').show(); });

$('select#typeofprint_1').on('change', function() {
 $('#price_1').val($("select#typeofprint_1 option:selected").attr('title'));
calculateline(1);
});

$('select#typeofprint_2').on('change', function() {
 $('#price_2').val($("select#typeofprint_2 option:selected").attr('title'));
calculateline(2);
});

$('select#typeofprint_3').on('change', function() {
 $('#price_3').val($("select#typeofprint_3 option:selected").attr('title'));
 calculateline(3);
});

$('select#typeofprint_4').on('change', function() {
 $('#price_4').val($("select#typeofprint_4 option:selected").attr('title'));
 calculateline(4);
});

$('select#typeofprint_5').on('change', function() {
 $('#price_5').val($("select#typeofprint_5 option:selected").attr('title'));
 calculateline(5);
});

$('select#typeofprint_6').on('change', function() {
 $('#price_6').val($("select#typeofprint_6 option:selected").attr('title'));
 calculateline(6);
});

$('select#typeofprint_7').on('change', function() {
 $('#price_7').val($("select#typeofprint_7 option:selected").attr('title'));
 calculateline(7);
});

$('select#typeofprint_8').on('change', function() {
 $('#price_8').val($("select#typeofprint_8 option:selected").attr('title'));
 calculateline(8);
});
	
$('select#typeofprint_9').on('change', function() {
 $('#price_9').val($("select#typeofprint_9 option:selected").attr('title'));
 calculateline(9);
});

$('select#typeofprint_10').on('change', function() {
 $('#price_10').val($("select#typeofprint_10 option:selected").attr('title'));
 calculateline(10);
});	
</script>

