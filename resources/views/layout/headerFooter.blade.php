
<!DOCTYPE html>
<html>
    <head>
        <meta charset=""UTF-8>
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        {{-- <meta name="wiewport" content="width-device-width, initial-scale" --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <style>
            #footer{
                width: 100%;
                height: auto;
                padding-top: 20px;
                padding-bottom: 20px;
                background-color: gray;
                color: white;
            }

        </style>
    </head>

    <body>
        <div class="topnav">
            <a class="active" href="{{route('welcome')}}">Home</a>
            <a href="#news">News</a>
            <a href="{{route('dashboard')}}">Dashboard</a>
            <a href="{{route('about')}}">About</a>
        </div>

        @yield('welcome')
        @yield('dashboard')
        @yield('about')
        @yiels('posts')

        <div id="footer">
            <h1>INI FOOTER</h1>
        </div>

        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
