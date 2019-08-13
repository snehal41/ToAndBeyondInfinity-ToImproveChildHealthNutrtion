<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHC</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content=""/>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <?php

       include 'dbconfig.php';
       $id=$_SESSION['user'];  

    ?>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="css/pignose.calender.css"/>
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->


    <!--Data tables-->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/ju/dt-1.10.18/datatables.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <!--Data tables-->

</head>

<style>

    .placeholder-text {
        display: none
    }

    @media screen and (max-width: 400px) {
        #c1, #c2 {
            margin-top: 20px;
        }
    }

    #c1, #c2 {
        width: 300px;
    }

    .hide {
        display: none;
    }


</style>

<body>
<div class="se-pre-con"></div>
<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">

        <div class="profile-bg">
            <img src="http://www.phciowa.org/wp-content/uploads/2017/04/PHC-Main-Logo.jpg" style="height: 10%;width: 100%;">
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="index.php">
                    <i class=""></i>
                    Dashboard
                </a>
            </li>


            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class=""></i>
                    PHC Details
                    <i class="fas fa-angle-down fa-pull-right"></i>
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="staff.php">Staff Details</a>
                    </li>
                    <li>
                        <a href="infrastructure.php">Infrastructure Details</a>
                    </li>
                    <li>
                        <a href="sanitation.php">Sanitation Details</a>
                    </li>
                    <li>
                        <a href="facilities.php">Facilities Provided</a>
                    </li>
                    <li>
                        <a href="inventory.php">Inventory Details</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#patientMenu" data-toggle="collapse" aria-expanded="false">
                    <i class=""></i>
                    Insert Patient Details
                    <i class="fas fa-angle-down fa-pull-right"></i>
                </a>
                <ul class="collapse list-unstyled" id="patientMenu">
                    <li>
                        <a href="pregnancy.php">Women Pregnancy Details</a>
                    </li>
                    <li>
                        <a href="infant.php">Infant Details</a>
                    </li>
                    <li>
                        <a href="">Child Details</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="camps.php">
                    <i class="fa-fa"></i>
                    Schedule Awareness Camps
                </a>
            </li>
        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">
        <!-- top-bar -->
        <nav class="navbar navbar-default mb-xl-5 mb-4">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>

                <ul class="top-icons-agileits-w3layouts float-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu top-grid-scroll drop-1">
                            <h3 class="sub-title-w3-agileits">User notifications</h3>
                            <a href="#" class="dropdown-item mt-3">
                                <div class="notif-img-agileinfo">
                                    <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="notif-content-wthree">
                                    <p class="paragraph-agileits-w3layouts py-2">
                                        <span class="text-diff">John Doe</span> Curabitur non nulla sit amet nisl tempus
                                        convallis quis ac lectus.</p>
                                    <h6>4 mins ago</h6>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item mt-3">
                                <div class="notif-img-agileinfo">
                                    <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="notif-content-wthree">
                                    <p class="paragraph-agileits-w3layouts py-2">
                                        <span class="text-diff">Diana</span> Curabitur non nulla sit amet nisl tempus
                                        convallis quis ac lectus.</p>
                                    <h6>6 mins ago</h6>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item mt-3">
                                <div class="notif-img-agileinfo">
                                    <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="notif-content-wthree">
                                    <p class="paragraph-agileits-w3layouts py-2">
                                        <span class="text-diff">Steffie</span> Curabitur non nulla sit amet nisl tempus
                                        convallis quis ac lectus.</p>
                                    <h6>12 mins ago</h6>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item mt-3">
                                <div class="notif-img-agileinfo">
                                    <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="notif-content-wthree">
                                    <p class="paragraph-agileits-w3layouts py-2">
                                        <span class="text-diff">Jack</span> Curabitur non nulla sit amet nisl tempus
                                        convallis quis ac lectus.</p>
                                    <h6>1 days ago</h6>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">view all notifications</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown2" role="button"
                           data-toggle="Logout" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="fa fa-sign-out-alt"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
        <!--// top-bar -->

        <!--// three-grids -->
        <div class="container-fluid">


            <div class="row">

                <div class="col-lg-6">
                    <center>
                        <div class="card text-white bg-primary o-hidden h-100" id="c1">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-table"></i>
                                </div>
                                <div class="mr-5">Facilities Provides</div>
                            </div>
                            <a onclick="show1()" class="card-footer text-white clearfix small z-1" href="#">
                                <i class="float-right fas fa-angle-right"></i>
                            </a>
                        </div>
                    </center>
                </div>
                <div class="col-lg-6">
                    <center>
                        <div class="card text-white bg-success o-hidden h-100" id="c2">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-chart-bar"></i>
                                </div>
                                <div class="mr-5">Lab Services</div>
                            </div>
                            <a onclick="show2()" class="card-footer text-white clearfix small z-1" href="#">
                                <i class="float-right fas fa-angle-right"></i>
                            </a>
                        </div>
                    </center>
                </div>
            </div>

            <!-- Infra details -->
            <div class="container-fluid" id="facility">
                <div class="outer-w3-agile col-xl mt-3">
                    <h4 class="tittle-w3-agileits mb-4">View Facility Provided</h4>
                    <div class="stats-info stats-body">
                        <div class="container-fluid form-row">

                            <?php
                            
                            $result = $connect->query("select * from services where PHCid='$id'");

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>OPD Services: </label><input type='text' class=' form-row i1 ml-auto' style='margin-right:300px;' value='" . $row['opd_services'] . "' readonly><br>";

                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Emergency Services : </label><input type='text' class=' form-row i1 ml-auto' style='margin-right:300px;' value='" . $row['emergency_services'] . "' readonly><br>";
                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Antenatal Care: </label><input type='text' style='margin-right:300px;' class=' form-row i1 ml-auto' value='" . $row['antenatal_care'] . "' readonly><br>";
                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Postnatal Care : </label><input type='text' style='margin-right:300px;' class=' form-row i1 ml-auto' value='" . $row['postnatal_care'] . "' readonly><br>";
                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Intranatal Care : </label><input type='text' class=' form-row i1 ml-auto' style='margin-right:300px;' value='" . $row['intranatal_care'] . "' readonly><br>";
                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Newborn Care : </label><input type='text' class=' form-row i1 ml-auto' style='margin-right:300px;' value='" . $row['newborn_care'] . "' readonly><br>";
                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Child Care: </label><input type='text' style='margin-right:300px;' class='form-row i1 ml-auto' value='" . $row['child_care'] . "' readonly><br>";
                                echo "</div>";


                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Family Planning : </label><input type='text' style='margin-right:300px;' class=' form-row i1 ml-auto' value='" . $row['family_planning'] . "' readonly><br>";
                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>24 * 7 Service : </label><input type='text' style='margin-right:300px;' class=' form-row i1 ml-auto' value='" . $row['24_hours'] . "' readonly><br>";
                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Nutrition : </label><input type='text' class=' form-row i1 ml-auto' style='margin-right:300px;' value='" . $row['nutrition'] . "' readonly><br>";
                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>School Health Programs : </label><input type='text' class=' form-row i1 ml-auto' style='margin-right:300px;' value='" . $row['school_health_program'] . "' readonly><br>";
                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Rehabilitation : </label><input type='text' style='margin-right:300px;' class='form-row i1 ml-auto' value='" . $row['rehabilitation'] . "' readonly><br>";
                                echo "</div>";

                            } else {
                                echo "<center><h5 style='color:blue'>No Facility details available.. :( Enter Facility details !!</h5></center>";
                            }
                            //$connect->close();
                            ?>
                        </div>
                    </div>
                </div>
                <!--// Infra details -->

                <!--Insert Infra details-->
                <div class="outer-w3-agile col-xl mt-5">
                    <h4 class="tittle-w3-agileits mb-4">Insert / Edit Facility Details</h4>
                    <div class="stats-info stats-body">

                        <form method="post" action="php/facility_details.php">

                            <div class="form-row" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.1 ] </b>Do PHC provide <b>OPD</b> Services ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="opd_service" id="opd_service" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="opd_service" id="opd_service" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.2 ] </b>Do PHC provide <b>Emergency</b> services ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="emergency_services" id="emergency_services"
                                                   value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="emergency_services" id="emergency_services"
                                                   value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.3 ] </b>Do PHC provide <b>Antenatal Care</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="antenatal_care" id="antenatal_care" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="antenatal_care" id="antenatal_care" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.4 ] </b>Do PHC provide <b>Postnatal Care</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="postnatal_care" id="postnatal_care" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="postnatal_care" id="postnatal_care" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.5 ] </b>Do PHC provide <b>Intranatal Care</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="intranatal_care" id="intranatal_care" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="intranatal_care" id="intranatal_care" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.6 ] </b>Do PHC provide <b>Newborn Care</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="newborn_care" id="newborn_care" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="newborn_care" id="newborn_care" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.7 ] </b>Do PHC provide <b>Child Care</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="child_care" id="child_care" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="child_care" id="child_care" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.8 ] </b>Do PHC provide <b>Family Planning</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="family_plan" id="family_plan" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="family_plan" id="family_plan" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.9 ] </b>Do PHC provide <b>24 * 7</b> Service ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="24_service" id="24_service" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="24_service" id="24_service" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.10 ] </b>Do PHC provide <b>Nutrition</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="nutrition" id="nutrition" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="nutrition" id="nutrition" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.11 ] </b>Do PHC provide <b>School Health Programmes</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="school_prgm" id="school_prgm" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="school_prgm" id="school_prgm" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.11 ] </b>Do PHC provide <b>Rehabilitation Services</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="rehabilitation" id="rehabilitation" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="rehabilitation" id="rehabilitation" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-2">
                                <button name="sub" id="sub" type="submit"
                                        class=" form-control btn btn-success ml-auto mr-auto"
                                        style="width: 20%;">Save
                                </button>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
            <!--Insert Infra details-->

            <div class="container-fluid hide" id="lab">
                <div class="outer-w3-agile col-xl mt-3">
                    <h4 class="tittle-w3-agileits mb-4">View Lab Services</h4>
                    <div class="stats-info stats-body">
                        <div class="container-fluid form-row">

                            <?php

      // include 'dbconfig.php';
       

                            $result=$connect->query("select * from lab_services where PHCid='$id'");

                            if ($result->num_rows) {
                                $row = $result->fetch_assoc();


                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Urine Routines : </label><input type='text' class=' form-row i1 ml-auto' style='margin-right:300px;' value='" . $row['urine_routine'] . "' readonly><br>";

                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Blood Tests : </label><input type='text' class=' form-row i1 ml-auto' style='margin-right:300px;' value='" . $row['blood_tests'] . "' readonly><br>";
                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Diagnosis for RTI and STD: </label><input type='text' style='margin-right:300px;' class=' form-row i1 ml-auto' value='" . $row['diagnosis_RTI_STD'] . "' readonly><br>";
                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Sputum Testing : </label><input type='text' style='margin-right:300px;' class=' form-row i1 ml-auto' value='" . $row['sputum_testing'] . "' readonly><br>";
                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Maleria Tests : </label><input type='text' class=' form-row i1 ml-auto' style='margin-right:300px;' value='" . $row['malaria_exam'] . "' readonly><br>";
                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Rapid Pregnancy tests : </label><input type='text' class=' form-row i1 ml-auto' style='margin-right:300px;' value='" . $row['rapid_pregnancy_test'] . "' readonly><br>";
                                echo "</div>";

                                echo "<div class='form-row' style='width: 100%'>";

                                echo "<label>Rapid HIV Tests : </label><input type='text' style='margin-right:300px;' class='form-row i1 ml-auto' value='" . $row['rapid_HIV_test'] . "' readonly><br>";
                                echo "</div>";

                            } else {
                                echo "<center><h5 style='color:blue'>No Lab details available.. :( Enter Lab details !!</h5></center>";
                            }
                            //$connect->close();
                            ?>
                        </div>
                    </div>
                </div>

                <div class="outer-w3-agile col-xl mt-5">
                    <h4 class="tittle-w3-agileits mb-4">Insert / Edit Lab Services</h4>
                    <div class="stats-info stats-body">

                        <form method="post" action="php/lab_details.php">

                            <div class="form-row" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.1 ] </b>Do PHC conduct <b>Urine Routines</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="urine_routine" id="urine_routine" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="urine_routine" id="urine_routine" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.2 ] </b>Do PHC conduct <b>Blood Tests</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="blood_tests" id="blood_tests"
                                                   value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="blood_tests" id="blood_tests"
                                                   value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.3 ] </b>Do PHC provide <b>Diagnosis for RTI and STD</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="diagnosis" id="diagnosis" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="diagnosis" id="diagnosis" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.4 ] </b>Do PHC conduct <b>Sputum Testing</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="sputum" id="sputum" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="sputum" id="sputum" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.5 ] </b>Do PHC conduct <b>Maleria Tests</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="maleria" id="maleria" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="maleria" id="maleria" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.6 ] </b>Do PHC conduct <b>Rapid Pregnancy Tests</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="rapid_pregancy" id="rapid_pregancy" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="rapid_pregancy" id="rapid_pregancy" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-5" style="width: 100%">
                                <div class="form-group col-md-6">
                                    <label><b>Q.7 ] </b>Do PHC conduct <b>Rapid HIV Tests</b> ?</label>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-4">
                                            <input type="radio" name="rapid_hiv" id="rapid_hiv" value="Yes"
                                                   autocomplete="off">
                                            <label>Yes</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <input type="radio" name="rapid_hiv" id="rapid_hiv" value="No"
                                                   autocomplete="off">
                                            <label>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-2">
                                <button name="sub1" id="sub1" type="submit"
                                        class=" form-control btn btn-success ml-auto mr-auto"
                                        style="width: 20%;">Save
                                </button>
                            </div>

                        </form>


                    </div>
                </div>
            </div>


        </div>
        <!--// Three-grids -->
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#tab1').DataTable();
    });

    function show1() {
        document.getElementById("facility").style.display = 'block';
        document.getElementById("lab").style.display = 'none';

    }

    function show2() {
        document.getElementById("facility").style.display = 'none';
        document.getElementById("lab").style.display = 'block';
    }


</script>


<!-- loading-gif Js -->
<script src="js/modernizr.js"></script>
<script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function () {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");
        ;
    });
</script>
<!--// loading-gif Js -->

<!-- Sidebar-nav Js -->
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
<!--// Sidebar-nav Js -->

<!-- Graph -->
<script src="js/SimpleChart.js"></script>
<script>
    var graphdata4 = {
        linecolor: "Random",
        title: "Thursday",
        values: [{
            X: "6",
            Y: 300.00
        },
            {
                X: "7",
                Y: 101.98
            },
            {
                X: "8",
                Y: 140.00
            },
            {
                X: "9",
                Y: 340.00
            },
            {
                X: "10",
                Y: 470.25
            },
            {
                X: "11",
                Y: 180.56
            },
            {
                X: "12",
                Y: 680.57
            },
            {
                X: "13",
                Y: 740.00
            },
            {
                X: "14",
                Y: 800.89
            },
            {
                X: "15",
                Y: 420.57
            },
            {
                X: "16",
                Y: 980.24
            },
            {
                X: "17",
                Y: 1080.00
            },
            {
                X: "18",
                Y: 140.24
            },
            {
                X: "19",
                Y: 140.58
            },
            {
                X: "20",
                Y: 110.54
            },
            {
                X: "21",
                Y: 480.00
            },
            {
                X: "22",
                Y: 580.00
            },
            {
                X: "23",
                Y: 340.89
            },
            {
                X: "0",
                Y: 100.26
            },
            {
                X: "1",
                Y: 1480.89
            },
            {
                X: "2",
                Y: 1380.87
            },
            {
                X: "3",
                Y: 1640.00
            },
            {
                X: "4",
                Y: 1700.00
            }
        ]
    };
    $(function () {
        $("#Hybridgraph").SimpleChart({
            ChartType: "Hybrid",
            toolwidth: "50",
            toolheight: "25",
            axiscolor: "#E6E6E6",
            textcolor: "#6E6E6E",
            showlegends: false,
            data: [graphdata4],
            legendsize: "140",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in $'
        });
    });
</script>
<!--// Graph -->
<!-- Bar-chart -->
<script src="js/rumcaJS.js"></script>
<script src="js/example.js"></script>
<!--// Bar-chart -->
<!-- Calender -->
<script src="js/moment.min.js"></script>
<script src="js/pignose.calender.js"></script>
<script>
    //<![CDATA[
    $(function () {
        $('.calender').pignoseCalender({
            select: function (date, obj) {
                obj.calender.parent().next().show().text('You selected ' +
                    (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                    '.');
            }
        });

        $('.multi-select-calender').pignoseCalender({
            multiple: true,
            select: function (date, obj) {
                obj.calender.parent().next().show().text('You selected ' +
                    (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                    '~' +
                    (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                    '.');
            }
        });
    });
    //]]>
</script>
<!--// Calender -->

<!-- profile-widget-dropdown js-->
<script src="js/script.js"></script>
<!--// profile-widget-dropdown js-->

<!-- Count-down -->
<script src="js/simplyCountdown.js"></script>
<link href="css/simplyCountdown.css" rel='stylesheet' type='text/css'/>
<script>
    var d = new Date();
    simplyCountdown('simply-countdown-custom', {
        year: d.getFullYear(),
        month: d.getMonth() + 2,
        day: 25
    });
</script>
<!--// Count-down -->

<!-- pie-chart -->
<script src='js/amcharts.js'></script>

<script>
    var chart;
    var legend;

    var chartData = [{
        country: "Lithuania",
        value: 260
    },
        {
            country: "Ireland",
            value: 201
        },
        {
            country: "Germany",
            value: 65
        },
        {
            country: "Australia",
            value: 39
        },
        {
            country: "UK",
            value: 19
        },
        {
            country: "Latvia",
            value: 10
        }
    ];

    AmCharts.ready(function () {
        // PIE CHART
        chart = new AmCharts.AmPieChart();
        chart.dataProvider = chartData;
        chart.titleField = "country";
        chart.valueField = "value";
        chart.outlineColor = "";
        chart.outlineAlpha = 0.8;
        chart.outlineThickness = 2;
        // this makes the chart 3D
        chart.depth3D = 20;
        chart.angle = 30;

        // WRITE
        chart.write("chartdiv");
    });
</script>
<!--// pie-chart -->

<!-- dropdown nav -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->

<!-- Js for bootstrap working-->
<script src="js/bootstrap.min.js"></script>
<!-- //Js for bootstrap working -->

</body>

</html>