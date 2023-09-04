<header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>VM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>VIZARD</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          
        <?php
        $adminid=$_SESSION['avmsaid'];
        $ret=mysqli_query($con,"SELECT AdminName from tbladmin where ID='$adminid'");
        $row=mysqli_fetch_array($ret);
        $name=$row['AdminName']; ?>  

          <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
              <span class="hidden-xs"><?php echo $name; ?></span>
            </a>
            <ul class="dropdown-menu">
          

              

        
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">

               


                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat"><i class="fa fa-power-off" style="color:red;"><b> Logout </b></i></a>
                </div>

              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        
        </ul>
      </div>
    </nav>
  </header>