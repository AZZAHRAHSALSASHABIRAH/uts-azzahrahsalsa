<?php
    require_once '../../database/dbkoneksi.php';

	$sql = "SELECT * FROM produk";
	$rs = $dbh->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Toko.id</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    <div class="nav">
                            <div class="sb-sidenav-menu-heading">More tables</div>
                            <a class="nav-link bg-black" href="tables_produk.php">
                            Produk
                            </a>
                            <a class="nav-link bg-black" href="../merk/kategori_produk.php">
                            kategori produk
                            </a>
                            <a class="nav-link bg-black" href="../pesanan/tables_pesanan.php">
                            Pesanan
                        </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Toko-Admin
                    </div>
                </nav>
                <!-- close sidenav -->
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Detail Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item">Tables</li>
                            <li class="breadcrumb-item">Tables produk</li>
                            <li class="breadcrumb-item active">Add produk</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tambah produk baru
                            </div>
                            <!-- main edit -->
                            <div class="card-body">
                                <form method="POST" action="proses_produk.php">
                                    <div class="form-group">
                                        <label for="kode" class="form-label">kode</label>
                                        <input id="kode" name="kode" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama" class="form-label">nama</label>
                                        <input id="nama" name="nama" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok" class="form-label">Stok</label>
                                        <input id="stok" name="stok" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_jual" class="form-label">Harga jual</label>
                                        <input id="harga_jual" name="harga_jual" required type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_beli" class="form-label">Harga beli</label>
                                        <input id="harga_beli" name="harga_beli" required type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <input id="deskripsi" name="deskripsi" required type="text" class="form-control">
                                    </div>
                                    <div class="form-group mt-4">
                                        <input type="submit" name="proses" type="submit" class="btn btn-secondary form-control" value="Simpan" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Toko.id 2023</div>
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
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
