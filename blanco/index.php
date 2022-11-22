<?php
session_start();

if(!isset($_SESSION['user_id'])) Header("Location: login.php");

require 'dbcon.php';
$user_id = $_SESSION['user_id'];
$admin = false;
$sqlAdmin = "SELECT * FROM users where id = '$user_id'";
$resultAdmin = mysqli_query($con, $sqlAdmin);

if (mysqli_num_rows($resultAdmin) > 0) {
  foreach ($resultAdmin as $user) {
    if($user['admin'] == 1) $admin = true;
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Student Create</title>
</head>

<body>

  <div class="container mt-5">

    <?php include('message.php'); ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Student Add
            <a href="logout.php" class="btn btn-danger float-end">Cerrar sesion</a>
              <?php if($admin == true){ ?>
                <a href="dashboard.php" class="btn btn-danger float-end">BACK</a>
              <?php } ?>
            </h4>
          </div>
          <div class="card-body">
            <form action="code.php" method="POST" enctype="multipart/form-data">

              <div class="mb-3">
                <label>Student Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="mb-3">
                <label>Student Email</label>
                <input type="email" name="email" class="form-control">
              </div>
              <div class="mb-3">
                <label>Student Phone</label>
                <input type="text" name="phone" class="form-control">
              </div>
              <div class="mb-3">
                <label>Student Course</label>
                <input type="text" name="course" class="form-control">
              </div>
              <div class="image-3">
                Añadir imagen: <input name="archivo" id="archivo" type="file" />
              </div>
              <div class="mb-3">
                <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>