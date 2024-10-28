<?php
$severname="localhost";
$username="vinicius";
$password="senac@2024";
$dbname="contato";

$conn=new mysqli($severname,$username,$password,$dbname);
if($conn->connect_error){
    die("Falha na conexão".$conn->connect_error);
}

echo"Conectado com sucesso";


?>