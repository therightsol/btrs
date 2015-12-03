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
    <!-- nEws Section start -->
    
    <div class="container">
        <div class="portlet box green green-stripe" style="margin-top:30px;">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa-newspaper-o"></i>News
                </div>

            </div>
            <div class="portlet-body">
                <div class="panel-group accordion" id="accordion1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1">
                                    Collapsible Group Item #1 </a>
                            </h4>
                        </div>
                        <div id="collapse_1" class="panel-collapse in">
                            <div class="panel-body">
                                <p>
                                    Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                                </p>
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2">
                                    Collapsible Group Item #2 </a>
                            </h4>
                        </div>
                        <div id="collapse_2" class="panel-collapse collapse">
                            <div class="panel-body" style="height:200px; overflow-y:auto;">
                                <p>
                                    111111Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                                </p>
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </p>
                                <p>
                                    Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                                </p>
                                <p>
                                    <a class="btn blue" href="ui_tabs_accordions_navs.html#collapse_2" target="_blank">Activate this section via URL</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_3">
                                    Collapsible Group Item #3 </a>
                            </h4>
                        </div>
                        <div id="collapse_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                </p>
                                <p>
                                    Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                                </p>
                                <p>
                                    <a class="btn green" href="ui_tabs_accordions_navs.html#collapse_3" target="_blank">Activate this section via URL</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_4">
                                    Collapsible Group Item #4 </a>
                            </h4>
                        </div>
                        <div id="collapse_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                                </p>
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                </p>
                                <p>
                                    Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                                </p>
                                <p>
                                    <a class="btn red" href="ui_tabs_accordions_navs.html#collapse_4" target="_blank">Activate this section via URL</a>
                                </p>
                            </div>
                        </div>
                    </div>
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

