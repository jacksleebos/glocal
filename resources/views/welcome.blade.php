<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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
        </style>
    </head>
    <body>


        <div class="flex-center position-ref full-height">
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
                {{-- Place for animated logo --}}
                <image img src="/images/glocal.png" alt="Logo"></image>






                <div class="title m-b-md">
                    GloCal Worldwide
                </div>


                <div class="links">
                    {{-- Keep this for testing what you have build --}}

<<<<<<< HEAD
                    <a href="/products">Products</a>
                    <a href="/categories">Categories</a>
                    <br>
                    <br>
                    <a href="/products2order">Products to order</a>
=======
                    <a href="/categories">Categories CRUD</a>
                    <a href="/products">Products CRUD</a>
                    <br>
                    <a href="/stores">Stores CRUD</a>
                    <a href="/suppliers">Suppliers CRUD</a>

>>>>>>> 4b5b3b185a30d17232c4f81e1b5e8acbc6be9875

                    <br>
                    <br>
                    <a href="https://appdividend.com/2018/09/06/laravel-5-7-crud-example-tutorial/">Laravel CRUD example tutorial</a>
                    <a href="https://appdividend.com/2018/01/04/laravel-one-to-many-relationship-tutorial/">Laravel one to many relationship tutorial</a>

<<<<<<< HEAD
=======
                    <br>
>>>>>>> 4b5b3b185a30d17232c4f81e1b5e8acbc6be9875
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>





            </div>
        </div>
    </body>
</html>
