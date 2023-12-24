<?php 
echo "<BR> EXEMPLO FOR <BR>";

$number1 = 3;
$number2 = 4;
$resultado = 0;
// Definir variável enquanto o looping for rodando ()
for($i = 0; $i < $number2; $i++) {
    $resultado = $resultado + $number1;
}
    echo "O valor da multiplicação é: $resultado"
?>

<?php
echo "<BR> EXEMPLO DO WHILE  <BR>";

// DO = Faça 
// while = enquanto
$k = 0;
do{
    $k++;
    echo "<p> Valor de K vs K:" . $k . "</p>";
}while($k < 10);
echo "<br>" . "Valor de K és: $k"

?>

<?php 
echo "<BR> EXEMPLO ARRAY FOR <BR>";

$nomes = ["João","Gui","Zé","Maria"];

for($k = 0; $k < 4; $k ++){
    echo "<p>" . $nomes[$k] . "</p>";
}
    echo "<BR> EXEMPLO FOREACHE <BR>";
?>

<?php
// Foreache = para cada

foreach( $nomes as $nome){
    echo "<p>" . $nome . "</p>";
};

?>