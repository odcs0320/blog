<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
<<<<<<< HEAD
  <title>CodePen - Dashboard</title>
  <link rel="stylesheet" href="main/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<span class='bckg'></span>
<header>
  <h1>
    Juan C
  </h1>
  <nav>
    <ul>
      <li>
        <a data-title='Projects'>Unidad 1</a>
      </li>
      <li>
        <a data-title='Team'>Unidad 2</a>
      </li>
      <li>
        <a data-title='Diary'>UNidad 3</a>
      </li>
      <li>
        <a data-title='Timeline'>Unidad 4</a>
      </li>
      <li>
        <a data-title='Settings'>Unidad 5</a>
      </li>
      <li>
        <a data-title='Search'>Unidad 6</a>
      </li>
    </ul>
  </nav>
</header>
<main>
  <div class='title'>
    <h2>Projects</h2>
    <a href='#' title='Profil'>
      Hello Bob !
    </a>
  </div>
  <article class='larg'></article>
</main>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="{{asset('main/script.js')}}"></script>
=======
  <title>JimCheng</title>
  <link rel="stylesheet" href="{{asset('css/komicamenustyle.css')}}">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="boardList">
    <h3>KOMICA</h3>

    <ul>
      <li>連線板</li>
      <li><a href="{{url('/ol_chan')}}">2CAT</a></li>
      <li><a href="{{url('/posts/create')}}">貓管理部</a></li>
      <li><a href="{{url('/posts/create')}}">復古乳酪</a></li>
    </ul>
  </div>

<div class="full">
@yield('content')
</div>
<!-- partial -->
>>>>>>> 35361c8186b705086d410a44bffe5d5d56953f53

</body>
</html>
