<?php
//Include the database configuration file
include 'dbconfig.php';

//Fetch all the country data
$query = $connect->query("SELECT * FROM States WHERE status = 1 ORDER BY state_name ASC");

//Count total number of rows
$rowCount = $query->num_rows;
?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="hi" xml:lang="hi">
<head>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/css/mdb.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/js/mdb.min.js"></script>

    <script type="text/javascript"
            src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


</head>

<style>
    .nav-item {
        padding: 5px;
    }

    html {
        scroll-behavior: smooth;
    }

    @media screen and (max-width: 400px) {
        #img1, #img2 {
            display: none;
        }

        #img3 {
            margin-bottom: 10%;
        }
    }

    .grade {
        background-image: linear-gradient(rgba(81, 137, 249, 0.31), rgba(74, 126, 228, 0.83));
    }

</style>

<body>

<div class="row" style="background-color:rgba(81, 137, 249, 0.31) ;padding: 2px">
    <div id="google_translate_element" class="ml-auto" style="padding-right:20px"></div>
</div>

<div class="row grade" style="height:25%;">
    <div class="col-md-2" id="img1">
        <center><img src="images/lady.png"
                     style="width:100%;height:70%;">
        </center>
    </div>

    <div class="col-md-2"></div>

    <!--emblem-->
    <div class="col-md-4" id="img3">
        <center><img src="images/emblem.png"
                     style="width:25%;height:55%;padding-top: 5px">
        </center>
        <center>
            <font size="5%"><b>Central Ministry – DI PATNA</b></font>
        </center>

    </div>

    <div class="col-md-2">
    </div>

    <div class="col-md-2" id="img2">

        <center><img src="images/w1.png"
                     style="width:80%;height:60%;padding-top: 7px">
        </center>
    </div>
</div>

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #385fad">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php"><b><i class="fa fa-home"></i>&nbsp;Home</b>
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php"><b>About Us</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view_phc.php"><b>View PHCs</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="news.php"><b>News & Highlights</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="digital.php"><b>Digital Resources</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php"><b>Contact Us</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="grievance.php"><b>Grievance</b></a>
            </li>
            
        </ul>

        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                   aria-haspopup="true"
                   aria-expanded="false">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                     aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="login.php">Log In</a>
                    <a class="dropdown-item" href="phcreg.php">Register</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->


<div class="outer-w3-agile col-xl mt-3">
    <div class="stats-info stats-body">
        <form method="post" action="phc/php/grievance_details.php">
            <div class="card" style="padding: 50px">

                <center><h4 class="tittle-w3-agileits mb-4"><b>Submit your Grievance</b></h4></center>

                <div class="form-row mt-5">
                    <div class="form-group col-md-6">
                        <label>Subject :</label>
                        <input type="text" class="form-control" id="subject" name="subject"
                               autocomplete="off" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Description :</label>
                        <input type="text" class="form-control" id="desc" name="desc"
                               autocomplete="off" required>
                    </div>
                </div>


                <label>Submit to</label>
                <div class="form-row mt-2">
                    <br><br><br>
                    <div class="col-md-4">
                        <select id="state" name="state" class="col-sm-7 mb-2" required>
                            <option value="state">Select State</option>
                            <?php

                            if ($rowCount > 0) {
                                while ($row = $query->fetch_assoc()) {
                                    echo '<option value="' . $row['state_id'] . '">' . $row['state_name'] . '</option>';
                                }
                            } else {
                                echo '<option value="">District not available</option>';
                            }
                            ?>
                        </select>

                    </div>

                    <div class="col-md-4">
                        <select id="dist" name="dist" class="col-sm-7 mb-2" required>
                            <option value="">Select State First</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select id="tal" name="tal" class="col-sm-7">
                            <option value="">Select District First</option>
                        </select>
                    </div>

                </div>


                <div class="form-row mt-5">
                    <button name="sub" id="sub" type="submit"
                            class=" form-control btn btn-success ml-auto mr-auto"
                            style="width: 20%;">Submit
                    </button>
                </div>
        </form>
    </div>
</div>
</div>

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4" style="float: bottom">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">
            <br>
         <img src="http://www.phciowa.org/wp-content/uploads/2017/04/PHC-Main-Logo.jpg" width="20%" height="30%">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-5">

                <h1 class="text-uppercase mb-4 font-weight-bold mt-5">PHC Network</h1>

            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                <p>
                    <a href="about.php">About Us</a>
                </p>
                <p>
                    <a href="news.php">News And Highlights</a>
                </p>
                <p>
                    <a href="digital.php">Digital resources</a>
                </p>
                <p>
                    <a href="user_grievance.php">Grievance</a>
                </p>
            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p>
                    <i class="fas fa-home mr-3"></i> Shastri Bhawan, New Delhi </p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> nic-mwcd@gov.in </p>
                <p>
                    <i class="fas fa-phone mr-3"></i> 011-23386423 </p>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Footer links -->

        <hr>

        <!-- Grid row -->
        <div class="row d-flex align-items-center">

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-auto mr-auto">

                <!-- Social buttons -->
                <div class="text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

</footer>
<!-- Footer -->
<!-- Footer -->

</body>
</html>


<script type="text/javascript">
    $(document).ready(function () {
        $('#state').on('change', function () {
            var stateID = $(this).val();
            if (stateID) {
                $.ajax({
                    type: 'POST',
                    url: 'ajaxData.php',
                    data: 'state_id=' + stateID,
                    success: function (html) {
                        $('#dist').html(html);
                        $('#tal').html('<option value="">Select dist first</option>');
                        $('#vil').html('<option value="">Select tal first</option>');
                    }
                });
            } else {
                $('#dist').html('<option value="">Select state first</option>');
                $('#tal').html('<option value="">Select dist first</option>');
            }
        });

        $('#dist').on('change', function () {
            var distID = $(this).val();
            if (distID) {
                $.ajax({
                    type: 'POST',
                    url: 'ajaxData.php',
                    data: 'dist_id=' + distID,
                    success: function (html) {
                        $('#tal').html(html);
                        $('#vil').html('<option value="">Select tal first</option>');
                    }
                });
            } else {
                $('#tal').html('<option value="">Select state first</option>');
                $('#vil').html('<option value="">Select tal first</option>');
            }
        });

        $('#tal').on('change', function () {
            var talID = $(this).val();
            if (talID) {
                $.ajax({
                    type: 'POST',
                    url: 'ajaxData.php',
                    data: 'tal_id=' + talID,
                    success: function (html) {
                        $('#vil').html(html);

                    }
                });
            } else {
                $('#vil').html('<option value="">Select tal first</option>');
            }
        });
    });
</script>


<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
</script>

<script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



