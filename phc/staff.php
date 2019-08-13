<!DOCTYPE html>
<html lang="en">

<head>

    <title>PHC</title>
       <?php

     include 'dbconfig.php';
     $id=$_SESSION['user'];                      
     $result = $connect->query("select * from staff_details where PHCid='$id'");
?>
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

    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script>


</head>


<style>
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgba(71, 78, 93, 0.77);
        padding-top: 50px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
        padding: 20px;
    }

    .close {
        position: absolute;
        right: 35px;
        top: 15px;
        font-size: 40px;
        font-weight: bold;
        color: #f1f1f1;
    }

    .close:hover,
    .close:focus {
        color: #f44336;
        cursor: pointer;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
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


            <!-- staff details -->
            <div class="outer-w3-agile col-xl mt-3">
                <h4 class="tittle-w3-agileits mb-4">Enter Staff Details</h4>
                <div class="stats-info stats-body">
                    <form method="post" action="php/staff_details.php" onsubmit="return val()">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Staff Name :</label><span id="err_name" style="color: red"></span>
                                <input type="text" class="form-control" id="staff_name" name="staff_name"
                                       autocomplete="off" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Email-ID :</label>
                                <input type="email" class="form-control" id="staff_email" name="staff_email"
                                       autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-row mt-2">
                            <div class="col-md-4">
                                <label>Contact Number:</label><span id="err_mob" style="color: red"></span>
                                <input type="text" class="form-control" id="staff_mob" name="staff_mob"
                                       autocomplete="off" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Gender :</label>
                                <select class="form-control" id="staff_gender"
                                        name="staff_gender" autocomplete="off" required>
                                    <option value="0" selected="" disabled="">Select your Category</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="transgender">Transgender</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Designation :</label>
                                <select class="form-control" id="staff_designation"
                                        name="staff_designation" autocomplete="off" required>
                                    <option value="0" selected="" disabled="">Select your Category</option>
                                    <option value="medical_officer_mbbs">Medical Ofiicer - MBBS</option>
                                    <option value="medical_officer_ayush">Medical Ofiicer - AYUSH</option>
                                    <option value="account_operator">Account cum Data Entry operator</option>
                                    <option value="pharmacist">Pharmacist</option>
                                    <option value="pharmacist_ayush">Pharmacist - AYUSH</option>
                                    <option value="nurse_midwife">Nurse_Midwife (Staff Nurse)</option>
                                    <option value="health_worker_female">Health Worker Female</option>
                                    <option value="health_assistant_male">Health Assistant Male</option>
                                    <option value="health_assistant_female">Health Assistant female / Lady health Visitor</option>
                                    <option value="health_educator">Health Educator</option>
                                    <option value="lab_tech">lab_tech</option>
                                    <option value="cc_vaccine_assis">Cold Chain & Vaccine Logic Assistant</option>
                                    <option value="groud_d">Multi-Skilled Group-D worker</option>
                                    <option value="sanitory_worker">Sanitory worker cum watchman</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row mt-2" style="width: 100%">
                            <span style="color: red"></span>
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
            <!--// staff details -->

            <!--View Staff details-->
            <div class="outer-w3-agile col-xl mt-5">
                <h4 class="tittle-w3-agileits mb-4">Staff Details</h4>
                <div class="stats-info stats-body">
                    <table id="tab1" class="table table-bordered" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Staff name</th>
                            <th>Email-ID</th>
                            <th>Contact Number</th>
                            <th>Gender</th>
                            <th>Designation</th>
                            <th>Edit / Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>" . $row['name'] . "</td><td>" . $row['email_id'] . "</td><td>" . $row['contact_no'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['designation'] . "</td>";
                                echo "<td><button class='fa fa-edit btn btn-warning' onclick='openEdit(this)' data-id='" . $row['staff_id'] . "' data-designation='" . $row['designation'] . "'></button>";
                                echo "&nbsp;<button class='fa fa-trash-alt btn btn-danger' onclick='openEdit1(this)' data-id='" . $row['staff_id'] . "'></button></td>";
                            }
                        }

                        ?>

                        </tbody>
                    </table>


                </div>
            </div>
            <!--View Staff details-->


        </div>
        <!--// Three-grids -->
    </div>
</div>


<div id="edit11" class="modal ml-auto mr-auto">
    <span onclick="document.getElementById('edit11').style.display='none'" class="close"
          title="Close Modal">&times;</span>
    <form class="modal-content" action="php/modify_staff.php" method="post"
          onsubmit="return val1()">
        <div class="row">
            <div class="container-fluid">

                <div class="form-row">
                    <input type="text" id="staff_id" name="staff_id" class="hide">
                    <div class="form-group col-md-6">
                        <label>Staff Name :</label><span id="merr_name" style="color: red"></span>
                        <input type="text" class="form-control" id="mstaff_name" name="mstaff_name"
                               autocomplete="off" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Email-ID :</label>
                        <input type="email" class="form-control" id="mstaff_email" name="mstaff_email"
                               autocomplete="off" required>
                    </div>
                </div>

                <div class="form-row mt-2">
                    <div class="col-md-4">
                        <label>Contact Number:</label><span id="merr_mob" style="color: red"></span>
                        <input type="text" class="form-control" id="mstaff_mob" name="mstaff_mob"
                               autocomplete="off" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Gender :</label>
                        <select class="form-control" id="mstaff_gender"
                                name="mstaff_gender" autocomplete="off" required>
                            <option value="0" selected="" disabled="">Select your Category</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="transgender">Transgender</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Designation :</label>
                        <input type="text" class="form-control" id="mstaff_designation"
                               name="mstaff_designation" disabled>
                    </div>
                </div>

                <center>
                    <button type="submit" id="sub1" name="sub1" class="btn btn-success">Save</button>
                    <button type="button" onclick="document.getElementById('edit11').style.display='none'"
                            class="btn btn-danger">Cancel
                    </button>
                </center>
            </div>
        </div>
    </form>
</div>


<script>
    function openEdit(e) {
        var id = $(e).data("id");
        var designation = $(e).data("designation");
        document.getElementById('edit11').style.display = 'block';
        document.getElementById('staff_id').value = id;
        document.getElementById('mstaff_designation').value = designation;
    }

    function openEdit1(e) {
        var id = $(e).data("id");

        if (confirm("Do you want to delete?")) {
            window.location = "php/delete_staff.php?id=" + id + "";
        }
    }
</script>

<script>

    function val() {
        var name = document.getElementById("staff_name").value;
        var mob = document.getElementById("staff_mob").value;

        var regex = /^[A-Za-z\s]+$/;

        if (regex.test(name) == false) {
            document.getElementById("err_name").innerHTML = "  *Invalid name";
            return false;
        }


        if (mob.length < 14 && mob.length > 12) {
            if (!(mob.charAt(0) == "+" && mob.charAt(1) == 9 && mob.charAt(2) == 1)) {
                document.getElementById("err_mob").innerHTML = "Invalid mobile number!";
                console.log("1")
                return false;
            }
        }
        else if (mob.length < 13 && mob.length > 11) {
            if (!(mob.charAt(0) == 9 && mob.charAt(1) == 1)) {
                document.getElementById("err_mob").innerHTML = "Invalid mobile number!";
                return false;
            }
        }

        if (mob.length == 10) {
            if ((mob.charAt(0) != '9') && (mob.charAt(0) != '8') && (mob.charAt(0) != '7')) {
                document.getElementById("err_mob").innerHTML = "Invalid mobile number!";
                return false;
            }
        } else if (mob.length < 10) {
            document.getElementById("err_mob").innerHTML = "Invalid mobile number!";
            return false;
        }
        document.getElementById("err_mob").innerHTML = "";
        document.getElementById("err_name").innerHTML = "";

        return true;

    }


</script>

<script>

    function val1() {
        var name = document.getElementById("mstaff_name").value;
        var mob = document.getElementById("mstaff_mob").value;

        var regex = /^[A-Za-z\s]+$/;

        if (regex.test(name) == false) {
            document.getElementById("merr_name").innerHTML = "  *Invalid name";
            return false;
        }


        if (mob.length < 14 && mob.length > 12) {
            if (!(mob.charAt(0) == "+" && mob.charAt(1) == 9 && mob.charAt(2) == 1)) {
                document.getElementById("merr_mob").innerHTML = "Invalid mobile number!";
                console.log("1")
                return false;
            }
        }
        else if (mob.length < 13 && mob.length > 11) {
            if (!(mob.charAt(0) == 9 && mob.charAt(1) == 1)) {
                document.getElementById("merr_mob").innerHTML = "Invalid mobile number!";
                return false;
            }
        }

        if (mob.length == 10) {
            if ((mob.charAt(0) != '9') && (mob.charAt(0) != '8') && (mob.charAt(0) != '7')) {
                document.getElementById("merr_mob").innerHTML = "Invalid mobile number!";
                return false;
            }
        } else if (mob.length < 10) {
            document.getElementById("merr_mob").innerHTML = "Invalid mobile number!";
            return false;
        }
        document.getElementById("merr_mob").innerHTML = "";
        document.getElementById("merr_name").innerHTML = "";
        return true;

    }


</script>


<script>
    $(document).ready(function () {
        $('#tab1').DataTable();
    });
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
<script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.4/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>

<!-- //Js for bootstrap working -->

</body>


</html>