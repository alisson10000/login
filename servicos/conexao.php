<?php
$host="localhost";
$user="root";
$password="";
$db="sistemacadastro";

$con = mysqli_connect($host,$user,$password,$db);

if(!$con){
    echo "Sem conexão";
}


?>