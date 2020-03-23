
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-6">
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('user/newc'); ?>			 
 <div class="form-group">
 <br>
    <label for="username">الاسم</label>
    <input type="text" class="form-control"  name="username" id="username"  value="<?php echo set_value('username'); ?>" >
  </div>
  			 
    <div class="form-group">
    <label for="upassword">الرقم</label>
    <input type="upassword" class="form-control"  name="upassword" id="upassword"  value="<?php echo set_value('upassword'); ?>" >
  </div>
  
  <input type="submit" value="اضافة" class="btn btn-primary" />
   
</form>
        <!--END MODAL ADD--> 
            </div> 
        </div>
    </div>    


