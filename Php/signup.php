<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fullName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (!empty($fname) && !empty($email) && !empty($password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if (mysqli_num_rows($sql) > 0) {
                echo "$email already exist";
            }else {
                $sql1 = mysqli_query($conn, "INSERT INTO users (fullname, email, password) VALUES( '{$fname}','{$email}', '{$password}')");
                $sqliGetId = mysqli_query($conn, "SELECT unique_id FROM users WHERE email = '{$email}' AND fullname = '{$fname}'");
                if ($sql1 && $sqliGetId) {
                    $row = mysqli_fetch_assoc($sqliGetId);
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo "success";
                } else {
                    echo "Something went wrong!";
                }
            }
        } else {
            echo "$email. is not valid";
        }
    } else {
        echo "All fields are required!";
    }