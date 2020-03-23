	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-2">
			<h1>المبيعات</h1>
                <h2>
				    <?php
   echo $order[0]['customerName'];
   ?>
                </h2>
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>التاريخ</th>						
						<th>القيمة</th>
                        <th>المدفوع</th>
                       <th></th>
                    </tr>
                </thead>
                <tbody id="show_data">
        <?php 
		$ttotal = 0;
		$tpaid = 0;
		foreach ($order as $order_item): 
		$ttotal = $ttotal + $order_item['total'];
		$tpaid = $tpaid + $order_item['paid'];
		?>
		<tr id="<?php echo $order_item['orderid']; ?>">
				<td>
					<?php echo $order_item['orderid']; ?>
				</td>
				<td>
					<?php echo $order_item['datetime']; ?>
				</td>
				<td>
					<?php echo $order_item['total']; ?>
				</td>
				<td>
					<?php echo $order_item['paid']; ?>
				</td>
				<td>
					<?php  echo "
					    <a href='". site_url('order/view/'.$order_item['orderid'])." ' class='js-newWindow' data-popup='width=440,height=500'>عرض</a>";	
					?>
				</td>
				
		</tr>
		<?php endforeach; ?>
		<tr>
		<td>
			المجموع
		</td>
			<td>
			
		</td>
		<td>
					<?php echo $ttotal; ?>
		</td>
		<td>
					<?php echo $tpaid; ?>
		</td>
		<td>
		<?php echo $ttotal-$tpaid; ?>
		</td>
		</tr>	
                </tbody>
            </table>
        </div>
    </div>
	
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$('#mydata').dataTable({ 
		"order": [[ 0, "desc" ]], 
		  "pageLength": 50

		});
		
		});
		 $('.js-newWindow').click(function (event) {
                event.preventDefault();
                var $this = $(this);
                var url = $this.attr("href");
                var windowName = "popUp";
                var windowSize = $this.data("popup");
                window.open(url, windowName, windowSize);
            });



</script>