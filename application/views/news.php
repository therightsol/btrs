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
                    News
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $root; ?>">Home</a></li>
                    <li class="page">News</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- nEws Section start -->
    
    <div class="container">
        <div class="portlet box green green-stripe" style="margin-top:30px;">
            <div class="portlet-title">
                <div class="caption">
                   
                    <i class="fa fa-newspaper-o"></i>News
                </div>

            </div>
            <div class="portlet-body">
                <div class="panel-group accordion" id="accordion1">
                <?php 
                if(!empty($news_rec)){ 
                    $x = 1;
                foreach ($news_rec as $key => $value){ ?> 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_<?php echo $x; ?>">
                                    <?php //echo '<tt><pre>' . var_export( $value, TRUE) . '</pre></tt>' 
                                        echo 'News Date  |  ' . $value['added_on']; 
                                    ?></a>
                            </h4>
                        </div>
                        <div id="collapse_<?php echo $x; ?>" 
                             class="panel-collapse 
                                 <?php if($x == '1'){?> in <?php }else { ?> collapse <?php } ?>"
                        >
                            <div class="panel-body">
                                <p>
                                    <?php echo $value['news']; ?>
                                </p>
                            </div>
                        </div>
                    </div> 
                
                
                <?php $x++; }
                }else {
                    // if $news_rec is empty
                ?>
                </div> <!-- accordion '.panel-group' closed -->
                <div class="alert alert-info">
                    <strong> There is no news to display </strong>
                </div>
               <?php    
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- END News section-->


    <!-- news section End -->



    <?php
    include 'includes/footer.inc';
    include 'includes/loader_switcher.inc';
    include 'includes/jsFiles.inc';
    ?>

