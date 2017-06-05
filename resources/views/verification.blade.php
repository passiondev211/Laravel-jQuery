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
        <div class="knoop-verify knoop-verify1">
            <div class="knoop-verify-inner">
                <h4>Enter your phone.</h4>
                <p>Your phone number keeps your account secure, connects you to friends and makes login easier.</p>
                <form action="">
                    <span class="span-select">
                        <select name="state" id="state">
                            <option value="1">United States</option>
                            <option value="2">United States</option>
                            <option value="3">United States</option>
                            <option value="4">United States</option>
                            <option value="5">United States</option>
                        </select>
                    </span>
                    <div class="num-verify"><i>+1</i><input type="text" name="phonenum" id="phonenum" ></div>
                    <button type="button">Next</button>
                    <a class="next-link" href="javascript:nextVerify()"></a>
                    <a href="verification3">Skip</a>
                </form>
                <p><small>We will text a verification code to this number. standard SMS free may apply. We will never display your phone number to other Twitter users. </small></p>
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
        state=document.getElementById("state").value;
        phonenum=document.getElementById("phonenum").value;
      if(state==null || state==""){
        $("#state").select();
        alert("Invalid state!");
        return;
      }
      if(phonenum==null || phonenum==""){
        $("#phonenum").select();
        alert("Invalid phonenum!");
        return;
      }
      if(!$.isNumeric($("#phonenum").val())){
        $("#phonenum").select();
        alert("Invalid phonenum!");
        return;
      }
        localStorage.setItem('state',state);
        localStorage.setItem('phonenum',phonenum);
        document.location.href='/verification2';
        //this.router.navigate(['/verification2']);
    }
</script>

</body>
</html>
