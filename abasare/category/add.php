<?php include('../DBController.php');
?>
<?php
    function productcode() {
        $chars = "003232303232023232023456789";
        srand((double)microtime()*1000000);
        $i = 0;
        $pass = '' ;
        while ($i <= 7) {

            $num = rand() % 33;

            $tmp = substr($chars, $num, 1);

            $pass = $pass . $tmp;

            $i++;

        }
        return $pass;
    }
    $pcode='CT-'.productcode();
    ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Category</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 
  
  </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <?php include('../header.php'); ?>
  <!-- Left side column. contains the logo and sidebar -->
  
  <?php include('../menu.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Category        <small>Add/Update Category</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="..dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="../category/view.php">Categories List</a></li>
        <li class="active">Category</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info ">
            <div class="box-header with-border">
              <h3 class="box-title">Please Enter Valid Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <form action="add.php" method="POST" class="form-horizontal" id="category-form">
             <input type="hidden" name="code" value="<?php echo $pcode ?>">
            
              <div class="box-body">
        


      <div class="form-group">
            <label for="category" class="col-sm-2 control-label"> Loan Name <label class="text-danger">*</label></label>
           <div class="col-sm-4">
		   <input type="text" name="lname" class="form-control input-sm"/>
              <span id="category_msg" style="display:none" class="text-danger"></span>
            </div>
      </div>


        <div class="form-group">
          <label for="description" class="col-sm-2 control-label"> Interest Rate (%) </label>
           <div class="col-sm-4">
           <input type="text" name="interest" value="" class="form-control input-sm"/>
              <span id="description_msg" style="display:none" class="text-danger"></span>
                  </div>
                </div>
				  <div class="form-group">
          <label for="description" class="col-sm-2 control-label"> Terms </label>
           <div class="col-sm-4">
           <input type="text" name="terms"  value="" class="form-control input-sm"/>
              <span id="description_msg" style="display:none" class="text-danger"></span>
                  </div>
                </div>
				  <div class="form-group">
          <label for="description" class="col-sm-2 control-label"> Payment Frequency </label>
           <div class="col-sm-4">
                       <select name="frequency" class="form-control">
	        						<option value="1">Weekly</option>
	        						<option value="2">2 Weeks</option>
	        						<option value="3">3 Weeks</option>
	        						<option value="4">Monthly</option>
									
	        					</select>
              <span id="description_msg" style="display:none" class="text-danger"></span>
                  </div>
                </div>

              </div>
                 <!-- /.box-footer -->
              <div class="box-footer">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                   <!-- <div class="col-sm-4"></div> -->
                                                    
                   <div class="col-md-3 col-md-offset-3">
                      <button type="submit" id="save" name="save" class=" btn btn-block btn-primary" title="Save Data"> <i class="fa fa-save"></i>    Save</button>
                   </div>
                   <div class="col-sm-3">
                    <a href="../dashboard.php">
                      <button type="button" class="col-sm-3 btn btn-block btn-default close_btn" title="Go Dashboard"><i class="fa fa-close"></i> Close</button>
                    </a>
                   </div>
                </div>
             </div>
             <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php
if(isset($_POST['save'])){
$lname = $_POST['lname'];
$interest = $_POST['interest'];
$terms = $_POST['terms'];
$frequency = $_POST['frequency'];
$staff = $_SESSION['id'];
//query
$sql = "INSERT INTO `loan_type` (`id`, `lname`, `interest`, `terms`, `frequency`, `late_fee`, `rdate`) 
VALUES (NULL, '$lname', '$interest', '$terms', '$frequency', '0.5', '2020-09-08 06:34:01')";
if(mysqli_query($con,$sql)){
echo "<script>alert('Saved Successfully!')</script>";
header("location: add.php");
}else{
echo "<script>alert('NOT INSERTED !')</script>";
header("location: add.php");	
}
}
?>
  
  
  <?php include('../footer.php'); ?>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
