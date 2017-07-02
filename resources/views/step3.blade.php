<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Kanopp</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/dhtmlx.css"/>
  
    <link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="css/rangeslider.css" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/rangeslider.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>
    <script src="js/ng-file-upload-shim.min.js"></script> <!-- for no html5 browsers support -->
    <script src="js/ng-file-upload.min.js"></script>
    <script src="js/StackBlur.js"></script>
    <script src="js/dhtmlx.js"></script>

    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <!-- <link href="css/today.css" rel="stylesheet" type="text/css"/> -->
    <script type="text/javascript">
      function off() {
        document.getElementById("overlay").style.display = "none";
      }
    </script>
    <style type="text/css">
      html,body{
        overflow:auto;
      }
      .col-sm-6.lang-drop {margin-top: 15px;}
      .lang-drop button.btn.dropdown-toggle.btn-default {width: 250px;height: 40px;font-size: 24px;
    line-height: 24px;border-radius: 0px;}
    .col-sm-6.lang-drop {
    margin: 15px 0;
}
.custom-filter span {
    display: inline-block;
    float: right;
    padding-left: 15px;
}
.main_image_step3 img{ width: 100%; }
.lang-drop .dropdown-menu.open {
    width: 250px;
}
.custom-filter {
    padding: 2% 0;
}
i.material-icons {
    font-size: 29px;
}
#sliderLink {
    float: right;
    color: #00a699;
}
.step3aeffects.floating-container-b .wrap-drag-drop {
    width: 124px;
    padding: 10px;
}
ol.custom-effects li {
    list-style: none;
    float: left;
    padding-left: 5px;
    cursor: pointer;
}

  #sliderObj {
    width: auto;
    display: inline-block;
    vertical-align: middle;
    height: 100%;
    } 

span.output-range {
    margin-top: 5px;
    color: #ff3000;
}
.rangeslider__handle:after{
  background-image: none;
}


/*color_fill*/
.color_fill,.effects-icon{
  cursor: pointer;
}
#coverpage,#coverpage-two {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    z-index: 10;
}

.step3a .wrap-drag-drop {
    padding: 5px;
    width: 124px;
    overflow: auto;
}
ol.custom-pallette li {
    border-radius: 50%;
    width: 40px;
    height: 40px;
    float: left;
    margin: 8px;
    list-style-type: none;
    border: 1px solid #9E9E9E;
}
ol.custom-pallette li.black {
    background: black;
}
ol.custom-pallette li.black.active {
    background: red;
    border-color: black;
    border-width: 7px;
    box-shadow: 0 0 1px #9E9E9E;
}
ol.custom-pallette li.black.active:after {
    content: "\f00c";
    font-family: FontAwesome;
    text-align: center;
    display: block;
    height: 100%;
    font-size: 19px;
    color: #ffffff;
    font-weight: normal;
}
ol.custom-pallette li.blue {
    background: blue;
}
ol.custom-pallette li.blue.active {
    background: red;
    border-color: blue;
    border-width: 7px;
    box-shadow: 0 0 1px #9E9E9E;
}
ol.custom-pallette li.blue.active:after {
    content: "\f00c";
    font-family: FontAwesome;
    text-align: center;
    display: block;
    height: 100%;
    font-size: 19px;
    color: #ffffff;
    font-weight: normal;
}
ol.custom-pallette li.yellow {
    background: yellow;
}
ol.custom-pallette li.yellow.active {
    background: red;
    border-color: yellow;
    border-width: 7px;
    box-shadow: 0 0 1px #9E9E9E;
}
ol.custom-pallette li.yellow.active:after {
    content: "\f00c";
    font-family: FontAwesome;
    text-align: center;
    display: block;
    height: 100%;
    font-size: 19px;
    color: #ffffff;
    font-weight: normal;
}
ol.custom-pallette li.white {
    background: white;
}
ol.custom-pallette li.white.active {
    background: red;
    border-color: white;
    border-width: 7px;
    box-shadow: 0 0 1px #9E9E9E;
}
ol.custom-pallette li.white.active:after {
    content: "\f00c";
    font-family: FontAwesome;
    text-align: center;
    display: block;
    height: 100%;
    font-size: 19px;
    color: #ffffff;
    font-weight: normal;
}
/*color_fill*/

/*blur effect*/
img#srcimg.blur_img {
    filter: blur(3px);
    -webkit-filter: blur(3px);
    -moz-filter: blur(3px);
    -o-filter: blur(3px);
    -ms-filter: blur(3px);
}
.img-blur {
    width: 100%;
    overflow: hidden;
}
/*blur effect*/
#ip-title3{
    border: none;
    width: 100%;
    margin: 2px 0 2px;
    font-size: 30px;
    color: #0064ff;
    font-family: "robotomedium";
    /*background: #fafafa;*/
}
#ip-desc3{
border: none;
    width: 100%;
    margin: 2px 0 2px;
    font-size: 15px;
    color: #333333;
    font-family: "robotomedium";
}
    /*background: #fafafa;*/
    </style>
</head>

<body onload="off()" ng-app="AppKanopp" ng-controller="AppKanoppCtrl3"style="padding:0; margin:0; background:#fff;" class="step2-body">

<div id="overlay"><div id="loader"></div></div>
    <main class="dr-main-wrapper step2-main">

        <header class="top-header"> 
            <div class="container"> 
                <div class="row col-sm-6">
                    <a class="gotofeed" href="javascript:;"> <img src="images/logo.png" alt=""></a>

                    <span class="step1-header-text">Step3:
                        Start With the basics
                    </span>

                    <!--span ng-hide="hideSpin" id="showspin" class="right ng-hide" style=""></span-->          
                      <!--span ng-hide="hideSpinSave" id="showspin" class="right"></span-->

                </div>                  
                 <div class="rightside-header row col-sm-6">
                    <span class="right"><a ng-hide="hideExit" class="remov-right" href="step1">Exit</a></span>
<!-- <span class="right">                         <button type="submit"
class="btn btn-primary btn-large btn-block new-save-btn" data-
reactid="94">Save</button>                     </span>
<span class="right gotofeed">Discard changes                     </span> -->
<!--span id="showspin" class="right" style="display: none;">
</span-->

                </div>
              </div>
            </header>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:5%">
                </div>
            </div>

            <section id="banner-section" class="dr-banner-outr">
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-xs-12 col-sm-8 left-height">                
                          <div class="col-sm-6 lang-drop">                
                            <select class="selectpicker"> 
                              <option>Pacifico </option>
                              <option>Arial</option>
                            </select>
                          </div>
                          <div class="col-sm-6 custom-filter">
                            <span class="edit-pencil"><i class="material-icons">edit</i></span>
                            <div class="step3a floating-container common" style="display:none">
                              <div class="wrap-drag-drop">
                                <ol class="custom-pallette"><li class="black"></li><li class="blue"></li><li class="yellow"></li><li class="white"></li></ol>    
                              </div>
                            </div>
                            <span class="color_fill"><i class="material-icons">format_color_fill</i></span>


            <!--span class="on"><i class="material-icons">blur_on</i></span>
            <span class="off"><i class="material-icons">blur_off</i></span-->

                            <div class="step3aeffects floating-container-b common-b"  style="display:none">
                              <div class="wrap-drag-drop">
                                <ol class="custom-effects">
                                  <li class="blur_on"><i class="material-icons">blur_on</i></li>
                                  <li class="blur_circular"><i class="material-icons">blur_circular</i></li>
                                  <li class="blur-linear"><i class="material-icons">blur_linear</i></li>
                                  <li class="filter_b_and_w"><i class="material-icons">filter_b_and_w</i></li>
                                  <li class="crop_rotate_container"><i class="material-icons">crop_rotate</i></li></ol>    
                              </div>
                            </div>
                            <span class="effects-icon"><i class="material-icons">style</i></span>

                            <span class="wrap-slider">
                            <!--input type="range" min="0" max="10" step="1" value="0" data-orientation="horizontal"-->
                            <div id="sliderObj"></div>
                            </span>
                            <div id="sliderLink"></div>
                            <span class="output-range"></span>
                          </div>                          
                          <div class="main_image_step3">
                            <div class="img-blur">
                              <img id="srcimg" src="img/download1.jpg"/>
                            </div>
                          </div>
                          <div class="video-wrap active">
                              <span class="outer-shadow"></span><span class="top-left-shadow"></span>
                              <div class="video-sec">
                                  <!-- <img src="img/article-img2.jpg" alt=""> -->                                  
                                  <video id="videorect" preload="none" poster="img/article-img2.jpg" src="uploads/start3.mp4" autoplay="true"></video>
                                  <div class="time_left"></div>
                                  <div class="volume_cont"></div>
                                  <span class="play_btn"></span>
                              </div>
                          </div>                          
                            <div class="col-lg-12">                              
                                <input id="ip-title3" placeholder="Title your Moment" type="text">
                                <input id="ip-desc3" placeholder="Add a description" type="text">                          
                            </div>
                            <div class="clearfix"></div>
                            <hr class="divider" ng-style="dividerStyle">

                       

                            <div ng-hide="hideBottomSkip" class="botom-skip">
                                <a class="back-btn" href="step2">Back</a>
                                
                                <a href="step1" style="margin-right: 30px"><button class="skip">Delete Project</button></a>
                                <button class="skip" style="margin-right: 30px" onclick="javascript:publishProject()">Publish Project</button>
                            </div>
                        </div>

                        
<!-- Right Section 1 Start -->                         

<div ng-hide="right_grey" class="right-grey col-xs-12 col-sm-4"> 
    <div class="banner-right-sec"> 
        <div class="hide-sm help-panel panel"><div class="panel-body">

            <div class="help-panel__bulb-img space-2"></div>
            <div class="panel-header">
                Choose an image from your computer
            </div>
            <div class="help-panel__text"><div>
                <p>This is the main image associated with your 
                    project. Make it count! JPEG, PNG, GIF, or 
                    BMP  50 MB file limit. At least 1024x576 
                    pixels  16:9 aspect ratio</p>
                    <p>
                        This is the first thing that people will see 
                        when they come acrossyour project. 
                        Choose an image that’s crisp and text-free.
                    </p>
                    <p>
                        The number and type of beds you have 
                        determines how many guests can 
                        stay comfortably.
                    </p>

                </div></div></div></div>
            </div>
        </div>


<!-- Right Section 1 End -->                         

<!-- Right Section 2 Start -->
    <div ng-hide="right_sec2" class="right_sec2 right-grey col-xs-12 col-sm-4"> 
           <div class="video-right-sec"> 

            <div class="right-with-video" style="display: none">
              <div class="clearfix"></div>
              <div class="video-wrap">
                <span class="outer-shadow"></span><span class="top-left-shadow"></span>
                <div class="video-sec">
                  <video id="videoId" preload="none" ngf-src="file[0]"></video>
                  <div class="time_left"></div>
                  <div class="volume_cont"></div>
                  <span class="play_btn"></span>
                </div>
              </div>
              <img id="imageId" ngf-src="file[0]">

              <div class="col-lg-12 video-tooltip">
               <p class="video-caption-text">Have fun - add a video! Projects with a
 video have a much higher chance of success . For a dose of inspiration check out the <span class="blue-text">Creator Handbook </span>. Need some help? Visit our <span class="blue-text"> Creator FAQ </span> </p> </div>
                <!--div class="col-lg-2 nopadding">
                  <div class="q-mark">?</div><div class="right">135/135</div>
                </div-->
              </div>
              
            </div>

<!-- <div class="main-panel__actions col-sm-12 no-margin-padding__sm">
<a class="btn btn-large btn-progress-next btn-large__next-btn disabled btn-primary " href="/become-a-host/bedrooms"><div class="btn-progress-next__text"><span>Next</span></div></a>
</div> -->
<!--<a ng-hide="hideDelete" class="remov-right-bottom" href="step1">Delete Project</a>-->
          </div>


<!-- <div id="footer_higher"><div id="clickMe">Click</div><div id="footer_content">  -->
<div class="col-lg-12 remove-padding">
  <div class="col-sm-8">
  <!--div ng-hide="hideBottomNext" class="botom-skip">
  <a class="back-btn" href="step1.html">Back</a>
  <button class="skip skipcolor">Next</button>
  </div-->

  </div>
  <!-- <div class="col-lg-4"  ng-hide="saveDiscard" ng-class="{'active':isdiplay}" ng-style="footerBar"> -->
  <div class="col-sm-4 searchclass footer1" ng-style="footerBar" ng-hide="saveDiscard">
     <div class="slide" ng-style="backgroundOpacity">
      <button type="submit" ng-click="showSpinner()" class="btn btn-primary btn-large btn-block new-save-btn pull-right" data-reactid="94">Save</button>
      <span class="discard-changes pull-right"><a class="discard" href="step2">Discard changes</a></span>
      </div>
  </div>
<!--input type="text" id="ip-desc2" placeholder="Add a description"-->
</div>
<!-- </div></div> -->

        </div>

        <!-- Right section 2 end -->

                            </div>
                        </div>
                    </section>  

                </main>
<script type="text/javascript"> 
  function on() {
    document.getElementById("overlay").style.display = "block";
  }

 
jQuery(document).ready(function(){ 

  var src = localStorage.getItem('file_encname');
  var filetype = localStorage.getItem('file_type');
  if(filetype=='image'){
    jQuery('#srcimg').attr('src','uploads/'+src);
    jQuery('div .video-wrap').attr('style', 'display: none');
  }else if(filetype=='video'){    
    jQuery('div .main_image_step3').attr('style', 'display: none');
    jQuery('#videorect').attr('src', 'uploads/'+src);
    scrollHandler();
    //var video_html = '<div class="video-wrap active">';
    //video_html += '<span class="outer-shadow"></span><span class="top-left-shadow"></span>';
    //video_html += '<div class="video-sec">';
    //video_html += '<video preload="none" poster="img/article-img2.jpg" src="uploads/'+src+'"></video>';
    //video_html += '<div class="time_left"></div><div class="volume_cont"></div><span class="play_btn"></span></div></div>';
    //jQuery('div .main_image_step3').html(video_html);
  }



    /*********************************************/
    /*Script for active color pallets*/

    jQuery('.color_fill').on('click', function(){
      jQuery('.common').show();
      jQuery('.common').before('<div id="coverpage"></div>');
    });


    jQuery('body').on('click','#coverpage', function(){
      jQuery('.common').hide();
      jQuery('#coverpage').remove();
    });


    jQuery('.effects-icon').on('click', function(){
      jQuery('.common-b').show();
      jQuery('.common-b').before('<div id="coverpage-two"></div>');
    });


    jQuery('body').on('click','#coverpage-two', function(){
      jQuery('.common-b').hide();
      jQuery('#coverpage-two').remove();
    });


    jQuery('.custom-pallette li').click(function(){
      jQuery('.custom-pallette li').each(function(){
        jQuery(this).removeClass('active');
      });
      jQuery(this).addClass('active');
    });
    /*********************************************/


    /*********************************************/
    /*Script for blur effects*/

    jQuery('body').on('click','.blur_on',function(){
      jQuery('#srcimg').addClass('blur_img');
      jQuery(this).removeClass();
      jQuery(this).addClass('blur_off');
      jQuery(this).find('i').text('blur_off');

    });

    jQuery('body').on('click','.blur_off',function(){
      jQuery('#srcimg').removeClass('blur_img');
      jQuery(this).removeClass();
      jQuery(this).addClass('blur_on');
      jQuery(this).find('i').text('blur_on');
    });
});

/*********************************************/

jQuery(function($){

mySlider = new dhtmlXSlider({
        parent: "sliderObj",
        size: 50,
        value: 1,
        step: 1,
        min: 1,
        max: 110
      });

      mySlider.attachEvent("onChange", function(value){
          console.log('changed val is'+value);
          $('#sliderLink').text(value + 'px');
      });
      var value = mySlider.getValue();
      $('#sliderLink').text(value+ 'px');
});
/*********************************************/
 

/*Step 3 video playing code start*/

    // the list of our video elements
    var videos = document.querySelectorAll('video');
    // an array to store the top and bottom of each of our elements
    var videoPos = [];
    // a counter to check our elements position when videos are loaded
    var loaded = 0;
    // Here we get the position of every element and store it in an array
    function checkPos() {
      // loop through all our videos
      for (var i = 0; i < videos.length; i++) {
        var element = videos[i];
        // get its bounding rect
        var rect = element.getBoundingClientRect();
        // we may already have scrolled in the page 
        // so add the current pageYOffset position too
        var top = rect.top + window.pageYOffset;
        var bottom = rect.bottom + window.pageYOffset;
        // it's not the first call, don't create useless objects
        if (videoPos[i]) {
          videoPos[i].el = element;
          videoPos[i].top = top;
          videoPos[i].bottom = bottom;
        } else {
          // first time, add an event listener to our element
          element.addEventListener('loadeddata', function() {
              if (++loaded === videos.length - 1) {
                // all our video have ben loaded, recheck the positions
                // using rAF here just to make sure elements are rendered on the page
                requestAnimationFrame(checkPos)
              }
            })
            // push the object in our array
          videoPos.push({
            el: element,
            top: top,
            bottom: bottom
          });
        }
      }
    };
    // an initial check
    checkPos();    
    var scrollHandler = function() {
      // our current scroll position

      // the top of our page
      var min = window.pageYOffset;
      // the bottom of our page
      var max = min + window.innerHeight;

      videoPos.forEach(function(vidObj) {
        //console.log(vidObj);
        // the top of our video is visible
        if (vidObj.top >= min && vidObj.top < max && vidObj.el.controls === false) {
          // play the video
         // vidObj.el.src='uploads/'+localStorage.getItem('file_encname');
         // vidObj.el.load();
          vidObj.el.play();
          //alert(vidObj.el.src+"ok");
        }

        // the bottom of the video is above the top of our page
        // or the top of the video is below the bottom of our page
        // ( === not visible anyhow )  
        if (vidObj.bottom <= min || vidObj.top >= max) {
          // stop the video
          vidObj.el.pause();
        }

      });
    };
    // add the scrollHandler
    window.addEventListener('scroll', scrollHandler, true);
    // don't forget to update the positions again if we do resize the page
    window.addEventListener('resize', checkPos);

/*Step 3 video playing code end*/


        //jQuery('.right-grey.col-xs-12.col-sm-4').css('height',0);
        jQuery('.gotofeed').click(function(){location.href="/feed";});
        /* jQuery('button.new-save-btn').click(function(){ jQuery('#showspin').css('display','block'); setTimeout(function(){ jQuery('#showspin').css('display','none');  }, 4000);})*/
        //jQuery('.skip').click(function(){location.href="/step3";})


    /*code for removing play button on click*/
    jQuery('.play_btn').click(function(){jQuery(this).css('display','none');jQuery(this).prev().css('display','none');
    //jQuery(this).closest(":has(video)").find('video').attr('controls','controls');
    jQuery('#videoId').get(0).play();
    });
    jQuery(window).resize(function(){
        jQuery('.right-grey.col-xs-12.col-sm-4').css('height',jQuery(window).height());
    });
  </script>
  <script type="text/javascript">
    function publishProject(){
      var content=$('#ip-title3').val();      
      content+=$('#ip-desc3').val();
      var formData = $("#postForm").serialize();
      formData=formData+'&author=' + localStorage.getItem('fullname');

      var tmp = localStorage.getItem('title')
      var arr1 = tmp.split(' ');
      var arr2 = [];
      for(var x=0;x<arr1.length;x++){
        arr2.push(arr1[x].charAt(0).toUpperCase()+arr1[x].slice(1));
      }
      var title=arr2.join(' ');
      formData=formData+'&title=' + title;
      formData=formData+'&content=' + content;
      formData=formData+'&category=' + localStorage.getItem('category');
      formData=formData+'&location=' + localStorage.getItem('location');
      formData=formData+'&price=' + localStorage.getItem('price');
      formData=formData+'&filename=' + localStorage.getItem('filename');
      formData=formData+'&file_encname=' + localStorage.getItem('file_encname');
      formData=formData+'&type=' + "create";
      formData=formData+'&note=' + "OK";
      formData=formData+'&filetype=' + localStorage.getItem('file_type');
      $.ajax({
          url:'post/register',
          type:'POST',
          data:formData,
          success:function(data){
            var conf = confirm("Successfully published. \nDo you want to create another project?");

            if(conf==true){
              location.href="/step1";
            }else{
              location.href="/feed";
            }

            //alert("Successfully published.");
          },
          error:function(data){
            alert("Error occured!");
          }
        });
    }
    function checkInputValues(title,content){
      if(title==null || title==""){
        $('name="title"').select();
        return false;
      }
      else if( content==null  || content=="" ){
        $('name="content"').select();
        return false;
      }
      return true;
    }
  </script>  


                <!-- Angular usage -->
    <script type="text/javascript">
    var app = angular.module('AppKanopp', ['ngAnimate','ngFileUpload']);
    app.controller('AppKanoppCtrl3',['$scope', '$timeout', 'Upload', function ($scope, $timeout, Upload) {
  // upload later on form submit or something similar
    // upload on file select or drop
   

}]);

</script>
</body>

</html>