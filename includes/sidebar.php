<?php
  $adminid=$_SESSION['avmsaid'];
  $ret=mysqli_query($con,"SELECT AdminName from tbladmin where ID='$adminid'");
  $row=mysqli_fetch_array($ret);
  $name=$row['AdminName']; ?>
 
 
 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img class="img-circle" >
        </div>
        <div class="pull-left info">
          <p><?php echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="search-result.php" method="POST" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="searchdata" id="searchdata" class="form-control" placeholder="Enter Contact or Name....">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">CONTENTS</li>

        <li class="<?php if($page=='dashboard') { echo 'active'; }?>">
          <a href="dashboard.php">
            <i class=""></i> <span>HOME</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
       

        <li class="<?php if($page=='visitors') { echo 'active'; }?>">
          <a href="visitor-entry.php">
            <i class=""></i> <span>Entry Visitors</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-green"><?php include './counters/todays-visitor-count.php'?></small> -->
            </span>
          </a>
        </li>


     
        <li class="<?php if($page=='visitor-management') { echo 'active'; }?>">
          <a href="domesticworker.php">
            <i class=""></i> <span>Entry Domestic Worker</span>
            <span class="pull-right-container">
            <!-- <small class="label pull-right bg-green"><?php include './counters/todays-workers-count.php'?></small> -->
            </span>
          </a>
        </li>

        <li class="<?php if($page=='checkout_visitors') { echo 'active'; }?>">
          <a href="checkout_visitor.php">
            <i class=""></i> <span>Check-Out Visitors</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-green"><?php include './counters/checkout-visitor.php'?></small> -->
            </span>
          </a>
        </li>

        <li class="<?php if($page=='checkout_visitors') { echo 'active'; }?>">
          <a href="checkout_worker.php">
            <i class=""></i> <span>Check-Out Workers</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-green"><?php include './counters/checkout-worker.php'?></small> -->
            </span>
          </a>
        </li>

        <li class="<?php if($page=='tenant-management') { echo 'active'; }?>">
          <a href="managetenant.php">
            <i class=""></i> <span>Tenant Management</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        
        <li class="<?php if($page=='owner-management') { echo 'active'; }?>">
          <a href="manageowner.php">
            <i class=""></i> <span>Owner Management</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>




        <li class="<?php if($page=='visitor-management') { echo 'active'; }?>">
          <a href="visitor-mgmt.php">
            <i class=""></i> <span>Visitor Management</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="<?php if($page=='worker-management') { echo 'active'; }?>">
          <a href="worker-mgmt.php">
            <i class=""></i> <span>Worker Management</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="<?php if($page=='reports') { echo 'active'; }?>">
          <a href="report.php">
            <i class=""></i> <span>Visitor Report</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="<?php if($page=='worker-reports') { echo 'active'; }?>">
          <a href="reportworker.php">
            <i class=""></i> <span> Worker Report</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>