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
  <title>Athleticoin Awards</title>
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
  <style>
  @media (min-width: 1200px){
    .container {
      width: 1270px;
    }
  }
  </style>
</head>

<body data-target="#primary-menu" style="margin:0;background:#f2fefe">

  <!--Mainmenu-area-->
  <!-- @if (isset($page) && $page == "home")
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100" style="">
  @else
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100" style="background:#75cbe7">
  @endif -->
  <!-- <div class="mainmenu-area" data-spy="affix" data-offset-top="100" style="background:#75cbe7"> -->
  <div class="mainmenu-area" data-spy="affix" data-offset-top="100" style="">
    <div class="container">
      <!--Logo-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="/" class="navbar-brand logo" style="font-size:30px">
          <img src="/img/logo-token.png" style="height:55px;display:inline"></img> ATHLETICOIN AWARDS
        </a>
      </div>
      <nav class="collapse navbar-collapse" id="primary-menu">
        @if (Auth::guest())
        <ul class="nav navbar-nav navbar-right">
          <!-- <li @if (isset($page)) @if ($page == "home") class="active" @endif @endif><a href="/">Home</a></li> -->
          <li @if (isset($page)) @if ($page == "home") class="active" @endif @endif><a href="#section-howtouse">HOW IT WORKS</a></li>
          <!-- <li><a href="#section-faq">Faq</a></li>
          <li><a href="#section-contact">Contact</a></li> -->
          <li id="login-li" @if (isset($page)) @if ($page == "login") class="active" @endif @endif><a href="/login">Login</a></li>
          <li id="register-li" @if (isset($page)) @if ($page == "register") class="active" @endif @endif><a href="/register">Register</a></li>
        </ul>
        @else
        <ul class="nav navbar-nav navbar-right">
          <li @if (isset($page)) @if ($page == "login") class="active" @endif @endif><a href="/">HOW IT WORKS</a></li>
          <li id="sent" @if (isset($page)) @if ($page == "sent") class="active" @endif @endif><a href="/sent">BUY AND GIVE ATHLETICOIN</a></li>
          <li id="receive" @if (isset($page)) @if ($page == "receive") class="active" @endif @endif><a href="/receive">REDEEM ALTHETICOIN</a></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </li>
        </ul>
        @endif
      </nav>
    </div>
  </div>
  @yield('content')
  <script src="/assets/js/wow.min.js"></script>
  <script src="/assets/js/main.js"></script>
</body>
</html>
