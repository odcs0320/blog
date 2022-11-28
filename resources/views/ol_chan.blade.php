@extends('layouts.master')<!--繼承父視圖-->
<H1>{{$name3}}</H1>
@section('gallery')

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="gallery/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">

	<div id="level1" class="row">

		<div class="col1">

			<div class="gallery">
<H1>{{$name3}}</H1>
        @foreach ( $id1 as $item )
            <div class="gallery_item">
              <img src="{{$item}}" />
				    </div>
        @endforeach

			</div>

		</div>

	</div>

	<div id="level2" class="row">

		<div class="col2">

			<div class="gallery">

        @foreach ( $id2 as $item )
            <div class="gallery_item">
              <img src="{{$item}}" />
				    </div>
        @endforeach

			</div>

		</div>

	</div>

	<div id="level3" class="row">

    	<div class="col3">

			<div class="gallery">

        @foreach ( $id3 as $item )
            <div class="gallery_item">
              <img src="{{$item}}" />
				    </div>
        @endforeach

			</div>

		</div>

  	</div>

</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<!-- partial -->
  <script  src="{{asset('gallery/script.js')}}"></script>

</body>
</html>

@stop
<!--補洞1-->
@section('script','Homework_20221118')<!--補洞2-->
@section('content')<!--補洞3-->
  <div>AAAAAAAA</div>
  @parent
@endsection
