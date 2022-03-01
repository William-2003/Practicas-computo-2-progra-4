<?php
   /*  $nombre = "Seleccione entre Ingles y Español";  */ /* declaracion de una variable (no se define el tipo de variable) */
   /*  echo "<h1>Seleccion de idiomas</h1>" . $nombre; */ /* IMPRIMIR EN PANTALLA y concatenacion de variables */


    /* evaluar si esta enviando la accion del boton */

    if(isset($_POST['seleccion'])){ /* evalua si se presiona el boton */
        echo "Click sobre el boton";
        $idioma = $_POST['idioma'];
        include $idioma . ".php"; /* incluir archivos php dentro de un php */
    }else{
        echo "No se ha enviado el click";
        INCLUDE "es.php"; /* LLAMAR EL ARCHIVO DEL IDIOMA DEFAULT */
    }
?>

<!-- inclusion de lenguaje HTML -->
<html>
    <head>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <h1><?php echo TITLE; ?></h1>
        </nav>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <form method="POST">
            <br>    
            <select name="idioma">
                <option value="es">Español</option>
                <option value="en">Ingles</option>
            </select>
            <input type="submit" name="seleccion" value="cambiar" />
        </form>
        <h1><?php echo TITLE; ?></h1> <!-- INCLUSION DE PHP CON HTML PARA LLAMAR A LOS OTROS DOCS.PHP -->
        <h2><?php echo HEADING_TITLE; ?></h2>
        <h2><?php echo OVERVIEW; ?></h2>
    </body>
</html>

