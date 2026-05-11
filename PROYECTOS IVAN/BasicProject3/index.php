
<?php  
/*
const NUMERO =2; //constante local
define("LOGO_URL",'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1280px-PHP-logo.svg.png'); //constante global
*/

$lenguaje="PHP";

$logo = match($lenguaje){

    "Java" => 'https://upload.wikimedia.org/wikipedia/en/thumb/3/30/Java_programming_language_logo.svg/960px-Java_programming_language_logo.svg.png',
    
    "PHP" => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1280px-PHP-logo.svg.png',
    
    "Python" => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Python_logo_and_wordmark.svg/3840px-Python_logo_and_wordmark.svg.png',
    
    default => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1280px-PHP-logo.svg.png'
}



?>


<!DOCTYPE html>
<html>
<head>
    <style>
        :root{
            color-scheme: light dark;
        }

        body{
            display: grid;
            place-content: center;
            min-height: 100vh;
        }
    </style>
</head>
<body>

    <img src="<?= $logo ?>" alt=logo width="200">

    <h1>
        <?php

        $nombre="Carlos";
        $edad=28;
        $precio=49.99;
        const CIUDAD = "Budapest";

        echo "Me llamo $nombre tengo $edad años soy de " .CIUDAD ." y el producto
            cuesta $precio" . "<br/>"; 
        var_dump($nombre);

        ?>
    </h1>

</body>
</html>
