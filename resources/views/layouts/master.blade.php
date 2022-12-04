<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Jim Cheng_HomeWork</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="master/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Header - Start  -->
<header id="header">
 <div class="menu-button">
  <div id="nav-icon3">
   <span></span>
   <span></span>
   <span></span>
   <span></span>
  </div>
 </div>
 <div id="top-bar">
  <h3>{{$global}}</h3>
 </div>
</header>
<!-- Header - End  -->
<!-- Navigation - Start  -->
<nav id="sidemenu">
 <div class="main-menu">
  <ul class='main-menu'>
   <li class="link-active">
    <!--<a href="http://localhost:6080/blog/public/senkawa_chihiro/">-->
      <a href="{{url('/senkawa_chihiro')}}">
     <span class='glyphicon glyphicon-home'></span> Senkawa Chihiro
    </a>
   </li>
   <li>
    <!--<a href="http://localhost:6080/blog/public/black_haired_girl/">-->
      <a href="{{url('/black_haired_girl')}}">
     <span class='glyphicon glyphicon-pushpin'></span> Black Haired Girl
    </a>
   </li>
   <li>
    <!--<a href="http://localhost:6080/blog/public/ol_chan/">-->
      <a href="{{url('/ol_chan')}}">
     <span class='glyphicon glyphicon-picture'></span> Ol Chan
    </a>
   </li>
   <li>
    <a href="#">
     <span class='glyphicon glyphicon-book'></span> Pages
    </a>
   </li>
   <li>
    <a href="#">
     <span class='glyphicon glyphicon-comment'></span> Comments
    </a>
   </li>
  </ul>
  <ul class='main-menu bottom'>
   <li>
    <a href="#">
     <span class='glyphicon glyphicon-user'></span> Profile
    </a>
   </li>
   <li>
    <a href="#">
     <span class='glyphicon glyphicon-cog'></span> Settings
    </a>
   </li>
  </ul>
 </div>
 <p class="copyright">&copy; 2017</p>
</nav>
<!-- Navigation - End  -->
<!-- Content - Start  -->
<div id="content-wrapper">
 <div class="container-fluid">
  @yield('gallery')
 </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="{{asset('master/script.js')}}"></script>
</body>
</html>
