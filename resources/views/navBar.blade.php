<?php
session_start();
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/untitled.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="background-color: rgb(246,246,246)">
<div id="app">

<nav class="navbar navbar-light navbar-expand-lg  bg-white clean-navbar">
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
                <!-- Shopping cart button -->
                    <li class="nav-item dropdown">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                data-target="#shoppingCartModal">
                            Cart
                        </button>
                    </li>

                    <!-- Shopping cart modal -->
                    <div class="modal fade" id="shoppingCartModal" tabindex="-1" role="dialog"
                         aria-labelledby="shoppingCartModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="shoppingCartModalTitle">Shopping cart</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(Cart::content() as $cartItem)
                                            <tr>
                                                <td>
                                                    <!-- Remove product button -->
                                                    <a href="{{ route('remove', [ $cartItem->rowId ]) }}">x</a>
                                                </td>
                                                <td>{{ $cartItem->name }}</td>
                                                <td>{{ $cartItem->qty }}</td>
                                                <td>{{ $cartItem->price }} USD</td>
                                                <td>{{ number_format($cartItem->price * $cartItem->qty, 2) }} USD</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <!-- Total price of whole cart -->
                                            <td class="uk-text-bold">Total: {{ number_format(Cart::subtotal(), 2) }} USD</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <!-- Clear shopping cart button -->
                                    <a href="{{ route('empty') }}" class="btn btn-danger">Empty</a>
                                    <!-- Proceed to checkout button -->
                                    @if(isset($_SESSION["user"]))
                                    <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
            </ul>

        </div>
    </div>
</nav>

</div>

