<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <title>Feed Page</title>
    
    <link href='css/fonts/?family=Work+Sans:400,100,200,300,500,600,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
    <link type="text/css" rel="stylesheet" href="css/fonts.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/datetimepicker.css" />
    <link rel="stylesheet" href="css/jqx.base.css" type="text/css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/style2.css" />
    <link type="text/css" rel="stylesheet" href="css/today.css" />
    


    <script type="text/javascript" src="js/modernizr.min.js"></script>
    
    <!--[if lte IE 9]>
        <link type="text/css" rel="stylesheet" href="css/ie.css" />
        <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <![endif]-->

    <!--[if lte IE 8]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->    
    <style type="text/css">

    </style>
</head>

<body id="feed-page" class="feed-page noselect">

<span class="tweet-active-btn"><i class="active material-icons">arrow_back</i><i class="material-icons">arrow_forward</i></span>

<div id="morphsearch" class="morphsearch container-fluid">
    <form class="morphsearch-form">
        <span class="magnify"></span>
        <input class="morphsearch-input" type="search" placeholder="Search">
        <button class="morphsearch-submit" type="submit">SEARCH</button>
    </form>
    <!-- /morphsearch-content -->
    <span class="morphsearch-close"></span>
    
</div><!-- /morphsearch --><!-- /container -->
<div class="overlay"></div>

<!--header start -->
<div id="header-wrap">
    <div class="container">
        <header id="header">
            <div class="header-left">
                <div class="clearfix">
                    <div class="header-btn-sec">
                        <span class="off-canvas-btn anim-icon gamburger"></span>
                        <a class="knoop-logo" href="feed"><!--<img class="cang-logo" src="img/cang-logo2.png" alt="">--><img class="logo-logo" src="img/logo-logo.png" alt=""></a>
                        <a href="create" data-toggle="tooltip" data-placement="bottom" title="Upload" class="btn-create">CREATE</a>
                    </div>
                </div>
            </div>
            <div class="header-right">
                <div class="clearfix">
                    <div class="ship_cart-outer">
                        <a href="#" class="ship_cart"><img src="img/tool-cart.png" alt=""><i>1</i></a>
                        <div class="cart-popup">
                            <img src="img/cart-product.jpg" alt="">
                            <p><i class="material-icons">check</i><span>1 item added</span></p>
                            <div class="cart-popup-sec"><a href="#">CART &amp; CHECKOUT ></a></div>
                        </div>
                    </div>
                    <span class="grid-btn"><a href="#"><b></b><!-- <i>Channels</i> --></a>
                        <span class="arrow-top"></span>
                    </span>
                    <div class="header-right-inner">
                        <a href="#"><i></i><img src="img/person-icon.png" alt=""></a>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>
<!--header end -->
<div id="container-fluid">


<!--App menu start -->
<div class="app-menu">
    <div class="app-menu-inner">
        <ul>
            <li><a href="#"><span class="app-img app-img1"></span><span class="app-info">Grocery</span></a></li>
            <li><a href="#"><span class="app-img app-img2"></span><span class="app-info">Home &amp; Garden</span></a></li>
            <li><a href="#"><span class="app-img app-img3"></span><span class="app-info">Health &amp; Beauty</span></a></li>
            <li><a href="#"><span class="app-img app-img4"></span><span class="app-info">Baby &amp; Toddler</span></a></li>
            <li><a href="#"><span class="app-img app-img5"></span><span class="app-info">Electronics</span></a></li>
            <li><a href="#"><span class="app-img app-img6"></span><span class="app-info">Pet Supplies</span></a></li>
            <li><a href="#"><span class="app-img app-img7"></span><span class="app-info">Arts &amp; <br>Entertainmanet</span></a></li>
            <li><a href="#"><span class="app-img app-img8"></span><span class="app-info">Apparel</span></a></li>
            <li><a href="#"><span class="app-img app-img9"></span><span class="app-info">Food</span></a></li>
            <li><a href="#"><span class="app-img app-img10"></span><span class="app-info">Office Supplies</span></a></li>
            <li><a href="#"><span class="app-img app-img11"></span><span class="app-info">Hardware</span></a></li>
            <li><a href="#"><span class="app-img app-img12"></span><span class="app-info">Toys &amp; Game</span></a></li>
        </ul>
    </div>
    <a href="#" class="app_more_btn">More</a>
</div>
<!--App menu end -->

<!--login menu start -->
<div class="login-menu">
    <div class="login-menu-inner clearfix">
        <div class="login-menu-sec">
            <h3>My Stuff</h3>
            <ul>
                <li><a href="#">Follow creators <mark>NEW</mark></a></li>
                <li><a href="#">Follow Facebook friends</a></li>
                <li><a href="#">Recommended for you</a></li>
                <li><a class="active" href="#">Messages</a></li>
                <li><a class="active" href="chart">Activity</a></li>
                <li><a href="profile">Profile</a></li>
                <li><a href="#">Backed project</a></li>
                <li><a href="#">My project</a></li>
                <li><a href="#">Saved project</a></li>
                <li><a class="lead-more" href="#">Learn more</a></li>
            </ul>
            <h3>settings</h3>
            <ul>
                <li><a href="#">Account</a></li>
                <li><a href="#">Edit profile</a></li>
                <li><a href="#">Notifications</a></li>
            </ul>
        </div>
        <div class="login-menu-sec login-menu-info">
            <h3>My Stuff</h3>
            <ul>
                <li><a href="#"><img src="img/login-img.jpg" alt=""><span>Backed project</span></a></li>
                <li><a href="#"><img src="img/login-img.jpg" alt=""><span>Backed project</span></a></li>
                <li><a href="#"><img src="img/login-img.jpg" alt=""><span>Backed project</span></a></li>
                <li><a href="#"><img src="img/login-img.jpg" alt=""><span>Backed project</span></a></li>
                <li><a href="#"><img src="img/login-img.jpg" alt=""><span>Backed project</span></a></li>
                <li><a href="#"><img src="img/login-img.jpg" alt=""><span>Backed project</span></a></li>
                <li><a href="#"><img src="img/login-img.jpg" alt=""><span>Backed project</span></a></li>
            </ul>
            <a href="#" class="add_btn">View all</a>
        </div>
        <div class="login-menu-sec login-menu-info">
            <h3>My Stuff</h3>
            <ul>
                <li><a href="#"><img src="img/login-img.jpg" alt=""><span>Backed project</span></a></li>
                <li><a href="#"><img src="img/login-img.jpg" alt=""><span>Backed project</span></a></li>
                <li><a href="#"><img src="img/login-img.jpg" alt=""><span>Backed project</span></a></li>
                <li><a href="#"><img src="img/login-img.jpg" alt=""><span>Backed project</span></a></li>
                <li><a href="#"><img src="img/login-img.jpg" alt=""><span>Backed project</span></a></li>
                <li><a href="#"><img src="img/login-img.jpg" alt=""><span>Backed project</span></a></li>
                <li><a href="#"><img src="img/login-img.jpg" alt=""><span>Backed project</span></a></li>
            </ul>
            <a href="#" class="add_btn">View all</a>
        </div>
    </div>
    <div class="login-info clearfix">
        <div class="login-inner">
            <div class="login-inner-fig"><img src="img/mikn-img.jpg" alt=""></div>
            <div class="login-inner-info">
                <h4>Michael<br><span>mykalmorton</span></h4>
            </div>
        </div>
        <p><a href="/">Log Out</a></p>
    </div>
</div>
<!--login menu end -->


<!--main start -->
<div id="main-wrap">
    <div class="chioce-sec">
        <span><i class="material-icons">close</i></span>
        <div class="container">
            <a href="#"><img src="img/choices.jpg" alt=""></a>
        </div>
    </div>
  <div class="container">
        <div id="main" class="main-row clearfix">
            <div class="tweet-wrap">
                <div class="tweet-profile">
                    <a href="profile" class="tweet-banner"></a>
                    <div class="tweet-sec">
                        <div class="tweet-inner clearfix">
                            <div class="tweet-fig"><a class="tweet-fig-link" data-toggle="tooltip" data-placement="top" title="Add an avatar" href="#"><img src="img/prof-img.png" alt=""></a>
                                <div class="uploader-image"><span><a class="upload-btn" href="#">Upload photo</a></span><span><a class="cancel-btn" href="#">Cancel</a></span></div>
                            </div>
                            <div class="tweet-info">
                                <div><a href="#"><b>mykal</b></a></div>
                                <a href="#"><span>@mykalmorton</span></a>
                            </div>
                        </div>
                        <ul class="clearfix">
                            <li><a href="#"><span>Kanoop</span><br><i>802</i></a></li>
                            <li><a href="#"><span>Following</span><br><i>201</i></a></li>
                            <li><a href="#"><span>Followers</span><br><i>344</i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="uploader-sec uploader-sec1 active">
                    <i class="uploader-close material-icons">close</i>
                    <div class="uploader-inner">
                        <h4>Pick a profile photo</h4>
                        <p>Have a favorite selfie? Upload it now.</p>
                        <div class="loader-outer">
                            <div class="loader-inner" style="width: 30%"></div>
                        </div>
                        <span>48% Complete</span>
                        <br>
                        <div class="loader-btn-sec"><button class="panding-btn" type="button">Skip</button><button type="button" class="add-photo-btn">Add a photo</button></div>
                    </div>
                </div>
                <div class="uploader-sec uploader-sec2">
                    <i class="uploader-close material-icons">close</i>
                    <div class="uploader-inner">
                        <h4>Introduce yourself</h4>
                        <p>Discribe who you are and what you're into.</p>
                        <textarea></textarea>
                        <div class="loader-outer">
                            <div class="loader-inner" style="width: 48%"></div>
                        </div>
                        <span>48% Complete</span>
                        <div class="loader-btn-sec"><button class="panding-btn" type="button">Skip</button><button class="panding-btn" type="button">Save</button></div>
                    </div>
                </div>
                <div class="uploader-sec uploader-sec3">
                    <i class="uploader-close material-icons">close</i>
                    <div class="uploader-inner">
                        <h4>Add your birthday</h4>
                        <p>Let Kanoop celebrate with you. Your are always in control of who can see it.</p>
                        <div class="uploader-select-sec">
                            <span>
                                <select name="" id="">
                                    <option value="">Month</option>
                                    <option value="">jan</option>
                                    <option value="">feb</option>
                                    <option value="">mar</option>
                                </select>
                            </span>
                            <span>
                                <select name="" id="">
                                    <option value="">Day</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </span>
                            <div class="uploader-select-inner">
                                <b class="dropdown-toggle">
                                    <i class="material-icons">arrow_drop_down</i>
                                    <strong class="glyphicon glyphicon-user"></strong>
                                </b>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Public <em class="material-icons">public</em></a></li>
                                    <li><a href="#">My followers <em class="material-icons">account_circle</em></a></li>
                                    <li><a href="#">People I follow <em class="material-icons">accessibility</em></a></li>
                                    <li><a href="#">We follow each other <em class="material-icons">compare_arrows</em></a></li>
                                    <li><a href="#">Only me <em class="material-icons">lock</em></a></li>
                                    <li><a href="#">Learn more about these settings</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="uploader-select-sec">
                            <span>
                                <select name="" id="">
                                    <option value="">Year</option>
                                    <option value="">2010</option>
                                    <option value="">2011</option>
                                    <option value="">2012</option>
                                </select>
                            </span>
                            <div class="uploader-select-inner">
                                <b class="dropdown-toggle">
                                    <i class="material-icons">arrow_drop_down</i>
                                    <strong class="glyphicon glyphicon-user"></strong>
                                </b>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Public <em class="material-icons">public</em></a></li>
                                    <li><a href="#">My followers <em class="material-icons">account_circle</em></a></li>
                                    <li><a href="#">People I follow <em class="material-icons">accessibility</em></a></li>
                                    <li><a href="#">We follow each other <em class="material-icons">compare_arrows</em></a></li>
                                    <li><a href="#">Only me <em class="material-icons">lock</em></a></li>
                                    <li><a href="#">Learn more about these settings</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="loader-outer">
                            <div class="loader-inner" style="width: 65%"></div>
                        </div>
                        <span>65% Complete</span>
                        <div class="loader-btn-sec"><button class="panding-btn" type="button">Skip</button><button class="panding-btn" type="button">Save</button></div>
                    </div>
                </div>
                <div class="uploader-sec uploader-sec4">
                    <i class="uploader-close material-icons">close</i>
                    <div class="uploader-inner">
                        <h4>Where do you live?</h4>
                        <p>Find people in the same location as you.</p>
                        <input type="text" placeholder="Location">
                        <input id="pac-input" class="controls" type="text" placeholder="Location">
                        <div id="map"></div>
                        <!-- Replace the value of the key parameter with your own API key. -->
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkUOdZ5y7hMm0yrcCQoCvLwzdM6M8s5qk&libraries=places&callback=initAutocomplete" async defer></script>
                        <script type="text/javascript">
                            function initAutocomplete() {
                              var map = new google.maps.Map(document.getElementById('map'), {
                                center: {lat: -33.8688, lng: 151.2195},
                                zoom: 13,
                                mapTypeId: 'roadmap'
                              });

                              // Create the search box and link it to the UI element.
                              var input = document.getElementById('pac-input');
                              var searchBox = new google.maps.places.SearchBox(input);
                              map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                              // Bias the SearchBox results towards current map's viewport.
                              map.addListener('bounds_changed', function() {
                                searchBox.setBounds(map.getBounds());
                              });

                              var markers = [];
                              // Listen for the event fired when the user selects a prediction and retrieve
                              // more details for that place.
                              searchBox.addListener('places_changed', function() {
                                var places = searchBox.getPlaces();

                                if (places.length == 0) {
                                  return;
                                }

                                // Clear out the old markers.
                                markers.forEach(function(marker) {
                                  marker.setMap(null);
                                });
                                markers = [];

                                // For each place, get the icon, name and location.
                                var bounds = new google.maps.LatLngBounds();
                                places.forEach(function(place) {
                                  if (!place.geometry) {
                                    console.log("Returned place contains no geometry");
                                    return;
                                  }
                                  var icon = {
                                    url: place.icon,
                                    size: new google.maps.Size(71, 71),
                                    origin: new google.maps.Point(0, 0),
                                    anchor: new google.maps.Point(17, 34),
                                    scaledSize: new google.maps.Size(25, 25)
                                  };

                                  // Create a marker for each place.
                                  markers.push(new google.maps.Marker({
                                    map: map,
                                    icon: icon,
                                    title: place.name,
                                    position: place.geometry.location
                                  }));

                                  if (place.geometry.viewport) {
                                    // Only geocodes have viewport.
                                    bounds.union(place.geometry.viewport);
                                  } else {
                                    bounds.extend(place.geometry.location);
                                  }
                                });
                                map.fitBounds(bounds);
                              });
                            }
                        </script>
                        <div class="loader-outer">
                            <div class="loader-inner" style="width: 83%"></div>
                        </div>
                        <span>83% Complete</span>
                        <div class="loader-btn-sec"><button class="panding-btn" type="button">Skip</button><button class="panding-btn" type="button">Save</button></div>
                    </div>
                </div>
                <div class="uploader-sec uploader-sec5">
                    <i class="uploader-close material-icons">close</i>
                    <div class="uploader-comp">
                        <img src="img/comp-img.png" alt="">
                        <h3>Awesome - Your profile is complete! You can always make changes later.</h3>
                        <a href="#">See my profile</a>
                    </div>
                </div>
                <div class="tweet-profile tweet-follower">
                    <a href="#">1 new follower request</a>
                </div>
                <div class="trending-sec">
                    <h4>trending</h4>
                    <ul>
                        <li><a href="#" class="buzz-item">Fancy Designer</a><div class="fancy_popup"><p><img src="img/cir-buzz.jpg" alt=""><span>fancy gift card</span></p>
                        <a href="#"><img src="img/buzz-img.jpg" alt=""></a>
                        <a href="#" class="buzz-btn">view item</a></div></li>
                        <li><a href="#" class="buzz-item">Fancy Watch</a><div class="fancy_popup"><p><img src="img/cir-buzz.jpg" alt=""><span>fancy gift card</span></p>
                        <a href="#"><img src="img/buzz-img.jpg" alt=""></a>
                        <a href="#" class="buzz-btn">view item</a></div></li>
                        <li><a href="#" class="buzz-item">Designer Watch</a><div class="fancy_popup"><p><img src="img/cir-buzz.jpg" alt=""><span>fancy gift card</span></p>
                        <a href="#"><img src="img/buzz-img.jpg" alt=""></a>
                        <a href="#" class="buzz-btn">view item</a></div></li>
                        <li><a href="#" class="buzz-item">Watch</a><div class="fancy_popup"><p><img src="img/cir-buzz.jpg" alt=""><span>fancy gift card</span></p>
                        <a href="#"><img src="img/buzz-img.jpg" alt=""></a>
                        <a href="#" class="buzz-btn">view item</a></div></li>
                        <li><a href="#" class="buzz-item">Designer</a><div class="fancy_popup"><p><img src="img/cir-buzz.jpg" alt=""><span>fancy gift card</span></p>
                        <a href="#"><img src="img/buzz-img.jpg" alt=""></a>
                        <a href="#" class="buzz-btn">view item</a></div></li>
                        <li><a href="#" class="buzz-item">Fancy</a><div class="fancy_popup"><p><img src="img/cir-buzz.jpg" alt=""><span>fancy gift card</span></p>
                        <a href="#"><img src="img/buzz-img.jpg" alt=""></a>
                        <a href="#" class="buzz-btn">view item</a></div></li>
                        <li><a href="#" class="buzz-item">Watch Designer</a><div class="fancy_popup"><p><img src="img/cir-buzz.jpg" alt=""><span>fancy gift card</span></p>
                        <a href="#"><img src="img/buzz-img.jpg" alt=""></a>
                        <a href="#" class="buzz-btn">view item</a></div></li>
                        <li><a href="#" class="buzz-item">Watch Fancy</a><div class="fancy_popup"><p><img src="img/cir-buzz.jpg" alt=""><span>fancy gift card</span></p>
                        <a href="#"><img src="img/buzz-img.jpg" alt=""></a>
                        <a href="#" class="buzz-btn">view item</a></div></li>
                        <li><a href="#" class="buzz-item">Fancy Designer Watch</a><div class="fancy_popup"><p><img src="img/cir-buzz.jpg" alt=""><span>fancy gift card</span></p>
                        <a href="#"><img src="img/buzz-img.jpg" alt=""></a>
                        <a href="#" class="buzz-btn">view item</a></div></li>
                    </ul>
                </div>
            </div>
            <div class="tweet-sidebar">
                <div class="tweet-side-channel">
                    <span class="nav-tabs-close"><i class="material-icons">close</i></span>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane" id="home">
                            <div class="tweet-mid-sec">
                                <div class="tweet-mid-info">
                                    <h2 style="border-left-color: #dbe0e6; background: #ebeef1; color: #99aabb;">Recent Stats</h2>
                                    <table>
                                        <tr>
                                            <th>Dates</th>
                                            <th style="color: #05B3F2">Plays</th>
                                            <th style="color: #93C94D">Finishes</th>
                                            <th style="color: #FF4E50">Likes</th>
                                        </tr>
                                        <tr>
                                            <td>Fri, Sep 23</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Sat, Sep 24</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Sun, Sep 25</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Mon, Sep 26</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Tue, Sep 27</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Wed, Sep 28</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <th>Totals: </th>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                    </table>
                                    <small>+ View status dashboard</small>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="tweet-mid-sec">
                                <div class="tweet-mid-info">
                                    <h2 style="border-left-color: #bce6ff; background: #daf1ff; color: #44bbff;">my people</h2>
                                    <div class="suggest-sec"><a href="#">find Friends</a><span>|</span><a href="#">invite Friends</a><span>|</span><a href="#">suggested people</a></div>
                                    <div class="adds-sec"><a href="#"><img src="img/adds-img1.jpg" alt=""></a></div>
                                </div>
                                <div class="tweet-person-sec">
                                    <a href="#"><img src="img/tweet-person.png" alt=""><span>Find people you know</span></a>
                                </div>
                            </div>
                            <div class="tweet-mid-sec">
                                <div class="tweet-mid-info">
                                    <h2>What's new</h2>
                                    <div class="tweet-sec-info">
                                        <img src="img/chat-img10.jpg" alt="">
                                        <h4>Best of staff Pick: August 2016</h4>
                                        <p><span>posted in</span> Now Playing</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur,</p>
                                    </div>
                                    <div class="tweet-sec-info">
                                        <img src="img/chat-img10.jpg" alt="">
                                        <h4>Best of staff Pick: August 2016</h4>
                                        <p><span>posted in</span> Now Playing</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur,</p>
                                    </div>
                                </div>
                            </div>
                            <div class="newsletter-sec">
                                <div class="newsletter-top">
                                    <h4>newsletter <i class="material-icons">close</i></h4>
                                </div>
                                <div class="newsletter-bot">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <form>
                                        <input type="email" placeholder="Email address"><button type="button">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article-sidebar">
                    <div class="article-sidebar-top">
                        <h4>Articles</h4>
                    </div>
                    <div class="article-sidebar-bottom">
                        <div class="article-sidebar-select clearfix">
                            <div class="article-sidebar-select-left">
                                <h5>Popular</h5>
                            </div>
                            <div class="article-sidebar-select-right">
                                <span class="dropdown-toggle">other <i class="material-icons">expand_more</i></span>
                                <ul class="dropdown-menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li role="separator" class="divider"></li> <li><a href="#">Separated link</a></li> </ul>
                            </div>
                        </div>
                        <div class="article-sidebar-sec clearfix">
                            <div class="article-sidebar-info"><a href="#"><img src="img/block-img3.jpg"></a></div>
                            <div class="article-sidebar-info"><a href="#"><img src="img/block-img3.jpg"></a></div>
                            <div class="article-sidebar-info"><a href="#"><img src="img/block-img3.jpg"></a></div>
                            <div class="article-sidebar-info"><a href="#"><img src="img/block-img3.jpg"></a></div>
                            <div class="article-sidebar-info"><a href="#"><img src="img/block-img3.jpg"></a></div>
                            <div class="article-sidebar-info"><a href="#"><img src="img/block-img3.jpg"></a></div>
                        </div>
                        <div class="article-sidebar-btn"><a href="#">See More</a></div>
                    </div>
                    <div class="flex-module">
                        <div class="flex-module-inner">
                            <ul class="clearfix">
                                <li class="Footer-item Footer-copyright copyright">© 2016 Kanoop</li>
                                <li class="Footer-item"><a class="Footer-link" href="#">About</a></li>
                                <li class="Footer-item"><a class="Footer-link" href="#">Help</a></li>
                                <li class="Footer-item"><a class="Footer-link" href="#">Terms</a></li>
                                <li class="Footer-item"><a class="Footer-link" href="#">Privacy</a></li>
                                <li class="Footer-item"><a class="Footer-link" href="#">Cookies</a></li>
                                <li class="Footer-item"><a class="Footer-link" href="#">Ads info</a></li>
                                <li class="Footer-item"><a class="Footer-link" href="#">Brand</a></li>
                                <li class="Footer-item"><a class="Footer-link" href="#">Blog</a></li>
                                <li class="Footer-item"><a class="Footer-link" href="#">Status</a></li>
                                <li class="Footer-item"><a class="Footer-link" href="#">Apps</a></li>
                                <li class="Footer-item"><a class="Footer-link" href="#">Jobs</a></li>
                                <li class="Footer-item"><a class="Footer-link" href="#">Advertise</a></li>
                                <li class="Footer-item"><a class="Footer-link" href="#">Businesses</a></li>
                                <li class="Footer-item"><a class="Footer-link" href="#">Media</a></li>
                                <li class="Footer-item"><a class="Footer-link" href="#">Developers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="off-canvas mCustomScrollbar">
                <div class="off-canvas-inner">
                    <a href="#"><img src="img/knv3.png" alt=""></a>
                    <ul>
                        <li><label>HOME</label></li>
                        <li><a href="profile"><img src="img/782326615316656128.png" alt=""><span>Profile</span></a></li>
                        <li><a href="#"><img src="img/canvas-icon21.png" alt=""><span>Featured</span></a></li>
                        <li><a href="#"><img src="img/canvas-icon22.png" alt=""><span>Recommended</span></a></li>
                        <li><a class="active buzz-item" href="map"><img src="img/icon_global.5d8be612bb70.gif" alt=""><span>Global Activity</span></a>
                            <div class="fancy_popup"><a href="map"><img src="img/activitymap-globe.svg" alt=""></a><a href="map" target="_blank" class="buzz-btn">view Global Activity</a></div>
                        </li>
                        <li><a href="welcome"><img src="img/canvas-icon37.png" alt=""><span>Subscribe</span></a></li>
                    </ul>
                    <li class="off-canvas-saperate"></li>
                    <ul>
                        <li><label>SHOP</label></li>
                        <li><a class="search-active-btn" href="#"><img src="img/canvas-icon24.png" alt=""><span>Explore</span></a></li>
                        <li><a href="#"><img src="img/canvas-icon25.png" alt=""><span>Collections</span></a></li>
                        <li><a href="#"><img src="img/canvas-icon26.png" alt=""><span>Popular Products</span></a></li>
                        <li><a href="#"><img src="img/canvas-icon27.png" alt=""><span>New Products</span></a></li>
                        <li><a href="#"><img src="img/canvas-icon28.png" alt=""><span>Editors' Picks</span></a></li>
                        <li><a href="#"><img src="img/canvas-icon29.png" alt=""><span>On Sale</span></a></li>
                    </ul>
                    <li class="off-canvas-saperate"></li>
                    <ul>
                        <li><label>browser</label></li>
                        <li><a href="#"><img src="img/canvas-icon30.png" alt=""><span>Men</span></a></li>
                        <li><a href="#"><img src="img/canvas-icon31.png" alt=""><span>Women</span></a></li>
                        <li><a href="#"><img src="img/canvas-icon32.png" alt=""><span>Home</span></a></li>
                        <li><a href="#"><img src="img/canvas-icon33.png" alt=""><span>Kids</span></a></li>
                        <li><a href="#"><img src="img/canvas-icon34.png" alt=""><span>Gadgets</span></a></li>
                        <li><a href="#"><img src="img/canvas-icon35.png" alt=""><span>Pets</span></a></li>
                        <li><a href="#"><img src="img/canvas-icon36.png" alt=""><span>Art</span></a></li><!-- 
                        <li><a href="#"><img src="img/canvas-icon37.png" alt=""><span>Global Activity</span></a></li> -->
                    </ul>
                    <li class="off-canvas-saperate"></li>
                </div>
            </div>
          <section id="contents">
                <div class="re-confirm-popup">
                    <span class="re-confirm-close material-icons">close</span>
                    <div class="re-confirm-inner">
                        <p>Confirm your email address to access all of Kanoop's features. A confirmation message was sent to</p>
                        <p><b>mykalmorton@gmail.com</b></p>
                        <p><button>Resend confirmation</button><a href="#">Update email address</a> <a href="#">. Learn more</a></p>
                    </div>
                </div>
                <div class="block-textarea-outer">
                    <div class="sidebar-inner-overlay"></div>
                    <div class="block-textarea-wrap clearfix">
                        <div class="block-form-wrap">
                            <form id="postForm" name="postForm">
                                <div class="block-textarea-left">
                                    <div class="expander-info uploader-select-inner">
                                        <a href="#" class="icon-swicher expander dropdown-toggle"><!-- expander-->
                                            <!--<b class="dropdown-toggle"> -->
                                                <i class="material-icons">select_all</i>
                                                </a>
                                            <!-- </b> -->
                                            <ul class="dropdown-menu" style="left: -10px;">
                                                <li><a href="#">Public <em class="material-icons">public</em></a></li>
                                                <li><a href="#">My followers <em class="material-icons">account_circle</em></a></li>
                                                <li><a href="#">People I follow <em class="material-icons">accessibility</em></a></li>
                                                <li><a href="#">We follow each other <em class="material-icons">compare_arrows</em></a></li>
                                                <li><a href="#">Only me <em class="material-icons">lock</em></a></li>
                                                <li><a href="#">Learn more about these settings</a></li>
                                            </ul>
                                        <div class="uploader-select-inner">
                                        </div>
                                    </div>
                                </div>
                                <span><a class="cammal1 photo-link" href="#"><i data-toggle="tooltip" data-placement="top" title="Media" class="material-icons">photo_camera</i></a>
                                <input class="post-title" type="text" id="title" name="title" placeholder="Title your Moment">
                                <textarea id="content" name="content" placeholder="What's happening?">What's happening?</textarea></span>
                                <div class="icon-sec clearfix ">
                                    <!--<button type="submit">Send</button>-->
                                    <div class="icon-block">
                                        <font>
                                            <a data-toggle="tooltip" data-placement="top" title="Media" class="cammal1" href="#"><i class="material-icons">photo_camera</i><!--  <b>Media</b> --></a> 
                                            <a data-toggle="tooltip" data-placement="top" title="Poll" class="cammal3" href="#"><i class="material-icons">poll</i><!--  <b>Poll</b> --></a>
                                            <a data-toggle="tooltip" data-placement="top" title="Live" class="cammal4" href="#"><i class="material-icons">live_tv</i><!--  <b>Live</b> --></a>
                                        </font>
                                    </div>
                                    <div class="icon-sec-right uploader-select-inner">
                                        <a class="cammal2 dropdown-toggle" href="#">
                                            <i class="material-icons">location_on</i> <b>Location</b>
                                        </a>
                                        <!-- location -->
                                        <ul class="dropdown-menu locations">
                                            <li class="first"><i class="material-icons">search</i><input type="search" placeholder="Search for a neighborhood or city"></li>
                                            <li><i class="material-icons">done</i><a href="#">United States</a></li>
                                            <li><a href="#">Gladstone, MO</a></li>
                                            <li><a href="#">Missouri, USA</a></li>
                                            <li><a href="#">Oakview, MO</a></li>
                                            <li class="last"><i class="material-icons">close</i><a href="#">Turn off location</a></li>
                                        </ul>
                                        <!-- location -->
                                        
                                        <button class="post-btn btn btn-muted" disabled="disabled" type="button" onclick="uploadPost()">Post</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="block-end"></div> -->
                <div class="kanoop-outer-sec">
                    <div class="kanoop-sec">
                        <a href="#" class="view-bar">View 2 new postings</a>
                        <div class="block-info mainBody">
                            <div class="block-inner"  id="newMedia"></div>
                            <div class="block-inner">
                                <div class="block-add" style="display:none">
                                    <div class="block-left">
                                        <div class="block-left-inner">
                                            <div class="slider-vertical ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="height: 86.9565%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="bottom: 86.9565%;"><em>20</em><i class="dropdown-toggle">hour ago</i><ul class="dropdown-menu"><li>Hours</li><li>Days</li><li>Months</li></ul></span></div>
                                        </div>
                                    </div>
                                    <div class="block-outer">
                                        <div class="block-post">
                                            <div class="feed-top-sec clearfix">
                                                <div class="feed-top-left">
                                                    <div class="feed-top-left-inner">
                                                        <div class="feed-top-left-fig">
                                                            <img src="img/tweet-fig.png">
                                                            
                                                            <div class="feed-person-sec feed-upper-sec tweet-wrap">
                                                                <i class="material-icons feed-person-close">close</i>
                                                                <div class="tweet-profile">
                                                                    <a href="profile" class="tweet-banner"></a>
                                                                    <div class="tweet-sec">
                                                                        <div class="tweet-inner clearfix">
                                                                            <div class="tweet-fig"><a class="tweet-fig-link" href="#"><img src="img/tweet-fig.png"></a>
                                                                            </div>
                                                                            <div class="tweet-info">
                                                                                <div class="feed-banner-botsocial">
                                                                                    <a href="#"><i class="material-icons">person_add</i></a>
                                                                                </div>
                                                                                <div><a href="#"><b>mykal</b></a></div>
                                                                                <a href="#"><span>@mykalmorton</span></a>
                                                                                
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                        <p>
                                                                            <ul class="clearfix">
                                                                                <li><a href="#"><span>Kanoop</span><br><i>802</i></a></li>
                                                                                <li><a href="#"><span>Following</span><br><i>201</i></a></li>
                                                                                <li><a href="#"><span>Followers</span><br><i>344</i></a></li>
                                                                            </ul>
                                                                        </p>
                                                                        <!-- <hr>
                                                                        <p>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </p> -->
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!--<div class="feed-upper-sec">
                                                                    <div class="feed-upper-banner">
                                                                        <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                    </div>
                                                                    <div class="feed-banner-botsec">
                                                                        <div class="clearfix">
                                                                            <div class="feed-banner-botinfo">
                                                                                <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                                <h3>mykal <span>@mykalmorton</span></h3>
                                                                            </div>
                                                                            <div class="feed-banner-botsocial">
                                                                                <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                            </div>
                                                                        </div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                    </div>
                                                                    <div class="follow-sec clearfix">
                                                                        <div class="follow-left-sec">
                                                                            <span>200</span><i>Connections</i>
                                                                        </div>
                                                                        <div class="follow-right-sec">
                                                                            <span>1.9M</span><i>Followers</i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-lower-sec">
                                                                    <h3><i>- Famous Recipes -</i></h3>
                                                                    <div class="feed-inner-sec clearfix">
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    </div>
                                                                    <a class="more-btn" href="#">more</a>
                                                                </div>
                                                            </div>-->
                                                        </div>
                                                        <div class="feed-top-left-info clearfix">
                                                            <div class="feed-top-left-info-drop">
                                                                <a href="#">Health & Beauty</a>
                                                                <div class="feed-top-left-dropmenu">
                                                                    <h3><span>Health & Beauty</span><a href="#">View All ></a></h3>
                                                                    <div class="feed-top-dropmenu-inner clearfix">
                                                                        <div class="feed-top-dropmenu-info">
                                                                            <div class="feed-top-dropmenu-info-step">
                                                                                <h4>PERSONAL CARE <i class="material-icons">chevron_right</i></h4>
                                                                                <ul>
                                                                                    <li><a href="#">Cosmetics</a></li>
                                                                                    <li><a href="#">Oral Care</a></li>
                                                                                    <li><a href="#">Hair Care</a></li>
                                                                                    <li><a href="#">Shaving & Grooming</a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="feed-top-dropmenu-info-step">
                                                                                <h4>HEALTH CARE <i class="material-icons">chevron_right</i></h3>
                                                                                <ul>
                                                                                    <li><a href="#">Fitness & Nutrion</a></li>
                                                                                    <li><a href="#">Medecine & Drugs</a></li>
                                                                                    <li><a href="#">Biometric Monitors</a></li>
                                                                                    <li><a href="#">First Aid</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-top-left-info-data"><span>Cosmetics</span></div>
                                                            <div class="feed-top-info-name">
                                                                <a href="#">Akilli M. Johnson</a><span>@akilimjonson<span>
                                                            </div>
                                                        </div>
                                                        <!--<p>February 22 at 7:20 am </p>-->
                                                    </div>
                                                </div>
                                                <div class="feed-top-right">
                                                    <a class="lock-link" data-toggle="tooltip" data-placement="top" title="subscribe now to repost" href="welcome"><small class="default material-icons">lock</small><small class="hover material-icons">lock_outline</small><small class="active material-icons">lock_open</small></a>
                                                    <i class="dropdown-toggle material-icons pen-btn">sort</i>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><i class="material-icons">visibility_off</i><span>I don't want to see this</span></a></li>
                                                        <li><a href="#"><i class="material-icons">subject</i><span>Hide all for Chris Beek</span></a></li>
                                                        <li><a href="#"><i class="material-icons">flag</i><span>Report abuse</span></a></li>
                                                        <li><a href="#"><i class="material-icons">remove_circle</i><span>Remove connection</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="video-wrap active">
                                                <span class="outer-shadow"></span><span class="top-left-shadow"></span>
                                                <div class="video-sec">
                                                    <!-- <img src="img/article-img1.jpg" alt=""> -->
                                                    <video preload="none" poster="img/article-img1.jpg" src="https://ksr-video.imgix.net/projects/2134136/video-648124-h264_high.mp4"></video>
                                                    <div class="time_left"></div>
                                                    <div class="volume_cont"></div>
                                                    <span class="play_btn"></span>
                                                </div>
                                            </div>
                                            <div class="feed-heading-wrap clearfix">
                                                <div class="feed-heading-left">
                                                    <div class="feed-heading-sec">
                                                        <a href="#formSidebar" class="cart-menubtn"><i class="material-icons">lock</i><span>$100</span></a>
                                                        <div class="drop-down-hover">
                                                            <span>A <b>20% referral</b> payout</span>
                                                        </div>
                                                        <div class="drop-down-click">
                                                            <h3>Stainless Case with Etoupe Swift</h3>
                                                        <p><span class="comm-span">20% commision</span><button class="btn btn-block v-prod">View Product</button></p>
                                                            <p><button class="btn btn-block btn-success">Add to cart</button></p>
                                                            <p><button class="btn btn-block purchase-btn"><span class="price-on-btn"><i class="material-icons">lock</i><span> $100</span></span>Purchase</button></p>
                                                        </div>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#"><i class="material-icons">visibility_off</i><span>I don't want to see this</span></a></li>
                                                            <li><a href="#"><i class="material-icons">subject</i><span>Hide all for Chris Beek</span></a></li>
                                                            <li><a href="#"><i class="material-icons">flag</i><span>Report abuse</span></a></li>
                                                            <li><a href="#"><i class="material-icons">remove_circle</i><span>Remove connection</span></a></li>
                                                        </ul>
                                                        <h2 class="feed-title">The photography of Trump's presidency is a huge break Obama's<!--<span class="clip-marker"><img src="img/clip-icon.png" alt=""></span>--></h2>
                                                        <!--<p><i>$319.00</i> <em>USD + Shopping Cost</em></p>-->
                                                    </div>
                                                </div>
                                                <div class="feed-heading-right">
                                                    <span class="star-sec">
                                                    <div class="green-circle">8.9</div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="block-info-sec">
                                                <h4>Description</h4>
                                                <p>I bet you didn't think you could make cookies using the Anova Precision Cooker. Sous vide cookies might look a little different than the typical oven recipe — here I've cooked the batter in small canning jars and then cut the results into round bars — but they're far more fun to make. You can't just use any dough recipe <br><br><a href="#">bizjournals.com</a></p>
                                                <div class="expand-sec expand-sec-first">
                                                    <div class="comment-bar">
                                                        <span>14 Comments</span>
                                                    </div>
                                                    <div class="expand-left-sec">
                                                        <div class="visible-active">
                                                            <span class="chat-btn active"><i class="material-icons">chat</i></span><span><i class="equalizerBtn material-icons" data-toggle="tooltip" data-placement="top" title="Product Statistics">equalizer</i></span><span data-toggle="tooltip" data-placement="top" title="I like it" class="heart-sec"><i class="anim-icon heart"></i> 14</span>
                                                        </div>
                                                        <div class="hide-active">
                                                            <nobr><span class="favorite-no">
                                                            <i class="material-icons">favorite</i>
                                                             <span class="favorite-count">Saved 23</span></span></nobr>
                                                        </div>
                                                            <div class="hide-active">
                                                            <nobr><span class="comments-no">
                                                            <label class="comm-name">Discussion</label>
                                                            <label class="comm-count">896</label></span></nobr>
                                                            </div>
                                                            <!-- <div class="hide-active">
                                                            <nobr><span class="comments-no">
                                                            <label class="comm-name">Share</label>
                                                            </span></nobr>
                                                            </div> -->
                                                    </div>
                                                    <div class="expand-right-sec">
                                                        <div class="visible-active">
                                                            <a class="dropdown-toggle" href="#">Sort by Best <i class="material-icons">arrow_drop_down</i></a>
                                                            <ul class="dropdown-menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li role="separator" class="divider"></li> <li><a href="#">Separated link</a></li> </ul>
                                                        </div>
                                                        <div class="hide-active">
                                                            <span class="first-firm"><i data-toggle="tooltip" data-placement="top" title="2 day left" class="material-icons">watch_later</i></span>
                                                            <span class="first-firm"><i class="equalizerBtn material-icons" data-toggle="tooltip" data-placement="top" title="Product Statistics">equalizer</i></span>
                                                            <!-- <span class="heart-sec"><font data-toggle="tooltip" data-placement="top" title="I like it" ><i class="anim-icon heart"></i></font> 14k</span> -->
                                                            <!-- <span class="first-firm record-btn"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="2 day left">more_horiz</i></span> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-chat-wrap">
                                                <div class="comment-chat-bar">
                                                    <form class="pushing-form">
                                                        <a href="#"><img src="img/jeff.jpg" alt=""></a>
                                                        <span><i class="anim-icon camera"></i><textarea placeholder="What do you want to share?"></textarea></span>
                                                        <div class="icon-sec clearfix">
                                                            <button type="submit">Send</button>
                                                            <div class="icon-sec-right">
                                                                <a class="cammal1" href="#"><i class="material-icons">photo_camera</i> <b>media</b></a>
                                                                <a class="cammal2" href="#"><i class="material-icons">location_on</i> <b>Location</b></a>
                                                                <a class="cammal3" href="#"><i class="material-icons">unarchive</i> <b>Poll</b></a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="clearfix">
                                                    <div class="comment-beging">
                                                        <img src="img/opc-ajax-loader.gif" alt=""><span>A friend in typing a comment...</span>
                                                    </div>
                                                    <div class="comment-beging-right">Mention person or store with "@" in your comment.</div>
                                                </div>

                                                <div class="comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span class="heart-sec"><i class="anim-icon heart"></i> 14</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-chat-inner">
                                                    <a href="#" class="show-btn one">5 responses to "julia frauche's" comment . 4 contributors</a>
                                                    <div class="comment-chat-sec">
                                                        <div class="comment-chat-fig">
                                                            <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                            <div class="feed-person-sec">
                                                                <!-- <span class="clip-btn"></span> -->
                                                                <div class="feed-upper-sec">
                                                                    <div class="feed-upper-banner">
                                                                        <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                    </div>
                                                                    <div class="feed-banner-botsec">
                                                                        <div class="clearfix">
                                                                            <div class="feed-banner-botinfo">
                                                                                <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                                <h3>mykal <span>@mykalmorton</span></h3>
                                                                            </div>
                                                                            <div class="feed-banner-botsocial">
                                                                                <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                            </div>
                                                                        </div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                    </div>
                                                                    <div class="follow-sec clearfix">
                                                                        <div class="follow-left-sec">
                                                                            <span>200</span><i>Connections</i>
                                                                        </div>
                                                                        <div class="follow-right-sec">
                                                                            <span>1.9M</span><i>Followers</i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-lower-sec">
                                                                    <h3><i>- Famous Recipes -</i></h3>
                                                                    <div class="feed-inner-sec clearfix">
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    </div>
                                                                    <a class="more-btn" href="#">more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-chat-info">
                                                            <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span class="heart-sec"><i class="anim-icon heart"></i> 14</span></h4>
                                                            <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                            <div class="clearfix">
                                                                <div class="share-reply share-reply-left">
                                                                    <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                                </div>
                                                                <div class="share-reply">
                                                                    <a href="#">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="latest-comment-chat comment-chat-sec">
                                                        <div class="comment-chat-fig">
                                                            <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                            <div class="feed-person-sec">
                                                                <!-- <span class="clip-btn"></span> -->
                                                                <div class="feed-upper-sec">
                                                                    <div class="feed-upper-banner">
                                                                        <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                    </div>
                                                                    <div class="feed-banner-botsec">
                                                                        <div class="clearfix">
                                                                            <div class="feed-banner-botinfo">
                                                                                <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                                <h3>mykal <span>@mykalmorton</span></h3>
                                                                            </div>
                                                                            <div class="feed-banner-botsocial">
                                                                                <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                            </div>
                                                                        </div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                    </div>
                                                                    <div class="follow-sec clearfix">
                                                                        <div class="follow-left-sec">
                                                                            <span>200</span><i>Connections</i>
                                                                        </div>
                                                                        <div class="follow-right-sec">
                                                                            <span>1.9M</span><i>Followers</i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-lower-sec">
                                                                    <h3><i>- Famous Recipes -</i></h3>
                                                                    <div class="feed-inner-sec clearfix">
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    </div>
                                                                    <a class="more-btn" href="#">more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-chat-info">
                                                            <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span class="heart-sec"><i class="anim-icon heart"></i> 14</span></h4>
                                                            <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                            <div class="clearfix">
                                                                <div class="share-reply share-reply-left">
                                                                    <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                                </div>
                                                                <div class="share-reply">
                                                                    <a href="#">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="latest-comment-chat comment-chat-sec">
                                                        <div class="comment-chat-fig">
                                                            <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                            <div class="feed-person-sec">
                                                                <!-- <span class="clip-btn"></span> -->
                                                                <div class="feed-upper-sec">
                                                                    <div class="feed-upper-banner">
                                                                        <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                    </div>
                                                                    <div class="feed-banner-botsec">
                                                                        <div class="clearfix">
                                                                            <div class="feed-banner-botinfo">
                                                                                <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                                <h3>mykal <span>@mykalmorton</span></h3>
                                                                            </div>
                                                                            <div class="feed-banner-botsocial">
                                                                                <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                            </div>
                                                                        </div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                    </div>
                                                                    <div class="follow-sec clearfix">
                                                                        <div class="follow-left-sec">
                                                                            <span>200</span><i>Connections</i>
                                                                        </div>
                                                                        <div class="follow-right-sec">
                                                                            <span>1.9M</span><i>Followers</i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-lower-sec">
                                                                    <h3><i>- Famous Recipes -</i></h3>
                                                                    <div class="feed-inner-sec clearfix">
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    </div>
                                                                    <a class="more-btn" href="#">more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-chat-info">
                                                            <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span class="heart-sec"><i class="anim-icon heart"></i> 14</span></h4>
                                                            <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                            <div class="clearfix">
                                                                <div class="share-reply share-reply-left">
                                                                    <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                                </div>
                                                                <div class="share-reply">
                                                                    <a href="#">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="latest-comment-chat comment-chat-sec">
                                                        <div class="comment-chat-fig">
                                                            <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                            <div class="feed-person-sec">
                                                                <!-- <span class="clip-btn"></span> -->
                                                                <div class="feed-upper-sec">
                                                                    <div class="feed-upper-banner">
                                                                        <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                    </div>
                                                                    <div class="feed-banner-botsec">
                                                                        <div class="clearfix">
                                                                            <div class="feed-banner-botinfo">
                                                                                <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                                <h3>mykal <span>@mykalmorton</span></h3>
                                                                            </div>
                                                                            <div class="feed-banner-botsocial">
                                                                                <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                            </div>
                                                                        </div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                    </div>
                                                                    <div class="follow-sec clearfix">
                                                                        <div class="follow-left-sec">
                                                                            <span>200</span><i>Connections</i>
                                                                        </div>
                                                                        <div class="follow-right-sec">
                                                                            <span>1.9M</span><i>Followers</i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-lower-sec">
                                                                    <h3><i>- Famous Recipes -</i></h3>
                                                                    <div class="feed-inner-sec clearfix">
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    </div>
                                                                    <a class="more-btn" href="#">more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-chat-info">
                                                            <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span class="heart-sec"><i class="anim-icon heart"></i> 14</span></h4>
                                                            <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                            <div class="clearfix">
                                                                <div class="share-reply share-reply-left">
                                                                    <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                                </div>
                                                                <div class="share-reply">
                                                                    <a href="#">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="latest-comment-chat comment-chat-sec">
                                                        <div class="comment-chat-fig">
                                                            <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                            <div class="feed-person-sec">
                                                                <!-- <span class="clip-btn"></span> -->
                                                                <div class="feed-upper-sec">
                                                                    <div class="feed-upper-banner">
                                                                        <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                    </div>
                                                                    <div class="feed-banner-botsec">
                                                                        <div class="clearfix">
                                                                            <div class="feed-banner-botinfo">
                                                                                <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                                <h3>mykal <span>@mykalmorton</span></h3>
                                                                            </div>
                                                                            <div class="feed-banner-botsocial">
                                                                                <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                            </div>
                                                                        </div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                    </div>
                                                                    <div class="follow-sec clearfix">
                                                                        <div class="follow-left-sec">
                                                                            <span>200</span><i>Connections</i>
                                                                        </div>
                                                                        <div class="follow-right-sec">
                                                                            <span>1.9M</span><i>Followers</i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-lower-sec">
                                                                    <h3><i>- Famous Recipes -</i></h3>
                                                                    <div class="feed-inner-sec clearfix">
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    </div>
                                                                    <a class="more-btn" href="#">more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-chat-info">
                                                            <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span class="heart-sec"><i class="anim-icon heart"></i> 14</span></h4>
                                                            <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                            <div class="clearfix">
                                                                <div class="share-reply share-reply-left">
                                                                    <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                                </div>
                                                                <div class="share-reply">
                                                                    <a href="#">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="latest-comment-chat comment-chat-sec">
                                                        <div class="comment-chat-fig">
                                                            <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                            <div class="feed-person-sec">
                                                                <!-- <span class="clip-btn"></span> -->
                                                                <div class="feed-upper-sec">
                                                                    <div class="feed-upper-banner">
                                                                        <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                    </div>
                                                                    <div class="feed-banner-botsec">
                                                                        <div class="clearfix">
                                                                            <div class="feed-banner-botinfo">
                                                                                <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                                <h3>mykal <span>@mykalmorton</span></h3>
                                                                            </div>
                                                                            <div class="feed-banner-botsocial">
                                                                                <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                            </div>
                                                                        </div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                    </div>
                                                                    <div class="follow-sec clearfix">
                                                                        <div class="follow-left-sec">
                                                                            <span>200</span><i>Connections</i>
                                                                        </div>
                                                                        <div class="follow-right-sec">
                                                                            <span>1.9M</span><i>Followers</i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-lower-sec">
                                                                    <h3><i>- Famous Recipes -</i></h3>
                                                                    <div class="feed-inner-sec clearfix">
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    </div>
                                                                    <a class="more-btn" href="#">more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-chat-info">
                                                            <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span class="heart-sec"><i class="anim-icon heart"></i> 14</span></h4>
                                                            <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                            <div class="clearfix">
                                                                <div class="share-reply share-reply-left">
                                                                    <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                                </div>
                                                                <div class="share-reply">
                                                                    <a href="#">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="show-btn">5 responses to "julia frauche's" comment . 4 contributors</a>
                                                </div>
                                                <div class="comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span class="heart-sec"><i class="anim-icon heart"></i> 14</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="home-link"><img src="img/header-logo.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="sidebarWrap">
                                            <div class="post-sidebar contentSidebar">
                                                <span class="arrow-close anim-icon close"></span>
                                                <div class="post-sidebar-inner">
                                                    <div class="sidebar_slider-sec">
                                                        <div class="flexslider">
                                                            <ul class="slides clearfix">
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>137</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>3</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>43</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="chat-wrap">
                                                        <div class="clearfix">
                                                            <div class="side-chat-left">
                                                                <span class="chat-btn active"><i class="material-icons">chat</i></span><span><i class="equalizerBtn material-icons" data-toggle="tooltip" data-placement="top" title="" data-original-title="Product Statistics">equalizer</i></span>
                                                            </div>
                                                            <div class="side-chat-right">
                                                                <span class="record-btn"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="" data-original-title="2 day left">more_horiz</i></span><span class="heart-sec"><i class="anim-icon heart" data-toggle="tooltip" data-placement="top" title="" data-original-title="I like it"></i> 14</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="donate-form-sec">
                                                        <form class="donate-form-inner donate-discription-sec">
                                                            <div class="donate-discription-info">
                                                                <h2 class="clearfix"><a href="product">Lorem ipsum dolor sit amet.</a>
                                                                    <span class="star-sec"><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star-o.png" alt=""></i>
                                                                    </span>
                                                                </h2>
                                                                <p class="clearfix">consectetur adipisicing elit. Cumque inventore et laboriosam vel neque laborum, optio quis dicta magni consequatur distinctio hic nemo veniam temporibus, necessitatibus <span class="hidden-txt">repellat culpa facilis iure consectetur adipisicing elit. Cumque inventore et laboriosam vel neque</span><a href="#" class="more-info-btn"></a></p>
                                                                <div class="donate-discription-inner clearfix">
                                                                    <div class="discription-inner-detail">
                                                                        <p>Estamailted: <span>May 2016</span></p>
                                                                    </div>
                                                                    <div class="discription-inner-detail">
                                                                        <p>Estamailted devlivery: <span>May 2016</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-agreed-sec catagary-sec">
                                                                <div class="clearfix">
                                                                    <div class="form-agreed-left">
                                                                        <a href="#"><i class="material-icons">loyalty</i> Technology</a>
                                                                        <a href="#"><i class="material-icons">location_on</i> Sans Fancisco</a>
                                                                    </div>
                                                                    <div class="form-agreed-right">
                                                                        <a href="#" class="btn btn-purchase formBtn">Checkout</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-sidebar formSidebar">
                                                <span class="arrow-close anim-icon close"></span>
                                                <div class="post-sidebar-inner">
                                                    <div class="side-slider-outer">
                                                        <ul class="slides clearfix">
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="donate-form-sec">
                                                        <form class="donate-form-inner">
                                                            <section>
                                                                <h3>Payment information</h3>
                                                                <p>Your payment method will not be changed at this time if the project is successfully funded, your payment method will be changed 178.00 when the projects ends.</p>
                                                            </section>
                                                            <section>
                                                                <h3 class="clearfix">Select payment method</h3>
                                                                <span><input name="payment" id="radio1" checked="" type="radio"><label for="radio1"><img src="img/visa.png" alt=""><p><b>Card ending in 8080</b>Expires 7-20-29</p><i class="material-icons">edit</i></label></span>
                                                                <span><input name="payment" id="radio2" type="radio"><label for="radio2">Use a new card<i class="material-icons">edit</i></label></span>
                                                            </section>
                                                            <section class="lowersec">
                                                                <h3 class="clearfix">Select a shipping address</h3>
                                                                <span><input name="payment1" id="radio3" checked="" type="radio"><label for="radio3"><p>Mykal Michael,<br> 2717 howell st apt 4302, dalla,tx, 75204</p><i class="material-icons">edit</i></label></span>
                                                                <span><input name="payment1" id="radio4" type="radio"><label for="radio4">Use a new address<i class="material-icons">edit</i></label></span>
                                                            </section>
                                                            <div class="form-agreed-sec">
                                                                <p>By pledging you agree to kickstarter’s <a href="#">Terms of use</a> and <a href="#">Privacy policy</a></p>
                                                                <div class="clearfix">
                                                                    <div class="form-agreed-left">
                                                                        <a href="#" class="btn btn-addcart">ADD TO CART</a>
                                                                    </div>
                                                                    <div class="form-agreed-right">
                                                                        <a href="#" class="btn btn-purchase donateBtn">Purchase</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($articles['create'] as $article)
                                <div class="block-add">
                                    <div class="block-left">
                                        <div class="block-left-inner">
                                            <div class="post-time-sec">
                                                <span class="time-zone">{{$article->article_period}}</span>
                                                <i>hour ago</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-outer">
                                        <div class="block-post block-post-cout">
                                            <div class="clearfix feed-top-sec feed-top-sec1">
                                                <div class="feed-top-left">
                                                    <p><em class="feed-person-btn"><img src="img/profile-img1.png" alt=""> <strong>{{$article->author}}</strong></em> <span>{{$article->posttitle}}</span><i>February 22 at 7:20 am</i></p>
                                                    <div class="feed-person-sec">
                                                        <div class="feed-upper-sec">
                                                            <div class="feed-upper-banner">
                                                                <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                            </div>
                                                            <div class="feed-banner-botsec">
                                                                <div class="clearfix">
                                                                    <div class="feed-banner-botinfo">
                                                                        <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                        <h3>mykal <span>@mykalmorton</span></h3>
                                                                    </div>
                                                                    <div class="feed-banner-botsocial">
                                                                        <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                            </div>
                                                            <div class="follow-sec clearfix">
                                                                <div class="follow-left-sec">
                                                                    <span>200</span><i>Connections</i>
                                                                </div>
                                                                <div class="follow-right-sec">
                                                                    <span>1.9M</span><i>Followers</i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="feed-lower-sec">
                                                            <h3><i>- Famous Recipes -</i></h3>
                                                            <div class="feed-inner-sec clearfix">
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                            </div>
                                                            <a class="more-btn" href="#">more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="feed-top-right">
                                                    <strong><b class="anim-icon retweet in feed-popup-btn"></b><small>14</small></strong>
                                                    <div class="feed-tooltip-sec">
                                                        <a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-icon"><i class="material-icons">more_horiz</i></a>
                                                    </div>
                                                    <i class="dropdown-toggle material-icons pen-btn">sort</i>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><i class="material-icons">visibility_off</i><span>I don't want to see this</span></a></li>
                                                        <li><a href="#"><i class="material-icons">subject</i><span>Hide all for Chris Beek</span></a></li>
                                                        <li><a href="#"><i class="material-icons">flag</i><span>Report abuse</span></a></li>
                                                        <li><a href="#"><i class="material-icons">remove_circle</i><span>Remove connection</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="video-wrap active">
                                                <span class="outer-shadow"></span><span class="top-left-shadow"></span>
                                                <div class="video-sec">
                                                    <!-- <img src="img/article-img2.jpg" alt=""> -->
                                                    <video preload="none" poster="img/article-img2.jpg" src="http://35.164.11.119:82/uploads/{{$article->postfile_encname}}"></video>
                                                    <div class="time_left"></div>
                                                    <div class="volume_cont"></div>
                                                    <span class="play_btn"></span>
                                                </div>
                                            </div>
                                            <div class="feed-heading-wrap clearfix">
                                                <div class="feed-heading-left">
                                                    <h2 class="feed-title"><div class="cart-outer"><a class="box-cart-btn" href="#">$425</a>
                                                        
                                                    </div>
                                                    <div class="cart-tooltip">
                                                        <h4>Select option</h4>
                                                        <form>
                                                            <select name="" id="">
                                                                <option value="0">Small ($72)</option>
                                                                <option value="1">Small ($72)</option>
                                                                <option value="2">Small ($72)</option>
                                                                <option value="3">Small ($72)</option>
                                                            </select><select name="" id="">
                                                                <option value="0">1</option>
                                                                <option value="1">2</option>
                                                                <option value="2">3</option>
                                                                <option value="3">4</option>
                                                            </select>
                                                            <button>Add to Cart</button>
                                                        </form>
                                                        <hr>
                                                        <a class="full-color-btn" href="#"><i class="material-icons">add_shopping_cart</i><span>Confirm spend of $100</span></a>
                                                        <hr>
                                                        <a class="full-color-btn green" href="#"><i class="material-icons">lock</i><span>Confirm spend of $100</span></a>
                                                    </div>
                                                    <a class="box-cart-btn" href="#">$425</a>{{$article->posttitle}}<span class="clip-marker"><img src="img/clip-icon.png" alt=""></span></h2>
                                                </div>
                                                <div class="feed-heading-right">
                                                    <span class="star-sec"><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star-o.png" alt=""></i>
                                                    </span>
                                                    <a class="detail-btn" href="#">view details</a>
                                                </div>
                                            </div>
                                            <div class="block-info-sec">
                                                <h4>Description</h4>
                                                <p>I bet you didn't think you could make cookies using the Anova Precision Cooker. Sous vide cookies might look a little different than the typical oven recipe — here I've cooked the batter in small canning jars and then cut the results into round bars — but they're far more fun to make. You can't just use any dough recipe</p>
                                                <div class="expand-sec">
                                                    <div class="comment-bar">
                                                        <span>14 Comments</span>
                                                    </div>
                                                    <div class="expand-left-sec">
                                                        <div class="visible-active">
                                                            <span class="chat-btn active"><i class="material-icons">chat</i></span><span><i class="equalizerBtn material-icons">equalizer</i></span>
                                                        </div>
                                                        <div class="hide-active">
                                                            <span class="chat-btn"><i class="material-icons">chat</i> <span>32 Comment</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="expand-right-sec">
                                                        <div class="visible-active">
                                                            <a class="dropdown-toggle" href="#">Sort by Best <i class="material-icons">arrow_drop_down</i></a>
                                                            <ul class="dropdown-menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li role="separator" class="divider"></li> <li><a href="#">Separated link</a></li> </ul>
                                                        </div>
                                                        <div class="hide-active">
                                                            <span><i class="equalizerBtn material-icons">equalizer</i></span><span class="heart-sec"><i class="anim-icon heart"></i> 14</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-chat-wrap">
                                                <div class="comment-chat-bar">
                                                    <form class="pushing-form">
                                                        <a href="#"><img src="img/jeff.jpg" alt=""></a>
                                                        <span><i class="anim-icon camera"></i><textarea placeholder="What do you want to share?"></textarea></span>
                                                        <div class="icon-sec clearfix">
                                                            <button type="submit">Send</button>
                                                            <div class="icon-sec-right">
                                                                <em href="#"><span class="anim-icon camera"></span> media</em>
                                                                <em href="#"><i class="material-icons">location_on</i> <b>Location</b></em>
                                                                <em href="#"><i class="material-icons">unarchive</i> <b>Poll</b></em>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="latest-comment-chat comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="show-btn">Show More</a>
                                                <div class="comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="home-link"><img src="img/header-logo.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="sidebarWrap">
                                            <div class="post-sidebar contentSidebar">
                                                <span class="arrow-close anim-icon close"></span>
                                                <div class="post-sidebar-inner">
                                                    <div class="sidebar_slider-sec">
                                                        <div class="flexslider">
                                                            <ul class="slides clearfix">
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>137</span></a>
                                                                    <a class="side-buy-btn" href="#">Buy</a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    <a class="side-buy-btn" href="#">Buy</a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>3</span></a>
                                                                    <a class="side-buy-btn" href="#">Buy</a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>43</span></a>
                                                                    <a class="side-buy-btn" href="#">Buy</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="chat-wrap">
                                                        <div class="clearfix">
                                                            <div class="chat-com-sec chat-left-sec">
                                                                <a class="" href="#"><i class="material-icons">chat</i> 26 Comment</a>
                                                            </div>
                                                            <div class="chat-com-sec chat-right-sec">
                                                                <!-- <span><i class="material-icons">favorite</i></span><span><i class="material-icons">autorenew</i></span> -->
                                                                <a class="detail-btn" href="product2">view Product</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="donate-form-sec">
                                                        <form class="donate-form-inner donate-discription-sec">
                                                            <div class="donate-discription-info">
                                                                <h2 class="clearfix"><a href="product">Lorem ipsum dolor sit amet.</a>
                                                                    <span class="star-sec"><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star-o.png" alt=""></i>
                                                                    </span>
                                                                </h2>
                                                                <p class="clearfix">consectetur adipisicing elit. Cumque inventore et laboriosam vel neque laborum, optio quis dicta magni consequatur distinctio hic nemo veniam temporibus, necessitatibus <span class="hidden-txt">repellat culpa facilis iure consectetur adipisicing elit. Cumque inventore et laboriosam vel neque</span><a href="#" class="more-info-btn"></a></p>
                                                                <div class="donate-discription-inner clearfix">
                                                                    <div class="discription-inner-detail">
                                                                        <p>Estamailted: <span>May 2016</span></p>
                                                                    </div>
                                                                    <div class="discription-inner-detail">
                                                                        <p>Estamailted devlivery: <span>May 2016</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-agreed-sec catagary-sec">
                                                                <div class="clearfix">
                                                                    <div class="form-agreed-left">
                                                                        <a href="#"><i class="material-icons">loyalty</i> Technology</a>
                                                                        <a href="#"><i class="material-icons">location_on</i> Sans Fancisco</a>
                                                                    </div>
                                                                    <div class="form-agreed-right">
                                                                        <a href="#" class="btn btn-purchase formBtn">Checkout</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-sidebar formSidebar">
                                                <span class="arrow-close anim-icon close"></span>
                                                <div class="post-sidebar-inner">
                                                    <div class="side-slider-outer">
                                                        <ul class="slides clearfix">
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="donate-form-sec">
                                                        <form class="donate-form-inner">
                                                            <section>
                                                                <h3>Payment information</h3>
                                                                <p>Your payment method will not be changed at this time if the project is successfully funded, your payment method will be changed 178.00 when the projects ends.</p>
                                                            </section>
                                                            <section>
                                                                <h3 class="clearfix">Select payment method</h3>
                                                                <span><input name="payment" id="radio1" checked="" type="radio"><label for="radio1"><img src="img/visa.png" alt=""><p><b>Card ending in 8080</b>Expires 7-20-29</p><i class="material-icons">edit</i></label></span>
                                                                <span><input name="payment" id="radio2" type="radio"><label for="radio2">Use a new card<i class="material-icons">edit</i></label></span>
                                                            </section>
                                                            <section class="lowersec">
                                                                <h3 class="clearfix">Select a shipping address</h3>
                                                                <span><input name="payment1" id="radio3" checked="" type="radio"><label for="radio3"><p>Mykal Michael,<br> 2717 howell st apt 4302, dalla,tx, 75204</p><i class="material-icons">edit</i></label></span>
                                                                <span><input name="payment1" id="radio4" type="radio"><label for="radio4">Use a new address<i class="material-icons">edit</i></label></span>
                                                            </section>
                                                            <div class="form-agreed-sec">
                                                                <p>By pledging you agree to kickstarter’s <a href="#">Terms of use</a> and <a href="#">Privacy policy</a></p>
                                                                <div class="clearfix">
                                                                    <div class="form-agreed-left">
                                                                        <a href="#" class="btn btn-addcart">ADD TO CART</a>
                                                                    </div>
                                                                    <div class="form-agreed-right">
                                                                        <a href="#" class="btn btn-purchase donateBtn">Purchase</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="block-add" style="display:none">
                                    <div class="block-left">
                                        <div class="block-left-inner">
                                            <div class="post-time-sec">
                                                <span class="time-zone">4</span>
                                                <i>hour ago</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-outer">
                                        <div class="block-post block-person-info">
                                            <div class="feed-top-sec clearfix">
                                                <div class="feed-top-left">
                                                    <p><em class="feed-person-btn"><img src="img/profile-img1.png" alt=""> <strong>Akilli M. Johnson</strong></em> <span>Beautiful Picture in the World</span><i>February 22 at 7:20 am </i></p>
                                                    <div class="feed-person-sec">
                                                        <!-- <span class="clip-btn"></span> -->
                                                        <div class="feed-upper-sec">
                                                            <div class="feed-upper-banner">
                                                                <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                            </div>
                                                            <div class="feed-banner-botsec">
                                                                <div class="clearfix">
                                                                    <div class="feed-banner-botinfo">
                                                                        <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                        <h3>mykal <span>@mykalmorton</span></h3>
                                                                    </div>
                                                                    <div class="feed-banner-botsocial">
                                                                        <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                            </div>
                                                            <div class="follow-sec clearfix">
                                                                <div class="follow-left-sec">
                                                                    <span>200</span><i>Connections</i>
                                                                </div>
                                                                <div class="follow-right-sec">
                                                                    <span>1.9M</span><i>Followers</i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="feed-lower-sec">
                                                            <h3><i>- Famous Recipes -</i></h3>
                                                            <div class="feed-inner-sec clearfix">
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                            </div>
                                                            <a class="more-btn" href="#">more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="feed-top-right">
                                                    <span class="material-label-btn"><i class="material-icons">label</i> 14</span>
                                                    <div class="material-label-dropdown">
                                                        <div class="label-dropdown-step label-dropdown-step1">
                                                            <div class="label-dropdown-head clearfix">
                                                                <div class="label-dropdown-head-left">
                                                                    <div class="label-dropdown-fig">
                                                                        <a href="#"><img src="img/label-person.jpg" alt=""></a>
                                                                    </div>
                                                                    <div class="label-dropdown-info">
                                                                        <p><span>Commission</span><b>$1.80</b></p>
                                                                        <p><span>Engagment</span><i>18</i></p>
                                                                    </div>
                                                                </div>
                                                                <div class="label-dropdown-head-right">
                                                                    <ul class="clearfix">
                                                                        <li><a class="share-drop" href="#" data-toggle="tooltip" data-placement="top" title="Shared With Friends">@</a></li>
                                                                        <li><a href="#" class="material-icons">visibility</a></li>
                                                                        <li><a href="#" class="material-icons">visibility_off</a></li>
                                                                        <li><a href="#" class="material-icons">watch_later</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="label-dropdown-content">
                                                                <div class="textarea-sec">
                                                                    <textarea name="" id="" cols="30" rows="10" placeholder="What's on your mind?"></textarea>
                                                                    <i class="material-icons">code</i>
                                                                </div>
                                                            </div>
                                                            <div class="label-dropdown-foot clearfix">
                                                                <div class="label-dropdown-foot-left">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-paperclip"></i> <span>http://grnhtr.in/ibvd</span></a></li>
                                                                        <li><a data-toggle="tooltip" data-placement="top" title="Shared With Tumblr" class="fa fa-facebook-square" href="#"></a></li>
                                                                        <li><a data-toggle="tooltip" data-placement="top" title="Shared With Tumblr" class="fa fa-twitter-square" href="#"></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="label-dropdown-foot-right">
                                                                    <a class="step-btn1" href="#"><i class="material-icons">lock</i><span>Next</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="label-dropdown-step label-dropdown-step2">
                                                            <div class="label-dropdown-head">
                                                                <i class="material-label-close material-icons">close</i>
                                                                <h4>Budget</h4>
                                                                <p>Select how much you like to spend.</p>
                                                            </div>
                                                            <div class="dropdown-step2-content">
                                                                <i class="arrow-back material-icons">keyboard_arrow_left</i>
                                                                <div class="budget-slider">
                                                                    <ul class="clearfix">
                                                                        <li><input type="radio" name="glow" id="glow1"><label for="glow1"></label><span>10$</span></li>
                                                                        <li><input type="radio" name="glow" id="glow2"><label for="glow2"></label><span>50$</span></li>
                                                                        <li><input type="radio" name="glow" id="glow3"><label for="glow3"></label><span>100$</span></li>
                                                                        <li><input checked="" type="radio" name="glow" id="glow4"><label for="glow4"></label><span>200$</span></li>
                                                                        <li><input type="radio" name="glow" id="glow5"><label for="glow5"></label><span>500$</span></li>
                                                                        <li><input type="radio" name="glow" id="glow6"><label for="glow6"></label><span>1000$</span></li>
                                                                        <li><input type="radio" name="glow" id="glow7"><label for="glow7"></label><span>2500$</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="label-dropdown-foot">
                                                                <a href="#">proceed to confirmation</a>
                                                            </div>
                                                        </div>
                                                        <div class="label-dropdown-step label-dropdown-step3">
                                                            <div class="label-dropdown-head">
                                                                <i class="material-label-close material-icons">close</i>
                                                            </div>
                                                            <div class="dropdown-step3-content">
                                                                <div class="dropdown-step3-content-inner">
                                                                    <h4><i class="material-icons">check_circle</i><span>Your Promoted Tweet is on its way!</span></h4>
                                                                    <div class="progress"></div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam tenetur officiis, eveniet, vitae illo, quas modi quis, tempora veritatis natus fugiat ea atque iusto. Officia impedit id quibusdam placeat consequuntur.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="label-dropdown-step label-dropdown-step4">
                                                            <div class="label-dropdown-head"></div>
                                                            <div class="label-dropdown-foot"></div>
                                                        </div>
                                                        <div class="label-dropdown-step label-dropdown-step5">
                                                            <div class="label-dropdown-head"></div>
                                                            <div class="label-dropdown-foot"></div>
                                                        </div>
                                                    </div>
                                                    <i class="dropdown-toggle material-icons pen-btn">sort</i>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><i class="material-icons">visibility_off</i><span>I don't want to see this</span></a></li>
                                                        <li><a href="#"><i class="material-icons">subject</i><span>Hide all for Chris Beek</span></a></li>
                                                        <li><a href="#"><i class="material-icons">flag</i><span>Report abuse</span></a></li>
                                                        <li><a href="#"><i class="material-icons">remove_circle</i><span>Remove connection</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="feed-top-left">
                                                    <p style="margin: 0 0 0 50px;">How is your product perceived by your customers?</p>
                                                </div>
                                            </div>
                                            <div class="outer-shadow-sec">                                            
                                                <span class="outer-shadow"></span>
                                                <div class="rating-sec box-rating-sec">
                                                    <div class="clearfix">
                                                        <div class="rating-left-sec">
                                                            <p><img src="img/article-img3.jpg" alt=""></p>
                                                        </div>
                                                        <div class="rating-right-sec">
                                                            <div class="feed-heading-wrap clearfix">
                                                                <div class="feed-heading-left">
                                                                    <div class="feed-heading-sec">
                                                                        <a href="#formSidebar" class="cart-menubtn"><i class="material-icons">shopping_cart</i></a>
                                                                        <h2 class="feed-title">Lorem ipsum dolor sit amet.<span class="clip-marker"><img src="img/clip-icon.png" alt=""></span></h2>
                                                                        <p><i>$319.00</i> <em>USD + Shopping Cost</em></p>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-heading-right">
                                                                    <span class="heart-sec"><i class="anim-icon heart"></i> 14</span>
                                                                </div>
                                                            </div>
                                                            <p>I bet you didn't think you could make cookies using the Anova Precision Cooker. Sous vide cookies might look a little different than the typical oven recipe — here I've cooked the batter in small canning jars and then cut the <span class="more-info-txt">results into round bars — but they're far more fun to make. You can't just use any dough recipe, though. Traditional cookie recipes include a TON of butter, which makes for a mushy sous vide cookie. Here, I've modified a typical cookie recipe to include more flour, leavener, and some serious mixer action. The result is a moist, rich, decadent cookie that your friends will never forget. </span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-info-sec">
                                                <div class="expand-sec">
                                                    <div class="comment-bar">
                                                        <span>14 Comments</span>
                                                    </div>
                                                    <div class="expand-left-sec">
                                                        <div class="visible-active">
                                                            <span class="chat-btn active"><i class="material-icons">chat</i></span><span><i class="equalizerBtn material-icons">equalizer</i></span>
                                                        </div>
                                                        <div class="hide-active">
                                                            <span class="chat-btn"><i class="material-icons">chat</i> 32 Comment</span>
                                                        </div>
                                                    </div>
                                                    <div class="expand-right-sec">
                                                        <div class="visible-active">
                                                            <a class="dropdown-toggle" href="#">Sort by Best <i class="material-icons">arrow_drop_down</i></a>
                                                            <ul class="dropdown-menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li role="separator" class="divider"></li> <li><a href="#">Separated link</a></li> </ul>
                                                        </div>
                                                        <div class="hide-active">
                                                            <span><i class="equalizerBtn material-icons">equalizer</i></span><span class="heart-sec"><i class="anim-icon heart"></i> 14</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-chat-wrap">
                                                <div class="comment-chat-bar">
                                                    <form class="pushing-form">
                                                        <a href="#"><img src="img/jeff.jpg" alt=""></a>
                                                        <span><i class="anim-icon camera"></i><textarea placeholder="What do you want to share?"></textarea></span>
                                                        <div class="icon-sec clearfix">
                                                            <button type="submit">Send</button>
                                                            <div class="icon-sec-right">
                                                                <em href="#"><span class="anim-icon camera"></span> media</em>
                                                                <em href="#"><i class="material-icons">location_on</i> <b>Location</b></em>
                                                                <em href="#"><i class="material-icons">unarchive</i> <b>Poll</b></em>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="latest-comment-chat comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="show-btn">Show More</a>
                                                <div class="comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="home-link"><img src="img/header-logo.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="sidebarWrap">
                                            <div class="post-sidebar contentSidebar">
                                                <span class="arrow-close anim-icon close"></span>
                                                <div class="post-sidebar-inner">
                                                    <div class="sidebar_slider-sec">
                                                        <div class="flexslider">
                                                            <ul class="slides clearfix">
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>137</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>3</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>43</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="chat-wrap">
                                                        <div class="clearfix">
                                                            <div class="chat-com-sec chat-left-sec">
                                                                <a class="" href="#"><i class="material-icons">chat</i> 26 Comment</a>
                                                            </div>
                                                            <div class="chat-com-sec chat-right-sec">
                                                                <span><i class="material-icons">favorite</i></span><span><i class="material-icons">autorenew</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="donate-form-sec">
                                                        <form class="donate-form-inner donate-discription-sec">
                                                            <div class="donate-discription-info">
                                                                <h2 class="clearfix"><a href="product">Lorem ipsum dolor sit amet.</a>
                                                                    <span class="star-sec"><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star-o.png" alt=""></i>
                                                                    </span>
                                                                </h2>
                                                                <p class="clearfix">consectetur adipisicing elit. Cumque inventore et laboriosam vel neque laborum, optio quis dicta magni consequatur distinctio hic nemo veniam temporibus, necessitatibus <span class="hidden-txt">repellat culpa facilis iure consectetur adipisicing elit. Cumque inventore et laboriosam vel neque</span><a href="#" class="more-info-btn"></a></p>
                                                                <div class="donate-discription-inner clearfix">
                                                                    <div class="discription-inner-detail">
                                                                        <p>Estamailted: <span>May 2016</span></p>
                                                                    </div>
                                                                    <div class="discription-inner-detail">
                                                                        <p>Estamailted devlivery: <span>May 2016</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-agreed-sec catagary-sec">
                                                                <div class="clearfix">
                                                                    <div class="form-agreed-left">
                                                                        <a href="#"><i class="material-icons">loyalty</i> Technology</a>
                                                                        <a href="#"><i class="material-icons">location_on</i> Sans Fancisco</a>
                                                                    </div>
                                                                    <div class="form-agreed-right">
                                                                        <a href="#" class="btn btn-purchase formBtn">Checkout</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-sidebar formSidebar">
                                                <span class="arrow-close anim-icon close"></span>
                                                <div class="post-sidebar-inner">
                                                    <div class="side-slider-outer">
                                                        <ul class="slides clearfix">
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="donate-form-sec">
                                                        <form class="donate-form-inner">
                                                            <section>
                                                                <h3>Payment information</h3>
                                                                <p>Your payment method will not be changed at this time if the project is successfully funded, your payment method will be changed 178.00 when the projects ends.</p>
                                                            </section>
                                                            <section>
                                                                <h3 class="clearfix">Select payment method</h3>
                                                                <span><input name="payment" id="radio1" checked="" type="radio"><label for="radio1"><img src="img/visa.png" alt=""><p><b>Card ending in 8080</b>Expires 7-20-29</p><i class="material-icons">edit</i></label></span>
                                                                <span><input name="payment" id="radio2" type="radio"><label for="radio2">Use a new card<i class="material-icons">edit</i></label></span>
                                                            </section>
                                                            <section class="lowersec">
                                                                <h3 class="clearfix">Select a shipping address</h3>
                                                                <span><input name="payment1" id="radio3" checked="" type="radio"><label for="radio3"><p>Mykal Michael,<br> 2717 howell st apt 4302, dalla,tx, 75204</p><i class="material-icons">edit</i></label></span>
                                                                <span><input name="payment1" id="radio4" type="radio"><label for="radio4">Use a new address<i class="material-icons">edit</i></label></span>
                                                            </section>
                                                            <div class="form-agreed-sec">
                                                                <p>By pledging you agree to kickstarter’s <a href="#">Terms of use</a> and <a href="#">Privacy policy</a></p>
                                                                <div class="clearfix">
                                                                    <div class="form-agreed-left">
                                                                        <a href="#" class="btn btn-addcart">ADD TO CART</a>
                                                                    </div>
                                                                    <div class="form-agreed-right">
                                                                        <a href="#" class="btn btn-purchase donateBtn">Purchase</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($articles['feed'] as $article)
                                    <div class="block-add">
                                        <div class="block-left">
                                            <div class="block-left-inner">
                                                <div class="post-time-sec">
                                                    <span class="time-zone">{{$article->article_period}}</span>
                                                    <i>day ago</i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-outer">
                                            <div class="block-post block-person-info">
                                                <div class="rating-sec">
                                                    <div class="clearfix">
                                                        <div class="rating-left-sec">
                                                            <p><img src="img/article-img3.jpg" alt=""></p>
                                                        </div>
                                                        <div class="rating-right-sec">
                                                            <div class="feed-top-sec clearfix">
                                                                <div class="feed-top-left">
                                                                    <p><em class="feed-person-btn"><strong>{{$article->author}}</strong></em> <span>{{$article->title}}<b class="clip-marker"><img src="img/clip-icon.png" alt=""></b></span><i>{{$article->updated_at}}</i></p>
                                                                    <div class="feed-person-sec">
                                                                        <!-- <span class="clip-btn"></span> -->
                                                                        <div class="feed-upper-sec">
                                                                            <div class="feed-upper-banner">
                                                                                <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                            </div>
                                                                            <div class="feed-banner-botsec">
                                                                                <div class="clearfix">
                                                                                    <div class="feed-banner-botinfo">
                                                                                        <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                                        <h3>mykal <span>@mykalmorton</span></h3>
                                                                                    </div>
                                                                                    <div class="feed-banner-botsocial">
                                                                                        <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                                        <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                                        <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                                    </div>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                            </div>
                                                                            <div class="follow-sec clearfix">
                                                                                <div class="follow-left-sec">
                                                                                    <span>200</span><i>Connections</i>
                                                                                </div>
                                                                                <div class="follow-right-sec">
                                                                                    <span>1.9M</span><i>Followers</i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="feed-lower-sec">
                                                                            <h3><i>- Famous Recipes -</i></h3>
                                                                            <div class="feed-inner-sec clearfix">
                                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                            </div>
                                                                            <a class="more-btn" href="#">more</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-top-right">
                                                                    <i class="dropdown-toggle material-icons pen-btn">sort</i>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#"><i class="material-icons">visibility_off</i><span>I don't want to see this</span></a></li>
                                                                        <li><a href="#"><i class="material-icons">subject</i><span>Hide all for Chris Beek</span></a></li>
                                                                        <li><a href="#"><i class="material-icons">flag</i><span>Report abuse</span></a></li>
                                                                        <li><a href="#"><i class="material-icons">remove_circle</i><span>Remove connection</span></a></li>
                                                                    </ul>
                                                                </div>
                                                                <!-- <div class="feed-top-right">
                                                                    <i class="dropdown-toggle material-icons pin-btn">keyboard_arrow_down</i>
                                                                    <ul class="dropdown-menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li role="separator" class="divider"></li> <li><a href="#">Separated link</a></li> </ul>
                                                                </div> -->
                                                            </div>
                                                            <p>{{$article->content}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-info-sec">
                                                    <div class="expand-sec">
                                                        <div class="expand-right-sec">
                                                            <span></span><span class="heart-sec"><i class="anim-icon heart"></i> 14</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="block-add" style="display:none">
                                    <div class="block-left">
                                        <div class="block-left-inner">
                                            <div class="post-time-sec">
                                                <span class="time-zone">2</span>
                                                <i>days ago</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-outer">
                                        <div class="block-post block-person-info block-short-info">
                                            <div class="rating-sec">
                                                <div class="clearfix">
                                                    <div class="rating-left-sec">
                                                        <p><img src="img/article-img3.jpg" alt=""></p>
                                                    </div>
                                                    <div class="rating-right-sec">
                                                        <div class="feed-top-sec clearfix">
                                                            <div class="feed-top-left">
                                                            <p><em class="feed-person-btn1"><strong>Akilli M. Johnson</strong></em> <span>Beautiful Picture in the World <b class="clip-marker"><img src="img/clip-icon.png" alt=""></b></span><i>February 22 at 7:20 am </i></p>
                                                            <div class="feed-person-sec">
                                                                <!-- <span class="clip-btn"></span> -->
                                                                <div class="feed-upper-sec">
                                                                    <div class="feed-upper-banner">
                                                                        <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                    </div>
                                                                    <div class="feed-banner-botsec">
                                                                        <div class="clearfix">
                                                                            <div class="feed-banner-botinfo">
                                                                                <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                                <h3>mykal <span>@mykalmorton</span></h3>
                                                                            </div>
                                                                            <div class="feed-banner-botsocial">
                                                                                <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                                <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                            </div>
                                                                        </div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                    </div>
                                                                    <div class="follow-sec clearfix">
                                                                        <div class="follow-left-sec">
                                                                            <span>200</span><i>Connections</i>
                                                                        </div>
                                                                        <div class="follow-right-sec">
                                                                            <span>1.9M</span><i>Followers</i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-lower-sec">
                                                                    <h3><i>- Famous Recipes -</i></h3>
                                                                    <div class="feed-inner-sec clearfix">
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    </div>
                                                                    <a class="more-btn" href="#">more</a>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="feed-top-right">
                                                                <i class="dropdown-toggle material-icons pen-btn">sort</i>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="#"><i class="material-icons">visibility_off</i><span>I don't want to see this</span></a></li>
                                                                    <li><a href="#"><i class="material-icons">subject</i><span>Hide all for Chris Beek</span></a></li>
                                                                    <li><a href="#"><i class="material-icons">flag</i><span>Report abuse</span></a></li>
                                                                    <li><a href="#"><i class="material-icons">remove_circle</i><span>Remove connection</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <p>I bet you didn't think you could make cookies using the Anova Precision Cooker. Sous vide cookies might to make. You can't just use any dough recipe</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-info-sec">
                                                <div class="expand-sec">
                                                    <div class="expand-right-sec">
                                                        <span></span><span class="heart-sec"><i class="anim-icon heart"></i> 14</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-add tvins-add" style="display:none">
                                    <div class="block-left">
                                        <div class="block-left-inner">
                                            <div class="post-time-sec">
                                                <span class="time-zone"></span>
                                                <i>SPONSERED</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-outer">
                                        <div class="block-post">
                                            <div class="tvins-sec">
                                                <h4><a href="#">create ad</a></h4>
                                                <div class="clearfix">
                                                    <div class="tvins-info">
                                                        <div class="tvins-inner-info">
                                                            <p><a href="#"><img src="img/adds-img2.png" alt=""></a></p>
                                                            <p><a href="#"><b>SeeGoodDaily</b></a></p>
                                                            <p><a href=""><span>att.com</span></a></p>
                                                            <p><i>Lorem ipsum dolor sit amet,<br> consectetur adipisicing elit.</i></p>
                                                            <div class="tvins-dropdown">
                                                                <i class="dropdown-toggle material-icons pin-btn">keyboard_arrow_down</i>
                                                                <ul class="dropdown-menu" style="display: none;"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li role="separator" class="divider"></li> <li><a href="#">Separated link</a></li> </ul>
                                                            </div>
                                                        </div>
                                                        <div class="dismiss-sec clearfix">
                                                            <div class="dismiss-left"><a href="#"><i class="material-icons">close</i><span>Dismiss</span></a></div>
                                                            <div class="dismiss-right">
                                                                <span class="heart-sec"><i class="anim-icon heart"></i> 440</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tvins-info">
                                                        <div class="tvins-inner-info">
                                                            <p><a href="#"><img src="img/adds-img2.png" alt=""></a></p>
                                                            <p><a href="#"><b>SeeGoodDaily</b></a></p>
                                                            <p><a href=""><span>att.com</span></a></p>
                                                            <p><i>Lorem ipsum dolor sit amet,<br> consectetur adipisicing elit.</i></p>
                                                            <div class="tvins-dropdown">
                                                                <i class="dropdown-toggle material-icons pin-btn">keyboard_arrow_down</i>
                                                                <ul class="dropdown-menu" style="display: none;"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li role="separator" class="divider"></li> <li><a href="#">Separated link</a></li> </ul>
                                                            </div>
                                                        </div>
                                                        <div class="dismiss-sec clearfix">
                                                            <div class="dismiss-left"><a href="#"><i class="material-icons">close</i><span>Dismiss</span></a></div>
                                                            <div class="dismiss-right">
                                                                <span class="heart-sec"><i class="anim-icon heart"></i> 440</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-add black-travel-wrap" style="display:none">
                                    <div class="block-left">
                                        <div class="block-left-inner">
                                            <div class="post-time-sec">
                                                <span class="time-zone">1</span>
                                                <i>month ago</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-outer">
                                        <div class="block-post">
                                            <div class="black-travel clearfix">
                                                <div class="black-travel-left">
                                                    <h4>Red/Black Travel Tie Case</h4>
                                                </div>
                                                <div class="black-travel-right"><b>$450</b><span>usd</span></div>
                                            </div>
                                            <div class="feed-top-sec clearfix">
                                                <div class="feed-top-left">
                                                    <p><em class="feed-person-btn"><img src="img/profile-img1.png" alt=""> <strong>Akilli M. Johnson</strong></em> <span>Beautiful Picture in the World</span><i>February 22 at 7:20 am </i></p>
                                                    <div class="feed-person-sec">
                                                        <!-- <span class="clip-btn"></span> -->
                                                        <div class="feed-upper-sec">
                                                            <div class="feed-upper-banner">
                                                                <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                            </div>
                                                            <div class="feed-banner-botsec">
                                                                <div class="clearfix">
                                                                    <div class="feed-banner-botinfo">
                                                                        <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                        <h3>mykal <span>@mykalmorton</span></h3>
                                                                    </div>
                                                                    <div class="feed-banner-botsocial">
                                                                        <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                            </div>
                                                            <div class="follow-sec clearfix">
                                                                <div class="follow-left-sec">
                                                                    <span>200</span><i>Connections</i>
                                                                </div>
                                                                <div class="follow-right-sec">
                                                                    <span>1.9M</span><i>Followers</i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="feed-lower-sec">
                                                            <h3><i>- Famous Recipes -</i></h3>
                                                            <div class="feed-inner-sec clearfix">
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                            </div>
                                                            <a class="more-btn" href="#">more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="feed-top-right">
                                                    <strong><b class="anim-icon retweet in feed-popup-btn"></b><small>14</small></strong>
                                                    <div class="feed-tooltip-sec">
                                                        <a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-icon"><i class="material-icons">more_horiz</i></a>
                                                    </div>
                                                    <i class="dropdown-toggle material-icons pen-btn">sort</i>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><i class="material-icons">visibility_off</i><span>I don't want to see this</span></a></li>
                                                        <li><a href="#"><i class="material-icons">subject</i><span>Hide all for Chris Beek</span></a></li>
                                                        <li><a href="#"><i class="material-icons">flag</i><span>Report abuse</span></a></li>
                                                        <li><a href="#"><i class="material-icons">remove_circle</i><span>Remove connection</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="video-wrap active">
                                                <span class="outer-shadow"></span><span class="top-left-shadow"></span>
                                                <div class="video-sec">
                                                    <!-- <img src="img/article-img4.jpg" alt=""> -->
                                                    <video preload="none" poster="img/article-img4.jpg" src="https://ksr-video.imgix.net/projects/2394248/video-655209-h264_high.mp4"></video>
                                                    <div class="time_left"></div>
                                                    <div class="volume_cont"></div>
                                                    <span class="play_btn"></span>
                                                </div>
                                            </div>
                                            <div class="feed-heading-wrap clearfix">
                                                <div class="feed-heading-left">
                                                    <h2 class="feed-title"><a class="box-cart-btn" href="#">$425</a>Red/Black Travel Tie Case</h2>
                                                </div>
                                                <div class="feed-heading-right">
                                                    <span class="star-sec"><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star-o.png" alt=""></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="block-info-sec">
                                                <p>I bet you didn't think you could make cookies using the Anova Precision Cooker. Sous vide cookies might look a little different than the typical oven recipe — here I've cooked the batter in small canning jars and then cut the results into round bars — but they're far more fun to make. You can't just use any dough recipe</p>
                                                <div class="expand-sec">
                                                    <div class="comment-bar">
                                                        <span>14 Comments</span>
                                                    </div>
                                                    <div class="expand-left-sec">
                                                        <div class="visible-active">
                                                            <span class="chat-btn active"><i class="material-icons">chat</i></span><span><i class="equalizerBtn material-icons">equalizer</i></span>
                                                        </div>
                                                        <div class="hide-active">
                                                            <span class="chat-btn"><i class="material-icons">chat</i> 32 Comment</span>
                                                        </div>
                                                    </div>
                                                    <div class="expand-right-sec">
                                                        <div class="visible-active">
                                                            <a class="dropdown-toggle" href="#">Sort by Best <i class="material-icons">arrow_drop_down</i></a>
                                                            <ul class="dropdown-menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li role="separator" class="divider"></li> <li><a href="#">Separated link</a></li> </ul>
                                                        </div>
                                                        <div class="hide-active">
                                                            <span><i class="equalizerBtn material-icons">equalizer</i></span><span class="heart-sec"><i class="anim-icon heart"></i> 14</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-chat-wrap">
                                                <div class="comment-chat-bar">
                                                    <form class="pushing-form">
                                                        <a href="#"><img src="img/jeff.jpg" alt=""></a>
                                                        <span><i class="anim-icon camera"></i><textarea placeholder="What do you want to share?"></textarea></span>
                                                        <div class="icon-sec clearfix">
                                                            <button type="submit">Send</button>
                                                            <div class="icon-sec-right">
                                                                <em href="#"><span class="anim-icon camera"></span> media</em>
                                                                <em href="#"><i class="material-icons">location_on</i> <b>Location</b></em>
                                                                <em href="#"><i class="material-icons">unarchive</i> <b>Poll</b></em>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="latest-comment-chat comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="show-btn">Show More</a>
                                                <div class="comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="home-link"><img src="img/header-logo.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="sidebarWrap">
                                            <div class="post-sidebar contentSidebar">
                                                <span class="arrow-close anim-icon close"></span>
                                                <div class="post-sidebar-inner">
                                                    <div class="sidebar_slider-sec">
                                                        <div class="flexslider">
                                                            <ul class="slides clearfix">
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>137</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>3</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>43</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="chat-wrap">
                                                        <div class="clearfix">
                                                            <div class="chat-com-sec chat-left-sec">
                                                                <a class="" href="#"><i class="material-icons">chat</i> 26 Comment</a>
                                                            </div>
                                                            <div class="chat-com-sec chat-right-sec">
                                                                <span><i class="material-icons">favorite</i></span><span><i class="material-icons">autorenew</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="donate-form-sec">
                                                        <form class="donate-form-inner donate-discription-sec">
                                                            <div class="donate-discription-info">
                                                                <h2 class="clearfix"><a href="product">Lorem ipsum dolor sit amet.</a>
                                                                    <span class="star-sec"><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star-o.png" alt=""></i>
                                                                    </span>
                                                                </h2>
                                                                <p class="clearfix">consectetur adipisicing elit. Cumque inventore et laboriosam vel neque laborum, optio quis dicta magni consequatur distinctio hic nemo veniam temporibus, necessitatibus <span class="hidden-txt">repellat culpa facilis iure consectetur adipisicing elit. Cumque inventore et laboriosam vel neque</span><a href="#" class="more-info-btn"></a></p>
                                                                <div class="donate-discription-inner clearfix">
                                                                    <div class="discription-inner-detail">
                                                                        <p>Estamailted: <span>May 2016</span></p>
                                                                    </div>
                                                                    <div class="discription-inner-detail">
                                                                        <p>Estamailted devlivery: <span>May 2016</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-agreed-sec catagary-sec">
                                                                <div class="clearfix">
                                                                    <div class="form-agreed-left">
                                                                        <a href="#"><i class="material-icons">loyalty</i> Technology</a>
                                                                        <a href="#"><i class="material-icons">location_on</i> Sans Fancisco</a>
                                                                    </div>
                                                                    <div class="form-agreed-right">
                                                                        <a href="#" class="btn btn-purchase formBtn">Checkout</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-sidebar formSidebar">
                                                <span class="arrow-close anim-icon close"></span>
                                                <div class="post-sidebar-inner">
                                                    <div class="side-slider-outer">
                                                        <ul class="slides clearfix">
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="donate-form-sec">
                                                        <form class="donate-form-inner">
                                                            <section>
                                                                <h3>Payment information</h3>
                                                                <p>Your payment method will not be changed at this time if the project is successfully funded, your payment method will be changed 178.00 when the projects ends.</p>
                                                            </section>
                                                            <section>
                                                                <h3 class="clearfix">Select payment method</h3>
                                                                <span><input name="payment" id="radio1" checked="" type="radio"><label for="radio1"><img src="img/visa.png" alt=""><p><b>Card ending in 8080</b>Expires 7-20-29</p><i class="material-icons">edit</i></label></span>
                                                                <span><input name="payment" id="radio2" type="radio"><label for="radio2">Use a new card<i class="material-icons">edit</i></label></span>
                                                            </section>
                                                            <section class="lowersec">
                                                                <h3 class="clearfix">Select a shipping address</h3>
                                                                <span><input name="payment1" id="radio3" checked="" type="radio"><label for="radio3"><p>Mykal Michael,<br> 2717 howell st apt 4302, dalla,tx, 75204</p><i class="material-icons">edit</i></label></span>
                                                                <span><input name="payment1" id="radio4" type="radio"><label for="radio4">Use a new address<i class="material-icons">edit</i></label></span>
                                                            </section>
                                                            <div class="form-agreed-sec">
                                                                <p>By pledging you agree to kickstarter’s <a href="#">Terms of use</a> and <a href="#">Privacy policy</a></p>
                                                                <div class="clearfix">
                                                                    <div class="form-agreed-left">
                                                                        <a href="#" class="btn btn-addcart">ADD TO CART</a>
                                                                    </div>
                                                                    <div class="form-agreed-right">
                                                                        <a href="#" class="btn btn-purchase donateBtn">Purchase</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-add" style="display:none">
                                    <div class="block-left">
                                        <div class="block-left-inner">
                                            <div class="post-time-sec">
                                                <span class="time-zone">2</span>
                                                <i>month ago</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-outer">
                                        <div class="block-post">
                                            <div class="feed-top-sec clearfix">
                                                <div class="feed-top-left">
                                                    <p><em class="feed-person-btn"><img src="img/profile-img1.png" alt=""> <strong>Akilli M. Johnson</strong></em> <span>Beautiful Picture in the World</span><i>February 22 at 7:20 am </i></p>
                                                    <div class="feed-person-sec">
                                                        <!-- <span class="clip-btn"></span> -->
                                                        <div class="feed-upper-sec">
                                                            <div class="feed-upper-banner">
                                                                <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                            </div>
                                                            <div class="feed-banner-botsec">
                                                                <div class="clearfix">
                                                                    <div class="feed-banner-botinfo">
                                                                        <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                        <h3>mykal <span>@mykalmorton</span></h3>
                                                                    </div>
                                                                    <div class="feed-banner-botsocial">
                                                                        <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                            </div>
                                                            <div class="follow-sec clearfix">
                                                                <div class="follow-left-sec">
                                                                    <span>200</span><i>Connections</i>
                                                                </div>
                                                                <div class="follow-right-sec">
                                                                    <span>1.9M</span><i>Followers</i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="feed-lower-sec">
                                                            <h3><i>- Famous Recipes -</i></h3>
                                                            <div class="feed-inner-sec clearfix">
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                            </div>
                                                            <a class="more-btn" href="#">more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="feed-top-right">
                                                    <strong><b class="anim-icon retweet in feed-popup-btn"></b><small>14</small></strong>
                                                    <div class="feed-tooltip-sec">
                                                        <a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-icon"><i class="material-icons">more_horiz</i></a>
                                                    </div>
                                                    <i class="dropdown-toggle material-icons pen-btn">sort</i>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><i class="material-icons">visibility_off</i><span>I don't want to see this</span></a></li>
                                                        <li><a href="#"><i class="material-icons">subject</i><span>Hide all for Chris Beek</span></a></li>
                                                        <li><a href="#"><i class="material-icons">flag</i><span>Report abuse</span></a></li>
                                                        <li><a href="#"><i class="material-icons">remove_circle</i><span>Remove connection</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="video-wrap active">
                                                <span class="outer-shadow"></span><span class="top-left-shadow"></span>
                                                <div class="video-sec">
                                                    <a class="video_img" href="#"><img src="img/article-img5.jpg" alt=""></a>
                                                    <div class="volume_cont"></div>
                                                    <span class="play_btn"></span>
                                                </div>
                                            </div>
                                            <div class="feed-heading-wrap clearfix">
                                                <div class="feed-heading-left">
                                                    <h4>Lorem ipsum dolor sit amet.<span class="clip-marker"><img src="img/clip-icon.png" alt=""></span></h4>
                                                </div>
                                                <div class="feed-heading-right">
                                                    <span class="star-sec"><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star-o.png" alt=""></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="block-info-sec">
                                                <p>I bet you didn't think you could make cookies using the Anova Precision Cooker. Sous vide cookies might look a little different than the typical oven recipe — here I've cooked the batter in small canning jars and then cut the results into round bars — but they're far more fun to make. You can't just use any dough recipe</p>
                                                <div class="block-post-sec clearfix">
                                                    <div class="block-post-outer">
                                                        <span class="top-left-shadow"></span>
                                                        <div class="block-post-inner">
                                                            <div class="block-post-fig"><a href="#"><img src="img/postimg1.jpg" alt=""></a></div>
                                                            <div class="block-post-info">
                                                                <p>Dress Belt by American Bench Craft <span class="clip-marker"><img src="img/clip-icon.png" alt=""></span></p>
                                                                <p>$70 <i>. AmericanBenchCraft + 563</i></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="block-post-outer">
                                                        <span class="top-left-shadow"></span>
                                                        <div class="block-post-inner">
                                                            <div class="block-post-fig"><a href="#"><img src="img/postimg1.jpg" alt=""></a></div>
                                                            <div class="block-post-info">
                                                                <p>10-one-4 Watch <span class="clip-marker"><img src="img/clip-icon.png" alt=""></span></p>
                                                                <p>$140 <i>. ProjectsWAtches + 2,258</i></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="expand-sec">
                                                    <div class="comment-bar">
                                                        <span>14 Comments</span>
                                                    </div>
                                                    <div class="expand-left-sec">
                                                        <div class="visible-active">
                                                            <span class="chat-btn active"><i class="material-icons">chat</i></span><span><i class="equalizerBtn material-icons">equalizer</i></span>
                                                        </div>
                                                        <div class="hide-active">
                                                            <span class="chat-btn"><i class="material-icons">chat</i> 32 Comment</span>
                                                        </div>
                                                    </div>
                                                    <div class="expand-right-sec">
                                                        <div class="visible-active">
                                                            <a class="dropdown-toggle" href="#">Sort by Best <i class="material-icons">arrow_drop_down</i></a>
                                                            <ul class="dropdown-menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li role="separator" class="divider"></li> <li><a href="#">Separated link</a></li> </ul>
                                                        </div>
                                                        <div class="hide-active">
                                                            <span><i class="equalizerBtn material-icons">equalizer</i></span><span class="heart-sec"><i class="anim-icon heart"></i> 14</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-chat-wrap">
                                                <div class="comment-chat-bar">
                                                    <form class="pushing-form">
                                                        <a href="#"><img src="img/jeff.jpg" alt=""></a>
                                                        <span><i class="anim-icon camera"></i><textarea placeholder="What do you want to share?"></textarea></span>
                                                        <div class="icon-sec clearfix">
                                                            <button type="submit">Send</button>
                                                            <div class="icon-sec-right">
                                                                <em href="#"><span class="anim-icon camera"></span> media</em>
                                                                <em href="#"><i class="material-icons">location_on</i> <b>Location</b></em>
                                                                <em href="#"><i class="material-icons">unarchive</i> <b>Poll</b></em>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="latest-comment-chat comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="show-btn">Show More</a>
                                                <div class="comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="home-link"><img src="img/header-logo.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="sidebarWrap">
                                            <div class="post-sidebar contentSidebar">
                                                <span class="arrow-close anim-icon close"></span>
                                                <div class="post-sidebar-inner">
                                                    <div class="sidebar_slider-sec">
                                                        <div class="flexslider">
                                                            <ul class="slides clearfix">
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>137</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>3</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>43</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="chat-wrap">
                                                        <div class="clearfix">
                                                            <div class="chat-com-sec chat-left-sec">
                                                                <a class="" href="#"><i class="material-icons">chat</i> 26 Comment</a>
                                                            </div>
                                                            <div class="chat-com-sec chat-right-sec">
                                                                <span><i class="material-icons">favorite</i></span><span><i class="material-icons">autorenew</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="donate-form-sec">
                                                        <form class="donate-form-inner donate-discription-sec">
                                                            <div class="donate-discription-info">
                                                                <h2 class="clearfix"><a href="product">Lorem ipsum dolor sit amet.</a>
                                                                    <span class="star-sec"><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star-o.png" alt=""></i>
                                                                    </span>
                                                                </h2>
                                                                <p class="clearfix">consectetur adipisicing elit. Cumque inventore et laboriosam vel neque laborum, optio quis dicta magni consequatur distinctio hic nemo veniam temporibus, necessitatibus <span class="hidden-txt">repellat culpa facilis iure consectetur adipisicing elit. Cumque inventore et laboriosam vel neque</span><a href="#" class="more-info-btn"></a></p>
                                                                <div class="donate-discription-inner clearfix">
                                                                    <div class="discription-inner-detail">
                                                                        <p>Estamailted: <span>May 2016</span></p>
                                                                    </div>
                                                                    <div class="discription-inner-detail">
                                                                        <p>Estamailted devlivery: <span>May 2016</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-agreed-sec catagary-sec">
                                                                <div class="clearfix">
                                                                    <div class="form-agreed-left">
                                                                        <a href="#"><i class="material-icons">loyalty</i> Technology</a>
                                                                        <a href="#"><i class="material-icons">location_on</i> Sans Fancisco</a>
                                                                    </div>
                                                                    <div class="form-agreed-right">
                                                                        <a href="#" class="btn btn-purchase formBtn">Checkout</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-sidebar formSidebar">
                                                <span class="arrow-close anim-icon close"></span>
                                                <div class="post-sidebar-inner">
                                                    <div class="side-slider-outer">
                                                        <ul class="slides clearfix">
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="donate-form-sec">
                                                        <form class="donate-form-inner">
                                                            <section>
                                                                <h3>Payment information</h3>
                                                                <p>Your payment method will not be changed at this time if the project is successfully funded, your payment method will be changed 178.00 when the projects ends.</p>
                                                            </section>
                                                            <section>
                                                                <h3 class="clearfix">Select payment method</h3>
                                                                <span><input name="payment" id="radio1" checked="" type="radio"><label for="radio1"><img src="img/visa.png" alt=""><p><b>Card ending in 8080</b>Expires 7-20-29</p><i class="material-icons">edit</i></label></span>
                                                                <span><input name="payment" id="radio2" type="radio"><label for="radio2">Use a new card<i class="material-icons">edit</i></label></span>
                                                            </section>
                                                            <section class="lowersec">
                                                                <h3 class="clearfix">Select a shipping address</h3>
                                                                <span><input name="payment1" id="radio3" checked="" type="radio"><label for="radio3"><p>Mykal Michael,<br> 2717 howell st apt 4302, dalla,tx, 75204</p><i class="material-icons">edit</i></label></span>
                                                                <span><input name="payment1" id="radio4" type="radio"><label for="radio4">Use a new address<i class="material-icons">edit</i></label></span>
                                                            </section>
                                                            <div class="form-agreed-sec">
                                                                <p>By pledging you agree to kickstarter’s <a href="#">Terms of use</a> and <a href="#">Privacy policy</a></p>
                                                                <div class="clearfix">
                                                                    <div class="form-agreed-left">
                                                                        <a href="#" class="btn btn-addcart">ADD TO CART</a>
                                                                    </div>
                                                                    <div class="form-agreed-right">
                                                                        <a href="#" class="btn btn-purchase donateBtn">Purchase</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-add" style="display:none">
                                    <div class="block-left">
                                        <div class="block-left-inner">
                                            <div class="post-time-sec">
                                                <span class="time-zone">2</span>
                                                <i>month ago</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-outer">
                                        <div class="block-post">
                                            <div class="feed-top-sec clearfix">
                                                <div class="feed-top-left">
                                                    <p><em class="feed-person-btn"><img src="img/profile-img1.png" alt=""> <strong>Akilli M. Johnson</strong></em> <span>Beautiful Picture in the World</span><i>February 22 at 7:20 am </i></p>
                                                    <div class="feed-person-sec">
                                                        <!-- <span class="clip-btn"></span> -->
                                                        <div class="feed-upper-sec">
                                                            <div class="feed-upper-banner">
                                                                <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                            </div>
                                                            <div class="feed-banner-botsec">
                                                                <div class="clearfix">
                                                                    <div class="feed-banner-botinfo">
                                                                        <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                        <h3>mykal <span>@mykalmorton</span></h3>
                                                                    </div>
                                                                    <div class="feed-banner-botsocial">
                                                                        <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                            </div>
                                                            <div class="follow-sec clearfix">
                                                                <div class="follow-left-sec">
                                                                    <span>200</span><i>Connections</i>
                                                                </div>
                                                                <div class="follow-right-sec">
                                                                    <span>1.9M</span><i>Followers</i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="feed-lower-sec">
                                                            <h3><i>- Famous Recipes -</i></h3>
                                                            <div class="feed-inner-sec clearfix">
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                            </div>
                                                            <a class="more-btn" href="#">more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="feed-top-right">
                                                    <strong><b class="anim-icon retweet in feed-popup-btn"></b><small>14</small></strong>
                                                    <div class="feed-tooltip-sec">
                                                        <a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-icon"><i class="material-icons">more_horiz</i></a>
                                                    </div>
                                                    <i class="dropdown-toggle material-icons pen-btn">sort</i>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><i class="material-icons">visibility_off</i><span>I don't want to see this</span></a></li>
                                                        <li><a href="#"><i class="material-icons">subject</i><span>Hide all for Chris Beek</span></a></li>
                                                        <li><a href="#"><i class="material-icons">flag</i><span>Report abuse</span></a></li>
                                                        <li><a href="#"><i class="material-icons">remove_circle</i><span>Remove connection</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="video-wrap active video-img-wrap">
                                                <div class="video-sec">
                                                    <a class="video_img" href="#"><img src="https://thingd-media-ec4.thefancy.com/default/1304876669890201351_7f886471460f.jpg" alt=""></a>
                                                    <a href="#" class="cart-product-btn"><i class="material-icons">shopping_cart</i> <span>Buy with</span> <b>KANOOP</b></a>
                                                </div>
                                            </div>
                                            <div class="feed-heading-wrap clearfix">
                                                <div class="feed-heading-left">
                                                    <h4>Lorem ipsum dolor sit amet.<span class="clip-marker"><img src="img/clip-icon.png" alt=""></span></h4>
                                                </div>
                                                <div class="feed-heading-right">
                                                    <span class="star-sec"><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star.png" alt="">
                                                        </i><i><img src="img/star-o.png" alt=""></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="block-info-sec">
                                                <p>I bet you didn't think you could make cookies using the Anova Precision Cooker. Sous vide cookies might look a little different than the typical oven recipe — here I've cooked the batter in small canning jars and then cut the results into round bars — but they're far more fun to make. You can't just use any dough recipe</p>
                                                <div class="block-post-sec clearfix">
                                                    <div class="block-post-outer">
                                                        <span class="top-left-shadow"></span>
                                                        <div class="block-post-inner">
                                                            <div class="block-post-fig"><a href="#"><img src="img/postimg1.jpg" alt=""></a></div>
                                                            <div class="block-post-info">
                                                                <p>Dress Belt by American Bench Craft <span class="clip-marker"><img src="img/clip-icon.png" alt=""></span></p>
                                                                <p>$70 <i>. AmericanBenchCraft + 563</i></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="block-post-outer">
                                                        <span class="top-left-shadow"></span>
                                                        <div class="block-post-inner">
                                                            <div class="block-post-fig"><a href="#"><img src="img/postimg1.jpg" alt=""></a></div>
                                                            <div class="block-post-info">
                                                                <p>10-one-4 Watch <span class="clip-marker"><img src="img/clip-icon.png" alt=""></span></p>
                                                                <p>$140 <i>. ProjectsWAtches + 2,258</i></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="expand-sec">
                                                    <div class="comment-bar">
                                                        <span>14 Comments</span>
                                                    </div>
                                                    <div class="expand-left-sec">
                                                        <div class="visible-active">
                                                            <span class="chat-btn active"><i class="material-icons">chat</i></span><span><i class="equalizerBtn material-icons">equalizer</i></span>
                                                        </div>
                                                        <div class="hide-active">
                                                            <span class="chat-btn"><i class="material-icons">chat</i> 32 Comment</span>
                                                        </div>
                                                    </div>
                                                    <div class="expand-right-sec">
                                                        <div class="visible-active">
                                                            <a class="dropdown-toggle" href="#">Sort by Best <i class="material-icons">arrow_drop_down</i></a>
                                                            <ul class="dropdown-menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li role="separator" class="divider"></li> <li><a href="#">Separated link</a></li> </ul>
                                                        </div>
                                                        <div class="hide-active">
                                                            <span><i class="equalizerBtn material-icons">equalizer</i></span><span class="heart-sec"><i class="anim-icon heart"></i> 14</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-chat-wrap">
                                                <div class="comment-chat-bar">
                                                    <form class="pushing-form">
                                                        <a href="#"><img src="img/jeff.jpg" alt=""></a>
                                                        <span><i class="anim-icon camera"></i><textarea placeholder="What do you want to share?"></textarea></span>
                                                        <div class="icon-sec clearfix">
                                                            <button type="submit">Send</button>
                                                            <div class="icon-sec-right">
                                                                <em href="#"><span class="anim-icon camera"></span> media</em>
                                                                <em href="#"><i class="material-icons">location_on</i> <b>Location</b></em>
                                                                <em href="#"><i class="material-icons">unarchive</i> <b>Poll</b></em>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="latest-comment-chat comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="show-btn">Show More</a>
                                                <div class="comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="home-link"><img src="img/header-logo.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="sidebarWrap">
                                            <div class="post-sidebar contentSidebar">
                                                <span class="arrow-close anim-icon close"></span>
                                                <div class="post-sidebar-inner">
                                                    <div class="sidebar_slider-sec">
                                                        <div class="flexslider">
                                                            <ul class="slides clearfix">
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>137</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>3</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>43</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="chat-wrap">
                                                        <div class="clearfix">
                                                            <div class="chat-com-sec chat-left-sec">
                                                                <a class="" href="#"><i class="material-icons">chat</i> 26 Comment</a>
                                                            </div>
                                                            <div class="chat-com-sec chat-right-sec">
                                                                <span><i class="material-icons">favorite</i></span><span><i class="material-icons">autorenew</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="donate-form-sec">
                                                        <form class="donate-form-inner donate-discription-sec">
                                                            <div class="donate-discription-info">
                                                                <h2 class="clearfix"><a href="product">Lorem ipsum dolor sit amet.</a>
                                                                    <span class="star-sec"><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star-o.png" alt=""></i>
                                                                    </span>
                                                                </h2>
                                                                <p class="clearfix">consectetur adipisicing elit. Cumque inventore et laboriosam vel neque laborum, optio quis dicta magni consequatur distinctio hic nemo veniam temporibus, necessitatibus <span class="hidden-txt">repellat culpa facilis iure consectetur adipisicing elit. Cumque inventore et laboriosam vel neque</span><a href="#" class="more-info-btn"></a></p>
                                                                <div class="donate-discription-inner clearfix">
                                                                    <div class="discription-inner-detail">
                                                                        <p>Estamailted: <span>May 2016</span></p>
                                                                    </div>
                                                                    <div class="discription-inner-detail">
                                                                        <p>Estamailted devlivery: <span>May 2016</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-agreed-sec catagary-sec">
                                                                <div class="clearfix">
                                                                    <div class="form-agreed-left">
                                                                        <a href="#"><i class="material-icons">loyalty</i> Technology</a>
                                                                        <a href="#"><i class="material-icons">location_on</i> Sans Fancisco</a>
                                                                    </div>
                                                                    <div class="form-agreed-right">
                                                                        <a href="#" class="btn btn-purchase formBtn">Checkout</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-sidebar formSidebar">
                                                <span class="arrow-close anim-icon close"></span>
                                                <div class="post-sidebar-inner">
                                                    <div class="side-slider-outer">
                                                        <ul class="slides clearfix">
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="donate-form-sec">
                                                        <form class="donate-form-inner">
                                                            <section>
                                                                <h3>Payment information</h3>
                                                                <p>Your payment method will not be changed at this time if the project is successfully funded, your payment method will be changed 178.00 when the projects ends.</p>
                                                            </section>
                                                            <section>
                                                                <h3 class="clearfix">Select payment method</h3>
                                                                <span><input name="payment" id="radio1" checked="" type="radio"><label for="radio1"><img src="img/visa.png" alt=""><p><b>Card ending in 8080</b>Expires 7-20-29</p><i class="material-icons">edit</i></label></span>
                                                                <span><input name="payment" id="radio2" type="radio"><label for="radio2">Use a new card<i class="material-icons">edit</i></label></span>
                                                            </section>
                                                            <section class="lowersec">
                                                                <h3 class="clearfix">Select a shipping address</h3>
                                                                <span><input name="payment1" id="radio3" checked="" type="radio"><label for="radio3"><p>Mykal Michael,<br> 2717 howell st apt 4302, dalla,tx, 75204</p><i class="material-icons">edit</i></label></span>
                                                                <span><input name="payment1" id="radio4" type="radio"><label for="radio4">Use a new address<i class="material-icons">edit</i></label></span>
                                                            </section>
                                                            <div class="form-agreed-sec">
                                                                <p>By pledging you agree to kickstarter’s <a href="#">Terms of use</a> and <a href="#">Privacy policy</a></p>
                                                                <div class="clearfix">
                                                                    <div class="form-agreed-left">
                                                                        <a href="#" class="btn btn-addcart">ADD TO CART</a>
                                                                    </div>
                                                                    <div class="form-agreed-right">
                                                                        <a href="#" class="btn btn-purchase donateBtn">Purchase</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-add block-add-video" style="display:none">
                                    <div class="block-left">
                                        <div class="block-left-inner">
                                            <div class="post-time-sec">
                                                <span class="time-zone">1</span>
                                                <i>hour ago</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-outer">
                                        <div class="block-post">
                                            <div class="feed-top-sec clearfix">
                                                <div class="feed-top-left">
                                                    <p><em class="feed-person-btn"><img src="img/profile-img1.png" alt=""> <strong>Akilli M. Johnson</strong></em> <span>Beautiful Picture in the World </span><i>February 22 at 7:20 am</i></p>
                                                    <div class="feed-person-sec">
                                                        <!-- <span class="clip-btn"></span> -->
                                                        <div class="feed-upper-sec">
                                                            <div class="feed-upper-banner">
                                                                <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                            </div>
                                                            <div class="feed-banner-botsec">
                                                                <div class="clearfix">
                                                                    <div class="feed-banner-botinfo">
                                                                        <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                        <h3>mykal <span>@mykalmorton</span></h3>
                                                                    </div>
                                                                    <div class="feed-banner-botsocial">
                                                                        <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                        <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                            </div>
                                                            <div class="follow-sec clearfix">
                                                                <div class="follow-left-sec">
                                                                    <span>200</span><i>Connections</i>
                                                                </div>
                                                                <div class="follow-right-sec">
                                                                    <span>1.9M</span><i>Followers</i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="feed-lower-sec">
                                                            <h3><i>- Famous Recipes -</i></h3>
                                                            <div class="feed-inner-sec clearfix">
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                            </div>
                                                            <a class="more-btn" href="#">more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="feed-top-right">
                                                    <strong><b class="anim-icon retweet in feed-popup-btn"></b><small>14</small></strong>
                                                    <div class="feed-tooltip-sec">
                                                        <a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                        </a><a href="#" class="tool-icon"><i class="material-icons">more_horiz</i></a>
                                                    </div>
                                                    <i class="dropdown-toggle material-icons pen-btn">sort</i>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"><i class="material-icons">visibility_off</i><span>I don't want to see this</span></a></li>
                                                        <li><a href="#"><i class="material-icons">subject</i><span>Hide all for Chris Beek</span></a></li>
                                                        <li><a href="#"><i class="material-icons">flag</i><span>Report abuse</span></a></li>
                                                        <li><a href="#"><i class="material-icons">remove_circle</i><span>Remove connection</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="block-video-wrap">
                                                <div class="clearfix">
                                                    <div class="block-video-left">
                                                        <div class="clearfix">
                                                            <div class="block-video-l"><h3>Live video <span>. Hide</span></h3></div>
                                                            <div class="block-video-r"><a href="chat">Watch</a></div>
                                                        </div>
                                                        <div class="video-streem" href="#"><img src="img/live-video-img.jpg" alt=""><a href="#">live now</a></div>
                                                        <h4>99Damage</h4>
                                                        <p>99Damage Liga Saison #4 - German s...</p>
                                                    </div>
                                                    <div class="block-video-right">
                                                        <ul>
                                                            <li><a class="active" href="#"><img src="img/tweet-fig.png"><span>Jacqueline Holmes</span></a></li>
                                                            <li><a href="#"><img src="img/tweet-fig.png"><span>Eugene Simpson</span></a></li>
                                                            <li><a href="#"><img src="img/tweet-fig.png"><span>Eugene Simpson</span></a></li>
                                                            <li><a href="#"><img src="img/tweet-fig.png"><span>Thomas Morgan</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-info-sec">                                        
                                                <div class="expand-sec">
                                                    <div class="expand-left-sec">
                                                        <span class="follow-point"><i class="material-icons">person</i><b>3553</b></span>
                                                        <span class="view-point"><i class="material-icons">remove_red_eye</i><b>212,215,955</b></span>
                                                        <a href="#" class="view-point-btn">Share</a>
                                                        <i class="dropdown-toggle material-icons view-point-drop">more_vert</i>
                                                        <ul class="dropdown-menu"><li><a href="#">Report</a></li></ul>
                                                    </div>
                                                    <div class="expand-right-sec">
                                                        <span></span><span class="heart-sec"><i class="anim-icon heart"></i> 14</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-chat-wrap">
                                                <div class="comment-chat-bar">
                                                    <form class="pushing-form">
                                                        <a href="#"><img src="img/jeff.jpg" alt=""></a>
                                                        <span><i class="anim-icon camera"></i><textarea placeholder="What do you want to share?"></textarea></span>
                                                        <div class="icon-sec clearfix">
                                                            <button type="submit">Send</button>
                                                            <div class="icon-sec-right">
                                                                <em href="#"><span class="anim-icon camera"></span> media</em>
                                                                <em href="#"><i class="material-icons">location_on</i> <b>Location</b></em>
                                                                <em href="#"><i class="material-icons">unarchive</i> <b>Poll</b></em>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="latest-comment-chat comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="show-btn">Show More</a>
                                                <div class="comment-chat-sec">
                                                    <div class="comment-chat-fig">
                                                        <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                        <div class="feed-person-sec">
                                                            <!-- <span class="clip-btn"></span> -->
                                                            <div class="feed-upper-sec">
                                                                <div class="feed-upper-banner">
                                                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                                </div>
                                                                <div class="feed-banner-botsec">
                                                                    <div class="clearfix">
                                                                        <div class="feed-banner-botinfo">
                                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                            <h3>mykal <span>@mykalmorton</span></h3>
                                                                        </div>
                                                                        <div class="feed-banner-botsocial">
                                                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                                </div>
                                                                <div class="follow-sec clearfix">
                                                                    <div class="follow-left-sec">
                                                                        <span>200</span><i>Connections</i>
                                                                    </div>
                                                                    <div class="follow-right-sec">
                                                                        <span>1.9M</span><i>Followers</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="feed-lower-sec">
                                                                <h3><i>- Famous Recipes -</i></h3>
                                                                <div class="feed-inner-sec clearfix">
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                                </div>
                                                                <a class="more-btn" href="#">more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-chat-info">
                                                        <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                        <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                        <div class="clearfix">
                                                            <div class="share-reply share-reply-left">
                                                                <a href="#"><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="share-reply">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="home-link"><img src="img/header-logo.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="sidebarWrap">
                                            <div class="post-sidebar contentSidebar">
                                                <span class="arrow-close anim-icon close"></span>
                                                <div class="post-sidebar-inner">
                                                    <div class="sidebar_slider-sec">
                                                        <div class="flexslider">
                                                            <ul class="slides clearfix">
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>137</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>3</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>43</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="chat-wrap">
                                                        <div class="clearfix">
                                                            <div class="chat-com-sec chat-left-sec">
                                                                <a class="" href="#"><i class="material-icons">chat</i> 26 Comment</a>
                                                            </div>
                                                            <div class="chat-com-sec chat-right-sec">
                                                                <span><i class="material-icons">favorite</i></span><span><i class="material-icons">autorenew</i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="donate-form-sec">
                                                        <form class="donate-form-inner donate-discription-sec">
                                                            <div class="donate-discription-info">
                                                                <h2 class="clearfix"><a href="product">Lorem ipsum dolor sit amet.</a>
                                                                    <span class="star-sec"><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star.png" alt="">
                                                                        </i><i><img src="img/star-o.png" alt=""></i>
                                                                    </span>
                                                                </h2>
                                                                <p class="clearfix">consectetur adipisicing elit. Cumque inventore et laboriosam vel neque laborum, optio quis dicta magni consequatur distinctio hic nemo veniam temporibus, necessitatibus <span class="hidden-txt">repellat culpa facilis iure consectetur adipisicing elit. Cumque inventore et laboriosam vel neque</span><a href="#" class="more-info-btn"></a></p>
                                                                <div class="donate-discription-inner clearfix">
                                                                    <div class="discription-inner-detail">
                                                                        <p>Estamailted: <span>May 2016</span></p>
                                                                    </div>
                                                                    <div class="discription-inner-detail">
                                                                        <p>Estamailted devlivery: <span>May 2016</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-agreed-sec catagary-sec">
                                                                <div class="clearfix">
                                                                    <div class="form-agreed-left">
                                                                        <a href="#"><i class="material-icons">loyalty</i> Technology</a>
                                                                        <a href="#"><i class="material-icons">location_on</i> Sans Fancisco</a>
                                                                    </div>
                                                                    <div class="form-agreed-right">
                                                                        <a href="#" class="btn btn-purchase formBtn">Checkout</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-sidebar formSidebar">
                                                <span class="arrow-close anim-icon close"></span>
                                                <div class="post-sidebar-inner">
                                                    <div class="side-slider-outer">
                                                        <ul class="slides clearfix">
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix">
                                                                    <div class="side-slider-fig">
                                                                        <img src="img/product-img4.jpg" alt="">
                                                                        <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                    </div>
                                                                    <div class="side-slider-info">
                                                                        <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                        <p class="product-detail">
                                                                            <em>Cilantro</em>.
                                                                            <em>390 g</em>.
                                                                            <em>610 kcal</em>
                                                                        </p>
                                                                        <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                        <div class="side-slider-btn-sec clearfix">
                                                                            <div class="slider-btn-left">
                                                                                <img src="img/product-slider.jpg" alt="">
                                                                            </div>
                                                                            <div class="slider-btn-right">
                                                                                <a href="#" class="btn btn-purchase">Order</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="donate-form-sec">
                                                        <form class="donate-form-inner">
                                                            <section>
                                                                <h3>Payment information</h3>
                                                                <p>Your payment method will not be changed at this time if the project is successfully funded, your payment method will be changed 178.00 when the projects ends.</p>
                                                            </section>
                                                            <section>
                                                                <h3 class="clearfix">Select payment method</h3>
                                                                <span><input name="payment" id="radio1" checked="" type="radio"><label for="radio1"><img src="img/visa.png" alt=""><p><b>Card ending in 8080</b>Expires 7-20-29</p><i class="material-icons">edit</i></label></span>
                                                                <span><input name="payment" id="radio2" type="radio"><label for="radio2">Use a new card<i class="material-icons">edit</i></label></span>
                                                            </section>
                                                            <section class="lowersec">
                                                                <h3 class="clearfix">Select a shipping address</h3>
                                                                <span><input name="payment1" id="radio3" checked="" type="radio"><label for="radio3"><p>Mykal Michael,<br> 2717 howell st apt 4302, dalla,tx, 75204</p><i class="material-icons">edit</i></label></span>
                                                                <span><input name="payment1" id="radio4" type="radio"><label for="radio4">Use a new address<i class="material-icons">edit</i></label></span>
                                                            </section>
                                                            <div class="form-agreed-sec">
                                                                <p>By pledging you agree to kickstarter’s <a href="#">Terms of use</a> and <a href="#">Privacy policy</a></p>
                                                                <div class="clearfix">
                                                                    <div class="form-agreed-left">
                                                                        <a href="#" class="btn btn-addcart">ADD TO CART</a>
                                                                    </div>
                                                                    <div class="form-agreed-right">
                                                                        <a href="#" class="btn btn-purchase donateBtn">Purchase</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="load-more-sec" style="display:none">
                                    <h2>Loading Seems to be taking a while.</h2>
                                    <p>Twitter may be over capacity or experiencing a momentary hicup. <a href="#">Try again</a> or visit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-info mainBody block-info-in" style="display:none">
                        <h3><i class="anim-icon retweet in"></i>Kanoop</h3>
                        <div class="block-inner block-inner4">
                            <div class="block-add" style="display:none">
                                <div class="block-outer">
                                    <div class="block-post block-post">
                                        <div class="feed-top-sec feed-top-sec2 clearfix">
                                            <div class="feed-top-left">
                                                <p><em class="feed-person-btn"><img src="img/profile-img1.png" alt=""> </em> <span>Beautiful Picture in the World</span><i>February 22 at 7:20 am </i></p>
                                                <div class="feed-person-sec">
                                                    <!-- <span class="clip-btn"></span> -->
                                                    <div class="feed-upper-sec">
                                                        <div class="feed-upper-banner">
                                                            <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                        </div>
                                                        <div class="feed-banner-botsec">
                                                            <div class="clearfix">
                                                                <div class="feed-banner-botinfo">
                                                                    <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                    <h3>mykal <span>@mykalmorton</span></h3>
                                                                </div>
                                                                <div class="feed-banner-botsocial">
                                                                    <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                </div>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                        </div>
                                                        <div class="follow-sec clearfix">
                                                            <div class="follow-left-sec">
                                                                <span>200</span><i>Connections</i>
                                                            </div>
                                                            <div class="follow-right-sec">
                                                                <span>1.9M</span><i>Followers</i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="feed-lower-sec">
                                                        <h3><i>- Famous Recipes -</i></h3>
                                                        <div class="feed-inner-sec clearfix">
                                                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                        </div>
                                                        <a class="more-btn" href="#">more</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="feed-top-right">
                                                <i class="dropdown-toggle material-icons pen-btn">sort</i>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#"><i class="material-icons">visibility_off</i><span>I don't want to see this</span></a></li>
                                                    <li><a href="#"><i class="material-icons">subject</i><span>Hide all for Chris Beek</span></a></li>
                                                    <li><a href="#"><i class="material-icons">flag</i><span>Report abuse</span></a></li>
                                                    <li><a href="#"><i class="material-icons">remove_circle</i><span>Remove connection</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="load-product-sec load-product-sec1">
                                            <div class="load-product-banner">
                                                <img src="img/product-bg-img.jpg" alt="">
                                                <a href="#"><img src="img/tweet-fig.png"></a>
                                            </div>
                                            <div class="load-product-main">
                                                <h4>AromaTech <a href="#">PRO</a></h4>
                                                <p><a href="#">Hunter &amp; Fisherman</a> . Baton Rouge, LA</p>
                                                <a class="connected-btn" href="#"><i class="material-icons">check_circle</i><span>Connected</span></a>
                                                <div class="product-tooltip-sec">
                                                    <a href="#" class="product-tec-img"><img src="img/mikn-img.jpg" alt="">
                                                    </a><a href="#" class="product-tec-img"><img src="img/mikn-img.jpg" alt="">
                                                    </a><a href="#" class="product-tec-img"><img src="img/mikn-img.jpg" alt="">
                                                    </a><a href="#" class="product-tec-img"><img src="img/mikn-img.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix edge_float">
                            <div class="fll">
                                <div class="load-product-sec">
                                    <div class="load-product-banner">
                                        <img src="img/zhtp2.jpg" alt="">
                                        <a href="#"><img src="img/779352843636563968_03.png" alt=""></a>
                                    </div>
                                    <div class="load-product-main">
                                        <h4>AromaTech <span>London,GB</span></h4>
                                        <p>The Home of Luxury Accessories for Men</p>
                                        <div class="load-product-info">
                                            <a href="#"><img src="img/lproduct1.jpg" alt=""></a>
                                            <a href="#"><img src="img/lproduct2.jpg" alt=""></a>
                                            <a href="#"><img src="img/lproduct3.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="load-product-foot">
                                        <a href="#" class="load-product-btn">View Store</a>
                                    </div>
                                </div>
                            </div>
                            <div class="fll">
                                <div class="load-product-sec">
                                    <div class="load-product-banner">
                                        <img src="img/20151112093155368.jpg" alt="">
                                        <a href="#"><img src="img/779352843636563968_03.png" alt=""></a>
                                    </div>
                                    <div class="load-product-main">
                                        <h4>AromaTech <span>London,GB</span></h4>
                                        <p>The Home of Luxury Accessories for Men</p>
                                        <div class="load-product-info">
                                            <a href="#"><img src="img/lproduct1.jpg" alt=""></a>
                                            <a href="#"><img src="img/lproduct2.jpg" alt=""></a>
                                            <a href="#"><img src="img/lproduct3.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="load-product-foot">
                                        <a href="#" class="load-product-btn">View Store</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-inner">
                            <div class="block-add background-block-add" style="display:none">
                                <div class="block-outer">
                                    <div class="block-post">
                                        <div class="feed-top-sec clearfix">
                                            <div class="feed-top-left">
                                                <p><em class="feed-person-btn"><img src="img/profile-img1.png" alt=""> <strong>Akilli M. Johnson</strong></em> <span>Beautiful Picture in the World</span><i>February 22 at 7:20 am </i></p>
                                                <div class="feed-person-sec">
                                                    <!-- <span class="clip-btn"></span> -->
                                                    <div class="feed-upper-sec">
                                                        <div class="feed-upper-banner">
                                                            <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                        </div>
                                                        <div class="feed-banner-botsec">
                                                            <div class="clearfix">
                                                                <div class="feed-banner-botinfo">
                                                                    <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                    <h3>mykal <span>@mykalmorton</span></h3>
                                                                </div>
                                                                <div class="feed-banner-botsocial">
                                                                    <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                </div>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                        </div>
                                                        <div class="follow-sec clearfix">
                                                            <div class="follow-left-sec">
                                                                <span>200</span><i>Connections</i>
                                                            </div>
                                                            <div class="follow-right-sec">
                                                                <span>1.9M</span><i>Followers</i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="feed-lower-sec">
                                                        <h3><i>- Famous Recipes -</i></h3>
                                                        <div class="feed-inner-sec clearfix">
                                                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                        </div>
                                                        <a class="more-btn" href="#">more</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="feed-top-right">
                                                <strong><b class="anim-icon retweet in feed-popup-btn"></b><small>14</small></strong>
                                                <div class="feed-tooltip-sec">
                                                    <a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                    </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                    </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                    </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                    </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                    </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                    </a><a href="#" class="tool-icon"><i class="material-icons">more_horiz</i></a>
                                                </div>
                                                <i class="dropdown-toggle material-icons pen-btn">sort</i>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#"><i class="material-icons">visibility_off</i><span>I don't want to see this</span></a></li>
                                                    <li><a href="#"><i class="material-icons">subject</i><span>Hide all for Chris Beek</span></a></li>
                                                    <li><a href="#"><i class="material-icons">flag</i><span>Report abuse</span></a></li>
                                                    <li><a href="#"><i class="material-icons">remove_circle</i><span>Remove connection</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="video-wrap active video-img-wrap">
                                            <div class="video-sec">
                                                <a class="video_img" href="#"><img src="img/947590567435438008_c49b2533f229.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="feed-heading-wrap clearfix">
                                            <div class="feed-heading-left">
                                                <h2 class="feed-title"><a class="box-cart-btn" href="#">$425</a>Lorem ipsum dolor sit amet.<span class="clip-marker"><img src="img/clip-icon.png" alt=""></span></h2>
                                            </div>
                                            <div class="feed-heading-right">
                                                <span class="star-sec"><i><img src="img/star.png" alt="">
                                                    </i><i><img src="img/star.png" alt="">
                                                    </i><i><img src="img/star.png" alt="">
                                                    </i><i><img src="img/star.png" alt="">
                                                    </i><i><img src="img/star-o.png" alt=""></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="block-info-sec">
                                            <p>I bet you didn't think you could make cookies using the Anova Precision Cooker. Sous vide cookies might look a little different than the typical oven recipe — here I've cooked the batter in small canning jars and then cut the results into round bars — but they're far more fun to make. You can't just use any dough recipe</p>
                                            <div class="expand-sec">
                                                <div class="comment-bar">
                                                    <span>14 Comments</span>
                                                </div>
                                                <div class="expand-left-sec">
                                                    <div class="visible-active">
                                                        <span class="chat-btn active"><i class="material-icons">chat</i></span><span><i class="equalizerBtn material-icons">equalizer</i></span>
                                                    </div>
                                                    <div class="hide-active">
                                                        <span class="chat-btn"><i class="material-icons">chat</i> 32 Comment</span>
                                                    </div>
                                                </div>
                                                <div class="expand-right-sec">
                                                    <div class="visible-active">
                                                        <a class="dropdown-toggle" href="#">Sort by Best <i class="material-icons">arrow_drop_down</i></a>
                                                        <ul class="dropdown-menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li role="separator" class="divider"></li> <li><a href="#">Separated link</a></li> </ul>
                                                    </div>
                                                    <div class="hide-active">
                                                        <span><i class="equalizerBtn material-icons">equalizer</i></span><span class="heart-sec"><i class="anim-icon heart"></i> 14</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-chat-wrap">
                                            <div class="comment-chat-bar">
                                                    <form class="pushing-form">
                                                        <a href="#"><img src="img/jeff.jpg" alt=""></a>
                                                        <span><i class="anim-icon camera"></i><textarea placeholder="What do you want to share?"></textarea></span>
                                                        <div class="icon-sec clearfix">
                                                            <button type="submit">Send</button>
                                                            <div class="icon-sec-right">
                                                                <em href="#"><span class="anim-icon camera"></span> media</em>
                                                                <em href="#"><i class="material-icons">location_on</i> <b>Location</b></em>
                                                                <em href="#"><i class="material-icons">unarchive</i> <b>Poll</b></em>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            <div class="latest-comment-chat comment-chat-sec">
                                                <div class="comment-chat-fig">
                                                    <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                    <div class="feed-person-sec">
                                                        <span class="clip-btn"></span>
                                                        <div class="feed-upper-sec">
                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                            <h3>Cristhofer Andana Alcanio</h3>
                                                            <address><i class="material-icons">location_on</i> SAN FANCISCO</address>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                            <a class="btn follow-btn" href="#">Follow</a>
                                                            <div class="follow-sec clearfix">
                                                                <div class="follow-left-sec">
                                                                    <span>200</span><i>Connections</i>
                                                                </div>
                                                                <div class="follow-right-sec">
                                                                    <span>1.9M</span><i>Followers</i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="feed-lower-sec">
                                                            <h3><i>- Famous Recipes -</i></h3>
                                                            <div class="feed-inner-sec clearfix">
                                                                <div class="feed-lower-info">
                                                                    <a href="#"><img src="img/NYCRooftop-8oz_large.jpg" alt=""></a>
                                                                </div>
                                                                <div class="feed-lower-info">
                                                                    <a href="#"><img src="img/NYCRooftop-8oz_large.jpg" alt=""></a>
                                                                </div>
                                                            </div>
                                                            <a class="more-btn" href="#">more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-chat-info">
                                                    <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                    <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                    <div class="clearfix">
                                                        <div class="share-reply">
                                                            <a href=""><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> . <a href="#">Reply</a> . <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-chat-sec">
                                                <div class="comment-chat-fig">
                                                    <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                    <div class="feed-person-sec">
                                                        <span class="clip-btn"></span>
                                                        <div class="feed-upper-sec">
                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                            <h3>Cristhofer Andana Alcanio</h3>
                                                            <address><i class="material-icons">location_on</i> SAN FANCISCO</address>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                            <a class="btn follow-btn" href="#">Follow</a>
                                                            <div class="follow-sec clearfix">
                                                                <div class="follow-left-sec">
                                                                    <span>200</span><i>Connections</i>
                                                                </div>
                                                                <div class="follow-right-sec">
                                                                    <span>1.9M</span><i>Followers</i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="feed-lower-sec">
                                                            <h3><i>- Famous Recipes -</i></h3>
                                                            <div class="feed-inner-sec clearfix">
                                                                <div class="feed-lower-info">
                                                                    <a href="#"><img src="img/NYCRooftop-8oz_large.jpg" alt=""></a>
                                                                </div>
                                                                <div class="feed-lower-info">
                                                                    <a href="#"><img src="img/NYCRooftop-8oz_large.jpg" alt=""></a>
                                                                </div>
                                                            </div>
                                                            <a class="more-btn" href="#">more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-chat-info">
                                                    <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                    <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                    <div class="clearfix">
                                                        <div class="share-reply">
                                                            <a href=""><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> . <a href="#">Reply</a> . <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="show-btn">Show More</a>
                                            <div class="comment-chat-sec">
                                                <div class="comment-chat-fig">
                                                    <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                    <div class="feed-person-sec">
                                                        <span class="clip-btn"></span>
                                                        <div class="feed-upper-sec">
                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                            <h3>Cristhofer Andana Alcanio</h3>
                                                            <address><i class="material-icons">location_on</i> SAN FANCISCO</address>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                            <a class="btn follow-btn" href="#">Follow</a>
                                                            <div class="follow-sec clearfix">
                                                                <div class="follow-left-sec">
                                                                    <span>200</span><i>Connections</i>
                                                                </div>
                                                                <div class="follow-right-sec">
                                                                    <span>1.9M</span><i>Followers</i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="feed-lower-sec">
                                                            <h3><i>- Famous Recipes -</i></h3>
                                                            <div class="feed-inner-sec clearfix">
                                                                <div class="feed-lower-info">
                                                                    <a href="#"><img src="img/NYCRooftop-8oz_large.jpg" alt=""></a>
                                                                </div>
                                                                <div class="feed-lower-info">
                                                                    <a href="#"><img src="img/NYCRooftop-8oz_large.jpg" alt=""></a>
                                                                </div>
                                                            </div>
                                                            <a class="more-btn" href="#">more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-chat-info">
                                                    <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                    <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                    <div class="clearfix">
                                                        <div class="share-reply">
                                                            <a href=""><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> . <a href="#">Reply</a> . <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="home-link"><img src="img/header-logo.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="sidebarWrap">
                                        <div class="post-sidebar contentSidebar">
                                            <span class="arrow-close anim-icon close"></span>
                                            <div class="post-sidebar-inner">
                                                <div class="sidebar_slider-sec">
                                                    <div class="flexslider">
                                                        <ul class="slides clearfix">
                                                            <li>
                                                                <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>137</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>3</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>43</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="chat-wrap">
                                                    <div class="clearfix">
                                                        <div class="chat-com-sec chat-left-sec">
                                                            <a class="" href="#"><i class="material-icons">chat</i> 26 Comment</a>
                                                        </div>
                                                        <div class="chat-com-sec chat-right-sec">
                                                            <span><i class="material-icons">favorite</i></span><span><i class="material-icons">autorenew</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="donate-form-sec">
                                                    <form class="donate-form-inner donate-discription-sec">
                                                        <div class="donate-discription-info">
                                                            <h2 class="clearfix"><a href="product">Lorem ipsum dolor sit amet.</a>
                                                                <span class="star-sec"><i><img src="img/star.png" alt="">
                                                                    </i><i><img src="img/star.png" alt="">
                                                                    </i><i><img src="img/star.png" alt="">
                                                                    </i><i><img src="img/star.png" alt="">
                                                                    </i><i><img src="img/star-o.png" alt=""></i>
                                                                </span>
                                                            </h2>
                                                            <p class="clearfix">consectetur adipisicing elit. Cumque inventore et laboriosam vel neque laborum, optio quis dicta magni consequatur distinctio hic nemo veniam temporibus, necessitatibus <span class="hidden-txt">repellat culpa facilis iure consectetur adipisicing elit. Cumque inventore et laboriosam vel neque</span><a href="#" class="more-info-btn"></a></p>
                                                            <div class="donate-discription-inner clearfix">
                                                                <div class="discription-inner-detail">
                                                                    <p>Estamailted: <span>May 2016</span></p>
                                                                </div>
                                                                <div class="discription-inner-detail">
                                                                    <p>Estamailted devlivery: <span>May 2016</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-agreed-sec catagary-sec">
                                                            <div class="clearfix">
                                                                <div class="form-agreed-left">
                                                                    <a href="#"><i class="material-icons">loyalty</i> Technology</a>
                                                                    <a href="#"><i class="material-icons">location_on</i> Sans Fancisco</a>
                                                                </div>
                                                                <div class="form-agreed-right">
                                                                    <a href="#" class="btn btn-purchase formBtn">Checkout</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-sidebar formSidebar">
                                            <span class="arrow-close anim-icon close"></span>
                                            <div class="post-sidebar-inner">
                                                <div class="side-slider-outer">
                                                    <ul class="slides clearfix">
                                                        <li>
                                                            <div class="clearfix">
                                                                <div class="side-slider-fig">
                                                                    <img src="img/product-img4.jpg" alt="">
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                </div>
                                                                <div class="side-slider-info">
                                                                    <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                    <p class="product-detail">
                                                                        <em>Cilantro</em>.
                                                                        <em>390 g</em>.
                                                                        <em>610 kcal</em>
                                                                    </p>
                                                                    <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                    <div class="side-slider-btn-sec clearfix">
                                                                        <div class="slider-btn-left">
                                                                            <img src="img/product-slider.jpg" alt="">
                                                                        </div>
                                                                        <div class="slider-btn-right">
                                                                            <a href="#" class="btn btn-purchase">Order</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="clearfix">
                                                                <div class="side-slider-fig">
                                                                    <img src="img/product-img4.jpg" alt="">
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                </div>
                                                                <div class="side-slider-info">
                                                                    <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                    <p class="product-detail">
                                                                        <em>Cilantro</em>.
                                                                        <em>390 g</em>.
                                                                        <em>610 kcal</em>
                                                                    </p>
                                                                    <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                    <div class="side-slider-btn-sec clearfix">
                                                                        <div class="slider-btn-left">
                                                                            <img src="img/product-slider.jpg" alt="">
                                                                        </div>
                                                                        <div class="slider-btn-right">
                                                                            <a href="#" class="btn btn-purchase">Order</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="clearfix">
                                                                <div class="side-slider-fig">
                                                                    <img src="img/product-img4.jpg" alt="">
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                </div>
                                                                <div class="side-slider-info">
                                                                    <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                    <p class="product-detail">
                                                                        <em>Cilantro</em>.
                                                                        <em>390 g</em>.
                                                                        <em>610 kcal</em>
                                                                    </p>
                                                                    <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                    <div class="side-slider-btn-sec clearfix">
                                                                        <div class="slider-btn-left">
                                                                            <img src="img/product-slider.jpg" alt="">
                                                                        </div>
                                                                        <div class="slider-btn-right">
                                                                            <a href="#" class="btn btn-purchase">Order</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="clearfix">
                                                                <div class="side-slider-fig">
                                                                    <img src="img/product-img4.jpg" alt="">
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                </div>
                                                                <div class="side-slider-info">
                                                                    <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                    <p class="product-detail">
                                                                        <em>Cilantro</em>.
                                                                        <em>390 g</em>.
                                                                        <em>610 kcal</em>
                                                                    </p>
                                                                    <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                    <div class="side-slider-btn-sec clearfix">
                                                                        <div class="slider-btn-left">
                                                                            <img src="img/product-slider.jpg" alt="">
                                                                        </div>
                                                                        <div class="slider-btn-right">
                                                                            <a href="#" class="btn btn-purchase">Order</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="donate-form-sec">
                                                    <form class="donate-form-inner">
                                                        <section>
                                                            <h3>Payment information</h3>
                                                            <p>Your payment method will not be changed at this time if the project is successfully funded, your payment method will be changed 178.00 when the projects ends.</p>
                                                        </section>
                                                        <section>
                                                            <h3 class="clearfix">Select payment method</h3>
                                                            <span><input name="payment" id="radio1" checked="" type="radio"><label for="radio1"><img src="img/visa.png" alt=""><p><b>Card ending in 8080</b>Expires 7-20-29</p><i class="material-icons">edit</i></label></span>
                                                            <span><input name="payment" id="radio2" type="radio"><label for="radio2">Use a new card<i class="material-icons">edit</i></label></span>
                                                        </section>
                                                        <section class="lowersec">
                                                            <h3 class="clearfix">Select a shipping address</h3>
                                                            <span><input name="payment1" id="radio3" checked="" type="radio"><label for="radio3"><p>Mykal Michael,<br> 2717 howell st apt 4302, dalla,tx, 75204</p><i class="material-icons">edit</i></label></span>
                                                            <span><input name="payment1" id="radio4" type="radio"><label for="radio4">Use a new address<i class="material-icons">edit</i></label></span>
                                                        </section>
                                                        <div class="form-agreed-sec">
                                                            <p>By pledging you agree to kickstarter’s <a href="#">Terms of use</a> and <a href="#">Privacy policy</a></p>
                                                            <div class="clearfix">
                                                                <div class="form-agreed-left">
                                                                    <a href="#" class="btn btn-addcart">ADD TO CART</a>
                                                                </div>
                                                                <div class="form-agreed-right">
                                                                    <a href="#" class="btn btn-purchase donateBtn">Purchase</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-info mainBody block-info-in">
                        <div class="block-inner">                        
                            <div class="block-add" style="display:none">
                                <div class="block-outer">
                                    <div class="block-post block-person-info">
                                        <div class="feed-top-sec clearfix">
                                            <div class="feed-top-left">
                                                <p><em class="feed-person-btn"><img src="img/profile-img1.png" alt=""> <strong>Akilli111 M. Johnson</strong></em> <span>Beautiful Picture in the World</span><i>February 22 at 7:20 am </i></p>
                                                <div class="feed-person-sec">
                                                    <div class="feed-upper-sec">
                                                        <div class="feed-upper-banner">
                                                            <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                                        </div>
                                                        <div class="feed-banner-botsec">
                                                            <div class="clearfix">
                                                                <div class="feed-banner-botinfo">
                                                                    <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                                    <h3>mykal <span>@mykalmorton</span></h3>
                                                                </div>
                                                                <div class="feed-banner-botsocial">
                                                                    <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                                                    <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                                                </div>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                        </div>
                                                        <div class="follow-sec clearfix">
                                                            <div class="follow-left-sec">
                                                                <span>200</span><i>Connections</i>
                                                            </div>
                                                            <div class="follow-right-sec">
                                                                <span>1.9M</span><i>Followers</i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="feed-lower-sec">
                                                        <h3><i>- Famous Recipes -</i></h3>
                                                        <div class="feed-inner-sec clearfix">
                                                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                                        </div>
                                                        <a class="more-btn" href="#">more</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="feed-top-right">
                                                <strong><b class="anim-icon retweet in feed-popup-btn"></b><small>14</small></strong>
                                                <div class="feed-tooltip-sec">
                                                    <a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                    </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                    </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                    </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                    </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                    </a><a href="#" class="tool-img"><img src="img/mikn-img.jpg" alt="">
                                                    </a><a href="#" class="tool-icon"><i class="material-icons">more_horiz</i></a>
                                                </div>
                                                <i class="dropdown-toggle material-icons pen-btn">sort</i>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#"><i class="material-icons">visibility_off</i><span>I don't want to see this</span></a></li>
                                                    <li><a href="#"><i class="material-icons">subject</i><span>Hide all for Chris Beek</span></a></li>
                                                    <li><a href="#"><i class="material-icons">flag</i><span>Report abuse</span></a></li>
                                                    <li><a href="#"><i class="material-icons">remove_circle</i><span>Remove connection</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="feed-top-left">
                                                <p style="margin: 0 0 0 50px;">How is your product perceived by your customers?</p>
                                            </div>
                                        </div>
                                        <div class="rating-sec box-rating-sec">
                                            <div class="clearfix">
                                                <div class="rating-left-sec">
                                                    <p><img src="img/article-img3.jpg" alt=""></p>
                                                </div>
                                                <div class="rating-right-sec">
                                                    <div class="feed-heading-wrap clearfix">
                                                        <div class="feed-heading-left">
                                                            <div class="feed-heading-sec">
                                                                <a href="#formSidebar" class="cart-menubtn"><i class="material-icons">shopping_cart</i></a>
                                                                <h2 class="feed-title">Lorem ipsum dolor sit amet.<span class="clip-marker"><img src="img/clip-icon.png" alt=""></span></h2>
                                                                <p><i>$319.00</i> <em>USD + Shopping Cost</em></p>
                                                            </div>
                                                        </div>
                                                        <div class="feed-heading-right">
                                                            <span class="expand-icon"><i class="material-icons">favorite</i> 14</span>
                                                        </div>
                                                    </div>
                                                    <p>I bet you didn't think you could make cookies using the Anova Precision Cooker. Sous vide cookies might look a little different than the typical oven recipe — here I've cooked the batter in small canning jars and then cut the <span class="more-info-txt">results into round bars — but they're far more fun to make. You can't just use any dough recipe, though. Traditional cookie recipes include a TON of butter, which makes for a mushy sous vide cookie. Here, I've modified a typical cookie recipe to include more flour, leavener, and some serious mixer action. The result is a moist, rich, decadent cookie that your friends will never forget. </span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-info-sec">
                                            <div class="expand-sec">
                                                <div class="comment-bar">
                                                    <span>14 Comments</span>
                                                </div>
                                                <div class="expand-left-sec">
                                                    <div class="visible-active">
                                                        <span class="chat-btn active"><i class="material-icons">chat</i></span><span><i class="equalizerBtn material-icons">equalizer</i></span>
                                                    </div>
                                                    <div class="hide-active">
                                                        <span class="chat-btn"><i class="material-icons">chat</i> 32 Comment</span>
                                                    </div>
                                                </div>
                                                <div class="expand-right-sec">
                                                    <div class="visible-active">
                                                        <a class="dropdown-toggle" href="#">Sort by Best <i class="material-icons">arrow_drop_down</i></a>
                                                        <ul class="dropdown-menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li role="separator" class="divider"></li> <li><a href="#">Separated link</a></li> </ul>
                                                    </div>
                                                    <div class="hide-active">
                                                        <span><i class="equalizerBtn material-icons">equalizer</i></span><span class="heart-sec"><i class="anim-icon heart"></i> 14</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-chat-wrap">
                                            <div class="comment-chat-bar">
                                                    <form class="pushing-form">
                                                        <a href="#"><img src="img/jeff.jpg" alt=""></a>
                                                        <span><i class="anim-icon camera"></i><textarea placeholder="What do you want to share?"></textarea></span>
                                                        <div class="icon-sec clearfix">
                                                            <button type="submit">Send</button>
                                                            <div class="icon-sec-right">
                                                                <em href="#"><span class="anim-icon camera"></span> media</em>
                                                                <em href="#"><i class="material-icons">location_on</i> <b>Location</b></em>
                                                                <em href="#"><i class="material-icons">unarchive</i> <b>Poll</b></em>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            <div class="latest-comment-chat comment-chat-sec">
                                                <div class="comment-chat-fig">
                                                    <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                    <div class="feed-person-sec">
                                                        <span class="clip-btn"></span>
                                                        <div class="feed-upper-sec">
                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                            <h3>Cristhofer Andana Alcanio</h3>
                                                            <address><i class="material-icons">location_on</i> SAN FANCISCO</address>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                            <a class="btn follow-btn" href="#">Follow</a>
                                                            <div class="follow-sec clearfix">
                                                                <div class="follow-left-sec">
                                                                    <span>200</span><i>Connections</i>
                                                                </div>
                                                                <div class="follow-right-sec">
                                                                    <span>1.9M</span><i>Followers</i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="feed-lower-sec">
                                                            <h3><i>- Famous Recipes -</i></h3>
                                                            <div class="feed-inner-sec clearfix">
                                                                <div class="feed-lower-info">
                                                                    <a href="#"><img src="img/NYCRooftop-8oz_large.jpg" alt=""></a>
                                                                </div>
                                                                <div class="feed-lower-info">
                                                                    <a href="#"><img src="img/NYCRooftop-8oz_large.jpg" alt=""></a>
                                                                </div>
                                                            </div>
                                                            <a class="more-btn" href="#">more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-chat-info">
                                                    <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                    <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                    <div class="clearfix">
                                                        <div class="share-reply">
                                                            <a href=""><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> . <a href="#">Reply</a> . <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-chat-sec">
                                                <div class="comment-chat-fig">
                                                    <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                    <div class="feed-person-sec">
                                                        <span class="clip-btn"></span>
                                                        <div class="feed-upper-sec">
                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                            <h3>Cristhofer Andana Alcanio</h3>
                                                            <address><i class="material-icons">location_on</i> SAN FANCISCO</address>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                            <a class="btn follow-btn" href="#">Follow</a>
                                                            <div class="follow-sec clearfix">
                                                                <div class="follow-left-sec">
                                                                    <span>200</span><i>Connections</i>
                                                                </div>
                                                                <div class="follow-right-sec">
                                                                    <span>1.9M</span><i>Followers</i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="feed-lower-sec">
                                                            <h3><i>- Famous Recipes -</i></h3>
                                                            <div class="feed-inner-sec clearfix">
                                                                <div class="feed-lower-info">
                                                                    <a href="#"><img src="img/NYCRooftop-8oz_large.jpg" alt=""></a>
                                                                </div>
                                                                <div class="feed-lower-info">
                                                                    <a href="#"><img src="img/NYCRooftop-8oz_large.jpg" alt=""></a>
                                                                </div>
                                                            </div>
                                                            <a class="more-btn" href="#">more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-chat-info">
                                                    <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                    <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                    <div class="clearfix">
                                                        <div class="share-reply">
                                                            <a href=""><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> . <a href="#">Reply</a> . <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="show-btn">Show More</a>
                                            <div class="comment-chat-sec">
                                                <div class="comment-chat-fig">
                                                    <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                                                    <div class="feed-person-sec">
                                                        <span class="clip-btn"></span>
                                                        <div class="feed-upper-sec">
                                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                                            <h3>Cristhofer Andana Alcanio</h3>
                                                            <address><i class="material-icons">location_on</i> SAN FANCISCO</address>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                                            <a class="btn follow-btn" href="#">Follow</a>
                                                            <div class="follow-sec clearfix">
                                                                <div class="follow-left-sec">
                                                                    <span>200</span><i>Connections</i>
                                                                </div>
                                                                <div class="follow-right-sec">
                                                                    <span>1.9M</span><i>Followers</i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="feed-lower-sec">
                                                            <h3><i>- Famous Recipes -</i></h3>
                                                            <div class="feed-inner-sec clearfix">
                                                                <div class="feed-lower-info">
                                                                    <a href="#"><img src="img/NYCRooftop-8oz_large.jpg" alt=""></a>
                                                                </div>
                                                                <div class="feed-lower-info">
                                                                    <a href="#"><img src="img/NYCRooftop-8oz_large.jpg" alt=""></a>
                                                                </div>
                                                            </div>
                                                            <a class="more-btn" href="#">more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-chat-info">
                                                    <h4 class="clearfix"><a href="#">Akilli M. Johnson</a> . 19 Days ago <span><i class="material-icons">favorite</i> 2</span></h4>
                                                    <p><a href="#">@tsipras_eu As a</a> European, as a classicist, i know that i will never be enough grateful to all the greeks, for what you are doing. </p>
                                                    <div class="clearfix">
                                                        <div class="share-reply">
                                                            <a href=""><span>9</span><span><i class="fa fa-angle-down"></i></span>|<span><i class="fa fa-angle-up"></i></span></a> . <a href="#">Reply</a> . <a href="#">Share <i class="fa fa-angle-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="home-link"><img src="img/header-logo.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="sidebarWrap">
                                        <div class="post-sidebar contentSidebar">
                                            <span class="arrow-close anim-icon close"></span>
                                            <div class="post-sidebar-inner">
                                                <div class="sidebar_slider-sec">
                                                    <div class="flexslider">
                                                        <ul class="slides clearfix">
                                                            <li>
                                                                <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>137</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>3</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="product"><img src="img/gray-bg.jpg" /></a>
                                                                <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>43</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="chat-wrap">
                                                    <div class="clearfix">
                                                        <div class="chat-com-sec chat-left-sec">
                                                            <a class="" href="#"><i class="material-icons">chat</i> 26 Comment</a>
                                                        </div>
                                                        <div class="chat-com-sec chat-right-sec">
                                                            <span><i class="material-icons">favorite</i></span><span><i class="material-icons">autorenew</i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="donate-form-sec">
                                                    <form class="donate-form-inner donate-discription-sec">
                                                        <div class="donate-discription-info">
                                                            <h2 class="clearfix"><a href="product">Lorem ipsum dolor sit amet.</a>
                                                                <span class="star-sec"><i><img src="img/star.png" alt="">
                                                                    </i><i><img src="img/star.png" alt="">
                                                                    </i><i><img src="img/star.png" alt="">
                                                                    </i><i><img src="img/star.png" alt="">
                                                                    </i><i><img src="img/star-o.png" alt=""></i>
                                                                </span>
                                                            </h2>
                                                            <p class="clearfix">consectetur adipisicing elit. Cumque inventore et laboriosam vel neque laborum, optio quis dicta magni consequatur distinctio hic nemo veniam temporibus, necessitatibus <span class="hidden-txt">repellat culpa facilis iure consectetur adipisicing elit. Cumque inventore et laboriosam vel neque</span><a href="#" class="more-info-btn"></a></p>
                                                            <div class="donate-discription-inner clearfix">
                                                                <div class="discription-inner-detail">
                                                                    <p>Estamailted: <span>May 2016</span></p>
                                                                </div>
                                                                <div class="discription-inner-detail">
                                                                    <p>Estamailted devlivery: <span>May 2016</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-agreed-sec catagary-sec">
                                                            <div class="clearfix">
                                                                <div class="form-agreed-left">
                                                                    <a href="#"><i class="material-icons">loyalty</i> Technology</a>
                                                                    <a href="#"><i class="material-icons">location_on</i> Sans Fancisco</a>
                                                                </div>
                                                                <div class="form-agreed-right">
                                                                    <a href="#" class="btn btn-purchase formBtn">Checkout</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-sidebar formSidebar">
                                            <span class="arrow-close anim-icon close"></span>
                                            <div class="post-sidebar-inner">
                                                <div class="side-slider-outer">
                                                    <ul class="slides clearfix">
                                                        <li>
                                                            <div class="clearfix">
                                                                <div class="side-slider-fig">
                                                                    <img src="img/product-img4.jpg" alt="">
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                </div>
                                                                <div class="side-slider-info">
                                                                    <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                    <p class="product-detail">
                                                                        <em>Cilantro</em>.
                                                                        <em>390 g</em>.
                                                                        <em>610 kcal</em>
                                                                    </p>
                                                                    <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                    <div class="side-slider-btn-sec clearfix">
                                                                        <div class="slider-btn-left">
                                                                            <img src="img/product-slider.jpg" alt="">
                                                                        </div>
                                                                        <div class="slider-btn-right">
                                                                            <a href="#" class="btn btn-purchase">Order</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="clearfix">
                                                                <div class="side-slider-fig">
                                                                    <img src="img/product-img4.jpg" alt="">
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                </div>
                                                                <div class="side-slider-info">
                                                                    <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                    <p class="product-detail">
                                                                        <em>Cilantro</em>.
                                                                        <em>390 g</em>.
                                                                        <em>610 kcal</em>
                                                                    </p>
                                                                    <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                    <div class="side-slider-btn-sec clearfix">
                                                                        <div class="slider-btn-left">
                                                                            <img src="img/product-slider.jpg" alt="">
                                                                        </div>
                                                                        <div class="slider-btn-right">
                                                                            <a href="#" class="btn btn-purchase">Order</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="clearfix">
                                                                <div class="side-slider-fig">
                                                                    <img src="img/product-img4.jpg" alt="">
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                </div>
                                                                <div class="side-slider-info">
                                                                    <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                    <p class="product-detail">
                                                                        <em>Cilantro</em>.
                                                                        <em>390 g</em>.
                                                                        <em>610 kcal</em>
                                                                    </p>
                                                                    <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                    <div class="side-slider-btn-sec clearfix">
                                                                        <div class="slider-btn-left">
                                                                            <img src="img/product-slider.jpg" alt="">
                                                                        </div>
                                                                        <div class="slider-btn-right">
                                                                            <a href="#" class="btn btn-purchase">Order</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="clearfix">
                                                                <div class="side-slider-fig">
                                                                    <img src="img/product-img4.jpg" alt="">
                                                                    <a href="#" class="formBtn form_slide_price"><sup>$</sup><span>37</span></a>
                                                                </div>
                                                                <div class="side-slider-info">
                                                                    <h3>GRILLED SHRIMP<br>WITH VINAIGRETTE</h3>
                                                                    <p class="product-detail">
                                                                        <em>Cilantro</em>.
                                                                        <em>390 g</em>.
                                                                        <em>610 kcal</em>
                                                                    </p>
                                                                    <p><span>25m cooking</span><span>15m delivery</span></p>
                                                                    <div class="side-slider-btn-sec clearfix">
                                                                        <div class="slider-btn-left">
                                                                            <img src="img/product-slider.jpg" alt="">
                                                                        </div>
                                                                        <div class="slider-btn-right">
                                                                            <a href="#" class="btn btn-purchase">Order</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="donate-form-sec">
                                                    <form class="donate-form-inner">
                                                        <section>
                                                            <h3>Payment information</h3>
                                                            <p>Your payment method will not be changed at this time if the project is successfully funded, your payment method will be changed 178.00 when the projects ends.</p>
                                                        </section>
                                                        <section>
                                                            <h3 class="clearfix">Select payment method</h3>
                                                            <span><input name="payment" id="radio1" checked="" type="radio"><label for="radio1"><img src="img/visa.png" alt=""><p><b>Card ending in 8080</b>Expires 7-20-29</p><i class="material-icons">edit</i></label></span>
                                                            <span><input name="payment" id="radio2" type="radio"><label for="radio2">Use a new card<i class="material-icons">edit</i></label></span>
                                                        </section>
                                                        <section class="lowersec">
                                                            <h3 class="clearfix">Select a shipping address</h3>
                                                            <span><input name="payment1" id="radio3" checked="" type="radio"><label for="radio3"><p>Mykal Michael,<br> 2717 howell st apt 4302, dalla,tx, 75204</p><i class="material-icons">edit</i></label></span>
                                                            <span><input name="payment1" id="radio4" type="radio"><label for="radio4">Use a new address<i class="material-icons">edit</i></label></span>
                                                        </section>
                                                        <div class="form-agreed-sec">
                                                            <p>By pledging you agree to kickstarter’s <a href="#">Terms of use</a> and <a href="#">Privacy policy</a></p>
                                                            <div class="clearfix">
                                                                <div class="form-agreed-left">
                                                                    <a href="#" class="btn btn-addcart">ADD TO CART</a>
                                                                </div>
                                                                <div class="form-agreed-right">
                                                                    <a href="#" class="btn btn-purchase donateBtn">Purchase</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!--main end -->

<div class="feed-product-popup feed-popup1 feed-popup1a">
    <div class="feed-modal-dialog">
        <div class="material-top">
            <h2>Written Annotations</h2>
            <i class="material-icons">close</i>
        </div>
        <div class="feed-modal-body">
            <div class="feed-body-main clearfix">
                <div class="feed-main-lt">
                    <div class="feed-main-top">
                        <div class="feed-top-fig">
                            <img src="img/spon-img1.jpg" alt="">
                            <!-- <a href="#" class="form_slide_price"><span>5</span><i>%</i></a> -->
                        </div>
                    </div>
                    <h4>Discription</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed pariatur nisi, vel. Minima, culpa tempore libero aspernatur consequatur ratione distinctio! Asperiores dolores tempora neque aperiam explicabo quidem temporibus possimus sunt.</p>
                    <p>From United States of America</p>
                    <p>From United States of America</p>
                </div>
                <div class="feed-main-rt">
                    <form class="clearfix">
                        <div class="feed-main-fig"><img src="img/tweet-fig.png"></div>
                        <div class="feed-main-info">
                            <textarea placeholder="What’s on your mind?"></textarea>
                            <div class="clearfix">
                                <div class="feed-main-info-lt">
                                    <i class="material-icons">photo_camera</i><!-- <i class="material-icons">video_call</i> -->
                                </div>
                                <div class="feed-main-info-rt">
                                    <span>140</span><!-- <a href="#"><img src="img/leaf-img.png" alt="">Tweet</a> -->
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="delivery-data-sec clearfix">
                        <h3><a href="#"><img src="img/tweet-fig.png"></a> How to get started</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur et asperiores veritatis explicabo. Nobis, ut, laboriosam. Necessitatibus hic unde maxime alias in rem, odio iusto, amet eos praesentium voluptatem soluta!</p>
                        <a href="#">Edit</a>
                    </div>
                    <div class="spon-price-wrap">
                        <table>
                            <tr>
                                <td>Price</td>
                                <td>$27.45</td>
                            </tr>
                            <tr>
                                <td>Commision</td>
                                <td><b>$2.75</b></td>
                            </tr>
                        </table>
                        <div class="spon-price-select-sec">
                            <div class="spon-price-select-info">
                                <span>
                                    <select name="" id="">
                                        <option value="">Worldwide</option>
                                        <option value="">Worldwide</option>
                                        <option value="">Worldwide</option>
                                    </select>
                                </span>
                                <a class="next" href="#"><i class="material-icons">lock</i><span>Next</span></a>
                                <!-- <button>kanoop</button> -->
                            </div>
                            <!-- <div class="spon-price-select-hr"></div>
                            <div class="spon-price-select-info">
                                <input type="text"><button>Copy Link</button>
                            </div> -->
                        </div>
                    </div>
                    <div class="budget-sec">
                        <h2>Budget</h2>
                        <p>Select how much you would like to Spend.</p>
                        <!-- <img src="img/feed-modal-slider.jpg" alt=""> -->
                        <div class="budget-slider">
                            <ul class="clearfix">
                                <li><input type="radio" name="glow" id="glow1"><label for="glow1"></label><span>10$</span></li>
                                <li><input type="radio" name="glow" id="glow2"><label for="glow2"></label><span>50$</span></li>
                                <li><input type="radio" name="glow" id="glow3"><label for="glow3"></label><span>100$</span></li>
                                <li><input checked="" type="radio" name="glow" id="glow4"><label for="glow4"></label><span>200$</span></li>
                                <li><input type="radio" name="glow" id="glow5"><label for="glow5"></label><span>500$</span></li>
                                <li><input type="radio" name="glow" id="glow6"><label for="glow6"></label><span>1000$</span></li>
                                <li><input type="radio" name="glow" id="glow7"><label for="glow7"></label><span>2500$</span></li>
                            </ul>
                        </div>
                        <p><span><a href="#">1250</a> estimated engagemnts</span></p>
                    </div>
                    <div class="delivery-sec">
                        <table>
                            <tr>
                                <td><span>Estimated Delivery:</span></td>
                                <td>2-5 days to <a href="#">USA</a></td>
                            </tr>
                            <tr>
                                <td><span>Ships from</span></td>
                                <td>USA</td>
                            </tr>
                            <tr>
                                <td><span>Return Policy</span></td>
                                <td>30 day returns. <a href="#">View details</a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="detail-sidebar">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <div class="card-detail">
                                        <h2>Choose your payment method</h2>
                                        <div class="card-sec clearfix">
                                            <div class="card-fig">
                                                <img src="img/card.jpg" alt="">
                                            </div>
                                            <div class="card-info">
                                                <p>Michael Morton 2817 southern cross garland. TX, 75041</p>
                                                <input name="card" id="redio1" type="radio"><label for="redio1">Use this card</label>
                                            </div>
                                        </div>
                                        <div class="card-sec clearfix">
                                            <div class="card-fig">
                                                <img src="img/card.jpg" alt="">
                                            </div>
                                            <div class="card-info">
                                                <p>Michael Morton 2817 southern cross garland. TX, 75041</p>
                                                <input name="card" id="redio2" type="radio"><label for="redio2">Use this card</label>
                                            </div>
                                        </div>
                                        <div class="place-btn-sec">
                                            <a href="#">place order</a>
                                        </div>
                                        <div class="card-sec clearfix">
                                            <a class="addCardLink" href="#">add a new card</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="card-outer">
                                        <h3>payment<span><i class="material-icons">lock</i> Secured by <a href="#">stripe</a></span></h3>
                                        <div class="card-inner">
                                            <div class="card-wrapper"></div>
                                            <div id="form-container" class="active">
                                                <form class="card-form" action="">
                                                    <div>
                                                        <span>
                                                            <label for="">Name on card</label>
                                                            <input placeholder="Name on Card" name="name" type="text">
                                                        </span>                                    
                                                        <span>
                                                            <label for="">Card Number</label>
                                                            <input class="visa identified jp-card-invalid" placeholder="Card Number" name="number" type="text">
                                                        </span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 columns">
                                                            <label for="">Expire Date</label>
                                                            <input placeholder="MM/YY" name="expiry" type="text">
                                                        </div>
                                                
                                                        <div class="col-sm-6 columns">
                                                            <label for="">Card Code <i class="material-icons">help</i></label>
                                                            <input placeholder="CVC" name="cvc" type="text">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <p class="small">You won't to changed until the <a href="#">lockdown date.</a></p>
                                    </div>
                                    <div class="place-btn-sec">
                                        <a href="#">place order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="knoop-checkout-sec">
                        <h3>Checkout <span>Ref. 201610-6233</span></h3>
                        <p>Being the savage's bowsman. that is, the person who pulled the in his boat the second one from forward, it was my</p>
                        <table>
                            <tr>
                                <td>Plan Without Tax</td>
                                <td>$3999.00</td>
                            </tr>
                            <tr>
                                <td>Val (20%)</td>
                                <td>$799.80</td>
                            </tr>
                            <tr>
                                <td>Final Price</td>
                                <td class="final-check">$4798.80</td>
                            </tr>
                        </table>
                    </div>
                    <div class="knoop-checkout-card">
                        <h4>invoices informations</h4>
                        <form action="">
                            <div class="half-sec clearfix">
                                <div class="half"><label for="">Company Name</label><span><input type="text"></span></div>
                                <div class="half"><label for="">VAT</label><span><input type="text"></span></div>
                            </div>
                            <div class="full"><label for="">Card Number</label><span><input maxlength="19" type="text"><img src="img/visa.png" alt=""></span></div>
                            <div class="multy-sec clearfix">
                                <div class="multy"><label for="">Card Holder</label><span><input type="text" placeholder="Name"></span></div>
                                <div class="multy-sel">
                                    <label for="">Expiration Date</label>
                                    <span><select name="" id="">
                                        <option value="0">1</option>
                                        <option value="1">2</option>
                                        <option value="2">3</option>
                                    </select>
                                    </span><span><select name="" id="">
                                        <option value="0">2017</option>
                                        <option value="1">2018</option>
                                        <option value="2">2019</option>
                                    </select></span>
                                </div>
                                <div class="multy-one"><label for="">CVC</label><span><input maxlength="3" type="text" placeholder="123"><i class="material-icons">help</i></span></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="feed-modal-foot clearfix">
            <div class="feed-foot-lt">
                <div class="spon-price-select-info">
                    <input type="text"><button>Copy Link</button>
                </div>
            </div>
            <div class="feed-foot-rt">
                <a class="rback" href="#"><span>$49.99 . Pay Now</span></a><a class="next" href="#"><i class="material-icons">lock</i><span>Next</span></a>
            </div>
        </div>
    </div>
</div>

<!-- <div class="feed-product-popup feed-popup1 feed-popup3">
    <div class="feed-modal-dialog">
        <div class="material-top">
            <h2>Written Annotations</h2>
            <i class="material-icons">close</i>
        </div>
        <div class="feed-modal-body">
            <div class="feed-body-main clearfix">
                <div class="feed-main-lt">
                    <div class="feed-main-top">
                        <div class="feed-top-fig">
                            <img src="img/spon-img1.jpg" alt="">
                        </div>
                    </div>
                    <h4>Discription</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed pariatur nisi, vel. Minima, culpa tempore libero aspernatur consequatur ratione distinctio! Asperiores dolores tempora neque aperiam explicabo quidem temporibus possimus sunt.</p>
                    <p>From United States of America</p>
                    <p>From United States of America</p>
                </div>
                <div class="feed-main-rt">
                    <div class="feed-product-info">
                        <form>                            
                            <label>Flavor</label>
                            <span class="arrow-sign">
                                <select>
                                    <option value="">Select</option>
                                    <option value="0">Apple</option>
                                    <option value="1">Mango</option>
                                    <option value="2">Mint</option>
                                </select>
                            </span>
                            <div class="clearfix">
                                <div class="form-selected-left">
                                    <span><i>qty</i><select class="select1" name="" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select></span><b>$10.00</b>
                                </div>
                                <div class="form-selected-right">
                                    <a href="product-card">Add to Cart</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="delivery-data-sec clearfix">
                        <h3><a href="#"><img src="img/tweet-fig.png"></a> How to get started</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur et asperiores veritatis explicabo. Nobis, ut, laboriosam. Necessitatibus hic unde maxime alias in rem, odio iusto, amet eos praesentium voluptatem soluta!</p>
                        <a href="#">Edit</a>
                    </div>
                    <div class="delivery-sec">
                        <table>
                            <tr>
                                <td><span>Estimated Delivery:</span></td>
                                <td>2-5 days to <a href="#">USA</a></td>
                            </tr>
                            <tr>
                                <td><span>Ships from</span></td>
                                <td>USA</td>
                            </tr>
                            <tr>
                                <td><span>Return Policy</span></td>
                                <td>30 day returns. <a href="#">View details</a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="detail-sidebar">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <div class="card-detail">
                                        <h2>Choose your payment method</h2>
                                        <div class="card-sec clearfix">
                                            <div class="card-fig">
                                                <img src="img/card.jpg" alt="">
                                            </div>
                                            <div class="card-info">
                                                <p>Michael Morton 2817 southern cross garland. TX, 75041</p>
                                                <input name="card" id="redio1" type="radio"><label for="redio1">Use this card</label>
                                            </div>
                                        </div>
                                        <div class="card-sec clearfix">
                                            <div class="card-fig">
                                                <img src="img/card.jpg" alt="">
                                            </div>
                                            <div class="card-info">
                                                <p>Michael Morton 2817 southern cross garland. TX, 75041</p>
                                                <input name="card" id="redio2" type="radio"><label for="redio2">Use this card</label>
                                            </div>
                                        </div>
                                        <div class="place-btn-sec">
                                            <a href="#">place order</a>
                                        </div>
                                        <div class="card-sec clearfix">
                                            <a class="addCardLink" href="#">add a new card</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="card-outer">
                                        <h3>payment<span><i class="material-icons">lock</i> Secured by <a href="#">stripe</a></span></h3>
                                        <div class="card-inner">
                                            <div class="card-wrapper"></div>
                                            <div id="form-container" class="active">
                                                <form class="card-form" action="">
                                                    <div>
                                                        <span>
                                                            <label for="">Name on card</label>
                                                            <input placeholder="Name on Card" name="name" type="text">
                                                        </span>                                    
                                                        <span>
                                                            <label for="">Card Number</label>
                                                            <input class="visa identified jp-card-invalid" placeholder="Card Number" name="number" type="text">
                                                        </span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 columns">
                                                            <label for="">Expire Date</label>
                                                            <input placeholder="MM/YY" name="expiry" type="text">
                                                        </div>
                                                
                                                        <div class="col-sm-6 columns">
                                                            <label for="">Card Code <i class="material-icons">help</i></label>
                                                            <input placeholder="CVC" name="cvc" type="text">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <p class="small">You won't to changed until the <a href="#">lockdown date.</a></p>
                                    </div>
                                    <div class="place-btn-sec">
                                        <a href="#">place order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="knoop-checkout-sec">
                        <h3>Checkout <span>Ref. 201610-6233</span></h3>
                        <p>Being the savage's bowsman. that is, the person who pulled the in his boat the second one from forward, it was my</p>
                        <table>
                            <tr>
                                <td>Plan Without Tax</td>
                                <td>$3999.00</td>
                            </tr>
                            <tr>
                                <td>Val (20%)</td>
                                <td>$799.80</td>
                            </tr>
                            <tr>
                                <td>Final Price</td>
                                <td class="final-check">$4798.80</td>
                            </tr>
                        </table>
                    </div>
                    <div class="knoop-checkout-card">
                        <h4>invoices informations</h4>
                        <form action="">
                            <div class="half-sec clearfix">
                                <div class="half"><label for="">Company Name</label><span><input type="text"></span></div>
                                <div class="half"><label for="">VAT</label><span><input type="text"></span></div>
                            </div>
                            <div class="full"><label for="">Card Number</label><span><input maxlength="19" type="text"><img src="img/visa.png" alt=""></span></div>
                            <div class="multy-sec clearfix">
                                <div class="multy"><label for="">Card Holder</label><span><input type="text" placeholder="Name"></span></div>
                                <div class="multy-sel">
                                    <label for="">Expiration Date</label>
                                    <span><select name="" id="">
                                        <option value="0">1</option>
                                        <option value="1">2</option>
                                        <option value="2">3</option>
                                    </select>
                                    </span><span><select name="" id="">
                                        <option value="0">2017</option>
                                        <option value="1">2018</option>
                                        <option value="2">2019</option>
                                    </select></span>
                                </div>
                                <div class="multy-one"><label for="">CVC</label><span><input maxlength="3" type="text" placeholder="123"><i class="material-icons">help</i></span></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="feed-modal-foot clearfix">
            <div class="feed-foot-rt">
                <a class="rback" href="#"><span>$49.99 . Pay Now</span></a><a class="next" href="#"><i class="material-icons">lock</i><span>Next</span></a>
            </div>
        </div>
    </div>
</div> -->
<div class="feed-product-popup feed-popup1 feed-popup3">
    <div class="feed-modal-dialog">
        <div class="material-top">
            <h2>Apple Watch Edition</h2>
            <i class="material-icons">close</i>
        </div>
        <div class="feed-modal-body">
            <div class="feed-body-main clearfix">
                <div class="feed-main-lt">
                    <div class="feed-main-top">
                        <div class="feed-top-fig">
                            <img src="img/spon-img1.jpg" alt="">
                        </div>
                    </div>
                    <h4>Discription</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed pariatur nisi, vel. Minima, culpa tempore libero aspernatur consequatur ratione distinctio! Asperiores dolores tempora neque aperiam explicabo quidem temporibus possimus sunt.</p>
                    <p>From United States of America</p>
                    <p>From United States of America</p>
                </div>
                <div class="feed-main-rt"></div>
            </div>
        </div>
        <div class="feed-modal-foot clearfix">
            <div class="feed-foot-lt">
                <a href="#">Add to Cart</a>
            </div>
            <div class="feed-foot-rt">
                
            </div>
        </div>
    </div>
</div>

<div class="full-img-popup">
    <div class="full-popup-dialog">
        <div class="feed-top-sec clearfix">
            <div class="feed-top-left">
                <p><em class="feed-person-btn"><img src="img/profile-img1.png" alt=""> <strong>Akilli M. Johnson</strong></em> <span>Beautiful Picture in the World</span><i>February 22 at 7:20 am</i></p>
                <div class="feed-person-sec">
                    <!-- <span class="clip-btn"></span> -->
                    <div class="feed-upper-sec">
                        <div class="feed-upper-banner">
                            <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                        </div>
                        <div class="feed-banner-botsec">
                            <div class="clearfix">
                                <div class="feed-banner-botinfo">
                                    <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                    <h3>mykal <span>@mykalmorton</span></h3>
                                </div>
                                <div class="feed-banner-botsocial">
                                    <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                    <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                    <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                        </div>
                        <div class="follow-sec clearfix">
                            <div class="follow-left-sec">
                                <span>200</span><i>Connections</i>
                            </div>
                            <div class="follow-right-sec">
                                <span>1.9M</span><i>Followers</i>
                            </div>
                        </div>
                    </div>
                    <div class="feed-lower-sec">
                        <h3><i>- Famous Recipes -</i></h3>
                        <div class="feed-inner-sec clearfix">
                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                            <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                        </div>
                        <a class="more-btn" href="#">more</a>
                    </div>
                </div>
            </div>
            <div class="feed-top-right">
                <a class="btn-white btn-share" href="#">Following</a><a class="btn-blue btn-share" href="#">Share</a>
                <i class="dropdown-toggle material-icons pin-btn">more_horiz</i>
                <ul class="dropdown-menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li role="separator" class="divider"></li> <li><a href="#">Separated link</a></li> </ul>
            </div>
        </div>
        <div class="fig-sec">
            <div class="feed-heading-wrap clearfix">
                <div class="feed-heading-left">
                    <h2 class="feed-title">Lorem ipsum dolor sit amet.</h2>
                </div>
            </div>
            <div class="full-img-sec">                
                <img src="img/full-img.jpg" alt="">
            </div>
        </div>
        <div class="feed-heading-wrap clearfix">
            <div class="feed-heading-left">
                <div class="feed-heading-sec">
                    <a href="#formSidebar" class="cart-menubtn"><i class="material-icons">shopping_cart</i></a>
                    <p><i>$319.00</i> <em>USD + Shopping Cost</em></p>
                </div>
            </div>
            <div class="feed-heading-right">
                <span class="star-sec"><i><img src="img/star.png" alt="">
                    </i><i><img src="img/star.png" alt="">
                    </i><i><img src="img/star.png" alt="">
                    </i><i><img src="img/star.png" alt="">
                    </i><i><img src="img/star-o.png" alt=""></i>
                </span>
            </div>
        </div>
        <div class="chat-sec">
            <div class="chat-people-sec clearfix">
                <div class="chat-people-left">
                    <p><span>RETWEETS</span><br><b>9</b></p><p><span>LIKES</span><br><b>6</b></p>
                </div>
                <div class="chat-people-right">
                    <a href="#"><img src="img/people-img.jpg" alt=""></a>
                    <a href="#"><img src="img/people-img.jpg" alt=""></a>
                    <a href="#"><img src="img/people-img.jpg" alt=""></a>
                    <a href="#"><img src="img/people-img.jpg" alt=""></a>
                    <a href="#"><img src="img/people-img.jpg" alt=""></a>
                    <a href="#"><img src="img/people-img.jpg" alt=""></a>
                    <a href="#"><img src="img/people-img.jpg" alt=""></a>
                    <a href="#"><img src="img/people-img.jpg" alt=""></a>
                    <a href="#"><img src="img/people-img.jpg" alt=""></a>
                </div>
            </div>
            <div class="single-person-info">
                <div class="single-person-left">
                    <a href="#"><img src="img/chat-icon1.jpg" alt=""></a>
                </div>
                <div class="single-person-right">
                    <div class="single-person-top">
                        <p><b>Jim Cramer</b> <i>jimcramer</i> <span>. 10s</span></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                    </div>
                    <div class="expand-sec">
                        <div class="comment-bar">
                            <span>14 Comments</span>
                        </div>
                        <div class="expand-left-sec">
                            <div class="visible-active">
                                <span class="chat-btn active"><i class="material-icons">chat</i></span><span><i class="equalizerBtn material-icons">equalizer</i></span>
                            </div>
                            <div class="hide-active">
                                <span class="chat-btn"><i class="material-icons">chat</i> 32 Comment</span>
                            </div>
                        </div>
                        <div class="expand-right-sec">
                            <div class="visible-active">
                                <a class="dropdown-toggle" href="#">Sort by Best <i class="material-icons">arrow_drop_down</i></a>
                                <ul class="dropdown-menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li role="separator" class="divider"></li> <li><a href="#">Separated link</a></li> </ul>
                            </div>
                            <div class="hide-active">
                                <span><i class="equalizerBtn material-icons">equalizer</i></span><span class="heart-sec"><i class="anim-icon heart"></i> 14</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-chat-bar">
                <form class="pushing-form">
                    <a href="#"><img src="img/jeff.jpg" alt=""></a>
                    <span><i class="anim-icon camera"></i><textarea placeholder="What do you want to share?"></textarea></span>
                    <div class="icon-sec clearfix">
                        <button type="submit">Send</button>
                        <div class="icon-sec-right">
                            <em href="#"><span class="anim-icon camera"></span> media</em>
                            <em href="#"><i class="material-icons">location_on</i> <b>Location</b></em>
                            <em href="#"><i class="material-icons">unarchive</i> <b>Poll</b></em>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="sign-in-popup">
    <div class="feed-modal-dialog">
        <div class="feed-modal-head">
            <a class="s-logo" href="#"><img src="img/s-logo.png" alt=""></a>
            <h3>Lorem ipsum dolor sit amet.</h3>
        </div>
        <div class="sign-modal-body">
            <div class="sign-modal-sec">
                <div class="outer  clearfix">
                    <div class="sign-modal-info">
                        <div class="inner">
                            <div class="sign-modal-top">
                                <h4>BASIC</h4>
                                <div class="sign-modal-btn-sec">
                                    <h2>FREE</h2>
                                    <a href="#" class="sign-btn">Sign up</a>
                                </div>
                            </div>
                            <p>Lives in Santa Monica BoulevardLos Angeles, California 90025-4718</p>
                        </div>
                    </div>
                    <div class="sign-modal-info">
                        <div class="inner">
                            <div class="sign-modal-top">
                                <h4>STANDARD</h4>
                                <div class="sign-modal-btn-sec">
                                    <h2>$299/month</h2>
                                    <a href="#" class="sign-btn">Sign up</a>
                                </div>
                            </div>
                            <p>Lives in Santa Monica BoulevardLos Angeles, California 90025-4718</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-outer"></div>
<!--footer start -->
<div id="footer-wrap">
  <div class="container">
        <footer id="footer">
          <div class="footer-info">
                <h4>About us</h4>
                <ul>
                    <li><a href="#">What is Recipes?</a></li>
                    <li><a href="#">Who we are</a></li>
                    <li><a href="#">Stats</a></li>
                    <li><a href="#">Projects we love</a></li>
                </ul>
            </div>
            <div class="footer-info">
                <h4>Help</h4>
                <ul>
                    <li><a href="#">Trust &amp; Safety</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                </ul>
            </div>
            <div class="footer-info">
                <h4>Discover</h4>
                <ul>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Recces</a></li>
                    <li><a href="#">Soup</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Dews</a></li>
                    <li><a href="#">Soup</a></li>
                </ul>
            </div>
            <div class="footer-info">
                <h4>Hello</h4>
                <ul>
                    <li><a href="#"><img src="img/social-icon1.jpg" alt=""> Twitter</a></li>
                    <li><a href="#"><img src="img/social-icon2.jpg" alt=""> Facebook</a></li>
                    <li><a href="#"><img src="img/social-icon3.jpg" alt=""> Tumblr</a></li>
                    <li><a href="#"><img src="img/social-icon4.jpg" alt=""> Instagram</a></li>
                    <li><a href="#"><img src="img/social-icon5.jpg" alt=""> Pinterest</a></li>
                    <li><a href="#"><img src="img/social-icon6.jpg" alt=""> YouTube </a></li>
                </ul>      
            </div>
        </footer>
    </div>
</div>
<!--footer end -->

<div class="flyout-wrap">
    <a class="flyout-btn" href="#" title="Toggle"><span>Flyout Menu Toggle</span></a>
    <ul class="flyout flyout-init">
        <li><a href="#"><span data-toggle="tooltip" data-placement="top" title="Tooltip on top" style="color: red" class="fa fa-home"></span></a></li>
        <li><a href="#"><span data-toggle="tooltip" data-placement="top" title="Tooltip on top" style="color: blue" class="fa fa-inbox"></span></a></li>
        <li><a href="#"><span data-toggle="tooltip" data-placement="top" title="Tooltip on top" style="color: green" class="fa fa-cogs"></span></a></li>
        <li><a href="#"><span data-toggle="tooltip" data-placement="top" title="Tooltip on top" style="color: brown" class="fa fa-calendar"></span></a></li>
        <li><a href="#"><span data-toggle="tooltip" data-placement="top" title="Tooltip on top" style="color: orange" class="fa fa-user"></span></a></li>
        <li><a href="#"><span data-toggle="tooltip" data-placement="top" title="Tooltip on top" style="color: black" class="fa fa-file-text"></span></a></li>
    </ul>
    <!-- .flyout -->
</div>
<div class="flyout-overlay"></div>
<b class="jump-btn"><img src="https://d13yacurqjgara.cloudfront.net/assets/icon-backtotop-1b04df73090f6b0f3192a3b71874ca3b3cc19dff16adc6cf365cd0c75897f6c0.png" alt=""></b>

<!-- Button trigger modal -->
<!-- <button type="button" class="edit-btn" data-toggle="modal" data-target="#myModal"><img src="img/leaf-img.png" alt=""><span>Scribe</span></button> -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="block-textarea-outer">
            <i class="close-textarea material-icons">close</i>
            <div class="block-textarea-wrap clearfix">
                <div class="block-form-wrap">
                    <div class="block-textarea-upper">
                        <div class="block-textarea-upper-fig">
                            <img src="img/profile-img1.png" alt="">
                        </div>
                        <div class="block-textarea-upper-info">
                            <a href="#">Akilli M. Johnson</a><b><span class="dropdown-toggle">public <i class="material-icons">public</i></span><ul class="dropdown-menu"><li><a href="#">public</a></li><li role="separator" class="divider"></li><li><li><a href="#">private</a></li><li role="separator" class="divider"></li><li><a href="#">create</a></li></ul></b>
                            <p><em id="demo">February 22 at 7:20 am </em></p>
                        </div>
                    </div>
                    <form>
                        <div class="block-textarea-left">
                            <div class="expander-info"><a href="#" class="expander"><i class="material-icons">menu</i></a></div>
                        </div>
                        <span><i class="anim-icon camera"></i><textarea placeholder="What do you want to share?"></textarea></span>
                        <div class="icon-sec clearfix">
                            <button type="submit">Send</button>
                            <div class="icon-sec-right">
                                <a class="cammal1" href="#"><i class="material-icons">photo_camera</i> <b>media</b></a>
                                <a class="cammal2" href="#"><i class="material-icons">location_on</i> <b>Location</b></a>
                                <a class="cammal3" href="#"><i class="material-icons">unarchive</i> <b>Poll</b></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade equalizer-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >Modal title</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum libero qui perferendis omnis. Accusantium quisquam quae quis distinctio cupiditate, modi eveniet quia reiciendis, dicta iure quo, placeat optio ut, praesentium.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum libero qui perferendis omnis. Accusantium quisquam quae quis distinctio cupiditate, modi eveniet quia reiciendis, dicta iure quo, placeat optio ut, praesentium.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum libero qui perferendis omnis. Accusantium quisquam quae quis distinctio cupiditate, modi eveniet quia reiciendis, dicta iure quo, placeat optio ut, praesentium.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="share-modal-overlay"></div>
<div class="share-popup-sec">
    <div class="share-modal">
        <div class="share-modal-content">
            <span class="share-close"></span>
            <div class="share-modal-top">
                <a href="#"><img src="img/block-img1.jpg" alt=""></a>
                <div class="clearfix">
                    <div class="modal-top-left">
                        <h2>Lorem ipsum dolor sit</h2>
                    </div>
                    <div class="modal-top-right">
                        <span class="star-sec"><i><img src="img/star.png" alt="">
                        </i><i><img src="img/star.png" alt="">
                        </i><i><img src="img/star.png" alt="">
                        </i><i><img src="img/star.png" alt="">
                        </i><i><img src="img/star-o.png" alt=""></i></span>
                    </div>
                </div>
            </div>
            <div class="share-modal-bot">
                <form class="clearfix">
                    <textarea placeholder="Why should you followers buy this product?"></textarea>
                    <div class="share-btn-sec">
                        <span>140</span> <button type="button" class="btn btn-info"><i class="material-icons">compare</i> Repost</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
<div class="photo-popup-backdrop" style="display: none;">
    <div class="photo-gallary-popup gallary-popup1">
        <div class="photo-gallary-top">
            <div class="photo-gallary-inner-l"><b class="material-icons">keyboard_backspace</b><input type="text" value="NY"><i class="material-icons">close</i></div>
            <div class="photo-gallary-inner-ld active"><i class="material-icons">close</i><span>Share your location</span><b class="material-icons">search</b></div>
        </div>
        <div class="photo-gallary-bot">        
            <div class="photo-gallary-location">
                
                <div class="photo-gallary-location-sec">
                    <i class="material-icons">location_on</i><p><b>New York</b><br><span>New York, USA</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="photo-popup-backdrop" style="display: none;">
    <div class="photo-gallary-popup gallary-popup2">
        <div class="photo-gallary-top clearfix">
            <div class="photo-gallary-left"><i class="material-icons">close</i></div>
            <div class="photo-gallary-center">0 photos selected</div>
            <div class="photo-gallary-right"><a href="#">Done</a><span>Done</span></div>
        </div>
        <div class="photo-gallary-bot clearfix">
            <div class="photo-gallary-img"><a href="#"><img src="img/up-img.jpg" alt=""></a></div>
            <div class="photo-gallary-img"><i class="material-icons material-icons1">panorama_fish_eye</i><i class="material-icons material-icons2">check_circle</i><img src="img/block-img3.jpg" alt=""></div>
            <div class="photo-gallary-img"><i class="material-icons material-icons1">panorama_fish_eye</i><i class="material-icons material-icons2">check_circle</i><img src="img/block-img3.jpg" alt=""></div>
        </div>
    </div>
</div>
<div class="photo-popup-backdrop" style="display: none;">
    <div class="photo-popup-wrap gallary-popup3">
        <h3>Create a poll <i class="dropdown-toggle material-icons pin-btn">keyboard_arrow_down</i>
        <ul class="dropdown-menu"><li><input name="radioin" id="radio-in1" type="radio"><label for="radio-in1">Cover image only</label></li><li role="separator" class="divider"></li><li><input name="radioin" id="radio-in2" type="radio"><label for="radio-in2">image per answer</label></li></ul></h3>
        <div class="photo-popup-img-sec">
            <a href="#"><i class="material-icons">add_a_photo</i><img src="img/poll-img.jpg" alt=""></a>
            <div class="photo-popup-input-sec">
                <input type="text" placeholder="choice 1"><input type="text" placeholder="choice 2">
            </div>
        </div>
        <div class="photo-popup-input-group">
            <span><b onclick="$(this).parent('span').fadeOut();"></b><a href="#"></a><input type="text" placeholder="choice 1"></span>
            <span><b onclick="$(this).parent('span').fadeOut();"></b><a href="#"></a><input type="text" placeholder="choice 2"></span>
            <span><b onclick="$(this).parent('span').fadeOut();"></b><a href="#"></a><input type="text" placeholder="choice 3"></span>
        </div>
        <div class="photo-popup-btn"><a href="#">Add Choice</a></div>
        <div class="photo-popup-btn-sec"><a class="photo-popup-close" href="#">Cancel</a><a href="#">Done</a></div>
    </div>
</div>

<div class="backdrop-img-popup">
    <i class="material-icons backdrop-close">close</i>
    <div class="backdrop-img-wrap">
        <div class="backdrop-img-inner">
            <div class="backdrop-img-outer">
                <div class="clearfix">
                    <div class="block-textarea-upper">
                        <div class="block-textarea-upper-fig">
                            <img src="img/profile-img1.png" alt="">
                        </div>
                        <div class="feed-person-sec">
                            <!-- <span class="clip-btn"></span> -->
                            <div class="feed-upper-sec">
                                <div class="feed-upper-banner">
                                    <a class="btn follow-btn" href="#"><img src="img/blue-buzz.png" alt=""><span>Follow</span></a>
                                </div>
                                <div class="feed-banner-botsec">
                                    <div class="clearfix">
                                        <div class="feed-banner-botinfo">
                                            <a href="#"><img src="img/profile-img2.png" alt=""></a>
                                            <h3>mykal <span>@mykalmorton</span></h3>
                                        </div>
                                        <div class="feed-banner-botsocial">
                                            <a href="#"><img src="img/feed_social-icon1.jpg" alt=""></a>
                                            <a href="#"><img src="img/feed_social-icon2.jpg" alt=""></a>
                                            <a href="#"><img src="img/feed_social-icon3.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit inventore commodi hic quam minima!</p>
                                </div>
                                <div class="follow-sec clearfix">
                                    <div class="follow-left-sec">
                                        <span>200</span><i>Connections</i>
                                    </div>
                                    <div class="follow-right-sec">
                                        <span>1.9M</span><i>Followers</i>
                                    </div>
                                </div>
                            </div>
                            <div class="feed-lower-sec">
                                <h3><i>- Famous Recipes -</i></h3>
                                <div class="feed-inner-sec clearfix">
                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                    <a href="#"><img src="img/famous-img12.jpg" alt=""></a>
                                </div>
                                <a class="more-btn" href="#">more</a>
                            </div>
                        </div>
                        <div class="block-textarea-upper-info">
                            <a href="#">Akilli M. Johnson</a><b><span class="dropdown-toggle">public <i class="material-icons">public</i></span><ul class="dropdown-menu"><li><a href="#">public</a></li><li role="separator" class="divider"></li><li></li><li><a href="#">private</a></li><li role="separator" class="divider"></li><li><a href="#">create</a></li></ul></b>
                            <p><em id="demo1">Tue Oct 18 2016 16:54:27</em></p>
                        </div>
                    </div>
                    <div class="backdrop-top-sec">
                        <div class="clearfix">
                            <div class="backdrop-top-btn"><a href="#">Following</a><a href="#">Share</a></div>
                            <div class="feed-top-right">
                                <i class="dropdown-toggle material-icons pin-btn">keyboard_arrow_down</i>
                                <ul class="dropdown-menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li role="separator" class="divider"></li> <li><a href="#">Separated link</a></li> </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="under-backdrop">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat totam officiis cum culpa, rerum, labore unde, quisquam, qui tempora eaque ut! Quia, ipsa amet aliquid hic odio quasi expedita? Accusamus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat totam officiis cum culpa.</p>
            </div>
            <div class="backdrop-img-sec">
                <img src="img/full-img.jpg" alt="">
                <i class="material-icons">close</i>
            </div>
        </div>
    </div>
</div>

<div class="sidebar-overlay"></div>

<div class="notification-overlay notification-overlay1">
    <span class="close-noti-btn material-icons">close</span>
    <div class="notification-popup">
        <div class="notification-popup-inner"><img class="bell" src="img/bell.png" alt="alt">
            <h4>Never miss a Twitter notification by turning them in on your borwer.</h4>
            <p>Stay up-to-date even when you aren't on Twitter.</p>
            <a href="#" id="notificationButton" class="lead-more notification-btn"><span>Turn on notifications</span></a>
            <a class="notic-close-link" href="#">Not now</a>
        </div>
    </div>
</div>    
<div class="notic-step-overlay notic-step-overlay1">
    <div class="notic-step-popup">
        <div class="notic-step-top clearfix">
            <div class="notic-step-top-left">
                <span>1 OF 4</span>
            </div>
            <div class="notic-step-top-right">
                <span>Skip All</span>
            </div>
        </div>
        <div class="notic-step-mid">
            <h4><img src="img/step-home-icon.png" alt="">Welcome home!</h4>
            <p>This timeline is where you'll spend most of your time, getting instant updates about what matters to you.</p>
        </div>
        <div class="notic-step-bot clearfix">
            <div class="notic-step-bot-right">
                <a class="step-next" href="#">Next</a>
            </div>
        </div>
    </div>
</div>
<div class="notic-step-overlay notic-step-overlay2">
    <div class="notic-step-popup">
        <div class="notic-step-top clearfix">
            <div class="notic-step-top-left">
                <span>2 OF 4</span>
            </div>
            <div class="notic-step-top-right">
                <span>Skip All</span>
            </div>
        </div>
        <div class="notic-step-mid">
            <h4><img src="img/step-hash-icon.png" alt="">Learn the latest</h4>
            <p>Get instant insight into what people are talking about now.</p>
        </div>
        <div class="notic-step-bot clearfix">
            <div class="notic-step-bot-left">
                <a class="back-btn" href="#">back</a>
            </div>
            <div class="notic-step-bot-right">
                <a class="step-next" href="#">Next</a>
            </div>
        </div>
    </div>
</div>
<div class="notic-step-overlay notic-step-overlay3">
    <div class="notic-step-popup">
        <div class="notic-step-top clearfix">
            <div class="notic-step-top-left">
                <span>3 OF 4</span>
            </div>
            <div class="notic-step-top-right">
                <span>Skip All</span>
            </div>
        </div>
        <div class="notic-step-mid">
            <h4><img src="img/step-person-icon.png" alt="">Get more for what you love</h4>
            <p>Follow more accounts to get instant updates about topics you care about.</p>
        </div>
        <div class="notic-step-bot clearfix">
            <div class="notic-step-bot-left">
                <a class="back-btn" href="#">back</a>
            </div>
            <div class="notic-step-bot-right">
                <a class="step-next" href="#">Next</a>
            </div>
        </div>
    </div>
</div>
<div class="notic-step-overlay notic-step-overlay4">
    <div class="notic-step-popup">
        <div class="notic-step-top clearfix">
            <div class="notic-step-top-left">
                <span>4 OF 4</span>
            </div>
            <div class="notic-step-top-right">
                <span>Skip All</span>
            </div>
        </div>
        <div class="notic-step-mid">
            <h4><img src="img/step-search-icon.png" alt="">Find what's happening</h4>
            <p>See the latest conversations about any topic instantly.</p>
        </div>
        <div class="notic-step-bot clearfix">
            <div class="notic-step-bot-left">
                <a class="back-btn" href="#">back</a>
            </div>
            <div class="notic-step-bot-right">
                <a class="got-input-btn" href="#">Got it</a>
            </div>
        </div>
    </div>
</div>
</div>

<div class="live-popup-overlay">
    <div class="live-popup">
        <div class="live-popup-head">
            <h4>Make your event live</h4>
            <a href="#" class="material-icons">videocam</a>
            <i class="material-icons">close</i>
        </div>
        <div class="live-popup-form">
            <div class="live-popup-form-fig">
                <img src="img/tweet-fig.png">
            </div>
            <div class="live-popup-form-info">
                <textarea placeholder="Compose a new Tweet"></textarea>
                <div class="clearfix">
                    <div class="live-popup-info-left">
                        <a href="#"><i class="material-icons">photo_camera</i></a>
                    </div>
                    <div class="live-popup-info-right">140</div>
                </div>
            </div>
        </div>
        <div class="live-popup-content clearfix">
            <div class="live-content-left">
                <div class="live-content-top clearfix">
                    <div class="live-content-top-left">
                        <input id="live-radio1" name="live-radio" type="radio" value="live1-radio"><label for="live-radio1">Post now</label>
                        <input id="live-radio2" name="live-radio" type="radio" value="live2-radio"><label for="live-radio2">Custom</label>
                    </div>
                    <div class="live-content-top-right">
                        <input type="text" id="log">
                        <!-- <input type="text" class="datepicker" placeholder="Pick Date"> -->
                    </div>
                </div>
                <div id="jqxWidget"></div>
            </div>
            <div class="live-content-right">
                <div class="clearfix">
                    <div class="live-content-right-l">
                        <input id="datetimepicker" type='text' placeholder="Pick Time">
                    </div>
                    <div class="live-content-right-r">
                        <p>America/Chicage time<span>Current time: <i id="action1"></i></span></p>
                        <script>
                            var myVar = setInterval(myTimer, 1000);
                            function myTimer() {
                                var d = new Date();
                                document.getElementById("action1").innerHTML = d.toLocaleTimeString();
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="live-popup-foot clearfix">
            <div class="live-popup-foot-left">
                <a href="#">Save</a><a href="#">Preview</a><a href="#">Make event live</a>
            </div>
            <div class="live-popup-foot-right">
                <a href="chat">Tweet</a>
            </div>
        </div>
    </div>
</div>




</div><!--container-fluid -->
<script src="js/jquery.js"></script>
<script src="js/classie.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/datetimepicker.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript" src="js/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="js/jqwidgets/jqxdatetimeinput.js"></script>
<script type="text/javascript" src="js/jqwidgets/jqxcalendar.js"></script>
<script type="text/javascript" src="js/jqwidgets/globalize.js"></script>

<script src="js/scripts.js"></script>
<script src="js/out_scripts.js"></script>
<script src="js/feed.js"></script>

<script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script>

</body>
</html>
