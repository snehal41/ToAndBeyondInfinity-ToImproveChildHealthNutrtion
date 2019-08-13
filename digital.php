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

.hide {
    display: none;
}

html {
    scroll-behavior: smooth;
}

#con {
    background-color: #b1cfeb;
    padding-bottom: 10px;
    margin-bottom: 10px;
}

.image {
    border-radius: 100px;
    margin-top: 10px;
    margin-bottom: 10px;
}

#serv {
    background-color: #febe89;
    padding-bottom: 10px;
    margin-bottom: 10px;
}

#women {
    background-color: rgba(255, 252, 95, 0.73);
    padding-bottom: 10px;
    margin-bottom: 10px;
}

#child {
    background-color: #ffc4ca;
    padding-bottom: 10px;
    margin-bottom: 10px;
}

@media screen and (max-width:400px) {
    #img1,#img2 {
        display: none;
    }
}
.pic-container {
    width: 100%;
    height: 50%;
    overflow-y: scroll;
    overflow-x: hidden;
}
.grade{
    background-image: linear-gradient(rgba(81, 137, 249, 0.31), rgba(74, 126, 228, 0.83));
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
        <li class="nav-item">
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
            <a class="dropdown-item" href="#">Before Child</a>
            <a class="dropdown-item" href="#">After Child</a>
            <a class="dropdown-item" href="#">Something else !</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="contact.php"><b>Contact Us</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="grievance.php"><b>Grievance</b></a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"><b>Dropdown</b>
    </a>
    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
    </div>
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
    <a class="dropdown-item" href="#">Log In</a>
    <a class="dropdown-item" href="#">Register</a>
</div>
</li>
</ul>
</div>
</nav>
<!--/.Navbar -->

<div class="container-fluid " style="padding-bottom: 50px">

    <div class="row mt-5 mb-5">
        <div class="col-md-3" >

            <div class="pic-container">
                <iframe class="mb-3 width=" 90%
                " height="40%" src="https://www.youtube.com/embed/wGvr4S33tW4" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

                <iframe class="mb-3 width=" 90%
                " height="40%" src="https://www.youtube.com/embed/wGvr4S33tW4" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

                <iframe class="mb-3 width=" 90%
                " height="40%" src="https://www.youtube.com/embed/wGvr4S33tW4" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

                <iframe class="mb-3 width=" 90%
                " height="40%" src="https://www.youtube.com/embed/wGvr4S33tW4" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

                <iframe class="mb-3 width=" 90%
                " height="40%" src="https://www.youtube.com/embed/wGvr4S33tW4" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>


            </div>
            <div class="col-md-9">

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

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,
                    consectetur
                    adipisicing elit.</p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                    <p>
                        <a href="#!">MDBootstrap</a>
                    </p>
                    <p>
                        <a href="#!">MDWordPress</a>
                    </p>
                    <p>
                        <a href="#!">BrandFlow</a>
                    </p>
                    <p>
                        <a href="#!">Bootstrap Angular</a>
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                    <p>
                        <a href="#!">Your Account</a>
                    </p>
                    <p>
                        <a href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!">Help</a>
                    </p>
                </div>

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p>
                        <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                            <p>
                                <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                                <p>
                                    <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Footer links -->

                            <hr>

                            <!-- Grid row -->
                            <div class="row d-flex align-items-center">

                                <!-- Grid column -->
                                <div class="col-md-7 col-lg-8">

                                    <!--Copyright-->
                                    <p class="text-center text-md-left">© 2018 Copyright:
                                        <a href="https://mdbootstrap.com/education/bootstrap/">
                                            <strong> MDBootstrap.com</strong>
                                        </a>
                                    </p>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-5 col-lg-4 ml-lg-0">

                                    <!-- Social buttons -->
                                    <div class="text-center text-md-right">
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
                                            <li class="list-inline-item">
                                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                                    <i class="fab fa-linkedin-in"></i>
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



