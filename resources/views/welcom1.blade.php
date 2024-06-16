<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">

    <title> Orthoc </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('welcome/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="{{ asset('welcome/css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('welcome/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('welcome/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>

    <div class="hero_area">

        <div class="hero_bg_box">
            <img src="images/hero-bg.png" alt="">
        </div>

        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            DocFinder
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('home') }}">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about-section"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#departments-section">Departments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doctors-section">Doctors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact-section">Contact Us</a>
                            </li>
                            @if (Route::has('login'))

                                @auth
                                    <li class="nav-item">
                                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                                        </li>
                                    @endif
                                @endauth

                            @endif

                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="detail-box">
                                        <h1>
                                            Make an appointment with your doctor now
                                            Your doctor is now in your hands
                                        </h1>
                                        {{-- sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss --}}
                                        <script src="https://kit.fontawesome.com/9b8a7e18a0.js"></script>
                                        <style>
                                            .search_box {
                                                padding-top: 200px;
                                            }

                                            .search {
                                                padding-left: 25px;
                                                display: flex;
                                                align-items: center;
                                                margin: auto;
                                                width: 612px;
                                                height: 54px;
                                                background-color: white;
                                                border-radius: 25px;
                                                -webkit-box-shadow: 0px 10px 38px 0px rgba(0, 0, 0, 0.1);
                                                -moz-box-shadow: 0px 10px 38px 0px rgba(0, 0, 0, 0.1);
                                                box-shadow: 0px 10px 38px 0px rgba(0, 0, 0, 0.1);
                                                } 
                                                .btn{
                                                    border-radius: 50%;
                                                    align-items: center;
                                                    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                                                
                                                }
                                                .btn i{ 
                                                    color: white;
                                                }
                                                .btn:hover{
                                                    height:40px;

                                                }
                                                .select_area {
                                                color: #4451FE;
                                                display: flex;
                                                align-items: center;
                                                font-family: 'Roboto', sans-serif;
                                                line-height: 24px;
                                                font-weight: medium;
                                            }

                                            .text {
                                                padding-left: 15px;
                                            }

                                            .line {
                                                margin-left: 15px;
                                                border-left: 1px solid #D8D8D8;
                                                height: 40px;
                                            }

                                            .search_text {
                                                width: 100%;
                                                border: none;
                                                margin-left: 15px;
                                                font-size: 16px;
                                                font-family: 'Roboto', sans-serif;
                                                line-height: 24px;
                                                font-weight: Regular;
                                                place
                                            }

                                            ::-webkit-input-placeholder {
                                                /* Chrome/Opera/Safari */
                                                color: #ADB1B8;
                                            }


                                            .text_and-icon {
                                                width: 380px;
                                                display: flex;
                                                align-items: center;
                                            }

                                            .search_icon {
                                                color: #5E6573;
                                                transition: all .6s ease-in-out;
                                                -webkit-transition: all .6s ease-in-out;
                                                /** Chrome & Safari **/
                                                -moz-transition: all .6s ease-in-out;
                                                /** Firefox **/
                                                -o-transition: all .6s ease-in-out;
                                                /** Opera **/
                                            }

                                            .search_text:focus {
                                                outline: none !important;
                                            }

                                            .search_text:focus+.search_icon {
                                                color: #4451FE;
                                                transform: translate(55px, 0);
                                                -webkit-transform: translate(55px, 0);
                                                -o-transform: translate(55px, 0);
                                                -moz-transform: translate(55px);
                                            }
                                        </style>



                                        <div class="container search_box">
                                            <div class="search">
                                                <div class="select_area">
                                                    <i class="fas fa-map-marker-alt map_icon"></i>
                                                    <select class="form-control ml-2">
                                                        <option selected disabled>Select city</option>
                                                        <option value="Casablanca">Casablanca</option>
                                                        <option value="Fès">Fès</option>
                                                        <option value="Tanger">Tanger</option>
                                                        <option value="Marrakesh">Marrakesh</option>
                                                        <option value="Salé">Salé</option>
                                                        <option value="Meknes">Meknes</option>
                                                        <option value="Rabat">Rabat</option>
                                                        <option value="Téméra">Téméra</option>
                                                        <option value="Agadir">Agadir</option>
                                                        <option value="Oujda">Oujda</option>
                                                        <option value="Tétouan">Tétouan</option>
                                                        <option value="Safi">Safi</option>
                                                        <option value="Berkane">Berkane</option>
                                                        <option value="Taza">Taza</option>
                                                        <option value="Nador">Nador</option>
                                                        <option value="Khémisset">Khémisset</option>
                                                        <option value="Béni Mellal">Béni Mellal</option>
                                                        <option value="Khouribga">Khouribga</option>
                                                        <option value="El Jadida">El Jadida</option>
                                                        <option value="Zemmamra">Zemmamra</option>
                                                        <option value="Sidibanour">Sidibanour</option>
                                                        <option value="Mohammédia">Mohammédia</option>
                                                        <option value="Laayoune">Laayoune</option>
                                                        <option value="Oujda">Oujda</option>
                                                        <option value="Bengrir">Bengrir</option>

                                                    </select>
                                                </div>
                                                <div class="line"></div>

                                                <div class = "text_and-icon" >
                                                    <select class="form-control ml-2">
                                                        <option selected disabled>Select your specialty</option>
                                                        <option value="Cardiology">Cardiology</option>
                                                        <option value="Cardiothoracic surgery">Cardiothoracic surgery
                                                        </option>
                                                        <option value="Child and adolescent psychiatry">Child and
                                                            adolescent psychiatry</option>
                                                        <option value="Clinical neurophysiology">Clinical
                                                            neurophysiology</option>
                                                        <option value="Colorectal surgery">Colorectal surgery</option>
                                                        <option value="Dermatology">Dermatology</option>
                                                        <option value="Developmental pediatrics">Developmental
                                                            pediatrics</option>
                                                        <option value="Emergency medicine">Emergency medicine</option>
                                                        <option value="Endocrinology">Endocrinology</option>
                                                        <option value="Family Medicine">Family Medicine</option>
                                                        <option value="Forensic pathology">Forensic pathology</option>
                                                        <option value="Forensic psychiatry">Forensic psychiatry
                                                        </option>
                                                        <option value="Gastroenterology">Gastroenterology</option>
                                                        <option value="General surgery">General surgery</option>
                                                        <option value="General surgical oncology">General surgical
                                                            oncology</option>
                                                        <option value="Geriatrics">Geriatrics</option>
                                                        <option value="Geriatric psychiatry">Geriatric psychiatry
                                                        </option>
                                                        <option value="Gynecologic oncology">Gynecologic oncology
                                                        </option>
                                                        <option value="Hematology">Hematology</option>
                                                        <option value="Hematologic pathology">Hematologic pathology
                                                        </option>
                                                        <option value="Infectious disease">Infectious disease</option>
                                                        <option value="Internal medicine">Internal medicine</option>
                                                        <option value="Interventional radiology">Interventional
                                                            radiology</option>
                                                        <option value="Maternal-fetal medicine">Maternal-fetal medicine
                                                        </option>
                                                        <option value="Medical genetics">Medical genetics</option>
                                                    </select>
                                                    <div class="btn-box ml-2 " style="padding-bottom: 7%; ">
                                                        <form action="/search" method="GET">
                                                            <button type="submit" class="btn btn-primary d-flex">
                                                                <i class="fas fa-search search_icon"></i>
                                                            </button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        


                                        {{-- sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss --}}

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- end slider section -->
    </div>


    <!-- department section -->

    <section class="department_section layout_padding" id="departments-section">
        <div class="department_container">
            <div class="container ">
                <div class="heading_container heading_center">
                    <h2>
                        Our Departments
                    </h2>
                    <p>
                        Asperiores sunt consectetur impedit nulla molestiae delectus repellat laborum dolores doloremque
                        accusantium
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s1.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Doctor
                                </h5>
                                <p>
                                    Find a doctor using your location and appropriate specialty.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s2.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    The Choice
                                </h5>
                                <p>
                                    From the list of doctors, choose the doctor that suits you
                                    Read the information your doctor gives you.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s3.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    reservation
                                </h5>
                                <p>
                                    Fill out the form and book your appointment.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s4.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Important
                                </h5>
                                <p>
                                    Keep the reservation sheet and stick to the appointment to protect your health.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <video autoplay loop muted>
                        <source src="videos/home.mp4" type="video/mp4">
                        Votre navigateur ne prend pas en charge la lecture de vidéos.
                    </video>
                </div>

            </div>
        </div>
    </section>

    <!-- end department section -->

    <!-- about section -->

    <section class="about_section layout_margin-bottom" id="about-section">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="images/about-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About <span>Us</span>
                            </h2>
                        </div>
                        <p>
                            Welcome to DOCFINDER, your trusted source for finding quality healthcare professionals near
                            you. We understand that finding the right doctor can be a daunting task, which is why we've
                            created a platform to make the process easy, efficient, and stress-free.
                            <br>
                            At DOCFINDER, we're passionate about connecting individuals with the healthcare providers
                            they need to live healthier, happier lives. Whether you're looking for a primary care
                            physician, a specialist, or a healthcare facility, our comprehensive database has you
                            covered.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- doctor section -->

    <section class="doctor_section layout_padding" id="doctors-section">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our Doctors
                </h2>
                <p class="col-md-10 mx-auto px-0">
                    Incilint sapiente illo quo praesentium officiis laudantium nostrum, ad adipisci cupiditate sit,
                    quisquam aliquid. Officiis laudantium fuga ad voluptas aspernatur error fugiat quos facilis saepe
                    quas fugit, beatae id quisquam.
                </p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/d1.jpg" alt="">
                        </div>
                        <div class="detail-box">
                            <div class="social_box">
                                <a href="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <h5>
                                Elina Josh
                            </h5>
                            <h6 class="">
                                Doctor
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/d2.jpg" alt="">
                        </div>
                        <div class="detail-box">
                            <div class="social_box">
                                <a href="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <h5>
                                Adam View
                            </h5>
                            <h6 class="">
                                Doctor
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/d3.jpg" alt="">
                        </div>
                        <div class="detail-box">
                            <div class="social_box">
                                <a href="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <h5>
                                Mia Mike
                            </h5>
                            <h6 class="">
                                Doctor
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="{{ route('serch') }}">
                    View All
                </a>
            </div>
        </div>
    </section>

    <!-- end doctor section -->

    <!-- contact section -->
    <section class="contact_section layout_padding" id="contact-section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    contact
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container contact-form">
                        <form action="{{ route('contacts.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div>
                                        <input type="text" name="name" placeholder="Your Name" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <input type="text" name="phone" placeholder="Phone Number" required />
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Email" required />
                            </div>
                            <div>
                                <input type="text" name="message" class="message-box" placeholder="Message"
                                    required />
                            </div>
                            <div class="btn_box">
                                <button type="submit">
                                    SEND
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->

    <!-- client section -->

    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center ">
                <h2>
                    the most wanted
                </h2>
            </div>
            <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-11 col-lg-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/client.jpg" alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <div class="name">
                                            <h6>
                                                MOHAMMED
                                            </h6>
                                        </div>
                                        <p>
                                            A doctor specializing in digestion
                                        </p>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-11 col-lg-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/client.jpg" alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <div class="name">
                                            <h6>
                                                YOUSSEF
                                            </h6>
                                        </div>
                                        <p>
                                            A doctor specializing in psychology
                                        </p>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-11 col-lg-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/client.jpg" alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <div class="name">
                                            <h6>
                                                SARA
                                            </h6>
                                        </div>
                                        <p>
                                            A doctor specializing in sports.
                                        </p>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-container">
                    <a class="carousel-control-prev" href="#carouselExample2Controls" role="button"
                        data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample2Controls" role="button"
                        data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 footer_col">
                    <div class="footer_contact">
                        <h4>
                            Reach at..
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +121 798563427
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    docfinder@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="footer_social">
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer_col">
                    <div class="footer_detail">
                        <h4>
                            About
                        </h4>
                        <p>
                            Welcome to DOCFINDER, your trusted source for finding quality healthcare professionals near
                            you. We understand that finding the right doctor can be a daunting task, which is why we've
                            created a platform to make the process easy, efficient, and stress-free..
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mx-auto footer_col">
                    <div class="footer_link_box">
                        <h4>
                            Links
                        </h4>
                        <div class="footer_links">
                            <a class="active" href="{{ route('home') }}">
                                Home
                            </a>
                            <a class="" href="#about-section">
                                About
                            </a>
                            <a class="" href="#departments-section">
                                Departments
                            </a>
                            <a class="" href="#doctors-section">
                                Doctors
                            </a>
                            <a class="" href="#contact-section">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer_col ">
                    <h4>
                        Newsletter
                    </h4>
                    <form action="#">
                        <input type="email" placeholder="Enter email" />
                        <button type="submit">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> DOCFINDER All Rights Reserved
                    <br>
                    &copy; <span id="displayYear"></span> By
                    <a href="https://www.linkedin.com/in/mohammed-hammouga-94b529261/">MOHAMMED HAMMOUGA</a>
                </p>

            </div>
            <div class="visme_d" data-title="Untitled Project" data-url="8r6m1e9q-untitled-project?fullPage=true"
                data-domain="forms" data-full-page="true" data-min-height="100vh" data-form-id="71057"></div>
            <script src="https://static-bundles.visme.co/forms/vismeforms-embed.js"></script>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script type="text/javascript" src="{{ asset('welcome/js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="{{ asset('welcome/js/bootstrap.js') }}"></script>
    <!-- owl slider -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('welcome/js/custom.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>
