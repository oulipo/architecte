<?php

require_once "vendor/autoload.php";

use Ecv\Architecture\Logiciel;
use Ecv\Architecture\Cercle;
use Ecv\Architecture\Carre;
use Ecv\Architecture\Rectangle;

$plan = new Logiciel();
$plan->ajouter(new Cercle(3));
$plan->ajouter(new Carre(4));
$plan->ajouter(new Rectangle(5,6));

echo "Ces trois figures ont une surface totale de " . $plan->surfaceTotale();
echo "\n";
echo "Ces trois figures ont un périmètre total de " . $plan->perimetreTotal();