<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fechas</title>
    </head>
    <body>
        <?php
        echo date("j");
        //$numero%4
        if (date("j")%2==0){
            echo "El dia es par";
        }
        else {
            echo " El dia es impar";
        }
        ?>
    </body>
</html>