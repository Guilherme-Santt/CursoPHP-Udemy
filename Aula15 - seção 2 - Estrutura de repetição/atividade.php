<?php 
$notasalunos = array (4,5,6,7,4,3,6,2,8,8,5,4,3,5,7,8,);
$aprovados = 0;
$reprovados = 0;
foreach($notasalunos as $notas){
    if($notas >= 6){
        echo "<p> Aprovado!</p>";
        $aprovados = $aprovados +1;
    }else{
        echo "<p>Reprovado</p>";
        $reprovados += 1;
    };
}
echo "<p>Numero de aprovados: " . $aprovados . "<br>numero de reprovados: " . $reprovados . "</p>";


?>