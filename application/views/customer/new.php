
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-6">
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('customer/newc'); ?>			 
 <div class="form-group">
 <br>
    <label for="fullname">الاسم</label>
    <input type="text" class="form-control"  name="fullname" id="fullname"  value="<?php echo set_value('fullname'); ?>" >
  </div>
  			 
    <div class="form-group">
    <label for="phone">الرقم</label>
    <input type="phone" class="form-control"  name="phone" id="phone"  value="<?php echo set_value('phone'); ?>" >
  </div>
  
  <input type="submit" value="اضافة" class="btn btn-primary" />
   
</form>
        <!--END MODAL ADD--> 
            </div> 
        </div>
    </div>    


