@include("navBar")



<section id="seccionFrontEndUser">
    <div id="listadoCanales">

        <header id="cabeceraCanales" >
            <h4>Listado de todas las sugerencias</h4>
        </header>
        <?php
        foreach ($products as $product){
        ?>
        <article id=\"canal1\" style="border: solid;border-radius: 5px; padding: 10px">
            <h5>Informacion sobre el producto <b><?php echo $product->name; ?></b></h5>
            <p>Precio del producto:<b><?php echo $product->price; ?></b> </p>
            <p>Stock: <b><?php echo $product->stock; ?></b> </p>
            <p>Url de la imagen 1: <b><?php echo $product->imageUrl; ?></b> </p>
            <p>Url de la imagen 2: <b><?php echo $product->imageUrl2; ?></b> </p>
            <p>Url de la imagen 3: <b><?php echo $product->imageUrl3; ?></b> </p>
            <p>Procesador: <b><?php echo $product->processor; ?></b> </p>
            <p>RAM: <b><?php echo $product->RAM; ?></b> </p>
            <p>Tarjeta gráfica: <b><?php echo $product->graphic; ?></b> </p>
            <p>Placa base: <b><?php echo $product->motherboard; ?></b> </p>
            <p>Descripción del producto: <b><?php echo $product->description; ?></b> </p>
            <form action="/editProduct" style="display:inline;">
                <input type="hidden" name="id" value="<?php echo $product->id?>">
                <button class="btn btn-info" type="submit">Editar</button>
            </form>
            <form action="/productsAdmin/<?php echo $product->id?>" style="display:inline;">
                <button class="btn btn-danger" type="submit">Eliminar producto</button>
            </form>


        </article>
        <?php }?>
    </div>
</section>
</body>

</html>
