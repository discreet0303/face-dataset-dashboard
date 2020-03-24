<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Material Design for Bootstrap fonts and icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

        <!-- Material Design for Bootstrap CSS -->
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

        <title>Hello, world!</title>
        <style>
            html, body {
                height: 100%;
                width: 100%;
            }
            
            .bg-img {
                height: inherit;
                width: inherit;
                background-image: url('img/background.jpeg');
                background-size: 100%;
                background-repeat: round;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .card {
                width: 450px;
            }

            .icon-logo {
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
        <div class="bg-img">
            <div class="card">
                <div class="icon-logo">圖書</div>
                <h5 class="card-title">Login</h5>
                <div class="card-body">
                    <form class="col s12" method="POST" action="/login">
                        @csrf
                        <div class="form-group">
                            <label for="account">Log in with your e-mail address</label>
                            <input type="text" class="form-control" id="account"  name="account"  aria-describedby="emailHelp" placeholder="user@example.com">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Numbers, Letters...">
                        </div>
                        <button type="submit" class="btn btn-raised btn-block btn-primary">Sign in to Dashboard</button>
                    </form>
                    <div class="text-divider">
                        Login via social network
                    </div>
                    <div class="card-content">
                        <p style="text-align: center;">圖書館資訊</p>
                    </div>
                    <div style="float: right;">Forget Password?</div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
        <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
    </body>
</html>