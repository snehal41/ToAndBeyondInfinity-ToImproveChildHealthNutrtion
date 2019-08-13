<!DOCTYPE html>
<html lang="en"><head>
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

    .hr {

        border: 0;
        height: 1px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.86), rgba(0, 0, 0, 0));

    }

    @media screen and (max-width: 400px) {
        #img1, #img2 {
            display: none;
        }
    }

    .grade {
        background-image: linear-gradient(rgba(81, 137, 249, 0.31), rgba(74, 126, 228, 0.83));
    }

    .bullet {
        border-left: solid 5px #005cbf;
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
                    <a class="dropdown-item" href="resource.php">Training Courses</a>
                    <a class="dropdown-item" href="wcare.php">Women Care</a>
                    <a class="dropdown-item" href="ccare.php">Child Care</a>
                </div>
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

<div class="container-fluid " style="padding: 30px">
    <div class="row mt-5 mb-3">
        <div class="col-md-4">
            <button class="btn btn-primary" onclick="FirstTrimesterCare()" type="button"
                    style="width: 100%"><font
                        size="3px">First Trimester Care</font>
            </button>
        </div>
        <div class="col-md-4">
            <button class="btn btn-primary" onclick="SecondTrimesterCare()" type="button"
                    style="width: 100%"><font
                        size="3px">Second Trimester Care</font></button>
        </div>

        <div class="col-md-4">
            <button class="btn btn-primary" onclick="ThirdTrimesterCare()" type="button"
                    style="width: 100%"><font
                        size="3px">Third Trimester Care</font></button>
        </div>
    </div>

    <!--    div for information-->


    <!--    Div for First Trimester Care-->
    <div class="card" id="First" style="padding: 20px">
        <div class="card-body">

            <div class="row" style="width: 100%;">
                <h3><b>First Trimester Care</b></h3>
            </div>

            <div class="row">
                <br>
                <div class="row" style="width: 100%;">
                    <h4><b>Precautions during 1st Trimester of Pregnancy</b></h4>
                </div>
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/CDJ7IebMo2A" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        The first trimester of pregnancy will determine a lot about the progression of your pregnancy
                        into later phases and the health of your child. Although, this joyful ride is going to be the
                        best journey of your life, you need to prepare yourself for the pregnancy. With preparation
                        including precautions during early pregnancy you will be able to control your pregnancy and
                        avoid any complications. Taking precautions during pregnancy will keep several problems at bay.

                        The precaution during pregnancy not only include about alcohol, drugs and medication, it helps
                        you improve the complete experience itself. You will be able to avoid complications so that you
                        can spend more time on looking after yourself. Pregnancy precautions can make the first
                        trimester a stress free as it could have been very stressful otherwise. Following are the common
                        early pregnancy precautions for your first trimester.

                    </p>
                </div>
            </div>

            <br>

            <div class="row">
                <br>
                <div class="row" style="width: 100%; align-self:center">
                    <h4><b>Stay dehydrated</b></h4>
                </div>
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/LhI90jMZUog" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        The changes in the body during the onset of pregnancy increase the fluid requirement in the
                        body. It may even lead to dehydration in the first trimester which increases the risk of
                        miscarriage. Drink plenty of water, fresh fruit juices, smoothies and also eating vegetables
                        such as cucumber that are high on water content to stay hydrated. You need to drink more fluid
                        during pregnancy as your blood volume needs to increase during pregnancy to support better
                        delivery of oxygen and nutrients to your baby.

                    </p>
                </div>
            </div>

            <br>

            <div class="row">
                <br>
                <div class="row" style="width: 100%; align-self:center">
                    <h4><b>Quit Smoking and Alcohol</b></h4>
                </div>
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/dhBK13T-c0M" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        It’s time to look after yourself and switch to healthier lifestyle. Although you should follow a
                        healthy lifestyle throughout your life, there is no scope for alcohol, smoking and drug during
                        pregnancy. Consuming alcohol during the first trimester may cause fetal alcohol syndrome which
                        affects the mental well being and facial features of the child.
                        On the other hand smoking significantly increases the risk of complications including
                        miscarriage and ectopic pregnancy. Women who smoke during pregnancy are more likely to have
                        premature labour and babies of low birth-weight. The risk of sudden infant death syndrome (SIDS)
                        is also higher in households where someone smokes. Make sure to be careful about passive smoking
                        as well as it can also be harmful for your child.
                    </p>
                </div>
            </div>

            <br>

            <div class="row">

                <div class="row" style="width: 100%; align-self:center">
                    <h4><b>Caffeine</b></h4>
                </div>
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/8cAXvypy8sY" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        It’s time to look after yourself and switch to healthier lifestyle. Although you should follow a
                        healthy lifestyle throughout your life, there is no scope for alcohol, smoking and drug during
                        pregnancy. Consuming alcohol during the first trimester may cause fetal alcohol syndrome which
                        affects the mental well being and facial features of the child.
                        On the other hand smoking significantly increases the risk of complications including
                        miscarriage and ectopic pregnancy. Women who smoke during pregnancy are more likely to have
                        premature labour and babies of low birth-weight. The risk of sudden infant death syndrome (SIDS)
                        is also higher in households where someone smokes. Make sure to be careful about passive smoking
                        as well as it can also be harmful for your child.
                    </p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="row" style="width: 100%; align-self:center">
                    <h4><b>Stay Away from Certain Foods</b></h4>
                </div>
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/OHIgjP0c24Y" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        Healthy eating is a primary prerequisite to pregnancy; however, there are certain items that are
                        best avoided. Certain fish such as tuna, king mackerel, shark, swordfish and tilefish do contain
                        high amounts of mercury that may harm the developing brain of your unborn child.
                        The National Health Service warns “Don’t eat mould-ripened soft cheese, such as brie, camembert
                        and chevre (a type of goats' cheese) and others with a similar rind. You should also avoid soft
                        blue-veined cheeses such as Danish blue or gorgonzola. These are made with mould and they can
                        contain listeria, a type of bacteria that can harm your unborn baby. Although infection with
                        listeria (listeriosis) is rare, it is important to take special precautions in pregnancy because
                        even a mild form of the illness in a pregnant woman can lead to miscarriage, stillbirth or
                        severe illness in a newborn baby.”

                        Also avoid soft unpasteurised cheeses, raw eggs and foods containing raw eggs such as mousse,
                        salad dressings, raw fish, processed meats such as sausages and also meat spreads as a
                        precautionary measure during the first trimester.
                        Also make sure that you stay away from uncooked meat and thoroughly wash fruits and vegetables
                        before consuming them.
                    </p>

                </div>
            </div>

            <br>

            <div class="row">

                <div class="row" style="width: 100%; align-self:center">
                    <h4><b>Take Prenatal Vitamins </b></h4>
                </div>
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/rfNvJWSFpA4" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        Always take your prenatal vitamins on time as prescribed by the doctor. The first trimester is a
                        crucial time for you and your baby. Make sure you get all the required vitamins and minerals. A
                        pregnant woman must have at least 400 mcg of folic acid every day. Folic acid is important
                        because it prevents birth defects such as neural tube defects in the unborn baby. Never miss the
                        iron and folic acid supplements.
                    </p>
                </div>
            </div>
            <br>

            <div class="row">

                <div class="row" style="width: 100%; align-self:center">
                    <h4><b>Exercise, eat well and sleep</b></h4>
                </div>
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/uDei1l8vcII" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        You need to look after yourself even more carefully during the first trimester. Make sure that
                        you regularly perform some gentle exercises that can help prevent back pain, boost your energy
                        and build stamina. Hormonal changes during the pregnancy can leave you feeling worn out. So make
                        sure that you get naps as and when needed. Also make sure that you get ample uninterrupted sleep
                        every night. Since your baby needs to be fed constantly, eat light and frequent meals every two
                        to three hours. Don’t rely on your favourite foods or dishes; instead get the required calories
                        from all food groups. Include healthy amounts of foods such as whole grains, milk, meat,
                        poultry, eggs, fish, pulses, legumes and nuts in your diet.
                    </p>

                </div>
            </div>
            <br>

            <div class="row">

                <div class="row" style="width: 100%; align-self:center">
                    <h4><b>How Dangerous Abortion is for Women ??</b></h4>
                </div>
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/_IvGlAXa0wY" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        Following unsafe abortion, women may experience a range of harms that affect their quality of
                        life and well-being, with some women experiencing life-threatening complications. The major
                        life-threatening complications resulting from the least safe abortions are haemorrhage,
                        infection, and injury to the genital tract and internal organs. Unsafe abortions when performed
                        under least safe conditions can lead to complications such as:<br>

                        1) Incomplete abortion (failure to remove or expel all of the pregnancy tissue from the
                        uterus)<br>
                        2) Haemorrhage (heavy bleeding)<br>
                        3) Infection<br>
                        4) Uterine perforation (caused when the uterus is pierced by a sharp object)<br>
                        5) Damage to the genital tract and internal organs by inserting dangerous objects such as
                        sticks, knitting needles, or broken glass into the vagina or anus.<br>

                        # Signs and symptoms<br>

                        An accurate initial assessment is essential to ensure appropriate treatment and prompt referral
                        for complications of unsafe abortion. The critical signs and symptoms of complications that
                        require immediate attention include:<br>

                        1) Abnormal vaginal bleeding<br>
                        2) Abdominal pain<br>
                        3) Infection<br>
                        4) Shock (collapse of the circulatory system).<br>

                        Complications of unsafe abortion can be difficult to diagnose. For example, a woman with an
                        extra-uterine or ectopic pregnancy (abnormal development of a fertilized egg outside of the
                        uterus) may have symptoms similar to those of incomplete abortion. It is essential, therefore,
                        for health-care personnel to be prepared to make referrals and arrange transport to a facility
                        where a definitive diagnosis can be made and appropriate care can be delivered quickly.<br>
                    </p>
                </div>
            </div>

            <br>

            <div class="row">

                <div class="row" style="width: 100%; align-self:center">
                    <h4><b>How to Prevent Miscarriage in Early Pregnancy</b></h4>
                </div>
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/pFBQo4K0FHs" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        If you've endured the heartbreak of a miscarriage—and roughly 15 percent of known pregnancies do
                        end in miscarriage—you may have also experienced an unpleasant side effect of the experience: a
                        crushing sense of guilt. Did the pregnancy end because of the cocktail you had before you knew
                        you were expecting? Or the piece of raw-milk cheese you mistakenly ate a few weeks ago? </p>
                    The truth is, most early miscarriages are caused by genetic abnormalities that are far beyond the
                    control of a mom-to-be. "In most cases, there's nothing you can do to cause a miscarriage, and
                    nothing you can do to prevent it," says Siobhan Dolan, M.D., a medical advisor to the March of Dimes
                    and an attending physician in the Division of Reproductive Genetics at Montefiore Medical Center,
                    the University Hospital for Einstein, in New York City. "It's a very challenging condition. We'd
                    love to have a treatment we can offer, but there are very few effective interventions."
                </div>
            </div>
            <br>

            <div class="row">

                <div class="row" style="width: 100%; align-self:center">
                    <h4><b>Best Home remedies for natural abortion</b></h4>
                </div>
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ZndbTxD_9fo" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        Precautions For Abortion Home Remedies:<br>

                        Home remedies are simple, yet effective solutions to treat many problems, including unwanted
                        pregnancy. These have been tried and tested by many women across the world for many centuries.
                        However, abortion with home remedies is not always 100% safe and one need to follow certain
                        precautions:<br>

                        1) Before following these home remedies, ensure you are pretty sure about your decision. Once
                        they are tried, you might not be able to reverse the condition.<br>
                        2) Never use these home remedies if you cross 10 weeks of pregnancy.<br>
                        3) Lack of proper knowledge on home remedies may lead to complications. It is better to seek
                        expert advice before trying them at home.<br>
                        4) You should make sure that you are in the best of health when following these home remedies.
                        If you experience any discomfort, better seek a doctor’s advice.<br>
                        5) In case home remedies are unsuccessful, you must visit a doctor as soon as possible to avoid
                        delays.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--    Div for Second Trimester Care-->
    <div class="card hide" id="Second" style="padding: 20px">
        <div class="card-body">
            <div class="row" style="width: 100%;">
                <h3><b>Second Trimester Care</b></h3>
            </div>

            <div class="row">
                <br>
                <div class="row" style="width: 100%;">
                    <h4><b>DO'S N DON'T during Second trimester of pregnancy</b></h4>
                </div>
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/fw-Dscuv1g8"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <br>
                    Although there are still several weeks left in the pregnancy, you may want to plan for delivery
                    earlier to help make the third trimester less stressful. Here are some things you can do now to
                    prepare for birth:<br>

                    Take prenatal education classes that are offered locally.<br>
                    Consider classes on breastfeeding, infant CPR, first aid, and parenting.<br>
                    Educate yourself with online research.<br>
                    Watch birth videos on YouTube that are natural and not frightening.<br>
                    Tour the hospital or birth center where you will be giving birth.<br>
                    Make a nursery or space in your house or apartment for the newborn baby.<br>

                    Consider whether or not you want to take medication for the pain during delivery.<br>


                    </p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="row" style="width: 100%;">
                    <h4><b>Can You Eat Well in the Second Trimester and Like It?</b></h4>
                </div>
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/_GA7CmD_rQI"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        Your diet must have carbohydrates, fats, proteins, vitamins, minerals and plenty of water.
                        Every meal should contain 3 portions of each food group. Your meal plan should be divided
                        into portions in each of the meals and one snack to keep up your energy levels all day

                        Your diet should comprise of a combination of the following-<br>
                        To ensure a steady intake of folic acid and iron you should have 5 portions of vegetables
                        (green leafy vegetables like spinach, cabbage) and fruits in a day.
                        You should have carbohydrates (starchy foods, wholegrain bread, cereals) with every meal.
                        Dairy products which are low in fat should be consumed at least 2 to 3 times in a day to
                        ensure calcium intake.
                        Food types high in protein (like fish, eggs, beans) should be eaten at least twice a day.
                        Oily fish (once a week and not more than two times in a week) to give you enough omega
                        3-fatty acids which help in the development of the baby’s brain.
                        You should switch to healthy options in snacks and drinks (like sandwiches, yoghurts).


                    </p>

                </div>
            </div>
<br>
            <div class="row">
                <div class="row" style="width: 100%;">
                    <h4><b>The Second Trimester of Pregnancy: Weight Gain and Other Changes</b></h4>
                </div>
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Lm8hh85ftOk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        At the start of the second trimester, your baby weighs nearly 1.5 ounces. When you reach the end of this trimester, they’ll weigh almost 2 pounds. That’s a lot of growth in a few months. The rate of growth will only increase in your next trimester.

                        The increase in your baby’s weight will cause an increase in your own weight. Your body will continue to increase your blood and fluid volume, which adds weight. Soon, you will start to feel your baby move.

                        The amount of weight you can expect to gain during the second trimester will vary based on your pre-pregnancy weight. Your doctor should calculate your body mass index (BMI) early in your pregnancy. Based on your BMI, your doctor can estimate how much weight you should gain. According to the Institute of Medicine, women who are:

                        underweight, or have a BMI under 18.5, should gain 28-40 pounds
                        normal weight, or have a BMI between 18.5-24.9, should gain 25-35 pounds
                        overweight, or have a BMI between 25-29.9 , should gain 15-25 pounds
                        obese, or have a BMI over 30, should gain 11-20 pounds

                        If you were very sick in your first trimester of pregnancy, you may have lost weight or your weight may have stayed the same. You may gain weight in the second trimester to compensate for this loss.

                        Your doctor will weigh you and estimate your baby’s weight with each monthly visit. Ask them if you’re concerned you’re gaining too much or too little weight.                     </p>

                </div>
            </div>

            <br>
            <div class="row">
                <div class="row" style="width: 100%;">
                    <h4><b>The Second Trimester of Pregnancy: Weight Gain and Other Changes</b></h4>
                </div>
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Lm8hh85ftOk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        At the start of the second trimester, your baby weighs nearly 1.5 ounces. When you reach the end of this trimester, they’ll weigh almost 2 pounds. That’s a lot of growth in a few months. The rate of growth will only increase in your next trimester.

                        The increase in your baby’s weight will cause an increase in your own weight. Your body will continue to increase your blood and fluid volume, which adds weight. Soon, you will start to feel your baby move.

                        The amount of weight you can expect to gain during the second trimester will vary based on your pre-pregnancy weight. Your doctor should calculate your body mass index (BMI) early in your pregnancy. Based on your BMI, your doctor can estimate how much weight you should gain. According to the Institute of Medicine, women who are:

                        underweight, or have a BMI under 18.5, should gain 28-40 pounds
                        normal weight, or have a BMI between 18.5-24.9, should gain 25-35 pounds
                        overweight, or have a BMI between 25-29.9 , should gain 15-25 pounds
                        obese, or have a BMI over 30, should gain 11-20 pounds

                        If you were very sick in your first trimester of pregnancy, you may have lost weight or your weight may have stayed the same. You may gain weight in the second trimester to compensate for this loss.

                        Your doctor will weigh you and estimate your baby’s weight with each monthly visit. Ask them if you’re concerned you’re gaining too much or too little weight.                     </p>

                </div>
            </div>

        </div>
    </div>

    <hr>


    <!--    Div for Third Trimester Care-->
    <div class="card hide" id="Third" style="padding: 20px">
        <div class="card-body">
            <div class="row" style="width: 100%;">
                <h3><b>First Trimester Care</b></h3>
            </div>

            <div class="row">
                <br>
                <div class="row" style="width: 100%;">
                    <h4><b>Precautions during 1st Trimester of Pregnancy</b></h4>
                </div>
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/CDJ7IebMo2A"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        The first trimester of pregnancy will determine a lot about the progression of your
                        pregnancy
                        into later phases and the health of your child. Although, this joyful ride is going to be
                        the
                        best journey of your life, you need to prepare yourself for the pregnancy. With preparation
                        including precautions during early pregnancy you will be able to control your pregnancy and
                        avoid any complications. Taking precautions during pregnancy will keep several problems at
                        bay.

                        The precaution during pregnancy not only include about alcohol, drugs and medication, it
                        helps
                        you improve the complete experience itself. You will be able to avoid complications so that
                        you
                        can spend more time on looking after yourself. Pregnancy precautions can make the first
                        trimester a stress free as it could have been very stressful otherwise. Following are the
                        common
                        early pregnancy precautions for your first trimester.

                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/NfKSNFdORUI"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        Healthy eating is a primary prerequisite to pregnancy; however, there are certain items that
                        are
                        best avoided. Certain fish such as tuna, king mackerel, shark, swordfish and tilefish do
                        contain
                        high amounts of mercury that may harm the developing brain of your unborn child.
                        The National Health Service warns “Don’t eat mould-ripened soft cheese, such as brie,
                        camembert
                        and chevre (a type of goats' cheese) and others with a similar rind. You should also avoid
                        soft
                        blue-veined cheeses such as Danish blue or gorgonzola. These are made with mould and they
                        can
                        contain listeria, a type of bacteria that can harm your unborn baby. Although infection with
                        listeria (listeriosis) is rare, it is important to take special precautions in pregnancy
                        because
                        even a mild form of the illness in a pregnant woman can lead to miscarriage, stillbirth or
                        severe illness in a newborn baby.”

                        Also avoid soft unpasteurised cheeses, raw eggs and foods containing raw eggs such as
                        mousse,
                        salad dressings, raw fish, processed meats such as sausages and also meat spreads as a
                        precautionary measure during the first trimester.
                        Also make sure that you stay away from uncooked meat and thoroughly wash fruits and
                        vegetables
                        before consuming them.
                    </p>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mt-5">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/uDei1l8vcII"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-8 mt-5">
                    <p>
                        You need to look after yourself even more carefully during the first trimester. Make sure
                        that
                        you regularly perform some gentle exercises that can help prevent back pain, boost your
                        energy
                        and build stamina. Hormonal changes during the pregnancy can leave you feeling worn out. So
                        make
                        sure that you get naps as and when needed. Also make sure that you get ample uninterrupted
                        sleep
                        every night. Since your baby needs to be fed constantly, eat light and frequent meals every
                        two
                        to three hours. Don’t rely on your favourite foods or dishes; instead get the required
                        calories
                        from all food groups. Include healthy amounts of foods such as whole grains, milk, meat,
                        poultry, eggs, fish, pulses, legumes and nuts in your diet.
                    </p>

                </div>
            </div>

        </div>
    </div>

    <hr>


</div>


<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4" style="float: bottom">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">
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
                    <a href="grievance.php">Grievance</a>
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


</body>
</html>

<script>
    function FirstTrimesterCare() {
        document.getElementById("First").style.display = "block";
        document.getElementById("Second").style.display = "none";
        document.getElementById("Third").style.display = "none";
    }

    function SecondTrimesterCare() {
        document.getElementById("First").style.display = "none";
        document.getElementById("Second").style.display = "block";
        document.getElementById("Third").style.display = "none";
    }


    function ThirdTrimesterCare() {
        document.getElementById("First").style.display = "none";
        document.getElementById("Second").style.display = "none";
        document.getElementById("Third").style.display = "block";
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



