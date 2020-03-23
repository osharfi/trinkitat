
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-6">
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('stock/newc'); ?>			 
 <div class="form-group">
 <br>
    <label for="stockname">الاسم</label>
    <input type="text" class="form-control"  name="stockname" id="stockname"  value="<?php echo set_value('stockname'); ?>" >
  </div>
  			 
    <div class="form-group">
    <label for="stockid">الكود</label>
    <input type="text" class="form-control"  name="stockid" id="stockid"  value="<?php echo set_value('stockid'); ?>" >
  </div>
  
  
  <div class="form-group">
    <label for="buy">سعر الشراء</label>
    <input type="text" class="form-control"  name="buy" id="buy"  value="<?php echo set_value('buy'); ?>" >
  </div>
  
  <div class="form-group">
    <label for="sell">سعر البيع</label>
    <input type="text" class="form-control"  name="sell" id="sell"  value="<?php echo set_value('sell'); ?>" >
  </div>
  
  
   <div class="form-group">
    <label for="sec">عرض البيع</label>
 
  <select name="sec" id="sec" class="chosen-select" value="<?php echo set_value('sec'); ?>" >
  <option value="">غير معروض</option> 
<option value="1">معروض</option>

</select>
</div>

  
  <input type="submit" value="اضافة" class="btn btn-primary" />
  
     <!-- <button type="button" type="submit" id="" class="btn btn-primary">Submit</button> --> 
</form>
        <!--END MODAL ADD--> 
            </div> 
        </div>
    </div>    


