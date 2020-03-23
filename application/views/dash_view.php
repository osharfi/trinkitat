<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          
          <li class="breadcrumb-item active">نظرة عامة</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
             <div class="mr-5">مجموع الايصالات <?php echo $allinfo['orders'];?> </div>
			 <div class="mr-5">مجموع الايرادات <?php echo $allinfo['paid'];?> </div>
			 <div class="mr-5">مجموع المديونية <?php echo $allinfo['dept'];?> </div>


              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('order/'); ?>">
                <span class="float-right">عرض الكل</span>
                <span class="float-left">
                  <i class="fas fa-angle-left"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">ايصالات  <?php echo $allinfo['orders1'];?></div>
				<div class="mr-5">ايرادات  <?php echo $allinfo['paid1'];?></div>
				<div class="mr-5">مديونية  <?php echo $allinfo['dept1'];?></div>

              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('order/'); ?>">
                  <span class="float-right">عرض الكل</span>
                <span class="float-left">
                  <i class="fas fa-angle-left"></i>
                </span>
              </a>
            </div>
          </div>
 
       
 
         <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-dark o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">الصندوق الرئيسي  <?php echo -$allinfo['box'];?></div>
				<div class="mr-5"> صندوق   <?php echo -$allinfo['box1'];?></div>

              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('account/'); ?>">
                 <span class="float-right">عرض الكل</span>
                <span class="float-left">
                  <i class="fas fa-angle-left"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Area Chart </div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>