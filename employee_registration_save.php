<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Jen's | Employee Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/employee_registration_design.css?v.3">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Menu -->
            <nav id="sidebar">
                <div class="position-sticky">
                    <h1 class="text-white fs-5 text-center my-5; font-family:Times New Roman;">Ced's Enterprise</h1>
                    <ul class="nav flex-column text-start">
                        <li class="nav-item">
                            <a class="nav-link active" href="admin.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="employee_registration_save.php">Employee Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Employee Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="payroll.php">Payroll</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Payroll Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="burger.php">POS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">POS Sales Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user.php">User Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Page content goes here -->
                <div id="page-content">
                    <!-- CONTENT HERE -->
                    <?php include('process/employee_registration_save_page.php'); ?>
                </div>
            </main>
        </div>
    </div>
</body>
</html>