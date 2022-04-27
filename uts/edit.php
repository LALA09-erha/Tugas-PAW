<<<<<<< HEAD
<?php
session_start();
require('database/connect.php');
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_153 WHERE id_153 = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

#update data to database
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    if($row['email_153'] == $email && $row['nama_153'] == $name){
        $_SESSION['message'] = "No changes made";
        header('Location: index.php');
        exit();
    }
    $sql2 = "UPDATE tbl_153 SET nama_153='$name', email_153 = '$email' WHERE id_153 = $id";
    if ($conn->query($sql2) === TRUE) {
        $_SESSION['message'] = "User updated successfully";
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Data User</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Erha App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <h1>Edit Data User</h1>
    <?php
    if(!empty($_SESSION['message'])){
        echo '<div class="alert alert-warning" role="alert">'.$_SESSION['message'].'</div>';
        unset($_SESSION['message']);
    }
    ?>
    <form method="POST" action="">
        <input type="number" hidden value="<?php $row['id_153']?>" name="id" id='id'>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['nama_153']?>" required  placeholder="Input Name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email_153']?>" required placeholder="Input Email">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
<!--     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
=======
<?php
session_start();
require('database/connect.php');
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_153 WHERE id_153 = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

#update data to database
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    if($row['email_153'] == $email && $row['nama_153'] == $name){
        $_SESSION['message'] = "No changes made";
        header('Location: index.php');
        exit();
    }
    $sql2 = "UPDATE tbl_153 SET nama_153='$name', email_153 = '$email' WHERE id_153 = $id";
    if ($conn->query($sql2) === TRUE) {
        $_SESSION['message'] = "User updated successfully";
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Data User</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Erha App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <h1>Edit Data User</h1>
    <?php
    if(!empty($_SESSION['message'])){
        echo '<div class="alert alert-warning" role="alert">'.$_SESSION['message'].'</div>';
        unset($_SESSION['message']);
    }
    ?>
    <form method="POST" action="">
        <input type="number" hidden value="<?php $row['id_153']?>" name="id" id='id'>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['nama_153']?>" required  placeholder="Input Name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email_153']?>" required placeholder="Input Email">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
<!--     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
>>>>>>> 678570841072775bd7d76f7b7fd84e67dbdab8b2
</html>