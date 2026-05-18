<h1>
    <?= "Esto es una prueba";  //esto es una forma de mostrar por salida de manera abreviada?> 
</h1>

<h2>
    <?php
    $numero = 50; // sacar nuemros primos del 1 al 50

    echo "<h3>Sacar los números primos </h3>";
    echo "</br>";


    for ($i = 2; $i <= $numero; $i++) {
        //se empieza en 2
        $esPrimo=true;

        //raiz cuadrada de i
        for($j=2; $j=sqrt($i); $j++){
            if()

        }
    
        echo "</br>";
    }

    //repasar el html para recordar como se podria alinear izq/der, dividir el color
    //se podría cambiar la tipografia del php? 
?>
</h2>


<style>
    :root{
        color-scheme: red;
    }

    body{
        display: grid;
        place-content: center;
    }

</style>