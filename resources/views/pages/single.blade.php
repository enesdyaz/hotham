<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>index</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/ec001ec395.js" crossorigin="anonymous"></script>


    <!-- foundation -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/single.css')}}">

</head>
<body>
<!-- Div 1 -->    
<header>
    <div class="logo"><a href='/'>LOGO</a></div>
    <div class="menu">
        <ul>
           <li><a href='/pages/main'>stay</a></li>
           <li><a href='/pages/main'>eat</a></li>
           <li><a href='/pages/main'>see&do</a></li>
           <li><a href='/pages/main'>event</a></li>
           <li><a href='/pages/main'>trip</a></li>
 
        </ul>
    </div>
</header>

<!-- Div 2 -->    
<section class="jumbotron">Main JumboTron</section>

<!-- Div 3 -->    
<section class="filter">
    <div class='filter_wrap'>
        <span class='filter_item'><i class='fa fa-map-marker-alt'></i> Link</span>
        <span class='filter_item'><i class='fa fa-map-marker-alt'></i> Link</span>
        <span class='filter_item'><i class='fa fa-map-marker-alt'></i> Link</span>
        <span class='filter_item'><i class='fa fa-map-marker-alt'></i> Link</span>
        <span class='filter_item'><i class='fa fa-map-marker-alt'></i> Link</span>
    </div>
</section>



<!-- div 4 -->
<section class='description'>
    <div class='description_wrap'>
        <div class='left'>
            <div class='desc'>desc1</div>
            <div class='desc'>desc2</div>
            <div class='desc' style='height: 50vh; line-height: 50vh;'>desc3</div>
        </div>
        <div class='right'>
            <div class="desc">photo</div>
            <div class="desc" style='height: 60vh; line-height: 60vh;'>map</div>
            <div class="desc" style='height: 10vh; line-height: 10vh;'>Trading hour</div>
            <div class="desc" style='height: 9vh; line-height: 9vh;'>Address&Phone</div>
        </div>
    </div>

</section>


<!-- div 5 -->
<div class="item-card">
    <p>    Other Interested Content </p>
    <div class="container">
        <a href="/pages/main">
            <div class='wrap'>
                    <div class='item-image'>image</div>
                    <div class='item-content'>content</div>
            </div>
        </a>

        <a href="/pages/main">
            <div class='wrap'>
                    <div class='item-image'>image</div>
                    <div class='item-content'>content</div>
            </div>
        </a>

        <a href="/pages/main">
            <div class='wrap'>
                    <div class='item-image'>image</div>
                    <div class='item-content'>content</div>
            </div>
        </a>

</div>

</div>



<!-- div 6 --->
<footer>
    <div>Footer</div>
</footer>
</body>
</html>