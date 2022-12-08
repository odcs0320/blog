<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
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

</body>
</html>
