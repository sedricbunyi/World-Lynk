<!DOCTYPE html>
<html lang="en">
<head>
<head lang="en">
    <meta charset="UTF-8">

    <!--Page Title-->
    <title>World Lynk</title>

    <!--Meta Keywords and Description-->
    <meta name="keywords" content="Nurse Recruitment Agency">
    <meta name="description" content="World-Lync is a full-service consulting agency focusing on the shortage in healthcare workers in the US.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--Favicon-->
    <link rel="shortcut icon" href="images/icon.ico" title="Favicon"/>

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Namari Color CSS -->
    <link rel="stylesheet" href="css/namari-color.css">

    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/eaf26210bb.js" crossorigin="anonymous"></script>

    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status" class="la-ball-triangle-path">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!--End of Preloader-->

<div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
    <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
    <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
</div>

<div id="wrapper">
    <header id="banner" style="background: #fafafa;" class="scrollto clearfix" data-enllax-ratio=".5">
        <div id="header" class="nav-collapse">
            <div class="row clearfix">
                <div class="col-8">

                    <!--Main Navigation-->
                    <div style="position: relative; left: 880px;">
                        <a href="index.html"> <div id="logo"><img src="images/logo_wl.png" id="banner-logo" alt="Landing Page"/></div></a>
                    </div>

                    <div id="nav-trigger"><span></span></div>
                    <nav id="nav-mobile"></nav>

                </div>
            </div>
        </div><!--End of Header-->
    </header>

    <!--Testimonials-->
    <br><br>
    <aside id="applicationform" class="scrollto" data-enllax-ratio=".2">

        <div class="row clearfix" style="padding-bottom: 0px; padding-left: 550px;">
            <div class="section-heading">
                <h3>Application Form</h3>
                <h2 class="section-title">For Nurses</h2>
            </div>
        </div>

        <div class="row clearfix" style="padding-top: 0px; padding-left: 550px;">
            <form action="/functions/sendmail.php" class="col-md-9 form-control" style="border-color: transparent;" method="POST">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" placeholder="Input First Name" id="firstname" name="firstname">
            </div>
            <div class="form-group">
                <label for="middlename">Middle Name:</label>
                <input type="text" class="form-control" placeholder="Input Middle Name" id="middlename" name="middlename">
            </div>
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" placeholder="Input Last Name" id="lastname" name="lastname">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Input Email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" class="form-control" placeholder="Input Phone Number" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="where">Where did they receive Nursing Degree?</label>
                <input type="text" class="form-control" placeholder="" id="where" name="where">
            </div>
            <div class="form-group">
                <label for="howlong">How long have you been working as a Nurse?</label>
                <input type="text" class="form-control" placeholder="" id="howlong" name="howlong">
            </div>
            <p>Do you have NCLEX Certification?</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="nclex" id="nclex" value="yes" checked>
                    <label class="form-check-label" for="nclex">
                        Yes
                    </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="nclex" id="nclex" value="no">
                <label class="form-check-label" for="nclex">
                    No
                </label>
            </div>
            <br>
                
                <button type="submit" class="button">Submit</button>
            </form>
        </div>
        
    </aside>
    <!--End of Testimonials-->

    <div class="row" style="text-align:center; padding-left: 825px; padding-bottom:25px;" >
        <p id="copyright" style="font-size: small; opacity:0.6;"> ©2022 World Lynk. All rights reserved. <br> info@worldlync.net | +1 480-299-6201</p>
    </div>
</div>

<!-- Include JavaScript resources -->
<script src="js/jquery.1.8.3.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/featherlight.min.js"></script>
<script src="js/featherlight.gallery.min.js"></script>
<script src="js/jquery.enllax.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.stickyNavbar.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/images-loaded.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/site.js"></script>

</body>
</html>