<?php
   header('Access-Control-Allow-Origin:*');
    
   $host = 'localhost';
   $user = 'root';
   $password = '';
   $db = 'bd_table';

   $conexion = @mysqli_connect($host,$user,$password,$db);

   if(!$conexion){
	   echo"error en la conexion";
	   exit;
   }
    
   function redireccionGoto($x){
	header("location:".$x);
   }


 ?>