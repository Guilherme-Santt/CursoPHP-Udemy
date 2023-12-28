<?php 
// function gerarN($inicio, $fim)
// {
//     $lista = [];
//     if($fim <= $inicio){
//         Echo "não dá para continuar!";
//     }else{
//         $lista = array();
//         for($l = $inicio; $l <= $fim; $l ++){
//             $lista[] = $l;
//         }
//     }
//     return $lista;
// }
// function formatar_preco($np){
//     return "R$ " . number_format($np, 2, ',','.');
// }
// echo "O preço és " . formatar_preco(6000) . "<br>";

// $variavel = gerarN(10, 15);
// foreach($variavel as $item){
//     echo $item . "<br>";
// }


// // Váriavel numero aleatorio
// $n_aleatorio = rand (0, 1000);
//     echo $n_aleatorio . "<br>";

// $preco = 500000;
// $preco = number_format($preco, 2, ',', '.');
// echo "R$ " . $preco;
?>

<?php
// numero elevado vezes ele mesmo
function potencia($n, $p){

    $resultado = $n; //2
    for($k = 1; $k < $p; $k ++){
        //2
        $resultado = $resultado * $n;
    };
    return $resultado;
}

echo potencia(2,3);

?>