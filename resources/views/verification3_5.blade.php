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
<div class="knoop-loader-overlay">
    <div class="knoop-loader-inner">
        <h1>Hang on a second while we setup Kanoop for you</h1>
        <img src="img/preloader3.gif" alt="">
    </div>
</div>
<!-- Main end -->

</div><!--container-fluid -->
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/verification.js"></script>
<script type="text/javascript">
    window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "feed";

    }, 5000);
</script>
</body>
</html>