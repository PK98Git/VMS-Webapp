<!DOCTYPE html>
<html>
<?php 
include "../config.php";
$sql="SELECT * FROM vaccinate_tbl order by v_datetime DESC;";
$result=$conn->query($sql);
?>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                    <a  class="btn btn-primary mb-3" href="Vaccinate.php">Vaccine next</a>
                            <table id = "vactbl"class="table table-bordered">
                            <thead>
                                    <tr>
                                        <th scope="col">NIC</th>
                                        <th scope="col">Name </th>
                                        <th scope="col">Birth date</th>
                                        <th scope="col">Mobile Number</th>
                                        <th scope="col">vaccine Name</th>
                                        <th scope="col">Vaccine Dosage</th>
                                        <th scope="col">Vaccine Dose</th>
                                        <th scope="col">Vaccine Center</th>
                                        <th scope="col">Vaccine Datetime</th>
                                        <th scope="col">Notes</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                            <tbody>
                                <?php
                                //row =firstrow
                                while($row=$result->fetch_assoc()){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['nic']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['age'] ?></td>
                                        <td><?php echo $row['mobilenum'] ?></td>
                                        <td><?php echo $row['v_name'] ?></td>
                                        <td><?php echo $row['v_dosage'] ?></td>
                                        <td><?php echo $row['v_dose'] ?></td>
                                        <td><?php echo $row['v_center'] ?></td>
                                        <td><?php echo $row['v_datetime'] ?></td>
                                        <td><?php echo $row['comments'] ?></td>
                                        <td>
                                            <div class="d-flex justify-content-center"" style="center">
                                                <div class="col center">
                                                <a class="btn btn-info" href="UpdateVaccinate.php?id=<?php echo $row['nic'] ?>" >Edit</a>&nbsp;&nbsp;
                                                </div>
                                                <div class="col center">
                                                <a class="btn btn-danger" href="deletevaccinate.php?id=<?php echo $row['nic'] ?>">Delete</a>                                     
                                                </div>
                                            </div>                                   
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>            
                            </tbody>
                        </table>
                          
                          <script src="></script>
                            <script type="text/javascript">
                                document.getElementByID('d.pdf').onclick = function(){
                                        var element = document.getElementByID('vactbl');
                                        var opt = {
                                            margin:1,
                                            filename: 'vaccination.pdf',
                                            image:{type:'jpeg',quality:0.98},
                                            html2canvas:{scale:2},
                                            jsPDF:{unit:'in',format:'letter',orientation:'portrait'}
                                        };
                                        html2pdf(element,opt);
                                        console.log("pdf");
                                };
                           
                           </script>

                    </div>
                </div>
            <!-- *****End of editing div**** -->
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></>
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
</body>
</html>
