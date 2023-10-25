    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script>
        $('.hero-carousel').owlCarousel({
            items: 1,
            dots: false,
        })
        $('.owl-carousel').owlCarousel({
            margin: 10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:false
                }
            }
        })
    </script>
</body>
</html>