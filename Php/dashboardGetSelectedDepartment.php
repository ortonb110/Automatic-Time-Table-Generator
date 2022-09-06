<?php
    include_once "config.php";
    $output = "";
    $sql = mysqli_query($conn, "SELECT * FROM departments");
    if ($sql) {
       while( $row = mysqli_fetch_assoc($sql)) {
           $output .= '<header>
                        <img src="./images/emblem-removebg-preview.png" alt="Accra technical university emblem"
                            class="logo">
                         <div>
                            <h1 id="department-title">'.$row['department_name'].'</h1>
                            <p class="sub-title">Accra Technical University</p>
                            </div>
                        </header>
                         <div class="department-details">
                            <img src="./images/hall.jpeg" alt="" class="department-image">
                             <p id="briefText">'.$row['briefText'].'</p>  
                        </div>';
       }

        echo $output;
    } else {
        echo "Failed";
    }