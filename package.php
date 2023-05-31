<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MARINDUQUE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    $xml = simplexml_load_file('Melaya_IT2C_Marinduque/package.xml');
    ?>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i><?php echo $xml->content->email; ?></p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i><?php echo $xml->content->number; ?></p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark"><?php echo $xml->content->marindu; ?></span><?php echo $xml->content->span; ?></h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link"><?php echo $xml->content->home; ?></a>
                        <a href="about.php" class="nav-item nav-link"><?php echo $xml->content->about; ?></a>
                        <a href="service.php" class="nav-item nav-link"><?php echo $xml->content->services; ?></a>
                        <a href="package.php" class="nav-item nav-link active"><?php echo $xml->content->tour; ?></a>
                        <a href="pages.php" class="nav-item nav-link"><?php echo $xml->content->pages; ?></a>
                        <a href="contact.php" class="nav-item nav-link"><?php echo $xml->content->contact; ?></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase"><?php echo $xml->content->about1; ?></h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href=""><?php echo $xml->content->home; ?></a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><?php echo $xml->content->about1; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Booking Start -->
    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected><?php echo $xml->content->destination; ?></option>
                                        <option value="1"><?php echo $xml->content->option1; ?></option>
                                        <option value="2"><?php echo $xml->content->option2; ?></option>
                                        <option value="3"><?php echo $xml->content->option3; ?></option>
                                        <option value="3"><?php echo $xml->content->option4; ?></option>
                                        <option value="3"><?php echo $xml->content->option5; ?></option>
                                        <option value="3"><?php echo $xml->content->option6; ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected><?php echo $xml->content->duration; ?></option>
                                        <option value="1"><?php echo $xml->content->duration1; ?></option>
                                        <option value="2"><?php echo $xml->content->duration2; ?></option>
                                        <option value="3"><?php echo $xml->content->duration3; ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;"><?php echo $xml->content->submit; ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"><?php echo $xml->content->package; ?></h6>
                <h1><?php echo $xml->content->ptp; ?></h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-1.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?php echo $xml->content->bayan1; ?></small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?php echo $xml->content->days; ?></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 <?php echo $xml->content->person; ?></small>
                            </div>
                            <a class="h5 text-decoration-none" href=""><?php echo $xml->content->discover; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i><?php echo $xml->content->rate; ?> <small><?php echo $xml->content->num; ?></small></h6>
                                    <h5 class="m-0"><?php echo $xml->content->price; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-2.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?php echo $xml->content->bayan2; ?></small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?php echo $xml->content->days; ?></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><?php echo $xml->content->person; ?></small>
                            </div>
                            <a class="h5 text-decoration-none" href=""><?php echo $xml->content->discover; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i><?php echo $xml->content->rate; ?> <small><?php echo $xml->content->num; ?></small></h6>
                                    <h5 class="m-0"><?php echo $xml->content->price; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-3.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?php echo $xml->content->bayan3; ?></small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?php echo $xml->content->days; ?></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><?php echo $xml->content->person; ?></small>
                            </div>
                            <a class="h5 text-decoration-none" href=""><?php echo $xml->content->discover; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i><?php echo $xml->content->rate; ?> <small><?php echo $xml->content->num; ?></small></h6>
                                    <h5 class="m-0"><?php echo $xml->content->price; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-4.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?php echo $xml->content->bayan4; ?></small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?php echo $xml->content->days; ?></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><?php echo $xml->content->person; ?></small>
                            </div>
                            <a class="h5 text-decoration-none" href=""><?php echo $xml->content->discover; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i><?php echo $xml->content->rate; ?> <small><?php echo $xml->content->num; ?></small></h6>
                                    <h5 class="m-0"><?php echo $xml->content->price; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-5.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?php echo $xml->content->bayan5; ?></small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?php echo $xml->content->days; ?></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><?php echo $xml->content->person; ?></small>
                            </div>
                            <a class="h5 text-decoration-none" href=""><?php echo $xml->content->discover; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i><?php echo $xml->content->rate; ?> <small><?php echo $xml->content->num; ?></small></h6>
                                    <h5 class="m-0"><?php echo $xml->content->price; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-6.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?php echo $xml->content->bayan6; ?></small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?php echo $xml->content->days; ?></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><?php echo $xml->content->person; ?></small>
                            </div>
                            <a class="h5 text-decoration-none" href=""><?php echo $xml->content->discover; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i><?php echo $xml->content->rate; ?> <small><?php echo $xml->content->num; ?></small></h6>
                                    <h5 class="m-0"><?php echo $xml->content->price; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Packages End -->


    


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white"><?php echo $xml->content->footer->marindu; ?></span><?php echo $xml->content->footer->span; ?></h1>
                </a>
                <p><?php echo $xml->content->footer->marinduque; ?></p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;"><?php echo $xml->content->footer->folow; ?></h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;"><?php echo $xml->content->footer->our; ?></h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><?php echo $xml->content->footer->about; ?></a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><?php echo $xml->content->footer->destination; ?></a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><?php echo $xml->content->footer->services; ?></a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><?php echo $xml->content->footer->package; ?></a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><?php echo $xml->content->footer->guide; ?></a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><?php echo $xml->content->footer->testimonial; ?></a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i><?php echo $xml->content->footer->blog; ?></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;"><?php echo $xml->content->footer->usefull; ?></h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><?php echo $xml->content->footer->about; ?></a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><?php echo $xml->content->footer->destination; ?></a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><?php echo $xml->content->footer->services; ?></a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><?php echo $xml->content->footer->package; ?></a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><?php echo $xml->content->footer->guide; ?></a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><?php echo $xml->content->footer->testimonial; ?></a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i><?php echo $xml->content->footer->blog; ?></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;"><?php echo $xml->content->footer->contact; ?></h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i><?php echo $xml->content->footer->address; ?></p>
                <p><i class="fa fa-phone-alt mr-2"></i><?php echo $xml->content->footer->number; ?></p>
                <p><i class="fa fa-envelope mr-2"></i><?php echo $xml->content->footer->email; ?></p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;"><?php echo $xml->content->footer->newsletter; ?></h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3"><?php echo $xml->content->footer->sign; ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>