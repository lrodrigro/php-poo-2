<?php

require_once ('Truck.php');

$truck = new Truck(1000, 'Rouge', 5, 'Gasoil');

echo "<br>" . $truck->forward();
echo "<br> Vitesse du camion : " . $truck->getCurrentSpeed() . " km/h <br>";
echo $truck->brake();
echo "<br> Vitesse du camion : " . $truck->getCurrentSpeed() . " km/h <br>";
echo $truck->brake() . "<br>";
echo "<br>";
echo "La charge du camion est '" . $truck->setLoad(900) . "'";



