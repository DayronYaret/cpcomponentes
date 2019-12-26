@extends("navBar")

<section id="registro" style="margin: 7%">
    <form id="formularioRegistro" action="/newProduct" method="POST">
        @csrf
        <p class="rellenoFormulario"><label>Nombre:</label><input class="form-control" type="text" name="name" id="productName" required></p>
        <p class="rellenoFormulario"><label>Descripción:</label><input class="form-control" type="text" name="description"  id="productDescription" required></p>
        <p class="rellenoFormulario"><label>Precio:</label><input class="form-control" type="number" min="0" step="0.01" name="price" id="price" required></p>
        <p class="rellenoFormulario"><label>Stock:</label><input class="form-control" type="number" min="0" name="stock" id="stock" required></p>

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
