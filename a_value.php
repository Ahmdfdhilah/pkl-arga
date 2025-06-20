<?php
include_once 'sistem/koneksi.php';
$conn = open_connection();
// Handle form submission for adding data
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['edit_id'])) {
    $value = $_POST['value'];
    $description = $_POST['description'];
    
    // Handle image upload
    $image = $_FILES['image']['name'];
    $target = "image/" . basename($image);
    
    // Insert data into the database
    $sql = "INSERT INTO values_table (image, value, description) VALUES ('$image', '$value', '$description')";
    
    if (mysqli_query($conn, $sql) && move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        header("Location: a_value.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Handle form submission for editing data
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_id'])) {
    $edit_id = $_POST['edit_id'];
    $value = $_POST['value'];
    $description = $_POST['description'];
    
    // Update the value in the database
    $stmt = $conn->prepare("UPDATE values_table SET value = ?, description = ? WHERE id = ?");
    $stmt->bind_param("ssi", $value, $description, $edit_id);
    $stmt->execute();
    $stmt->close();
    header("Location: a_value.php");
    exit();
}

// Handle delete request
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM values_table WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    $stmt->close();
    header("Location: a_value.php");
    exit();
}

// Fetch existing values for display
$values = mysqli_query($conn, "SELECT * FROM values_table");
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
        <a class="navbar-brand ps-3" href="a_home.php">Admin</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
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
                    <h1 class="mt-4">Value</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">PT. Arga Bumi Indonesia</li>
                    </ol>
                    <!-- Button to open the modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal">
                        Tambah Data
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addDataModalLabel">Tambah Value</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="a_value.php" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Gambar</label>
                                            <input type="file" class="form-control" id="image" name="image" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="value" class="form-label">Value</label>
                                            <input type="text" class="form-control" id="value" name="value" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Deskripsi Singkat</label>
                                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
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
                                    <h5 class="modal-title" id="editDataModalLabel">Edit Value</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editForm" action="a_value.php" method="POST">
                                        <input type="hidden" id="edit_id" name="edit_id">
                                        <div class="mb-3">
                                            <label for="edit_value" class="form-label">Value</label>
                                            <input type="text" class="form-control" id="edit_value" name="value" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_description" class="form-label">Deskripsi Singkat</label>
                                            <textarea class="form-control" id="edit_description" name="description" rows="3" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- Display existing values -->
                <h2 class="mt-4"> </h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; while ($row = mysqli_fetch_assoc($values)): ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><img src="image/<?php echo htmlspecialchars($row['image']); ?>" alt="Image" style="width: 100px;"></td>
                                <td><?php echo htmlspecialchars($row['description']); ?></td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editData(<?php echo $row['id']; ?>, '<?php echo htmlspecialchars($row['value']); ?>', '<?php echo htmlspecialchars($row['description']); ?>')">Edit</button>
                                    <a href="a_value.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                        </tbody>
                    </table>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script>
        function editData(id, value, description) {
            document.getElementById('edit_id').value = id;
            document.getElementById('edit_value').value = value;
            document.getElementById('edit_description').value = description;
            $('#editDataModal').modal('show');
        }
    </script>
</body>
</html>
