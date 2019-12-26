@extends("navBar")

<section id="registro" style="margin: 12%">
    <form id="formularioRegistro" action="/newProduct" method="POST">
        @csrf
        <p class="rellenoFormulario"><label>Nombre:</label><input class="form-control" type="text" name="name" id="productName" required></p>
        <p class="rellenoFormulario"><label>Descripción:</label><input class="form-control" type="text" name="description"  id="productDescription" required></p>
        <p class="rellenoFormulario"><label>Precio:</label><input class="form-control" type="number" min="0" step="0.01" name="price" id="price" required></p>
        <p class="rellenoFormulario"><label>Stock:</label><input class="form-control" type="number" min="0" name="stock" id="stock" required></p>
        <p class="rellenoFormulario"><label>Image URL1:</label><input class="form-control" type="text"  name="imageUrl" id="imageUrl" required></p>
        <p class="rellenoFormulario"><label>Image URL2:</label><input class="form-control" type="text"  name="imageUrl2" id="imageUrl2" required></p>
        <p class="rellenoFormulario"><label>Image URL3:</label><input class="form-control" type="text"  name="imageUrl3" id="imageUrl3" required></p>
        <p class="rellenoFormulario"><label>Procesador:</label><input class="form-control" type="text"  name="processor" id="processor" required></p>
        <p class="rellenoFormulario"><label>Tarjeta gráfica:</label><input class="form-control" type="text"  name="graphic" id="graphic" required></p>
        <p class="rellenoFormulario"><label>RAM:</label><input class="form-control" type="text"  name="RAM" id="RAM" required></p>
        <p class="rellenoFormulario"><label>Placa base:</label><input class="form-control" type="text"  name="motherboard" id="motherboard" required></p>


        <div class="text-center" id="botones">
            <a href= "/admin"><button class="btn btn-dark" type="button" id="botonCancelar">Cancelar</button></a>
            <a><button class="btn btn-primary" type="submit" id="botonAdd">Añadir</button><a>
        </div>

    </form>

</section>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
