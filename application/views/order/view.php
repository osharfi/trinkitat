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

@font-face {
  font-family: 'Tajawal';
  font-style: bold;
  font-weight: 400;
  src: local('Tajawal'), local('Tajawal-Regular'), url(
<?php echo base_url().'assets/fonts/Tajawal/Iura6YBj_oCad4k1nzSBC45I.woff2'?>
 ) format('woff2');
  unicode-range: U+0600-06FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE80-FEFC;
}
/* latin */
@font-face {
  font-family: 'Tajawal';
  font-style: normal;
  font-weight: 400;
  src: local('Tajawal'), local('Tajawal-Regular'), url(
<?php echo base_url().'assets/fonts/Tajawal/Iura6YBj_oCad4k1nzGBCw.woff2'?>) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
#invoice-POS{
	font-family:  'Tajawal';
	  font-style: normal;

  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
  padding:.5mm;
  margin: 0 auto;
  width: 105mm;
  height: 148mm;
  background: #FFF;
}
h1{
  font-size:1.5em;
  color: #222;
}
h2{font-size: .8em;}
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
  margin-right: 0;
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
  font-size: 1em;
  background: #EEE;
}
.tabletitle2{
 // padding: 1px 0 1px 10px;
  font-size: 1em;
}
.service{border-bottom: 1px solid #EEE;}
.item{width: 24mm;}
.itemtext{font-size: .9em;}

#legalcopy{

  margin-bottom: 5mm;
}
}
</style>
</head>

<body>
<a class="no-print" href="javascript:void(0);" target="_blank" onclick="print();return false;">طباعة </a>
  <div id="invoice-POS">
    
    <center id="top">
      <div class="logo"></div>
      <div class="info"> 
        <h3>ايصال</h3>
		<h2><?php echo $order_item[0]['datetime']; ?></h2>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
	<table style="border: none;">
							<tr>

       <td  style="border: none;"> <h2># 
	   <?=$order_item[0]['orderid'];?>
	   </h2></td> 
	<td  style="border: none;"> <h2>
	<?=$order_item[0]['customerName'];?>
	   </h2></td>
	<td  style="border: none;"> <h2>
	<?=$order_item[0]['customerPhone'];?>
	   </h2></td> 
									</tr>

    						</table>
    
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
							<tr class="tabletitle2">
								
								
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
						<p class="legal"><strong>شكرا لتعاملك معنا!</strong>  012345678
						</p>
					</div>
  </div><!--End Invoice-->
</body>
</html>