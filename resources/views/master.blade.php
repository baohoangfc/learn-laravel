<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{asset('/css/my.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
            <div id="bao">   
                @include('marquee',['content' => 'HAHAH'])
                @yield('content')
            </div>
    </body>        
</html>
