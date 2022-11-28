@extends('layouts.master')<!--繼承父視圖-->

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
<H1>{{$name2}}</H1>
        <?php
          $arr=array("0e/54"=>"0e54df47ad0f28901860e0ff6dff80b2",
                     "11/a5"=>"11a51743a83a7fbe621cf0864120d419",
                     "50/55"=>"5055d8b9bbae115c0e2138f6df1d3c65",
                     "d4/41"=>"d4415cac3f8c154361311ca6c4825996",
                     "5f/b6"=>"5fb626efb8a070669af16aefb5772646",
                     "70/76"=>"70761207da4eb18a5d05c03a24f5b372",
                     "96/c1"=>"96c16870dd80afb6c321f55a49eaf2e8",
                     "14/20"=>"14200eb1ce908c9ed9693faa2e31209d",
                     "18/2a"=>"182a568e8f3753a2145e2cdd3895fcca",
                     "8c/b6"=>"8cb6271e205596f41abc3e3fd6c9ff44");
        ?>

        @foreach ( $arr as $key=>$value )
        <div class="gallery_item">
          <img src="https://cdn.donmai.us/original/{{$key}}/__classy_black_haired_girl_original_drawn_by_hayabusa__{{$value}}.jpg" />
				</div>
        @endforeach

			</div>

		</div>

	</div>

	<div id="level2" class="row">

		<div class="col2">

			<div class="gallery">

        <?php
          $arr=array("8b/6d"=>"8b6db7a04d9bd440261546a54229f05f",
                     "2f/87"=>"2f87cbac413abfe479c9206a3db3bc74",
                     "41/2b"=>"412b6871748237a746fb2f65ac377fed",
                     "ca/bc"=>"cabc2116fd1cb1382d7601ff04f4e914",
                     "0b/c2"=>"0bc2252478bcb06a4666590ce74d1dbf",
                     "48/75"=>"48754903622b53bfbdc35e9dff69d0e9",
                     "14/db"=>"14dbb281dbfac798a27d22024df7de92",
                     "13/3d"=>"133d1fdae19d1d3761dd556769a96431",
                     "2f/05"=>"2f053888d940ecba7de00bc7ade55414",
                     "8b/4c"=>"8b4c9393084872fb90fb22cc482166e2");
        ?>

        @foreach ( $arr as $key=>$value )
        <div class="gallery_item">
          <img src="https://cdn.donmai.us/original/{{$key}}/__classy_black_haired_girl_original_drawn_by_hayabusa__{{$value}}.jpg" />
				</div>
        @endforeach

			</div>

		</div>

	</div>

	<div id="level3" class="row">

    	<div class="col3">

			<div class="gallery">

        <?php
          $arr=array("19/86"=>"19868100d2e0c355e9d34e7483ed458c",
                     "70/0c"=>"700c9518c2966bbd2bab5461151104cb",
                     "48/ce"=>"48ce16513d061df975948bcef989994f",
                     "43/75"=>"43752cb9936a684f085d9074fae0da7a",
                     "55/71"=>"55714f67be8938f592d0d43e41acdead",
                     "77/4d"=>"774d855769ee9b140c07519fb3706857",
                     "0a/7d"=>"0a7d31c9d112a5c7edbb08da2b123592",
                     "8a/ba"=>"8aba38ca22385c206b1b70bb471bee7f",
                     "4d/9f"=>"4d9f24f41f0d479320d5571b4c662bad");
        ?>

        @foreach ( $arr as $key=>$value )
        <div class="gallery_item">
          <img src="https://cdn.donmai.us/original/{{$key}}/__classy_black_haired_girl_original_drawn_by_hayabusa__{{$value}}.jpg" />
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
