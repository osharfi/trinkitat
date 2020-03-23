	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-2">
			<h1>حساب الموظف</h1>
                <h2>
				    <?php
					if (!empty($staff)) {
     echo $staff[0]['name']; }   
   ?>
                </h2>
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
					    <th></th>
                        <th>التاريخ</th>						
						<th>المبلغ</th>
						<th>البيان</th>
                        <th>الرصيد</th>
                    </tr>
                </thead>
                <tbody id="show_data">
        <?php 
		$ttotal = 0;
		$i = 0;
		foreach ($staff as $staff_item): 
		$ttotal = $ttotal + $staff_item['amnt'];
				$i++; ?>
		<tr>
				<td>
					<?php echo $i; ?>
				</td>
				<td>
					<?php echo $staff_item['datetime']; ?>
				</td>
				<td>
					<?php echo $staff_item['amnt']; ?>
				</td>
				<td>
				<?php echo $staff_item['statement']; ?>
				</td>
				<td>
					<?php echo $ttotal; ?>
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
		"order": [[0, "desc"]], 
		  "pageLength": 100

		});
		
		});

</script>