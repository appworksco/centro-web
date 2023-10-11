<?php include realpath(__DIR__ . '/includes/layout/header.php') ?>
    
<style>
    body {
        opacity: 1;
        background-image: radial-gradient(#cdd9e7 1.05px, #e5e5f7 1.05px);
        background-size: 21px 21px;
    }
</style>

    <!-- Site Header Start -->
    <header id="site-header" class="bg-white">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="index" class="d-flex align-items-center text-dark text-decoration-none mb-3 mb-lg-0 me-lg-auto py-2">
                <img src="./dist/img/centro-logo.png" style="width: 300px;">
            </a> 
            <div class="col-12 col-lg-auto mb-3 mb-lg-0 d-block d-sm-flex align-items-center text-custom-dark">
                <div class="d-flex pe-5">
                    <i class="bi bi-phone fs-2 p-2"></i>
                    <div class="pt-1 m-1">
                        <p class="m-0">Call Us At:</p>
                        <p class="fw-bold m-0">09176346988</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="bi bi-envelope fs-2 p-2"></i>
                    <div class="pt-1 m-1">
                        <p class="m-0">Email Us At:</p>
                        <p class="fw-bold m-0">centrocommunitymall@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-red-orange">
            <div class="container p-0">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav text-uppercase mt-3 mt-sm-0">
                                <li class="nav-item me-4">
                                    <a class="nav-link px-4 px-sm-3 active" aria-current="page" href="index">Home</a>
                                </li>
                                <li class="nav-item me-4">
                                    <a class="nav-link px-4 px-sm-3" href="#">About</a>
                                </li>
                                <li class="nav-item me-4">
                                    <a class="nav-link px-4 px-sm-3" href="#">Events</a>
                                </li>
                                <li class="nav-item me-4">
                                    <a class="nav-link px-4 px-sm-3" href="#">Careers</a>
                                </li>
                                <li class="nav-item me-4">
                                    <a class="nav-link px-4 px-sm-3" href="#">Gallery</a>
                                </li>
                                <li class="nav-item me-4">
                                    <a class="nav-link px-4 px-sm-3" href="#">Contacts</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Site Header End -->

    <!-- Site Hero Start -->
    <div id="site-hero">
		<div class="container-fluid p-0">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./dist/img/hero.jpg" class="d-block w-100" alt="Hero">
                    </div>
                    <div class="carousel-item">
                        <img src="./dist/img/hero.jpg" class="d-block w-100" alt="Hero">
                    </div>
                    <div class="carousel-item">
                        <img src="./dist/img/hero.jpg" class="d-block w-100" alt="Hero">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
		</div>
	</div>
    <!-- Site Hero End -->

    <div style="overflow: hidden;">
		<div class="container py-5">
			<div class="row py-sm-5 d-flex align-items-center justify-content-center">
				<div class="col-md-6 d-flex justify-content-center">
					<img src="images/image-1.webp" class="w-100 ms-3 ms-sm-0 py-5">
				</div>
				<div class="col-md-6">
					<h3 class="py-3">Why Choose Centro?</h3>
					<p>Centro is not just a place to shop; it's a destination where you can explore, discover, and find everything you need to enhance your lifestyle. Whether you're a fashion enthusiast, a tech-savvy individual, or someone with an eye for home decor, we have something for everyone.</p>
					<a href="about" class="btn bg-red-orange text-white text-uppercase">Read More</a>
				</div>
			</div>
		</div>
	</div>

    <!-- Site Departments Start -->
    <div id="site-departments" class="bg-light">
        <div class="container py-5">
            <div class="owl-carousel owl-theme">
                <!-- Autoparts -->
                <div class="card">
                    <div class="card-body">
                        <!-- Add Picture -->
                    </div>
                    <div class="card-footer bg-red-orange">
                        <p class="text-uppercase text-light text-center fw-bold m-0">Autoparts</p>
                    </div>
                </div>
                <!-- Bakery -->
                <div class="card">
                    <div class="card-body">
                        <!-- Add Picture -->
                    </div>
                    <div class="card-footer bg-red-orange">
                        <p class="text-uppercase text-light text-center fw-bold m-0">Bakery</p>
                    </div>
                </div>
                <!-- Department Store -->
                <div class="card">
                    <div class="card-body">
                        <!-- Add Picture -->
                    </div>
                    <div class="card-footer bg-red-orange">
                        <p class="text-uppercase text-light text-center fw-bold m-0">Department Store</p>
                    </div>
                </div>
                <!-- Fresh & Frozen -->
                <div class="card">
                    <div class="card-body">
                        <!-- Add Picture -->
                    </div>
                    <div class="card-footer bg-red-orange">
                        <p class="text-uppercase text-light text-center fw-bold m-0">Fresh & Frozen</p>
                    </div>
                </div>
                <!-- Hardware -->
                <div class="card">
                    <div class="card-body">
                        <!-- Add Picture -->
                    </div>
                    <div class="card-footer bg-red-orange">
                        <p class="text-uppercase text-light text-center fw-bold m-0">Hardware</p>
                    </div>
                </div>
                <!-- Supermarket -->
                <div class="card">
                    <div class="card-body">
                        <!-- Add Picture -->
                    </div>
                    <div class="card-footer bg-red-orange">
                        <p class="text-uppercase text-light text-center fw-bold m-0">Supermarket</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Departments End -->

    <!-- Site Tenants Start -->
    <div id="site-tenants">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3">
                    <img src="./dist/img/watsons-logo.png" class="w-100" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Site Tenants End -->

<?php include realpath(__DIR__ . '/includes/layout/footer.php') ?>