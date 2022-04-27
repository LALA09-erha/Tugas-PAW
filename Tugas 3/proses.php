<?php
session_start();
// redirect to database\connect.php
require('database/connect.php');

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
#check data on database
$check_username = "SELECT * FROM tbl_153 WHERE username = '$username' OR email = '$email'";
$result = mysqli_query($conn, $check_username);
#check length of data
if(strlen($username) < 5){
    $_SESSION['message'] = 'Username must be at least 5 characters';
    header("location: add.php");
    exit();
}

if(mysqli_num_rows($result) > 0){
    $_SESSION['message'] = "Username Or Email already exist";
    header('Location: add.php');
}else{
# Insert data to database
    $sql = "INSERT INTO tbl_153 (name,username, email) VALUES ('$name','$username', '$email')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "New User created successfully";
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>