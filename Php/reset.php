<?php
session_start();
    include_once "config.php";
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $id = $_SESSION['unique_id'];

    if (!empty($password)) {
        $sqlUpdatePassword = mysqli_query($conn, "UPDATE users SET password = '{$password}' WHERE unique_id = {$id} ");
        if ($sqlUpdatePassword) {
            echo "success";
        } else {
            echo "Failed, please try again later";
        }
    }
