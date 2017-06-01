<?php
require_once dirname(__FILE__) . '/Instrument.php';
require_once dirname(__FILE__) . '/Inventory.php';

$inventory = new Inventory;

$inventory->addGuitar("V95693", 1499.95,  "Fender", "Stratocaster", "elektryczna", "olcha", "olcha", "12");
$inventory->addGuitar("V95612", 1549.95, "Fender", "Stratocaster", "elektryczna", "olcha", "olcha", "12");
$inventory->addGuitar("V95612", 1779.95, "Fender", "Stratocaster", "akustyczna", "olcha", "olcha", "12");

$item = $inventory->getGuitar("V95612");

$whatEvaLikes = new GuitarSpec('fender', 'stratocaster', 'Elektryczna', 'Olcha', 'olcha', "12");
//var_dump($whatEvaLikes);
$findForEva = $inventory->search($whatEvaLikes);
//var_dump($findForEva);

if($findForEva != null)
{
    foreach ($findForEva as $item) {
        $spec = $item->getSpec();
        echo 'Ewo może spodoba Ci się gitara: ' . "\n" . $spec->getBuilder();
        echo ' model ' . $spec->getModel();
        echo ' ';
        echo $spec->getType();
        echo "\n";
        echo $spec->getBackWood();
        echo ' - tył i boki,' . "\n";
        echo $spec->getTopWood();
        echo ' - góra.' . "\n" . 'Możesz ją mieć  za ';
        echo $item->getPrice();
        echo ' PLN!' . "\n\n";
    }
}else{
    echo 'Przykro nam Ewo, nie znaleźliśmy nic dla Ciebie' . "\n";
}
//var_dump($inventory);
//var_dump($item);
//var_dump($findForEva);