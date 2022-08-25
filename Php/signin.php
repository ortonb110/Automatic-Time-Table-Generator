<?php
session_start();
include_once "config.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


if (!empty($email) && !empty($password)) {
    $emailSql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
    $passSql = mysqli_query($conn, "SELECT password FROM users WHERE password = '{$password}'");
    if ((mysqli_num_rows($emailSql) > 0) && (mysqli_num_rows($passSql) > 0)) {
        $sqliGetId = mysqli_query($conn, "SELECT unique_id FROM users WHERE email = '{$email}'");
        if ($sqliGetId) {
            $row = mysqli_fetch_assoc($sqliGetId);
            $_SESSION['unique_id'] = $row['unique_id'];
            echo "success";
        }
    } else {
        echo "Incorrect email or password";
    }
} else {
    echo "Enter email and password";
}