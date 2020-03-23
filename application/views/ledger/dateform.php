
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-6">
			بحث
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('ledger/viewdate'); ?>			 
 <div class="form-group">
 <br>
    <label for="sdate">التاريخ</label>
    <input type="date" class="form-control"  name="sdate" id="sdate"  value="<?php echo set_value('sdate'); ?>" required>
  </div>
  			 
    
  
  <input type="submit" value="بحث" class="btn btn-primary" />
   
</form>
        <!--END MODAL ADD--> 
            </div> 
        </div>
    </div>    


