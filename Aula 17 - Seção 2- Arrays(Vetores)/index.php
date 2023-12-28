<?php
// ARRAY DENTRO DO ARRAY
$lista = array (1,2,3,4);
$lista [5] = array(1,5,1,1);
$lista [10] = 10;
// DECLARAR ARRAY DENTRO DO ARRAY
echo $lista[5][1];
$Lista2 = [1,2,3,4];
$lista3 = ["a","teste",3,3.25];

// REMOVER ITEM LISTA array_pop
// $rl = array_pop($Lista);
// ADICIONAR ITEM LISTA array_push
// array_push($Lista, 10);

var_dump($lista);
$lista3 = array(
    0 => "teste1",
    1 => "teste2",
    3 => 3.4
);

// foreach($lista as $item){
//     echo "<p>$item</p>";
// };

foreach ($lista3 as $indice => $item){
    echo "indice: ". $indice . "<br> <hr>" . "item: ". $item . "<br>";
}

$lista5 = array();

for($l = 10; $l <= 20; $l ++){
    $lista5[] = $l;
};
var_dump($lista5);
foreach($lista5 as $item){
    echo $item;
};
?>