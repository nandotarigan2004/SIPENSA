<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title id="pageTitle">-- SIPENSA - Sistem Pemesanan Sampel - PT.CENTURY MITRA SUKSES SEJATI</title>
    <script>
        var titleText = "-- SIPENSA - Sistem Pemesanan Sampel - PT.CENTURY MITRA SUKSES SEJATI";
        var speed = 300; // kecepatan pergerakan, semakin kecil semakin cepat
        function moveTitle() {
            titleText = titleText.substring(1) + titleText.charAt(0);
            document.title = titleText;
            setTimeout(moveTitle, speed);
        }
        moveTitle(); // panggil fungsi untuk mulai menjalankan teks
    </script>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib2/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib2/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css2/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css2/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jl. Raya Serang Km. 24 Kp. Tegal Murni, Rt.03/03 No. 138, Kel.Balaraja, Kec. Balaraja, Tangerang Banten 15610. </small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>021-596-3399</small>
                    <small class="text-light">
                        <i class="fa fa-linkedin me-2"></i>
                        <a href="https://www.linkedin.com/company/pt-century-mitra-sukses-sejati/?originalSubdomain=id" target="_blank" class="text-light">LinkedIn</a>
                    </small>

                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><img src="img/company-logo.png" alt="" width="150" height="100"></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#home" class="nav-item nav-link">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#product" class="nav-item nav-link">Product</a>
                    <a href="#visi-misi" class="nav-item nav-link">Visi Misi</a>
                    <a href="login.php" class="nav-item nav-link">Login</a>
                </div>
                <butaton type="text" class="btn textrimary ms-3" ><!--<i class="fa fa-search"></i></butaton>
                    <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a>-->
            </div>
        </nav>

        <div id="home" class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5" >
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">PT. Century Mitra Sukses Sejati</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Service Start -->
    <div id="about" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h1 class="fw-bold text-primary text-uppercase">About Us</h1>
                <h5 style="text-align: justify;"">  PT. Century Mitra Sukses Sejati (CMSS), berdiri pada tahun 2009 dan terletak di kawasan industri
                    tristate Tangerang Perusahaan ini bergerak dalam industri kemasan fleksibel yang terus berkembang.
                    CMSS telah melayani berbagai industri seperti makanan dan minuman serta produk konsumen
                    lainnya baik dalam dan luar negeri.</h5> 
                    
                    <h5 style="text-align: justify;"">  Dengan profesional berbakat disetiap bagiannya kami berupaya memberikan pelayanan kepada
                    pelanggan dalam pengembangan produk mulai dari desain, bentuk, komposisi bahan film hingga
                    hemat biaya.
                    CMSS berkomitmen dalam program kebijakan mutu dan keamanan pangan dalam upaya pencapaian
                    produk yang berkualitas dan aman digunakan untuk produk makanan, dengan tetap mempertahankan
                    waktu pengiriman dan harga yang kompetitif, sehingga kami yakin dan percaya kepuasan pelanggan
                    akan terwujud.</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="img/about1.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="img/about2.JPG" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="img/about3.JPG" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-primary text-uppercase">Our Products</h1>
                <h5 class="mb-0">Kami spesialis dibidang rotogravure printing dan flexible
                    packaging dengan produk multilayer dry lamination maupun extrusion lamination, dalam bentuk roll
                    film, bag, pouch, gusset dan zipper.</h5>
            </div>
            <div id="product" class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="img/products/gusset.jpg" alt="" style="width: 200px; height:200px;">
                        <h5 class="mb-3">GUSSET</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="img/products/3sideseal.jpg" alt="" style="width: 200px; height:200px;">
                        <h5 class="mb-3">THREE SIDE SEAL</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="img/products/centerseal.jpg" alt="" style="width: 200px; height:200px;">
                        <h5 class="mb-3">Center Seal</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="img/products/standing-pouch.jpg" alt="" style="width: 200px; height:200px;">
                        <h5 class="mb-3">Standing Pouch</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="img/products/roll.jpg" alt="" style="width: 200px; height:200px;">
                        <h5 class="mb-3">ROLL</h5>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Vendor Start -->
    <div id="visi-misi" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container" style="text-align:center;">
            <div class="col-sm-4 portfolio-item" style="display: inline-block; float: none;">
                <a href="#imageModal" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                        <h3>Visi Misi Perusahaan</h3>
                    </div>
            </div>
            <img src="img/Kebijakan mutu 2024_001.png" class="img-fluid" alt="Visi Misi" style="width: 100%; height: auto; object-fit: cover;"></a>
        </div>
    </div>

    
    <!-- Vendor End -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Get In Touch</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">Kawasan Industri, Jl. Tristate Jl. Raya Serang No.29, Sukadamai, Kec. Cikupa, Kabupaten Tangerang</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <small class="text-light">
                                <i class="fa fa-linkedin me-2"></i>
                                <a href="https://www.linkedin.com/company/pt-century-mitra-sukses-sejati/?originalSubdomain=id" target="_blank" class="text-light">LinkedIn</a>
                            </small>

                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">021-596-3399</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                           
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="link-animated d-flex flex-column justify-content-start">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">PT. CENTURY MITRA SUKSES SEJATI</a>. All Rights Reserved. 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib2/wow/wow.min.js"></script>
    <script src="lib2/easing/easing.min.js"></script>
    <script src="lib2/waypoints/waypoints.min.js"></script>
    <script src="lib2/counterup/counterup.min.js"></script>
    <script src="lib2/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>