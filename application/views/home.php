<?php include 'includes/header.inc'; ?>
<body>

    <!-- Header area wrapper starts -->
    <!-- Line added as test file -->
    
    <header id="header-wrap"> 
        <?php
        
    $username = $this->session->userdata('username');

        if (empty($username)) {
            
            // user not logged in so,
            include 'includes/annonymousMenu.inc';
            
        } else {
            // user is logged in so
            include 'includes/memberMenu.inc';
        }
            ?>
        
    </header>  
    <!-- Nav Menu and logo area ends -->

    <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide" data-interval="3000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-slider" data-slide-to="0" class="active">
                </li>
                <li data-target="#carousel-slider" data-slide-to="1">
                </li>
                <li data-target="#carousel-slider" data-slide-to="2">
                </li>
            </ol>
            <div class="carousel-inner">
                <!-- Carousel Items Strarts-->
                <div class="item active" style="background-image: url(assets/img/slider/.jpg);">
                    <div class="carousel-caption">
                        <h2>
                            Cheap Bus and Coach Tickets 
                        </h2>
                        <h3>
                            Whether you're looking for a weekend of sightseeing in London or a shopping spree in Newcastle, you can rely on Megabus for great comfort and low prices.
                        </h3>
                        <a class="btn btn-lg btn-common" href="i#">
                            <i class="fa fa-check">
                            </i>
                            Book Now
                        </a>
                    </div>
                </div>
                <div class="item" style="background-image: url(assets/img/slider/hotel.jpg);">
                    <div class="carousel-caption">
                        <h2>
                            Book Popular Hotel 
                        </h2>
                        <h3>
                            choose from 398 properties
                        </h3>
                        <a class="btn btn-common btn-lg " href="index.html#">
                           
                            Search Now
                        </a>
                    </div>
                </div>
                <div class="item" style="background-image: ">
                    <div class="carousel-caption">
                        <h2>
                            cargo service
                        </h2>
                        <h3>
                           By using our couriers, rather than the standard postal service, you can benefit from a better price and service, and you’ll also be able to monitor the progress of your delivery. 
                        </h3>
                        <a class="btn btn-lg btn-common" href="#">
                            
                            Track your consignment
                        </a>
                        <a class="btn btn-common btn-lg" href="#">
                            
                            Price list
                        </a>
                    </div>
                </div>
            </div><!-- Carousel Item Ends -->
            <a class="left carousel-control" href="index.html#carousel-slider" role="button" data-slide="prev">
                <i class="fa fa-chevron-left">
                </i>
            </a>
            <a class="right carousel-control" href="index.html#carousel-slider" role="button" data-slide="next">
                <i class="fa fa-chevron-right">
                </i>
            </a>
        </div>
    </div>
</section><!-- Main Slider Section End-->      
</header>
<!-- Header-wrap Section End -->



<!-- Our Services Section -->
<section id="other-services">
    <div class="container">
        <!-- Container Starts -->
        <h1 class="section-title wow fadeInUp">
            Our Services
        </h1>
        <div class="row">

            <!-- Other Service Item Wrapper Starts -->
            <div class="col-sm-6 col-md-6">
                <article class="other-service-item wow fadeInUp" data-wow-delay=".5s">
                    <div class="icon">
                        <i class="icon-Palette icon-medium"></i>
                    </div>              
                    <div class="service-content">
                        <h3><a href="#" target="_blank">Book Your Ticket Online</a></h3>
                        <p>
                            Guaranteed seat, The majority of our coaches are fitted with leather seats, toilets, power sockets and air conditioning
                            Services, Run throughout the day and night
                        </p>
                    </div>
                </article>
                <article class="other-service-item wow fadeInUp" data-wow-delay=".8s">
                    <div class="icon">
                        <i class="icon-Eyeunhide icon-medium"></i>
                    </div>
                    <div class="service-content">
                        <h3><a href="#" target="_blank">courier service</a></h3>
                        <p>
                            Get instant quotes & compare from a range of courier delivery services.Our system makes booking your delivery a breeze.
                        </p>
                    </div>
                </article>
                <article class="other-service-item no-gap-bottom  wow fadeInUp" data-wow-delay="1.2s">
                    <div class="icon">
                        <i class="icon-Paintbucket icon-medium"></i>
                    </div>
                    <div class="service-content">
                        <h3><a href="#" target="_blank">Track Your Cargo consignment</a></h3>
                        <p>
                           You can track your parcel delivery and find your item's current whereabouts with the quick and simple Btrs tracking tool.
                        </p>
                    </div>
                </article>
            </div><!-- Other Service Item Wrapper Ends -->

            <!-- Other Service Image -->
            <div class="col-sm-6 com-md-6 wow fadeInRightQuick" data-wow-delay=".2s">
                <img src="<?php echo $root; ?>assets/img/about/buss.png" class="img-responsive" alt="">
            </div><!-- Other Service Image Ends-->

        </div>
    </div><!-- Container Ends -->
</section>
<!-- Other Services Section End -->    

<!-- Progress Section -->

<!-- Progress Inner Starts -->


<!-- Row Starts -->


<!-- Pricing Table  End -->    

<!-- Cool Facts Section -->
<section style="background-image:url('<?php echo $root; ?>assets/img/about/bus19.jpg'); background-width:100% 100%;" id="cool-facts" data-0="background-position:0px -200px;" data-10000="background-position:0px 2000;">
    <!-- Container Starts -->
    <div class="container">
        <h1 class="section-title wow fadeInUpQuick">
            Some Cool Facts
        </h1>
        <!-- Row Starts -->
        <div class="row">
            <div class="col-md-4">
                <!-- Fact Block Starts -->
                <div class="fact-block clearfix wow fadeInUp" data-wow-delay=".3s">
                    <div class="fact-count text-center">
                        <i class="">
                        </i>
                        <h3>
                            <span class="counter">
                                478
                            </span>
                        </h3>
                        <h4>
                            Buses
                        </h4>
                    </div>
                </div><!-- Fact Block Ends -->
            </div>
            <div class="col-md-4">
                <!-- Fact Block Starts -->
                <div class="fact-block clearfix wow fadeInUp" data-wow-delay=".8s">
                    <div class="fact-count text-center">
                        <i class="">
                        </i>
                        <h3>
                            <span class="counter">
                                900
                            </span>
                        </h3>
                        <h4>
                            Routes
                        </h4>
                    </div>
                </div><!-- Fact Block Ends -->
            </div>
            <div class="col-md-4">
                <!-- Fact Block Starts -->
                <div class="fact-block clearfix wow fadeInUp" data-wow-delay="1.1s">
                    <div class="fact-count text-center">
                        <i class="">
                        </i>
                        <h3>
                            <span class="counter">
                                398
                            </span>
                        </h3>
                        <h4>
                            Hotels Available
                        </h4>
                    </div>
                </div><!-- Fact Block Ends -->
            </div>
        </div><!-- Row Ends -->
    </div><!-- Container Ends -->
</section>
<!-- Cool Facts Section End -->

<!-- Clients Section -->
<section id="clients" >
    <!-- Container Ends -->
    <div class="container">
        <h1 class="section-title wow fadeInUpQuick" data-wow-delay=".5s">
            Clients
        </h1>
        <div class="wow fadeInUpQuick" data-wow-delay=".9s">
            <!-- Row and Scroller Wrapper Starts -->
            <div class="row" id="clients-scroller">
                <div class="client-item-wrapper">
                    <img src="assets/img/clients/img1.png" alt="">
                </div>
                <div class="client-item-wrapper">
                    <img src="assets/img/clients/img2.png" alt="">
                </div>
                <div class="client-item-wrapper">
                    <img src="assets/img/clients/img3.png" alt="">
                </div>
                <div class="client-item-wrapper">
                    <img src="assets/img/clients/img4.png" alt="">
                </div>
                <div class="client-item-wrapper">
                    <img src="assets/img/clients/img5.png" alt="">
                </div>
                <div class="client-item-wrapper">
                    <img src="assets/img/clients/img6.png" alt="">
                </div>
            </div><!-- Row and Scroller Wrapper Starts -->
        </div>
    </div><!-- Container Ends -->
</section>
<!-- Client Section End -->

<!-- Testimonial Section -->
<section id="testimonial" style="background-color:black ">
    <!-- Carousel Inner Starts -->
    <div class="testimonial-inner">
        <!-- Container Starts -->
        <div class="container">
            <!-- Row Starts -->
            <div class='row'>
                <div class="carousel slide" data-ride="carousel" id="testimonial-carousel">
                    <!-- Carousel Items / Quotes -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <blockquote>
                                <div class="col-sm-3 text-center animated zoomIn">
                                    <img class="img-circle" src="assets/img/testimonial/img1.jpg" alt="">
                                </div>
                                <div class="col-sm-9 animated delay-0-5 fadeInUp">
                                    <p>
                                        <i class="fa fa-quote-left fa-2x">
                                        </i>
                                        Wow, never knew booking bus ticket was so easy via, @btrs...  
                                    </p>
                                    <small>
                                        <span class="name">
                                            <i class="fa fa-user">
                                            </i>
                                            Robert L. Cathcart 
                                        </span>
                                        <span class="company">
                                            <i class="fa fa-building">
                                            </i>
                                            GrayGrids
                                        </span>
                                    </small>
                                </div>
                            </blockquote>
                        </div>

                        <div class="item">
                            <blockquote>
                                <div class="col-sm-3 text-center animated zoomIn">
                                    <img class="img-circle" src="assets/img/testimonial/img2.jpg" alt="">
                                </div>
                                <div class="col-sm-9 animated delay-0-5 fadeInUp">
                                    <p>
                                        <i class="fa fa-quote-left fa-2x">
                                        </i>
                                       After being my first choice for mobile recharges, @Btrs
is now on the way to be my choice for bus tickets  
                                    </p>
                                    <small>
                                        <span class="name">
                                            <i class="fa fa-user">
                                            </i>
                                            Robert L. Cathcart 
                                        </span>
                                        <span class="company">
                                            <i class="fa fa-building">
                                            </i>
                                            GrayGrids
                                        </span>
                                    </small>
                                </div>
                            </blockquote>
                        </div>

                        <div class="item">
                            <blockquote>
                                <div class="col-sm-3 text-center animated zoomIn">
                                    <img class="img-circle" src="assets/img/testimonial/img3.jpg" alt="">
                                </div>
                                <div class="col-sm-9 animated delay-0-5 fadeInUp">
                                    <p>
                                        <i class="fa fa-quote-left fa-2x">
                                        </i>
                                        Awesome experience on bus ticket booked through, <a href="#">Bus ticket Reservation</a>
                                    </p>
                                    <small>
                                        <span class="name">
                                            <i class="fa fa-user">
                                            </i>
                                            Robert L. Cathcart 
                                        </span>
                                        <span class="company">
                                            <i class="fa fa-building">
                                            </i>
                                            GrayGrids
                                        </span>
                                    </small>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="index.html#testimonial-carousel" class="left carousel-control">
                        <i class="fa fa-chevron-left">
                        </i>
                    </a>
                    <a data-slide="next" href="index.html#testimonial-carousel" class="right carousel-control">
                        <i class="fa fa-chevron-right">
                        </i>
                    </a>
                </div>
            </div><!-- Row Ends -->
        </div><!-- Container Ends -->
    </div><!-- Testimonial Ends -->
</section>
<!-- Testimonial Section End -->   

<!-- Team Section -->
<section id="team">
    <!-- Container Starts -->
    <div class="container">

        <h1 class="section-title wow fadeInDown" data-wow-delay=".5s">
            Cargo Consignment Facility
        </h1>
        <!-- Row Starts -->
        <div class="row">

            <div class="col-sm-6 col-md-3">
                <!-- Team Item Starts -->
                <div class="team-item wow fadeInUpQuick" data-wow-delay="1s">
                    <figure>
                        <img src="<?php echo $root; ?>assets/img/team/service2.JPG" alt="">
                        <div class="info">
                            <h2>
                               
                            </h2>
                            <p>
                               
                            </p>
                        </div>
                        <figcaption>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-facebook">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-linkedin">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-google-plus">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </figcaption>
                    </figure>
                </div><!-- Team Item Ends -->
            </div>


            <div class="col-sm-6 col-md-3">
                <!-- Team Item Starts -->
                <div class="team-item wow fadeInUpQuick" data-wow-delay="1.4s">
                    <figure>
                        <img src="<?php echo $root; ?>assets/img/team/service5.jpg" alt="">
                        <div class="info">
                            <h2>
                                
                            </h2>
                            <p>
                                
                            </p>
                        </div>
                        <figcaption>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-facebook">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-linkedin">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-google-plus">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </figcaption>
                    </figure>
                </div><!-- Team Item Starts -->
            </div>

            <div class="col-sm-6 col-md-3">
                <!-- Team Item Starts -->
                <div class="team-item wow fadeInUpQuick" data-wow-delay="1.8s">
                    <figure>
                        <img src="assets/img/team/service3.jpg" alt="">
                        <div class="info">
                            <h2>
                               
                            </h2>
                            <p>
                                
                            </p>
                        </div>
                        <figcaption>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-facebook">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-linkedin">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-google-plus">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </figcaption>
                    </figure>
                </div><!-- Team Item Ends -->
            </div>

            <div class="col-sm-6 col-md-3">
                <!-- Team Item Starts -->
                <div class="team-item wow fadeInUpQuick" data-wow-delay="2.2s">
                    <figure>
                        <img src="assets/img/team/service7.jpg" alt="">
                        <div class="info">
                            <h2>
                                
                            </h2>
                            <p>
                               
                            </p>
                        </div>
                        <figcaption>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-facebook">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-linkedin">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <i class="fa fa-google-plus">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </figcaption>
                    </figure>
                </div><!-- Team Item Ends -->
            </div>

        </div><!-- Row Ends -->
    </div><!-- Container Ends -->
</section>
<!-- Team Section End -->

<!-- Blog Section -->


            
<!-- blog Section End -->




<?php
include 'includes/footer.inc';
include 'includes/loader_switcher.inc';
include 'includes/jsFiles.inc';
?>
<!-- text file-->
</body>
