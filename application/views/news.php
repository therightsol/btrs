<?php include 'includes/header.inc'; ?>
<body>

    <!-- Header area wrapper starts -->
    <header id="header-wrap"> 
        <?php
        include 'includes/topAddressBar.inc';

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
    <!-- Page Header -->

    <div class="page-header">
        <div class="page-header-inner">
            <div class="container">
                <h1 class="section-title page-title">
                    Insert News
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $root; ?>">Home</a></li>
                    <li class="page">News</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container">
        <h1 class="section-title wow fadeInUp">
            News
        </h1>
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <article class="other-service-item wow fadeInUp" data-wow-delay=".5s">

                    <div class="service-content " style="border:1px dashed black;">


                        Posted on:<?php
                        $date = $this->session->userdata('added_on');
                        echo $date;
                        ?>
                        <br/><br/><br/>
                        <?php
                        $news = $this->session->userdata('news');

                        echo $news;
                        ?>
                        <br/><br/><br/><br/>

                        Added BY:<?php echo $username; ?>


                    </div>
                </article>

            </div>
            <div class="col-sm-4 col-md-4">
                <article class="other-service-item wow fadeInUp" data-wow-delay=".5s">

                    <div class="service-content " style="border:1px dashed black;">


                        Posted on:<?php
                        $date = $this->session->userdata('added_on');
                        echo $date;
                        ?>
                        <br/><br/><br/>
                        <?php
                        $news = $this->session->userdata('news');

                        echo $news;
                        ?>
                        <br/><br/><br/><br/>

                        Added BY:<?php echo $username; ?>


                    </div>
                </article>

            </div>
            <div class="col-sm-4 col-md-4">
                <article class="other-service-item wow fadeInUp" data-wow-delay=".5s">

                    <div class="service-content " style="border:1px dashed black;">


                        <strong><span style="font-size:0.9em;color:grey;"> Posted on : <?php
                        $date = $this->session->userdata('added_on');
                        echo $date;
                        ?></span></strong>
                        <br/><br/><br/>
                        <strong><span class="" style="font-size: 1em;">
                                <?php
                                $news = $this->session->userdata('news');

                                echo $news;
                                ?></span> </strong>
                        <br/><br/><br/><br/>

                        Added BY:<?php echo $username; ?>


                    </div>
                </article>

            </div>
        </div>
    </div>



    <?php
    include 'includes/footer.inc';
    include 'includes/loader_switcher.inc';
    include 'includes/jsFiles.inc';
    ?>

