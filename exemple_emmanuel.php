<!DOCTYPE html>
<html>
<head>
	<title> Formulaire quel age </title>
</head>

<body>

<?php

$tab =array( 10, 15, 30, 6, 1 );

function maximum ($tableau)
{ 
		$maximumTemporaire=$tableau[0];

		foreach($tableau as $elem)
		{
			if($elem > $maximumTemporaire)
			{  
    		   $maximumTemporaire=$elem;
    		{
        }
        return $maximumTemporaire;
	    
}
maximum($tab);

?>
</body>
</html>