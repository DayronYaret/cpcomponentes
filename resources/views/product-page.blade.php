@include("navBar")
    <main class="page product-page">
        <section id="product-container" class="clean-block clean-product dark">
            <div class="container">
                <div class="block-content">
                    <div class="product-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gallery">
                                    <div class="sp-wrap"><a href="<?php echo $product->imageUrl?>"><img class="img-fluid d-block mx-auto" src="<?php echo $product->imageUrl?>"></a><a href="<?php echo $product->imageUrl2?>"><img class="img-fluid d-block mx-auto" src="<?php echo $product->imageUrl2?>"></a><a href="<?php echo $product->imageUrl3?>"><img class="img-fluid d-block mx-auto" src="<?php echo $product->imageUrl3?>"></a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info">
                                    <h3><?php echo $product->name?></h3>
                                    <div class="price">
                                        <h3><?php echo $product->price?>$</h3>
                                    </div> <a href="{{ route('add', [ $product->getRouteKey() ]) }}">
                                        <!-- The button for adding the product to the cart -->
                                        <button class="btn btn-primary">Add to cart</button>
                                    </a>
                                    <div class="summary">
                                        <p><?php echo $product->description?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div>
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" id="description-tab" href="#description">Description</a></li>
                                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" id="specifications-tabs" href="#specifications">Specifications</a></li>
                                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" id="reviews-tab" href="#reviews">Reviews</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane active fade show description" role="tabpanel" id="description">
                                    <p><?php echo $product->description?></p>


                                </div>
                                <div class="tab-pane fade show specifications" role="tabpanel" id="specifications">
                                    <div class="table-responsive table-bordered">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="stat">Procesador</td>
                                                    <td><?php echo $product->processor?></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat">Tarjeta gráfica</td>
                                                    <td><?php echo $product->graphic?></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat">RAM</td>
                                                    <td><?php echo $product->RAM?></td>
                                                </tr>
                                                <tr>
                                                    <td class="stat">Placa base</td>
                                                    <td><?php echo $product->motherboard?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="reviews">
                                    <div class="reviews">
                                        <div class="review-item">
                                            <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-empty.svg"></div>
                                            <h4>Incredible product</h4><span class="text-muted"><a href="#">John Smith</a>, 20 Jan 2018</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="reviews">
                                        <div class="review-item">
                                            <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-empty.svg"></div>
                                            <h4>Incredible product</h4><span class="text-muted"><a href="#">John Smith</a>, 20 Jan 2018</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="reviews">
                                        <div class="review-item">
                                            <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-empty.svg"></div>
                                            <h4>Incredible product</h4><span class="text-muted"><a href="#">John Smith</a>, 20 Jan 2018</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
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
