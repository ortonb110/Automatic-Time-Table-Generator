<?php
    include_once "config.php";

    $courseId = mysqli_real_escape_string($conn, $_POST['course_id']);
    $courseTitle = mysqli_real_escape_string($conn, $_POST['course_title']);
    $courseHours = mysqli_real_escape_string($conn, $_POST['duration']);
    $courseVenue = mysqli_real_escape_string($conn, $_POST['course_venue']);
    $courseLecturer = mysqli_real_escape_string($conn, $_POST['course_lecturer']);
    $courseDepartment = mysqli_real_escape_string($conn, $_POST['course_department']);


    if (!empty($courseId) && !empty($courseTitle) && !empty($courseHours) && !empty($courseVenue) && !empty($courseLecturer) && !empty($courseDepartment) ) {
        $getDepartmentId = mysqli_query($conn, "SELECT * FROM departments WHERE department_name = '{$courseDepartment}'");
        if (mysqli_num_rows($getDepartmentId) > 0) {
            $result = mysqli_fetch_assoc($getDepartmentId);
            $addToCourses = mysqli_query($conn, "INSERT INTO courses (course_id, course_title, course_hours, course_department, course_lecturer, course_venue) VALUES ('{$courseId}','{$courseTitle}', '{$courseHours}', '{$result['id']}', '{$courseLecturer}', '{$courseVenue}')");

            if ($addToCourses) {
                echo "success";
            }
        } else {
            echo "Failed to add course";
        }
    } else {
        echo "All fields required!";
    }
