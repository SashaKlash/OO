<?php
require_once 'Personnage.class.php';

$sasha = new Personnages();
echo "<br>";
echo "<hr>";
echo var_dump($sasha->getNom());
echo "<hr>";
// le setter change la valeur
$sasha->setNom('SashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSashaSasha');
// le getter la récupère;
echo $sasha->getNom();

echo "<hr>";
$sasha->setForcePerso(250);
echo $sasha->getForcePerso();

echo '<hr>';
$sasha->setDegat(1.5);
echo $sasha->getDegat();
