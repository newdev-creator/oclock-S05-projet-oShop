<?php 

require __DIR__ . '/classes/Animal.php';
require __DIR__ . '/classes/Chien.php';
require __DIR__ . '/classes/EpagneulBreton.php';
require __DIR__ . '/classes/BorderCollie.php';

echo '--------------------------------------------------'.'<br/>';
echo 'Ton chien (Epagneul Breton)'.'<br/>';
echo '--------------------------------------------------'.'<br/>';
$tonChien = new EpagneulBreton();
var_dump($tonChien);
$tonChien->visMaVie();
var_dump($tonChien);

echo '--------------------------------------------------'.'<br/>';
echo 'Mon vieux chien (Border Collie)'.'<br/>';
echo '--------------------------------------------------'.'<br/>';
$monVieuxChien = new BorderCollie();
var_dump($monVieuxChien);
$monVieuxChien->visMaVie();
var_dump($monVieuxChien);
