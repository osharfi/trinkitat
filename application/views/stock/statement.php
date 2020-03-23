

	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
			<h1>حساب العميل </h1>
         
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>الاسم</th>
                        <th>الهاتف</th>
                       <th></th>
                    </tr>
                </thead>
                <tbody id="show_data">
        <?php foreach ($stock_item as $stock_item): ?>
		<tr>
				<td>
					<?php echo $stock_item['datetime']; ?>
				</td>
				<td>
					<?php echo $stock_item['acc']; ?>
				</td>
				<td>
					<?php echo $stock_item['par']; ?>
				</td>
				
				<td>
					<?php echo $stock_item['amnt']; ?>

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


