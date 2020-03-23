

	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-2">
			<h1>المستخدمين</h1>
                <h2>
                    
              <a class="nav-link" href="<?php echo base_url('user/newc'); ?>">مستخدم جديد</a>
                </h2>
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>اسم المستخدم</th>
                        <th>الصلاحية</th>
                       <th></th>
                    </tr>
                </thead>
                <tbody id="show_data">
        <?php foreach ($user as $user_item): ?>
		<tr>
				<td>
					<?php echo $user_item['user_id']; ?>
				</td>
				<td>
					<?php echo $user_item['user_name']; ?>
				</td>
				<td>
					<?php echo $user_item['user_level']; ?>
				</td>
				
		
				<td>
					<?php  echo "<a href='". site_url('user/edit/'.$user_item['user_id'])." '>تعديل</a>";

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


