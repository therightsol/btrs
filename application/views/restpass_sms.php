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
                    RESET PASSWORD
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $root; ?>">Home</a></li>
                    <li class="page">Reset password</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- BEGIN PAGE CONTENT-->
    <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-reorder"></i>RESET Your Password
                        </div>

                    </div>

                    <?php if ($active_not == 'no') { ?>
                        <div class='alert alert-danger'>
                            email not active. <br /> Kindly validate your email before continue.
                        </div>
                        <?php
                    }
                    if ($success_smsmail == 'no') {
                        ?>
                        <div class='alert alert-danger'>
                            ERROR : Please Try again</div>
                    <?php }if ($emailFound == 'no') {
                        ?>
                        <div class='alert alert-danger'>
                            email doesn't exists, please click <a href="<?php echo $root; ?>register"> Here </a> to creata account
                        </div>
                    <?php } if ($success_smsmail == 'yes' || $code_matched == 'no') { ?>


                        <div class="portlet-body">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    SMS code Verification
                                </li>


                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="tab_1_1">
                                    <p>
                                    <div class="container" style="margin-top: 10px;margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <form class="forget-form" action="<?php echo $root; ?>resetpasswordsms/codeverification" method="post">

                                                    <p>
                                                        Enter your 5 digit code  below to reset your password .
                                                    </p>
                                                    <div class="form-group <?php if ($code_matched == 'no') { ?> has-error <?php } ?> "  >
                                                        <div class='text-danger'><strong> <?php if ($code_matched == 'no') { ?>


                                                                    Code not Matched. Please Try again.


                                                                <?php } ?>
                                                            </strong></div>


                                                        <div class="input-group">

                                                            <span class="input-group-addon">
                                                                <i class=""></i>
                                                            </span>
                                                            <input class="form-control placeholder-no-fix" type="text"  placeholder="Enter Your code Here" name="code" />
                                                        </div>

                                                    </div>



                                                    <div class="">

                                                        <button type="submit" class="btn green pull-right">
                                                            Submit <i class="m-icon-swapright m-icon-white"></i>
                                                        </button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </p>
                            </div>

                        </div>
                    </div>
                <?php } ?> 
            </div>
        </div>
    </div>
</div>
<?php
include 'includes/footer.inc';
include 'includes/loader_switcher.inc';
include 'includes/jsFiles.inc';
?>