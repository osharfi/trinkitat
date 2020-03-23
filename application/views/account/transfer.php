
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-6">
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('account/transfer'); ?>	

 <div class="form-group">
    <label for="credit">الحساب الدائن</label>
  <select name="credit" id="credit" class="chosen-select" >
  <option value="">الحساب</option>
<?php foreach($account as $account1) { ?>
    <option value="<?=$account1['accno']?>" title="<?=$account1['par']?>"><?=$account1['accname'].'::'.$account1['accno']?></option>
    <?php } ?>
</select>	
  </div>
  
  <div class="form-group">
    <label for="debit">الحساب المدين</label>
  <select name="debit" id="debit" class="chosen-select" >
  <option value="">الحساب</option>
<?php foreach($account as $account2) { ?>
    <option value="<?=$account2['accno']?>" title="<?=$account2['par']?>"><?=$account2['accname'].'::'.$account2['accno']?></option>
    <?php } ?>
</select>	
  </div>
  
   <div class="form-group">
      <label for="edate">اخياري-  التاريخ </label> 
  <input type="date" class="form-control"  name="tdate" id="tdate" value="<?php echo set_value('tdate'); ?>"  >
   </div>
		 
 <div class="form-group">
 <br>
    <label for="fullname">بيان</label>
    <input type="text" class="form-control"  name="statement" id="statement"  value="<?php echo set_value('statement'); ?>" required>
  </div>
  			 
    <div class="form-group">
    <label for="amnt">المبلغ</label>
    <input type="text" class="form-control"  name="amnt" id="amnt" style="width: 100px;" value="<?php echo set_value('amnt'); ?>" required>
  </div>
  
  <input type="text" class="form-control"  name="creditpar" id="creditpar" value="<?php echo set_value('creditpar'); ?>"  hidden>
  <input type="text" class="form-control"  name="debitpar" id="debitpar"  value="<?php echo set_value('debitpar'); ?>" hidden>
    <input type="text" class="form-control"  name="creditnm" id="creditnm" value="<?php echo set_value('creditnm'); ?>"  hidden>
  <input type="text" class="form-control"  name="debitnm" id="debitnm"  value="<?php echo set_value('debitnm'); ?>" hidden>
  
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

$('select#credit').on('change', function() {
 $('#creditpar').val($("select#credit option:selected").attr('title'));
 $('#creditnm').val($("select#credit option:selected").text());
});

$('select#debit').on('change', function() {
 $('#debitpar').val($("select#debit option:selected").attr('title'));
  $('#debitnm').val($("select#debit option:selected").text());
});

</script>