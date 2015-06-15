<?php

require_once("util/fonctions.inc.php");
require_once("util/class.PdoMystick.inc.php");
 
require_once 'lib/Kendo/Autoload.php';
 
//include("vues/v_panneauGauche.php");
include("vues/v_entete.php") ;

$message = "";
if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];
$pdo = PdoMystick::getPdoMystick();	 
switch($uc)
{
	case 'accueil':
	{
		include("vues/v_result.php") ;	
		break;
	}
	
} 
?>

