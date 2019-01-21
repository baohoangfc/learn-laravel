<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
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
            #bao {
                text-align: center;
                color: red;
            }
            @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);



	

        </style>
    </head>
    <body>
		@if(count($errors) > 0)
		<ul>
			@foreach ($errors->all() as $error)
				<li>{!!$error!!}</li>
			@endforeach
		</ul>
		@endif
        <div class="wrapper">
            <div class="container">
				<h1>Welcome</h1>
				
                <form class="form" action="" method="POST">
					<input type="hidden" name="_token" id="csrf-token" value="{!! csrf_field() !!}" />
                    <input type="text" placeholder="Username" name="user">
                    <input type="password" placeholder="Password" name="pass">
                    <button type="submit" id="login-button">Login</button>
                </form>
            </div>
            
            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </body>        
</html>
