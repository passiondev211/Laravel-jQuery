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
    <link rel="stylesheet" href="css/owl.carousel.css">
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
                    <span style="text-transform: uppercase;">Final Step</span>
                    <h3>Make your timeline yours.</h3>
                    <p>Follow some of the accounts bellow and you'll see what they share in your timeline.</p>
                    <span class="span-search"><input type="text" placeholder="Search to add some one specific"><i class="material-icons">search</i></span>
                </div>
                <a href="javascript:nextVerify()" class="continue-btn">Follow 20 &amp; continue</a>
            </div>
            <div class="knoop-slider-main">
                <div class="knoop-slider-sec">
                    <h4 class="clearfix">Experiences <span><input id="sel-knoop1" checked="" type="checkbox"><label for="sel-knoop1">Select all</label></span></h4>
                    <div class="knoop-slider-inner">
                        <div class="owl-slider1 owl-carousel owl-theme">
                            @foreach ($otherUsers as $user)
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check{{$user->id}}">
                                        <label for="check{{$user->id}}">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="knoop-item-inner-bot">
                                        <h5><a href="#"><b>{{$user->fullname}}</b> <i class="material-icons">check_circle</i><span>{{$user->username}}</span></a></h5>
                                        <p>{{$user->getProfile()->description}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check2">
                                        <label for="check2">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> <i class="material-icons">check_circle</i><span>@idname</span></a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check3">
                                        <label for="check3">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> <i class="material-icons">check_circle</i><span>@idname</span></a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check4">
                                        <label for="check4">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> <i class="material-icons">check_circle</i><span>@idname</span></a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check5">
                                        <label for="check5">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> <i class="material-icons">check_circle</i><span>@idname</span></a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check6">
                                        <label for="check6">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> <i class="material-icons">check_circle</i><span>@idname</span></a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check7">
                                        <label for="check7">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> <i class="material-icons">check_circle</i><span>@idname</span></a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="knoop-slider-sec">
                    <h4 class="clearfix">Experiences <span><input id="sel-knoop2" checked="" type="checkbox"><label for="sel-knoop2">Select all</label></span></h4>
                    <div class="knoop-slider-inner">
                        <div class="owl-slider2 owl-carousel owl-theme">
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check1a">
                                        <label for="check1a">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="knoop-item-inner-bot">
                                        <h5><a href="#"><b>Name</b> <i class="material-icons">check_circle</i><span>@idname</span></a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check2a">
                                        <label for="check2a">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> <i class="material-icons">check_circle</i><span>@idname</span></a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check3a">
                                        <label for="check3a">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> <i class="material-icons">check_circle</i><span>@idname</span></a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check4a">
                                        <label for="check4a">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> <i class="material-icons">check_circle</i><span>@idname</span></a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check5a">
                                        <label for="check5a">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> <i class="material-icons">check_circle</i><span>@idname</span></a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check6a">
                                        <label for="check6a">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> <i class="material-icons">check_circle</i><span>@idname</span></a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check7a">
                                        <label for="check7a">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> <i class="material-icons">check_circle</i><span>@idname</span></a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="knoop-slider-sec">
                    <h4 class="clearfix">Experiences <span><input id="sel-knoop2" checked="" type="checkbox"><label for="sel-knoop2">Select all</label></span></h4>
                    <div class="knoop-slider-inner">
                        <div class="owl-slider3 owl-carousel owl-theme">
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check1b">
                                        <label for="check1b">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="knoop-item-inner-bot">
                                        <h5><a href="#"><b>Name</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check2b">
                                        <label for="check2b">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check3b">
                                        <label for="check3b">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check4b">
                                        <label for="check4b">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check5b">
                                        <label for="check5b">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check6b">
                                        <label for="check6b">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check7b">
                                        <label for="check7b">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="knoop-slider-sec">
                    <h4 class="clearfix">Experiences <span><input id="sel-knoop3" checked="" type="checkbox"><label for="sel-knoop3">Select all</label></span></h4>
                    <div class="knoop-slider-inner">
                        <div class="owl-slider3 owl-carousel owl-theme">
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check1c">
                                        <label for="check1c">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="knoop-item-inner-bot">
                                        <h5><a href="#"><b>Name</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check2c">
                                        <label for="check2c">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check3c">
                                        <label for="check3c">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check4c">
                                        <label for="check4c">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check5c">
                                        <label for="check5c">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check6c">
                                        <label for="check6c">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="knoop-item-inner">
                                    <div class="knoop-item-inner-top">
                                        <img src="img/slides.png" alt="">
                                        <input type="checkbox" id="check7c">
                                        <label for="check7c">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve">
                                              <path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4
                                                C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="knoop-item-inner-bot">
                                    <h5><a href="#"><b>Name</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main end -->

</div><!--container-fluid -->
<script src="js/jquery.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/verification.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.owl-slider1,.owl-slider3,.owl-slider4').owlCarousel({
          items : 4, //10 items above 1000px browser width
          itemsDesktop : [1000,5], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,3], // betweem 900px and 601px
          itemsTablet: [600,2], //2 items between 600 and 0
          itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
        });


        $('.owl-slider2').owlCarousel({
          items : 6, //10 items above 1000px browser width
          itemsDesktop : [1000,5], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,3], // betweem 900px and 601px
          itemsTablet: [600,2], //2 items between 600 and 0
          itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
        });
    })
</script>
<script>
    function nextVerify(){
        var formData = "";
        formData=formData+'fullname=' + localStorage.getItem('fullname');
        //alert(formData);
        formData=formData+'&email=' + localStorage.getItem('email');
        formData=formData+'&password=' + localStorage.getItem('password');
        formData=formData+'&username=' + localStorage.getItem('username');
        formData=formData+'&state=' + localStorage.getItem('state');
        formData=formData+'&phonenum=' + localStorage.getItem('phonenum');
        formData=formData+'&verifycode=' + "verifycode";
        $.ajax({
            url:'register',
            type:'POST',
            data:formData,
            success:function(data){
                location.href="verification3_5";
            },
            error:function(data){
            }
        });
    }
</script>
</body>
</html

