<!DOCTYPE html>
<html dir="rtl">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ERP</title>
	 <link rel="shortcut icon" href="<?php echo base_url().'assets/images/favicon.ico'?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/rtl/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/chosen.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/prism.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/sb-admin.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/fontawesome-free/css/all.min.css'?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/sb-admin.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
	
	<style>
	@font-face {
  font-family: 'Tajawal';
  font-style: bold;
  font-weight: 400;
  src: local('Tajawal'), local('Tajawal-Regular'), url(
 <?php echo base_url('/assets/fonts/Tajawal/Iura6YBj_oCad4k1nzSBC45I.woff2');?>) format('woff2');
  unicode-range: U+0600-06FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE80-FEFC;
}
/* latin */
@font-face {
  font-family: 'Tajawal';
  font-style: normal;
  font-weight: 400;
  src: local('Tajawal'), local('Tajawal-Regular'), url(<?php echo base_url('/assets/fonts/Tajawal/Iura6YBj_oCad4k1nzGBCw.woff2');?>) 
) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}


</style>
	
</head>

  <body>

  <body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
  
   

    <a class="navbar-brand col-md-1 col-sm-3 mr-0" href="#">YTS-ERP</a>

    	
  <!--<h1><a class="navbar-brand" href="<?php echo base_url();?> ">نظرة عامة
  </a></h1>-->
 <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#" data-toggle="collapse" data-target="#sidebar">
      <i style="color:white;" class="fas fa-bars"></i>
    </button>
  <div class="collapse navbar-collapse" id="navbarText">
  
              <ul class="nav navbar-nav navbar-left">
               <!--  <li class="nav-item">      
					<?php if($this->session->userdata('logged_in')):?>				 
		<a class="nav-link" href="<?php echo base_url('login/logout');?>">خروج</a></li>
				  <?php else:?>
		<?php  redirect('login');?>
				  <?php endif;?>-->
              </ul>
              </div>
               <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
               
               	 <li class="nav-item"><a class="nav-link" href="#"  data-toggle="tooltip" data-placement="bottom" title="مساعدة"><i class="fa fa-info-circle"></i></a></li>
               	 
                 <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-cog" data-toggle="tooltip" data-placement="bottom" title="اعدادات عامة"></i></a></li>
                 
                 <li class="nav-item"> 
              <?php if($this->session->userdata('logged_in')):?>
                				 
		<a class="nav-link" href="<?php echo base_url('login/logout');?>"  data-toggle="tooltip" data-placement="bottom" title="تسجيل الخروج"><i class="fa fa-power-off"></i></a>
				  <?php else:?>
		<?php  redirect('login');?>
				  <?php endif;?>
				  </li></ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav" id="sidebar">
     
                <!--ACCESS MENUS FOR ADMIN-->
    
      <?php if($this->session->userdata('level')==='1'):?>
      
      		<a class="nav-link" href="<?php echo base_url();?> ">
      		<i style="color:white;" class="fas fa-fw fa-home"></i> 
      		<span style="color:white;">الرئيسية</span>
  </a>
 
 	<a class="nav-link" href="<?php echo base_url('customer'); ?>">
          <i style="color:white;" class="fas fa-fw fa-user"></i>
          <span style="color:white;" >العملاء</span>
        </a>
	
              
		<a class="nav-link" href="<?php echo base_url('shop'); ?>">
          	<i style="color:white;" class="fas fa-fw fa-shopping-cart"></i>
          	<span style="color:white;" >المبيعات</span>
        </a>
		
		<a class="nav-link" href="<?php echo base_url('order'); ?>">
          <i style="color:white;" class="fas fa-fw fa-dollar-sign"></i>
          <span style="color:white;" >نقطة بيع</span>
        </a>
			
		
	
		<a class="nav-link" href="<?php echo base_url('stock'); ?>">
          <i style="color:white;" class="fas fa-fw fa-cube"></i>
          <span style="color:white;" >المخزن</span>
		</a>
		
			<a class="nav-link" href="<?php echo base_url('expense'); ?>">
          <i style="color:white;" class="fas fa-fw fa-fish"></i>
          <span style="color:white;" >بند صرف</span>
        </a>
		
		<a class="nav-link" href="<?php echo base_url('account/day1'); ?>">
          <i style="color:white;" class="fas fa-fw fa-receipt"></i>
          <span style="color:white;" >اليومية</span>
        </a>



		<a class="nav-link" href="<?php echo base_url('staff'); ?>">
          <i style="color:white;" class="fas fa-fw fa-people-carry"></i>
          <span style="color:white;" >الموظفين</span>
		</a>
		
		
		<a class="nav-link" href="<?php echo base_url('account'); ?>">
          <i style="color:white;" class="fas fa-fw fa-calculator"></i>
          <span style="color:white;" >الحسابات</span>
        </a>	

		
		<a class="nav-link" href="<?php echo base_url('ledger'); ?>">
          <i style="color:white;" class="fas fa-fw fa-clock"></i>
          <span style="color:white;" >الحركة</span>
		</a>
		<br><hr><br>
		
		<a class="nav-link" href="<?php echo base_url('user/edit/').$this->session->userdata('userid'); ?>">
          <i style="color:white;" class="fas fa-fw fa-user"></i>
          <span style="color:white;" >تعديل كلمة المرور</span>
        </a>
                     <!--ACCESS MENUS FOR STAFF-->
         
 <?php elseif($this->session->userdata('level')==='2'):?>
	
		<a class="nav-link" href="<?php echo base_url('order/newc'); ?>">
          <i style="color:white;" class="fas fa-fw fa-receipt"></i>
          <span style="color:white;" >فاتورة</span>
        </a>
			  		 	
		<a class="nav-link" href="<?php echo base_url('order'); ?>">
          <i style="color:white;" class="fas fa-fw fa-dollar-sign"></i>
          <span style="color:white;" >نقطة بيع</span>
        </a>
		
		<a class="nav-link" href="<?php echo base_url('expense'); ?>">
          <i style="color:white;" class="fas fa-fw fa-fish"></i>
          <span style="color:white;" >بند صرف</span>
        </a>
			
		<a class="nav-link" href="<?php echo base_url('account/day1'); ?>">
          <i style="color:white;" class="fas fa-fw fa-receipt"></i>
          <span style="color:white;" >اليومية</span>
        </a>
		
		<a class="nav-link" href="<?php echo base_url('customer'); ?>">
          <i style="color:white;" class="fas fa-fw fa-user"></i>
          <span style="color:white;" >العملاء</span>
        </a>
			
		<a class="nav-link" href="<?php echo base_url('account/transfer'); ?>">
          <i style="color:white;" class="fas fa-fw fa-arrow-alt-circle-right"></i>
          <span style="color:white;" >تحويل</span>
        </a>	
			
		<a class="nav-link" href="<?php echo base_url('user/edit/').$this->session->userdata('userid'); ?>">
          <i style="color:white;" class="fas fa-fw fa-user"></i>
          <span style="color:white;" >تعديل كلمة المرور</span>
        </a>
		

		<?php endif;?>
              </ul>

    <div id="content-wrapper">

      <div class="container-fluid">