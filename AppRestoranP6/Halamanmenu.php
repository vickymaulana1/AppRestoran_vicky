<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- mulai nav -->
    <nav class="navbar navbar-expand-lg bg-dark p-4 h3 pt-4 fixed-top">
        <div class="container-fluid ">
            <a class="navbar-brand text-light " href="#">AyamBertelur</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="pesan">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">MenuRecomand</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end nav -->
    <!-- gambar baner -->
    <div class="col">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../gambar/ayama.jpg" class="d-block w-100" style="width: 10000; height:1000px;">
                </div>
            </div>
        </div>
    </div>
    <!-- baner -->
    <hr>
    <!-- mulai isi -->
    <div class="container text-center">
        <div class="row p-3 mb-2 bg-dark-subtle text-dark-emphasis">
            <div class="col"></div>
            <div class="col">
                <h1><b>--Jagonya Ayam--</b></h1>
            </div>
            <div class="col"></div>
        </div>
        <!-- start arr -->
        <div class="row" style="justify-content: center;">
            <h1>Menu Recomand</h1>
            <?php
            $menupakets =
                [
                    [
                        'kode'          =>  'p1',
                        'nama_paket'    =>  'paket 1',
                        'gambar'        =>  '../gambar/Breakfast.jpg',
                        'link'          =>  'paket/paket1.php'
                    ],
                    [
                        'kode'          =>  'p2',
                        'nama_paket'    =>  'paket 2',
                        'gambar'        =>  '../gambar/Combo.jpg',
                        'link'          =>  'paket/paket2.php'
                    ],
                    [
                        'kode'          =>  'p3',
                        'nama_paket'    =>  'paket 3',
                        'gambar'        =>  '../gambar/Dessert.jpg',
                        'link'          =>  'paket/paket3.php'
                    ]
                ];
            foreach ($menupakets as $data) {
            ?>
                <div class="col mt-4 ms-4 shadow-sm p-3 mb-3 bg-body-tertiary rounded col-xl-3 col-md-6 col-sm-12 ">
                    <div class="card mb-3 ">
                        <img src="<?php echo  $data['gambar'] ?>" class="card-img-top p-2" alt="">
                        <a href="<?php echo $data['link'] ?>" class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2 text-dark" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25) ">Pesan Sekarang <?php echo $data['nama_paket'] ?>-></a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- end arr -->
        <hr>
        <div class="container text-center">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="1500">
                        <img src="../gambar/baner ayam.jpg" class="d-block w-10" style="width: 100%; height:500px;">
                    </div>
                    <div class=" carousel-item" data-bs-interval="10">
                        <img src="../gambar/ayama.jpg" class="d-block w-10" style="width: 100%; height:500px;">
                    </div>
                </div>
                <button class=" carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <hr>
        <!-- pesanan paket -->
        <div style="justify-content: center; " class="fs-1"><B>-----Menu Paket-----</B></div>

        <div class="row mt-4 " style="justify-content: center;">
            <!-- start arr Paket -->
            <?php
            $paketayam = [
                [
                    'gambar'    =>  '../gambar/Breakfast.jpg',
                    'paket'     =>  'paket/paket1.php'
                ],
                [
                    'gambar'    =>  '../gambar/Combo.jpg',
                    'paket'     =>  'paket/paket2.php'
                ],
                [
                    'gambar'    =>  '../gambar/Dessert.jpg',
                    'paket'     =>  'paket/paket3.php'
                ],
                [
                    'gambar'    =>  '../gambar/Drinks.jpg',
                    'paket'     =>  'paket/paket4.php'
                ],
                [
                    'gambar'    =>  '../gambar/Kids Meal.jpg',
                    'paket'     =>  'paket/paket5.php'
                ],
                [
                    'gambar'    =>  '../gambar/Spesial.jpg',
                    'paket'     =>  'paket/paket6.php'
                ],
            ];
            foreach ($paketayam as $paket) {
            ?>
                <div class="col mt-2 ms-5 shadow-sm p-3 mb-3 bg-body-tertiary rounded col-xl-3 col-md-6 col-sm-12 ">
                    <div class="card">
                        <img src="<?php echo  $paket['gambar'] ?>" class="card-img-top" alt="...">
                        <a href="<?php echo  $paket['paket'] ?>" class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2 text-dark" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25) ">Pesan Sekarang -></a>
                    </div>
                </div>
            <?php } ?>
            <!-- end arr -->
        </div>

    </div>
    </div>
    <!-- selesai isi -->

    <!-- Footer -->
    <footer class="bg-dark text-center text-lg-start text-muted text-light">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="text-light">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>AyamBertelur
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset text-light">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-light">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-light">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-light">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-light text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-light text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-light text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-light text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-light text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4 text-light" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold">vicky maulana</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>