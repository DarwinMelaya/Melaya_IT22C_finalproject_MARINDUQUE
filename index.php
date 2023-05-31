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
    $xml = simplexml_load_file('Melaya_IT2C_Marinduque/index.xml');
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
                    <h1 class="m-0 text-primary"><span class="text-dark">MARINDU</span>QUE</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link active"><?php echo $xml->content->home; ?></a>
                        <a href="about.php" class="nav-item nav-link"><?php echo $xml->content->about; ?></a>
                        <a href="service.php" class="nav-item nav-link"><?php echo $xml->content->services; ?></a>
                        <a href="package.php" class="nav-item nav-link"><?php echo $xml->content->tour; ?></a>
                        <a href="pages.php" class="nav-item nav-link"><?php echo $xml->content->pages; ?></a>
                        <a href="contact.php" class="nav-item nav-link"><?php echo $xml->content->contact; ?></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3"><?php echo $xml->content->tours; ?></h4>
                            <h1 class="display-3 text-white mb-md-4"><?php echo $xml->content->title; ?></h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2"><?php echo $xml->content->book; ?></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-4.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


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


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/1about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"><?php echo $xml->content->aboutus; ?></h6>
                        <h1 class="mb-3"><?php echo $xml->content->we; ?></h1>
                        <p><?php echo $xml->content->our; ?></p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="img/about1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/about2.jpg" alt="">
                            </div>
                        </div>
                        <a href="" class="btn btn-primary mt-1"></h1>
                        <p><?php echo $xml->content->book; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class=""><?php echo $xml->content->competitive; ?></h5>
                            <p class="m-0"><?php echo $xml->content->unbeatable; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class=""><?php echo $xml->content->best; ?></h5>
                            <p class="m-0"><?php echo $xml->content->exceptional; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class=""><?php echo $xml->content->worldwide; ?></h5>
                            <p class="m-0"><?php echo $xml->content->comprehensive; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"><?php echo $xml->content->destination; ?></h6>
                <h1><?php echo $xml->content->explore; ?></h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/destination1.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="boac.php">
                            <h5 class="text-white"><?php echo $xml->content->bayan1; ?></h5>
                            <span><?php echo $xml->content->barangay1; ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/destination2.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="mogpog.php">
                            <h5 class="text-white"><?php echo $xml->content->bayan2; ?></h5>
                            <span><?php echo $xml->content->barangay2; ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/destination3.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="stacruz.php">
                            <h5 class="text-white"><?php echo $xml->content->bayan3; ?></h5>
                            <span><?php echo $xml->content->barangay3; ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/destination4.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="torrijos.php">
                            <h5 class="text-white"><?php echo $xml->content->bayan4; ?></h5>
                            <span><?php echo $xml->content->barangay4; ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/destination5.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white"><?php echo $xml->content->bayan5; ?></h5>
                            <span><?php echo $xml->content->barangay5; ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="img/destination6.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white"><?php echo $xml->content->bayan6; ?></h5>
                            <span><?php echo $xml->content->barangay6; ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"><?php echo $xml->content->service; ?></h6>
                <h1><?php echo $xml->content->tour; ?></h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2"><?php echo $xml->content->guide; ?></h5>
                        <p class="m-0"><?php echo $xml->content->your; ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2"><?php echo $xml->content->ticket; ?></h5>
                        <p class="m-0"><?php echo $xml->content->effort; ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2"><?php echo $xml->content->hotel; ?></h5>
                        <p class="m-0"><?php echo $xml->content->find; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Pefect Tour Packages</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-1.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?php echo $xml->content->bayan1; ?></small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?php echo $xml->content->days; ?></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><?php echo $xml->content->person; ?></small>
                            </div>
                            <a class="h5 text-decoration-none" href=""><?php echo $xml->content->discover; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i><?php echo $xml->content->rate; ?><small>(250)</small></h6>
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
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><?php echo $xml->content->person; ?></small>
                            </div>
                            <a class="h5 text-decoration-none" href=""><?php echo $xml->content->discover; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i><?php echo $xml->content->rate; ?><small><?php echo $xml->content->num; ?></small></h6>
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
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i><?php echo $xml->content->rate; ?><small><?php echo $xml->content->num; ?></small></h6>
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
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i><?php echo $xml->content->rate; ?><small><?php echo $xml->content->num; ?></small></h6>
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
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i><?php echo $xml->content->rate; ?><small><?php echo $xml->content->num; ?></small></h6>
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
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 <?php echo $xml->content->person; ?></small>
                            </div>
                            <a class="h5 text-decoration-none" href=""><?php echo $xml->content->discover; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i><?php echo $xml->content->rate; ?><small><?php echo $xml->content->num; ?></small></h6>
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


    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"><?php echo $xml->content->mega; ?></h6>
                        <h1 class="text-white"><span class="text-primary"><?php echo $xml->content->off; ?></span> <?php echo $xml->content->the; ?></h1>
                    </div>
                    <p class="text-white"><?php echo $xml->content->enjoy; ?></p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i><?php echo $xml->content->pack; ?></li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i><?php echo $xml->content->confirm; ?></li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i><?php echo $xml->content->plan; ?></li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0"></h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Your name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" placeholder="Your email" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected></i><?php echo $xml->content->desti; ?></option>
                                        <option value="1"></i><?php echo $xml->content->desti1; ?></option>
                                        <option value="2"></i><?php echo $xml->content->desti2; ?></option>
                                        <option value="3"></i><?php echo $xml->content->desti3; ?></option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit"></i><?php echo $xml->content->sign; ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"><?php echo $xml->content->guides; ?></h6>
                <h1><?php echo $xml->content->travelguides; ?></h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate"><?php echo $xml->content->dar; ?></h5>
                            <p class="m-0"><?php echo $xml->content->design; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate"><?php echo $xml->content->dan; ?></h5>
                            <p class="m-0"><?php echo $xml->content->design; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate"><?php echo $xml->content->riz; ?></h5>
                            <p class="m-0"><?php echo $xml->content->design; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate"><?php echo $xml->content->bry; ?></h5>
                            <p class="m-0"><?php echo $xml->content->design; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"><?php echo $xml->content->testimonial; ?></h6>
                <h1><?php echo $xml->content->clients; ?></h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5"><?php echo $xml->content->comment1; ?>
                        </p>
                        <h5 class="text-truncate"><?php echo $xml->content->apple; ?></h5>
                        <span><?php echo $xml->content->profession1; ?></span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5"><?php echo $xml->content->comment2; ?>
                        </p>
                        <h5 class="text-truncate"><?php echo $xml->content->mic; ?></h5>
                        <span><?php echo $xml->content->profession2; ?></span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5"><?php echo $xml->content->comment3; ?>
                        </p>
                        <h5 class="text-truncate"><?php echo $xml->content->angie; ?></h5>
                        <span><?php echo $xml->content->profession3; ?></span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-4.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5"><?php echo $xml->content->comment4; ?>
                        </p>
                        <h5 class="text-truncate"><?php echo $xml->content->anne; ?></h5>
                        <span><?php echo $xml->content->profession4; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"><?php echo $xml->content->blog; ?></h6>
                <h1><?php echo $xml->content->latest; ?></h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1"><?php echo $xml->content->day; ?></h6>
                                <small class="text-white text-uppercase"><?php echo $xml->content->month1; ?></small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $xml->content->admin; ?></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $xml->content->tandt; ?></a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href=""><?php echo $xml->content->luzon; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/blog-2.jpg" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1"><?php echo $xml->content->day; ?></h6>
                                <small class="text-white text-uppercase"><?php echo $xml->content->month2; ?></small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $xml->content->admin; ?></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $xml->content->tandt; ?></a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href=""><?php echo $xml->content->paradise; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/blog-3.jpg" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1"><?php echo $xml->content->day; ?></h6>
                                <small class="text-white text-uppercase"><?php echo $xml->content->month3; ?></small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $xml->content->admin; ?></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $xml->content->tandt; ?></a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href=""><?php echo $xml->content->spectacular; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white"><?php echo $xml->content->footer->marindu; ?></span><?php echo $xml->content->footer->span; ?></h1>
                </a>
                <p><?php echo $xml->content->footer->marinduque ; ?></p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
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
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
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
        <div class="row">
            
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50"><a href="https://htmlcodex.com"></a>
                </p>
            </div>
        </div>
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