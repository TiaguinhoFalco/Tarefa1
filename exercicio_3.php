<?php
$gera = array();
$pos = 0;
$mn = array("numero" => 11, "posicao" => 0);
for($i = 0; $i <5; $i++){
    $gera[$i] = rand(0,10);
}
foreach($gera as $a){
    if($a < $mn["numero"]){
        $mn["numero"] = $a;
        $mn["posicao"] = $pos;
    }
	echo($a."<br>");
    $pos++;
}
echo ($mn["numero"] ."  ". $mn["posicao"]);
?>