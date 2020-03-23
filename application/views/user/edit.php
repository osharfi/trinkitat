
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-6">
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('user/edit/'.$user['user_id']); ?>			 
 <div class="form-group">
 

    <input type="text" class="form-control"  name="id" id="id"  value="<?php echo set_value('id', $user['user_id']); ?>" hidden>
	
 <br>
    <label for="username">الاسم</label>
    <input type="text" class="form-control"  name="username" id="username"  value="<?php echo set_value('username', $user['user_name']); ?>" readonly >
  </div>
  			 
    <div class="form-group">
    <label for="upassword">كلمة المرور</label>
    <input type="password" class="form-control"  name="upassword" id="upassword"  value="<?php echo set_value('upassword'); ?>" >
  </div>
  
  <input type="submit" value="تعديل" class="btn btn-primary" />
   
</form>
        <!--END MODAL ADD--> 
            </div> 
        </div>
    </div>    


