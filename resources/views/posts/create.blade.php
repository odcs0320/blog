@extends('layouts.main')<!--繼承父視圖-->
@section('content')
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - imgboard test</title>
  <link rel="stylesheet" href="{{asset('css/imgboardstyle.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
  <head>
    <title>LambdaChan</title>
  </head>
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Roboto">
  <body onload="startPage()">
  <center>
    <h1 id="logo">復古乳酪</h1>
      <hr />

      <div id="newthread">
        <br />
        <div id="postblock">
          <p>名　稱 <input type="text" value="Anonymous"></input>
              <br />
             標　題 <input type="text"></input> <button type="button" href="#">送　出</button>
              <br />
              內　文<textarea id="comment" rows="4" cols="50">
  </textarea>

      <br />
      附加圖片 <input type="file" id="imagefile" name="filename">

    <div class="post-info">
      <ul>
        <li>此為模擬futaba揭示板的HTML、CSS、JS練習作。</li>
        <li>上方隱藏表格為CSS Grid System練習</li>
        <li>用JS製作假留言板功能，練習DOM操作。</li>
        <li>勾選checkbox後，點擊最下方執行按鈕可刪除貼文。</li>
        <li>當vote小於0時刪除圖片。(目前僅No.1貼文有此功能)</li>
      </ul>
    </div>
  </section>

          </p>
        </div>
      </div>
    <hr />
    <br />
</center>
    <div class="postblock">
      <input type="checkbox" id="postcheckbox">
      <label for="postcheckbox" class="postername"> I have a bike</label> 31/10/2020 No.13531746 <a href="https://youtu.be/534Ab4Dv2pI">[Reply]</a><br />
      <p>
      hello guys
      </p>
    </div>
    <hr />
<br />
<center>
This is a pen lmao
</center>
<br />
  </body>
</html>
<!-- partial -->
  <script  src="{{asset('css/imgboardscript.js')}}"></script>

</body>
</html>
@stop
