<?php

      session_start();
      error_reporting(0);
      include('includes/dbconn.php');

      if (strlen($_SESSION['avmsaid']==0)) {
        header('location:logout.php');
        } else{
            if(isset($_POST['submit'])){
    
        $cvmsaid=$_SESSION['cvmsaid'];
        $apartmentno=$_POST['apartmentno'];
        $dwname=$_POST['dwname'];
        $contactnumber=$_POST['mobilenumber'];
        $address=$_POST['address'];
        
    
        $query=mysqli_query($con,"INSERT INTO tbldomestic(flatno,workerName,mobileNumber,address) VALUE('$apartmentno','$dwname','$contactnumber','$address')");
    
        if ($query){
            $msg="Domestic workers entry details has been added";
        } else {
            $msg="Something Went Wrong";}
        }
    ?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Apartment Visitor Management System</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 <!-- <script>
    function getBuilding(val) {
        $.ajax({
        type: "POST",
        url: "autofill.php",
        data:'apartmentid='+val,
        success: function(data){
        //alert(data);
        $('#buildingno').val(data);
        }
        });
    }
    </script> -->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    
<?php include 'includes/header.php'?>
  
  <?php $page='visitors'; include 'includes/sidebar.php'?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Domestic Worker's Entry Form
        <!-- <small>Control panel</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Domestic Workers Entry</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <?php if($msg){ echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-info-circle'></i> Alert!</h4>
                $msg
    </div>";}  ?>
         <!-- Forms -->
     
      
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Please fill up the details below</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          

            <div class="box-body">
              <div class="row">
                <form method="POST" class="">
                <div class="col-md-6">

                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Worker Name</label>
                    <input type="text" class="form-control" name="dwname" id="dwname" required>
                  </div>
                  <div class="form-group">
                    <label>Contact Number</label>
                    <input type="number" class="form-control" name="mobilenumber" id="mobilenumber" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" id="address" required>
                  </div>



                
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">

                <div class="form-group">
                    <label>Flat Number</label>
                    <input type="text" class="form-control" name="apartmentno" id="apartmentno" required>
                    </div>

                    <div class="form-group">
                    <label>Entry Time</label>
                    <input type="time" class="form-control" id="myTime" value="">
                    <!-- <button onclick="myFunction()">set</button> -->
                    <!-- <p id="demo"></p> -->
                    <script>
	                        function myFunction() {
	                        var x = document.getElementById("myTime").value;
	                        document.getElementById("demo").innerHTML = x;
	                                                }
	                </script>
                </div>
                


                  <!-- /.form-group -->
                  
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>

              
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
            <button type="submit" class="btn btn-block btn-primary btn-lg" name="submit">Submit Worker's Details</button>
            </div>
          </div>
          </form>
      
      <!-- /Form -->
        
    
	  
      <!-- Main row -->
      
      <!-- / Main row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include 'includes/footer.php'?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->

      <div class="tab-pane" id="control-sidebar-home-tab">
       
      </div>
 
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

<?php } ?>