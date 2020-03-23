

	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
			
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                       <th>ID</th>
                       <th>التاريخ</th>
					   <th>البند</th>
                       <th>المبلغ</th>
                       <th>الرصيد</th>					   
                    </tr>
                </thead>
					<?php	if (!empty($account)): ?>

                <tbody id="show_data">
				<tr>
			<td></td><td></td><td>
			رصيد ما قبل
			</td>
				<td></td>
				<td><?php echo -$account[0]['pretotal']; ?></td>
		</tr>
        <?php
$total =$account[0]['pretotal'];
$i=1;
		foreach ($account as $customer_item): ?>
		<tr>
				<td>
					<?php echo $i;
					$i++;
					?>
				</td>
				<td>
					<?php echo $customer_item['datetime']; ?>
				</td>
				<td>
					<?php echo $customer_item['statement']; ?>
				</td>
				<td>
					<?php echo -1*$customer_item['amnt']; ?>
				</td>
				<td>
					<?php 
					$total = $total+$customer_item['amnt'];
					echo -$total; ?>
				</td>
			

		</tr>
		<?php endforeach; ?>
		
				 <?endif;?>

                </tbody>
            </table>
        </div>
    </div>
	
	
	
        	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>
		<script type="text/javascript">
	$(document).ready(function(){

		$('#mydata').dataTable({ 
		  "pageLength": 50,
		  "order": [[ 0, "desc" ]]
		});
	});

</script>


