

	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="row">
			<h1>الحسابات</h1>
               
			   <p><a class="btn btn-dark" href="<?php echo base_url('account/newacc'); ?>">حساب جديد</a></p>
<p><a class="btn btn-primary" href="<?php echo base_url('account/incomestatement'); ?>">قائمة الدخل</a></p>
   <p><a class="btn btn-dark" href="<?php echo base_url('account/statementsr'); ?>">كشف حساب </a></p>
<p><a class="btn btn-primary" href="<?php echo base_url('account/statementsrp'); ?>"> كشف حساب رئيسي</a></p>
            </div>
			
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                    
					   <th>رقم الحساب</th>
                       <th>اسم الحساب</th>
                       <th>الرئيسي</th>
                       <th>الرصيد</th>
                    </tr>
                </thead>
                <tbody id="show_data">
        <?php foreach ($account as $account_item): ?>
		<tr>
				<td>
					<?php echo $account_item['accno']; ?>
				</td>
				<td>
					<?php  echo "<a href='". site_url('account/statement/'.$account_item['id'])." '> ".$account_item['accname']." </a>";
					?>					
				</td>
				<td>
					<?php echo $account_item['parent']; ?>
				</td>
				<td>
					<?php echo $account_item['balance']; ?>
				</td>
				
			

		</tr>
		<?php endforeach; ?>
                </tbody>
            </table>
			


        </div>
    </div>
	
	
	
        	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>
		<script type="text/javascript">
	$(document).ready(function(){

		$('#mydata').dataTable({ 
		  "pageLength": 50
		});
	});

</script>


