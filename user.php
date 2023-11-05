<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>User Account</title>
</head>

<body>
    <div class="row flex">
        <div class="col bg-dark vh-100 sticky-top" style="width: 100px;">
            <h2 style="margin-bottom: 2rem; text-align:center; font-family:Times New Roman; color:white;">Ced Enterprise</h2>
            <ul style="font-size:130%;">
            <li class="list-group-item" style="margin-bottom: 2rem;"><a href="adminpage.php" class="text-white text-decoration-none">Home</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Employee_registration_save.php" class="text-white text-decoration-none">Employee Registration</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="" class="text-white text-decoration-none">Employee Report</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Payroll.php" class="text-white text-decoration-none">Payroll</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="" class="text-white text-decoration-none">Payroll Report</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Cellphone.php" class="text-white text-decoration-none">POS</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="" class="text-white text-decoration-none">POS Sales Report</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="user_account_info.php" class="text-lightskyblue text-decoration-none">User Account</a></li>
                <li class="list-group-item" style="margin-bottom: 2rem;"><a href="Login.php" class="text-white text-decoration-none">Logout</a></li>
            </ul>
        </div>
        <div class="col-8  flex-grow-1" style="background-image:url('css/bgsite.jpg');">
            <div class="container d-flex my-5">
                <!--====== CONTACT ONE PART START ======-->
                <section class="contact-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                                <div class="card" style="width: 50%; margin-top:12%; margin-left:50%;">
                                    <img src="background/null.jpg" class="card-img-top" alt="..." height="50%">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-8">
                                <div class="section-title mt-45">
                                    <h3 class="title">User account Information</h3>
                                </div>
                                <div class="contact-form form-style-four mt-15">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>First Name</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-user"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>

                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Middle Name</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-envelope"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Last name</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-phone"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Suffix</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-bubble"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Department</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-user"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>

                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Username</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-envelope"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Password</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-phone"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Confirm Password</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-bubble"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>User type</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-user"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>

                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>User status</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-envelope"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Employee Number</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-phone"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:3%;">
                                                <div class="form-input mt-15">
                                                    <label>Department</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-bubble"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="well mt-5 d-flex justify-content-end gap-4" style="margin-right: 15%;">
                                            <button type="button" class="btn btn-primary">Update</button>
                                            <button type="button" class="btn btn-warning">Delete</button>
                                            <button type="button" class="btn btn-light">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- contact form -->
                            </div>

                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                </section>
                <!--====== CONTACT ONE PART ENDS ======-->
            </div>
        </div>

    </div>
</body>

</html>