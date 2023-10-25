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
        <div class="bg-solid-orange">
            <div class="container p-0">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav text-uppercase mt-3 mt-sm-0">
                                <li class="nav-item me-4">
                                    <a class="nav-link px-4 px-sm-3 active" href="index">Home</a>
                                </li>
                                <li class="nav-item me-4">
                                    <a class="nav-link px-4 px-sm-3" href="about">About</a>
                                </li>
                                <li class="nav-item me-4">
                                    <a class="nav-link px-4 px-sm-3" href="events">Events</a>
                                </li>
                                <li class="nav-item me-4">
                                    <a class="nav-link px-4 px-sm-3" href="careers">Careers</a>
                                </li>
                                <li class="nav-item me-4">
                                    <a class="nav-link px-4 px-sm-3" href="gallery">Gallery</a>
                                </li>
                                <li class="nav-item me-4">
                                    <a class="nav-link px-4 px-sm-3" href="contacts">Contacts</a>
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
        <div class="container">
            <div class="col-12">
                <h1 class="display-4 text-light text-uppercase">A mall inspired by you.</h1>
            </div>
        </div>
	</div>
    <!-- Site Hero End -->

    <div style="overflow: hidden;">
		<div class="container py-3">
			<div class="row py-sm-5 d-flex align-items-center justify-content-center">
				<div class="col-md-6 d-flex justify-content-center">
					<img src="./dist/img/img-1.jpg" class="w-100 py-5">
				</div>
				<div class="col-md-6 pb-5">
					<h3 class="py-3">Why Choose Centro?</h3>
					<p>Centro is not just a place to shop; it's a destination where you can explore, discover, and find everything you need to enhance your lifestyle. Whether you're a fashion enthusiast, a tech-savvy individual, or someone with an eye for home decor, we have something for everyone.</p>
					<a href="about" class="btn bg-solid-orange text-white text-uppercase">Read More</a>
				</div>
			</div>
		</div>
	</div>

    <!-- Site Departments Start -->
    <div id="site-departments" class="bg-light">
        <div class="container py-5">
            <h3 class="text-center py-4">Departments</h3>
            <div class="owl-carousel owl-theme">
                <!-- Autoparts -->
                <div class="card">
                    <div class="card-body p-0">
                        <img src="./dist/img/autoparts.jpg" alt="">
                    </div>
                    <div class="card-footer bg-solid-orange">
                        <p class="text-uppercase text-light text-center fw-bold m-0">Autoparts</p>
                    </div>
                </div>
                <!-- Bakery -->
                <div class="card">
                    <div class="card-body p-0">
                        <img src="./dist/img/bakery.jpg" alt="">
                    </div>
                    <div class="card-footer bg-solid-orange">
                        <p class="text-uppercase text-light text-center fw-bold m-0">Bakery</p>
                    </div>
                </div>
                <!-- Department Store -->
                <div class="card">
                    <div class="card-body p-0">
                        <img src="./dist/img/department-store.jpg" alt="">
                    </div>
                    <div class="card-footer bg-solid-orange">
                        <p class="text-uppercase text-light text-center fw-bold m-0">Department Store</p>
                    </div>
                </div>
                <!-- Fresh & Frozen -->
                <div class="card">
                    <div class="card-body p-0">
                        <img src="./dist/img/fresh-frozen.jpg" alt="">
                    </div>
                    <div class="card-footer bg-solid-orange">
                        <p class="text-uppercase text-light text-center fw-bold m-0">Fresh & Frozen</p>
                    </div>
                </div>
                <!-- Hardware -->
                <div class="card">
                    <div class="card-body p-0">
                        <img src="./dist/img/hardware.jpg" alt="">
                    </div>
                    <div class="card-footer bg-solid-orange">
                        <p class="text-uppercase text-light text-center fw-bold m-0">Hardware</p>
                    </div>
                </div>
                <!-- Supermarket -->
                <div class="card">
                    <div class="card-body p-0">
                        <img src="./dist/img/supermarket.jpg" alt="">
                    </div>
                    <div class="card-footer bg-solid-orange">
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
                <h3 class="text-center py-4">Tenants</h3>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/watsons-logo.png" style="width: 80%">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/dunkin-donuts-logo.png" style="width: 80%">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/santinos-logo.png" style="width: 80%">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/potato-corner-logo.png" style="width: 80%">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/kokkorokkok-logo.png" style="width: 80%">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/master-siomai-logo.png" style="width: 80%">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/gitagum-logo.png" style="width: 80%">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/waffle-time-logo.png" style="width: 80%">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/tagoros-abuhan-logo.png" style="width: 80%">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/set-1-logo.png" style="width: 80%">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/set-2-logo.png" style="width: 80%">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/penshoppe-logo.png" style="width: 80%">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/set-3-logo.png" style="width: 80%">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/rejoice-logo.png" style="width: 80%">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/elyn-fashion-accessories-logo.png" style="width: 80%">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
                    <img src="./dist/img/set-4-logo.png" style="width: 80%">
                </div>
            </div>
        </div>
    </div>
    <!-- Site Tenants End -->

    <!-- Site Map Start -->
    <div id="site-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2770053669583!2d125.00057427414106!3d7.760419107556693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ff3b7af6931525%3A0x351de54d2a6ae41f!2sCENTRO!5e0!3m2!1sen!2sph!4v1697100571962!5m2!1sen!2sph" class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Site Map End -->

    <!-- Site Footer Start -->
    <div id="site-footer" class="bg-solid-orange">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h3 class="text-light">Our Mission</h3>
                    <p class="text-light text-justify">Improve the quality of life of the people we serve through businesses anchored on excellent industry practices, sound risk management, and the commitment to exceed stakeholders' expectations.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h3 class="text-light">Our Vision</h3>
                    <p class="text-light">To establish and synergize sustainable businesses that serve our stakeholders</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h3 class="text-light">Links</h3>
                    <a href="index" class="text-decoration-none text-light">&bullet; Home</a> <br>
                    <a href="about" class="text-decoration-none text-light">&bullet; About</a> <br>
                    <a href="events" class="text-decoration-none text-light">&bullet; Events</a> <br>
                    <a href="careers" class="text-decoration-none text-light">&bullet; Careers</a> <br>
                    <a href="gallery" class="text-decoration-none text-light">&bullet; Gallery</a> <br>
                    <a href="contacts" class="text-decoration-none text-light">&bullet; Contacts</a>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer" class="bg-grey-brown">
        <div class="container py-3">
            <p class="text-light m-0">Copyright &copy; 2023 Centro. All Rights Reserved.</p>
            <small class="text-light">Developed By: ICT Department</small>
        </div>
    </div>
    <!-- Site Footer End -->

<?php include realpath(__DIR__ . '/includes/layout/footer.php') ?>