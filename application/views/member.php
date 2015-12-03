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
    <div class="page-header">
        <div class="page-header-inner">
            <div class="container">
                <h1 class="section-title page-title">
                    Member page
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $root; ?>">Home</a></li>
                    <li class="page">Member page</li>
                </ol>
            </div>
        </div>
    </div>

<div class='container'>
    <div class="row profile">
        <div class="col-md-12">
            <!--BEGIN TABS-->
            <div class="tabbable tabbable-custom tabbable-full-width">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1_1" data-toggle="tab">Overview</a>
                    </li>
                    <li>
                        <a href="#tab_1_3" data-toggle="tab">Account</a>
                    </li>
                    
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1_1">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="list-unstyled profile-nav">
                                    <li>
                                        <img src="<?php echo $root; ?>assets/img/profile.png" class="img-responsive" alt=""/>
                                        <a href="#" class="profile-edit">change Image</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-8 profile-info">
                                        <h1><?php $username = $this->session->userdata('username');
                                        echo $username; ?>
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.
                                        </p>
                                        <p>
                                            <a href="#">www.mywebsite.com</a>
                                        </p>
                                        <ul class="list-inline">
                                            <li>
                                                <i class="fa fa-map-marker"></i> Spain
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar"></i> 18 Jan 1982
                                            </li>
                                            <li>
                                                <i class="fa fa-briefcase"></i> Design
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i> Top Seller
                                            </li>
                                            <li>
                                                <i class="fa fa-heart"></i> BASE Jumping
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-4">
                                        <div class="portlet sale-summary">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    Sales Summary
                                                </div>
                                                
                                            </div>
                                            <div class="portlet-body">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <span class="sale-info">
                                                            TODAY SOLD <i class="fa fa-img-up"></i>
                                                        </span>
                                                        <span class="sale-num">
                                                            23
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="sale-info">
                                                            WEEKLY SALES <i class="fa fa-img-down"></i>
                                                        </span>
                                                        <span class="sale-num">
                                                            87
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="sale-info">
                                                            TOTAL SOLD
                                                        </span>
                                                        <span class="sale-num">
                                                            2377
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="sale-info">
                                                            EARNS
                                                        </span>
                                                        <span class="sale-num">
                                                            $37.990
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->
                                <div class="tabbable tabbable-custom tabbable-custom-profile">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_11" data-toggle="tab">Latest Customers</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_22" data-toggle="tab">Feeds</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1_11">
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-advance table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <i class="fa fa-briefcase"></i> Company
                                                            </th>
                                                            <th class="hidden-xs">
                                                                <i class="fa fa-question"></i> Descrition
                                                            </th>
                                                            <th>
                                                                <i class="fa fa-bookmark"></i> Amount
                                                            </th>
                                                            <th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="#">Pixel Ltd</a>
                                                            </td>
                                                            <td class="hidden-xs">
                                                                Server hardware purchase
                                                            </td>
                                                            <td>
                                                                52560.10$
                                                                <span class="label label-success label-sm">
                                                                    Paid
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <a class="btn default btn-xs green-stripe" href="#">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    Smart House </a>
                                                            </td>
                                                            <td class="hidden-xs">
                                                                Office furniture purchase
                                                            </td>
                                                            <td>
                                                                5760.00$
                                                                <span class="label label-warning label-sm">
                                                                    Pending
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <a class="btn default btn-xs blue-stripe" href="#">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    FoodMaster Ltd </a>
                                                            </td>
                                                            <td class="hidden-xs">
                                                                Company Anual Dinner Catering
                                                            </td>
                                                            <td>
                                                                12400.00$
                                                                <span class="label label-success label-sm">
                                                                    Paid
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <a class="btn default btn-xs blue-stripe" href="#">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    WaterPure Ltd </a>
                                                            </td>
                                                            <td class="hidden-xs">
                                                                Payment for Jan 2013
                                                            </td>
                                                            <td>
                                                                610.50$
                                                                <span class="label label-danger label-sm">
                                                                    Overdue
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <a class="btn default btn-xs red-stripe" href="#">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">Pixel Ltd</a>
                                                            </td>
                                                            <td class="hidden-xs">
                                                                Server hardware purchase
                                                            </td>
                                                            <td>
                                                                52560.10$
                                                                <span class="label label-success label-sm">
                                                                    Paid
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <a class="btn default btn-xs green-stripe" href="#">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    Smart House </a>
                                                            </td>
                                                            <td class="hidden-xs">
                                                                Office furniture purchase
                                                            </td>
                                                            <td>
                                                                5760.00$
                                                                <span class="label label-warning label-sm">
                                                                    Pending
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <a class="btn default btn-xs blue-stripe" href="#">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#">
                                                                    FoodMaster Ltd </a>
                                                            </td>
                                                            <td class="hidden-xs">
                                                                Company Anual Dinner Catering
                                                            </td>
                                                            <td>
                                                                12400.00$
                                                                <span class="label label-success label-sm">
                                                                    Paid
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <a class="btn default btn-xs blue-stripe" href="#">View</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!--tab-pane-->
                                        <div class="tab-pane" id="tab_1_22">
                                            <div class="tab-pane active" id="tab_1_1_1">
                                                <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                                                    <ul class="feeds">
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-success">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            You have 4 pending tasks.
                                                                            <span class="label label-danger label-sm">
                                                                                Take action <i class="fa fa-share"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    Just now
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-success">
                                                                                <i class="fa fa-bell-o"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc">
                                                                                New version v1.4 just lunched!
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date">
                                                                        20 mins
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-danger">
                                                                            <i class="fa fa-bolt"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            Database server #12 overloaded. Please fix the issue.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    24 mins
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-info">
                                                                            <i class="fa fa-bullhorn"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            New order received. Please take care of it.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    30 mins
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-success">
                                                                            <i class="fa fa-bullhorn"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            New order received. Please take care of it.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    40 mins
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-warning">
                                                                            <i class="fa fa-plus"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            New user registered.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    1.5 hours
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-success">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            Web server hardware needs to be upgraded.
                                                                            <span class="label label-inverse label-sm">
                                                                                Overdue
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    2 hours
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-default">
                                                                            <i class="fa fa-bullhorn"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            New order received. Please take care of it.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    3 hours
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-warning">
                                                                            <i class="fa fa-bullhorn"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            New order received. Please take care of it.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    5 hours
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-info">
                                                                            <i class="fa fa-bullhorn"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            New order received. Please take care of it.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    18 hours
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-default">
                                                                            <i class="fa fa-bullhorn"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            New order received. Please take care of it.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    21 hours
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-info">
                                                                            <i class="fa fa-bullhorn"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            New order received. Please take care of it.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    22 hours
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-default">
                                                                            <i class="fa fa-bullhorn"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            New order received. Please take care of it.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    21 hours
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-info">
                                                                            <i class="fa fa-bullhorn"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            New order received. Please take care of it.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    22 hours
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-default">
                                                                            <i class="fa fa-bullhorn"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            New order received. Please take care of it.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    21 hours
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-info">
                                                                            <i class="fa fa-bullhorn"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            New order received. Please take care of it.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    22 hours
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-default">
                                                                            <i class="fa fa-bullhorn"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            New order received. Please take care of it.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    21 hours
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-info">
                                                                            <i class="fa fa-bullhorn"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc">
                                                                            New order received. Please take care of it.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date">
                                                                    22 hours
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-pane-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--tab_1_2-->
                    <div class="tab-pane" id="tab_1_3">
                        <div class="row profile-account">
                            <div class="col-md-3">
                                <ul class="ver-inline-menu tabbable margin-bottom-10">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab_1-1">
                                            <i class="fa fa-cog"></i> Personal info </a>
                                        <span class="after">
                                        </span>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_2-2"><i class="fa fa-picture-o"></i> Change Avatar</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_3-3"><i class="fa fa-lock"></i> Change Password</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <div id="tab_1-1" class="tab-pane active">
                                        <form role="form" action="#">
                                            <div class="form-group">
                                                <label class="control-label">User Name</label>
                                                <input type="text" placeholder="<?php $username = $this->session->userdata('username'); echo $username; ?>" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Full Name</label>
                                                <input type="text" placeholder="<?php $fullname = $this->session->userdata('fullname'); echo $fullname; ?>" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Mobile Number</label>
                                                <input type="text" placeholder="<?php $homenumber = $this->session->userdata('homenumber'); echo $homenumber; ?>" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Email Adress</label>
                                                <input type="email" placeholder="<?php $email = $this->session->userdata('email'); echo $email; ?>" class="form-control"/>
                                            </div>
                                            
                                           
                                            
                                            <div class="margiv-top-10">
                                                <a href="#" class="btn green">Save Changes</a>
                                                <a href="#" class="btn default">Cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="tab_2-2" class="tab-pane">
                                        
                                        <form action="#" role="form">
                                            <div class="form-group">
                                                <div class="thumbnail" style="width: 310px;">
                                                    <img src="http://www.placehold.it/310x170/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                                </div>
                                                <div class="margin-top-10 fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="input-group input-group-fixed">
                                                        <span class="input-group-btn">
                                                            <span class="">
                                                                
                                                                <span class="fileupload-preview">
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span class="btn default btn-file">
                                                            
                                                            <input type="file" class="default"/>
                                                        </span>
                                                        <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                                    </div>
                                                </div>
                                                <span class="label label-danger">
                                                    NOTE!
                                                </span>
                                                <span>
                                                    Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only
                                                </span>
                                            </div>
                                            <div class="margin-top-10">
                                                <a href="#" class="btn green">Submit</a>
                                                <a href="#" class="btn default">Cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="tab_3-3" class="tab-pane">
                                        <form action="#">
                                            <div class="form-group">
                                                <label class="control-label">Current Password</label>
                                                <input type="password" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">New Password</label>
                                                <input type="password" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Re-type New Password</label>
                                                <input type="password" class="form-control"/>
                                            </div>
                                            <div class="margin-top-10">
                                                <a href="#" class="btn green">Change Password</a>
                                                <a href="#" class="btn default">Cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                            <!--end col-md-9-->
                        </div>
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane" id="tab_1_4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="add-portfolio">
                                    <span>
                                        502 Items sold this week
                                    </span>
                                    <a href="#" class="btn icn-only green">Add a new Project <i class="m-icon-swapright m-icon-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end add-portfolio-->
                        <div class="row portfolio-block">
                            <div class="col-md-5">
                                <div class="portfolio-text">
                                    <img src="assets/img/profile/portfolio/logo_metronic.jpg" alt=""/>
                                    <div class="portfolio-text-info">
                                        <h4>Metronic - Responsive Template</h4>
                                        <p>
                                            Lorem ipsum dolor sit consectetuer adipiscing elit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 portfolio-stat">
                                <div class="portfolio-info">
                                    Today Sold
                                    <span>
                                        187
                                    </span>
                                </div>
                                <div class="portfolio-info">
                                    Total Sold
                                    <span>
                                        1789
                                    </span>
                                </div>
                                <div class="portfolio-info">
                                    Earns
                                    <span>
                                        $37.240
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="portfolio-btn">
                                    <a href="#" class="btn bigicn-only">
                                        <span>
                                            Manage
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                        <div class="row portfolio-block">
                            <div class="col-md-5 col-sm-12 portfolio-text">
                                <img src="assets/img/profile/portfolio/logo_azteca.jpg" alt=""/>
                                <div class="portfolio-text-info">
                                    <h4>Metronic - Responsive Template</h4>
                                    <p>
                                        Lorem ipsum dolor sit consectetuer adipiscing elit.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-5 portfolio-stat">
                                <div class="portfolio-info">
                                    Today Sold
                                    <span>
                                        24
                                    </span>
                                </div>
                                <div class="portfolio-info">
                                    Total Sold
                                    <span>
                                        660
                                    </span>
                                </div>
                                <div class="portfolio-info">
                                    Earns
                                    <span>
                                        $7.060
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12 portfolio-btn">
                                <a href="#" class="btn bigicn-only">
                                    <span>
                                        Manage
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!--end row-->
                        <div class="row portfolio-block">
                            <div class="col-md-5 portfolio-text">
                                <img src="assets/img/profile/portfolio/logo_conquer.jpg" alt=""/>
                                <div class="portfolio-text-info">
                                    <h4>Metronic - Responsive Template</h4>
                                    <p>
                                        Lorem ipsum dolor sit consectetuer adipiscing elit.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-5 portfolio-stat">
                                <div class="portfolio-info">
                                    Today Sold
                                    <span>
                                        24
                                    </span>
                                </div>
                                <div class="portfolio-info">
                                    Total Sold
                                    <span>
                                        975
                                    </span>
                                </div>
                                <div class="portfolio-info">
                                    Earns
                                    <span>
                                        $21.700
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 portfolio-btn">
                                <a href="#" class="btn bigicn-only">
                                    <span>
                                        Manage
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane" id="tab_1_6">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="ver-inline-menu tabbable margin-bottom-10">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab_1">
                                            <i class="fa fa-briefcase"></i> General Questions </a>
                                        <span class="after">
                                        </span>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_2"><i class="fa fa-group"></i> Membership</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_3"><i class="fa fa-leaf"></i> Terms Of Service</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_1"><i class="fa fa-info-circle"></i> License Terms</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_2"><i class="fa fa-tint"></i> Payment Rules</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_3"><i class="fa fa-plus"></i> Other Questions</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <div id="tab_1" class="tab-pane active">
                                        <div id="accordion1" class="panel-group">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">
                                                            1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion1_1" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">
                                                            2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion1_2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">
                                                            3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion1_3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-warning">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">
                                                            4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion1_4" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-danger">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">
                                                            5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion1_5" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">
                                                            6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion1_6" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7">
                                                            7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion1_7" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab_2" class="tab-pane">
                                        <div id="accordion2" class="panel-group">
                                            <div class="panel panel-warning">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_1">
                                                            1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion2_1" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <p>
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </p>
                                                        <p>
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-danger">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_2">
                                                            2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion2_2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_3">
                                                            3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion2_3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_4">
                                                            4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion2_4" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_5">
                                                            5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion2_5" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_6">
                                                            6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion2_6" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_7">
                                                            7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion2_7" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab_3" class="tab-pane">
                                        <div id="accordion3" class="panel-group">
                                            <div class="panel panel-danger">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1">
                                                            1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion3_1" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <p>
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                        </p>
                                                        <p>
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                        </p>
                                                        <p>
                                                            Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_2">
                                                            2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion3_2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_3">
                                                            3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion3_3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_4">
                                                            4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion3_4" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_5">
                                                            5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion3_5" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_6">
                                                            6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion3_6" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_7">
                                                            7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
                                                    </h4>
                                                </div>
                                                <div id="accordion3_7" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end tab-pane-->
                </div>
            </div>
            <!--END TABS-->
        </div>
    </div>
    <!-- END PAGE CONTENT-->
</div>
        <?php } 
    if (empty($username)) { ?>
    <div class="page-header">
        <div class="page-header-inner">
            <div class="container">
                <h1 class="section-title page-title">
                    Error
                </h1>
                <ol class="breadcrumb">
                    
                </ol>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="alert alert-danger">
                    <h4>Oops! You're lost.</h4>

                    We can not find the page you're looking for.
                    Return <a href="<?php echo $root; ?>home" >home </a> or try the search bar below. 
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php
    include 'includes/footer.inc';
    include 'includes/loader_switcher.inc';
    include 'includes/jsFiles.inc';
    ?>

</body>
