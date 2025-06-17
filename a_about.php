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
            <h1 class="mt-4">About Us</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">PT. Arga Bumi Indonesia</li>
            </ol>
            <!-- Button to open the modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal">
                Tambah Data
            </button>

             <!-- Modal for adding data -->
             <div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addDataModalLabel">Tambah Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="a_about.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Upload Gambar</label>
                                    <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for adding and editing data -->
            <div class="modal fade" id="dataModal" tabindex="-1" aria-labelledby="dataModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="dataModalLabel">Tambah Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="dataForm" action="a_about.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" id="data_id" name="edit_id">
                                <div class="mb-3">
                                    <label for="data_description" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="data_description" name="description" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="data_image" class="form-label">Upload Gambar</label>
                                    <input class="form-control" type="file" id="data_image" name="image" accept="image/*">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal for editing data -->
            <div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="editDataModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editDataModalLabel">Edit Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="editForm" action="a_about.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" id="edit_id" name="edit_id">
                                <div class="mb-3">
                                    <label for="edit_description" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="edit_description" name="edit_description" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="edit_image" class="form-label">Upload Gambar</label>
                                    <input class="form-control" type="file" id="edit_image" name="edit_image" accept="image/*">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>

           <?php

include '../webportal-Arga/sistem/koneksi.php';
$conn = open_connection();

// Handle form submission for adding data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['edit_id'])) {
        // Update data
        $edit_id = $_POST['edit_id'];
        $edit_description = $_POST['edit_description'];
        $edit_image = $_FILES['edit_image']['name'];
        $target = "image/" . basename($edit_image);

        if (!empty($edit_image)) {
            move_uploaded_file($_FILES['edit_image']['tmp_name'], $target);
            $sql = "UPDATE about_us SET description='$edit_description', image='$edit_image' WHERE id='$edit_id'";
        } else {
            $sql = "UPDATE about_us SET description='$edit_description' WHERE id='$edit_id'";
        }
        mysqli_query($conn, $sql);
    } else {
        // Insert new data
        $description = $_POST['description'];
        $image = $_FILES['image']['name'];
        $target = "image/" . basename($image);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $sql = "INSERT INTO about_us (description, image) VALUES ('$description', '$image')";
            mysqli_query($conn, $sql);
        }
    }
}

// Handle delete request
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM about_us WHERE id='$delete_id'";
    mysqli_query($conn, $sql);
}

// Fetch and display data
$result = mysqli_query($conn, "SELECT * FROM about_us");
$no = 1; 
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $no++ . "</td>"; 
    echo "<td>" . htmlspecialchars($row['description']) . "</td>";
    echo "<td><img src='image/" . htmlspecialchars($row['image']) . "' alt='About us image' style='width:100px;'></td>";
    echo "<td>
            <button class='btn btn-warning btn-sm' onclick='editData(" . $row['id'] . ", \"" . htmlspecialchars($row['description']) . "\", \"" . htmlspecialchars($row['image']) . "\")'>Edit</button>
            <a href='a_about.php?delete_id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Delete</a>
          </td>";
    echo "</tr>";
}
?>

<script>
function editData(id, description, image) {
    document.getElementById('edit_id').value = id; 
    document.getElementById('edit_description').value = description; 
    document.getElementById('editDataModalLabel').innerText = 'Edit Data';
    $('#editDataModal').modal('show');
}
</script> 
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