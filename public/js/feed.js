function openAvatarFile(){
    //alert('ddd');
    $("#avatafile").click();
  }


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
    var d = new Date();
    document.getElementById("demo").innerHTML = d;
var sc_project = 3967696;
  var sc_invisible = 1;
  var sc_partition = 46;
  var sc_click_stat = 1;
  var sc_security = "6979b175";
  var articles = [
      ["Vanilla JS Browser Default Java Script.", "http://www.9lessons.info/2015/09/vanilla-js-browser-default-java-script.html"],
      ["Facebook Style Background Image Upload and Position Adjustment.", "http://www.9lessons.info/2015/02/facebook-style-background-image-upload.html"],
      ["Create a RESTful services using Slim PHP Framework", "http://www.9lessons.info/2014/12/create-restful-services-using-slim-php.html"],
      ["Social Network Script", "http://www.thewallscript.com"],
      ["9lesosns Demos", "http://demos.9lessons.info"],
      ["Pagination with Jquery, PHP , Ajax and MySQL.", "http://www.9lessons.info/2010/10/pagination-with-jquery-php-ajax-and.html"],
      ["Ajax Select and Upload Multiple Images with Jquery", "http://www.9lessons.info/2013/09/multiple-ajax-image-upload-jquery.html"],
      ["Ajax PHP Login Page with Shake Animation Effect.", "http://www.9lessons.info/2014/07/ajax-php-login-page.html"],
      ["Login with Google Account.", "http://www.9lessons.info/2011/07/login-with-google-account.html"],
      ["Login with Facebook and Twitter", "http://www.9lessons.info/2011/02/login-with-facebook-and-twitter.html"]
  ];


  setTimeout(function() {
      var x = Math.floor((Math.random() * 10) + 1);
      var title = articles[x][0];
      var desc = 'Most popular article.';
      var url = articles[x][1];
      notifyBrowser(title, desc, url);
  }, 200000);



  document.addEventListener('DOMContentLoaded', function() {

      if (Notification.permission !== "granted") {
          Notification.requestPermission();
      }

      document.querySelector("#notificationButton").addEventListener("click", function(e) {
          var x = Math.floor((Math.random() * 10) + 1);
          var title = articles[x][0];
          var desc = 'Most popular article.';
          var url = articles[x][1];
          notifyBrowser(title, desc, url);
          e.preventDefault();
      });

  });

  function notifyBrowser(title, desc, url) {
      if (!Notification) {
          console.log('Desktop notifications not available in your browser..');
          return;
      }
      if (Notification.permission !== "granted") {
          Notification.requestPermission();
      } else {
          var notification = new Notification(title, {
              icon: 'https://lh3.googleusercontent.com/-aCFiK4baXX4/VjmGJojsQ_I/AAAAAAAANJg/h-sLVX1M5zA/s48-Ic42/eggsmall.png',
              body: desc,
          });

          // Remove the notification from Notification Center when clicked.
          notification.onclick = function() {
              window.open(url);
          };

          // Callback function when the notification is closed.
          notification.onclose = function() {
              console.log('Notification closed');
          };

      }
  }


    function updateMark(post_id,mark){
        var formData;
        formData='post_id=' + post_id;
        formData=formData+'&mark=' + mark;
        $.ajax({
          url:'feed/updateMark',
          type:'GET',
          data:formData,
          success:function(data){
            //$(this).attr('src','ddd');
            //alert("Succeeded.");
          },
          error: function (data) {
              alert("Updating failed.");
          }
        });
    }

    function updateProfile(filename,file_encname,type){
      var avatar=file_encname;
      var description=localStorage.getItem('description');
      var birthYear=localStorage.getItem('birthYear');
      var birthMonth=localStorage.getItem('birthMonth');
      var birthDate=localStorage.getItem('birthDate');
      var location=localStorage.getItem('location');
      var formData = "avatar="+avatar;
      formData=formData+'&description=' + description;
      formData=formData+'&birthYear=' + birthYear;
      formData=formData+'&birthMonth=' + birthMonth;
      formData=formData+'&birthDate=' + birthDate;
      formData=formData+'&location=' + location;
      $.ajax({
          url:'profile/update_profile',
          type:'POST',
          data:formData,
          success:function(data){

          },
          error: function (data) {
              alert("Updating profile failed.");
          }
        });
    }

    function uploadPost(filename,file_encname,type){
      var fullname=localStorage.getItem('fullname');
      var location="Moscow";
      var category="category";
      var price=localStorage.getItem('price');
      var formData = $("#postForm").serialize();
      var title=$('[name="title"]').val();
      var content=$('[name="content"]').val();
      $('[name="title"]').val("");
      $('[name="content"]').val("");
      formData=formData+'&author=' + fullname;
      formData=formData+'&location=' + location;
      formData=formData+'&category=' + category;
      formData=formData+'&filename=' + filename;
      formData=formData+'&file_encname=' + file_encname;
      formData=formData+'&price=' + price;
      formData=formData+'&type=' + type;
      formData=formData+'&note=' + "testnotes`+newcontent.author+`";
      $.ajax({
          url:'post/register',
          type:'POST',
          data:formData,
          success:function(data){
              var newcontent = data;
              var xx = `
                <div class="block-add" style="display:none" id="fff">   
                    <div class="block-left">
                        <div class="block-left-inner">
                            <div class="post-time-sec">
                                <span class="time-zone">0</span>
                                <i>day ago</i>
                            </div>
                        </div>
                    </div>
                    <div class="block-outer">
                        <div class="block-post block-person-info">
                            <div class="rating-sec">
                                <div class="clearfix">
                                    <div class="rating-left-sec">
                                        <p><img src="uploads/`+newcontent.file_encname+`"  onclick = "javascript:alert();" alt="jjjj"></p>
                                    </div>
                                    <div class="rating-right-sec">
                                        <div class="feed-top-sec clearfix">
                                            <div class="feed-top-left">
                                                <p><em class="feed-person-btn"><strong>`+newcontent.author+`</strong></em> <span>`+newcontent.title+`<b class="clip-marker"><img src="img/clip-icon.png" alt=""></b></span><i>`+newcontent.updated_at+`</i></p>
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
                                                    <li><a href="#"><i class="material-icons">visibility_off</i><span>I dont want to see this</span></a></li>
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
                                        <p>`+newcontent.content+`</p>
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
              </div>
          `;
          $('#newMedia').after($('#newMedia').children().first());
          $('#newMedia').html(xx);
          $('#newMedia').children().first().slideDown("slow");
          $("#newMedia").slideUp("fast");                    
          $("#newMedia").slideDown("slow");

          // $('.dropdown-toggle').click(function(){
          //   $(this).parent().find('.dropdown-menu').fadeToggle();
          // });
          $('.dropdown-toggle').click(function() { return false; }); // Adds another click event
          $('.dropdown-toggle').off('click');
          $.getScript("js/out_scripts.js");
          //document.write('js/out_scripts.js');
          
          },
          error: function (data) {
              alert("Posting data failed.");
          }
      });
    }

    $('.hide-block').click(function(){
            //alert('asdfsdf');
        $(this).parents('.block-add').css('display','none');
    })

    function HideMe(){
      //alert('dfdf');
      //$(this).toggle
      // $(this).parents('.block-add').css('display','none');
      // alert($(this).css('display'));
    }

    $(document).ready(function(){
        $('.ffff').click(function(){
            alert('asdfsdf');          
        })
    });

  
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

  
  //]]>