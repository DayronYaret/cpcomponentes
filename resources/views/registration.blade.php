<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body style="background-color: rgb(246,246,246);">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="/"><img id="logo" src="assets/img/logo2.png"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="/">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/catalog">Catalog</a></li>
                <li class="nav-item" role="presentation" id="contacto" style="margin-right: 425px;"><a class="nav-link" href="/contact">Contact Us</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/login">Login</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/registration">Register</a></li>
            </ul>
        </div><a href="/cart"><i class="fa fa-shopping-cart"></i></a></div>
</nav>
    <main class="page registration-page" style="background-color: rgb(246,246,246);">
        <section class="clean-block clean-form dark" style="background-color: transparent;">
            <div class="container" id="register-form" style="margin-top: 84px;">
                <form method="post" action="/registration">
                    @csrf
                    <div class="form-group"><label for="name">Name</label><input class="form-control item" type="text" name="name"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control item" type="password" name="password"></div>
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" name="email"></div><button class="btn btn-outline-primary btn-block" type="submit">Registrarse</button> <a class="btn btn-outline-secondary btn-block"
                                                                                                                                                                                                                                         role="button" href="/">Cancelar</a></form>
            </div>
        </section>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
