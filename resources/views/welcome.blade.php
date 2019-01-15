<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        </style>
    </head>
    <body>
            <div id="bao">   
                 <form method="POST">
                    Username: <input type="text" name="username" value=""/> <br/>
                    password: <input type="password" name="password" value=""/><br/>
                    <input type="submit" name="form_click" value="Gửi Dữ Liệu"/>
                    <?php 
                        if (isset($_POST['form_click'])){
                            echo 'Tên đăng nhập là: ' . $_POST['username'];
                            echo '<br/>';
                            echo 'Mật khẩu là: ' . $_POST['password'];
                        }
                    ?>
                </form>
            </div>
    </body>        
</html>
