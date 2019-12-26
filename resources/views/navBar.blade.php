<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body style="background-color: rgb(246,246,246)">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="/"><img id="logo" src="assets/img/logo2.png"></a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="/">Principal</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/catalog">Catalogo</a></li>
                <li class="nav-item" role="presentation" id="contacto" style="margin-right: 300px;"><a class="nav-link" href="/contact">Sugerencias</a></li>
                <?php

                if(isset($_SESSION["user"])){
                    if($_SESSION["user"]=="admin@admin.admin"){
                        echo "<li class='nav-item' role='presentation'><a class='nav-link' href='/admin'>Admin</a></li>";
                    }
                    echo "<li class='nav-item' role='presentation'><a class='nav-link' href='/logout'>Cerrar sesion</a></li>";
                }else{

                ?>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/login">Iniciar sesion</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/registration">Registrarse</a></li>
                <?php
                }

                ?>
            </ul>
        </div>
        <a href="/cart"><i class="fa fa-shopping-cart"></i></a>
    </div>
</nav>

