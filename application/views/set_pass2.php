
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
                    RESET PASSWORD
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $root; ?>">Home</a></li>
                    <li class="page">Reset password</li>
                </ol>
            </div>
        </div>

        <?php if ($empatymail == 'no') { ?>
            <div class="alert alert-danger">
                Error : 404
            </div>
        <?php } ?>
    </div>
    <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-reorder"></i>RESET Your Password
                        </div>

                    </div>



                    <div class="portlet-body">
                        <?php if ($update_success == 'yes') { ?>

                            <div class="alert alert-success">
                                Your password has been updated <br />
                                Now will be redirect to <a href='<?php echo $root ?>login'> Login </a> within 3 Seconds.
                            </div>

                        <?php } elseif ($update_success == 'no') {
                            ?>
                            <div class="alert alert-danger">
                                Some internal error occur. Kindly retry.
                            </div>
                        <?php } else { ?>


                            <p><form  action="<?php echo $root; ?>resetpasswordsms/resetpassword" method="post">


                                <div class="form-group <?php if ($form_validate == 'no') {
                            if (form_error('password') != '') {
                                    ?>  has-error <?php }
                         } ?>" >

                                    <label for="password" style="margin-left:8px;margin-bottom: -2px;">New PAssword</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-key"></i>
                                        </span>
                                        <input type="password" class="form-control" name="password" id="password" 
                                               placeholder="Enter Your New Password" >



                                    </div>
                                    <?php
                                    if ($form_validate == 'no') {
                                        if (form_error('password') != '') {
                                            ?>
                                            <div class="help-block">
                                            <?php echo form_error('password'); ?>
                                            </div>
        <?php }
    }
    ?>

                                </div>
                                <div class="form-group <?php if ($form_validate == 'no') {
        if (form_error('re_password') != '') {
            ?>  has-error <?php }
    }
    ?> ">
                                    <label for="repassword" style="margin-left:8px;margin-bottom: -2px;">Re-Type Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-key"></i>
                                        </span>
                                        <input type="password" class="form-control" name="re_password" id="password" 
                                               placeholder="Confirm Your password" />



                                    </div>
                                        <?php
                                        if ($form_validate == 'no') {
                                            if (form_error('re_password') != '') {
                                                ?>
                                            <div class="help-block ">
            <?php echo form_error('re_password'); ?>
                                            </div>
        <?php }
    }
    ?>


                                </div>
                                <div class="form-group ">
                                    <button type="submit" class="btn green ">
                                        Submit <i class="m-icon-swapright m-icon-white"></i>
                                    </button>
                                </div>
                            </form>
    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include 'includes/footer.inc';
include 'includes/loader_switcher.inc';
include 'includes/jsFiles.inc';
?>
