
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
                        <?php if ($email_send == 'yes') { ?>

                            <div class="alert alert-success">
                                Succesfully email sent, please check your mail box 
                            </div>

                        <?php
                        }
                        if ($email_send == 'no') {
                            ?>
                            <div class="alert alert-danger">
                                email not sent. some internal error occur. 
                            </div> 
                        
                        <?php
                        }
                        if ($active_not == 'no') {
                            ?>
                            <div class="alert alert-danger">
                               email not active. <br /> Kindly validate your email before continue.
                            </div> <?php
                        }if ($emailFound == 'no') {?>
                            <div class="alert alert-danger">
                                email doesn't exists, please click <a href="<?php echo $root; ?>register"> Here </a> to creata account 
                            </div> 
                        <?php } ?>
                        
                        
                        

                            <div class="portlet-body">
                                <ul class="nav nav-tabs">
                                    <li class="  active">
                                        <a href="#tab_1_1" data-toggle="tab" aria-expanded="">Via Email</a>
                                    </li>
                                    <li class=" ">
                                        <a href="#tab_1_2" data-toggle="tab" aria-expanded="">Via SMS</a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab_1_1">
                                        <p>
                                        <div class="container" style="margin-top: 10px;margin-bottom: 10px;">
                                            <div class="row">
                                                <div class="col-sm-4 col-sm-offset-2">
                                                    <form class="forget-form" action="<?php echo $root; ?>resetpassword" method="post">
                                                        <h3>Forget Password ?</h3>
                                                        <p>
                                                            Enter your e-mail address below to reset your password .
                                                        </p>
                                                        <div class="form-group <?php if (form_error('email') != '') {?> has-error <?php }?>"  />
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                                <input class="form-control placeholder-no-fix" type="text"  placeholder="Enter Your email Adress" name="email" />
                                                            </div>
                                                             <?php if (form_error('email') != '') { ?>
                                                    <span class="help-block">
                                                        <?php echo form_error('email'); ?>
                                                    </span>
                                                <?php } ?>
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
                                <div class="tab-pane fade" id="tab_1_2">
                                    <p>
                                        <!-- BEGIN FORGOT PASSWORD FORM -->
                                    <div class="container" style="margin-top: 10px;margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <form class="forget-form" action="<?php echo $root; ?>resetpasswordsms" method="post">
                                                    <h3>Forget Password ?</h3>
                                                    <p>
                                                        Enter your Email below to reset your password Via SMS.
                                                    </p>
                                                    <div class="form-group <?php if (form_error('email_sms') != '') {?> has-error <?php }?>">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-mobile"></i>
                                                            </span>
                                                            <input class="form-control placeholder-no-fix" type="text"  placeholder="Enter Your email Adress" name="email_sms"/>
                                                        </div>
                                                        <?php if (form_error('email_sms') != '') { ?>
                                                    <span class="help-block">
                                                        <?php echo form_error('email_sms'); ?>
                                                    </span>
                                                <?php } ?>
                                                    </div>
                                                    <div class="">

                                                        <button type="submit" class="btn green pull-right">
                                                            Submit <i class="m-icon-swapright m-icon-white"></i>
                                                        </button>
                                                        </div>
                                                </form>

                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- END FORGOT PASSWORD FORM -->
                                </p>
                            </div>
                                   
                               
                                   
                                   <?php }?>
            </div>
        </div>
    </div>
    </div>
            </div>
        </div>
            <!-- Rest page strt here -->
<?php  if (!empty($username)) {
    ?>
    <div class="container">
        <div class="row">
            <div class="alert alert-danger">

                Unkwon ERROR :1004.
            </div>
        <?php } ?>

        <?php
        include 'includes/footer.inc';
        include 'includes/loader_switcher.inc';
        include 'includes/jsFiles.inc';
        ?>

        </body>
