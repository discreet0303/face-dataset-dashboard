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
        <div id="slide-out" class="sidenav left-side-nav">
            <div class="logo-container">
                <a href="#">Title</a>
            </div>
            <div class="sidenav-container">
                <h4 class="sidenav-title">Overview</h4>
                <ul>
                    <li><a href="#">Admin Dashboard</a></li>
                    <li><a href="#">Frontend Template</a></li>
                </ul>
                <h4 class="sidenav-title">Componments</h4>
                <ul class="collapsible">
                    <li>
                        <a class="collapsible-header">Page<i class="material-icons chevron">chevron_left</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li>Dashboard</li>
                                <li>Fixed Chart</li>
                                <li>Grid</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
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