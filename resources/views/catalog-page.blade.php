@extends("navBar")

    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark" style="margin-top: 10%;">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-9">
                            <div class="products">
                                <div class="row no-gutters">
                                    <?php foreach ($products as $product){?>
                                        <div class="col-12 col-md-6 col-lg-4">

                                            <div class="clean-product-item">
                                                <div class="image"><img class="img-fluid d-block mx-auto" src="<?php echo $product->imageUrl ?>"></div>
                                                <div class="product-name"><?php echo $product->name ?></div>
                                                <div class="about">
                                                    <div class="price">
                                                        <h3><?php echo $product->price ?>$</h3>

                                                    </div>

                                                </div>
                                                <p>Quedan <b><?php echo $product->stock ?></b> unidades</p>
                                                <form action="/product">
                                                    <input type="hidden" name="id" value="<?php echo $product->id?>">
                                                    <button class="btn btn-primary" type="submit">Ver producto</button>
                                                </form>

                                            </div>
                                        </div>

                                    <?php
                                    }?>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
