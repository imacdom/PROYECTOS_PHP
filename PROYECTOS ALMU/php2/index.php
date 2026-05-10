<h1>
    <?= "Esto es una prueba";  //esto es una forma de mostrar por salida de manera abreviada?> 
</h1>

<h2>
    <?php
    $numero = 15;
    $referencia = 10;

    if ($numero > $referencia) 
        {
            echo "El número $numero es mayor que $referencia.";
        } elseif ($numero < $referencia) 
        {
            echo "El número $numero es menor que $referencia.";
        } else 
        {
            echo "Ambos números son iguales.";
        }
?>
</h2>


<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }

</style>
