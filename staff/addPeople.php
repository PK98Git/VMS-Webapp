<?php 
include "database.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add People</title>
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
                    <li class="breadcrumb-item active" aria-current="page">Add People</li>
                </ol>
            </nav>
            <!-- *****Create your content inside the below div**** -->
            <div>
                <div class="container">
                    <main>
                        <div class="row py-3">
                            <div class="col-md-7 col-lg-8">
                                <form class="needs-validation" action="createPeople.php" method="POST" onsubmit="return validatePeople()" novalidate>
                                    <div class="row g-3">
                                        <div class="col-sm-6 pt-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full name" value="" required>
                                            <div class="invalid-feedback">
                                                first name is required.
                                            </div>
                                                <div class="invalid" id="errorName"></div>
                                            </div>
                                        <div class="col-sm-6 pt-3">
                                            <label for="nic" class="form-label">NIC</label>
                                            <input type="text" class="form-control" id="nic" name="nic" placeholder="Enter NIC" value="" required>
                                            <div class="invalid-feedback">
                                                NIC is required.
                                            </div>
                                            <div class="invalid" id="errornic"></div>
                                        </div>
                                        <div class="col-sm-6 pt-3">
                                            <label for="ContactNumber" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="ContactNumber" name="ContactNumber" placeholder="+94xxxxxxxxx" value="" required>
                                            <div class="invalid-feedback">
                                                Phone Number is required.
                                            </div>
                                            <div class="invalid" id="errorContactNumber"></div>
                                        </div>
                                        <div class="col-sm-6 pt-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="" required>
                                            <div class="invalid-feedback">
                                                Email is required.
                                            </div>
                                            <div class="invalid" id="erroremail"></div>
                                        </div>
                                        <div class="col-sm-6 pt-3">
                                            <label for="dob" class="form-label">Date of Birth </label>
                                            <input type="date" class="form-control" id="dob" name="dob" required>
                                            <div class="invalid-feedback">
                                                Date of Birth  is required.
                                            </div>
                                            <div class="invalid" id="errordob"></div>
                                        </div>
                                        <div class="col-sm-6 pt-3">
                                            <label for="qualification" class="form-label pr-3">Gender </label>
                                            <div class="row pl-3 pt-2">
                                                <div class="form-check pr-3">
                                                    <input id="male" name="gender" value="male" type="radio" class="form-check-input" checked required>
                                                    <label class="form-check-label" for="credit">Male</label>
                                                </div>
                                                <div class="form-check">
                                                    <input id="female" name="gender" value="female" type="radio" class="form-check-input" required>
                                                    <label class="form-check-label" for="debit">Female</label>
                                                </div>
                                            </div>
                                            <div class="invalid" id="errorgender"></div>
                                        </div>
                                        <div class="col-12 pt-3">
                                            <label for="address" class="form-label">Address </label>
                                            <textarea type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required></textarea>
                                            <div class="invalid-feedback">
                                                Address is required.
                                            </div>
                                            <div class="invalid" id="erroraddress"></div>
                                        </div>
                                        <div class="col-sm-4 pt-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="form-label">Province </label>
                                                <select class="form-control" name="province" id="province" required>
                                                    <option value="0">Select Province</option>
                                                    <option value="Western Province">Western Province</option>
                                                    <option value="Central Province">Central Province</option>
                                                    <option value="Southern Province">Southern Province</option>
                                                    <option value="Uva Province">Uva Province</option>
                                                    <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                                                    <option value="NorthWest Province">NorthWest Province</option>
                                                    <option value="NorthCentral Province">NorthCentral Province</option>
                                                    <option value="Nothern Province">Nothern Province</option>
                                                    <option value="Eastern Province">Eastern Province</option>
                                                </select>
                                                <div class="invalid" id="errorprovince"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 pt-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="form-label">District </label>
                                                <select class="form-control" name="district" id="district" required>
                                                    <option value="0">Select District</option>
                                                    <option value="Ampara">Ampara</option>
                                                    <option value="Anuradhapura">Anuradhapura</option>
                                                    <option value="Badulla">Badulla</option>
                                                    <option value="Batticaloa">Batticaloa</option>
                                                    <option value="Colombo">Colombo</option>
                                                    <option value="Galle">Galle</option>
                                                    <option value="Gampaha">Gampaha</option>
                                                    <option value="Hambantota">Hambantota</option>
                                                    <option value="Jaffna">Jaffna</option>
                                                    <option value="Kalutara">Kalutara</option>
                                                    <option value="Kandy">Kandy</option>
                                                    <option value="Kegalle">Kegalle</option>
                                                    <option value="Kilinochchi">Kilinochchi</option>
                                                    <option value="Kurunegala">Kurunegala</option>
                                                    <option value="Mannar">Mannar</option>
                                                    <option value="Matale">Matale</option>
                                                    <option value="Matara">Matara</option>
                                                    <option value="Monaragala">Monaragala</option>
                                                    <option value="Mullaitivu">Mullaitivu</option>
                                                    <option value="NuwaraEliya">NuwaraEliya</option>
                                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                                    <option value="Puttalam">Puttalam</option>
                                                    <option value="Ratnapura">Ratnapura</option>
                                                    <option value="Trincomalee">Trincomalee</option>
                                                    <option value="Vavuniya">Vavuniya</option>
                                                </select>
                                                <div class="invalid" id="errordistrict"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 pt-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="form-label">DS Division </label>
                                                <select class="form-control" name="ds" id="ds" required>
                                                    <option value="0">Select DS Division</option>
                                                    <option value="Colombo">Colombo</option>
                                                    <option value="Kolonnawa">Kolonnawa</option>
                                                    <option value="Kaduwela">Kaduwela</option>
                                                    <option value="Homagama">Homagama</option>
                                                    <option value="Hanwella">Hanwella</option>
                                                    <option value="Padukka">Padukka</option>
                                                    <option value="Maharagama">Maharagama</option>
                                                    <option value="Sri Jayawardanapura Kotte">Sri Jayawardanapura Kotte</option>
                                                    <option value="Thimbirigasyaya">Thimbirigasyaya</option>
                                                    <option value="Dehiwala-Mount Lavinia">Dehiwala-Mount Lavinia</option>
                                                    <option value="Ratmalana">Ratmalana</option>
                                                    <option value="Moratuwa">Moratuwa</option>
                                                    <option value="Kesbewa">Kesbewa</option>
                                                    <option value="Negombo">Negombo</option>
                                                    <option value="Katana">Katana</option>
                                                    <option value="Divulapitiya">Divulapitiya</option>
                                                    <option value="Mirigama">Mirigama</option>
                                                    <option value="Minuwangoda">Minuwangoda</option>
                                                    <option value="Wattala">Wattala</option>
                                                    <option value="Ja-Ela">Ja-Ela</option>
                                                    <option value="Gampaha">Gampaha</option>
                                                    <option value="Attanagalla">Attanagalla</option>
                                                    <option value="Dompe">Dompe</option>
                                                    <option value="Mahara">Mahara</option>
                                                    <option value="Kelaniya">Kelaniya</option>
                                                    <option value="Biyagama">Biyagama</option>
                                                    <option value="Panadura">Panadura</option>
                                                    <option value="Bandaragama">Bandaragama</option>
                                                    <option value="Horana">Horana</option>
                                                    <option value="Ingiriya">Ingiriya</option>
                                                    <option value="Bulathsinhala">Bulathsinhala</option>
                                                    <option value="Madurawela">Madurawela</option>
                                                    <option value="Millaniya">Millaniya</option>
                                                    <option value="Kalutara">Kalutara</option>
                                                    <option value="Beruwala">Beruwala</option>
                                                    <option value="Dodangoda">Dodangoda</option>
                                                    <option value="Mathugama">Mathugama</option>
                                                    <option value="Agalawatta">Agalawatta</option>
                                                    <option value="Palindanuwara">Palindanuwara</option>
                                                    <option value="Walallavita">Walallavita</option>
                                                </select>
                                                <div class="invalid" id="errords"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="w-100 btn btn-primary btn-lg mt-4" type="submit" value="submit" name="submit">Add People</button>
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