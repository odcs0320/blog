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
<H1>{{$name1}}</H1>
        <?php
          $arr=array("bb/fe"=>"bbfe74aedcfde6131e6217d56a825def",
                     "0c/16"=>"0c16ec2488b35a1485c85e6c19b3cbc3",
                     "80/b5"=>"80b5632678ccf6ac4a4246a5cf948672",
                     "30/89"=>"30891d1110f7caf1a9e729cf7c890bcc",
                     "e3/75"=>"e375c4728973cb4373b59d447333f723",
                     "07/e7"=>"07e7e1a3bc938cc8b342d6ce29aaaebf",
                     "02/12"=>"02122740c610f655796db3d8c3db852e",
                     "fd/54"=>"fd54fcf2e5f41a43900a1ae3f61e4e1b",
                     "c1/7f"=>"c17f5be4f39588696331f9c578ff4899",
                     "5b/3d"=>"5b3d020c0813352617756d8fe50806db",
                     "9a/dd"=>"9add5dc805dadf848232368937b7cbb6",
                     "35/64"=>"356480cf2feafee8f8742eedce6d1a92",
                     "37/a9"=>"37a9aaa54a823768ce193eb4d7faf6a1",
                     "49/21"=>"492146fa7419dced6450350cdc9930be",
                     "2e/3c"=>"2e3c06ec454e73b3bf28e53f0d5637a6",
                     "80/01"=>"8001a1c5fb4529d670275cf5e6b99b45",
                     "29/11"=>"29119465af763d16112bbc3f7d8ae437");
        ?>

        @foreach ( $arr as $key=>$value )
        <div class="gallery_item">
          <img src="https://cdn.donmai.us/original/{{$key}}/__senkawa_chihiro_idolmaster_and_1_more_drawn_by_kamille_vcx68__{{$value}}.png" />
				</div>
        @endforeach

			</div>

		</div>

	</div>

	<div id="level2" class="row">

		<div class="col2">

			<div class="gallery">

        <?php
          $arr=array("8e/6a"=>"8e6a6d468dde29cbda97b44a861cdefd",
                     "9e/99"=>"9e99a26eae73f0583638c94a168f6702",
                     "63/08"=>"630812a7773f7d0ea899ec8d3a5c5e20",
                     "cd/d5"=>"cdd5a84fc32d2a63ace87f14a467a18b",
                     "a0/35"=>"a035ad409912181ef82883f670c897a1",
                     "23/17"=>"23179bee4df9a0ca84448c44204abe6d",
                     "40/23"=>"40236711beba7088d14e344a5e45d557",
                     "72/91"=>"7291d859b223546392aabf75e00e2cb7",
                     "85/52"=>"8552cb5be7d22f50ccf3bcca6cfbfc61",
                     "49/32"=>"49325502b7cea8138e633085553c5620",
                     "43/7b"=>"437bdfb74c02ad3267ad86598e5d494c",
                     "83/fb"=>"83fb5b4d94c3ea60bebb8ba61564e991",
                     "0e/81"=>"0e81406cb2c7bc6f74afcb0001d9a719",
                     "78/b3"=>"78b321eaf39362c1a33ffef3c27e3694",
                     "f5/90"=>"f590914205bc1308a45097ad83e4bc39",
                     "e1/dc"=>"e1dc48041768749991bb48ca8977ce71",
                     "6b/d8"=>"6bd8a976a8ee4db8961a92f412b0af08");
        ?>

        @foreach ( $arr as $key=>$value )
        <div class="gallery_item">
          <img src="https://cdn.donmai.us/original/{{$key}}/__senkawa_chihiro_idolmaster_and_1_more_drawn_by_kamille_vcx68__{{$value}}.png" />
				</div>
        @endforeach

			</div>

		</div>

	</div>

	<div id="level3" class="row">

    	<div class="col3">

			<div class="gallery">

        <?php
          $arr=array("32/b0"=>"32b0d021c790c7da557531aa38c7e5e7",
                     "18/22"=>"1822c8edb1092cc612599047a18e96f3",
                     "13/74"=>"137459f0f093184493f1c57189738f51",
                     "3f/2a"=>"3f2a7dde15f911044c2b6baf8db38a49",
                     "93/d3"=>"93d364bc71694a6c43064c70eb654f7b",
                     "89/af"=>"89af8c20115578a3942a34a6f1b06fcf",
                     "d4/dc"=>"d4dc7fa4b291184f1bda191a26c0c761",
                     "7f/a8"=>"7fa8bbd33c6361104f7c5d1997bbb063",
                     "bd/3f"=>"bd3fda67762cc1ce9e5a593151bfae25",
                     "71/69"=>"7169649327168014b3e8c144e4a6f9cf",
                     "f9/66"=>"f9663ffb9664177e5024f8b4f1cbf3d3",
                     "10/0b"=>"100bfaadc0208d58b182da196159e26e",
                     "f4/2e"=>"f42ecf59bab8a0023bc606d0d9c3142f",
                     "ce/01"=>"ce01bf09b7053103bef2a250dcc21c5e",
                     "96/f9"=>"96f9705f91150ba71d37ea761dae481f",
                     "73/90"=>"7390db4adbaeaaca172559643f31c877",
                    // "bc/f8"=>"bcf81345cbb2cd2a18754ce903101e75",
                     "ae/a1"=>"aea15abed7ea5b475c484af72102f70c");
        ?>

        @foreach ( $arr as $key=>$value )
        <div class="gallery_item">
          <img src="https://cdn.donmai.us/original/{{$key}}/__senkawa_chihiro_idolmaster_and_1_more_drawn_by_kamille_vcx68__{{$value}}.png" />
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




