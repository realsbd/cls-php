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
<?php
 session_start();
 if (isset($_POST['home_address'])) {
 if (!empty($_SESSION['post'])){
 if (empty($_POST['home_address'])
 || empty($_POST['home_city'])){ 
 // Setting error for page 3.
 $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: general_information.php"); // Redirecting to third page.
 } else {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 } 
 extract($_SESSION['post']); // Function to extract array.
 $connection = new mysqli("localhost", "howtxxfi_clsadmin", "abimbolaAbimbola", "howtxxfi_clsloan", 2083);
//  $db = mysql_select_db("clsloan", $connection); // Storing values in database.
 $query = mysqli_query($connection, "insert into detail (first_name, last_name, email, cell_phone, business_name, monthly_revenue, time_in_business, industry, requested_amount, business_address, business_city, business_state, business_zip, business_phone, company_structure, ownership_percent, ein, bank_routing_number, bank_last_4_digits, business_website, home_address, home_city, home_state, home_zip, ssn, dob) values('$first_name', '$last_name', '$email', '$cell_phone', '$business_name', '$monthly_revenue', '$time_in_business', '$industry', '$requested_amount', '$business_address', '$business_city', '$business_state', '$business_zip', '$business_phone', '$company_structure', '$ownership_percent', '$ein', '$bank_routing_number', '$bank_last_4_digits', '$business_website', '$home_address', '$home_city', '$home_state', '$home_zip', '$ssn', '$dob')");
 if ($query) {
    // $subject = 'YOUR APPLICATION HAS BEEN RECIEVED';
    // $message = 'Thank you for showing interest, we are reviwing your application and one of our staff will get in touch with you within 24 hours. <br> Thank you';
    // $headers = 'From: no-reply@clsfunding.biz'; // Sender's Email
    // Message lines should not exceed 70 characters (PHP rule), so wrap it
    // $message = wordwrap($message, 70);
    // Send Mail By PHP Mail Function
    // mail($_SESSION['email'], $subject, $message, $headers);
    // echo '<h1>Form Submission successful</h1>';
 } else {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 } 
 unset($_SESSION['post']); // Destroying session.
 }
 } else {
 header("location: general_information.php"); // Redirecting to first page.
 }
 } else {
 header("location: general_information.php"); // Redirecting to first page.
 }
 ?>
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
                        <li class=""><span>Personal Information</span></li>
                        <li class="active"><span>Review</span></li>
                    </ul>
                    <div id="app" class="content-holder">
                    <!-- step-4-->
                    <div class="step-tab step-4">
                                <h2 class="ttl ttl-add">Let’s finalize your loan offer!</h2>
                                <div class="entry">
                                    <h4>To complete your application, we need to verify your business banking information.</h4>
                                    <p><strong>Why?</strong><br>This is the fastest, most secure way to verify the financial information you provided. It allows us to determine if you are eligible for a higher loan amount or lower rate, and ultimately it ensures you get the best possible loan for your business.</p>
                                    <div class="v-space"></div>
                                    <p><strong>How?</strong><br> This automated process is handled quickly and securely through our trusted verification partner. We will be able to review your bank statements, but we will not be able to view or access your login credentials.</p>
                                    <div class="v-space"></div>
                                    <p><strong>When?</strong><br> Right now! Click the “Verify Now” button below. Your information will be verified within 48 hours, and you will receive email from us for confirmation.</p>
                                    <div class="v-space"></div>
                                    <form class="form-validate-me" action="./review" method="post">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input">
                                                        <div class="btn-hold">
                                                            <a class="btn btn-primary" href="./success.php">VERIFY NOW</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="v-space"></div>
                                    <hr>
                                    <p><strong>Questions?</strong><br> If you have any questions about this process, or issues with logging in, please contact us at 1-567-233-9839 or support@Clsfunding.com.</p>
                                    <div class="v-space"></div>
                                </div>
                            </div>
                            <!-- end step-4-->
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