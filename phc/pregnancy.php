<!DOCTYPE html>
<html lang="en">
<?php

include 'dbconfig.php';
$id=$_SESSION['user'];

?>
<head>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>PHC</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
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

</head>

<style>

    .placeholder-text {
        display: none
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
                <a href="phc_home.php">
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
                        <a href="child.php">Child Details</a>
                    </li>
                    <li>
                        <a href="other.php">Others</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="charts.html">
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


        <div class="container">
            <div class="row">

                <br>

                <div class="container-fluid">
                    <div class="row-md-12">
                        <div class="outer-w3-agile mt-3">
                            <h4 class="tittle-w3-agileits mb-4">Pregnancy Details</h4>
                            <br>
                            <form action="php/pregnancy_details.php" method="post" onsubmit="return validate();">
                                <div class="form-row">
                                    <div class="form-group col-md-4" style="padding: 20px">
                                        <label for="total">Total Number of Patients Treated</label>
                                        <input type="number" class="form-control" name="total" id="total" required="">
                                    </div>
                                    <div class="form-group col-md-4 " style="padding: 20px">
                                        <label for="expert">Treatment under Expert</label>
                                        <input type="number" class="form-control" name="expert" id="expert" >
                                    </div>
                                    <div class="form-group col-md-4" style="padding: 20px">
                                        <label for="doctor">Treatment under Doctor</label>
                                        <input type="number" class="form-control" name="doctor" id="doctor">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4" style="padding: 20px">
                                        <label for="doctor">Treatment under SBA</label>
                                        <input type="number" class="form-control" name="sba" id="sba">
                                    </div>
                                    <div class="form-group col-md-4" style="padding: 20px">
                                        <label for="doctor">Deliveries at Home</label>
                                        <input type="number" class="form-control" name="home" id="home">
                                    </div>
                                    <div class="form-group col-md-4" style="padding: 20px">
                                        <label for="doctor">Institutinal Deliveries</label>
                                        <input type="number" class="form-control" name="inst" id="inst">
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4" style="padding: 15px">
                                        <label for="doctor">Complicated Deliveries</label>
                                        <input type="number" class="form-control" name="comp" id="name">
                                    </div>
                                    <div class="form-group col-md-4" style="padding: 15px">
                                        <label for="doctor">Number of Death</label>
                                        <input type="number" class="form-control" name="death" id="death">
                                    </div>
                                    <div class="form-group col-md-4" style="padding: 15px">
                                        <label for="doctor">Number of Abortion</label>
                                        <input type="number" class="form-control" name="abort" id="abort">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4 ">
                                        <label>Age group 15-25</label>
                                        <input type="number" class="form-control" name="age1" id="age1">
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label>Age group 26-35</label>
                                        <input type="number" class="form-control" name="age2" id="age2">
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label>Age group 35-45</label>
                                        <input type="number" class="form-control" name="age3" id="age3">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4 ">
                                        <label>Number of Antenatal Care </label>
                                        <input type="number" class="form-control" name="anc" id="anc">
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label>Number of Intranatal Care</label>
                                        <input type="number" class="form-control" name="inc" id="inc">
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label>Number of Postnatal Care</label>
                                        <input type="number" class="form-control" name="pnc" id="pnc">
                                    </div>
                                </div>


                                <br>
                                <span id="err_total" style="color:red"></span>
                                <center>
                                    <button type="submit" style="background-color: #5671ff" class="btn btn-primary"
                                            name="save" >
                                        Save
                                    </button>
                                </center>
                            </form>
                        </div>


                        <div class="outer-w3-agile mt-3">

                            <table id="tab1" class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>Total</th>
                                    <th>Treated By Expert</th>
                                    <th>Treated By Doctor</th>
                                    <th>SBA</th>
                                    <th>Home Delivery</th>
                                    <th>Institutional Delivery</th>
                                    <th>Complicated Delivery</th>
                                    <th>Death Recorded</th>
                                    <th>Abortion</th>
                                    <th>Number of Antenatal Care</th>
                                    <th>Number of Postnatal Care</th>
                                    <th>Number of Intranatal Care</th>
                                    <th>Age group 15-25</th>
                                    <th>Age group 26-35</th>
                                    <th>Age group 36-45</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                
                                $result = $connect->query("select * from pregnancy_details where PHCid='$id'");
                                if ($result) {
                                    while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row['pregnancy_count'] . "</td><td>" . $row['no_expert_treatment'] . "</td><td>" . $row['no_doctor_treatment'] . "</td><td>" . $row['no_delivery_SBA'] . "</td><td>" . $row['no_home_delivery'] . "</td><td>" . $row['no_institutional_delivery'] . "</td><td>" . $row['no_complicated_delivery'] . "</td><td>" . $row['no_maternal_death'] . "</td><td>" . $row['no_abortion'] . "</td><td>". $row['anc'] . "</td><td>". $row['pnc'] . "</td><td>". $row['inc'] . "</td><td>" . $row['age_group_15_25'] ."</td><td>" . $row['age_group_26_35'] . "</td><td>". $row['age_group_36_45'] . "</td></tr>";
                                    }
                                }

                                ?>

                                </tbody>

                            </table>
                        </div>

                    </div>

                </div>

</body>
</html>




                <script>
                    function validate()
                    {
                        var total=document.getElementById("total").value;
                        console.log(total);
                        var expert=document.getElementById("expert").value;
                        var doctor=document.getElementById("doctor").value;
                        var sba=document.getElementById("sba").value;
                        var home=document.getElementById("home").value;
                        var inst=document.getElementById("inst").value;
                        var comp=document.getElementById("comp").value;
                        var death=document.getElementById("death").value;
                        var abort=document.getElementById("abort").value;
                        var age1=document.getElementById("age1").value;
                        var age2=document.getElementById("age2").value;
                        var age3=document.getElementById("age3").value;
                        var inc=document.getElementById("inc").value;
                        var anc=document.getElementById("anc").value;
                        var pnc=document.getElementById("pnc").value;
                        var add=    expert+doctor+sba+home+inst+comp+death+abort+age1+age2+age3+inc+anc+pnc;
                        console.log(add);

                        if(total != add)
                        {
                            document.getElementById("err_total").innerHTML="Incorrect total";
                            return false;
                        }
                        return true;
                    }

                </script>

                <script type="text/javascript"
                        src="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.4/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>
                $(document).ready(function () {
                $('#tab1').DataTable();
                });
                </script>


                <!-- loading-gif Js -->
                <script src = "js/modernizr.js" ></script>
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


