<?php 
$macam2 = array(121,"joko",44.99,"belajar php"); 
$macam2[] = "duniailkom";

unset($macam2[0]);
unset($macam2[2]);
unset($macam2[3]);

echo "<pre>";
var_dump($macam2);
echo"</pre>";

?>