@include("navBar")
<main class="page registration-page " style="background-color: rgb(246,246,246);">
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
