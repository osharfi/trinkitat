

	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-10">
			<h1>الموظفين</h1>
                <h2>   
              <a class="nav-link" href="<?php echo base_url('staff/newc'); ?>">موظف جديد</a>
                </h2>
				  <h2>   
              <a class="nav-link" href="<?php echo base_url('staff/putsalary'); ?>"> اضافة مرتبات</a>
                </h2>
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>الاسم</th>
                       <th></th>
					    <th></th>
						 <th></th>
                    </tr>
                </thead>
                <tbody id="show_data">
        <?php foreach ($staff as $staff_item): ?>
		<tr>
				<td>
				<?php  echo "<a href='". site_url('staff/view/'.$staff_item['id'])."'>"   .$staff_item['id']."</a>"; ?>
				</td>
				<td>
					<?php  echo "<a href='". site_url('staff/view/'.$staff_item['id'])."'>"   .$staff_item['name']."</a>"; ?>
				</td>

				<td>
			<?php  echo "<a href='". site_url('staff/statement/'.$staff_item['id'])." '>تقرير</a>"; ?>
			</td><td>
								<?php  
					if($this->session->userdata('level')==='1')
					{
						echo "<a href='". site_url('staff/edit/'.$staff_item['id'])."' class='btn btn-primary'> تعديل </a>";
					}?>
					
					</td><td>
					<?php 
					if($this->session->userdata('level')==='1')
					{
						echo "<a href='". site_url('staff/delete/'.$staff_item['id'])."' onclick='return confirm(\"هل تريد مسح الموظف  ".$staff_item['name']."\")' class='btn btn-danger remove'> مسح </a>";
					
					}
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


