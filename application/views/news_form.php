

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
                        <li class="page">Insert News</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

    </div>
    <br />
    <?php if ($success == 'no' || $success == '') { ?>
        <div class="container">
            <div class="row">  
                <div class="col-md-12"> 
                    <div class="portlet box green col-md-10 col-md-offset-1">
                        <div class="portlet-title">
                            <div class="caption">
                                Add News!
                            </div>


                        </div>
                        <div class="portlet-body form"> 
                            <!-- BEGIN FORM-->
                            <form  action="<?php echo $root; ?>news/insert" method="post"> 
                                <div class="form-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group <?php if ($usermatch == 'no') { ?> has-error <?php } ?>" > 
                                                <label class="control-label"> Added By</label>
                                                <div class="input-group">

                                                    <input type="text" maxlength="15" class="form-control" name="username" id="username" value="<?php
                                                    if (!empty($username)) {
                                                        echo $username;
                                                    }
                                                    ?>" readonly="" /> 

                                                </div>
                                                <?php if ($usermatch == 'no') { ?>

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="alert alert-danger">
                                                                u can't change the name.
                                                            </div>
                                                        </div>
                                                    </div>



                                                <?php } ?>

                                            </div> 
                                        </div>
                                        <br/> <br />
                                        <div class="col-md-12">
                                            <div class="form-group" > 
                                                <label class="control-label" id="date_news"> Date</label>
                                                <div class="input-group">

                                                    <input type="text"  class="form-control" name="date" id="date_news" 
                                                           value="<?php
                                                           date_default_timezone_set("Asia/Karachi");
                                                           echo date('d/m/y');
                                                           ?>" readonly="" /> 

                                                </div>
                                            </div> 
                                        </div>
                                        <br/> <br />
                                        <br /><br />
                                        <div class="col-md-12">
                                            <div class="form-group <?php if (form_error('agree') != '') { ?> has-error <?php } ?>"  > 
                                                <label class="control-label" id="agree_button" > You want To show This?</label>
                                                <div class="input-group">
                                                    <input type="radio" name="agree" id="agree_button" value="1" /> Now <br /> 
                                                    <input type="radio" name="agree" id="agree_button" value="0" /> Later

                                                </div>

                                                <?php if (form_error('agree') != '') { ?>
                                                    <span class="help-block">
                                                        <?php echo form_error('agree'); ?>
                                                    </span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <br /><br />
                                        <div class="col-md-12">
                                            <div class="form-group <?php if (form_error('write_news') != '') { ?> has-error <?php } ?>" > 
                                                <label class="control-label">Write your News Here</label>
                                                <div class="input-group">

                                                    <textarea cols='50' rows='10' style=" resize:none;"  name="write_news"  ><?php
                                                        if ($_POST) {
                                                            echo $_POST['write_news'];
                                                        }
                                                        ?></textarea>


                                                        <?php if (form_error('write_news') != '') { ?>
                                                        <span class="help-block">
                                                        <?php echo form_error('write_news'); ?>
                                                        </span>
        <?php } ?>
                                                    <br />
                                                    <div class="form-group <?php if (form_error('agree_change') != '') { ?> has-error <?php } ?>" > 
                                                        <div class="input-group">


                                                            <input type="checkbox" name="agree_change" id="change_news" />  
                                                            <label class="control-label" id="change_news"  style="margin-left:5px;" > Do You Really Want to Replace It with Orignal News?</label>

                                                        </div>
                                                            <?php if (form_error('agree_change') != '') { ?>
                                                            <span class="help-block">
                                                            <?php echo form_error('agree_change'); ?>
                                                            </span>
        <?php } ?>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <br /><br />
                                        <div class="col-md-12">
                                            <div class="form-actions left"> 
                                                <button type="submit" class="btn green"><i class="fa fa-check"></i>Submit</button>
                                            </div>
                                        </div> 


                                    </div>
                                </div> 


                        </div>
                    </div>
                </div> 
            </div>
        </div>  
        </form>
        <?php
    }
}
if ($success == 'yes') {
    ?>

    <div class="container">
        <div class="row">
            <div class="alert alert-success">
                News successfully,Added.
            </div>
        </div>
    </div>
    <?php
}
if (empty($username)) {
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

