@extends('navBar')
<section id="registro" style="margin: 12%">
    <form id="formularioEditar" action="/updateProduct" method="POST">
        @csrf
        <p class="rellenoFormulario"><label>Nombre:</label><input class="form-control" type="text"  name="name" id="name" required value="<?php echo $product->name ?>"></p>
        <p class="rellenoFormulario"><label>Descripción:</label><textarea class="form-control" type="text" name="description"  id="productDescription" required><?php echo $product->description ?></textarea></p>
        <p class="rellenoFormulario"><label>Precio:</label><input class="form-control" type="number" min="0" step="0.01" name="price" id="price" required value="<?php echo $product->price ?>"></p>
        <p class="rellenoFormulario"><label>Stock:</label><input class="form-control" type="number" min="0" name="stock" id="stock" required value="<?php echo $product->stock ?>"></p>
        <p class="rellenoFormulario"><label>Image URL1:</label><input class="form-control" type="text"  name="imageUrl" id="imageUrl" required value="<?php echo $product->imageUrl ?>"></p>
        <p class="rellenoFormulario"><label>Image URL2:</label><input class="form-control" type="text"  name="imageUrl2" id="imageUrl2" required value="<?php echo $product->imageUrl2 ?>"></p>
        <p class="rellenoFormulario"><label>Image URL3:</label><input class="form-control" type="text"  name="imageUrl3" id="imageUrl3" required value="<?php echo $product->imageUrl3 ?>"></p>
        <p class="rellenoFormulario"><label>Procesador:</label><input class="form-control" type="text"  name="processor" id="processor" required value="<?php echo $product->processor ?>"></p>
        <p class="rellenoFormulario"><label>Tarjeta gráfica:</label><input class="form-control" type="text"  name="graphic" id="graphic" required value="<?php echo $product->graphic ?>"></p>
        <p class="rellenoFormulario"><label>RAM:</label><input class="form-control" type="text"  name="RAM" id="RAM" required value="<?php echo $product->RAM ?>"></p>
        <p class="rellenoFormulario"><label>Placa base:</label><input class="form-control" type="text"  name="motherboard" id="motherboard" required value="<?php echo $product->motherboard ?>"></p>
        <input type="hidden" name="id" value="<?php echo $product->id?>">


        <div class="text-center" id="botones">
            <a href= "/productsAdmin"><button class="btn btn-dark" type="button" id="botonCancelar">Cancelar</button></a>
            <a><button class="btn btn-primary" type="submit" id="botonAdd">Editar</button><a>
        </div>

    </form>

</section>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
