<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Kanopp</title>
    <!--link href="css/font-awesome.css" rel="stylesheet" type="text/css"/-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
      html,body{
        overflow:auto;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>
    <script src="js/ng-file-upload-shim.min.js"></script> <!-- for no html5 browsers support -->
    <script src="js/ng-file-upload.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <!-- <link href="css/today.css" rel="stylesheet" type="text/css"/> -->
    <script type="text/javascript">
      function off() {
        document.getElementById("overlay").style.display = "none";
      }
    </script>
</head>

<body onload="off()" ng-app="AppKanopp" ng-controller="AppKanoppCtrl2"style="padding:0; margin:0; background:#fff;" class="step2-body">
<div id="overlay"><div id="loader"></div></div>
    <main class="dr-main-wrapper step2-main">

        <header class="top-header"> 
            <div class="container"> 
                <div class="row col-sm-6">
                    <a class="gotofeed" href="javascript:;"> <img src="images/logo.png" alt=""></a>

                    <span class="step1-header-text">Step1:
                        Start With the basics
                    </span>

                    <span ng-hide="hideSpin" id="showspin" class="right ng-hide" style=""></span>          
                    <span ng-hide="hideSpinSave" id="showspin" class="right"></span>
</div>                 <div class="rightside-header row col-sm-6">
<span class="right"><a ng-hide="hideExit" class="remov-right"
href="feed">Exit</a></span>
<!-- <span class="right">                         <button type="submit"
class="btn btn-primary btn-large btn-block new-save-btn" data-
reactid="94">Save</button>                     </span>
<span class="right gotofeed">Discard changes                     </span> -->
<!--span id="showspin" class="right" style="display: none;">
</span-->

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
                            <h1 class="margintop35 center">Let’s get started.</h1>
                            <h4 class="center">Make a great first impression With your project’s title and image, and Set your funding goal,
                                duration, and project category.</h4>

                               
                            <div class="floating-container common" ng-style="hideIt">
                            <div class="wrap-drag-drop">
                            <div class="drag-close" ng-click="popupClose()"></div>
                            <div class="drag-drop">
                            <div class="drag-img"></div>
                            <p class="drag-text">Upload your Video or Photo of the product you will share</p>
                            </div>
                            </div>
                            </div>

                            <div class="common" id="c" ng-click="bulbClose()" ng-style="hideBulb">
                            <div class="bulb-img-bubble">
                            <p class="bc_img"></p>
                            </div></div>
                             <div  ng-hide="Uploading" id="barCheckUploadStatus" >
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                        0%
                                    </div>
                                </div>
                            </div>
                            <input id="upload-video" type="file">
                            <label for="upload-video" ng-hide="notUpload">
                                <div ngf-select="upload($file)" ngf-drop="upload($file)" ng-model="file" ngf-model-invalid="invalidFiles" ngf-model-options="modelOptionsObj" ngf-multiple="multiple" ngf-pattern="pattern" ng-disabled="disabled" ngf-capture="capture" ngf-drag-over-class="dragOverClassObj" ngf-validate="validateObj" ngf-resize="resizeObj" ngf-resize-if="resizeIfFn($file, $width, $height)" ngf-dimensions="dimensionsFn($file, $width, $height)" ngf-duration="durationFn($file, $duration)" ngf-keep="keepDistinct ? 'distinct' : keep" ngf-fix-orientation="orientation" ngf-max-files="maxFiles" ngf-ignore-invalid="ignoreInvalid" ngf-run-all-validations="runAllValidations" ngf-allow-dir="allowDir" class="drop-box border-dot" ngf-drop-available="dropAvailable" >
                                    <div class="inner-upload">
                                        <div class="va-middle text-center text-gray img__upload-photos-ghosts"><div class="col col-center"><div class="btn btn-primary btn-jumbo new-jumbo"><i class="fa fa-cloud-upload" aria-hidden="true"></i><!-- react-text: 1447 --> <!-- /react-text --><span>Upload Media file</span></div><div class="row space-top-2"><div class="h4 text-normal"><span class="drag">or drag them in</span></div></div></div></div>
                                    </div>
                                </div>
                            </label>
                            <hr class="divider" ng-style="dividerStyle">
                            <div ng-hide="hideBottomSkip" class="botom-skip">
                                <a class="back-btn" href="step1">Back</a>
                                <button class="skip">Skip for now</button>
                            </div>
                             <!--  <span ng-hide="hideSpin" id="showspin" class="right">
                          </span> -->
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

            <div class="right-with-video">
              <div class="clearfix"></div>
              <div class="video-wrap active">
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
<a ng-hide="hideDelete" class="remov-right-bottom" href="step1">Delete Project</a>
          </div>


<!-- <div id="footer_higher"><div id="clickMe">Click</div><div id="footer_content">  -->
<div class="col-lg-12 remove-padding">
<div class="col-sm-8">
<div ng-hide="hideBottomNext" class="botom-skip">
<a class="back-btn" href="step1">Back</a>
<button class="skip skipcolor">Next</button>
</div>

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



 jQuery('.common').first().hide();


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
        console.log(vidObj);
        // the top of our video is visible
        if (vidObj.top >= min && vidObj.top < max && vidObj.el.controls === false) {
          // play the video
          vidObj.el.play();

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


                        jQuery('.right-grey.col-xs-12.col-sm-4').css('height',jQuery(window).height());
                        jQuery('.gotofeed').click(function(){location.href="feed";});
                       /* jQuery('button.new-save-btn').click(function(){ jQuery('#showspin').css('display','block'); setTimeout(function(){ jQuery('#showspin').css('display','none');  }, 4000);})*/
                        jQuery('.skip').click(function(){location.href="step3";})
                    })

    /*code for removing play button on click*/
    jQuery('.play_btn').click(function(){jQuery(this).css('display','none');jQuery(this).prev().css('display','none');
    //jQuery(this).closest(":has(video)").find('video').attr('controls','controls');
    jQuery('#videoId').get(0).play();
    });
                    jQuery(window).resize(function(){
                        jQuery('.right-grey.col-xs-12.col-sm-4').css('height',jQuery(window).height());
                    })
                </script>


                <!-- Angular usage -->
    <script type="text/javascript">
    var app = angular.module('AppKanopp', ['ngAnimate','ngFileUpload']);
    app.controller('AppKanoppCtrl2',['$scope', '$timeout', 'Upload', function ($scope, $timeout, Upload) {
  // upload later on form submit or something similar
    // upload on file select or drop

    $scope.popupClose= function(){

      $scope.hideIt ={'display':'none'};
      $scope.hideBulb ={'display':'block'};

    };
    $scope.bulbClose= function(){

      $scope.hideIt ={'display':'block'};
      $scope.hideBulb ={'display':'none'};

    };

  
    $scope.Uploading=true;
    $scope.notUpload=false;
    $scope.right_sec2=true;
    $scope.hideExit = false;
    $scope.hideDelete = true;
    $scope.hideBottomSkip = false;
    $scope.hideSpin = true;
    $scope.hideSpinSave = true;
    $scope.saveDiscard=true;
    $scope.hideBottomNext= true;
    $('#imageId').css('display','none');
    $('.video-wrap').css('display','none');

    $scope.showSpinner = function(){
      $scope.hideSpinSave = false;
      $scope.footerBar ={'opacity':'0.2'};
      $timeout(function() {
        $scope.hideSpinSave = true;
        $scope.footerBar ={'opacity':'1'};
        $scope.saveDiscard=true;
        $scope.hideDelete=false;
        jQuery('.right_sec2').height(jQuery(window).height()+83+9+65);
      },2000 
        );
    }

    $scope.upload = function ($file) {


/*check uploading media type*/

  
if(($file.type).split('/')[0]== 'image'){
    
    $('#imageId').css('display','block');
    $('.video-wrap').css('display','none');
    localStorage.setItem('file_type', 'image');
}
else if(($file.type).split('/')[0] == 'video'){
    $('.video-wrap').css('display','block');
    $('#imageId').css('display','none');
    localStorage.setItem('file_type', 'video');
}

/*check uploading media type*/

        Upload.upload({
            url: 'post/video_upload',
            data: {file: $file}
        }).then(function (resp) {
          localStorage.setItem('filename',$file.name);
          localStorage.setItem('file_encname',resp.data);

            if(resp.config.data.file != null){
          console.log('Success ' + resp.config.data.file.name + 'uploaded. Response: ' + resp.data);
           $scope.notUpload=false;
           $scope.Uploading=true;
           $scope.right_sec2=false;
           $scope.right_grey=true;
           
          /*$scope.footerBar ={'display':'none'};*/
          jQuery('.slide').css('display','none');
          $timeout(function () {  
          ///jQuery('.right_sec2').height(jQuery('.left-height').height()-65);       
          console.log('right sidebar height adjusted after 2 seconds');
          jQuery('.slide').slideToggle('slow',function(){ console.log('Its clicked') });
          jQuery('.right_sec2').height(jQuery(window).height()-83-9-65);
          }, 2000);
          
          
          //$scope.saveDiscard=false;
          }
   }, function (resp) {
    console.log('Error status: ' + resp.status);
    off();
    console.log('Off is hitted while getting an error');
   }, function (evt) {

    if(evt.config.data.file != null){
        console.log(evt);
        $scope.notUpload=true;
        $scope.Uploading=false;
        var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
        $scope.progressCount = progressPercentage;
        console.log('progress: ' + progressPercentage + '% ' + evt.config.data.file.$ngfBlobUrl);
        $scope.file[0] = evt.config.data.file.$ngfBlobUrl;
        //$scope.hideExit=true;

if(progressPercentage< 100){
/*on();
console.log('on is hitted');*/
$scope.hideDelete = true;
$scope.hideSpin = false;
$scope.hideBottomSkip = true;
$scope.hideBottomNext= true;
//jQuery('.searchclass').css('display','none');
//$scope.dividerStyle ={'border':'0'};
}
else{
          /*off();
          console.log('Off is hitted at last');*/
          $scope.saveDiscard=false;
          $scope.hideSpin = true; 
          $scope.hideBottomSkip = true;
          $scope.hideBottomNext= false;

    }

    }
    
   });
 
  };

}]);

</script>
</body>

</html>