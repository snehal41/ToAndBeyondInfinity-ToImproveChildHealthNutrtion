<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home| Central Ministry</title>
 <?php 
      
      include 'dbconfig.php';
      $output = '';
      $query = "SELECT * FROM phcregister";
      $result = mysqli_query($connect, $query);
    ?>   <!-- Meta Tags -->
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
            <li>
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
                <li class="active">
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
                        <?php
                    $output ='  <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                    <th>PHC id</th>
                    <th>Name</th>
                    <th>Medical Officer</th>
                    <th>Email</th>
                    <th>phone no.</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Taluka</th>
                    <th>Village</th>
                    <th>VIEW</th>
                    </tr>
                    </thead><tbody>';
               
                  while($row = mysqli_fetch_array($result))  
                               {  
                                $var1=$row["PHCid"];
                               
                
                        $output .=  '<tr>  
                                    <td>'.$row["PHCid"].'</td>
                                    <td>'.$row["PHCname"].'</td>
                                    <td>'.$row["Mfirstname"].'</td>
                                    <td>'.$row["Email"].'</td>
                                    <td>'.$row["Phoneno"].'</td>
                                    <td>'.$row["State"].'</td>  
                                     <td>'.$row["District"].'</td>
                                    <td>'.$row["Taluka"].'</td>
                                    <td>'.$row["Village"].'</td> 
                                    <td><input type="hidden" name="data"></input><a name="value1" href="./display.php?data='.$var1.'">VIEW</a></td>
                               </tr>';


                               
                               }  

                    $output .= '</tbody></table>';
                        echo $output;
               ?>

</div>

</div></div>



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

    
    <!-- profile-widget-dropdown js-->
    <script src="js/script.js"></script>
    <!--// profile-widget-dropdown js-->

   
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


<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.4/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
</html>

<sript>
     
    </script>