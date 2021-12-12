<?php 
include "config.php";
$result = mysqli_query($conn,"SELECT * FROM schedule order by id");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vaccination</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="Homepage.css">
    <link rel="stylesheet" href="Vac&Sched.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
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
                    <li class="breadcrumb-item"><a href="#">Vaccination</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Vaccinate</li>
                </ol>
            </nav>
<!-- link for breadcrumb editing - https://getbootstrap.com/docs/5.1/components/breadcrumb// -->
    <!-- *****Create your content inside the below div**** -->
              <div>
              <div class="card-body">
                                <form action="vinsert.php" method="POST">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="nic">NIC</label>
                                                <input type="text" class="form-control" id="nic"  name="nic"  placeholder="Enter your NIC" required/>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="name"  name="name"    placeholder="Last Name" required/>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="age">Age</label>
                                                <input type="text" class="form-control" id="age" name="age"  placeholder="Age" required/>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="mobilenum">Mobile Number</label>
                                                <input type="text" class="form-control" id="mobilenum" name="mobilenum"    placeholder="Mobile Number" required/>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="vname">Vaccine name</label>
                                                <select class="form-control" value="a" id="vname" name="vname" placeholder="Vaccine Name" required>
                                                    <option value="Moderna">Moderna</option>
                                                    <option value="Phizer">Phizer</option>
                                                    <option value="Sputnic V">Sputnic V</option>
                                                    <option value="Synopharm">Synopharm</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="dosage">Vaccine Dosage / ml</label>
                                                <input type="text" class="form-control" id="dosage" name="dosage"  placeholder="Enter Dosage" required/>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="dose">Dose</label>
                                                <input type="text" class="form-control" id="dose" name="dose"   placeholder="Enter Dose" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="center">Center</label>
                                                <input type="text" class="form-control" id="center" name="center"  placeholder="Enter Center" required/>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="datetime">Date and Time</label>
                                                <input type="datetime-local" class="form-control" id="datetime"   name="datetime"  required>
                                            </div>
                                            <div class="form-group">
                                                <label for="id">ID</label>
                                                <input type="text" class="form-control" id="id" name="id"   placeholder="ID" disabled/>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-floating">
                                                <label for="comments">Comments</label>
                                                <textarea class="form-control" placeholder="Enter special notes" id="comments"  name="comments" style="height: 130px"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                            </div>
            </div>
            <div class="col-md-12">
            <div class="table-responsive">
                <table id="table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">NIC</th>
                            <th scope="col">Birth Date</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Vaccine Name</th>
                            <th scope="col">Dose</th>
                            <th scope="col">Center</th>
                            <th scope="col">Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr class="<?php if(isset($classname)) echo $classname;?>">
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["nic"]; ?></td>
                            <td><?php echo $row["age"]; ?></td>
                            <td><?php echo $row["mobilenum"]; ?></td>
                            <td><?php echo $row["s_name"]; ?></td>
                            <td><?php echo $row["s_dose"]; ?></td>
                            <td><?php echo $row["s_center"]; ?></td>
                            <td><?php echo $row["s_datetime"]; ?></td>
                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
            </div>
            </div>
            <!-- *****End of editing div**** -->
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script>
            var table = document.getElementById('table'),rIndex;
            for(var i = 1; i < table.rows.length;i++){
                table.rows[i].onclick = function(){
                    rIndex = this.rowIndex;
                    document.getElementById("id").value = this.cells[0].innerHTML;
                    document.getElementById("nic").value = this.cells[2].innerHTML;
                    document.getElementById("name").value = this.cells[1].innerHTML;
                    document.getElementById("mobilenum").value = this.cells[4].innerHTML;
                    document.getElementById("age").value = this.cells[3].innerHTML;
                    //let year = this.cells[5];    
                    //year = year.split('-');
                    //console.log(year);
                    document.getElementById("dose").value = this.cells[6].innerHTML;
                    document.getElementById("center").value = this.cells[7].innerHTML;
                    //document.getElementById("datetime").value = this.cells[5].innerHTML;
                    //console.log(rIndex);
                }
            }
            </script>
</body>
</html>