<?php

$servername = "localhost"; //ip ou dominio do server
$username = "root"; //usuario no banco de dados 
@password = ""; //senha do usúario no banco de dados 
$dbname = "faculdade";

//criar conexão com o banco 
$conn = new mysqli($servername,$username,@password,$dbname );

//verificar conexão
if($conn ->connect_error){
    die("conexão falhou") ; 
}

?>