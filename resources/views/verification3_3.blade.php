<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <title>Verification Page</title>
    
    <link href='css/fonts/?family=Work+Sans:400,100,200,300,500,600,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
    <link type="text/css" rel="stylesheet" href="css/fonts.css" />
    <link type="text/css" rel="stylesheet" href="css/verification.css" />

    <script type="text/javascript" src="js/modernizr.min.js"></script>
    
    <!--[if lte IE 9]>
        <link type="text/css" rel="stylesheet" href="css/ie.css" />
        <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <![endif]-->

    <!--[if lte IE 8]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->    
</head>

<body class="chart-page noselect">

<div id="container-fluid">
<!-- Header start -->
<div class="knoop-header-wrap">
    <a href="#"><img src="img/knv2.png" alt=""></a>
</div>
<!-- Header end -->

<!-- Main start -->
<div class="knoop-main-wrap">
    <div class="knoop-main">
        <div class="knoop-step-main">
            <div class="knoop-mailing-top clearfix">
                <div class="knoop-mailing-left">
                    <span>Step 3 of 4</span>
                    <h3>Want to find friends and see who they follow?</h3>
                    <p>See who you already know on Twitter. Don't worry, we won't email your contacts without your permission.</p>
                </div>
                <div class="knoop-mailing-right">
                    <a class="mail-btn" href="verification3_4">Import contacts</a><a href="verification3_4">No thanks</a>
                </div>
            </div>
            <div class="knoop-mailing-mid">
                <p>Choose one to import contacts</p>
                <div class="knoop-mailing-sec clearfix">
                    <div class="knoop-mailing-info">
                        <input id="mail1" name="mail" value="mail1" type="radio">
                        <label for="mail1">
                            <div class="knoop-mailing-inner">
                                <img src="img/mail-icon1.png" alt="">
                            </div>
                            <i>Gmail</i>
                        </label>
                    </div>
                    <div class="knoop-mailing-info">
                        <input id="mail2" name="mail" value="mail2" type="radio">
                        <label for="mail2">
                            <div class="knoop-mailing-inner">
                                <img src="img/mail-icon2.png" alt="">
                            </div>
                            <i>Outlook</i>
                        </label>
                    </div>
                </div>
                <p><small>Choosing a service will open a window for you to log in securely and import your contacts to Twitter. You'll only find users who have allowed their accounts to be found by email address. We won't email anyone without your consent, but we may use contact information to make Who To Follow suggestions. You can remove your contacts from Twitter at any time.</small></p>
            </div>
        </div>
    </div>
</div>
<!-- Main end -->

</div><!--container-fluid -->
<script src="js/jquery.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/verification.js"></script>
<script>
    function nextVerify(){
        location.href="verification3_4";
    }
</script>
</body>
</html

