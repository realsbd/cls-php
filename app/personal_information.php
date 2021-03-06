<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['business_address'])){
 if (empty($_POST['business_address'])
 || empty($_POST['business_city'])){ 
 // Setting error message
 $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: general_information.php"); // Redirecting to first page 
 } else {
   foreach ($_POST as $key => $value) {
   $_SESSION['post'][$key] = $value;
   }
}
} else {
 if (empty($_SESSION['error_page2'])) {
 header("location: general_information.php");//redirecting to first page
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>CLS | FUNDING</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="../assets/loanbuilder/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/loanbuilder/css/main.css">
    <link rel="icon" type="image/png" href="../assets/loanbuilder/favicon.png" />
</head>
<body>
		    
    <div id="wrapper">
        <header id="header" class="header-mobile">
            <div class="container container-normal">
                <div class="logo">
                    <a href="#">
                        <img src="../assets/loanbuilder/images/logo.svg" alt="">
                    </a>
                </div>
            </div>
        </header>
        <div class="main">
            <div class="main-holder">
                <div class="container-fluid">
                    <ul class="nav nav-tabs tabs-style">
                        <li class=""><span>General Information</span></li>
                        <li class=""><span>Business Information</span></li>
                        <li class="active"><span>Personal Information</span></li>
                        <li class=""><span>Review</span></li>
                    </ul>
                    <div id="app" class="content-holder">
                    <!-- step-3-->
                    <span id="error">
                    <?php
                        // To show error of page 2.
                        if (!empty($_SESSION['error_page2'])) {
                        echo $_SESSION['error_page2'];
                        unset($_SESSION['error_page2']);
                        }
                    ?>
                    </span>
                    <div class="step-tab step-3">
                            <h3 class="ttl">You’re almost there! Just a few more fields and we can process your application.</h3>
                            <form class="form-validate-me" action="./review.php" method="post">
                                <div class="box">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input">
                                                    <div class="ttl-label">
                                                        <label for="inputHomeAddress">Home Address</label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <input type="text" name="home_address" class="form-control" placeholder="" id="inputHomeAddress" data-error="Please provide street address." required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input">
                                                    <div class="ttl-label">
                                                        <label for="inputHomeCity">Home City</label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <input type="text" name="home_city" class="form-control" placeholder="" id="inputHomeCity" data-error="Please provide city." required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="bootstrap-select">
                                                        <div class="ttl-label">
                                                            <label for="inputHomeState">Home State</label>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <input type="text" class="form-control" name="home_state" id="inputHomeState" data-error="Please enter your state." required>
                                                            <!-- <option value=""></option>
                                                            <option value="Alabama">Alabama</option>
                                                            <option value="Alaska">Alaska </option>
                                                            <option value="Arizona">Arizona </option>
                                                            <option value="Arkansas">Arkansas </option>
                                                            <option value="California">California </option>
                                                            <option value="Colorado">Colorado </option>
                                                            <option value="Connecticut">Connecticut </option>
                                                            <option value="Delaware">Delaware </option>
                                                            <option value="Florida">Florida </option>
                                                            <option value="Georgia">Georgia </option>
                                                            <option value="Hawaii">Hawaii </option>
                                                            <option value="Idaho">Idaho </option>
                                                            <option value="Illinois">Illinois</option>
                                                            <option value="Indiana">Indiana </option>
                                                            <option value="Iowa">Iowa </option>
                                                            <option value="Kansas">Kansas </option>
                                                            <option value="Kentucky">Kentucky </option>
                                                            <option value="Louisiana">Louisiana </option>
                                                            <option value="Maine">Maine </option>
                                                            <option value="Maryland">Maryland </option>
                                                            <option value="Massachusetts">Massachusetts </option>
                                                            <option value="Michigan">Michigan </option>
                                                            <option value="Minnesota">Minnesota </option>
                                                            <option value="Mississippi">Mississippi </option>
                                                            <option value="Missouri">Missouri </option>
                                                            <option value="Montana">Montana</option>
                                                            <option value="Nebraska">Nebraska </option>
                                                            <option value="Nevada">Nevada </option>
                                                            <option value="New Hampshire">New Hampshire </option>
                                                            <option value="New Jersey">New Jersey </option>
                                                            <option value="New Mexico">New Mexico </option>
                                                            <option value="New York">New York </option>
                                                            <option value="North Carolina">North Carolina </option>
                                                            <option value="North Dakota">North Dakota </option>
                                                            <option value="Ohio">Ohio </option>
                                                            <option value="Oklahoma">Oklahoma </option>
                                                            <option value="Oregon">Oregon </option>
                                                            <option value="Pennsylvania">Pennsylvania</option>
                                                            <option value="Rhode Island">Rhode Island </option>
                                                            <option value="South Carolina">South Carolina </option>
                                                            <option value="South Dakota">South Dakota </option>
                                                            <option value="Tennessee">Tennessee </option>
                                                            <option value="Texas">Texas </option>
                                                            <option value="Utah">Utah </option>
                                                            <option value="Vermont">Vermont </option>
                                                            <option value="Virginia">Virginia </option>
                                                            <option value="Washington">Washington </option>
                                                            <option value="West Virginia">West Virginia </option>
                                                            <option value="Wisconsin">Wisconsin </option>
                                                            <option value="Wyoming">Wyoming</option>
                                                        </select> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input">
                                                        <div class="ttl-label">
                                                            <label for="inputHomeZip">Home Zip Code</label>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <input type="text" name="home_zip" class="form-control" placeholder="" id="inputHomeZip" pattern="[0-9]{5}" data-inputmask="'mask': '99999'" data-error="Please provide zip code." required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input">
                                                    <div class="ttl-label">
                                                        <label for="inputSocialNumber">International Passport Number/ SSN</label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="input-question">
                                                        <input type="tel" name="ssn" class="form-control fs-hide" placeholder="" id="inputSocialNumber" data-error="Please provide valid SSN." required>
                                                        <a href="#" data-toggle="modal" data-target="#modal-question-social" class="ico-question">
                                                            <span>?</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input">
                                                    <div class="ttl-label">
                                                        <label for="inputDateofBirth">Date of Birth</label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <input type="text" name="dob" class="form-control" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" placeholder="MM/DD/YYYY" data-inputmask="'mask': '99/99/9999'" id="inputDateofBirth" data-error="Please provide valid DOB." required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="communication">
                                    <div class="communication-block">
                                        <div class="holder">
                                            <h4>Communication Preferences</h4>
                                            <p>Let us know which form of communication is most convenient for you to receive updates on your application and loan status. <em>Please select at least one method of communication.</em></p>
                                            <div class="form-group has-checkbox">
                                                <!-- <div class="switch-group">
                                                    <label for="inputCheckEmail">Email</label>
                                                    <div class="switch-check">
                                                        <input type="checkbox" name="email_opt_in" class="check" data-foo="check" id="inputCheckEmail" checked>
                                                    </div>
                                                    <div class="description">
                                                        <p>By toggling this box, you agree Hydra Funding may email you about products and services that may be of interest to you. Opting out from receiving marketing emails will not stop nonmarketing email notifications related to your Hydra Funding loan applications</p>
                                                    </div>
                                                </div> -->
                                                <div class="switch-group">
                                                    <label for="inputCheckPhone">Phone</label>
                                                    <div class="switch-check">
                                                        <input type="checkbox" name="phone_opt_in" class="check" data-foo="check" id="inputCheckPhone" checked>
                                                    </div>
                                                </div>
                                                <div class="switch-group">
                                                    <label for="inputCheckText">Text</label>
                                                    <div class="switch-check">
                                                        <input type="checkbox" name="text_opt_in" class="check" data-foo="check" id="inputCheckText">
                                                    </div>
                                                    <div class="description">
                                                        <p>By toggling this box, you agree CLS Funding may periodically send text messages for nonmarketing and marketing purposes to telephone numbers provided in this application. Consent to these terms is not a condition to obtain a loan. Mobile rates may apply. You may opt-out at any time. <a href="../page/terms" target="_new">Terms and Conditions</a> | <a href="../page/privacy" target="_new">Privacy Policy</a>.</p>
                                                    </div>
                                                </div>
                                                <div class="with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end step-3-->
          </div>
        </div>
        </div>
        </div>
        <div class="sidebar">
        <div class="holder">
        <header class="header">
            <div class="logo-sidebar">
                <a href="/">
                    <img src="../assets/loanbuilder/images/logo.png" alt="">
                </a>
            </div>
        </header>
        <div class="frame">
            <div class="intro-ttl">
                <h2>Simply a Smarter Small Business Loan</h2>
            </div>
            <ul class="list-advice">
                <li>
                    <div class="ico">
                        <img src="../assets/loanbuilder/images/ico_fast.svg" width="55" height="56" alt="">
                    </div>
                    <div class="description">
                        <h4>Fast</h4>
                        <p>Apply in minutes<br> Funding as soon as 24 hours</p>
                    </div>
                </li>
                <li>
                    <div class="ico">
                        <img src="../assets/loanbuilder/images/ico_flexible.svg" width="40" height="40" alt="">
                    </div>
                    <div class="description">
                        <h4>Flexible</h4>
                        <p>From $5,000 to Unlimited<br> Terms up to 12 months</p>
                    </div>
                </li>
                <li>
                    <div class="ico">
                    <img src="../assets/loanbuilder/images/ico_simple.svg" width="55" height="55" alt=""> 
                    </div>
                    <div class="description">
                        <h4>Simple</h4>
                        <p>Competitive fixed rates<br> No collateral no surprises</p>
                    </div>
                </li>
            </ul>
        </div>
        </div>
        </div>
        </div>

        <?php include 'footer.php'; ?>

        <div class="modal modal-question fade" id="modal-question" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">X</span>
            </button>
            <div class="question-content">
                <span class="ico-question center big">
                    <span>?</span>
                </span>
                <h4>How to Find Your Bank Routing Number</h4>
                <p>You can find your bank routing number on your
                checks and deposit slips, usually on the bottom
                left (e.g. ⑆ 123456789 ⑆). You can also find on your
                bank’s website, or by contacting your bank directly.</p>
            </div>
        </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal modal-question fade" id="modal-question-social" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">X</span>
            </button>
            <div class="question-content">
                <span class="ico-question center big">
                    <span>?</span>
                </span>
                <h4>Why we need your SSN:</h4>
                <p>We need your social security number to verify your identity and run your credit check. We care about your privacy and use high-level security to protect your information.</p>
            </div>
        </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <script src="../assets/loanbuilder/js/jquery-3.2.1.min.js"></script>
        <script src="../assets/loanbuilder/js/bootstrap.min.js"></script>
        <script src="../assets/loanbuilder/js/bootstrap-custom.js"></script>
        <script src="../assets/loanbuilder/js/jquery.main.js"></script>



</body>
</html>