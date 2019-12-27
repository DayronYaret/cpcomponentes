@extends('navbar')



<section id="seccionFrontEndUser" style="margin-top: 7%">
    <div id="listadoCanales">
        <?php
        foreach ($suggestions as $suggestion){
        ?>
        <header id="cabeceraCanales" >
            <h4>Listado de todas las sugerencias</h4>
        </header>
        <article id=\"canal1\" style="border: solid;border-radius: 5px; padding: 10px">
            <h5>Informacion sobre la sugerencia de <b><?php echo $suggestion->name; ?></b></h5>
            <p>Correo del usuario:<b><?php echo $suggestion->email; ?></b> </p>
            <p>Tema de la sugerencia: <b><?php echo $suggestion->subject; ?></b> </p>
            <p>Sugerencia: <b><?php echo $suggestion->subject; ?></b> </p>
            </article>
        <?php }?>
    </div>
</section>
</body>

</html>
