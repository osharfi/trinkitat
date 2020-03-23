
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-6">
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('register'); ?>			 
 <div class="form-group">
    <label for="fullname">Full name:</label>
    <input type="text" class="form-control"  name="fullname" id="fullname"  value="<?php echo set_value('fullname'); ?>" required>
  </div>
  			 
    <div class="form-group">
    <label for="phone">Phone number:</label>
    <input type="phone" class="form-control"  name="phone" id="phone"  value="<?php echo set_value('phone'); ?>" required>
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control"  name="email" id="email"  value="<?php echo set_value('email'); ?>" required>
  </div>
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control"  name="username" id="username"  value="<?php echo set_value('username'); ?>" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control"  name="pwd" id="pwd"  value="<?php echo set_value('pwd'); ?>" required>
  </div>
  
   <div class="form-group">
    <label for="pwd">Password Confirm:</label>
    <input type="password" class="form-control"  name="passconf" id="passconf"  value="<?php echo set_value('passconf'); ?>" required>
  </div>
  <input type="submit" value="Submit" class="btn btn-primary" />
  
     <!-- <button type="button" type="submit" id="" class="btn btn-primary">Submit</button> --> 
</form>
        <!--END MODAL ADD--> 
            </div> 
        </div>
    </div>    


