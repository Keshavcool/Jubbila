<?php
error_reporting(0);
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $yoe=$_POST['yoe'];
    $sp=$_POST['sp'];
    $cname=$_POST['cname'];
    $caddress=$_POST['caddress'];

    require_once('./init.php');
    
    $query="insert into vendour(name,email,mobile,yoe,sp,cname,caddress) values('$name','$email','$mobile','$yoe','$sp','$cname','$caddress')";
    if(mysqli_query($conn,$query)){
        $error="Thanks For the registration.You are Resistered Safely";
    }
    else{
        $error="Something went wrong.Please try again after some time";
    }

    show($error);
}
else{

    show("Hello");
}


function show($error){
    ?>

     <!DOCTYPE html>
    <html lang="en" class="no-js">
    <!-- Begin Head -->

    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Jubbila Booking- Home</title>
        <meta name="keywords" content="Jubbila, Event Management, Dehradun" />
        <meta name="author" content="Shouvik Mitra and Keshav Yadav">
        <meta name="description" content="Jubbila Event Management Agency, Dehradun">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/animate.css" rel="stylesheet" type="text/css" />
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css" />
        <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css" />
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css" />
        <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />

        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/global/global.css" rel="stylesheet" type="text/css" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    </head>
    <!-- End Head -->

    <!-- Body -->

    <body>

        <?php
        
        require_once('./navbar.php');

        ?>

        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v1  g-fullheight--md" style="background-color: rgb(90,120,100);;">
            <div class="container g-ver-center--md g-padding-y-100--xs">
                <div class="row g-hor-centered-row--md g-margin-t-30--xs g-margin-t-20--sm">
                    <div class="col-lg-6 col-sm-6 g-hor-centered-row__col g-text-center--xs g-text-left--md g-margin-b-60--xs g-margin-b-0--md">
                        <div class="s-promo-block-v1__square-effect g-margin-b-60--xs">
                            <h1 class="g-font-size-32--xs g-font-size-45--sm g-font-size-50--lg g-color--white">An Event Experience
                                <br>That Inspires Yourself</h1>
                            <p class="g-font-size-20--xs g-font-size-26--md g-color--white g-margin-b-0--xs">Reimagining the real experience
                                <br>and bring smiles to others.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 g-hor-centered-row__col">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <form method='post' action='vendor.php?msg=1' class="center-block  g-bg-color--white-opacity-lightest g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-60--xs g-radius--4">
                                <div class="g-text-center--xs g-margin-b-40--xs">
                                    <h2 class="g-font-size-30--xs g-color--white">Vendour Information</h2>
                                    <?php
                                    if($_REQUEST['msg']=='1'){
                                        ?>

                                        <h5><?php echo $error;  ?></h5>

                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="g-margin-b-30--xs col-lg-6">
                                    <input name='name' type="text" class="form-control s-form-v3__input" placeholder="* Name" required>
                                </div>
                                <div class="g-margin-b-30--xs col-lg-6">
                                    <input name='mobile' type="text" class="form-control s-form-v3__input" placeholder="* Contact Number" required>
                                </div>
                                <div class="g-margin-b-30--xs col-lg-6">
                                    <input name='cname' type="text" class="form-control s-form-v3__input" placeholder="* Company Name">
                                </div>
                                <div class="g-margin-b-30--xs col-lg-6">
                                    <input name='email' type="email" class="form-control s-form-v3__input" placeholder="* Email">
                                </div>
                                <div class="g-margin-b-30--xs col-lg-6">
                                    <input name='yoe' type="date" class="form-control s-form-v3__input" placeholder="* Years Of Experience">
                                </div>
                                
                                <div class="g-margin-b-30--xs col-lg-6">
                                    <textarea name='sp' type="text" cols='5' rows='2' class="form-control s-form-v3__input" placeholder="* Service Provided"></textarea>
                                </div>
                                <div class="g-margin-b-30--xs col-lg-6">
                                    <textarea name='caddress' type="text" cols='5' rows='2' class="form-control s-form-v3__input" placeholder="* Company Address"></textarea>
                                </div>
                                <div class="g-text-center--xs">
                                    <button type="submit" name='submit' class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Request Quote</button>
                                    <!-- <a class="g-color--white g-font-size-13--xs" href="#">Forgot Password?</a> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->


        <!-- Testimonials -->
        
        <!-- End Testimonials -->


        <!-- Contact -->
        <!-- <div class="s-promo-block-v7 g-bg-position--center g-bg-color--dark-light" style="background: url('img/1920x1080/05.jpg') no-repeat;">
            <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--xsm">
                <div class="g-text-center--xs g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Contact Us</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Get in Touch</h2>
                </div>
                <form class="center-block g-width-500--sm g-width-550--md">
                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Name">
                    </div>
                    <div class="row g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="email" class="form-control s-form-v3__input" placeholder="* Email">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Phone">
                        </div>
                    </div>
                    <div class="g-margin-b-80--xs">
                        <textarea class="form-control s-form-v3__input" rows="5" placeholder="* Your message"></textarea>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
                    </div>
                </form>
            </div>
        </div> -->
        <!-- End Contact -->
        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="g-bg-color--dark">
            <!-- Links -->
            <div class="g-hor-divider__dashed--white-opacity-lightest">
                <div class="container g-padding-y-80--xs">
                    <div class="row">
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity" href="./index.html">Home</a>
                                </li>
                                <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity" href="./about.html">About</a>
                                </li>
                                <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity" href="./services.html">Services</a>
                                </li>
                                <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity" href="./contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity" href="#">Twitter</a>
                                </li>
                                <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity" href="#">Facebook</a>
                                </li>
                                <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity" href="#">Instagram</a>
                                </li>
                                <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity" href="#">YouTube</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity" href="./book.php">Book an event</a>
                                </li>
                                <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity" href="./privacy.html">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="g-font-size-15--xs g-color--white-opacity" href="./terms.html">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                            <h3 class="g-font-size-18--xs g-color--white">Jubbila</h3>
                            <p class="g-color--white-opacity">We provide event management services to companies from different industries and help them achieve
                                the objectives set, through effective processes and a transparent work culture</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="container g-padding-y-50--xs">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="index.html">
                            <img class="g-width-100--xs g-height-auto--xs" src="img/logo.png" alt="Megakit Logo">
                        </a>
                    </div>
                    <div class="col-xs-6 g-text-right--xs">
                        <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light">
                            Developed by:
                            <a href="http://iamshouvikmitra.github.io">Shouvik</a> &amp;
                            <a href="http://keshavyadav.github.io">Keshav</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/vidbg.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/portfolio-4-col-slider.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->

    </html>


    <?php
}

?>