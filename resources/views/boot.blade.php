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

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">

        <title>Hello, world!</title>
    </head>
    <body>
        <header>
            <nav class="navbar fixed-top top-nav">
                <button type="button" class="navbar-toggler" data-toggle="modal" data-target="#exampleModalCenterTest">
                    <span class="material-icons">menu</span>
                </button>
                <a class="navbar-brand" href="#">Fixed top</a>
            </nav>
            <!-- Modal -->
            <div class="modal" id="exampleModalCenterTest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document" style="position: absolute;height: 100%;margin: 0;">
                    <div class="modal-content" style="height: inherit;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Create New User</h5>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidenav" class="side-nav">
                123
            </div>
        </header>
        <main>
            <div class="card main-content">
                <div class="card-page">
                    <span class="material-icons" style="margin-top: 2px;">chevron_right</span>
                    <h4 style="margin: 0;margin-left: 5px;">Card Title</h4>
                </div>
                
                <div class="card-body">
                    @include('longText')
                </div>
            </div>
        </main>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    </body>
</html>