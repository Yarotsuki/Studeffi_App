<?php

include_once('model/compteur.php');

$compteurs = get_all_compteurs();

include_once('view/adminCompteur.php');