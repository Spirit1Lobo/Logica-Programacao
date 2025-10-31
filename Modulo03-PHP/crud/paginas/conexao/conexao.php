<?php

$servername = "localhost"; //ip ou dominio do server
$username = "root"; //usuario no banco de dados 
@password = ""; //senha do usúario no banco de dados 
$database = "crud";

//criar conexão com o banco 
$conn = new mysqli($servername,$username,@password,$database );

//verificar conexão
if($conn ->connect_error){
    die("conexão falhou" . $conn->connect_error) ; 
}

?>