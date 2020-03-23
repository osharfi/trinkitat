<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="pb-1 mb-2 border-bottom">
			<h1 class="h3">إدارة العملاء     <small><i class="fa fa-sm fa-info-circle" 
 data-toggle="tooltip" data-placement="left" title="إضافة وتعديل بيانات العملاء"></i></small></h1>
              
            </div>
            <div class="row justify-content-end">
                <div class="col-3">
            	  <h4> 
              		<a class="btn btn-outline-success btn-sm nav-link" href="<?php echo base_url('customer/newc'); ?>">إضافة جديد</a>
                </h4>
                </div>
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
        <?php foreach ($customer as $customer_item): ?>
		<tr>
				<td>
					<?php echo $customer_item['customerID']; ?>
				</td>
				<td>
					<?php echo $customer_item['customerName']; ?>
				</td>
				<td>
					<?php echo $customer_item['customerPhone']; ?>
				</td>
				
				<td>
					<?php  echo "<a href='". site_url('customer/statement/'.$customer_item['customerID'])." '>تقرير</a>";

					?>
				</td>
				<td>
					<?php  echo "<a href='". site_url('customer/edit/'.$customer_item['customerID'])." '>تعديل</a>";

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