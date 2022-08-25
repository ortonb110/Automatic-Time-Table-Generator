<?php
    $conn = mysqli_connect("localhost", "root", "", "aitimetable" );

    if(!$conn) {
        echo "Connection to database failed! " .mysqli_connect_error();
    }