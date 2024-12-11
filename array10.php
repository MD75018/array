<?php
$notes = [14, 12, 16, 18, 10, 7, 15];
$moyenne = array_sum($notes) / count($notes);
echo 'La moyenne est : '  .$moyenne. ' sur 20 !'."\n";
$admis = 0;
foreach ($notes as $note ) {
    if ($note >= 10) {
        $admis++;
    }
}
echo 'Le nombre de passage : ' .$admis. "\n";



?>