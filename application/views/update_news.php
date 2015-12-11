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
                        Update News
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo $root; ?>">Home</a></li>
                        <li class="page">update News</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <div>
        
        <br />
        <br/>
        
        <br />
        <br/><br />
        <br/><br />
        <br/><br />
        <br/><br />
        <br/>
        
        
        <br />
        </div>
        
        
        
<?php
include 'includes/footer.inc';
include 'includes/loader_switcher.inc';
include 'includes/jsFiles.inc';
?>  