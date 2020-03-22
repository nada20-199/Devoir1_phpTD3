<html>

<head>
</head>

<body>

    <h1>Centrale d'achats</h1>
    <h2>Commande clients</h2>

    <?php 
    $tab= file("fich.txt");
    //echo count($tab);
    for($i = 0; $i<count($tab);$i++)
    {
      $a = explode("|",$tab[$i]);
        print_r ($a);
    }
    
    ?>

    <table border="red 2px solid">
        <th>Numéro de commmandes</th>
        <th>Numéro Clients</th>
        <th>Date de commandes</th>
        <th>Designation</th>
        <th>Quantité(Pal)</th>
        <th>Prix unitaires(Dh)</th>
    <?php 
    $tab= file("fich.txt");
    //echo count($tab);
    for($i = 0; $i<count($tab);$i++)
    { echo "<tr>";
      $a = explode("|",$tab[$i]);
        print_r ($a);
     for($j=0;$j<count($a);$j++)
     {
         echo "<td>";
         echo $a[$j];
         echo "</td>";
     }
     echo "</tr>";
    }
    
    ?>
    </table>
    <?php

?>
</body>

</html>
