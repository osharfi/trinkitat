<!DOCTYPE html>
<html dir="" lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
	    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/sb-admin.css'?>">
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



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}

</style>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
	
  </head>
  <body>

     <!-- <div class="container">
	  <br>	  <br> 	  <br>-->
	  
	<div class="sidenav">
         	<div class="login-main-text">
            		<h2>YTS ERP <small>Lite v. 1.0.0</small><br> Login Page</h2>
            		<p>Software By Trinkitat</p>
         	</div>
      </div> 
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
	  
      <!-- <div class="col-md-6 col-md-offset-6 "> 
	  <div class="login-form"> -->
         <form class="" action="<?php echo site_url('login/auth');?>" method="post">
           <h2 class="form-signin-heading">الرجاء ادخال بيانات الدخول</h2>
           <?php echo $this->session->flashdata('msg');?>
           
                  <div class="form-group">
           		<label for="username" class="sr-only">المستخدم</label>
           		<input type="text" name="name" class="form-control" placeholder="username" required autofocus>
           	</div>
           	
                  <div class="form-group">
           
           		<label for="password" class="sr-only">كلمة المرور</label>
           		<input type="password" name="password" class="form-control" placeholder="Password" required>
           	</div>
           		
           <div class="checkbox">
             <label>
               <input type="checkbox" value="remember-me"> تذكرني
             </label>
           </div>
           <button class="btn btn-lg btn-primary btn-block" type="submit">تسجيل الدخول</button>
         </form>
       </div>

       </div> <!-- /container -->
      
       
      </div> <!-- /main -->
    

  </body>
</html>