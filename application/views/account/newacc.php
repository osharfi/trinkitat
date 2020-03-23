
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-6">
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('account/newacc'); ?>	

 <div class="form-group">
    <label for="par">الرئيسي الحساب</label>
  <select name="par" id="par" class="chosen-select" >
  <option value="">الحساب</option>
<?php foreach($account as $account1) { ?>
    <option value="<?=$account1['accno']?>" title="<?=$account1['par']?>"><?=$account1['accname']?></option>
    <?php } ?>
</select>	
	</div>
		 
 <div class="form-group">
 <br>
    <label for="accname">اسم الحساب</label>
    <input type="text" class="form-control"  name="accname" id="accname"  value="<?php echo set_value('accname'); ?>" required>
  </div>
  			 
    <div class="form-group">
    <label for="accno">رقم الحساب</label>
    <input type="text" class="form-control"  name="accno" id="accno"  value="<?php echo set_value('accno'); ?>" required>
  </div>
  
  <input type="submit" value="اضافة" class="btn btn-primary" />
   
</form>
        <!--END MODAL ADD--> 
            </div> 
        </div>
    </div>    
	<script type="text/javascript" src="<?php echo base_url().'assets/js/chosen.jquery.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/init.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/prism.js'?>"></script>
