<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Electra - Electrical Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Edu+TAS+Beginner:wght@400..700&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="frontend/lib/animate/animate.min.css"/>
        <link href="{{asset("frontend/lib/owlcarousel/assets/owl.carousel.min.css")}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset("frontend/css/bootstrap.min.css")}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset("frontend/css/style.css")}}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        

        <!-- Navbar & Hero Start -->
        <div class="container-fluid header-top">
            <div class="container d-flex align-items-center">
                <div class="d-flex align-items-center h-100">
                    <a href="#" class="navbar-brand" style="height: 125px;">
                        <h1 class="text-primary mb-0"><i class="fas fa-bolt"></i> Electra</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                </div>
                <div class="w-100 h-100">
                    <div class="topbar px-0 py-2 d-none d-lg-block" style="height: 45px;">
                        <div class="row gx-0 align-items-center">
                            <div class="col-lg-8 text-center text-lg-center mb-lg-0">
                                <div class="d-flex flex-wrap">
                                    <div class="border-end border-primary pe-3">
                                        <a href="#" class="text-muted small"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                                    </div>
                                    <div class="ps-3">
                                        <a href="mailto:example@gmail.com" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>example@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center text-lg-end">
                                <div class="d-flex justify-content-end">
                                    <div class="d-flex border-end border-primary pe-3">
                                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                                        <a class="btn p-0 text-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="dropdown-toggle text-white" data-bs-toggle="dropdown"><small class="text-body"><i class="fas fa-globe-europe text-primary me-2"></i> English</small></a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">English</a>
                                            <a href="#" class="dropdown-item">Bangla</a>
                                            <a href="#" class="dropdown-item">French</a>
                                            <a href="#" class="dropdown-item">Spanish</a>
                                            <a href="#" class="dropdown-item">Arabic</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-bar px-0 py-lg-0" style="height: 80px;">
                        <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-lg-end">
                            <a href="#" class="navbar-brand-2">
                                <h1 class="text-primary mb-0"><i class="fas fa-bolt"></i> Electra</h1>
                                <!-- <img src="img/logo.png" alt="Logo"> -->
                            </a>  
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="fa fa-bars"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="navbar-nav mx-0 mx-lg-auto bg-white">
                                    <a href="index.html" class="nav-item nav-link active">Home</a>
                                    <a href="about.html" class="nav-item nav-link">About</a>
                                    <a href="service.html" class="nav-item nav-link">Service</a>
                                    <a href="blog.html" class="nav-item nav-link">Blog</a>
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                            <span class="dropdown-toggle">Pages</span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="project.html" class="dropdown-item">Our projects</a>
                                            <a href="team.html" class="dropdown-item">Our team</a>
                                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                            <a href="404.html" class="dropdown-item">404 Page</a>
                                        </div>
                                    </div>
                                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                                    <div class="nav-btn ps-3">
                                        <button class="btn-search btn btn-primary btn-md-square mt-2 mt-lg-0 mb-4 mb-lg-0 flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                                        <a href="#" class="btn btn-primary py-2 px-4 ms-0 ms-lg-3"> Get Solution</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

       <div>
            @yield('content')
       </div>

        <!-- Footer Start -->
        <div class="container-fluid footer bg-dark py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5 mb-5 align-items-center">
                    <div class="col-lg-7">
                        <div class="position-relative mx-auto">
                            <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Email address to Subscribe">
                            <button type="button" class="btn btn-primary position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                            <a class="btn btn-light btn-md-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-md-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-md-square me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-light btn-md-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h3 class="text-white mb-4"><i class="fas fa-bolt text-primary me-3"></i>Electra</h3>
                                <p class="mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="#"> Home</a>
                            <a href="#"> About us</a>
                            <a href="#"> Service</a>
                            <a href="#"> Testimonial</a>
                            <a href="#"> Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Electricity service</h4>
                            <a href="#"> Air Conditioning</a>
                            <a href="#"> Electrical Panels</a>
                            <a href="#"> Security System</a>
                            <a href="#"> Indoor Lighting</a>
                            <a href="#"> Electrical Services</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href="#"><i class="fa fa-map-marker-alt text-primary me-2"></i> 123 Street, New York, USA</a>
                            <a href="mailto:info@example.com"><i class="fas fa-envelope text-primary me-2"></i> info@example.com</a>
                            <a href="mailto:info@example.com"><i class="fas fa-envelope text-primary me-2"></i> info@example.com</a>
                            <a href="tel:+012 345 67890"><i class="fas fa-phone text-primary me-2"></i> +012 345 67890</a>
                            <a href="tel:+012 345 67890" class="mb-3"><i class="fas fa-print text-primary me-2"></i> +012 345 67890</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset("frontend/lib/wow/wow.min.js")}}"></script>
        <script src="{{asset("frontend/lib/easing/easing.min.js")}}"></script>
        <script src="{{asset("frontend/lib/waypoints/waypoints.min.js")}}"></script>
        <script src="{{asset("frontend/lib/owlcarousel/owl.carousel.min.js")}}"></script>
        

        <!-- Template Javascript -->
        <script src="frontend/js/main.js"></script>
    </body>

</html>