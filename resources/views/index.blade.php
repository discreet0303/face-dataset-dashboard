<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/materializeStyle.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="navbar-fixed top-nav">
            <nav class="navbar white">
                <a href="#!" class="brand-logo">Logo</a>
                <a href="#" data-target="slide-out" class="sidenav-trigger">
                    <i class="material-icons" style="color: black;">menu</i>
                </a>
            </nav>
        </div>

        <ul id="slide-out" class="sidenav left-side-nav">
            <li>
                <a href="sass.html" class="logo-container">Sass</a>
            </li>
            <li>
                <ul class="collapsible">
                    <li>
                        <a class="collapsible-header">Page<i class="material-icons chevron">chevron_left</i></a>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <a class="collapsible-header">Chart<i class="material-icons chevron">chevron_left</i></a>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <a class="collapsible-header">Header</a>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <a class="collapsible-header">Account</a>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                </ul>
            </li>
        </ul>
    </header>

    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.collapsible').collapsible();
        });
    </script>
</body>
</html>