<?php
 $usuario=$_POST["usuario"];
 $acceso=$_POST["acceso"];

 if($usuario=='root' && $acceso=='1234'){
    echo "BIENVENIDO";}

 else echo "ERROR DE USUARIO";

?>