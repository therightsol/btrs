<?php include 'includes/header.inc'; ?>

<body>

    <!-- Header area wrapper starts -->
    <header id="header-wrap"> 
        <?php
        
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
                    Registration Page
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $root; ?>">Home</a></li>
                    <li class="page">Registration form</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Registration form - START -->
    <br />
    <div class="container">
        <div class="row">  
            <div class="col-md-12"> 
                <div class="portlet box green col-md-10 col-md-offset-1">
                    <div class="portlet-title">
                        <div class="caption">
                            Create a new account!
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="javascript:;" class="reload"></a>
                        </div>
                    </div>
                    <div class="portlet-body form"> 
                        <!-- BEGIN FORM-->

                        <?php if ($success == '') { ?>



                            <form  action="<?php echo $root; ?>register" method="post"> 
                                <div class="form-body">
                                    <h3 class="form-section">Person Info</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group <?php if (form_error('username') != '' || $userFound == 'yes') { ?> has-error <?php } ?>"  > 
                                                <label class="control-label">Username</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                    </span> 
                                                    <input type="text" maxlength="15" class="form-control" name="username" id="username" placeholder="jondoe123" 
                                                           <?php if ($_POST) { ?> value="<?php echo $_POST['username']; ?>" <?php } ?>
                                                           />
                                                </div> 
                                                <?php if (form_error('username') != '') { ?>
                                                    <span class="help-block">
                                                        <?php echo form_error('username'); ?>
                                                    </span>
                                                <?php } ?>
                                                <?php if ($userFound == 'yes') { ?>
                                                    <span class="help-block">
                                                        Sorry! username already taken. <br />
                                                        Kindly choose another one.
                                                    </span>
                                                <?php } ?>
                                            </div> 
                                        </div>
                                        <!--/span-->

                                        <div class="col-md-6">
                                            <div class="form-group <?php if (form_error('fullname') != '') { ?> has-error <?php } ?>" id="fname"> 
                                                <label class="control-label">Full Name</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-circle"></i>
                                                    </span>  
                                                    <input type="text" maxlength="45" class="form-control" name="fullname" id="fullname" placeholder="John Doe"  <?php if ($_POST) { ?> value="<?php echo $_POST['fullname']; ?>" <?php } ?> /> 
                                                </div> 
                                                <?php if (form_error('fullname') != '') { ?>
                                                    <span class="help-block">
                                                        <?php echo form_error('fullname'); ?>
                                                    </span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <!--/span-->

                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group <?php if (form_error('email') != '' || $emailFound == 'yes') { ?> has-error <?php } ?>" >
                                                <label class="control-label">Email</label> 
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </span> 
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="someone@somedomain.com"  <?php if ($_POST) { ?> value="<?php echo $_POST['email']; ?>" <?php } ?> />  
                                                </div>                                           
                                                <?php if (form_error('email') != '') { ?>
                                                    <span class="help-block">
                                                        <?php echo form_error('email'); ?>
                                                    </span>

                                                <?php } ?>
                                                <?php if ($emailFound == 'yes') { ?>
                                                    <span class="help-block">
                                                        Sorry! Email already Exists. <br />
                                                        Kindly choose another one.
                                                    </span>
                                                <?php } ?>
                                            </div>
                                        </div>

                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group <?php if (form_error('confemail') != '') { ?> has-error <?php } ?>" >
                                                <label class="control-label">Confirm Email</label> 
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </span> 
                                                    <input type="email" class="form-control" name="confemail" id="confemail" placeholder="someone@somedomain.com"  <?php if ($_POST) { ?> value="<?php echo $_POST['confemail']; ?>" <?php } ?> />  
                                                </div> 
                                                <?php if (form_error('confemail') != '') { ?>
                                                    <span class="help-block">
                                                        <?php echo form_error('confemail'); ?>
                                                    </span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group  last password-strength <?php if (form_error('password') != '') { ?> has-error <?php } ?>" >
                                                <label class="control-label">Password</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </span> 
                                                    <input type="password" placeholder="Enter 8 - 45 characters" class="form-control" name="password" id="password_strength" <?php if ($_POST) { ?> value="<?php echo $_POST['password']; ?>" <?php } ?> />  
                                                </div> 
                                                <?php if (form_error('password') != '') { ?>
                                                    <span class="help-block">
                                                        <?php echo form_error('password'); ?>
                                                    </span>
                                                <?php } ?>
                                            </div>
                                        </div>

                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group <?php if (form_error('con_password') != '') { ?> has-error <?php } ?>">
                                                <label class="control-label">Confirm Password</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </span> 
                                                    <input type="password" placeholder="Enter 8 - 45 characters" class="form-control" name="con_password" id="password_strength2" <?php if ($_POST) { ?> value="<?php echo $_POST['con_password']; ?>" <?php } ?> > 
                                                </div> 
                                                <?php if (form_error('con_password') != '') { ?>
                                                    <span class="help-block">
                                                        <?php echo form_error('con_password'); ?>
                                                    </span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!-- /row --> 

                                    <h3 class="form-section">Address</h3>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <label>Street</label>
                                                <input type="text" name="street" class="form-control" 
                                                       <?php if ($_POST) { ?> value="<?php echo $_POST['street']; ?>" <?php } ?>
                                                       />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" 
                                                       <?php if ($_POST) { ?> value="<?php echo $_POST['city']; ?>" <?php } ?>
                                                       />
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group"  />
                                            <label>State</label>
                                            <input type="text" name="state" class="form-control" 
                                                   <?php if ($_POST) { ?> value="<?php echo $_POST['state']; ?>" <?php } ?>
                                                   />
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>

                                <div class="row"> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Choose your Country</label>

                                            <select name="countries" id="select2_sample4" class="form-control select2">
                                                <option value="Null">Kindly choose your Country</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BA">Bosnia and Herzegowina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Cote d'Ivoire</option>
                                                <option value="HR">Croatia (Hrvatska)</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard and Mc Donald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran (Islamic Republic of)</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macau</option>
                                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="AN">Netherlands Antilles</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Reunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint LUCIA</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia (Slovak Republic)</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SH">St. Helena</option>
                                                <option value="PM">St. Pierre and Miquelon</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands (British)</option>
                                                <option value="VI">Virgin Islands (U.S.)</option>
                                                <option value="WF">Wallis and Futuna Islands</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <!--/span--> 
                                    <div class="col-md-6">
                                        <div class="form-group <?php if (form_error('phone') != '') { ?> has-error <?php } ?>">
                                            <label class="control-label">Phone</label>
                                            <input class="form-control" name="phone" type="text" placeholder="+923334036014"  <?php if ($_POST) { ?> value="<?php echo $_POST['phone']; ?>" <?php } ?>/>



                                            <?php if (form_error('phone') != '') { ?>
                                                <span class="help-block">
                                                    <?php echo form_error('phone'); ?>
                                                </span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="form-actions right"> 
                            <button type="submit" class="btn blue"><i class="fa fa-check"></i>Register</button>
                        </div>
                        </form>
                        <!-- END FORM-->
                    <?php } else if ($success == 'yes') { ?>
                        <div class="alert alert-success">
                            You have successfully created your account! <br />
                            Kindly check your email. And confirm your account to continue.
                        </div> 
                    <?php } ?>
                </div>
            </div>   
        </div> 
    </div>
</div>
<!-- Registration form - END -->





<?php
include 'includes/footer.inc';
include 'includes/loader_switcher.inc';
include 'includes/jsFiles.inc';
?>

<script>
    $('#fullname').blur(function () {
        var length = $('#fullname').val().length;

        if (length < 3 || length > 45) {
            if (!$('#fname').hasClass('has-error')) {
                $('#fname').addClass('has-error').append('<span class="help-block" id="fnameError">Full name should be 3 to 45 characters long.</span>');
            }
        } else {
            $('#fname').removeClass('has-error');
            $('#fnameError').remove();
        }
    });


    // validating password
    $('#password_strength').keyup(function () {

        var regExp = /^((?=.*\d)(?=.*[A-Z])(?=.*\W).{8,})$/;

        var result = regExp.test($('#password_strength').val());
        //console.log(result);

        if (result === true) {
            $('#password_strength').parents('.form-group').removeClass('has-error').children('.help-block').remove();
        } else {
            if (!$('#password_strength').parents('.form-group').hasClass('has-error')) {
                $('#password_strength').parents('.form-group').addClass('has-error')
                        .append('<span class="help-block"><ul><li> Password should contains at least 8 characters.</li><li> Password should contains at least 1 number.</li><li> Password should contains at least 1 uppercase letter.</li><li> Password should contains at least 1 special character.</li><li> Password should matched with Re-type password field.</li></ul></span>');
            }
        }

    });


    // Password strengthn code
    $(function () {
        $('input#password_strength').passwordstrength({
            'minlength': 8,
            'number': true,
            'capital': true,
            'special': true,
            'labels': {
                'general': 'The password must have :',
                'minlength': 'At leaset {{minlength}} characters',
                'number': 'At least one number',
                'capital': 'At least one uppercase letter',
                'special': 'At least one special character'
            }
        });

    });




</script>


<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script> 
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/clockface/js/clockface.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/jquery.input-ip-address-control-1.0.min.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic//plugins/jquery-multi-select/js/jquery.quicksearch.js"></script>
<script src="<?php echo $root; ?>assets/metronic//plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript"></script>
<script src="<?php echo $root; ?>assets/metronic//plugins/bootstrap-switch/static/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo $root; ?>assets/metronic//plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript"></script>
<script src="<?php echo $root; ?>assets/metronic//plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="<?php echo $root; ?>assets/metronic//plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
<script src="<?php echo $root; ?>assets/metronic//plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="<?php echo $root; ?>assets/metronic//plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->


<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic/plugins/jquery-validation/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo $root; ?>assets/metronic/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo $root; ?>assets/metronic/scripts/app.js"></script> 
<script src="<?php echo $root; ?>assets/metronic/scripts/form-components.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>
    jQuery(document).ready(function () {
        // initiate layout and plugins
        App.init();
        FormComponents.init();

    });



</script>




</body>
</html>
