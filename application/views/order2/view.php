<html dir="rtl">
<head>
<style>
@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
#invoice-POS{
  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
  padding:2mm;
  margin: 0 auto;
  width: 105mm;
  height: 148mm;
  background: #FFF;
}
h1{
  font-size:1.5em;
  color: #222;
}
h2{font-size: .7em;}
h3{
  font-size: 1.2em;
}
p{
  font-size: .6em;
  color: #666;
  line-height: 1.1em;
}
 
#top, #bot{ /* Targets all id with 'col-' */
  border-bottom: 1px solid #EEE;
}

#top{min-height: 80px;}
#mid{min-height: 20px;} 
#bot{ min-height: 400px;}
#table{ min-height: 200px;}


#top .logo{
  float: left;
	height: 60px;
	width: 100px;
	background: url(<?php echo base_url().'assets/images/logo1.png'?>) no-repeat;
	background-size: 100px 60px;
}

.info{
  display: block;
  float:right;
  margin-left: 0;
}
.title{
  float: right;
}
.title p{text-align: right;} 
table{
  width: 100%;
  border-collapse: collapse;
}
td{
 // padding: 5px 0 5px 15px;
  border: 1px solid #EEE
}
.tableitem{
	padding:5px 0 5px 0px;
}
.tabletitle{
 // padding: 1px 0 1px 10px;
  font-size: 1.3em;
  background: #EEE;
}
.service{border-bottom: 1px solid #EEE;}
.item{width: 24mm;}
.itemtext{font-size: .9em;}

#legalcopy{

  margin-bottom: 5mm;
}

</style>
</head>

<body>
<a class="no-print" href="javascript:void(0);" target="_blank" onclick="print();return false;">طباعة </a>
  <div id="invoice-POS">
    
    <center id="top">
      <div class="logo"></div>
      <div class="info"> 
        <h3>باسل ميديا للدعاية والاعلان</h3>
		<h2><?php echo $order_item[0]['datetime']; ?></h2>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
    <div id="mid">
      <div class="info">
        <h3><pre><span># <?php echo $order_item[0]['orderid']." السيد: ".$order_item[0]['customerName']." ت: ".$order_item[0]['customerPhone']; ?></pre></h3>
      </div>
    </div><!--End Invoice Mid-->
    
    <div id="bot">
					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h2>النوع</h2></td>
								<td class="Hours"><h2>الكمية</h2></td>
								<td class="Rate"><h2>القيمة</h2></td>
							</tr>
<?php foreach ($order_item as $order_items): ?>
							<tr class="service">
								<td class="tableitem"><p class="itemtext">
								<?php echo $order_items['stockname']; ?>
								</p></td>
							
								<td class="tableitem"><p class="itemtext">
								<?php echo $order_items['quantity']; ?>
								</p></td>
								<td class="tableitem"><p class="itemtext">
								<?php echo $order_items['ltotal']; ?>
								</p></td>
							</tr>
<?php endforeach; ?>
							<tr class="tabletitle">
								
								
								<td></td>
								<td class="Rate"><h2>المجموع</h2></td>
								<td class="payment"><h2><?php echo $order_item[0]['total']; ?></h2></td>
							</tr>
							<tr class="tabletitle">
								
								
								<td></td>
								<td class="Rate"><h2>مستلم</h2></td>
								<td class="payment"><h2><?php echo $order_item[0]['paid']; ?></h2></td>
							</tr>
							<tr class="tabletitle">
								
								
								<td></td>
								<td class="Rate"><h2>متبقي</h2></td>
								<td><h2>
								<?php echo $order_item[0]['total']-$order_item[0]['paid'];
								 ?></h2></td>
							</tr>							
							
						</table>
					</div><!--End Table-->

					

				</div><!--End InvoiceBot-->
				<div id="legalcopy">
						<p class="legal"><strong>شكرا لتعاملك معنا!</strong>  0183763422 - 0900005052
						</p>
					</div>
  </div><!--End Invoice-->
</body>
</html>