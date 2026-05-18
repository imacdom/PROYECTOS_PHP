<?php
  $my_String="Cadena de texto";
  echo $my_String . "\n";

  //variables dinamicas, cambian con la asignación 
  $my_String=6; 
  echo gettype ($my_String);

 //problemas al operar con diferentes variables, pero int y float se lo come
 
 $my_int=7;
 $my_float=4.5;
 $muy_int =$my_int + $my_float;

 echo $my_int. "\n";
 echo gettype($my_float). "\n";

?>