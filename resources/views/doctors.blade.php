<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

    <title>Document</title>
</head>

<body>
    <section class="doctor_section layout_padding" id="doctors-section">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>All Doctors</h2>
                <p class="col-md-10 mx-auto px-0">
                    Incilint sapiente illo quo praesentium officiis laudantium nostrum, ad adipisci cupiditate sit,
                    quisquam aliquid. Officiis laudantium fuga ad voluptas aspernatur error fugiat quos facilis saepe
                    quas fugit, beatae id quisquam.
                </p>
            </div>
            <section class="slider_section">
                <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="detail-box">
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
                                                    box-shadow: 0px 10px 38px 0px rgba(0, 0, 0, 0.1);
                                                }

                                                .btn {
                                                    border-radius: 50%;
                                                    align-items: center;
                                                    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                                                }

                                                .btn i {
                                                    color: white;
                                                }

                                                .btn:hover {
                                                    height: 40px;
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
                                                }

                                                .search_text:focus {
                                                    outline: none !important;
                                                }

                                                .text_and-icon {
                                                    width: 380px;
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .search_icon {
                                                    color: #5E6573;
                                                    transition: all .6s ease-in-out;
                                                }

                                                .search_text:focus+.search_icon {
                                                    color: #4451FE;
                                                    transform: translate(55px, 0);
                                                }
                                            </style>
                                            <div class="container search_box">
                                                <form action="{{ route('search') }}" method="GET">
                                                    <div class="search">
                                                        <div class="select_area">
                                                            <i class="fas fa-map-marker-alt map_icon"></i>
                                                            <select name="city" class="form-control ml-2">
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
                                                        <div class="text_and-icon">
                                                            <select name="specialty" class="form-control ml-2">
                                                                <option selected disabled>Select your specialty</option>
                                                                <option value="Cardiology">Cardiology</option>
                                                                <option value="Cardiothoracic surgery">Cardiothoracic
                                                                    surgery</option>
                                                                <option value="Child and adolescent psychiatry">Child
                                                                    and adolescent psychiatry</option>
                                                                <option value="Clinical neurophysiology">Clinical
                                                                    neurophysiology</option>
                                                                <option value="Colorectal surgery">Colorectal surgery
                                                                </option>
                                                                <option value="Dermatology">Dermatology</option>
                                                                <option value="Developmental pediatrics">Developmental
                                                                    pediatrics</option>
                                                                <option value="Emergency medicine">Emergency medicine
                                                                </option>
                                                                <option value="Endocrinology">Endocrinology</option>
                                                                <option value="Family Medicine">Family Medicine</option>
                                                                <option value="Forensic pathology">Forensic pathology
                                                                </option>
                                                                <option value="Forensic psychiatry">Forensic psychiatry
                                                                </option>
                                                                <option value="Gastroenterology">Gastroenterology
                                                                </option>
                                                                <option value="General surgery">General surgery</option>
                                                                <option value="General surgical oncology">General
                                                                    surgical oncology</option>
                                                                <option value="Geriatrics">Geriatrics</option>
                                                                <option value="Geriatric psychiatry">Geriatric
                                                                    psychiatry</option>
                                                                <option value="Gynecologic oncology">Gynecologic
                                                                    oncology</option>
                                                                <option value="Hematology">Hematology</option>
                                                                <option value="Hematologic pathology">Hematologic
                                                                    pathology</option>
                                                                <option value="Infectious disease">Infectious disease
                                                                </option>
                                                                <option value="Internal medicine">Internal medicine
                                                                </option>
                                                                <option value="Interventional radiology">Interventional
                                                                    radiology</option>
                                                                <option value="Maternal-fetal medicine">Maternal-fetal
                                                                    medicine</option>
                                                                <option value="Medical genetics">Medical genetics
                                                                </option>
                                                            </select>
                                                            <div class="btn-box ml-2" style="padding-bottom: 7%;">
                                                                <button type="submit" class="btn btn-primary d-flex">
                                                                    <i class="fas fa-search search_icon"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row">
                @foreach ($users as $user)
                    <div class="col-sm-6 col-lg-4">
                        <div class="box">
                            <div class="img-box">
                            <img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->name }}">
                            </div>
                            <div class="detail-box">
                                
                                <h5>{{ $user->name }}</h5>
                                <h6>{{ $user->special }}</h6>
                                <h6>{{ $user->city }}</h6>
                                <a href="{{ route('profile', $user->id) }}">Voir Profil</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

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
</body>

</html>
