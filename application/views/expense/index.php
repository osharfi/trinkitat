

	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-4">
			<h1>المصروفات</h1>
                <h2>
                    
              <a class="nav-link" href="<?php echo base_url('expense/newc'); ?>">مصروف جديد</a>
                </h2>
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                      
                       <th>التاريخ</th>
                       <th>المبلغ</th>
                       <th>الحساب</th>
					   <th>البند</th>
                    </tr>
                </thead>
                <tbody id="show_data">
        <?php foreach ($expense as $customer_item): ?>
		<tr>
				
				<td>
					<?php echo $customer_item['datetime']; ?>
				</td>
				<td>
					<?php echo $customer_item['amnt']; ?>
				</td>
				<td>
					<?php echo $customer_item['accname']; ?>
				</td>
				<td>
					<?php echo $customer_item['statement']; ?>
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


