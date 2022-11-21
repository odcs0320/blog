<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - New Style Dashboard Sidebar With Active Class</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="{{asset('dashboard/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="accordian">
            <ul class="show-dropdown main-navbar">
                <div class="selector-active"><div class="top"></div><div class="bottom"></div></div>
                <li>
                    <a href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="active">
                    <a href="javascript:void(0);"><i class="far fa-address-book"></i>Address Book</a>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="far fa-clone"></i>Components</a>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="far fa-copy"></i>Documents</a>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="far fa-bookmark"></i>Bookmarks</a>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="far fa-envelope"></i>Mail</a>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="far fa-heart"></i>Favorite</a>
                </li>
            </ul>
        </div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script><script  src="{{asset('dashboard/script.js')}}"></script>
</body>
</html>
