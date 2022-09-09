<?php
include_once "config.php";
$id =intval( $_GET['id']);
$courseOutput = "";
$getCourses = mysqli_query($conn, "SELECT * FROM courses WHERE course_department = '{$id}'");
if ( $getCourses) {
    while( $result = mysqli_fetch_assoc($getCourses)) {

        $courseOutput .= '<tr>
                        <th scope="row">'.$result['course_id'].'</th>
                        <td>'.$result['course_title'].'</td>
                        <td>'.$result['course_hours'].'</td>
                        <td>'.$result['course_venue'].'</td>
                        <td>'.$result['course_lecturer'].'</td>
                    </tr>';
    }

    echo $courseOutput;
} else {
    echo "Failed";
}