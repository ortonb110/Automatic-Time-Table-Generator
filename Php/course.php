<?php
include_once "config.php";
$output = "";
$sql = mysqli_query($conn, "SELECT * FROM courses");
if ($sql) {

    while($row = mysqli_fetch_assoc($sql)) {
        echo '
            <tbody>
                 <tr>
                   <th scope="row">'.$row["course_id"].'</th>
                   <td>'.$row["course_title"].'</td>
                   <td>'.$row["course_hours"].'</td>
                   <td>'.$row["course_lecturer"].'</td>
                   <td>'.$row["course_venue"].'</td>
                   </tr>
                <tr>
            </tbody>
        ';
    }
} else {
    echo "Failed";
}
