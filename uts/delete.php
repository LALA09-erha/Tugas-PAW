<?php

require('database/connect.php');
#delete data from database
session_start();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_153 WHERE id_153 = $id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "User deleted successfully";
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>