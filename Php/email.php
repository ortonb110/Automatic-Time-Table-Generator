<?php
    session_start();
    include_once "config.php";

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    if (!empty($email)) {
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) {
            $result = mysqli_query($conn, "SELECT unique_id FROM users where email = '{$email}'");
            $row = mysqli_fetch_assoc($result);
            $userId = $row['unique_id'];
            $_SESSION['unique_id'] = $userId;
            echo "success";
        } else {
            echo "$email does not exist";
        }
    } else {
        echo "Enter email address";
    }