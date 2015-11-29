    <?php include 'includes/header.inc'; ?>
<body>
    <?php 
    // getting session variable / value. 
    // it takes only one parameter of Key
    $username = $this->session->userdata('username'); 
        
    /*
     * if empty its mean session not set. if session not set it clears that user is not logged in.
     */
    
    if(empty($username)){
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
                    <li><a href="about.html#">Home</a></li>
                    <li class="page">Login</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About us 1 Intro -->
    <section id="about-intro-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 ">
                    <div class="heading">
                        <h3 class="small-title">
                            Login Here
                        </h3>
                    </div>
                </div><br /><br />
                    <div class="the-company wow fadeIn">
                       
                            
                <div class="col-sm-6 col-md-6 ">
                           
                    <p><form  action="<?php echo $root; ?>login" method="post">
           
                
                <div class="form-group  <?php if(form_error('username') != '' || $userfound == 'no'){ ?> has-error <?php } ?>">
                    <label for="us_mail" style="margin-left:12px;margin-bottom: -2px;">User Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="username" id="username" 
                               placeholder="Enter Your Email" required <?php if($_POST){ ?> value="<?php echo $_POST['username']; ?>" <?php } ?> >
                        
                        
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                                            <?php if(form_error('username') != ''){ ?>
                                            <span class="help-block">
                                                <?php echo form_error('username'); ?>
                                            </span>
                                            <?php } ?>
                                            <?php if($userfound == 'no'){ ?>
                                            <span class="help-block">
                                                Sorry! user not found. <br />
                                            </span>
                                            <?php } ?>
                </div>
                        
                     <div class="form-group <?php if(form_error('us_passwrod') != ''){ ?> has-error <?php } ?>">
                    <label for="u_pass" style="margin-left:12px;margin-bottom: -2px;">Password</label>
                    <div class="input-group <?php if(form_error('us_passwrod') != ''){ ?> has-error <?php } ?>">
                        <input type="password"  name="us_passwrod" id="u_pass" class="form-control" 
                               placeholder="Enter Your Password" required <?php if($_POST){ ?> value="<?php echo $_POST['us_passwrod']; ?>" <?php } ?>/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                                            <?php if(form_error('us_passwrod') != ''){ ?>
                                            <span class="help-block">
                                                <?php echo form_error('us_passwrod'); ?>
                                            </span>
                                            <?php } ?>
                     <input type="submit" name="b_submit" id="bsubmit" value="Login" class="btn pull-right" style="background-color: #333333;margin-top: 10px;" />        
                                           
                    <a href="#" target="_blank"> Need Help? </a>
                            <br />
                            Not A Member? <a href="#" target="_blank"> Sign Up </a>
                            </form> 
                </p>
                  </div>
                </div>
                                    
                    
                </div>          

            </div>
        </div>
    </section>
    <!-- Login form End -->

        <?php }else {  ?>
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
