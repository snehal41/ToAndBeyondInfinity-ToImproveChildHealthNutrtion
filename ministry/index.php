<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home| Central Ministry</title>
<?php 
       include '../dbconfig.php';
      if($_SESSION['logged in'])
      {

      $id=$_SESSION['user']; 
      $sql="select * from login where id='$id'";
      $result = mysqli_query($connect, $sql);
      $row= mysqli_fetch_object($result);

      $query = "SELECT gender, count(*) as number FROM staff_details GROUP BY gender";  
 $result = mysqli_query($connect, $query);  

 $query1 = "SELECT designation, count(*) as number FROM staff_details GROUP BY designation";  
 $result1 = mysqli_query($connect, $query1);  
 //SELECT p.PHCid, p.PHCname, p.Mfirstname ,p.Mlastname ,p.Email ,p.Phoneno , s.state_name ,d.dist_name , t.tal_name ,v.vil_name  FROM phcregister p ,states s, district d ,taluka t, village v where s.state_id=p.State and d.dist_id=p.District and t.tal_id=p.Taluka and v.vil_id=p.Village 

 $query2= "SELECT s.state_name as sname, count(*) as number FROM phcregister p,states s where s.state_id=p.State GROUP BY s.state_name";  
 $result2 = mysqli_query($connect, $query2); 


/*
SELECT COLUMN_NAME

FROM INFORMATION_SCHEMA.COLUMNS

WHERE TABLE_NAME = 'Your Table Name'

ORDER BY ORDINAL_POSITION
*/
 $query3= "select column_name,count(*) as number from information_schema.columns where table_name ='services' order by ordinal_position";  
 $result3 = mysqli_query($connect, $query3); 


      ?>    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />

<html>
  <head>
    
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
    <!-- Bars Css -->
    <link rel="stylesheet" href="css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["gender"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Male and Female Employee',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>
            

        <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['State', 'Number'],  
                          <?php  
                          while($row2 = mysqli_fetch_array($result2))  
                          {  
                               echo "['".$row2["sname"]."', ".$row2["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Statewise PHC available',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart3'));  
                chart.draw(data, options);  
           }  
           </script>

           <script type="text/javascript">
           
                google.charts.load('current', {packages: ['corechart', 'bar']});
                google.charts.setOnLoadCallback(drawBasic);

                function drawBasic() {

                      var data = google.visualization.arrayToDataTable([  
                          ['Services', 'Number'],  
                          <?php  
                          while($row3 = mysqli_fetch_array($result3))  
                          {  
                               echo "[".$row3["column_name"].", ".$row3["number"]."],";  
                          }  
                          ?>  
                     ]);

                      var options = {
                        title: 'Services Available',
                        chartArea: {width: '50%'},
                 hAxis: {
                 title: 'Services Provided by PHC percentage',
                 minValue: 0
                },
                vAxis: {
                  title: 'City'
                }
              };

              var chart = new google.visualization.BarChart(document.getElementById('chart_div1'));

              chart.draw(data, options);
    }
           </script>

            <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Designation', 'Number'],  
                          <?php  
                          while($row1 = mysqli_fetch_array($result1))  
                          {  
                               echo "['".$row1["designation"]."', ".$row1["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of designation manpower available ',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart1'));  
                chart.draw(data, options);  
           }  
           </script>


</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            
        <div class="profile-bg" style>
            <img src="https://overallhealth.in/wp-content/uploads/2017/01/ministry-of-health-government-of-india.jpg" style="height: 20%;width: 100%;">
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="index.php">
                    <i class=""></i>
                    Dashboard
                </a>
            </li>
                <li>
                    <a href="viewphc.php">
                        <i></i>
                        View PHC's
                    </a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i ></i>
                        View Reports
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="viewreport.php">Current Month</a>
                        </li>
                        <li>
                            <a href="viewreport1.php">Previous Reports</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#newsMenu" data-toggle="collapse" aria-expanded="false">
                        <i ></i>
                        News
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="newsMenu">
                        <li>
                            <a href="news.php">Add News/Notice</a>
                        </li>
                        <li>
                            <a href="vnews.php">View News</a>
                        </li>
                    </ul>
                </li>

                
                <li>
                    <a href="mail.php">
                        <i></i>
                        MAIL BOARD
                    </a>
                </li>
                <li>
                    <a href="guidance.php">
                        <i></i>
                        Add Guidance Resources
                    </a>
                </li>
                <li>
                    <a href="grievance.php">
                        <i></i>
                        View Grievances
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="far fa-user"></i>
                        </a>
                        <div class="dropdown-menu drop-3">
                            <div class="profile d-flex mr-o">
                                <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits">Health Dept. Officer Of Ministry</h3>
                                        <a href="mailto:sonawanesnehal41@gmail.com">helpline@dump.com</a>
                                    </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--// top-bar -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl">
                        <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                            <div class="s-l">
                                <h5>TOTAL PHC</h5>
                                <!-- <p class="paragraph-agileits-w3layouts text-white">Lorem Ipsum</p> -->
                            </div>
                            <div class="s-r">
                                <h6>50,000
                                    <i class="far fa-edit"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                            <div class="s-l">
                                <h5>Registered PHC</h5>
                                <!-- <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p> -->
                            </div>
                            <div class="s-r">
                                <h6>25,000<!-- addd php code to fetch count  --> 
                                 <i class="far fa-smile"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                            <div class="s-l">
                                <h5>PHC Not Registered</h5>
                                <!-- <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p> -->
                            </div>
                            <div class="s-r">
                                <h6>25,000
                                    <i class="fas fa-tasks"></i>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <!--// Stats -->
                    <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Pie Chart Genderwise Manpower Available in PHC's</h4>
                        <div id="piechart"></div>
                    </div>
                </div>
            </div>
            <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">PIE CHART</h4>
                <div id="piechart1" class="simple-chart1">
                </div>
            </div>
            <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">PIE CHART</h4>
                <div id="piechart3" class="simple-chart1">
                </div>
            </div>

            <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Bar Chart</h4>
                <div id="chart_div1"></div>
            </div>
            <!--  Simple-chart --> 
            <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Graph</h4>
                <div id="Hybridgraph" class="simple-chart1">
                </div>
            </div>
            <!-- Simple-chart  -->

            <!-- // Bar-Chart  -->
            <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Bar Chart</h4>
                <div id="chart-1"></div>
            </div>
             <!-- Bar-Chart  -->

           
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
            $(".se-pre-con").fadeOut("slow");;
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
    <link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
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
                country: "PUN",
                value: 260
            },
            {
                country: "HYN",
                value: 201
            },
            {
                country: "MP",
                value: 65
            },
            {
                country: "UP",
                value: 39
            },
            {
                country: "TN",
                value: 19
            },
            {
                country: "MH",
                value: 10
            }
        ];

        AmCharts.ready(function () {
            // PIE CHART
            chart = new AmCharts.AmPieChart();
            chart.dataProvider = chartData;
            chart.titleField = "state";
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
<?php }
else 
   {

header('location:login.php');
echo '<script language="javascript">';
echo 'alert("Log in First")';
echo '</script>';
}
?>

</body>

</html>