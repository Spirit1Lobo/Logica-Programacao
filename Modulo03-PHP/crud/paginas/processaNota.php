<?php
$nomes = ["Caio", "Marcos", "Diego"];

foreach ($nomes as $nome) {
    echo $nome . "<br>";
}

//Percorrer Array Associativo
$notasAtividades = [
    "Caio" => 10,
    "Marcos" => 8, 
    "Diego" => 7
];

foreach ($notasAtividades as $nome => $nota) {
    echo $nome . "nota" . $nota . "<br>";
}
?>