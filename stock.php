<?php
require 'function.php';
require 'cek.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Stock</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Dashboard PT Mayora</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="gudang.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Gudang
                            </a>
                            <a class="nav-link" href="Stokproduksi.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Stok Produksi
                            </a>
                            <a class="nav-link" href="produksi.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Produksi
                            </a>
                            <a class="nav-link" href="stock.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Stok
                            </a>
                            <a class="nav-link" href="barang.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Barang
                            </a>
                            <a class="nav-link" href="bahanbaku.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Bahan Baku
                            </a>
                            <a class="nav-link" href="outlet.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Outlet
                            </a>
                            <a class="nav-link" href="pegawai.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Pegawai
                            </a>
                            <a class="nav-link" href="tenaga.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tenaga Kerja
                            </a>
                            <a class="nav-link" href="biaya.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Biaya Produksi
                            </a>
                            <a class="nav-link" href="logout.php">
                                LogOut
                            </a>


                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        WELCOME
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Stock Barang</h1>

                        <!-- <div class="row">
                            <div class="col-md">
                                <a href="#" class="btn btn-dark btn-sm mb-2"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Tambah Data</a>
                                <a href="#" class="btn btn-success btn-sm mb-2"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Cetak Data</a>
                            </div>
                            </div> -->

                        
                        <div class="card mb-4">
                            <div class="card-header">
                               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                    Tambah Data
                                </button>
                                
                                <a href="cetakstok.php" class="btn btn-success">Cetak Data</a>  
                            </div> 
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id Stock Barang</th>
                                            <th>Id Barang</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $ambilsemuadatabiaya = mysqli_query($conn, "select * from stokb s,barang b where s.idbarang=b.idbarang");
                                        while($data=mysqli_fetch_array($ambilsemuadatabiaya)){
                                            $idsb = $data['idstokbarang'];
                                            $idbar = $data['idbarang'];
                                            $jumlah = $data['jumlah'];
                                        ?>
                                        <tr>
                                            <td><?=$idsb;?></td>
                                            <td><?=$idbar;?></td>
                                            <td><?=$jumlah;?></td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?=$idsb;?>">
                                                   Edit
                                                 </button>
                                                <!-- <input type="hidden" name="idygmaudihapus" value="<?=$id;?>"> -->
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?=$idsb;?>">
                                                  Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Edit Modal -->
                                        <div class="modal fade" id="edit<?=$idsb;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Data</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <form method="post">
                                                    <div class="modal-body">
                                                        <input type="text" name="idstokbarang" value="<?=$idsb;?>" class="form-control"required><br>
                                                        <input type="text" name="idbarang" value="<?=$idbar;?>" class="form-control"required><br>
                                                        <input type="text" name="jumlah" value="<?=$jumlah;?>" class="form-control"required><br>
                                                        <input type ="hidden" name="idbarang" value="<?=$idbar;?>">
                                                        <button type="submit" class="btn btn-primary" name="updatesb">submit</button>
                                                    </div>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>

                                                <!-- Hapus Modal -->
                                            <div class="modal fade" id="delete<?=$idsb;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus Data</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <form method="post">
                                                    <div class="modal-body">
                                                        Apakah Anda Yakin Ingin Menghapus <?=$idsb;?>?
                                                        <input type="hidden" name="idstokbarang" value="<?=$idsb;?>">
                                                        <br><br>
                                                        <button type="submit" class="btn btn-danger" name="hapussb">Hapus</button>
                                                    </div>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>
                                    <?php
                                        };
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
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

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <form method="post">
            <div class="modal-body">
                <input type="text" name="idstokbarang" placeholder="Id Stock Barang" class="form-control"><br>
                <select name="idbar" class="form-control">
                    <?php
                        $ambildata =mysqli_query($conn,"select *from barang");
                        while($fetcharray =mysqli_fetch_array($ambildata)){
                            $idb =$fetcharray['idbarang'];
                            $idb =$fetcharray['idbarang'];
                    ?>

                    <option value="<?=$idb;?>"><?=$idb;?></option>
                    <?php
                        }
                    ?>
                </select><br>
                <input type="text" name="jumlah" placeholder="Jumlah" class="form-control"><br>
                <button type="submit" class="btn btn-primary" name="addstokb">submit</button>
            </div>
            </form>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
        </div>
    
</html>
