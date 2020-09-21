<?php
    $a1=array(1,9,15,7,5);
    $a2=array(4,3,20,8,6);
    $numbers=array_merge($a1,$a2);
    rsort($numbers);
    echo "SORTED MERGED LIST : ";
	$arrlength = count($numbers); 
    for($x = 0; $x < $arrlength; $x++) { 
    echo $numbers[$x]." "; 
} 
?>