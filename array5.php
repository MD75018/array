<?php
    $personne = [
        "nom" => "Dupont",
        "prenom" => "Jean",
        "age" => 30,
        "ville" => "Paris"  
    ];
    $personne["ville"] = "Lyon";
foreach ($personne as $key => $value ) {
    echo $key . " : "  . $value.    "\n";
}


?>