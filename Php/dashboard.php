<?php
    //This file will take care of the backend for the dashboard html file
include_once "config.php";

$departmentName = mysqli_real_escape_string($conn, $_POST['departmentName']);
$departmentAbout = mysqli_real_escape_string($conn, $_POST['departmentAbout']);

if (!empty($departmentAbout) && !empty($departmentName)) {
    $sqliCheck = mysqli_query($conn, "SELECT department_name FROM departments WHERE department_name='{$departmentName}'");
    if(mysqli_num_rows($sqliCheck) > 0) {
        echo "Department Already Exist!";
    } else {
        $sqlQuery = mysqli_query($conn,"INSERT INTO departments (department_name, briefText) VALUES ('{$departmentName}', '{$departmentAbout}')");
        $sqlQuery2 = mysqli_query($conn, "SELECT id FROM departments WHERE department_name='{$departmentName}'");
        if ($sqlQuery && $sqlQuery2) {
            $result = mysqli_fetch_assoc($sqlQuery2);
            $sqliQuery3 = mysqli_query($conn, "INSERT INTO courses (course_department) VALUES ('{$result['id']}')");
            echo "success";
        }
    }

} else {
    echo "All fields are required!";
}