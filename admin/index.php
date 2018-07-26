<?php

error_reporting(0);
session_start();

if(!isset($_POST['submit'])){

    if($_REQUEST['msg']=='1'){
        ?>

    <!-- credential wrong -->
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="text-center">
                <h1>Admin Panel</h1>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="">
                <h5>Invalid Username and Password</h5>
            </div>
        </div>
    </div>
    <?php
    }

    else if($_REQUEST['msg']=='2'){
        ?>

        <div class="container">
        <div class="row justify-content-md-center">
            <div class="text-center">
                <h1>Admin Panel</h1>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="">
                <h5>Logout Successfully</h5>
            </div>
        </div>
    </div>


        <?php
    }
    else{

        showHeader();
    }

    showForm();
}
else{

    require_once('../init.php');

    $username =$_POST['username'];
    $password = $_POST['password'];

    $query = "select id from admin where username='$username' and password='$password'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){

        $_SESSION['id'] = $username;
        
        header('Location: admin_dashboard.php');
    }
    else{
        
        header('Location: index.php?msg=1');
    }


}
function showForm(){
    ?>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="./bootstrap/dist/css/bootstrap.min.css">
                <title>Admin</title>
                <style>
                    .button {
                        margin-top: 3%;
                    }
                </style>
            </head>

            <body>

                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <div class="jumbotron">
                                <form action="index.php" method="post">
                                    <div class="form-group">
                                        <label for="Username">Username</label>
                                        <input type="text" class="form-control" name="username" id="Username" aria-describedby="emailHelpId" placeholder="Username...">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="password">
                                    </div>

                                    <div class="row justify-content-md-center">
                                        <button type="submit" name="submit" class="btn btn-outline-primary btn-lg button">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="./bootstrap/dist/js/bootstrap.min.js"></script>
            </body>

            </html>


            <?php
}

function showHeader(){
    ?>

                <div class="row justify-content-md-center">
                    <div class="text-center">
                        <h1>Admin Panel</h1>
                    </div>
                </div>

                <?php
}
?>