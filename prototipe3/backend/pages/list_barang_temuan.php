
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TCARI | List Barang Temuan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" type="text/css" href="../plugins/datatables/dataTables.bootstrap.css">

</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <?php include('header_admin.php');?>
  <?php include('sidebar_admin.php');?>

  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Barang Temuan
      </h1>
      <ol class="breadcrumb">
        <li><a href="../pages/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">List Barang Temuan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                
                 <div class="register-logo">
                    <b>List Barang Temuan</b>
                  </div>
                  
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                  <?php if (isset($_POST['info']) ) 
                      echo '
                  <div class="alert alert-success" role="alert">
                      Edit Success
                  </div>';
                  ?>
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                    <tr>
                        <th >Nama Barang</th>
                        <th >Tanggal</th>
                        <th >Lokasi</th>
                        <th >Status</th>
                        <th >Action</th>
                    </tr>

                    </thead>
                    <tbody>
                      <tr>
                        <td >Dompet</td>
                        <td >19 May 2017 12:00 AM</td>
                        <td >Lab. RPL</td>
                        <td >NOT SOLVED</td>
                        <td ><a href="edit_barang_temuan.php">Edit</a></td>
                      </tr>
                      <tr >
                        <td >Kunci Motor</td>
                        <td >17 May 2017 7:59 PM</td>
                        <td >Lab. NCC</td>
                        <td >NOT SOLVED</td>
                        <td ><a href="edit_barang_temuan.php">Edit</a></td>
                      </tr>
                      <tr >
                        <td >Charger Laptop Acer</td>
                        <td >16 May 2017 12:22 PM</td>
                        <td >IF - 108</td>
                        <td >NOT SOLVED</td>
                        <td ><a href="edit_barang_temuan.php">Edit</a></td>
                      </tr>
                    </tbody>

                  </table>
                </div>
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
  <footer class="main-footer">
    <strong>Copyright &copy; 2017 <a href="/home.php">TCARI</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>

<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script>
$(function () {
  $("#example1").DataTable();
});
</script>
</body>
</html>
