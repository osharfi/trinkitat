
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-6">
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('staff/newc'); ?>			 
 <div class="form-group">
 <br>
    <label for="name">الاسم</label>
    <input type="text" class="form-control"  name="name" id="name"  value="<?php echo set_value('name'); ?>" >
  </div>
  			 
  <div class="form-group">
    <label for="phone">الهاتف</label>
    <input type="phone" class="form-control"  name="phone" id="phone"  value="<?php echo set_value('phone'); ?>" >
  </div>
  
  <div class="form-group">
    <label for="position">الوظيفة</label>
    <input type="text" class="form-control"  name="position" id="position"  value="<?php echo set_value('position'); ?>" >
  </div>
  
  <div class="form-group">
    <label for="certificate">المؤهل</label>
    <input type="text" class="form-control"  name="certificate" id="certificate"  value="<?php echo set_value('certificate'); ?>" >
  </div>
  
   <div class="form-group">
    <label for="salary">  المرتب الاساسي</label>
    <input type="text" class="form-control"  name="salary" id="salary"  value="<?php echo set_value('salary'); ?>" >
  </div>
  
   <div class="form-group">
    <label for="transport">بدل ترحيل</label>
    <input type="text" class="form-control"  name="transport" id="transport"  value="<?php echo set_value('transport'); ?>" >
  </div>
  
   <div class="form-group">
    <label for="living">بدل سكن</label>
    <input type="text" class="form-control"  name="living" id="living"  value="<?php echo set_value('living'); ?>" >
  </div>
  
   <div class="form-group">
    <label for="bonus">حافز فني </label>
    <input type="text" class="form-control"  name="bonus" id="bonus"  value="<?php echo set_value('bonus'); ?>" >
  </div>
  
  <div class="form-group">
    <label for="account">الحساب</label>
    <input type="text" class="form-control"  name="account" id="account"  value="<?php echo set_value('account'); ?>" >
  </div>
  
  <input type="submit" value="اضافة" class="btn btn-primary" />
 <br>
 <br>
</form>
        <!--END MODAL ADD--> 
            </div> 
        </div>
    </div>    


