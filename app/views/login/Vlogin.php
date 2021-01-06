<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Perpustakaan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?= BASE_URL; ?>assets/dist/css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link href="<?= BASE_URL; ?>assets/fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="<?= BASE_URL; ?>assets/fontawesome/css/brands.css" rel="stylesheet">
        <link href="<?= BASE_URL; ?>assets/fontawesome/css/solid.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>assets/dist/css/login.css">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- ============================================================================================== -->

        <!-- Javascript -->

        <!-- Bootstrap -->
        <script src="<?= BASE_URL; ?>assets/js/jquery.min.js"></script>
        <script src="<?= BASE_URL; ?>assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?= BASE_URL; ?>assets/dist/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="background"></div>

            <div class="box">
                    <h1>Login</h1>
                    <form method="POST" action="<?= BASE_URL ?>login/masuk">
                    <div class="text-box">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" value="">
                    </div>
                    <div class="text-box">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" value="">
                    </div>
                    <button type="submit">Login</button>
                    </form>
            </div>
            
        </div>
    </body>
</html>