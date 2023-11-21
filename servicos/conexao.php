<?php

/*
Esse arquivo é utilizado para que o sistema faça a 
 * conexão com obanco de dadeo
 *  */

//A variável host é utiliza para informar o local onde o servidor
//de banco de dados está "rodando"
$host="localhost";

$user="root";

$password="";
$db="sistemacadastro";
//A função 
$con = mysqli_connect($host,$user,$password,$db);

if(!$con){
    echo "Sem conexão";
}


?>