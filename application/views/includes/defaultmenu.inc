

<!-- Header area starts -->
<section id="header">

    <!-- Nav Menu with Logo area starts -->
    <div class="logo-menu">

        <!-- Navbar Starts -->
        <nav class="navbar navbar-default navbar-plain" role="navigation" data-spy="affix" data-offset-top="50">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    </button>
                    <a class="navbar-brand" href="index.html">
                       <img src="<?php echo $root; ?>assets/img/bus22.png" alt="PLAIN HTML5 Template">
                    </a>
                </div>
                <!-- Brand and toggle menu for mobile ends -->

                <!-- Navbar Starts -->
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav animated-nav navbar-right">
                        <li <?php if($page == 'home'){ ?> class="active" <?php } ?> >
                            <a href="<?php echo $root; ?>" >
                                Home
                            </a>
                        </li>        
                        <li <?php if($page == 'login'){ ?> class="active" <?php } ?> >
                            <a class="active" href="<?php echo $root; ?>login">
                                Login
                            </a>
                        </li>   
                        <li <?php if($page == 'register'){ ?> class="active" <?php } ?> >
                            <a href="<?php echo $root; ?>register" >
                                Register
                            </a>
                        </li>   
                        <li class="dropdown dropdown-toggle">
                            <a  href="about.html#" data-toggle="dropdown">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="about.html#">
                                        About Us
                                    </a>
                                    <ul class="dropdown-menu sub-menu">
                                        <li class="active">
                                            <a href="about.html">
                                                About us 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="about2.html">
                                                About us 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="services.html">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu sub-menu">
                                        <li>
                                            <a href="services.html">
                                                services 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="services2.html">
                                                Services 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="http://graygrids.com/demos/themes/plain-bs/team.html">
                                        Our Team
                                    </a>
                                    <ul class="dropdown-menu sub-menu">
                                        <li>
                                            <a href="team1.html">
                                                Team Page 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="team2.html">
                                                Team Page 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="pricing.html">
                                        Pricing Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html">
                                        FAQ Page
                                    </a>
                                </li> 
                                <li class="dropdown">
                                    <a href="about.html#">
                                        Sidebar
                                    </a>
                                    <ul class="dropdown-menu sub-menu">
                                        <li>
                                            <a href="blog-full.html">
                                                Full width
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-sidebar.html">
                                                Left Sidebar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sidebar-blog.html">
                                                Right Sidebar
                                            </a>
                                        </li>
                                    </ul>
                                </li>                      
                                <li>
                                    <a href="404.html">
                                        Page 404
                                    </a>
                                </li>    
                            </ul>
                        </li>             
                        <li class="dropdown dropdown-toggle">
                            <a href="about.html#" data-toggle="dropdown">
                                Elements 
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="accordions.html">
                                        Accordions
                                    </a>
                                </li>
                                <li>
                                    <a href="buttons.html">
                                        Buttons
                                    </a>
                                </li>
                                <li>
                                    <a href="social-icons.html">
                                        Social Icons
                                    </a>
                                </li>
                                <li>
                                    <a href="map.html">
                                        Google Map
                                    </a>
                                </li>
                                <li>
                                    <a href="media.html">
                                        Media
                                    </a>
                                </li>
                                <li>
                                    <a href="progress.html">
                                        Progress Bar
                                    </a>
                                </li>
                                <li>
                                    <a href="portfolio.html">
                                        Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="carousel.html">
                                        Carousel Slider
                                    </a>
                                </li>
                                <li>
                                    <a href="pricing.html">
                                        Pricing Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="notification.html">
                                        Notification
                                    </a>
                                </li>
                                <li>
                                    <a href="tabs.html">
                                        Tabs
                                    </a>
                                </li>                        
                            </ul>                   

                        </li>
                        <li class="dropdown dropdown-toggle">
                            <a href="about.html#" data-toggle="dropdown">
                                Portfolio
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="portfolio-col-3.html">
                                        Portfolio (3 column)
                                    </a>
                                </li>
                                <li>
                                    <a href="portfolio-col-4.html">
                                        Portfolio (4 column)
                                    </a>
                                </li>
                                <li>
                                    <a href="portfolio-item.html">
                                        Single Project
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="dropdown dropdown-toggle">
                            <a href="about.html#" data-toggle="dropdown">
                                Contact Us
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="contact1.html">
                                        Contact us Page 1
                                    </a>
                                </li>
                                <li>
                                    <a href="contact2.html">
                                        Contact us Page 2
                                    </a>
                                </li>                      
                            </ul>

                        </li>

                        <li class="dropdown dropdown-toggle">
                            <a href="about.html#" data-toggle="dropdown">
                                Blog
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="sidebar-blog.html">
                                        Blog View
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-single.html">
                                        Single Post
                                    </a>
                                </li>
                                <li>
                                    <a href="imagepost.html">
                                        Image Post
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.html">
                                        Gallery Post
                                    </a>
                                </li>
                                <li>
                                    <a href="video.html">
                                        Video Post
                                    </a>
                                </li>
                                <li>
                                    <a href="quote.html">
                                        Quote Post
                                    </a>
                                </li>   
                            </ul>                    
                        </li>

                        <!-- Search in right of nav -->
                        <li class="search">
                            <a href="about.html#" class="open-search">
                                <i class="fa fa-search">
                                </i>
                            </a>
                        </li>
                        <!-- Search Ends -->

                    </ul>

                    <!-- Form for navbar search area -->
                    <form class="full-search">
                        <div class="container">
                            <input type="text" placeholder="Type to Search">
                            <a href="about.html#" class="close-search">
                                <span class="fa fa-times fa-2x">
                                </span>
                            </a>
                        </div>
                    </form>
                    <!-- Search form ends -->

                </div>
            </div>

            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>                                    
                <li class="dropdown dropdown-toggle active">
                    <a href="about.html#" data-toggle="dropdown">
                        Pages
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a href="about.html#">
                                About Us
                            </a>
                            <ul class="dropdown-menu sub-menu">
                                <li>
                                    <a href="about.html">
                                        About us 1
                                    </a>
                                </li>
                                <li>
                                    <a href="about2.html">
                                        About us 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="services.html">
                                Services
                            </a>
                            <ul class="dropdown-menu sub-menu">
                                <li>
                                    <a href="services.html">
                                        services 1
                                    </a>
                                </li>
                                <li>
                                    <a href="services2.html">
                                        Services 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="http://graygrids.com/demos/themes/plain-bs/team.html">
                                Our Team
                            </a>
                            <ul class="dropdown-menu sub-menu">
                                <li>
                                    <a href="team1.html">
                                        Team Page 1
                                    </a>
                                </li>
                                <li>
                                    <a href="team2.html">
                                        Team Page 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="pricing.html">
                                Pricing Tables
                            </a>
                        </li>
                        <li>
                            <a href="faq.html">
                                FAQ Page
                            </a>
                        </li> 
                        <li class="dropdown">
                            <a href="about.html#">
                                Sidebar
                            </a>
                            <ul class="dropdown-menu sub-menu">
                                <li>
                                    <a href="blog-full.html">
                                        Full width
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-sidebar.html">
                                        Left Sidebar
                                    </a>
                                </li>
                                <li>
                                    <a href="sidebar-blog.html">
                                        Right Sidebar
                                    </a>
                                </li>
                            </ul>
                        </li>                      
                        <li class="active">
                            <a href="404.html">
                                Page 404
                            </a>
                        </li>    
                    </ul>
                </li>             
                <li class="dropdown dropdown-toggle">
                    <a href="about.html#" data-toggle="dropdown">
                        Elements 
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="accordions.html">
                                Accordions
                            </a>
                        </li>
                        <li>
                            <a href="buttons.html">
                                Buttons
                            </a>
                        </li>
                        <li>
                            <a href="social-icons.html">
                                Social Icons
                            </a>
                        </li>
                        <li>
                            <a href="map.html">
                                Google Map
                            </a>
                        </li>
                        <li>
                            <a href="media.html">
                                Media
                            </a>
                        </li>
                        <li>
                            <a href="progress.html">
                                Progress Bar
                            </a>
                        </li>
                        <li>
                            <a href="portfolio.html">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="carousel.html">
                                Carousel Slider
                            </a>
                        </li>
                        <li>
                            <a href="pricing.html">
                                Pricing Tables
                            </a>
                        </li>
                        <li>
                            <a href="notification.html">
                                Notification
                            </a>
                        </li>
                        <li>
                            <a href="tabs.html">
                                Tabs
                            </a>
                        </li>                        
                    </ul>                   

                </li>
                <li class="dropdown dropdown-toggle">
                    <a href="about.html#" data-toggle="dropdown">
                        Portfolio
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="portfolio-col-3.html">
                                Portfolio (3 column)
                            </a>
                        </li>
                        <li>
                            <a href="portfolio-col-4.html">
                                Portfolio (4 column)
                            </a>
                        </li>
                        <li>
                            <a href="portfolio-item.html">
                                Single Project
                            </a>
                        </li>

                    </ul>

                </li>

                <li class="dropdown dropdown-toggle">
                    <a href="about.html#" data-toggle="dropdown">
                        Contact Us
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="contact1.html">
                                Contact us Page 1
                            </a>
                        </li>
                        <li>
                            <a href="contact2.html">
                                Contact us Page 2
                            </a>
                        </li>                      
                    </ul>

                </li>

                <li class="dropdown dropdown-toggle">
                    <a href="about.html#" data-toggle="dropdown">
                        Blog
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="sidebar-blog.html">
                                Blog View
                            </a>
                        </li>
                        <li>
                            <a href="blog-single.html">
                                Single Post
                            </a>
                        </li>
                        <li>
                            <a href="imagepost.html">
                                Image Post
                            </a>
                        </li>
                        <li>
                            <a href="gallery.html">
                                Gallery Post
                            </a>
                        </li>
                        <li>
                            <a href="video.html">
                                Video Post
                            </a>
                        </li>
                        <li>
                            <a href="quote.html">
                                Quote Post
                            </a>
                        </li>   
                    </ul>                    
                </li>       
            </ul>
            <!-- Mobile Menu End -->

        </nav>
        <!-- Navbar Ends -->

    </div>
    <!-- Nav Menu and logo area ends -->

</section>
<!-- Header area ends -->




   
    <!-- Header-wrap area ends -->