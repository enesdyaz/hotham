<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/ec001ec395.js" crossorigin="anonymous"></script>


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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
   
            }

            .m-b-md {
              
                color: white;
            }
       
        </style>
    </head>


    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-left"><i class='fa fa-mountain'></i><small> Hotham Valley Project</small></div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <div class="content">
                
                <div class="links" style='position: fixed; bottom:0; left: 0; overflow: hidden; z-index: 0;'>
                    <video autoplay muted loop id="myVideo">
                    <source src="{{asset('image/welcome.mp4')}}" type="video/mp4">
                    </video>
                </div>
             
            </div>
        </div>
    </body>
</html>
