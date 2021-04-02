<?php

/**
 * Gestion de l'affichage des CGU
 *
 * PHP Version 7
 *
 * @category  B13
 * @package   ChocolateIn
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2020 José GIL
 * @license   José GIL
 * @version   GIT: <0>
 * @link      https://chocolatein.gil83.fr Contexte « Chocolate'In »
 */
$recherche = filter_input(Input_get,'recherche',FILTER_SANITIZE_STRING);

$ProduitRecherche = $pdo->getLesProduitsRechercher($recherche);
include 'vues/v_listeProduits.php';


