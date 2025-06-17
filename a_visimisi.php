<?php
include '../webportal-Arga/sistem/koneksi.php';
$conn = open_connection();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if (isset($_POST['description']) && !empty($_POST['description']) && 
        isset($_POST['category']) && !empty($_POST['category'])) {
        
        $description = $_POST['description'];
        $category = $_POST['category'];

        $stmt = $conn->prepare("INSERT INTO visi_misi (description, category) VALUES (?, ?)");
        $stmt->bind_param("ss", $description, $category);
        
        if ($stmt->execute()) {
            $success_message = "Data berhasil ditambahkan!";
        } else {
            $error_message = "Gagal menambahkan data.";
        }
        
        $stmt->close();
    } else {
        $error_message = "Deskripsi dan kategori tidak boleh kosong.";
    }
}

// Handle edit request
if (isset($_POST['edit_id'])) {
    $edit_id = $_POST['edit_id'];
    $edit_description = $_POST['edit_description'];
    $edit_category = $_POST['edit_category'];
    $stmt = $conn->prepare("UPDATE visi_misi SET description = ?, category = ? WHERE id = ?");
    $stmt->bind_param("ssi", $edit_description, $edit_category, $edit_id);
    $stmt->execute();
    $stmt->close();
}

// Handle delete request
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM visi_misi WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    $stmt->close();
}

// Fetch existing data
$visi_data = mysqli_query($conn, "SELECT * FROM visi_misi WHERE category = 'visi'");
$misi_data = mysqli_query($conn, "SELECT * FROM visi_misi WHERE category = 'misi'");
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Arga</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="a_home.php">Admin</a>
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

                        <li><a class="dropdown-item" href="index.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">

                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="a_home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>

                           
                            <a class="nav-link" href="a_leadership.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Leadership
                            </a>

                        </div>
                    </div>

                </nav>
            </div>
            <div id="layoutSidenav_content">
            <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Visi dan Misi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">PT. Arga Bumi Indonesia</li>
            </ol>
            <!-- Button to open the modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal">
                Tambah Data
            </button>

            <!-- Modal for Adding Data -->
                    <div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addDataModalLabel">Tambah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="">
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Deskripsi</label>
                                            <textarea class="form-control" id="description" name="description" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Kategori</label>
                                            <select class="form-select" id="category" name="category" required>
                                                <option value=""></option>
                                                <option value="visi">Visi</option>
                                                <option value="misi">Misi</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                   <!-- Display Visi and Misi -->
                    <section class="content-wrapper">
                        <p class="subheading">Visi</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; while ($row = mysqli_fetch_assoc($visi_data)): ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo htmlspecialchars($row['description']); ?></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" onclick="editData(<?php echo $row['id']; ?>, '<?php echo htmlspecialchars($row['description']); ?>', '<?php echo $row['category']; ?>')">Edit</button>
                                            <a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>

                       <p class="subheading">Misi</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; while ($row = mysqli_fetch_assoc($misi_data)): ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo htmlspecialchars($row['description']); ?></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" onclick="editData(<?php echo $row['id']; ?>, '<?php echo htmlspecialchars($row['description']); ?>', '<?php echo $row['category']; ?>')">Edit</button>
                                            <a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </section>


                </div>
            </main>
    
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2025 Portal PT Arga Bumi Indonesia</div>
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
    <script>
        function editData(id, description, category) {
            document.getElementById('edit_id').value = id;
            document.getElementById('edit_description').value = description;
            document.getElementById('edit_category').value = category;
            $('#editDataModal').modal('show');
        }
    </script>

    <!-- Modal for Editing Data -->
    <div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="editDataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDataModalLabel">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="">
                        <input type="hidden" id="edit_id" name="edit_id">
                        <div class="mb-3">
                            <label for="edit_description" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="edit_description" name="edit_description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="edit_category" class="form-label">Kategori</label>
                            <select class="form-select" id="edit_category" name="edit_category" required>
                                <option value="visi">Visi</option>
                                <option value="misi">Misi</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>