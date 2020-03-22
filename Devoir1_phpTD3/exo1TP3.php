//Binome: ABDESLAMI ZAYNA
        //HMAIDDOUCH NADA

<html>

<head>

</head>

<body>

    <h1><center>Délice Des Fruits & Légumes</center></h1>
    
	<?php


$tab = array("A.png","BB.png","CC.png","D.png","E.png" ) ;
			
			shuffle($tab);
    
	for($i = 0;$i<count($tab);$i++)
{
    
	?>
    
	<img src=<?php echo ($tab[$i]) ;?>> <?php

}
	?>

</body>

</html>
