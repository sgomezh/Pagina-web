<?php
    include 'conexion.php';


    $maxElem = 4; //maximo de elementos que se muestran en una pagina
    //$pagina = isset($_GET['numeroPagina']) ? $_GET['numeroPagina'] : 1;
    //$start = ($pagina-1) * $maxElem;

    $resutlado = $conexion->query("SELECT * FROM noticia LIMIT $start,$maxElem");

    $noticias = $resutlado->fetch_all(MYSQLI_ASSOC);

    foreach($noticias as $noticia): 


?>  