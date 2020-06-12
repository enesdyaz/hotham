<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/ec001ec395.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left{
                position: absolute;
                left: 10px;
                top: 18px
            }

            .content {
                text-align: center;
            }

            .title {
                margin-bottom: 100px;
                font-size: 20px;
            }

            .links > a {
                
                color: #636b6f;
                padding: 0 10px;
                font-size: 0.7rem;
                font-weight: 200;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
   
            }

            .m-b-md {
              
                color: white;
            }
            a{
                text-decoration: none;
            }
       
        </style>
    </head>


    <body>
        <div>
            <div class="top-left"><i class='fa fa-mountain'></i><small> Hotham Valley Project</small></div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        {{-- <a href="{{ route('login') }}">Login</a> --}}

                        @if (Route::has('register'))
                            {{-- <a href="{{ route('register') }}">Register</a> --}}
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <br><br>
    </div>



    <header>
    <div class="logo"><a href="/">LOGO</a></div>
    <div class="menu">
        <ul>
            <li><a href="/pages/main">stay</a></li>
            <li><a href="/pages/main">eat</a></li>
            <li><a href="/pages/main">see&do</a></li>
            <li><a href="/pages/main">event</a></li>
            <li><a href="/pages/main">trip</a></li>
        </ul>
    </div>
</header>

<!-- Div 2 -->    
<section class="video">Main Jumbotron</section>

<!-- Div 3 -->    
<section class='greeting'>Main Content</section>

<!-- Div 4 -->    
<section class="googlemap"><i class='fa fa-sort-amount-up'></i> Filter</section>



<!-- div 5 -->
    <div class="item-card">
        <br>
        <p style='text-align: center;'> RESULTS OF YOUR INTEREST</p>

        <div class='wrap'>
            <a href="/pages/single">
                <div class='item-image'>image</div>
                <div class='item-content'>content</div>
            </a>
        </div>
        <div class='wrap'>
            <a href="/pages/single">
                <div class='item-image'>image</div>
                <div class='item-content'>content</div>
            </a>
        </div>
        <div class='wrap'>
            <a href="/pages/single">
                <div class='item-image'>image</div>
                <div class='item-content'>content</div>
            </a>
        </div>
        <div class='wrap'>
            <a href="/pages/single">
                <div class='item-image'>image</div>
                <div class='item-content'>content</div>
            </a>
        </div>
        <div class='wrap'>
            <a href="/pages/single">
                <div class='item-image'>image</div>
                <div class='item-content'>content</div>
            </a>
        </div>
        <div class='wrap'>
            <a href="/pages/single">
                <div class='item-image'>image</div>
                <div class='item-content'>content</div>
            </a>
        </div>
        <div class='wrap'>
            <a href="/pages/single">
                <div class='item-image'>image</div>
                <div class='item-content'>content</div>
            </a>
        </div>
        <div class='wrap'>
            <a href="/pages/single">
                <div class='item-image'>image</div>
                <div class='item-content'>content</div>
            </a>
        </div>
        <div class='wrap'>
            <a href="/pages/single">
                <div class='item-image'>image</div>
                <div class='item-content'>content</div>
            </a>
        </div>

    </div>


<!-- div 6 --->
<footer>
    <div>Footer</div>
</footer>

</body>
</html>
