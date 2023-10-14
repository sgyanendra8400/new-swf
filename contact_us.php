<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heal</title>
    <link rel="shortcut icon" href="assets/css/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">

    <!-- main css for template -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <!-- <style>
        .banner_image{
        background-image:url("assets/images/banner.jpg")
        }
    </style> -->
</head>

<body class="home-inner">

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->



    <!-- ================> header section start here <================== -->
    <?php
				include("header.php")
			?>
    <!-- ================> header section end here <================== -->


    <!-- ================> Page Header section start here <================== -->
    
    <div class="pageheader-section banner_image">
        <div class="container" >
            <div class="pageheader" >
            
                <div class="pageheader__title">
                    <h2>Registration</h2>
                </div>
                <div class="pageheader__breadcamp">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Registration</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Page Header section end here <================== -->


    <!-- ================> Event section start here <================== -->
    <div class="event-section padding--top padding--bottom bg-white" id="event">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 col-12 card banner__section" style="padding:20px">
                    <div class="section-wrapper">
                    <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name" required>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Mob No.</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Number" required>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Email Id</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email" required>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Message</label>
                        <textarea id="message" name="message" rows="4" cols="50">Enter Your Message..</textarea>                        </div>
                        <div class="form-check">
                        </div>
                        <a href="causes.html" class="default-btn move-right"><span>Submit</span></a>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- ================> Event section end here <================== -->



 

    <!-- ================> Footer section start here <================== -->
    <?php
				include("footer.php")
			?>
    <!-- ================> Footer section end here <================== -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fas fa-arrow-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->



    

    <!-- vendor plugins -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- <script src="assets/js/parallax.min.js"></script> -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>