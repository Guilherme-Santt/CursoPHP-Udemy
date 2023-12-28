<?php 
$notasalunos = array (4,5,6,7,4,3,6,2,8,8,5,4,3,5,7,8,);

foreach($notasalunos as $notas){
    if($notas >= 6){
        echo "<p> Aprovado!</p>";
    }else{
        echo "<p>Reprovado</p>";
    };
}

?>