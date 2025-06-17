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
                    <h1 class="mt-4">Our Social Media</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">PT. Arga Bumi Indonesia</li>
                    </ol>
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
                                    <form action="a_introduction.php" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Upload Gambar</label>
                                            <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Deskripsi</label>
                                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="link" class="form-label">Link</label>
                                            <input type="url" class="form-control" id="link" name="link" required>
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
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                                <th>Link</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once 'sistem/koneksi.php';
                            $conn = open_connection();

                            // Handle form submission for adding data
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if (isset($_FILES['image']) && isset($_POST['description']) && isset($_POST['link'])) {
                                    $image = $_FILES['image']['name'];
                                    $description = $_POST['description'];
                                    $link = $_POST['link'];
                                    $target = "image/" . basename($image);
                                    
                                    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                                        $sql = "INSERT INTO introduction (image, description, link) VALUES ('$image', '$description', '$link')";
                                        mysqli_query($conn, $sql);
                                    }
                                }
                            }

                            // Handle delete requests
                            if (isset($_GET['delete_id'])) {
                                $delete_id = $_GET['delete_id'];
                                $sql = "DELETE FROM introduction WHERE id='$delete_id'";
                                mysqli_query($conn, $sql);
                            }

                            // Handle edit requests
                            if (isset($_POST['edit_id'])) {
                                $edit_id = $_POST['edit_id'];
                                if (isset($_POST['edit_description']) && isset($_POST['edit_link'])) {
                                    $edit_description = $_POST['edit_description'];
                                    $edit_link = $_POST['edit_link'];
                                    $edit_image = $_FILES['edit_image']['name'];
                                    $target = "image/" . basename($edit_image);

                                    if (!empty($edit_image)) {
                                        move_uploaded_file($_FILES['edit_image']['tmp_name'], $target);
                                        $sql = "UPDATE introduction SET description='$edit_description', link='$edit_link', image='$edit_image' WHERE id='$edit_id'";
                                    } else {
                                        $sql = "UPDATE introduction SET description='$edit_description', link='$edit_link' WHERE id='$edit_id'";
                                    }
                                    mysqli_query($conn, $sql);
                                }
                            }

                            // Fetch and display data
                            $result = mysqli_query($conn, "SELECT * FROM introduction");
                            $nomor = 1; 
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $nomor++ . "</td>"; 
                                echo "<td><img src='image/" . htmlspecialchars($row['image']) . "' alt='Image' style='width:100px;'></td>";
                                echo "<td>" . htmlspecialchars($row['description']) . "</td>";
                                echo "<td><a href='" . htmlspecialchars($row['link']) . "' target='_blank'>Link</a></td>"; // Display link
                                echo "<td>
                                        <button class='btn btn-warning btn-sm' onclick='editData(" . $row['id'] . ", \"" . htmlspecialchars($row['description']) . "\", \"" . htmlspecialchars($row['link']) . "\", \"" . htmlspecialchars($row['image']) . "\")'>Edit</button>
                                        <a href='a_introduction.php?delete_id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Delete</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

    <script>
    function editData(id, description, link, image) {
        document.getElementById('edit_id').value = id;
        document.getElementById('edit_description').value = description;
        document.getElementById('edit_link').value = link;
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
                    <form action="a_introduction.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="edit_id" name="edit_id">
                        <div class="mb-3">
                            <label for="edit_description" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="edit_description" name="edit_description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="edit_link" class="form-label">Link</label>
                            <input type="url" class="form-control" id="edit_link" name="edit_link" required>
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

<?php
// Close the connection
mysqli_close($conn);
?>
