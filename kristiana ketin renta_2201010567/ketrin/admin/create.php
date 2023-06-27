<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kristina Ketin Renta</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Kristina Ketin Renta</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="random"></i></div>
                                Produk Cafe
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                       
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Produk</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Produk
                            </div>
                            <div class="card-body">
                            <form  method="post" enctype="multipart/form-data">
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title" required>
                                
                              </div>
                               <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="name" required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi"></textarea>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Gambar</label>
                                <input type="file" class="form-control" name="gambar" id="exampleCheck1">
                              </div>
                              <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                              <a href="index.php" class="btn btn-secondary">Batal</a>
                            </form>
                           

                                            <?php

                                            $db = mysqli_connect("localhost","root","","kristina"); 

                                            if (isset($_POST['simpan'])) { 

                                             $gambar = $_FILES['gambar']['tmp_name'];

                                             $tempattinggal = $_FILES['gambar']['name']; 
                                             $folder = "gambar/";

                                            $judul = $_POST['title'];
                                            $name = $_POST['name'];
                                            $deskripsi = $_POST['deskripsi'];

                                             $pindah = move_uploaded_file($gambar, $folder.$tempattinggal); 

                                             if ($pindah) { 

                                              mysqli_query($db, "INSERT INTO produk VALUES('','$judul','$name','$tempattinggal','$deskripsi')"); 

                                              header("location:../admin/index.php");

                                             }

                                             else{//Seandainya gambar gagal dipindah

                                              echo "<div>Gambar gagal diunggah</div>"; //Tampilkan peringatan

                                             }



                                            }

                                            ?>


                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Kristina Ketin Renta</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
