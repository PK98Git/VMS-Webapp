<?php
include_once 'database.php';
// $result = mysqli_query($conn,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Add System Operator</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="Homepage.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

</head>
<style>
    .invalid{
        font-size: 13px;
        color: red;
    }
</style>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include '../navbar.php' ?>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info ">
                        <i class="bi bi-menu-button-fill"></i>
                        <span></span>
                    </button>
                    <h3 style="margin-right: 30%;">Vaccination Management System</h3>
                </div>
            </nav>
            <!-- ***** edit  breadcrumb according to your page**** -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add System Operator</li>
                </ol>
            </nav>


            <!-- *****Create your content inside the below div**** -->
            <div>

                <div class="container">
                    <main>

                        <div class="row py-3">

                            <div class="col-md-7 col-lg-8">
                                <form class="needs-validation" action="createSystem.php" method="POST" onsubmit="return validateSystem()" novalidate>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label for="firstName" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
                                            <div class="invalid-feedback">
                                                Name is required.
                                            </div>
                                                <div class="invalid" id="errorName"></div>
                                            </div>


                                        <div class="col-sm-6">
                                            <label for="nic" class="form-label">NIC</label>
                                            <input type="text" class="form-control" id="nic" name="nic" placeholder="" value="" required>
                                            <div class="invalid-feedback">
                                                NIC is required.
                                            </div>
                                            <div class="invalid" id="errornic"></div>
                                        </div>

                                        <div class="col-sm-6 pt-3">
                                            <label for="ContactNumber" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="ContactNumber" name="ContactNumber" placeholder=""  value="" required>
                                            <div class="invalid-feedback">
                                                Phone Number is required.
                                            </div>
                                            <div class="invalid" id="errorContactNumber"></div>
                                        </div>

                                        <div class="col-sm-6 pt-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="" value="" required>
                                            <div class="invalid-feedback">
                                                Email is required.
                                            </div>
                                            <div class="invalid" id="erroremail"></div>
                                        </div>

                            
                                        <div class="col-12 pt-3">
                                            <label for="address" class="form-label">Address </label>
                                            <textarea type="text" class="form-control" id="address" name="address" required></textarea>
                                            <div class="invalid-feedback">
                                                Address is required.
                                            </div>
                                            <div class="invalid" id="erroraddress"></div>
                                        </div>

                                        <div class="col-sm-6 pt-3">
                                            <label for="ContactNumber" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder=""  value="" required>
                                            <div class="invalid-feedback">
                                                Username is required.
                                            </div>
                                            <div class="invalid" id="errorusername"></div>
                                        </div>

                                        <div class="col-sm-6 pt-3">
                                            <label for="email" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="" value="" required>
                                            <div class="invalid-feedback">
                                                Password is required.
                                            </div>
                                            <div class="invalid" id="errorpassword"></div>
                                            
                                        </div>

                            
                                        

                                    </div>

                                    <button class="w-100 btn btn-primary btn-lg" type="submit" value="submit" name="submit" >Add System Operator</button>
                                </form>
                            </div>
                        </div>
                    </main>

                </div>

            </div>
            <!-- *****End of editing div**** -->
        </div>
    </div>

    <script src="form-validation.js"></script>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>