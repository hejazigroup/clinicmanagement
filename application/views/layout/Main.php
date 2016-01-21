
    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/bootstrap-rtl.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/weather-icons.min.css');?>" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet" type="text/css" />

    <!--Beyond styles-->
    <link href="<?php echo base_url('assets/css/beyond-rtl.min.css');?> " rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/4095-rtl.min.css');?> " rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/demo.min.css');?> " rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/typicons.min.css');?> " rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/animate.min.css');?> " rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />
    <style type="text/css">
      /*slide show*/
      .my_slide_show .carousel-inner img {display: inline-flex;height: 400px;width: 100%;}
      .carousel-caption {background-color: hsla(0,1%,14%,0.22);bottom: 50px;padding-right: 20px;padding-left: 20px;}
      .carousel-indicators li {height: 15px;width: 15px;background-color: hsla(0,1%,14%,0.22);border-color: #EEEEEE}
      .carousel-indicators .active {height: 17px;width: 17px;}
      .carousel-indicators {bottom: 0}
/*End Slide Show*/
      .brand{width: 50px; height: 50px;}
    </style>
<!--- start NavBar --->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
<a class="navbar-brand" href="#">
        <img alt="Brand" class="img-responsive brand" src="<?php echo base_url('assets/img/aha-logo.png');?> ">
      </a>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">الأمرض المعدية <span class="sr-only"></span></a></li>
        <li><a href="#">الاخبار الطبية</a></li>
        <li><a href="#">مقالات طبية</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">الأمراض المزمنة <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">الضغط</a></li>
            <li><a href="#">السكر</a></li>
            <li><a href="#">السرطان</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">الامراض التنفسية المزمنة</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">السكتة الدماغية</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#" style="border-radius:20px; background-color:#2afccc; padding:5px 20px; margin-top:10px;">تسجيل دخول</a></li>
          </ul>
      
      
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--- End NavBar --->


<!-- Wrapper for slides -->
     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="my_slide_show">
        <div id="myslide" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myslide" data-slide-to="0" class=""></li>
        <li data-target="#myslide" data-slide-to="1" class="active"></li>
        <li data-target="#myslide" data-slide-to="2" class=""></li>
        <li data-target="#myslide" data-slide-to="3" class=""></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item">
          <img src="<?php echo base_url('assets/slideshow/1.jpg');?>" alt="pic 1">
          <div class="carousel-caption">
            <h1>example</h1>
            <p class="visible-md-block visible-lg-block">Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 &amp; 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
            <div class="btn btn-primary"> Read More... </div>
            <div class="btn btn-danger"> Buy Now... </div>
          </div>
        </div>
        <div class="item active">
          <img src="<?php echo base_url('assets/slideshow/2.jpg');?>" alt="pic 2">
          <div class="carousel-caption">
            <h1>web hosting</h1>
            <p class="visible-md-block visible-lg-block">Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 &amp; 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
            <div class="btn btn-primary"> Read More... </div>
            <div class="btn btn-danger"> Buy Now... </div>
          </div>
        </div>
        
        <div class="item">
          <img src="<?php echo base_url('assets/slideshow/3.jpg');?>" alt="pic 3">
          <div class="carousel-caption">
            <h1>desktop</h1>
            <p class="visible-md-block visible-lg-block">Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 &amp; 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
            <div class="btn btn-primary"> Read More... </div>
            <div class="btn btn-danger"> Buy Now... </div>
          </div>
        </div>
        
        <div class="item">
          <img src="<?php echo base_url('assets/slideshow/4.jpg');?>" alt="pic 4">
          <div class="carousel-caption">
            <h1>programing</h1>
            <p class="visible-md-block visible-lg-block">Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 &amp; 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
            <div class="btn btn-primary hidden-md"> Read More... </div>
            <div class="btn btn-danger"> Buy Now... </div>
          </div>
        </div>
        
      </div>
    
      <!-- Controls -->
      <a class="left carousel-control" href="#myslide" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myslide" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    </div>
    <!-- End Carousel -->

<script src="<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="<?php echo base_url(); ?>assets/js/skins.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/beyond.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
            
            "use strict";
  $("html").niceScroll();
  $(".carousel").carousel({
    interval:5000
    });
        });
    </script>