<?php
include 'dbconfig.php5';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMIN</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
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
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
<div class="se-pre-con"></div>
<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h1>
                <a href="index.php5">Admin</a>
            </h1>
            <span>A</span>
        </div>
        <div class="profile-bg"></div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="index.php">
                    <i class="fas fa-th-large"></i>Dashboard
                </a>
            </li>
            <li>
                <a href="phcReq.php5">
                    <i class="fas fa-eye"></i> View PHC Request
                </a>
            </li>
            <li>
                <a href="adminhistory.php5">
                    <i class="fas fa-eye"></i> History

                </a>
            </li>
        </ul>
    </nav>
    <!-- Sidebar Holder -->
    <div id="content">
        <!-- top-bar -->
        <nav class="navbar navbar-default mb-xl-5 mb-4">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <!-- Search-from -->
                <form action="#" method="post" class="form-inline mx-auto search-form">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                           required="">
                    <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                </form>
                <!--// Search-from -->
                <ul class="top-icons-agileits-w3layouts float-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../index.php" id="navbarDropdown2" role="button">
                            <i class="fa fa-sign-out-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- top-bar -->
        <div class="container-fluid">
            <div class="row">
                <!--PHC request-->
                <div class="outer-w3-agile col-xl">
                    <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                        <div class="s-l">
                            <h5> PHC</h5>
                            <p class="paragraph-agileits-w3layouts text-white">Total Requests</p>
                        </div>
                        <div class="s-r">
                            <h6><ul class="top-icons-agileits-w3layouts float-right">
                                    <li class="nav-item dropdown">
                                        <?php
                                        $sql = "SELECT count(PHCid) as count1 from phcregister";
                                        $tot_count = $conn->query($sql);
                                        if ($tot_count->num_rows > 0) {
                                            $data = $tot_count->fetch_assoc();
                                        }
                                        ?>
                                        <a class="dropdown-toggle" href="#" id="" role="button" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="far fa-envelope"></i>
                                            <span class="badge"><?php echo $data["count1"]?></span>
                                        </a>
                                    </li>
                                </ul>
                            </h6>
                        </div>
                    </div>
                    <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                        <div class="s-l">
                            <h5>PHC </h5>
                            <p class="paragraph-agileits-w3layouts">Pending Request</p>
                        </div>
                        <div class="s-r">
                            <h6> <ul class="top-icons-agileits-w3layouts float-right">
                                    <li class="nav-item dropdown">
                                        <?php
                                        $sql = "SELECT count(PHCid) as count1 from phcregister where Status1=0 ";
                                        $tot_count = $conn->query($sql);
                                        if ($tot_count->num_rows > 0) {
                                            $data = $tot_count->fetch_assoc();
                                        }
                                        ?>
                                        <a class="dropdown-toggle" href="phcReq.php5" class="dropdown-item">
                                            <i class="far fa-envelope"></i>
                                            <span class="badge"><?php echo $data["count1"]?></span>
                                        </a>

                                    </li>
                                </ul>
                            </h6>
                        </div>
                    </div>
                    <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                        <div class="s-l">
                            <h5>PHC </h5>
                            <p class="paragraph-agileits-w3layouts">Approved Request</p>
                        </div>
                        <div class="s-r">
                            <h6> <ul class="top-icons-agileits-w3layouts float-right">
                                    <li class="nav-item dropdown">
                                        <?php
                                        $sql = "SELECT count(PHCid) as count1 from phcregister where Status1=1";
                                        $tot_count = $conn->query($sql);
                                        if ($tot_count->num_rows > 0) {
                                            $data = $tot_count->fetch_assoc();
                                        }
                                        ?>
                                        <a class="dropdown-toggle" href="adminhistory.php5" class="dropdown-item">
                                            <i class="far fa-envelope"></i>
                                            <span class="badge"><?php echo $data["count1"]?></span>
                                        </a>

                                    </li>
                                </ul>
                            </h6>
                        </div>
                    </div>
                    <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">
                        <div class="s-l">
                            <h5> PHC</h5>
                            <p class="paragraph-agileits-w3layouts">Rejected Request</p>
                        </div>
                        <div class="s-r">
                            <h6>
                                <ul class="top-icons-agileits-w3layouts float-right">
                                    <li class="nav-item dropdown">
                                        <?php
                                        $sql = "SELECT count(PHCid) as count1 from phcregister where Status1=2";
                                        $tot_count = $conn->query($sql);
                                        if ($tot_count->num_rows > 0) {
                                            $data = $tot_count->fetch_assoc();
                                        }
                                        ?>
                                        <a class="dropdown-toggle" href="adminhistory.php5" class="dropdown-item">
                                            <i class="far fa-envelope"></i>
                                            <span class="badge"><?php echo $data["count1"]?></span>
                                        </a>
                                    </li>
                                </ul>
                            </h6>
                        </div>
                    </div>
                </div>
                <!--PHC request-->
                <div class="col-sm-1"></div>
                <!--digital request-->
<!--                <div class="outer-w3-agile col-xl">-->
<!--                    <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">-->
<!--                        <div class="s-l">-->
<!--                            <h5>Digital</h5>-->
<!--                            <p class="paragraph-agileits-w3layouts text-white">Total Requests</p>-->
<!--                        </div>-->
<!--                        <div class="s-r">-->
<!--                            <h6><ul class="top-icons-agileits-w3layouts float-right">-->
<!--                                    <li class="nav-item dropdown">-->
<!--                                        --><?php
//                                        $sql = "SELECT count(PHCid) as count1 from phcregister";
//                                        $tot_count = $conn->query($sql);
//                                        if ($tot_count->num_rows > 0) {
//                                            $data = $tot_count->fetch_assoc();
//                                        }
//                                        ?>
<!--                                        <a class="dropdown-toggle" href="#" id="" role="button" data-toggle="dropdown" aria-haspopup="true"-->
<!--                                           aria-expanded="false">-->
<!--                                            <i class="far fa-envelope"></i>-->
<!--                                            <span class="badge">--><?php //echo $data["count1"]?><!--</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">-->
<!--                        <div class="s-l">-->
<!--                            <h5>Digital </h5>-->
<!--                            <p class="paragraph-agileits-w3layouts">Pending Request</p>-->
<!--                        </div>-->
<!--                        <div class="s-r">-->
<!--                            <h6> <ul class="top-icons-agileits-w3layouts float-right">-->
<!--                                    <li class="nav-item dropdown">-->
<!--                                        --><?php
//                                        $sql = "SELECT count(PHCid) as count1 from phcregister where Status1=0";
//                                        $tot_count = $conn->query($sql);
//                                        if ($tot_count->num_rows > 0) {
//                                            $data = $tot_count->fetch_assoc();
//                                        }
//                                        ?>
<!--                                        <a class="dropdown-toggle" href="phcReq.php5" class="dropdown-item">-->
<!--                                            <i class="far fa-envelope"></i>-->
<!--                                            <span class="badge">--><?php //echo $data["count1"]?><!--</span>-->
<!--                                        </a>-->
<!---->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">-->
<!--                        <div class="s-l">-->
<!--                            <h5>Digital </h5>-->
<!--                            <p class="paragraph-agileits-w3layouts">Approved Request</p>-->
<!--                        </div>-->
<!--                        <div class="s-r">-->
<!--                            <h6> <ul class="top-icons-agileits-w3layouts float-right">-->
<!--                                    <li class="nav-item dropdown">-->
<!--                                        --><?php
//                                        $sql = "SELECT count(PHCid) as count1 from phcregister where Status1=1";
//                                        $tot_count = $conn->query($sql);
//                                        if ($tot_count->num_rows > 0) {
//                                            $data = $tot_count->fetch_assoc();
//                                        }
//                                        ?>
<!--                                        <a class="dropdown-toggle" href="adminhistory.php5" class="dropdown-item">-->
<!--                                            <i class="far fa-envelope"></i>-->
<!--                                            <span class="badge">--><?php //echo $data["count1"]?><!--</span>-->
<!--                                        </a>-->
<!---->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">-->
<!--                        <div class="s-l">-->
<!--                            <h5> Digital</h5>-->
<!--                            <p class="paragraph-agileits-w3layouts">Rejected Request</p>-->
<!--                        </div>-->
<!--                        <div class="s-r">-->
<!--                            <h6>-->
<!--                                <ul class="top-icons-agileits-w3layouts float-right">-->
<!--                                    <li class="nav-item dropdown">-->
<!--                                        --><?php
//                                        $sql = "SELECT count(PHCid) as count1 from phcregister where Status1=2";
//                                        $tot_count = $conn->query($sql);
//                                        if ($tot_count->num_rows > 0) {
//                                            $data = $tot_count->fetch_assoc();
//                                        }
//                                        ?>
<!--                                        <a class="dropdown-toggle" href="adminhistory.php5" class="dropdown-item">-->
<!--                                            <i class="far fa-envelope"></i>-->
<!--                                            <span class="badge">--><?php //echo $data["count1"]?><!--</span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <!--digital request-->
            </div>
        </div>
        <!-- Page Content Holder -->
    </div>
</div>


<!-- Required common Js -->
<script src='js/jquery-2.2.3.min.js'></script>
<!-- //Required common Js -->

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
