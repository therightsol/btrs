<?php include 'includes/header.inc'; ?>
<body>

    <!-- Header area wrapper starts -->
    <header id="header-wrap"> 
        <?php
        include 'includes/topAddressBar.inc';
        
        
        
         $username = $this->session->userdata('username');
        if (!empty($username)) {

            include 'includes/memberMenu.inc';
        } else {

            include 'includes/annonymousMenu.inc'; 
        }
            ?>
    </header>    

    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header-inner">
            <div class="container">
                <h1 class="section-title page-title">
                    Email Verification 
                </h1>

            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About us 1 Intro -->
    <section id="about-intro-block">
        <div class="container">
            <?php if ($verify == 'yes') { ?>
                <div class="row">
                    <div class="col-sm-9 col-md-9 col-md-offset-1">
                        <div class="heading alert alert-success">
                            Your email has been successfully validated.
                            Now you can login and continue.
                        </div>
                    </div>
                </div>  
            <?php } elseif ($verify == 'no') { ?>         


                <div class="row">
                    <div class="col-sm-9 col-md-9 col-md-offset-1">
                        <div class="heading alert alert-danger">
                            Your account has already been activated .<br />
                            ERROR 1002: contact to Admin. OR TRY AGAIN
                        </div>

                    </div>   
                </div>




            <?php } elseif ($uid == 'null' || $userFound == 'no') { ?>
                <div class="row">
                    <div class="col-sm-9 col-md-9 col-md-offset-1">
                        <div class="heading alert alert-danger">
                            ERROR 10001 Or ERROR 10002: Consult to admin.<br />

                        </div>

                    </div>         

                </div> 


            <?php } elseif ($uid == 'no' || $get_uid == 'no') { ?>
                <div class="row">
                    <div class="col-sm-9 col-md-9 col-md-offset-1">
                        <div class="heading alert alert-danger">
                            Either you changed your URL or any internal error occour. 
                            <br />
                            Solution: Kindly click on validate link again.
                        </div>

                    </div>         

                </div>
            <?php } ?>

        </div>
    </section>
    <!-- About Us Intro Section End -->







    <?php
    include 'includes/footer.inc';
    include 'includes/loader_switcher.inc';
    include 'includes/jsFiles.inc';
    ?>

</body>
