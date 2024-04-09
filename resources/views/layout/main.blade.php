<!DOCTYPE html>
<html lang="es">
    <head>
        @yield('title')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}" id="csrf_token">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <header>
            <ol class="menu">
                <li><a href="{{URL::to('/')}}">Index</a></li>
                <li><a href="{{URL::to('/show-vehicles')}}">Vehicles</a></li>
                <li><a href="{{URL::to('/show-drivers')}}">Drivers</a></li>
                <li><a href="{{URL::to('/show-info-trips')}}">Trips</a></li>
            </ol>
        </header>
        @yield('content')
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.js')}}"></script>
        @yield('js')
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
