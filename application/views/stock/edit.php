
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-6">
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('stock/edit/'.$stock['stockid']); ?>			 
 
  <div class="form-group">
 <br>
    <label for="stockid">كود</label>
    <input type="text" class="form-control"  name="stockid" id="stockid"  value="<?php echo set_value('stockid', $stock['stockid']); ?>" readonly >
  </div>
  
 <div class="form-group">
 <br>
    <label for="stockname">الاسم</label>
    <input type="text" class="form-control"  name="stockname" id="stockname"  value="<?php echo set_value('stockname', $stock['stockname']); ?>" >
  </div>
  
  <div class="form-group">
    <label for="buy">سعر الشراء</label>
    <input type="text" class="form-control"  name="buy" id="buy"  value="<?php echo set_value('buy', $stock['buy']); ?>" >
  </div>  
  
  <div class="form-group">
    <label for="sell">سعر البيع</label>
    <input type="text" class="form-control"  name="sell" id="sell"  value="<?php echo set_value('sell', $stock['sell']); ?>" >
  </div>
  
  
  <input type="submit" value="تعديل" class="btn btn-primary" />
  
     <!-- <button type="button" type="submit" id="" class="btn btn-primary">Submit</button> --> 
</form>
 <br>
 <br>

        <!--END MODAL ADD--> 
            </div> 
        </div>
    </div>    


