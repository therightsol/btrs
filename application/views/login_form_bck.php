    <?php include 'includes/header.inc'; ?>
<body>

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
                           
                    <p><form  action="#" method="post">
           
                
                <div class="form-group">
                    <label for="us_mail" style="margin-left:12px;margin-bottom: -2px;">User Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" name="usermail" id="us_mail" placeholder="Enter Your Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                     <div class="form-group">
                    <label for="u_pass" style="margin-left:12px;margin-bottom: -2px;">Password</label>
                    <div class="input-group">
                        <input type="password"  name="us_passwrod" id="u_pass" class="form-control" placeholder="Enter Your Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
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

    

    

    

    <?php
    include 'includes/footer.inc';
    include 'includes/loader_switcher.inc';
    include 'includes/jsFiles.inc';
    ?>

</body>
</html>
