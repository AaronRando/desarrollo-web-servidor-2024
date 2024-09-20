<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros</title>
</head>
<body>
    <?php
    $numero=0;
    /*
    if ($numero>0){
        echo "<p>El numero es positivo</p>";
    }
    if ($numero>0) echo "<p>El numero es positivo</p>";
    if ($numero>0):
        echo "<p>El numero es positivo</p>";
    endif;
    
    if ($numero>0){
        echo "<p>El numero es positivo</p>";
    }
    else {
        echo "<p>El numero no es positivo</p>";
    }
    if ($numero>0) echo "<p>El numero es positivo</p>";
    else echo "<p>El numero no es positivo</p>";
    if ($numero>0):
        echo "<p>El numero es positivo</p>";
    else:
        echo "<p>El numero no es positivo</p>";
    endif;
    
    if ($numero>0){
        echo "<p>El numero es positivo</p>";
    }
    elseif ($numero==0){
        echo "<p>El numero es cero</p>";
    }
    else {
        echo "<p>El numero no es positivo</p>";
    }
    if ($numero>0) echo "<p>El numero es positivo</p>";
    elseif ($numero==0) echo "<p>El numero es cero</p>";
    else echo "<p>El numero no es positivo</p>";
    if ($numero>0):
        echo "<p>El numero es positivo</p>";
    elseif ($numero==0):
        echo "<p>El numero es cero</p>";
    else:
        echo "<p>El numero no es positivo</p>";
    endif;
    */

    /*
    $numero=3;
    #Rango [-10,0),[0,10],(10,20]
    if ($numero>=-10 && $numero<0) {
        echo "El numero $numero está en el rango [-10,0)";
    }
    elseif ($numero>=0 and $numero <=10) {
        echo "El numero $numero está en el rango [0,10]";
    }
    elseif ($numero>10 and $numero <=20) {
        echo "El numero $numero está en el rango (10,20]";
    }
    else {
        echo "El numero $numero no esta en rango";
    }

    if ($numero>=-10 && $numero<0):
        echo "El numero $numero está en el rango [-10,0)";
    elseif ($numero>=0 and $numero <=10):
        echo "El numero $numero está en el rango [0,10]";
    elseif ($numero>10 and $numero <=20):
        echo "El numero $numero está en el rango (10,20]";
    else:
        echo "El numero $numero no esta en rango";
    endif;
    */

    $numero1=3;
    $numero2=4;
    if ($numero1<$numero2){
        echo "$numero1 es mayor que $numero2";
    }
    elseif ($numero2<$numero1){
        echo "$numero1 es mayor que $numero2";
    }
    else {
        echo "Los numeros son iguales";
    }

    if ($numero1<$numero2):
        echo "$numero1 es mayor que $numero2";
    elseif ($numero2<$numero1):
        echo "$numero1 es mayor que $numero2";
    else:
        echo "Los numeros son iguales";
    endif;

    ?>
</body>
</html>