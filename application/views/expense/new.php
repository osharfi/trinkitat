
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-6">
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('expense/newc'); ?>	

 <div class="form-group">
<select name="acc" id="acc" class="chosen-select" ><option value="">البند</option><option value="311">الكهرباء والمياه</option><option value="312">ادوات مكتبية</option><option value="313">ضيافة</option><option value="314">مردودات</option><option value="315">مطبوعات</option><option value="316">حوافز</option><option value="317">م نظافة</option><option value="318">	انترنت اتصالات</option><option value="319">صيانة عامه</option><option value="3110">صيانة اجهزةومعدات</option><option value="3111">صيانة اندور</option><option value="3112">صيانة اوتدور</option><option value="3113">ترحيل</option><option value="3114"> ايجارات</option><option value="3115"> مصروفات بنكية</option><option value="3116"> اهلاك</option><option value="3117"> ديون هالك</option></select>
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
