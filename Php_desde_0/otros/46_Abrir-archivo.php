<?php 
  $archivo = "../include/46_Abrir-archivo-php.txt";
  $archivoAbierto = fopen($archivo,"r");
  $contenido = fread($archivoAbierto,filesize($archivo));
  echo $contenido;
?>