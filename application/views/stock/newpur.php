
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('stock/newpur'); ?>			 
 <div class="form-group">
    <label for="supplier">المورد</label>
 
  <select name="supplier" id="supplier" class="chosen-select" >
  <option value="">المورد</option>
<?php
foreach($supplier as $supplier)
{
    ?>
    <option value="<?=$supplier['accno']?>" title="<?=$supplier['accname']?>"><?=$supplier['accname']." ".$supplier['accno']?></option>
    <?php
}
?>
</select>

<input type="text"  name="accname" id="accname" hidden /> 

</div>

<div class="form-group">
    <label for="total">الجملة</label>
<input type="text"  name="total" id="total" /> 
</div>

<div class="form-group">
    <label for="total">البيان</label>
<input type="text"  name="statement" id="statement" /> 
</div>
 
<div class="form-group form-inline">
<select name="typeofprint_1" id="typeofprint_1" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock_1) { ?>
    <option value="<?=$stock_1['stockid']?>"  ><?=$stock_1['stockname']?></option>
<? } ?>
</select>
<span class="add-on"><i>الكمية</i></span>
<input type="text"  name="quantity_1" id="quantity_1" />
<a href="javascript:void(0);"  id = "showdiv_1" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a>
</div>  
  
<div id="morediv_2">	  
<div class="form-group form-inline">
<select name="typeofprint_2" id="typeofprint_2" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock_2) { ?>
    <option value="<?=$stock_2['stockid']?>"  ><?=$stock_2['stockname']?></option>
<? } ?>
</select>
<span class="add-on"><i>الكمية</i></span>
<input type="text"  name="quantity_2" id="quantity_2" />
<a href="javascript:void(0);"  id = "showdiv_2" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="morediv_3">	  
<div class="form-group form-inline">
<select name="typeofprint_3" id="typeofprint_3" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock_3) { ?>
    <option value="<?=$stock_3['stockid']?>"  ><?=$stock_3['stockname']?></option>
<? } ?>
</select>
<span class="add-on"><i>الكمية</i></span>
<input type="text"  name="quantity_3" id="quantity_3" />
<a href="javascript:void(0);"  id = "showdiv_3" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="morediv_4">	  
<div class="form-group form-inline">
<select name="typeofprint_4" id="typeofprint_4" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock_4) { ?>
    <option value="<?=$stock_4['stockid']?>"  ><?=$stock_4['stockname']?></option>
<? } ?>
</select>
<span class="add-on"><i>الكمية</i></span>
<input type="text"  name="quantity_4" id="quantity_4" />
<a href="javascript:void(0);"  id = "showdiv_4" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="morediv_5">	  
<div class="form-group form-inline">
<select name="typeofprint_5" id="typeofprint_5" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock_5) { ?>
    <option value="<?=$stock_5['stockid']?>"  ><?=$stock_5['stockname']?></option>
<? } ?>
</select>
<span class="add-on"><i>الكمية</i></span>
<input type="text"  name="quantity_5" id="quantity_5" />
<a href="javascript:void(0);"  id = "showdiv_5" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="morediv_6">	  
<div class="form-group form-inline">
<select name="typeofprint_6" id="typeofprint_6" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock_6) { ?>
    <option value="<?=$stock_6['stockid']?>"  ><?=$stock_6['stockname']?></option>
<? } ?>
</select>
<span class="add-on"><i>الكمية</i></span>
<input type="text"  name="quantity_6" id="quantity_6" />
<a href="javascript:void(0);"  id = "showdiv_6" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="morediv_7">	  
<div class="form-group form-inline">
<select name="typeofprint_7" id="typeofprint_7" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock_7) { ?>
    <option value="<?=$stock_7['stockid']?>"  ><?=$stock_7['stockname']?></option>
<? } ?>
</select>
<span class="add-on"><i>الكمية</i></span>
<input type="text"  name="quantity_7" id="quantity_7" />
<a href="javascript:void(0);"  id = "showdiv_7" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="morediv_8">	  
<div class="form-group form-inline">
<select name="typeofprint_8" id="typeofprint_8" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock_8) { ?>
    <option value="<?=$stock_8['stockid']?>"  ><?=$stock_8['stockname']?></option>
<? } ?>
</select>
<span class="add-on"><i>الكمية</i></span>
<input type="text"  name="quantity_8" id="quantity_8" />
<a href="javascript:void(0);"  id = "showdiv_8" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="morediv_9">	  
<div class="form-group form-inline">
<select name="typeofprint_9" id="typeofprint_9" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock_9) { ?>
    <option value="<?=$stock_9['stockid']?>"  ><?=$stock_9['stockname']?></option>
<? } ?>
</select>
<span class="add-on"><i>الكمية</i></span>
<input type="text"  name="quantity_9" id="quantity_9" />
<a href="javascript:void(0);"  id = "showdiv_9" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="morediv_10">	  
<div class="form-group form-inline">
<select name="typeofprint_10" id="typeofprint_10" class="chosen-select"  style="width: 200px;" ><option value="">النوع</option>
<? foreach($stock as $stock_10) { ?>
    <option value="<?=$stock_10['stockid']?>"  ><?=$stock_10['stockname']?></option>
<? } ?>
</select>
<span class="add-on"><i>الكمية</i></span>
<input type="text"  name="quantity_10" id="quantity_10" />
</div> 
</div> 

<h2>الدفعيات</h2>
  
<div class="form-group form-inline">
<select name="accn_1" id="accn_1" class="chosen-select"  style="width: 200px;" ><option value="">الحساب</option>
<? foreach($accn as $accn_1) { ?>
    <option value="<?=$accn_1['accno']?>"><?=$accn_1['accname']." ".$accn_1['accno']?></option>
<? } ?>
</select>
<span class="add-on"><i>المبلغ</i></span>
<input type="text"  name="amnt_1" id="amnt_1" />

<span class="add-on"><i>رقم الشيك</i></span>
<input type="text"  name="chqn_1" id="chqn_1" /><span class="add-on"><i>التاريخ</i></span>
<input type="date"  name="date_1" id="date_1" />
<a href="javascript:void(0);"  id = "showdivp_1" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 


<div id="moredivp_2">	  
<div class="form-group form-inline">
<select name="accn_2" id="accn_2" class="chosen-select"  style="width: 200px;" ><option value="">الحساب</option>
<? foreach($accn as $accn_2) { ?>
    <option value="<?=$accn_2['accno']?>"><?=$accn_2['accname']." ".$accn_2['accno']?></option>
<? } ?>
</select>
<span class="add-on"><i>المبلغ</i></span>
<input type="text"  name="amnt_2" id="amnt_2" />

<span class="add-on"><i>رقم الشيك</i></span>
<input type="text"  name="chqn_2" id="chqn_2" /><span class="add-on"><i>التاريخ</i></span>
<input type="date"  name="date_2" id="date_2" />
<a href="javascript:void(0);"  id = "showdivp_2" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="moredivp_3">	  
<div class="form-group form-inline">
<select name="accn_3" id="accn_3" class="chosen-select"  style="width: 200px;" ><option value="">الحساب</option>
<? foreach($accn as $accn_3) { ?>
    <option value="<?=$accn_3['accno']?>"><?=$accn_3['accname']." ".$accn_3['accno']?></option>
<? } ?>
</select>
<span class="add-on"><i>المبلغ</i></span>
<input type="text"  name="amnt_3" id="amnt_3" />

<span class="add-on"><i>رقم الشيك</i></span>
<input type="text"  name="chqn_3" id="chqn_3" /><span class="add-on"><i>التاريخ</i></span>
<input type="date"  name="date_3" id="date_3" />
<a href="javascript:void(0);"  id = "showdivp_3" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="moredivp_4">	  
<div class="form-group form-inline">
<select name="accn_4" id="accn_4" class="chosen-select"  style="width: 200px;" ><option value="">الحساب</option>
<? foreach($accn as $accn_4) { ?>
    <option value="<?=$accn_4['accno']?>"><?=$accn_4['accname']." ".$accn_4['accno']?></option>
<? } ?>
</select>
<span class="add-on"><i>المبلغ</i></span>
<input type="text"  name="amnt_4" id="amnt_4" />

<span class="add-on"><i>رقم الشيك</i></span>
<input type="text"  name="chqn_4" id="chqn_4" /><span class="add-on"><i>التاريخ</i></span>
<input type="date"  name="date_4" id="date_4" />
<a href="javascript:void(0);"  id = "showdivp_4" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="moredivp_5">	  
<div class="form-group form-inline">
<select name="accn_5" id="accn_5" class="chosen-select"  style="width: 200px;" ><option value="">الحساب</option>
<? foreach($accn as $accn_5) { ?>
    <option value="<?=$accn_5['accno']?>"><?=$accn_5['accname']." ".$accn_5['accno']?></option>
<? } ?>
</select>
<span class="add-on"><i>المبلغ</i></span>
<input type="text"  name="amnt_5" id="amnt_5" />

<span class="add-on"><i>رقم الشيك</i></span>
<input type="text"  name="chqn_5" id="chqn_5" /><span class="add-on"><i>التاريخ</i></span>
<input type="date"  name="date_5" id="date_5" />
<a href="javascript:void(0);"  id = "showdivp_5" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="moredivp_6">	  
<div class="form-group form-inline">
<select name="accn_6" id="accn_6" class="chosen-select"  style="width: 200px;" ><option value="">الحساب</option>
<? foreach($accn as $accn_6) { ?>
    <option value="<?=$accn_6['accno']?>"><?=$accn_6['accname']." ".$accn_6['accno']?></option>
<? } ?>
</select>
<span class="add-on"><i>المبلغ</i></span>
<input type="text"  name="amnt_6" id="amnt_6" />

<span class="add-on"><i>رقم الشيك</i></span>
<input type="text"  name="chqn_6" id="chqn_6" /><span class="add-on"><i>التاريخ</i></span>
<input type="date"  name="date_6" id="date_6" />
<a href="javascript:void(0);"  id = "showdivp_6" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="moredivp_7">	  
<div class="form-group form-inline">
<select name="accn_7" id="accn_7" class="chosen-select"  style="width: 200px;" ><option value="">الحساب</option>
<? foreach($accn as $accn_7) { ?>
    <option value="<?=$accn_7['accno']?>"><?=$accn_7['accname']." ".$accn_7['accno']?></option>
<? } ?>
</select>
<span class="add-on"><i>المبلغ</i></span>
<input type="text"  name="amnt_7" id="amnt_7" />

<span class="add-on"><i>رقم الشيك</i></span>
<input type="text"  name="chqn_7" id="chqn_7" /><span class="add-on"><i>التاريخ</i></span>
<input type="date"  name="date_7" id="date_7" />
<a href="javascript:void(0);"  id = "showdivp_7" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="moredivp_8">	  
<div class="form-group form-inline">
<select name="accn_8" id="accn_8" class="chosen-select"  style="width: 200px;" ><option value="">الحساب</option>
<? foreach($accn as $accn_8) { ?>
    <option value="<?=$accn_8['accno']?>"><?=$accn_8['accname']." ".$accn_8['accno']?></option>
<? } ?>
</select>
<span class="add-on"><i>المبلغ</i></span>
<input type="text"  name="amnt_8" id="amnt_8" />

<span class="add-on"><i>رقم الشيك</i></span>
<input type="text"  name="chqn_8" id="chqn_8" /><span class="add-on"><i>التاريخ</i></span>
<input type="date"  name="date_8" id="date_8" />
<a href="javascript:void(0);"  id = "showdivp_8" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="moredivp_9">	  
<div class="form-group form-inline">
<select name="accn_9" id="accn_9" class="chosen-select"  style="width: 200px;" ><option value="">الحساب</option>
<? foreach($accn as $accn_9) { ?>
    <option value="<?=$accn_9['accno']?>"><?=$accn_9['accname']." ".$accn_9['accno']?></option>
<? } ?>
</select>
<span class="add-on"><i>المبلغ</i></span>
<input type="text"  name="amnt_9" id="amnt_9" />

<span class="add-on"><i>رقم الشيك</i></span>
<input type="text"  name="chqn_9" id="chqn_9" /><span class="add-on"><i>التاريخ</i></span>
<input type="date"  name="date_9" id="date_9" />
<a href="javascript:void(0);"  id = "showdivp_9" class="btn-sm btn-secondary"><i class="icon-remove icon-white"></i>اضافة</a></div> 
</div> 

<div id="moredivp_10">	  
<div class="form-group form-inline">
<select name="accn_10" id="accn_10" class="chosen-select"  style="width: 200px;" ><option value="">الحساب</option>
<? foreach($accn as $accn_10) { ?>
    <option value="<?=$accn_10['accno']?>"><?=$accn_10['accname']." ".$accn_10['accno']?></option>
<? } ?>
</select>
<span class="add-on"><i>المبلغ</i></span>
<input type="text"  name="amnt_10" id="amnt_10" />

<span class="add-on"><i>رقم الشيك</i></span>
<input type="text"  name="chqn_10" id="chqn_10" /><span class="add-on"><i>التاريخ</i></span>
<input type="date"  name="date_10" id="date_10" />
</div> 
</div> 


 
  <input type="submit" value="اضافة" class="btn btn-primary" />
  
     <!-- <button type="button" type="submit" id="" class="btn btn-primary">Submit</button> --> 
</form>

<br><br><br>

        <!--END MODAL ADD--> 
            </div> 
        </div>
    </div>    

<script type="text/javascript" src="<?php echo base_url().'assets/js/chosen.jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/init.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/prism.js'?>"></script>

<script type="text/javascript">

$('select#supplier').on('change', function() {
 $('#accname').val($("select#supplier option:selected").attr('title'));

});	

$('#morediv_2').hide();
$("#showdiv_1").click(function() {
$('#morediv_2').show(); });

$('#morediv_3').hide();
$("#showdiv_2").click(function() {
$('#morediv_3').show(); });

$('#morediv_4').hide();
$("#showdiv_3").click(function() {
$('#morediv_4').show(); });

$('#morediv_5').hide();
$("#showdiv_4").click(function() {
$('#morediv_5').show(); });

$('#morediv_6').hide();
$("#showdiv_5").click(function() {
$('#morediv_6').show(); });

$('#morediv_7').hide();
$("#showdiv_6").click(function() {
$('#morediv_7').show(); });

$('#morediv_8').hide();
$("#showdiv_7").click(function() {
$('#morediv_8').show(); });

$('#morediv_9').hide();
$("#showdiv_8").click(function() {
$('#morediv_9').show(); });

$('#morediv_10').hide();
$("#showdiv_9").click(function() {
$('#morediv_10').show(); });

$('#moredivp_2').hide();
$("#showdivp_1").click(function() {
$('#moredivp_2').show(); });

$('#moredivp_3').hide();
$("#showdivp_2").click(function() {
$('#moredivp_3').show(); });

$('#moredivp_4').hide();
$("#showdivp_3").click(function() {
$('#moredivp_4').show(); });

$('#moredivp_5').hide();
$("#showdivp_4").click(function() {
$('#moredivp_5').show(); });

$('#moredivp_6').hide();
$("#showdivp_5").click(function() {
$('#moredivp_6').show(); });

$('#moredivp_7').hide();
$("#showdivp_6").click(function() {
$('#moredivp_7').show(); });

$('#moredivp_8').hide();
$("#showdivp_7").click(function() {
$('#moredivp_8').show(); });

$('#moredivp_9').hide();
$("#showdivp_8").click(function() {
$('#moredivp_9').show(); });

$('#moredivp_10').hide();
$("#showdivp_9").click(function() {
$('#moredivp_10').show(); });
</script>