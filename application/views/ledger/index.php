	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
			<h1>الحركة</h1>
             <p><a class="btn btn-dark" href="<?php echo base_url('ledger/viewdate'); ?>"> بحث </a></p>
                            <?php echo $links; ?>
            </div>

            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>التاريخ</th>
                        <th>الحساب</th>	
                        <th>الرئيسي</th>							
                        <th>البيان</th>
                        <th>المبلغ</th>
						<th>usr</th>

                       <th></th>
                    </tr>
                </thead>
                <tbody id="show_data">
        <?php 
		
		foreach ($ledger as $ledger_item):
	
		?>
		<tr id="<?php echo $ledger_item['id']; ?>">
				<td>
					<?php echo $ledger_item['id']; ?>
				</td>
				<td>
					<?php echo $ledger_item['datetime']; ?>
				</td>
				<td>
					<?php echo $ledger_item['acc']; ?>
				</td>
				<td>
					<?php echo $ledger_item['par']; ?>
				</td>
				<td>
					<?php echo $ledger_item['statement']; ?>
				</td>
				<td>
					<?php echo $ledger_item['amnt']; ?>
				</td>
				<td>
					<?php echo $ledger_item['user']; ?>
				</td>

				<td>
					<?php  
					if($this->session->userdata('level')==='1')
						echo "<a href='". site_url('ledger/delete/'.$ledger_item['id'])."' onclick='return confirm(\"هل تريد مسح الحركة رقم".$ledger_item['id']."\")' class='btn btn-danger remove'> مسح </a>";
					
					echo "<a href='". site_url('ledger/edit/'.$ledger_item['id'])."' class='btn btn-primary'> تعديل </a>";
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
		  "pageLength": -1, 
		      "paging": false,
			      "ordering": false
		});
		
		});

 
</script>

<style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: right;
  padding: 8px 16px;
  text-decoration: none;
}
</style>
