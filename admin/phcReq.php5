
<?php
include 'dbconfig.php5';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>View PHC Request</title>
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
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="index.php">PHC Request</a>
                </h1>
                <span>PHC</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li >
                    <a href="index.php">
                        <i class="fas fa-th-large"></i>Dashboard
                    </a>
                </li>
                <li class="active">
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
                    <!-- Search-from -->
                    <form action="#" method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
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
            <!--// top-bar -->

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Requests</h2>
            <!--// main-heading -->
            <!--Data Table-->

            <div class="container-fluid">
                <div class="outer-w3-agile mt-3">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" style="width:100% " >
                            <thead>
                            <tr>
                                <th scope="col">PHC ID</th>
                                <th scope="col">PHC Name</th>
                                <th scope="col">State</th>
                                <th scope="col">District</th>
                                <th scope="col">Document</th>
                                <th scope="col">Remark</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT p.PHCid, p.PHCname,p.State,p.District,p.upload_on,p.Email,s.state_name,d.dist_name,p.Password1 FROM phcregister p,states s, district d where p.Status1=0 and s.state_id=p.State and d.dist_id=p.District";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $i = $row["PHCid"];
                                    ?>
                                    <tr>

                                        <td><?php echo $row["PHCid"] ?></td>
                                        <td><?php echo $row["PHCname"] ?></td>
                                        
                                        <td><?php echo $row["state_name"] ?></td>
                                        <td><?php echo $row["dist_name"] ?></td>
                                        <td><a href="show_docs.php5?id=<?php echo $row["PHCid"] ?>" target="_blank">View Document</a> </td>

                                <td><button class="button" style="border: black;bo" name="rapp" id="rapp" onclick="openrapp(this)" data-phcid=" <?php echo $row['PHCid']?>"
                                               data-email="<?php echo $row['Email'] ?>"
                                               data-password="<?php echo $row['Password1'] ?>"><i class="fa fa-check">Approve</i>
                                                &nbsp;&nbsp;&nbsp;</button>
                                                <button class="button" style="border: black;" name="rdis" id="rdis"
                                                        onclick="openrdis(this)"
                                                        data-phcid="<?php echo $row['PHCid'] ?>" data-email="<?php echo $row['Email'] ?>"><i class="fa fa-times">Dispprove</i>
                                                </button></td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "0 results";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!--End Data Table-->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

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


    <script>
        function openrapp(g) {
            var v=$(g).data("phcid");
            var m=$(g).data("email");
            var p=$(g).data("password");
            if (confirm("Do you want to Approve this?")) {
                window.location="phc_approve.php5?phcid=" + v + "&email=" + m + "&password=" + p +"";
            }

        }

        function openrdis(g) {
            var v=$(g).data("phcid");
            var m=$(g).data("email");
            var remark= prompt("Enter reason for rejection:","");
            var temp=0;
            while(temp == 0)
            {
                if(remark=="")
                {
                    var remark= prompt("Enter reason for rejection:","");
                }
                else
                {
                    temp=1;
                }
            }
            if (confirm("Do you want to DisApprove this?")) {
                window.location = "phc_disapprove.php5?phcid=" + v + "&remark=" + remark + "&email=" + m + "";
            }

        }
    </script>
    <?php
    $conn->close();
    ?>
</body>

</html>
