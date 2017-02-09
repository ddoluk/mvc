<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="<?php echo URL ?>public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL ?>public/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">SG-ABOUT</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (isset($_SESSION['login']) && $_SESSION['login'] != ''): ?>
                            <li><a href="/admin/dashboard">Dashboard</a></li>
                            <li><a href="/login/signout">SignOut</a></li>
                        <?php else: ?>
                            <li><a href="/login">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <?php include 'app/views/' . $content . '.php' ?>

        </div>
    </div>
</div>
<script src="<?php echo URL ?>public/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo URL ?>public/js/app.js"></script>
</body>
</html>
