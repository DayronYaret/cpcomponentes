@extends("navBar")
    <main class="page contact-us-page NoScroll" style="background-color: rgb(246,246,246);">
        <section class="clean-block clean-form dark">
            <div class="container">
                <form id="contact-form" method="post" action="/suggestion">
                    @csrf
                    <div class="form-group"><label>Nombre</label><input class="form-control" type="text" name="name"></div>
                    <div class="form-group"><label>Asunto</label><input class="form-control" type="text" name="subject"></div>
                    <div class="form-group"><label>Email</label><input class="form-control" type="email" name="email"></div>
                    <div class="form-group"><label>Mensaje</label><textarea class="form-control" name="message"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send</button></div>
                </form>
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
