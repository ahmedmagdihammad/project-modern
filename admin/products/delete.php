<?php
    session_start();
    // if already logged IN
    if (!isset($_SESSION['loggedIN'])) {
    header('Location: ../login.php');
    exit();
    } 

    // include fiel database
    include('../config.php');

    $id = $_REQUEST['product_id'];

    // sql to delete a record
    $sql = "DELETE FROM products WHERE id='$id'";
    if (mysqli_query($connection, $sql)) {
        header('Location: index.php');
        exit();
    } else {
        header('Location: index.php');
        exit();
    }
        
    $connection->close();


?>