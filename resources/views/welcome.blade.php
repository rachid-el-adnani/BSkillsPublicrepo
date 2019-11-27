<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Brain Skills</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Helvetica', sans-serif;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #homef {
                font-size: 35px;
            }

            #homes {
                font-size: 35px;
            }

            #bs {
                font-size: 40px;
            }

            .all {
                text-align: center;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <div class="title m-b-md">
                @if (Route::has('login'))
                <div class="all links">
                    @auth
                        <a id='homef' href=" {{ url('/abscence') }} ">Gerer les abscences</a>
                        <br>
                        <br>
                        <a id='homes' href=" {{ url('/payment') }}" >Payment</a>
                    @else
                        <a id="bs" href="{{ route('login') }}">Brain Skills</a>
                    @endauth
                </div>
            @endif
                </div>
            </div>
        </div>
    </body>
</html>
