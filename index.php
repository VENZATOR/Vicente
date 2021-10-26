<?php 
$car = "b";
$cad = "la vida es muy bonita y agradable";
echo("numero de -$car- dentro de -$cad-: ");
echo(substr_count($cad,$car));
?>
<br>
<?php
echo("numero de espacio dentro de -$cad-: ");
echo(substr_count($cad," "));
?> 