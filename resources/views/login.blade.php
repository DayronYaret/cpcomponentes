@extends("navBar")

    <main class="page login-page" style="background-color: rgb(246,246,246); margin-top: 10%">
        <section class="clean-block clean-form dark">
            <div class="container">
                <form id="login-form" method="post" action="/login">
                    @csrf
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" name="email"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control" type="password" name="password"></div>
                    <div class="form-group">
                    </div><button class="btn btn-primary btn-block" type="submit">Log In</button></form>
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
