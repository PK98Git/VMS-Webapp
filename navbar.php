<link rel="stylesheet" type="text/css" href="css/Homepage.css">
<nav id="sidebar">
            <div class="sidebar-header">
                <h3>Vaccination Management System</h3>
                <strong>VMS</strong>
            </div>

            <ul class="list-unstyled components">
                <li >
                    <a href="/webPro/dashboard.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                          </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-syringe"></i>
                        Vaccination
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="/webPro/Vaccination/ViewVaccinate.php">View Vaccination</a>
                        </li>
                        <li>
                            <a href="/webPro/Vaccination/Vaccinate.php">Vaccinate next</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-users"></i>
                        People
                    </a>
                    <ul class="collapse list-unstyled1" id="pageSubmenu1">
                        <li>
                            <a href="/webPro/staff/addPeople.php">Add People</a>
                        </li>
                        <li>
                            <a href="/webPro/staff/viewPeople.php">View People</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user-md"></i>
                        Staff
                    </a>
                    <ul class="collapse list-unstyled1" id="pageSubmenu2">
                        <li>
                            <a href="/webPro/staff/addDoctor.php">Add Doctor</a>
                        </li>
                        <li>
                            <a href="/webPro/staff/viewDoctor.php">View Doctor</a>
                        </li>
                        <li>
                            <a href="/webPro/staff/addNurse.php">Add Nurse</a>
                        </li>
                        <li>
                            <a href="/webPro/staff/viewNurse.php">View Nurses</a>
                        </li>
                        <li>
                            <a href="/webPro/staff/addPhi.php">Add PHI</a>
                        </li>
                        <li>
                            <a href="/webPro/staff/viewPhi.php">View PHI</a>
                        </li>
                        <li>
                            <a href="/webPro/staff/addSystem.php">Add System Operator</a>
                        </li>
                        <li>
                            <a href="/webPro/staff/viewSystem.php">View System Operator</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-archive"></i>
                        Stock
                    </a>
                    <ul class="collapse list-unstyled1" id="pageSubmenu3">
                        <li>
                            <a href="/webPro/Stock/viewstock.php">View Stock</a>
                        </li>
                        <li>
                            <a href="/webPro/Stock/stock.php">Add Stock</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-hospital"></i>
                        Centers
                    </a>
                    <ul class="collapse list-unstyled1" id="pageSubmenu4">
                        <li>
                            <a href="/webPro/Centers/viewcenter.php">View Centers</a>
                        </li>
                        <li>
                            <a href="/webPro/Centers/center.php">Add Center</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <li>
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-calendar-check"></i>
                        Schedule
                    </a>
                    <ul class="collapse list-unstyled1" id="pageSubmenu5">
                        <li>
                            <a href="/webPro/Schedule/ViewSchedule.php">View Schedule</a>
                        </li>
                        <li>
                            <a href="/webPro/Schedule/addSchedule.php">Add Schedule</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-phone-square"></i>
                        Contact US
                    </a>
                </li>
                <li>
                    <a href="/webPro/index1.html">
                        <i class="fas fa-power-off"></i>                    
                        Log out
                    </a>
                </li>
            </ul>
        </nav>

      