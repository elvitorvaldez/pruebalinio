<?php
for ($a=1; $a<=100; $a++)
{
	$texto="";
	$uno=$a%3;
	$dos=$a%5;

	switch ($a) {
		case $a%3==0:
			$texto .= "Linio";
			break;
		
		case $a%5==0:
			$texto.= " TO";
			break;
	}

	if ($uno==0 && $dos==0)
	{
		$texto= " Linianos";
	}
	echo $a." $texto <br>";
}
?>