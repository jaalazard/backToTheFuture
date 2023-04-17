<?php

$presentTime = new DateTime;
echo "Départ prévu le : " . $presentTime->format('M d Y H:i') . ".<br>";

$arrival = '2024-01-01 10:30:00';
$destinationTime = new DateTime();
$destinationTime -> setDate(2024, 01, 01);
$destinationTime -> setTime (8, 30, 00);
echo "Arrivée prévu le : " . $destinationTime->format('M d Y H:i') . ".<br>";

$interval = $presentTime->diff($destinationTime);
echo "L'arrivée est donc prévue dans " . $interval->format('%Y année %m mois %d jours %H heures, et %i minutes');

