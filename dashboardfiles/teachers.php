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
    <link rel="stylesheet" href="../normalize.css" />
    <link rel="stylesheet" href="../main.css" />
    <link rel="stylesheet" href="../CSS/dashboard.css" />
    <script src="../JavaScript/show-hide-navbar.js" defer></script>
</head>

<body>
<div class="wrapper">
    <header>
        <?php
        include_once "../Php/config.php";
        $sqli = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");
        if($sqli) {
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
                echo $row['fullname']; ?>
            </a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Info</a></li>
                <li><a class="dropdown-item" href="#">Account settings</a></li>
                <li><a class="dropdown-item" href="../index.php">Log out</a></li>
            </ul>
        </div>
    </header>
    <div class="hero">
        <section class="section">
            <div class="content">
                <a class="nav-item " href="../dashboard.php">
                        <span class="material-symbols-outlined material-icon">
                            library_books
                        </span>
                    <span class="text">Departments</span>

                </a>
                <a class="nav-item " href="./course.php">
                        <span class="material-symbols-outlined material-icon">
                            school
                        </span>
                    <span class="text">Courses</span>
                </a>
                <a class="nav-item active" href="#">
                        <span class="material-symbols-outlined material-icon">
                            person
                        </span>
                    <span class="text">Teachers</span>
                </a>
                <a class="nav-item" href="./timetable.php">
                        <span class="material-symbols-outlined material-icon">
                            table
                        </span>
                    <span class="text">Time Tables</span>
                </a>
            </div>
            <div class="sec-nav-content nav-active">
                <div class="nav-item">
                        <span class="material-symbols-outlined material-icon">
                            library_books
                        </span>
                </div>
                <div class="nav-item ">
                        <span class="material-symbols-outlined material-icon">
                            school
                        </span>
                </div>
                <div class="nav-item active">
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
                    <span>View Department</span>
                    <select>
                        <option value="0">Select Teachers:</option>
                        <option value="1">Computer Science</option>
                        <option value="2">Science laboratory Technology</option>
                        <option value="3">Mechanical Engineering</option>
                    </select>
                </div>
                <div class="add-department">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success " data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                        Add Teacher
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Teacher Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" class="form-group">
                                        <div class="form-items">
                                            <div class="form-list">
                                                <label for="name">Teacher's Name</label>

                                            </div>
                                            <input type="text" name="departmentname" id="name"
                                                   placeholder="Enter department name" />
                                        </div>
                                        <div class="form-items form-item-password">
                                            <div class="form-list">
                                                <label for="departmentabout">About</label>

                                            </div>
                                            <textarea id="bio" name="departmentabout" rows="4" cols="50">
                                                </textarea>
                                        </div>
                                        <div class="form-items form-item-password">
                                            <div class="form-list">
                                                <label for="courseTitle">Course Title</label>

                                            </div>
                                            <input type="text" name="courseTitle" id="courseTitle"
                                                   placeholder="Enter course title" />
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="department">
                <header>
                    <img src="../images/emblem-removebg-preview.png" alt="Accra technical university emblem"
                         class="logo">
                    <div>
                        <h1 class="department-title">Computer Science</h1>
                        <p class="sub-title">Accra Technical University</p>
                    </div>
                </header>
                <div class="department-details">
                    <img src="../images/hall.jpeg" alt="" class="department-image">
                    <p>Building capacity in computer algorithm through research and training, shaping academic
                        discussions in computer literacy with knowledge in the growth and utilization of modern
                        technology and equipment for complex computing is the focus of the Computer Science
                        Department.
                        The department through this programme is poised to deliver competency-based training to ease
                        the setting up of computer system software for individuals and corporate entities for the
                        progression and application of modern computing technology in the world of works.
                        It is the plan of the department to champion continuous efforts to run a broadly-based
                        computing discipline networking in hardware, software development, computer programming,
                        software engineering, software testing as well as installation, maintenance and repair of
                        computer systems.
                        These areas provide our students with the technical skills required to solve emerging
                        problems in industry as well as serving as the foundation for research and graduate studies.
                        Upon completion of this programme, graduates are better equipped with high-quality
                        real-world experience through applied tasks to prepare them with mid-level experience in the
                        progression of computer technology in industry.</p>
                </div>
            </section>

        </main>
    </div>
</div>
</body>

</html>