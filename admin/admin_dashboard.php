<?php
session_start();
if($_SESSION['id']){
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./bootstrap/dist/css/bootstrap.min.css">
        <title>Jubbila</title>
    </head>

    <body ng-app="app" ng-controller="main">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Jubbila</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary" href="#!">Event Query</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-info" href="#!contact">Contact Query</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary" href="#!vendour">Vendors Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-info" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div ng-view></div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.2/angular.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.2/angular-route.min.js"></script>
        <script src="./controller.js"></script>
        <script src="./event.js"></script>
        <script src="./contact.js"></script>
        <script src="./vendour.js"></script>

    </body>

    </html>

    <?php
}
else{
    header('location:index.php');
}


?>