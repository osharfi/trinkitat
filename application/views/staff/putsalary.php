
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-6">
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('staff/putsalary'); ?>			 
 <div class="form-group">
 <br>
    <label for="month">الشهر</label>
	<select name="month" id="month" class="chosen-select" >
  <option value="">الشهر</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
</select>
  
  
  </div>
  			 
  <div class="form-group">
    <label for="date">التاريخ</label>
    <input type="date" class="form-control"  name="date" id="date"  value="<?php echo set_value('date'); ?>" >
  </div>

  
  <input type="submit" value="اضافة" class="btn btn-primary" />
 <br>
 <br>
</form>
        <!--END MODAL ADD--> 
            </div> 
        </div>
    </div>    


