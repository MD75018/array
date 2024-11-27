<?php

$etudiants = [
    ["nom" => "Alice", "age" => 21, "note" => 15],
    ["nom" => "Bob", "age" => 22, "note" => 12],
    ["nom" => "Charlie", "age" => 23, "note" => 17]
];

foreach ($etudiants as $key => $value) {
echo  "Nom : ".$value ["nom"]  . ", Age : ".$value["age"] ." , Note : " .$value["note"] . "\n";   
}

?>