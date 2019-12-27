@extends('navbar')



<section id="seccionFrontEndUser" style="margin-top: 7%">
    <div id="listadoCanales">
        <header id="cabeceraCanales" >
            <h4>Listado de todas las sugerencias</h4>
        </header>
        <?php
        foreach ($suggestions as $suggestion){
        ?>
        <article id="canal1" style="border: solid;border-radius: 5px; padding: 10px">
            <h5>Informacion sobre la sugerencia de <b><?php echo $suggestion->name; ?></b></h5>
            <p>Correo del usuario:<b><?php echo $suggestion->email; ?></b> </p>
            <p>Tema de la sugerencia: <b><?php echo $suggestion->subject; ?></b> </p>
            <p>Sugerencia: <b><?php echo $suggestion->subject; ?></b> </p>
            <a href="/suggestion/<?php echo $suggestion->id ?>"><button>Eliminar sugerencia</button></a>
        </article>
        <?php }?>
    </div>
</section>
</body>

</html>
