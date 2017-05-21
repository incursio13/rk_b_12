
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TCARI | Tambah Barang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

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
        Tambah Barang Temuan
      </h1>
      <ol class="breadcrumb">
        <li><a href="../pages/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Barang Temuan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
            <!-- left column -->
            <div class="col-md-6 col-md-offset-3">
              <!-- general form elements -->
              <div class="box box-primary">
                 <div class="register-logo">
                    <b>Tambah Barang Temuan</b>
                  </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="#" method="post" enctype="multipart/form-data" >
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nama Barang</label>
                      <input type="text" name="room_name" class="form-control" placeholder="Nama Barang" required>
                    </div>
                    <div class="form-group">
                      <label>Gambar Barang</label>
                      <input type="file" name="cost"  onchange="readURL(this);" >
                      <img id="ilang" src="" alt="" />
                    </div>
                    <div class="form-group">
                      <label>Lokasi ditemukan</label>
                      <input type="text" name="cost" class="form-control" placeholder="Lokasi ditemukan">
                    </div>
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input type="text" name="capacity" class="form-control" placeholder="Tanggal ditemukan" id="datepicker">
                    </div>
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea type="text" name="capacity" class="form-control" placeholder="Deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Pertanyaan Keamanan</label>
                      <input type="text" name="capacity" class="form-control" placeholder="Pertanyaan keamanan">
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
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
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<script type="text/javascript">
                  function readURL(input) {
                    if (input.files && input.files[0]) {
                      var reader = new FileReader();

                      reader.onload = function (e) {
                        $('#ilang')
                        .attr('src', e.target.result)
                        .width(320)
                        .height(150);
                      };
                      reader.readAsDataURL(input.files[0]);
                    }
                  }
                </script>
<script>
  $(function () {
    //Initialize Select2 Elements
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'dd MM yyyy'
    });
  });
</script>
</body>
</html>
