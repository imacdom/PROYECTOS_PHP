<h1>
    <?= "Esto es una prueba";  //esto es una forma de mostrar por salida de manera abreviada?> 
</h1>

<h2>
    <?php
    $numero = 5; // Cambia este valor por el que quieras calcular

    echo "<h3>Tabla de multiplicar del $numero</h3>";
    echo "</br>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado";
        echo "</br>";
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
