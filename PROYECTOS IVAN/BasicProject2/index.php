<h1>
    <?= "Esto es una prueba";  //esto es una forma de mostrar por salida de manera abreviada?> 
</h1>

<h2>
    <?php

        $variable =  2;
        $output = "La variable es ";

        if($variable == 20){
            echo $output . $variable;
        }else{
            echo $output.="diferente de 20"; // El .= es una forma de concatenar cambiado la propia variable
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
