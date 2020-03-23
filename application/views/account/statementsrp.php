
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
			               <!-- MODAL ADD -->
<?php echo validation_errors(); ?>
<?php echo form_open('account/statementsrp'); ?>
<div class="row form-inline">	
 <div class="form-group">
    <label for="acc"> الحساب </label>
  <select name="acc" id="acc" class="chosen-select" >
  <option value="">الحساب</option>
<?php foreach($accountlst as $account1) { ?>
    <option value="<?=$account1['accno']?>" title="<?=$account1['par']?>"><?=$account1['accname'].'::'.$account1['accno']?></option>
    <?php } ?>
</select>	

  <input type="text" class="form-control"  name="accname" id="accname" value="<?php echo set_value('accname'); ?>"  hidden>

  </div>
 <div class="form-group">
    <label for="sdate"> من </label> 
  <input type="date" class="form-control"  name="sdate" id="sdate" value="<?php echo set_value('sdate'); ?>"  >
     </div>
  <div class="form-group">
      <label for="edate"> الى </label> 
  <input type="date" class="form-control"  name="edate" id="edate" value="<?php echo set_value('edate'); ?>"  >
   </div>
 
  <input type="submit" value=" عرض " class="btn btn-primary" />
</form>
<br>
<br>
   </div>
            </div>
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                       <th>حساب</th>
                       <th><?php echo set_value('accname');?></th>
					   <th>	<?php echo set_value('sdate');?></th>
                       <th><?php echo set_value('edate');?></th>
                       <th></th>					   
                    </tr>
					<tr>
                       <th>ID</th>
                       <th>التاريخ</th>
					   <th>الحساب</th>
					   <th>البند</th>
                       <th></th>
					   <th></th>
                       <th>الرصيد</th>					   
                    </tr>
				
                </thead>
                <tbody id="show_data">
								<tr>
			<td></td><td></td><td>
			رصيد ما قبل
			</td>
				<td></td>
				<td></td>
				<td><?php
		if (!empty($account)):
				echo $account[0]['pretotal']; ?></td>
		</tr>
        <?php
		$total =0;
		$i=0;
		$total = $account[0]['pretotal'];?>

		<?php foreach ($account as $account_item): 
		$i++;
		?>
		<tr>
				<td>
					<?php echo $i; ?>
				</td>
				<td>
					<?php echo $account_item['datetime']; ?>
				</td>
				<td>
					<?php echo $account_item['acc']; ?>
				</td>
				<td>
					<?php echo $account_item['statement']; ?>
				</td>
				<td>
				

					<?php
					if ($account_item['amnt'] < 0)
					echo $account_item['amnt'];
					?>
				</td>
				<td>
					<?php
					if ($account_item['amnt'] > 0)
					echo $account_item['amnt']; ?>
				</td>
				<td>
					<?php 
					$total = $total+$account_item['amnt'];
					echo $total; ?>
				</td>

		</tr>
		<?php endforeach;?>

		 <?endif;?>
                </tbody>
            </table>
        </div>
    </div>
	
 <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/chosen.jquery.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/init.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/prism.js'?>"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#mydata').dataTable({ 
		"order": [[ 0, "desc" ]], 
		"pageLength": 50
		});
	});
	
$('select#acc').on('change', function() {
 //$('#par').val($("select#acc option:selected").attr('title'));
  $('#accname').val($("select#acc option:selected").text());

});

</script>




