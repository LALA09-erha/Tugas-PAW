<?php

require('database/connect.php');
#delete data from database
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_153 WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "User deleted successfully";
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>