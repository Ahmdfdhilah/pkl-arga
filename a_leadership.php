<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Leadership - Arga</title>
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
                        <h1 class="mt-4">Leadership</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="a_home.php">Home</a></li>
                            <li class="breadcrumb-item active">Leadership</li>
                        </ol>
                        
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal">
                            Tambah Data
                        </button>

                        <div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addDataModalLabel">Tambah Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="a_leadership.php" method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="fullName" name="fullName" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="position" class="form-label">Jabatan</label>
                                                <input type="text" class="form-control" id="position" name="position" required>
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

                        <table class="table table-striped mt-4">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jabatan</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once 'sistem/koneksi.php';
                                $conn = open_connection();

                                // Handle form submission for adding data
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    if (isset($_POST['fullName']) && isset($_POST['position']) && isset($_FILES['image'])) {
                                        $fullName = $_POST['fullName'];
                                        $position = $_POST['position'];
                                        $image = $_FILES['image']['name'];
                                        $target = "image/" . basename($image);
                                        
                                        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                                            $sql = "INSERT INTO leadership (full_name, position, image) VALUES ('$fullName', '$position', '$image')";
                                            mysqli_query($conn, $sql);
                                        }
                                    }
                                }

                                // Handle edit and delete requests
                                if (isset($_GET['delete_id'])) {
                                    $delete_id = $_GET['delete_id'];
                                    $sql = "DELETE FROM leadership WHERE id='$delete_id'";
                                    mysqli_query($conn, $sql);
                                }

                                if (isset($_POST['edit_id'])) {
                                    $edit_id = $_POST['edit_id'];
                                    if (isset($_POST['edit_fullName']) && isset($_POST['edit_position'])) {
                                        $edit_fullName = $_POST['edit_fullName'];
                                        $edit_position = $_POST['edit_position'];
                                        $edit_image = $_FILES['edit_image']['name'];
                                        $target = "image/" . basename($edit_image);

                                        if (!empty($edit_image)) {
                                            move_uploaded_file($_FILES['edit_image']['tmp_name'], $target);
                                            $sql = "UPDATE leadership SET full_name='$edit_fullName', position='$edit_position', image='$edit_image' WHERE id='$edit_id'";
                                        } else {
                                            $sql = "UPDATE leadership SET full_name='$edit_fullName', position='$edit_position' WHERE id='$edit_id'";
                                        }
                                        mysqli_query($conn, $sql);
                                    }
                                }

                                // Fetch and display data
                                $result = mysqli_query($conn, "SELECT * FROM leadership");
                                $no = 1; 
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $no++ . "</td>"; 
                                    echo "<td>" . htmlspecialchars($row['full_name']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['position']) . "</td>";
                                    echo "<td><img src='image/" . htmlspecialchars($row['image']) . "' alt='Leadership image' style='width:100px;'></td>";
                                    echo "<td>
                                            <button class='btn btn-warning btn-sm' onclick='editData(" . $row['id'] . ", \"" . htmlspecialchars($row['full_name']) . "\", \"" . htmlspecialchars($row['position']) . "\", \"" . htmlspecialchars($row['image']) . "\")'>Edit</button>
                                            <a href='a_leadership.php?delete_id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Delete</a>
                                          </td>";
                                    echo "</tr>";
                                }
                                ?>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script>
function editData(id, fullName, position, image) {
    console.log("Edit Data Called");
    document.getElementById('edit_id').value = id;
    document.getElementById('edit_fullName').value = fullName;
    document.getElementById('edit_position').value = position;
    document.getElementById('edit_image_preview').src = 'image/' + image;
    $('#editDataModal').modal('show');
}

        </script>

        <!-- Modal for editing data -->
        <div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="editDataModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editDataModalLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="a_leadership.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" id="edit_id" name="edit_id">
                            <div class="mb-3">
                                <label for="edit_fullName" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="edit_fullName" name="edit_fullName" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_position" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" id="edit_position" name="edit_position" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_image" class="form-label">Upload Gambar</label>
                                <input class="form-control" type="file" id="edit_image" name="edit_image" accept="image/*">
                                <img id="edit_image_preview" src="" alt="Current Image" style="width:100px; margin-top:10px;">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php
// Close the connection
mysqli_close($conn);
?>
