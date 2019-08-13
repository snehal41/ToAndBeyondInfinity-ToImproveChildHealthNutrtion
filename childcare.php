<html>
<head>
    <title>PHC NW PORTAL</title>
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

.hide {
    display: none;
}

html {
    scroll-behavior: smooth;
}
#con{
    background-color: #b1cfeb;
    padding-bottom: 10px;
    margin-bottom: 10px;
}
.image{
    border-radius: 100px;
    margin-top: 10px;
    margin-bottom: 10px;
}
#serv{
    background-color: #febe89;
    padding-bottom: 10px;
    margin-bottom: 10px;
}
#women{
    background-color: rgba(255, 252, 95, 0.73);
    padding-bottom: 10px;
    margin-bottom: 10px;
}
#child{
    background-color: #ffc4ca;
    padding-bottom: 10px;
    margin-bottom: 10px;
}

.card{
    box-shadow: none;
}
.grade{
    background-image: linear-gradient(rgba(81, 137, 249, 0.31), rgba(74, 126, 228, 0.83));
}
@media screen and (max-width: 400px){
    #img1,#img2{
        display:none;

    }
}

</style>

<body>

    <div class="row" style="background-color:rgba(81, 137, 249, 0.31) ;padding: 2px">
        <div id="google_translate_element" class="ml-auto" style="padding-right:20px"></div>
    </div>

    <div class="row grade" style="height:25%;">
        <div class="col-md-2" id="img1">
            <center><img  src="images/lady.png"
              style="width:100%;height:70%;">
          </center>
      </div>

      <div class="col-md-2"></div>

      <!--emblem-->
      <div class="col-md-4">
        <center><img id="emb" src="images/emblem.png"
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
<nav class="mb-1 navbar navbar-expand-lg navbar-dark" style="background-color: #385fad">
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
        <li class="nav-item ">
            <a class="nav-link" href="about.php"><b>About Us</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="view_phc.php"><b>View PHCs</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="news.php"><b>News & Highlights</b></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"><b>Digital Resources</b>
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">Training Courses</a>
            <a class="dropdown-item" href="wcare.php">For Women Care</a>
            <a class="dropdown-item" href="ccare.php">For Child Care</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="grievance.php"><b>Grievance</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="contact.php"><b>Contact Us</b></a>
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

<div class="container-fluid  mt-3">
    <!--Carousel Wrapper-->

    <div class="row mt-5">
        <!-- item -->
        <div class="col-md-3 text-center">
            <div class="b1" id="con">
                <i class="circle"><img class="image" src="images/a1.jpg"/></i>
                <a href="#consult" onclick=showDiv1();>
                    <h3 style="color: black">NURTURING  A  NEWBORN  BABY</h3>
                </a>
            </div>
        </div>
        <!-- end: -->

        <!-- item -->
        <div class="col-md-3 text-center">
            <div class="b1" id="serv">
                <i class="circle"> <img class="image" src="images/a2.jpg"/></i>
                <a href="#service" onclick=showDiv2();>
                    <h3 style="color: black">FEEDING  A  NEWBORN  BABY</h3>
                </a>
            </div>
        </div>

        <!-- item -->
        <div class="col-md-3 text-center">
            <div class="b1" id="women">
                <i class="circle"> <img class="image" src="images/a3.jpg"/></i>
                <a href="#women_care" onclick=showDiv3();>
                    <h3 style="color: black">Womens Care</h3>
                </a>
            </div>
        </div>
        <!-- end: -->

        <!-- item -->
        <div class="col-md-3 text-center">
            <div class="b1" id="child">
                <i class="circle"> <img class="image" src="images/a4.jpg"/></i>
                <a href="#child_care" onclick=showDiv4();>
                    <h3 style="color: black">Children Care</h3>
                </a>
            </div>
        </div>
        <!-- end:-->
    </div>

    <div class="container-fluid row" style="padding: 50px" id="consult">
        <div class="card" >
            <div class="card-block">
                <div class="row bullet mt-5 ml-3" style="padding-left: 5px;color: #344493"><h2><strong>Breastfeeding
                    : </strong></h2>
        </div>
                <div class="row">

            <div class="col-md-8">
                <p style="padding: 20px;font-size:18px;text-align:justify">It is very important to feed the baby on
                    time. A
                    newborn has to be fed every 2 to 3
                    hours, which means you need to nurse her 8-12 times in 24 hours. An infant should be fed only breast
                    milk
                    for the first 6 months of life. Breast milk contains vital nutrients and antibodies that are
                    required
                    for a
                    baby’s survival and growth. Nurse the baby for 10 minutes at least. Hold the breast near your baby’s
                    lips
                    until she latches on firmly and starts sucking. If the baby has latched on correctly, the mother
                    will
                    not
                    experience any pain in her nipples. The breast should feel less full once the baby is done the
                    feeding.
                    This
                    is an indication that the baby is getting enough milk. In case breast milk is not an option, feed
                    the
                    baby
                    with a doctor-recommended formula. The baby should get 60 to 90ml of formula per feeding.<a href="https://www.youtube.com/watch?v=ZcRBhxMaqtI">WATCH VIDEO</a>
            </div>
            <div class="col-md-4">
                <center>
                    <img src="https://www.babycenter.com/ims/2015/08/US_how-to-hold-baby_video-still_4x3.jpg"
                         width="80%" height="80%">
                </center>
            </div>
        </div>
    </div>
    


        <div class="row bullet mt-5 ml-3" style="padding-left: 5px;color: #344493"><h2><strong>Diapering
                    : </strong></h2>
        </div>

        <div class="row">

            <div class="col-md-8">
                <p style="padding: 20px;font-size:18px;text-align:justify">
                    Changing diapers frequently is an important
                    aspect when taking care of a newborn baby after delivery. If your baby is getting sufficient breast
                    milk or formula, she will wet at least 6 to 8 diapers in a day, along with regular bowel movements.
                    Change her diaper frequently, as soon as it feels full. You may even have to change it at least 10
                    times a day. To change a dirty diaper, you will need a changing sheet, gentle diaper wipes, diaper
                    rash cream or baby powder and fresh diapers. In order to prevent UTI, wipe your baby girl from front
                    to back rather than back to front. And let your baby remain without a diaper for a few hours each
                    day.<a href="https://www.youtube.com/watch?v=ZcRBhxMaqtI">WATCH VIDEO</a>
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img src="https://www.babycenter.com/ims/2015/08/US_how-to-hold-baby_video-still_4x3.jpg"
                         width="80%" height="80%">
                </center>
            </div>
        </div>


                </div>
            </div>
        </div>

        <div class="container-fluid hide row" style="padding: 50px" id="service">
            <div class="card" >
                <div class="card-block">


                    <div class="row bullet mt-5 ml-3" style="padding-left: 5px;color: #344493"><h2><strong>FOOD CHART FOR NEWBORN BABY
                    : </strong></h2>
        </div>

        <div class="row">

            <div class="col-md-4">
                <img src="https://thumbs.dreamstime.com/b/detailed-information-baby-food-infographic-baby-s-first-foods-chart-presentation-template-should-you-introduce-new-71369167.jpg" width="80%" height="80%">
            </div>
            <div class="col-md-4">
                <img src="https://i.pinimg.com/474x/0c/16/b3/0c16b36d6634358de315274b390f3ef2.jpg?b=t" 
                width="80%" height="80%">
            </div>
            <div class="col-md-4">
                    <iframe width="80%" height="80%" src="https://www.youtube.com/embed/cJIbJKKSIH4" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                            <input name="file_name" value="vid" type="hidden">
                </div>
                   
                </div>
            </div>
        </div>
            <div class="container-fluid hide row" style="padding: 50px" id="women_care">
                <div class="card" >
                    <div class="card-block">
                        <h5>Appropriate management of injuries and accident, First Aid, stitching of wounds, incision and
                            drainage of abscess, stabilisation of the condition of the patient before referral, Dog bite/snake
                            bite/scorpion bite cases, and other emergency conditions. These services will be provided primarily
                            by the nursing staff. However, in case of need, Medical Officer may be available to attend to
                            emergencies on call basis.</h5>
                        </div>
                    </div>
                </div>
                <div class="container-fluid hide row" style="padding: 50px" id="child_care">
                    <div class="card" >
                        <div class="card-block">
                            <h5>Appropriate management of injuries and accident, First Aid, stitching of wounds, incision and
                                drainage of abscess, stabilisation of the condition of the patient before referral, Dog bite/snake
                                bite/scorpion bite cases, and other emergency conditions. These services will be provided primarily
                                by the nursing staff. However, in case of need, Medical Officer may be available to attend to
                                emergencies on call basis.</h5>
                            </div>
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

                        <!--to load cards-->
                        <script>
                        function showDiv1() {
                            document.getElementById("consult").style.display = "block";
                            document.getElementById("service").style.display = "none";
                            document.getElementById("women_care").style.display = "none";
                            document.getElementById("child_care").style.display = "none";
                        }

                        function showDiv2() {
                            document.getElementById("consult").style.display = "none";
                            document.getElementById("service").style.display = "block";
                            document.getElementById("women_care").style.display = "none";
                            document.getElementById("child_care").style.display = "none";
                        }

                        function showDiv3() {
                            document.getElementById("consult").style.display = "none";
                            document.getElementById("service").style.display = "none";
                            document.getElementById("women_care").style.display = "block";
                            document.getElementById("child_care").style.display = "none";
                        }

                        function showDiv4() {
                            document.getElementById("consult").style.display = "none";
                            document.getElementById("service").style.display = "none";
                            document.getElementById("women_care").style.display = "none";
                            document.getElementById("child_care").style.display = "block";
                        }
                        </script>




                        <!--Google Translate-->
                        <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                        }
                        </script>

                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


