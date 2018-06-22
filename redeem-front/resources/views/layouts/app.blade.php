<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117815337-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){
  dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117815337-1');
  </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="John Doe">
  <meta name="description" content="">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">

  <!-- Title -->
  <title>Redeem</title>
  <!-- Place favicon.ico in the root directory -->
  <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" type="/assets/image/ico" href="images/favicon.ico" />
  <!-- Plugin-CSS -->
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/assets/css/themify-icons.css">
  <link rel="stylesheet" href="/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="/assets/css/animate.css">
  <!-- Main-Stylesheets -->
  <link rel="stylesheet" href="/assets/css/normalize.css">
  <link rel="stylesheet" href="/assets/style.css">
  <link rel="stylesheet" href="/assets/css/responsive.css">
  <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
  <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
  <!--Vendor-JS-->
  <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="/assets/js/vendor/bootstrap.min.js"></script>
  <!--Plugin-JS-->
  <script src="/assets/js/contact-form.js"></script>
  <script src="/assets/js/jquery.parallax-1.1.3.js"></script>
  <script src="/assets/js/scrollUp.min.js"></script>
  <script src="/assets/js/magnific-popup.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/style.css" media="all" />
</head>

<body data-target="#primary-menu" style="margin:0;background:#f2fefe">
  <!--Mainmenu-area-->
  <div class="mainmenu-area" data-spy="affix" data-offset-top="100" style="">
    <div class="container">
      <!--Logo-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="/" class="navbar-brand logo">
          <img src="/img/logo.png" style="height:55px;display:inline"></img>
        </a>
      </div>
      <nav class="collapse navbar-collapse" id="primary-menu">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="/">Home</a></li>
          <li><a href="#section-howtouse">Generate</a></li>
          <li><a href="#section-faq">Sent</a></li>
          <li><a href="#section-contact">Receive</a></li>
          <li @if (isset($page)) @if ($page == "login") class="active" @endif @endif><a href="/login">LogOut</a></li>
        </ul>
      </nav>
    </div>
  </div>
  @yield('content')
  <script src="/assets/js/wow.min.js"></script>
  <script src="/assets/js/main.js"></script>
</body>
</html>
