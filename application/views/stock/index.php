

	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-8">
			<h1>المخزون</h1>
                <h2>
              <a class="nav-link" href="<?php echo base_url('stock/newc'); ?>">نوع جديد</a>
                </h2>
				  <h2>
              <a class="nav-link" href="<?php echo base_url('stock/newpur'); ?>">اضافة مشتريات</a>
                </h2>
				
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>النوع</th>
						<th>سعر البيع </th>
						<th>مشتريات</th>
					    <th>مبيعات</th>
                       <th>المخزون</th>
					     <th></th>
                    </tr>
                </thead>
                <tbody id="show_data">
        <?php foreach ($stock as $stock_item): ?>
		<tr>
				<td>
					<?php echo $stock_item['stockid']; ?>
				</td>
				<td>
					<?php echo $stock_item['stockname']; ?>
				</td>
				<td>
					<?php echo $stock_item['sell']; ?>
				</td>
				<td>
					<?php  echo $stock_item['sin']; ?>
				</td>
				<td>
					<?php  echo number_format($stock_item['sout'], 2, '.', ''); ?>
				</td>
				<td>
					<?php  echo $stock_item['sin']-$stock_item['sout']; ?>
				</td>
				<td>
					<?php echo "<a href='". site_url('stock/edit/'.$stock_item['stockid'])." '  class='btn btn-primary'>تعديل</a>";
					?>
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


