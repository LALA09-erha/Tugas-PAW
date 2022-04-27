<<<<<<< HEAD
<?php
session_start();
// redirect to database\connect.php
require('database/connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
#check data on database
$check = "SELECT * FROM tbl_153 WHERE  email_153 = '$email'";
$result = mysqli_query($conn, $check);
#check length of data

if(mysqli_num_rows($result) > 0){
    $_SESSION['message'] = "Email already exist";
    header('Location: add.php');
}else{
# Insert data to database
    $sql = "INSERT INTO tbl_153 (nama_153, email_153) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "New User created successfully";
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

=======
<?php
session_start();
// redirect to database\connect.php
require('database/connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
#check data on database
$check = "SELECT * FROM tbl_153 WHERE  email_153 = '$email'";
$result = mysqli_query($conn, $check);
#check length of data

if(mysqli_num_rows($result) > 0){
    $_SESSION['message'] = "Email already exist";
    header('Location: add.php');
}else{
# Insert data to database
    $sql = "INSERT INTO tbl_153 (nama_153, email_153) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "New User created successfully";
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

>>>>>>> 678570841072775bd7d76f7b7fd84e67dbdab8b2
?>