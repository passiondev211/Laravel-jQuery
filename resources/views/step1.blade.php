<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Kanopp</title>


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/style2.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
      html,body{
        overflow:auto;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>
</head>

<body ng-app="AppKanopp" style="padding:0; margin:0; background:#fff;">
    <main class="dr-main-wrapper">

        <header class="top-header"> 
            <div class="container-fluid"> 
                <a href="/feed"> <img src="images/header_logo.png" alt=""/></a>
            </div>
        </header>


        <section class="dr-banner-outr">
            <div class="container"> 
                <div class="row"> 
                    <div class="col-xs-12 col-sm-5"> 
                        <div class="banner-left-sec"> 
                            <h1>Hi, Mykal! Let's get you ready to become a host. </h1>
                            <span>Step1 </span>
                            <form ng-controller="AppKanoppCtrl">
                                <div ng-hide='checkHideTitle' class="form-group group-show1"> 
                                    <div class="row"> 
                                        <label class=" col-sm-12" ng-style="styleTitleLabel">Give your project a title: </label>
                                        <div class="col-sm-12"> 
                                            <input ng-model="modelTitle" ng-style="styleTitle" ng-focus="checkHideTitleFunc('focus')" ng-blur="checkHideTitleFunc('blur')" id="projecttitle" name="title" type="text" placeholder="title" />
                                        </div>

                                    </div>
                                </div>
                                <div ng-hide='checkHidePlace' class="custom-selct sel1"> 
                                    <p class="placeClass" ng-style="stylePlaceLabel">What kind of place do you have? </p>
                                    <select id="projectcategory" name="category"  ng-model="dataplace.selectedOption"  ng-style="stylePlace" ng-focus="focusPlace('1')" ng-blur="focusPlace('0')"  ng-change="changePlace()" class="selectpicker" 
                                    ng-options="option.name for option in dataplace.availableOptions track by option.id"
                                    > 
                                    </select>
                                </div>

                                <div ng-hide='checkHideLocation' class="form-group group-show2"> 
                                    <div class="row"> 
                                        <label ng-style="styleCountryLabel" class="projLoc col-sm-12" >The Project Location: </label>
                                        <div class="col-sm-12"> 
                                            <div class="custom-selct sel2"> 
                                                <select id="p_location" name="p_location"
                                                ng-model="dataCountry.selectedOption"
                                                ng-options="option.name for option in dataCountry.availableOptions track by option.code"
                                                ng-style="styleCountry" 
                                                ng-focus="focusCountry()" 
                                                ng-blur="blurCountry()" 
                                                ng-change="countryChange()" 
                                                name="country" class="selectpicker"
                                                > 
                                                    
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row"> 
                                        <label ng-style="styleCountryLabel" class="projLoc col-sm-12" >Price: </label>
                                        <div class="col-sm-12"> 
                                            <div class="custom-selct sel2"> 
                                                <input type="text" id="price" name="price"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

            <div ng-hide='checkHideCont' class="form-group group-show active">  
            <a class="submit-btn" href="javascript:gotoNextStep()">Continue</a>
            </div>
    
    

     <!-- <div class="form-group group-show2"> 
       <div class="row"> 
        
             <div class="col-sm-12"> 
              <input class="example-text" type="text" placeholder="e.g. San Francisco" />
             </div>
             
       </div>
    </div> -->

    

</form>

<div class="light-icon-sec"> 
    <img src="images/bulb.png" alt=""/>
    <p>Your Music project, we think you 
        could land 122 impressions. </p>
        <h4>$299 </h4>
    </div>

</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-offset-1"> 
    <div class="banner-right-sec"> 
        <img src="images/image2.png" alt="" />
    </div>
</div>
</div>
</div>
</section>


<footer class="footer">
    <div class="container"> 
        <div class="row"> 
            <div class="col-sm-3 col-md-3"> 
                <ul>   
                    <li> 
                        <select class="selectpicker"> 
                            <option>English </option>
                            <option>French </option>

                        </select>
                    </li>

                    <li>
                        <select class="selectpicker"> 
                            <option>Inr </option>
                            <option>Dollar </option>

                        </select> </li>
                    </ul>
                </div>
                <div class="col-sm-3 col-md-3 spacing">
                    <h2>Airbnb </h2>
                    <ul class="listing">   
                        <li>About </li>
                        <li>Careers </li>
                        <li>Press </li>
                        <li>Policies </li>
                        <li>Help </li>
                        <li>Diversity & Belonging </li>
                    </ul>
                </div>
                <div class="col-sm-3 col-md-3 spacing "> 
                    <h2>Discover </h2>
                    <ul class="listing">   
                        <li>Trust & Safety </li>
                        <li>Get Travel Credit </li>
                        <li>Airbnb Citizen </li>
                        <li>Business Travel </li>
                        <li>Guidebooks </li>

                    </ul>
                </div>
                <div class="col-sm-3 col-md-3 spacing">
                    <h2>Hosting </h2>
                    <ul class="listing">   
                        <li>Why Host </li>
                        <li>Hospitality </li>
                        <li>Responsible Hosting </li>

                    </ul>
                </div>

                <div class="col-sm-12 col-md-12"> 
                    <div class="bottom_footer"> 
                        <div class="left-sec"><img src="images/footer_logo.png" alt="" /> &copy; Kanopp, Inc.</div>
                        <div class="right-sec"> 
                            <ul> 
                                <li> <a href="javascript:;">Terms &amp; Privacy </a>   </li>
                                <li><a href="javascript:;">Site Map </a> </li>
                                <li><a href="javascript:;"> <img src="images/fb.png" alt=""/>   </a> </li>
                                <li><a href="javascript:;"><img src="images/tw.png" alt=""/>    </a> </li>
                                <li><a href="javascript:;"> <img src="images/link.png" alt=""/>   </a> </li>
                            </ul>
                        </div>
                    </div>

                </div>        

            </div>
        </div>

    </footer>
    
    <a class="show-first-step" href="/create">X</a>
</main> 

<script src="js/jquery-1.10.2.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>  

<script>
    $(document).ready(function(){
        $('.custom-selct select').change(function(){
            $('.submit-query').removeAttr('disabled');
            $(this).parents('.custom-selct').addClass('change');
            $('.group-show1').addClass('active');
        })
        $('.group-show1 input').keyup(function(){
            if ( $(this).val().length > 4 ) {
                $('.group-show2').addClass('active');
            }else{
                $('.group-show2').removeClass('active');
            }
        })
        $('.group-show2 select').change(function(){
            $(this).parents('.group-show2').addClass('change');
            //$('.submit-btn').attr('href','/step2');
            $('.form-group.group-show').removeClass('active');
        });

        jQuery('.banner-right-sec img').height(jQuery('.banner-left-sec').height());
    })
</script>
<script type="text/javascript">
    
$(window).load(function(){
    $('.sel1 button').on('mouseenter mouseover click focus active',function(){
         $('.placeClass').css('color','#0278ff');
    });

    $('.sel1 button').on('mouseleave blur',function(){
    $('.placeClass').css('color','#74849a');        
    });

    $('.sel2 button').on('mouseenter mouseover click focus active',function(){
    $('.projLoc').css('color','#0278ff');
    });

    $('.sel2 button').on('mouseleave blur',function(){
    $('.projLoc').css('color','#74849a');
    });

})


</script>

<!-- Angular usage -->
<script type="text/javascript">
var app = angular.module('AppKanopp', ['ngAnimate']);
app.controller('AppKanoppCtrl', function($scope) {
//$scope.checkHide = true;
$scope.modelTitle='';
$scope.checkHideTitle = false;
$scope.checkHidePlace = true;
$scope.checkHideLocation = true;
$scope.checkHideCont = true;


// Title
  
$scope.checkHideTitleFunc = function($flag){

      if($flag=='focus'){
        //console.log($scope.modelTitle.length);
        $scope.styleTitle={'border-color':'#0278ff'};
        $scope.styleTitleLabel={'color':'#0278ff'};

        $scope.$watch('modelTitle', function(newValue){
             if(newValue.length === 0){
               console.log('Empty');
             } else if(newValue.length > 3) {
                $scope.checkHidePlace = false;
                console.log('Has content');

             }
          });

      }
      else if($flag=='blur'){
        $scope.styleTitle={'border-color':'#74849a'};
        $scope.styleTitleLabel={'color':'#74849a'};
      }
}


// Place


 $scope.dataplace = {
    availableOptions: [
    { id: "-1" ,name:  "Choose a category"},
    { id: "0" ,name:  "Grocery"},
    { id: "1" ,name:  "Home & Garden"},
    { id: "2" ,name:  "Health & Beauty"},
    { id: "3" ,name:  "Baby & Toddler"},
    { id: "4" ,name:  "Electronics"},
    { id: "5" ,name:  "Pet Supplies"},
    { id: "6" ,name:  "Arts & Entertainmanet"},
    { id: "7" ,name:  "Apparel"},
    { id: "8" ,name:  "Food"},
    { id: "9" ,name:  "Office Supplies"},
    { id: "10" ,name:"Hardware"},
    { id: "11" ,name:"Toys & Game"}
    ],
    selectedOption:  { id:"-1",  name:"Choose a category" }  //This sets the default value of the select in the ui
    };

$scope.changePlace= function(){
  $scope.checkHideLocation = false;
} 

$scope.focusPlace= function($flag){
  console.log($flag);
  if($flag==1){

    $scope.stylePlace={'border-color':'#0278ff'};
    $scope.stylePlaceLabel={'color':'#0278ff'};

  }
  else if($flag==0){

    $scope.stylePlace={'border-color':'#74849a'};
    $scope.stylePlaceLabel={'color':'#74849a'};

  }
}

//Country


$scope.dataCountry = {
  availableOptions:[ 
  {name:'Choose a country', code:'-1'},
  {name: 'Afghanistan', code: 'AF'}, 
  {name: 'Åland Islands', code: 'AX'}, 
  {name: 'Albania', code: 'AL'}, 
  {name: 'Algeria', code: 'DZ'}, 
  {name: 'American Samoa', code: 'AS'}, 
  {name: 'AndorrA', code: 'AD'}, 
  {name: 'Angola', code: 'AO'}, 
  {name: 'Anguilla', code: 'AI'}, 
  {name: 'Antarctica', code: 'AQ'}, 
  {name: 'Antigua and Barbuda', code: 'AG'}, 
  {name: 'Argentina', code: 'AR'}, 
  {name: 'Armenia', code: 'AM'}, 
  {name: 'Aruba', code: 'AW'}, 
  {name: 'Australia', code: 'AU'}, 
  {name: 'Austria', code: 'AT'}, 
  {name: 'Azerbaijan', code: 'AZ'}, 
  {name: 'Bahamas', code: 'BS'}, 
  {name: 'Bahrain', code: 'BH'}, 
  {name: 'Bangladesh', code: 'BD'}, 
  {name: 'Barbados', code: 'BB'}, 
  {name: 'Belarus', code: 'BY'}, 
  {name: 'Belgium', code: 'BE'}, 
  {name: 'Belize', code: 'BZ'}, 
  {name: 'Benin', code: 'BJ'}, 
  {name: 'Bermuda', code: 'BM'}, 
  {name: 'Bhutan', code: 'BT'}, 
  {name: 'Bolivia', code: 'BO'}, 
  {name: 'Bosnia and Herzegovina', code: 'BA'}, 
  {name: 'Botswana', code: 'BW'}, 
  {name: 'Bouvet Island', code: 'BV'}, 
  {name: 'Brazil', code: 'BR'}, 
  {name: 'British Indian Ocean Territory', code: 'IO'}, 
  {name: 'Brunei Darussalam', code: 'BN'}, 
  {name: 'Bulgaria', code: 'BG'}, 
  {name: 'Burkina Faso', code: 'BF'}, 
  {name: 'Burundi', code: 'BI'}, 
  {name: 'Cambodia', code: 'KH'}, 
  {name: 'Cameroon', code: 'CM'}, 
  {name: 'Canada', code: 'CA'}, 
  {name: 'Cape Verde', code: 'CV'}, 
  {name: 'Cayman Islands', code: 'KY'}, 
  {name: 'Central African Republic', code: 'CF'}, 
  {name: 'Chad', code: 'TD'}, 
  {name: 'Chile', code: 'CL'}, 
  {name: 'China', code: 'CN'}, 
  {name: 'Christmas Island', code: 'CX'}, 
  {name: 'Cocos (Keeling) Islands', code: 'CC'}, 
  {name: 'Colombia', code: 'CO'}, 
  {name: 'Comoros', code: 'KM'}, 
  {name: 'Congo', code: 'CG'}, 
  {name: 'Congo, The Democratic Republic of the', code: 'CD'}, 
  {name: 'Cook Islands', code: 'CK'}, 
  {name: 'Costa Rica', code: 'CR'}, 
  {name: 'Cote D\'Ivoire', code: 'CI'}, 
  {name: 'Croatia', code: 'HR'}, 
  {name: 'Cuba', code: 'CU'}, 
  {name: 'Cyprus', code: 'CY'}, 
  {name: 'Czech Republic', code: 'CZ'}, 
  {name: 'Denmark', code: 'DK'}, 
  {name: 'Djibouti', code: 'DJ'}, 
  {name: 'Dominica', code: 'DM'}, 
  {name: 'Dominican Republic', code: 'DO'}, 
  {name: 'Ecuador', code: 'EC'}, 
  {name: 'Egypt', code: 'EG'}, 
  {name: 'El Salvador', code: 'SV'}, 
  {name: 'Equatorial Guinea', code: 'GQ'}, 
  {name: 'Eritrea', code: 'ER'}, 
  {name: 'Estonia', code: 'EE'}, 
  {name: 'Ethiopia', code: 'ET'}, 
  {name: 'Falkland Islands (Malvinas)', code: 'FK'}, 
  {name: 'Faroe Islands', code: 'FO'}, 
  {name: 'Fiji', code: 'FJ'}, 
  {name: 'Finland', code: 'FI'}, 
  {name: 'France', code: 'FR'}, 
  {name: 'French Guiana', code: 'GF'}, 
  {name: 'French Polynesia', code: 'PF'}, 
  {name: 'French Southern Territories', code: 'TF'}, 
  {name: 'Gabon', code: 'GA'}, 
  {name: 'Gambia', code: 'GM'}, 
  {name: 'Georgia', code: 'GE'}, 
  {name: 'Germany', code: 'DE'}, 
  {name: 'Ghana', code: 'GH'}, 
  {name: 'Gibraltar', code: 'GI'}, 
  {name: 'Greece', code: 'GR'}, 
  {name: 'Greenland', code: 'GL'}, 
  {name: 'Grenada', code: 'GD'}, 
  {name: 'Guadeloupe', code: 'GP'}, 
  {name: 'Guam', code: 'GU'}, 
  {name: 'Guatemala', code: 'GT'}, 
  {name: 'Guernsey', code: 'GG'}, 
  {name: 'Guinea', code: 'GN'}, 
  {name: 'Guinea-Bissau', code: 'GW'}, 
  {name: 'Guyana', code: 'GY'}, 
  {name: 'Haiti', code: 'HT'}, 
  {name: 'Heard Island and Mcdonald Islands', code: 'HM'}, 
  {name: 'Holy See (Vatican City State)', code: 'VA'}, 
  {name: 'Honduras', code: 'HN'}, 
  {name: 'Hong Kong', code: 'HK'}, 
  {name: 'Hungary', code: 'HU'}, 
  {name: 'Iceland', code: 'IS'}, 
  {name: 'India', code: 'IN'}, 
  {name: 'Indonesia', code: 'ID'}, 
  {name: 'Iran, Islamic Republic Of', code: 'IR'}, 
  {name: 'Iraq', code: 'IQ'}, 
  {name: 'Ireland', code: 'IE'}, 
  {name: 'Isle of Man', code: 'IM'}, 
  {name: 'Israel', code: 'IL'}, 
  {name: 'Italy', code: 'IT'}, 
  {name: 'Jamaica', code: 'JM'}, 
  {name: 'Japan', code: 'JP'}, 
  {name: 'Jersey', code: 'JE'}, 
  {name: 'Jordan', code: 'JO'}, 
  {name: 'Kazakhstan', code: 'KZ'}, 
  {name: 'Kenya', code: 'KE'}, 
  {name: 'Kiribati', code: 'KI'}, 
  {name: 'Korea, Democratic People\'S Republic of', code: 'KP'}, 
  {name: 'Korea, Republic of', code: 'KR'}, 
  {name: 'Kuwait', code: 'KW'}, 
  {name: 'Kyrgyzstan', code: 'KG'}, 
  {name: 'Lao People\'S Democratic Republic', code: 'LA'}, 
  {name: 'Latvia', code: 'LV'}, 
  {name: 'Lebanon', code: 'LB'}, 
  {name: 'Lesotho', code: 'LS'}, 
  {name: 'Liberia', code: 'LR'}, 
  {name: 'Libyan Arab Jamahiriya', code: 'LY'}, 
  {name: 'Liechtenstein', code: 'LI'}, 
  {name: 'Lithuania', code: 'LT'}, 
  {name: 'Luxembourg', code: 'LU'}, 
  {name: 'Macao', code: 'MO'}, 
  {name: 'Macedonia, The Former Yugoslav Republic of', code: 'MK'}, 
  {name: 'Madagascar', code: 'MG'}, 
  {name: 'Malawi', code: 'MW'}, 
  {name: 'Malaysia', code: 'MY'}, 
  {name: 'Maldives', code: 'MV'}, 
  {name: 'Mali', code: 'ML'}, 
  {name: 'Malta', code: 'MT'}, 
  {name: 'Marshall Islands', code: 'MH'}, 
  {name: 'Martinique', code: 'MQ'}, 
  {name: 'Mauritania', code: 'MR'}, 
  {name: 'Mauritius', code: 'MU'}, 
  {name: 'Mayotte', code: 'YT'}, 
  {name: 'Mexico', code: 'MX'}, 
  {name: 'Micronesia, Federated States of', code: 'FM'}, 
  {name: 'Moldova, Republic of', code: 'MD'}, 
  {name: 'Monaco', code: 'MC'}, 
  {name: 'Mongolia', code: 'MN'}, 
  {name: 'Montserrat', code: 'MS'}, 
  {name: 'Morocco', code: 'MA'}, 
  {name: 'Mozambique', code: 'MZ'}, 
  {name: 'Myanmar', code: 'MM'}, 
  {name: 'Namibia', code: 'NA'}, 
  {name: 'Nauru', code: 'NR'}, 
  {name: 'Nepal', code: 'NP'}, 
  {name: 'Netherlands', code: 'NL'}, 
  {name: 'Netherlands Antilles', code: 'AN'}, 
  {name: 'New Caledonia', code: 'NC'}, 
  {name: 'New Zealand', code: 'NZ'}, 
  {name: 'Nicaragua', code: 'NI'}, 
  {name: 'Niger', code: 'NE'}, 
  {name: 'Nigeria', code: 'NG'}, 
  {name: 'Niue', code: 'NU'}, 
  {name: 'Norfolk Island', code: 'NF'}, 
  {name: 'Northern Mariana Islands', code: 'MP'}, 
  {name: 'Norway', code: 'NO'}, 
  {name: 'Oman', code: 'OM'}, 
  {name: 'Pakistan', code: 'PK'}, 
  {name: 'Palau', code: 'PW'}, 
  {name: 'Palestinian Territory, Occupied', code: 'PS'}, 
  {name: 'Panama', code: 'PA'}, 
  {name: 'Papua New Guinea', code: 'PG'}, 
  {name: 'Paraguay', code: 'PY'}, 
  {name: 'Peru', code: 'PE'}, 
  {name: 'Philippines', code: 'PH'}, 
  {name: 'Pitcairn', code: 'PN'}, 
  {name: 'Poland', code: 'PL'}, 
  {name: 'Portugal', code: 'PT'}, 
  {name: 'Puerto Rico', code: 'PR'}, 
  {name: 'Qatar', code: 'QA'}, 
  {name: 'Reunion', code: 'RE'}, 
  {name: 'Romania', code: 'RO'}, 
  {name: 'Russian Federation', code: 'RU'}, 
  {name: 'RWANDA', code: 'RW'}, 
  {name: 'Saint Helena', code: 'SH'}, 
  {name: 'Saint Kitts and Nevis', code: 'KN'}, 
  {name: 'Saint Lucia', code: 'LC'}, 
  {name: 'Saint Pierre and Miquelon', code: 'PM'}, 
  {name: 'Saint Vincent and the Grenadines', code: 'VC'}, 
  {name: 'Samoa', code: 'WS'}, 
  {name: 'San Marino', code: 'SM'}, 
  {name: 'Sao Tome and Principe', code: 'ST'}, 
  {name: 'Saudi Arabia', code: 'SA'}, 
  {name: 'Senegal', code: 'SN'}, 
  {name: 'Serbia and Montenegro', code: 'CS'}, 
  {name: 'Seychelles', code: 'SC'}, 
  {name: 'Sierra Leone', code: 'SL'}, 
  {name: 'Singapore', code: 'SG'}, 
  {name: 'Slovakia', code: 'SK'}, 
  {name: 'Slovenia', code: 'SI'}, 
  {name: 'Solomon Islands', code: 'SB'}, 
  {name: 'Somalia', code: 'SO'}, 
  {name: 'South Africa', code: 'ZA'}, 
  {name: 'South Georgia and the South Sandwich Islands', code: 'GS'}, 
  {name: 'Spain', code: 'ES'}, 
  {name: 'Sri Lanka', code: 'LK'}, 
  {name: 'Sudan', code: 'SD'}, 
  {name: 'Suriname', code: 'SR'}, 
  {name: 'Svalbard and Jan Mayen', code: 'SJ'}, 
  {name: 'Swaziland', code: 'SZ'}, 
  {name: 'Sweden', code: 'SE'}, 
  {name: 'Switzerland', code: 'CH'}, 
  {name: 'Syrian Arab Republic', code: 'SY'}, 
  {name: 'Taiwan, Province of China', code: 'TW'}, 
  {name: 'Tajikistan', code: 'TJ'}, 
  {name: 'Tanzania, United Republic of', code: 'TZ'}, 
  {name: 'Thailand', code: 'TH'}, 
  {name: 'Timor-Leste', code: 'TL'}, 
  {name: 'Togo', code: 'TG'}, 
  {name: 'Tokelau', code: 'TK'}, 
  {name: 'Tonga', code: 'TO'}, 
  {name: 'Trinidad and Tobago', code: 'TT'}, 
  {name: 'Tunisia', code: 'TN'}, 
  {name: 'Turkey', code: 'TR'}, 
  {name: 'Turkmenistan', code: 'TM'}, 
  {name: 'Turks and Caicos Islands', code: 'TC'}, 
  {name: 'Tuvalu', code: 'TV'}, 
  {name: 'Uganda', code: 'UG'}, 
  {name: 'Ukraine', code: 'UA'}, 
  {name: 'United Arab Emirates', code: 'AE'}, 
  {name: 'United Kingdom', code: 'GB'}, 
  {name: 'United States', code: 'US'}, 
  {name: 'United States Minor Outlying Islands', code: 'UM'}, 
  {name: 'Uruguay', code: 'UY'}, 
  {name: 'Uzbekistan', code: 'UZ'}, 
  {name: 'Vanuatu', code: 'VU'}, 
  {name: 'Venezuela', code: 'VE'}, 
  {name: 'Viet Nam', code: 'VN'}, 
  {name: 'Virgin Islands, British', code: 'VG'}, 
  {name: 'Virgin Islands, U.S.', code: 'VI'}, 
  {name: 'Wallis and Futuna', code: 'WF'}, 
  {name: 'Western Sahara', code: 'EH'}, 
  {name: 'Yemen', code: 'YE'}, 
  {name: 'Zambia', code: 'ZM'}, 
  {name: 'Zimbabwe', code: 'ZW'} 
],
selectedOption:  {name:'Choose a country', code:'-1'}
};

$scope.countryChange= function(){
  $scope.checkHideCont = false;
}
$scope.focusCountry= function($flag){
  console.log($flag);
  if($flag==1){

    $scope.styleCountry={'border-color':'#0278ff'};
    $scope.styleCountryLabel={'color':'#0278ff'};

  }
  else if($flag==0){

    $scope.styleCountry={'border-color':'#74849a'};
    $scope.styleCountryLabel={'color':'#74849a'};

  }
}



});
</script>
<!-- Angular usage -->
<script>
  function gotoNextStep(){
    title=$('[name="title"]').val();
    category=$('[name="category"]').val();
    p_location=$('[name="p_location"]').val();
    price=$('[name="price"]').val();
    if(title==null || title==""){
      $("#projecttitle").select();
      alert("Invalid Title!");
      return;
    }
    if(category==null || category==""){
      $("#projectcategory").select();
      alert("Invalid Category!");
      return;
    }
    if(p_location==null || p_location==""){
      $("#p_location").select();
      alert("Invalid Location!");
      return;
    }
    if(price==null || price==""){
      $("#price").select();
      alert("Invalid Location!");
      return;
    }
    localStorage.setItem('title',title);
    localStorage.setItem('category',category);
    localStorage.setItem('location',p_location);
    localStorage.setItem('price',price);

    //document.location.href="/step2";
    location.href="/step2";
  }
</script>

</body>

</html>