<html xmlns="http://www.w3.org/1999/xhtml" lang="hi" xml:lang="hi">
<head>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/css/mdb.min.css" rel="stylesheet">
    <!--Links for data table-->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">


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

    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

</head>

<style>
    .nav-item {
        padding: 5px;
    }

    html {
        scroll-behavior: smooth;
    }

    .hide {
        display: none;
    }

    @media screen (max-width:

    200px

    ) {
        #emb {
            width: 2%;
            height: 1%;
            padding-bottom: 10px;
        }
    }

    .grade {
        background-image: linear-gradient(rgba(81, 137, 249, 0.31), rgba(74, 126, 228, 0.83));
    }

    .bullet {
        border-left: solid 5px #005cbf;
    }

    .bullet1 {
        border-left: solid 2px #005cbf;
    }

    @media screen and (max-width: 400px) {
        #img1, #img2 {
            display: none;
        }

        #tab1 {
            width: 100%;
        }
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
            <li class="nav-item">
                <a class="nav-link" href="index.php"><b><i class="fa fa-home"></i>&nbsp;Home</b>
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item active">
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

<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-3">
            <table class="table table-bordered "
                   style="border: solid 2px lightgray;background-color: rgba(211,217,223,0.32)">

                <tr>
                    <td><a href="#ministry" onclick=showDiv1();>About the Ministry</a></td>
                </tr>
                <tr>
                    <td><a href="#oraganization" onclick=showDiv2();>Associated Organizations</a></td>
                </tr>
                <tr>
                    <td><a href="#vision" onclick=showDiv3();>Vision and Mission</a></td>
                </tr>

            </table>
        </div>


        <!--For Ministry-->
        <div class="col-md-9 mb-5" id="ministry">
            <div class="bullet" style="padding-left: 5px;font-size: x-large"><b>About the Ministry</b></div>

            <h6 class="bullet1 mb-3 mt-4" style="font-size: large;padding-left: 5px"><b>Introduction</b></h6>
            <font size="2px">

                <p>The Department of Women and Child Development, Government of India, came into existence as a separate
                    Ministry with effect from 30th January, 2006, earlier since 1985 it was a Department under the
                    Ministry
                    of Human Resources Development.</p>


                <p>The Ministry was constituted with the prime intention of addressing gaps in State action for women
                    and
                    children for promoting inter-Ministerial and inter-sectoral convergence to create gender equitable
                    and
                    child-centred legislation, policies and programmes.</p></font>

            <h6 class="bullet1 mb-3 mt-4" style="font-size: large;padding-left: 5px"><b>Mandate</b></h6>
            <font size="2px">

                <p>The broad mandate of the Ministry is to have holistic development of Women and Children. As a nodal
                    Ministry for the advancement of women and children, the Ministry formulates plans, policies and
                    programmes; enacts/ amends legislation, guides and coordinates the efforts of both governmental and
                    non-governmental organisations working in the field of Women and Child Development. Besides, playing
                    its nodal role, the Ministry implements certain innovative programmes for women and children. These
                    programmes cover welfare and support services, training for employment and income generation,
                    awareness generation and gender sensitization. These programmes play a supplementary and
                    complementary role to the other general developmental programmes in the sectors of health,
                    education, rural development etc. All these efforts are directed to ensure that women are empowered
                    both economically and socially and thus become equal partners in national development along with
                    men.</p>

            </font>

            <font size="2px">

                <h6 class="bullet1 mb-3 mt-4" style="font-size: large;padding-left: 5px"><b>Policy Initiatives</b></h6>
                <p>For the holistic development of the child, the Ministry has been implementing the world's largest and
                    most unique and outreach programme of Integrated Child Development Services (ICDS) providing a
                    package of services comprising supplementary nutrition, immunization, health check up and referral
                    services, pre-school non-formal education. There is effective coordination and monitoring of various
                    sectoral programmes. Most of the programmes of the Ministry are run through non-governmental
                    organisations. Efforts are made to have more effective involvement of NGOs. The major policy
                    initiatives undertaken by the Ministry in the recent past include universalisation of ICDS and
                    Kishori Shakti Yojana, launching a nutrition programme for adolescent girls, establishment of the
                    Commission for protection of Child Rights and enactment of Protection of Women from Domestic
                    Violence Act.</p></font>


            <font size="2px">

                <h6 class="bullet1 mb-3 mt-4" style="font-size: large;padding-left: 5px"><b>Organisation</b></h6>
                <p>The Ministry of Women and Child Development is headed by Hon'ble Minister Smt. Maneka Sanjay Gandhi,
                    Minister of State Dr. Virendra Kumar and Shri Rakesh Srivastava is the Secretary of the Ministry of
                    Women and Child Development.The activities of the Ministry are undertaken through seven bureaux.

                </p>
                <p> The Ministry has 6 autonomous organisations ; </p>

                <ul>
                    <li> National Institute of Public Cooperation and Child Development (NIPCCD)</li>
                    <li> National Commission for women (NCW)</li>
                    <li> National Commission for Protection of Child Rights (NCPCR)</li>
                    <li> Central Adoption Resource Agency (CARA)</li>
                    <li> Central Social Welfare Board (CSWB)</li>
                    <li> Rashtriya Mahila Kosh (RMK)</li>

                </ul>

                <p> Women's Empowerment and Gender Equity </p>

                <ul>
                    <li> National Commission for Women.</li>
                    <li> Rashtriya Mahila Kosh (RMK)</li>
                    <li>The Juvenile Justice (Care and Protection of Children) Act, 2000 (56 of 2000).</li>
                    <li>Probation of Juvenile offenders.</li>
                    <li> Issues relating to adoption, Central Adoption Resource Agency and Child Help Line (Childline)
                    </li>
                    <li>The Children Act, 1960 (60 of 1960)</li>
                    <li> The Child Marriage - Restraint Act, 1929 (19 of 1929)</li>


                </ul>
            </font>

        </div>
        <!--/.For Ministry-->


        <!--For Organization-->
        <div class="col-md-9 hide" id="organization">
            <table id="tab1" class="table table-striped table-bordered" style="width:80%;">
                <thead>
                <tr>
                    <th> <b>Sr. No </b></th>
                    <th><b>Name of Organization</b></th>
                </tr>
                </thead>
                <tbody>

                <tr>

                    <td>1</td>
                    <td>Central Adoption Resource Authority(CARA)</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>NCW</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>NCPCR</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>CSWB</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>NMEW</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>RMK</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>NIPCCD</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>FNB</td>
                </tr>
                </tbody>
            </table>
        </div>
        <!--/.For Organization-->


        <!--For Vision-->
        <div class="col-md-9 hide" id="vision">

            <div class="col-md-9 mb-5" id="ministry">
                <div class="bullet" style="padding-left: 5px;font-size: x-large"><b>Vision and Mission</b></div>

                <h6 class="bullet1 mb-3 mt-4" style="font-size: large;padding-left: 5px"><b>Vision</b></h6>
                <font size="2px">

                    <p>Empowered women living with dignity and contributing as equal partners in development in an
                        environment free from violence and discrimination. And, wellnurtured children with full
                        opportunities for growth and development in a safe and protective environment.</p>

                </font>

                <h6 class="bullet1 mb-3 mt-4" style="font-size: large;padding-left: 5px"><b>Mission</b></h6>
                <font size="2px">

                    <p>Promoting social and economic empowerment of women through cross-cuting policies and programmes,
                        mainstreaming gender concerns, creating awareness about their rights and facilitating
                        institutional and legislative support for enabling them realize their human rights and develop
                        to their full potential.2. Ensuring development, care and protection of children through
                        cross-cutting policies and programmes,spreading awareness about their rights and facilitating
                        access to learning,nutrition,institutional and legislative support for enabling them to grow and
                        develop to their full potential.</p>

                </font>
            </div>
        </div>


    </div>
    <!--/.For Vision-->


</div>
</div>

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

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

<!--to load about-->
<script>
    function showDiv1() {
        document.getElementById("ministry").style.display = "block";
        document.getElementById("organization").style.display = "none";
        document.getElementById("vision").style.display = "none";
    }

    function showDiv2() {
        document.getElementById("ministry").style.display = "none";
        document.getElementById("organization").style.display = "block";
        document.getElementById("vision").style.display = "none";
    }

    function showDiv3() {
        document.getElementById("ministry").style.display = "none";
        document.getElementById("organization").style.display = "none";
        document.getElementById("vision").style.display = "block";
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





