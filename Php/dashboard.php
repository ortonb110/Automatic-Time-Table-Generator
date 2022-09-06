<?php
    //This file will take care of the backend for the dashboard html file
include_once "config.php";

$departmentName = mysqli_real_escape_string($conn, $_POST['departmentName']);
$departmentAbout = mysqli_real_escape_string($conn, $_POST['departmentAbout']);

if (!empty($departmentAbout) && !empty($departmentName)) {
    $sqlQuery = mysqli_query($conn,"INSERT INTO departments (department_name, briefText) VALUES ('{$departmentName}', '{$departmentAbout}')");
    if ($sqlQuery) {
        echo "success";
    }

} else {
    echo "Failed";
}