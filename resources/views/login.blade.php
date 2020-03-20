<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <style>
        html, body {
            height: 100%;
            padding: 0;
            margin: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bg-img {
            background-image: url('img/background.jpeg');
            background-size: 100%;
            height: 100%;
            width: 100%;
            -webkit-filter: blur(2px);
            -moz-filter: blur(2px);
            -o-filter: blur(2px);
            -ms-filter: blur(2px);
            filter: blur(2px);
            position: absolute;
        }

        .login-form{
            background-color: white;
            position: absolute;
            width: 450px;
        }

        .login-form .icon-title {
            height: 70px;
            width: 70px;
            background-color: red;
            margin: 0 auto;
            border-radius: 100%;
            display: flex;
            position: absolute;
            top: -35px;
            right: 0;
            left: 0;
            justify-content: center;
            align-items: center;
        }
        
        .card-title {
            border-bottom: 1px solid #e6eaee;
            background-color: #fafbfc;
            padding: 1.5625rem 1.875rem;
        }

        .card-content {
            /* background-color: #fff; */
        }

        .card-footer {
            /* background-color: #fff; */
        }

        .input-field {
            margin-bottom: 30px;
        }

        .text-divider {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text-divider::before, 
        .text-divider::after {
            content: "";
            width: 25%;
            height: 1px;
            background-color: #dfe3e9;
        }
    </style>
</head>
<body>
    <div class="bg-img"></div>
    <div class="login-form card">
        <div class="icon-title">圖書</div>
        <div class="card-title">
            <a href="#">Login</a>
        </div>
        <div class="card-content">
            <form class="col s12" method="POST" action="/login">
                @csrf
                <div class="input-field">
                    <input id="account" name="account" placeholder="user@example.com" type="text" class="validate">
                    <label for="account">Log in with your e-mail address</label>
                </div>
                <div class="input-field">
                    <input id="password" name="password" placeholder="Numbers, Letters..." type="password" class="validate">
                    <label for="password">Password</label>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action" style="width: 100%;">Sign in to Dashboard</button>
            </form>
        </div>
        <div class="card-footer text-divider">
            Login via social network
        </div>
        <div class="card-content">
            <p style="text-align: center;">圖書館資訊</p>
        </div>
        <div style="float: right;">Forget Password?</div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>