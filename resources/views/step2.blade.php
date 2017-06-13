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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
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
                    <span ng-hide="hideSpinSave" id="showspin" class="right" style="display:none">
                    </span>
                </div>
                <div class="rightside-header row col-sm-6">
                    <span class="right"><a ng-hide="hideExit" class="remov-right" href="/feed">Exit</a>
                    </span>
                    
                </div>
            </header>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                </div>
            </div>

            <section id="banner-section" class="dr-banner-outr">
                <div class="container"> 
                    <div class="row"> 


                        <div class="col-xs-12 col-sm-8 left-height"> 
                            <h1 class="margintop35 center">Let’s get started.</h1>
                            <h4 class="center">Make a great first impression With your project’s title and image, and Set your funding goal,
                                campaign duration, and project category.</h4>

                                <div  ng-hide="Uploading" id="barCheckUploadStatus" style="display:none">
                                    <div class="progress">
                                        <div id="uploadStatus" class="progress-bar progress-bar-striped active" role="progressbar"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                        0%
                                    </div>
                                </div>
                            </div>
                            <form id="postForm">
                            <input id="upload-video" type="file" onchange="javascript:uploadFile();">
                            <label for="upload-video" ng-hide="notUpload" id="uploadPan">
                                <div ngf-select="upload($file)" ngf-drop="upload($file)" ng-model="file" ngf-model-invalid="invalidFiles" ngf-model-options="modelOptionsObj" ngf-multiple="multiple" ngf-pattern="pattern" ngf-accept="'video/*'" ng-disabled="disabled" ngf-capture="capture" ngf-drag-over-class="dragOverClassObj" ngf-validate="validateObj" ngf-resize="resizeObj" ngf-resize-if="resizeIfFn($file, $width, $height)" ngf-dimensions="dimensionsFn($file, $width, $height)" ngf-duration="durationFn($file, $duration)" ngf-keep="keepDistinct ? 'distinct' : keep" ngf-fix-orientation="orientation" ngf-max-files="maxFiles" ngf-ignore-invalid="ignoreInvalid" ngf-run-all-validations="runAllValidations" ngf-allow-dir="allowDir" class="drop-box border-dot" ngf-drop-available="dropAvailable" >
                                    <div class="inner-upload">
                                        <div class="va-middle text-center text-gray img__upload-photos-ghosts"><div class="col col-center"><div class="btn btn-primary btn-jumbo new-jumbo"><i class="fa fa-cloud-upload" aria-hidden="true"></i><!-- react-text: 1447 --> <!-- /react-text --><span>Upload Videos</span></div><div class="row space-top-2"><div class="h4 text-normal"><span class="drag">or drag them in</span></div></div></div></div>
                                    </div>
                                </div>
                            </label>
                          </form>
                            <hr class="divider" ng-style="dividerStyle">
                            <div ng-hide="hideBottomSkip" class="botom-skip">
                                <a class="back-btn" href="/step1">Back</a>
                                <button class="skip">Skip for now</button>
                            </div>
                            
                        </div>

                        
<!-- Right Section 1 Start -->                         

<div ng-hide="right_grey" class="right-grey col-xs-12 col-sm-4" id="upload_description" > 
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

    <div ng-hide="right_sec2" class="right_sec2 right-grey col-xs-12 col-sm-4"> 
           <div class="video-right-sec"> 

            <div class="right-with-video">
              <div class="clearfix"></div>
              <div class="video-wrap active">
                <span class="outer-shadow"></span><span class="top-left-shadow"></span>
                <div class="video-sec">
                  <!-- <img src="img/article-img1.jpg" alt=""> -->
                  <!-- <video preload="none" poster="img/article-img1.jpg" src="https://ksr-video.imgix.net/projects/2134136/video-648124-h264_high.mp4"></video> -->
                  <video id="videoId" preload="none" ngf-src="file[0]"></video>
                  <div class="time_left"></div>
                  <div class="volume_cont"></div>
                  <span class="play_btn"></span>
                </div>
              </div>

              <div class="col-lg-12 video-tooltip">
               <p class="video-caption-text">Have fun - add a video! Projects with a
 video have a much higher chance of success . For a dose of inspiration check out the <span class="blue-text">Creator Handbook </span>. Need some help? Visit our <span class="blue-text"> Creator FAQ </span> </p> </div>
              </div>
              
            </div>

          </div>


<!-- <div id="footer_higher"><div id="clickMe">Click</div><div id="footer_content">  -->
<div class="col-lg-12 remove-padding">
<div class="col-sm-8">
<div ng-hide="hideBottomNext" class="botom-skip">
<a class="back-btn" href="/step1">Back</a>
<button class="skip skipcolor">Next</button>
</div>

</div>
<!-- <div class="col-lg-4"  ng-hide="saveDiscard" ng-class="{'active':isdiplay}" ng-style="footerBar"> -->
<div class="col-sm-4 searchclass footer1" ng-style="footerBar" ng-hide="saveDiscard">
   <div class="slide" ng-style="backgroundOpacity">
<button type="submit" ng-click="showSpinner()" class="btn btn-primary btn-large btn-block new-save-btn pull-right" data-reactid="94">Save</button>
<span class="discard-changes pull-right">Discard changes</span>
</div>
</div>
<a ng-hide="hideDelete" class="remov-right" href="/step1">x &nbsp; Delete Project</a>
<!--input type="text" id="ip-desc2" placeholder="Add a description"-->
</div>
<!-- </div></div> -->

        </div>

        <!-- Right section 2 end -->

                            </div>
                        </div>
                    </section>  

                </main>
                


                <!-- Angular usage -->
</body>

<script type="text/javascript"> 
  function on() {
  document.getElementById("overlay").style.display = "block";
  }

 
jQuery(document).ready(function(){ 


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
                        jQuery('.gotofeed').click(function(){location.href="/feed";});
                       /* jQuery('button.new-save-btn').click(function(){ jQuery('#showspin').css('display','block'); setTimeout(function(){ jQuery('#showspin').css('display','none');  }, 4000);})*/
                        jQuery('.skip').click(function(){location.href="/step3";})
                    })

    /*code for removing play button on click*/
    jQuery('.play_btn').click(function(){jQuery(this).css('display','none');jQuery(this).prev().css('display','none');
    jQuery(this).closest(":has(video)").find('video').attr('controls','controls');
    jQuery('#videoId').get(0).play();
    });
                    jQuery(window).resize(function(){
                        jQuery('.right-grey.col-xs-12.col-sm-4').css('height',jQuery(window).height());
                    })
                </script>
                <script>                    
                    function uploadFile() {
                      $('#barCheckUploadStatus').css('display','');
                       $('#uploadPan').css('display','none');
                      $('.progress-bar').css('width','0%');
                      var fd = new FormData();
                      fd.append("video", document.getElementById('upload-video').files[0]);
                      var xhr = new XMLHttpRequest();
                      xhr.upload.addEventListener("progress", uploadProgress, false);
                      xhr.addEventListener("load", uploadComplete, false);
                      xhr.addEventListener("error", uploadFailed, false);
                      xhr.addEventListener("abort", uploadCanceled, false);
                      xhr.open("POST", "post/video_upload");
                      xhr.send(fd);
                    }

                    function uploadProgress(evt) {
                      if (evt.lengthComputable) {
                        var percentComplete = Math.round(evt.loaded * 100 / evt.total);
                        document.getElementById('uploadStatus').innerHTML = percentComplete.toString() + '%';
                        $('.progress-bar').css('width',percentComplete.toString() + '%');
                      }
                      else {
                        document.getElementById('uploadStatus').innerHTML = 'unable to compute';
                      }
                    }

                    function uploadComplete(evt) {
                      /* This event is raised when the server send back a response */
                      $('#uploadPan').css('display','');
                      $('#barCheckUploadStatus').css('display','none');
                      $('.progress-bar').css('width','0%');
                      $('#upload_description').css('display','none');
                      postRegister(evt.target.responseText);
                      
                      //alert(evt.target.responseText);
                    }

                    function uploadFailed(evt) {
                      alert("There was an error attempting to upload the file.");
                    }

                    function uploadCanceled(evt) {
                      alert("The upload has been canceled by the user or the browser dropped the connection.");
                    }


                    function postRegister(file_encname){
                      var formData = $("#postForm").serialize();
                      formData=formData+'&author=' + localStorage.getItem('fullname');
                      formData=formData+'&title=' + localStorage.getItem('title');
                      formData=formData+'&content=' + "content";
                      formData=formData+'&category=' + localStorage.getItem('category');
                      formData=formData+'&location=' + localStorage.getItem('location');
                      formData=formData+'&price=' + localStorage.getItem('price');
                      formData=formData+'&filename=' + document.getElementById('upload-video').files[0].name;
                      formData=formData+'&file_encname=' + file_encname;
                      formData=formData+'&type=' + "create";
                      formData=formData+'&note=' + "OK";
                      $.ajax({
                          url:'post/register',
                          type:'POST',
                          data:formData,
                          success:function(data){
                            alert("OK");
                          },
                          error:function(data){
                          }
                        });
                      localStorage.setItem('file_encname',file_encname);
                      document.getElementById("videoId").src="/uploads/"+file_encname;
                    }

                </script>



                <!-- Angular usage -->
    

</html>