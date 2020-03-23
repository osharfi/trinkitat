
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
                <tbody id="show_data">
        <?php
$total =0;
$i=0;
		foreach ($account as $customer_item): 
		$i++;?>
		<tr>
				<td>
					<?php echo $i; ?>
				</td>
				<td>
					<?php echo $customer_item['datetime']; ?>
				</td>
				<td>
					<?php echo $customer_item['statement']; ?>
				</td>
				<td>
					<?php echo $customer_item['amnt']; ?>
				</td>
				<td>
					<?php 
					$total = $total+$customer_item['amnt'];
					echo $total; ?>
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
		"pageLength": 50
		});

	});

</script>


