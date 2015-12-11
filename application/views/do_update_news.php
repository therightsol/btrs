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
        <div class="container">
        <div class="portlet box green green-stripe" style="margin-top:30px;">
            <div class="portlet-title">
                <div class="caption"> 
                    <i class="fa fa-edit"></i>Update News
                </div> 
            </div> 
            <div class="portlet-body"> 
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-md-offset-1">
                            <form action='<?php echo $root; ?>news/update/<?php echo $id; ?>' method="post"> 
                                    <div class="form-group">  
                                        <div class="input-group">
                                            <span class="input-group-addon"> 
                                                <i class="fa fa-newspaper-o"></i>
                                                <div class="bold">News Description</div>
                                            </span> 
                                            <textarea rows="16" class="form-control" style="resize: none;" ><?php echo $news_rec['news']; ?></textarea>
                                        </div>  
                                    </div>  

                                
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">  
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="bold">Created On</span>
                                                        <i class="fa fa-calendar"></i>
                                                    </span> 
                                                    <div class="form-control bg-blue" ><?php echo $news_rec['added_on']; ?></div>
                                                </div>  
                                            </div>   
                                        </div>
                                        
                                        <div class="col-md-5 col-md-offset-2">
                                            <div class="form-group">  
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="bold">Added By</span>
                                                        <i class="fa fa-user"></i>
                                                    </span> 
                                                    <div class="form-control bg-blue" ><?php echo $news_rec['added_by']; ?></div>
                                                </div>  
                                            </div> 
                                        </div>
                                    </div> 
                                <?php if ($news_rec['isModified'] == 1){ ?>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">  
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="bold">Modified On:</span>
                                                        <i class="fa fa-calendar"></i>
                                                    </span> 
                                                    <div class="form-control bg-red" ><?php echo $news_rec['lastModified']; ?></div>
                                                </div>  
                                            </div>   
                                        </div>
                                        
                                        <div class="col-md-5 col-md-offset-2">
                                            <div class="form-group">  
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="bold">Modified By</span>
                                                        <i class="fa fa-user"></i>
                                                    </span> 
                                                    <div class="form-control bg-red" ><?php echo $news_rec['ModifiedBy']; ?></div>
                                                </div>  
                                            </div> 
                                        </div>  
                                    </div> 
                                <?php } ?>
                                
                                
                                
                                

                                    <div class="form-group">  
                                        <input type="submit" class="btn btn-block btn-success btn-lg" value="Update" />
                                    </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- END News section-->
        
        
        
<?php
include 'includes/footer.inc';
include 'includes/loader_switcher.inc';
include 'includes/jsFiles.inc';
?>  