<?php include 'includes/header.inc'; ?>
<body>

    <!-- Header area wrapper starts -->
    <header id="header-wrap"> 
        <?php
        include 'includes/topAddressBar.inc';
        
        $username = $this->session->userdata('username');
        if(empty($username)){
            // user not logged in so,
            include 'includes/annonymousMenu.inc';
        }else {
            // user is logged in so
            include 'includes/memberMenu.inc';
        }
        
        
        ?>
    </header>    

    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header-inner">
            <div class="container">
                <h1 class="section-title page-title">
                    About us 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="about.html#">Home</a></li>
                    <li class="page">About Us </li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About us 1 Intro -->
    <section id="about-intro-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="heading">
                        <h3 class="small-title">
                            Company Name
                        </h3>
                    </div>
                    <div class="the-company wow fadeIn">
                        <p>
                            <img class="alignleft" src="<?php echo $root; ?>assets/img/about/buses.png" alt="">
                            Lorem ipsum dolor sit amet, consectutur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nosturd exeritation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectutur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nosturd exeritation ullamco laboris nisi ut aliquip ex ea commodo consequat sed do eiusmod tempor incididunt ut. Lorem ipsum dolor sit amet, consectutur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nosturd exeritation ullamco laboris nisi.
                        </p>              
                    </div>
                </div>          
                <div class="col-sm-6 col-md-6 skill-wrapper wow fadeIn" data-wow-delay=".8s">
                    <div class="heading">
                        <h3 class="small-title">
                            Our skills
                        </h3>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%">
                            <p>
                                Communication
                            </p>
                        </div>
                        <span class="percent">
                            86%
                        </span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                            <p>
                                Planning
                            </p>
                        </div>
                        <span class="percent">
                            91%
                        </span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <p>
                                Management
                            </p>
                        </div>
                        <span class="percent">
                            80%
                        </span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                            <p>
                                Organization
                            </p>
                        </div>
                        <span class="percent">
                            70%
                        </span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                            <p>
                                Leadership
                            </p>
                        </div>
                        <span class="percent">
                            90%
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Intro Section End -->







    <?php
    include 'includes/footer.inc';
    include 'includes/loader_switcher.inc';
    include 'includes/jsFiles.inc';
    ?>

</body>
</html>