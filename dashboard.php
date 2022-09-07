<?php
    session_start();
    if (!isset($_SESSION['unique_id'])) {
        header("location: ./index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AIT Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="./CSS/dashboard.css" />
    <script src="./JavaScript/show-hide-navbar.js" defer></script>
    <script src="./JavaScript/dashboard.js" defer></script>

</head>

<body>
    <div class="wrapper">
        <header>
            <?php
            include_once "Php/config.php";
            $sqli = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");
            $result = mysqli_query($conn, "SELECT * FROM departments");
            if($sqli && $result) {
                $row = mysqli_fetch_assoc($sqli);

            }
          ?>
            <div class="menu">
                <button>
                    <span class="material-symbols-outlined toggle-open"> menu </span>
                    <span class="material-symbols-outlined toggle-close"> close </span>
                </button>
                <h1>AIT Dashboard</h1>
            </div>
            <div class="dropdown">
                <a class="btn btn-success dropdown-toggle toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <?php
                echo $row['fullname'];
            ?>
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Info</a></li>
                    <li><a class="dropdown-item" href="#">Account settings</a></li>
                    <li><a class="dropdown-item" href="./index.php">Log out</a></li>
                </ul>
            </div>
        </header>
        <div class="hero">
            <section class="section">
                <div class="content">
                    <a class="nav-item active" href="#">
                        <span class="material-symbols-outlined material-icon">
                            library_books
                        </span>
                        <span class="text">Departments</span>

                    </a>
                    <a class="nav-item" href="./dashboardfiles/course.php">
                        <span class="material-symbols-outlined material-icon">
                            school
                        </span>
                        <span class="text">Courses</span>
                    </a>
                    <a class="nav-item" href="./dashboardfiles/teachers.php">
                        <span class="material-symbols-outlined material-icon">
                            person
                        </span>
                        <span class="text">Teachers</span>
                    </a>
                    <a class="nav-item" href="./dashboardfiles/timetable.php">
                        <span class="material-symbols-outlined material-icon">
                            table
                        </span>
                        <span class="text">Time Tables</span>
                    </a>
                </div>
                <div class="sec-nav-content nav-active">
                    <div class="nav-item active">
                        <span class="material-symbols-outlined material-icon">
                            library_books
                        </span>
                    </div>
                    <div class="nav-item">
                        <span class="material-symbols-outlined material-icon">
                            school
                        </span>
                    </div>
                    <div class="nav-item">
                        <span class="material-symbols-outlined material-icon">
                            person
                        </span>
                    </div>
                    <div class="nav-item">
                        <span class="material-symbols-outlined material-icon">
                            table
                        </span>
                    </div>
                </div>
            </section>
            <main class="main-content">
                <div class="addDepartment">
                    <div class="custom-select">
                        <span>View Departments</span>
                        <label>
                            <select id="mySelect" onchange="selectDepartmentDetails(this.value)">
                                <option value="0">Select Department</option>
                                <?php
                                   foreach ($result as $row1) {
                                       echo '<option value="'.$row1['id'].'"> '.$row1['department_name'].' </option>';
                                   }
                                ?>
                            </select>
                        </label>
                    </div>
                    <div class="add-department">
                        <!- Button trigger modal -->
                        <button type="button" class="btn btn-success " data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Add Department
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" class="form-group">
                                            <div class="form-items">
                                                <div class="form-list">
                                                    <label for="departmentName">Department Name</label>
                                                </div>
                                                <input type="text" name="departmentName" id="name"
                                                    placeholder="Enter department name" />
                                            </div>
                                            <div class="form-items form-item-password">
                                                <div class="form-list">
                                                    <label for="departmentAbout">About</label>
                                                </div>
                                                <textarea id="bio" name="departmentAbout" rows="4" cols="50">
                                                </textarea>
                                            </div>
                                            <input type="submit" id="submitBtn"/>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="department" id="departmentSection">
                </section>
                <!-- <div class="courseTable">
                    <table >
                        <tr>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Credit Hours</th>
                            <th>Remarks</th>
                            <th>Lecturer</th>
                            <th>Remarks</th>
                        </tr>
                        <tr>
                            <td>h</td>
                            <td>h</td>
                            <td>5</td>
                            <td>5</td>
                        </tr>
                    </table>
                </div> -->
                <table class="table table-dark mb-5">
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>

                </table>
            </main>
            
        </div>
    </div>
    <script src="./JavaScript/selectDepartment.js" defer ></script>
</body>

</html>