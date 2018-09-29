<?php
    session_start();

    if (isset($_SESSION['username'])) {
        header('location:dashboard.php');
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="assets/css/open-iconic-bootstrap.css" rel="stylesheet">
        <link rel="shortcut icon" href="assets/img/fav.ico" type="image/x-icon">
        <title>Login</title>
        <style>
            body {
                background-image : url('assets/img/weather.png');
                background-repeat : repeat;
            }
        </style>
    </head>
    <body>
    <div class="d-flex align-items-center" style="min-height:100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-6">
                    <img src="assets/img/logo.png" alt="" width="80%" style="margin-bottom:25px;" class="mx-auto d-block">
                    <form action="sign.php?in" method="post">
                        <div class="form-group">
                            <label class="sr-only" for="username">Username</label>
                            <div class="input-group mb-2 mb-sm-0">
                                <span class="input-group-addon"><span class="oi oi-person" title="person" aria-hidden="true"></span></span>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="password">Password</label>
                            <div class="input-group mb-2 mb-sm-0">
                                <span class="input-group-addon"><span class="oi oi-briefcase" title="briefcase" aria-hidden="true"></span></span>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width:100%;">LOGIN</button>
                    </form>
                </div>
            </div>
            <footer class="row">
                <div class="col-12">
                    <p class="text-center" style="margin-top:25px;"><strong>&copy; 2017 - Malv</strong></p>
                </div>
            </footer>
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
    </html>