<?php include 'includes/header.inc'; ?>
<body>
    <?php
    // getting session variable / value. 
    // it takes only one parameter of Key
    $username = $this->session->userdata('username');

    /*
     * if empty its mean session not set. if session not set it clears that user is not logged in.
     */

    if (empty($username)) {
        ?>

        <!-- Header area wrapper starts -->
        <header id="header-wrap"> 
            <?php
            include 'includes/topAddressBar.inc';
            include 'includes/annonymousMenu.inc';
            ?>
        </header>    

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-inner">
                <div class="container">
                    <h1 class="section-title page-title">
                        Login Page
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo $root; ?>">Home</a></li>
                        <li class="page">Login</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <br /><br /><br />
        <!-- About us 1 Intro -->
        <section id="about-intro-block">
            <div class="container" >
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-reorder"></i>login Here
                                </div>

                            </div>
                            <div class="portlet-body">


                                <p><form  action="<?php echo $root; ?>login" method="post">
                                            <?php if ($userfound == 'no' || $password_found == 'no') { ?>
                                    <strong> <span class=" text-danger">
                                                Sorry! User name or password is Incorrect. Please try again 
                                        </span></strong>
                                        <?php } ?>

                                    <div class="form-group  <?php if (form_error('username') != '' || $userfound == 'no') { ?> has-error <?php } ?> " >
                                         
                                        <label for="username" style="margin-left:8px;margin-bottom: -2px;">User Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input type="text" class="form-control" name="username" id="username" 
                                                   placeholder="Enter Your Username" required <?php if ($_POST) { ?> value="<?php echo $_POST['username']; ?>" <?php } ?> >



                                        </div>
                                        <?php if (form_error('username') != '') { ?>
                                            <span class="help-block">
                                                <?php echo form_error('username'); ?>
                                            </span>
                                        <?php } ?>

                                    </div>

                                    <div class="form-group <?php if (form_error('us_passwrod') != '') { ?> has-error <?php } ?>">
                                        <label for="u_pass" style="margin-left:8px;margin-bottom: -2px;">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-key"></i>
                                            </span>
                                            <input type="password"  name="us_passwrod" id="u_pass" class="form-control" 
                                                   placeholder="Enter Your Password" required <?php if ($_POST) { ?> value="<?php echo $_POST['us_passwrod']; ?>" <?php } ?>/>

                                        </div>
                                        <?php if (form_error('us_passwrod') != '') { ?>
                                            <span class="help-block">
                                                <?php echo form_error('us_passwrod'); ?>
                                            </span>
                                        <?php } ?>
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="b_submit" id="bsubmit" value="Login" class="btn green btn-block" style="margin-top: 10px;" />        
                                        </div>                      
                                        <br /><br />

                                        <div class="forget-password">
                                            <h5>Forgot your password ?</h5>
                                            <p>
                                                No worries, click <a href="<?php echo $root; ?>resetpassword" id="forget-password">here</a>
                                                to reset your password.
                                            </p>
                                        </div>

                                        <br />  

                                        <h5>Not A Member? <a href="<?php echo $root; ?>register" target="_blank"> Sign Up </a></h5>

                                </form> 

                            </div>
                        </div>


                    </div>          

                </div>
            </div>
        </div>



    </section>
    <br /><br /><br /><br />
    <!-- Login form End -->

<?php } else { ?>
    <!-- Header area wrapper starts -->
    <header id="header-wrap"> 
        <?php
        include 'includes/topAddressBar.inc';
        include 'includes/memberMenu.inc';
        ?>
    </header>  
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header-inner">
            <div class="container">
                <h1 class="section-title page-title">
                    Login Page
                </h1>
                <ol class="breadcrumb">
                    <li><a href="about.html#">Home</a></li>
                    <li class="page">Login</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <section id="about-intro-block">
        <div class="container"> 
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="alert alert-danger">
                        You are already logged in.
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>



<?php
include 'includes/footer.inc';
include 'includes/loader_switcher.inc';
include 'includes/jsFiles.inc';
?>

</body>
</html>
