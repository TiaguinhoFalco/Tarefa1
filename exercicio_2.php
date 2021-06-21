<?php
$count = 0;
$nt = array();
$i = 1;
while($i <= 20){
    $gera = rand(0, 5);
    $nt[$i - 1] = $gera;
    echo($gera ."<br>");
	$i++;
    if($gera == 3){
        $count++;
    }
}
echo("número de 3 é: ".$count);
?>