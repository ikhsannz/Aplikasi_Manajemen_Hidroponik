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

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php include 'sidebar.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

<?php include 'header.php'; 
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
        
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Bahan</h1>
                      </div>

        
        <!-- Content Row -->
          <div class="d-sm-flex align-items-center justify-content-between mb-2">
          <a href="<?='input_bahan.php'; ?>" style="margin-bottom:20px" class="btn btn-primary col-md-2"><span class="fas fa-plus fa-sm text-white-50"></span> Tambah Data</a>

            <a href="<?='cetak_bahan.php'; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> CETAK </a>
          </div>
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-7">

              <table class="table"  >
  <thead class="thead-dark">
    <tr align="center">
      <th scope="col">NO</th>
      <th scope="col">KODE BAHAN</th>
      <th scope="col">NAMA BAHAN</th>
      <th scope="col">KATEGORI</th>
      <th scope="col">STOK</th>
      <th scope="col">OPSI</th>
    </tr>
  </thead>
  <?php include 'connection.php';
           
          $result = mysqli_query($con, "SELECT * FROM bahan 
           INNER JOIN kategori ON bahan.kode_kategori = kategori.kode_kategori
           ORDER BY kode_bahan ASC"); 
 
            $no = 1;
            while($data = mysqli_fetch_array($result)){ 
                ?>
                <tbody>
                <tr align="center">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['kode_bahan']; ?></td>
                    <td><?php echo $data['nama_bahan']; ?></td>
                    <td><?php echo $data['nama_kategori']; ?></td>
                    <td><?php echo $data['stok']; ?></td>
                    <td>

       <a href="edit_bahan.php?id=<?php echo $data['kode_bahan']; ?>" 
       class="fas fa-edit fa-sm text-blue-50" title="Edit"></a>

                    <a href="hapus_bahan.php?id=<?php echo $data['kode_bahan'];?>"
                    onclick="return confirm('Yakin mau di hapus?');" class="fas fa-trash fa-sm text-blue-50" 
                    title="Hapus"></a>

                    </td>   
            </tr> 
 
          <?php
        } 
        ?>
  
    
  </tbody>
</table>


                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

           
                <!-- Card Body -->
                <div class="card-body">
                  
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
