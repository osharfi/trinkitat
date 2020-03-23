
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-6">
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('expense2/newc'); ?>	

 <div class="form-group">
<select name="acc" id="acc" class="chosen-select" ><option value="">البند</option><option value="321">الكهرباء والمياه</option><option value="322">ادوات مكتبية</option><option value="323">ضيافة</option><option value="324">مردودات</option><option value="325">مطبوعات</option><option value="326">حوافز</option><option value="327">م نظافة</option><option value="328">	انترنت اتصالات</option><option value="329">صيانة عامه</option><option value="3210">صيانة اجهزةومعدات</option><option value="3211">صيانة اندور</option><option value="3212">صيانة اوتدور</option><option value="3213">ترحيل</option><option value="3214"> ايجارات</option><option value="3215"> مصروفات بنكية</option><option value="3216"> اهلاك</option><option value="3217">ديون هالك</option><option value="3218">مصروفات ليزر </option></select>
</div>
	
	
<div class="form-group">
    <label for="amnt">المبلغ</label>
    <input type="text" class="form-control"  name="amnt" id="amnt" style="width: 100px;" value="<?php echo set_value('amnt'); ?>" required>
  </div>
  
   <div class="form-group  form-inline">
    <label class="radio-inline"><input type="radio" value="1" name="pmethod" checked>كاش</label>
	<label class="radio-inline"><input type="radio" value="2" name="pmethod">بنك</label>
	 <div id="cheqnod">
    <label for="cheqno">-رقم الشيك-
    <input type="text" class="form-control"  name="cheqno" id="cheqno"  ></label>
  </div>
  </div>
  
 <div class="form-group">
    <label for="fullname">بيان</label>
    <input type="text" class="form-control"  name="statement" id="statement"  value="<?php echo set_value('statement'); ?>" >
  </div>
  			 

  
  <input type="submit" value="اضافة" class="btn btn-primary" />
   
</form>
 <br>
 <br>

        <!--END MODAL ADD--> 
            </div> 
        </div>
    </div>    
	<script type="text/javascript" src="<?php echo base_url().'assets/js/chosen.jquery.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/init.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/prism.js'?>"></script>
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

	
