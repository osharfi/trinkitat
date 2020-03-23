
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-6">
               <!-- MODAL ADD -->
          
<?php echo validation_errors(); ?>

<?php echo form_open('ledger/edit/'.$ledger['id']); ?>			 
 <br>
 <div class="form-group">
 
    <input type="text" class="form-control"  name="id" id="id"  value="<?php echo set_value('id', $ledger['id']); ?>" hidden>
    <label for="acc">الحساب</label>
    <input type="text" class="form-control"  name="acc" id="acc"  value="<?php echo set_value('acc', $ledger['acc']); ?>" required>
  </div>
  			 
    <div class="form-group">
    <label for="par">الحساب الرئيسي</label>
    <input type="text" class="form-control"  name="par" id="par"  value="<?php echo set_value('par', $ledger['par']); ?>" required>
  </div>
  
   <div class="form-group">
    <label for="amnt">المبلغ</label>
    <input type="text" class="form-control"  name="amnt" id="amnt"  value="<?php echo set_value('amnt', $ledger['amnt']); ?>" required>
  </div>
  
   <div class="form-group">
    <label for="datetime">التاريخ</label>
    <input type="text" class="form-control"  name="datetime" id="datetime"  value="<?php echo set_value('datetime', $ledger['datetime']); ?>" required>
  </div>
  
   <div class="form-group">
    <label for="statement">البيان</label>
    <input type="text" class="form-control"  name="statement" id="statement"  value="<?php echo set_value('statement', $ledger['statement']); ?>" required>
  </div>
  
  <input type="submit" value="تعديل" class="btn btn-primary" />
   
</form>
        <!--END MODAL ADD--> 
            </div> 
        </div>
    </div>    


