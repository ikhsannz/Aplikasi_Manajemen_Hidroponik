<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hidroponik</title>
  <link rel="icon" type="image/png" href="logincss/images/icons/favicon.ico"/>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<?php include "connection.php";
 if (isset($_POST['Submit'])) {
  $id = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $no_ktp = $_POST['no_ktp'];
  $nama_akun = $_POST['nama_akun'];
  $alamat = $_POST['alamat'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $status = $_POST['status'];

  
$result = mysqli_query($con, "UPDATE login
 SET username='$username', password='$password', no_ktp='$no_ktp', nama_akun='$nama_akun', alamat='$alamat', 
 tempat_lahir='$tempat_lahir', tgl_lahir='$tanggal_lahir' , status='$status' 
 WHERE id='$id' ");

header("location:form_user.php");
}
 ?>



<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php include 'sidebar.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

<?php include 'header.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
        
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Akun</h1>
                      </div>
                      
        
        <!-- Content Row -->
          <div class="d-sm-flex align-items-center justify-content-between mb-2">
          <a href="form_user.php?; ?>" style="margin-bottom:20px" class="btn btn-primary col-md-2"><span class="fas fa-arrow-left fa-sm text-white-50"></span> Kembali </a>

                    </div>
 
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-7">
              <div class="card-body">
              <h3 class="panel-title">Edit Data Akun</h3>
      
    <div class="card-body">
        <form method="post" action="edit_user.php" class="form-horizontal">
       
        <?php
$id=$_GET['id'];
$d = mysqli_query($con, "SELECT * FROM login 
WHERE id='$id'"); 
while($data=mysqli_fetch_array($d)){
?>					
                


 

            

         
                  <div class="form-group">
              <label for="id" class="col-sm-2 control-label">id</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="id" 
                  value="<?php echo $data['id'] ?>" ></div></div> 


                  <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="username" 
                  value="<?php echo $data['username'] ?>" ></div></div> 
         
                  <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" 
                  value="<?php echo $data['password'] ?>" ></div></div> 

         
                  <div class="form-group">
              <label for="no_ktp" class="col-sm-2 control-label">No KTP</label>
              <div class="col-sm-10">
                  <input type="number" class="form-control" name="no_ktp" 
                  value="<?php echo $data['no_ktp'] ?>" ></div></div> 

                           
                  <div class="form-group">
              <label for="nama_akun" class="col-sm-2 control-label">Nama Lengkap</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_akun" 
                  value="<?php echo $data['nama_akun'] ?>" ></div></div> 
                           
                  <div class="form-group">
              <label for="alamat" class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="alamat" 
                  value="<?php echo $data['alamat'] ?>" ></div></div> 
                           


                  <div class="form-group">
              <label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="tempat_lahir" 
                  value="<?php echo $data['tempat_lahir'] ?>" ></div></div> 
         
                  <div class="form-group">
              <label for="tanggal_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
              <div class="col-sm-10">
                  <input type="date" class="form-control" name="tanggal_lahir" 
                  value="<?php echo $data['tanggal_lahir'] ?>" ></div></div> 

                  <div class="form-group">
              <label  class="col-sm-2 control-label">Level</label>
              <div class="col-sm-10">
              <select name="level"  class="form-control">
					<option>Admin</option>
					<option>User</option>
				</select>
                </div>
            </div>

                  <div class="form-group">
              <label  class="col-sm-2 control-label">Status</label>
              <div class="col-sm-10">
              <select name="status"  class="form-control">
					<option>Aktif</option>
					<option>Non Aktif</option>
				</select>
                </div>
            </div>

          

     <?php
}
?>             

                

<div class="form-group"><div class="col-sm-offset-2 col-sm-10">
                  <label></label>
                <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
                </div>  
                </div>               

            </form>
              </div>
            </div>

            
                
                  
          </div>

          <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-7">

              


                  </div>
                </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
