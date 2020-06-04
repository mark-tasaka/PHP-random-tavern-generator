<!DOCTYPE html>
<html>
<head>
<title>Tavern Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Dungeon Crawl Classics tavern Character Generator. Goodman Games.">
	<meta name="keywords" content="Dungeon Crawl Classics, Goodman Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2020">
    
    <link rel="icon" href="../../../images/favicon/icon.png" type="image/png" sizes="16x16"> 
		
	<link rel="stylesheet" type="text/css" href="css/tavern.css">
    
</head>
<body>
<?php

include 'php/tavernName.php';
include 'php/tavernImage.php';
include 'php/tavernDescription.php';
include 'php/randomNames.php';
include 'php/gender.php';
include 'php/species.php';



if(isset($_POST["theRuleSet"]))
{
    $ruleSet = $_POST["theRuleSet"];

}

$tavernImage = getTavernImage();

$tavernName = getTavernName();

$storeys = storeys();
$outerWalls = buildingConstruct();
$theFloor = floorDescr();
$theRoof = roofDesc();
$innerDescr1 = roomDescr1();
$innerDescr2 = roomDescr2();
$tavernStoreys = tavernStorey($storeys);
$acoommadations1 = accommodationDescr1();
$acoommadations2 = accommodationDescr2();

$innkeeperGender = getRandomSex1();
$innkeeperSpecies = getSpecies();
$innkeeperName = getFirstName ($innkeeperGender, $innkeeperSpecies) . ' ' . getSurnameName ($innkeeperSpecies);



?>

<span id="tavernName">
           <?php
           echo $tavernName;
           ?>
       </span>
       
<span id="tavernDescription">
           <?php
           echo $tavernName . ' is a ' . $storeys . ' ' . $outerWalls . ', with ' . $theFloor . ' and ' . $theRoof . '. ' . $innerDescr1 . ' and ' . $innerDescr2;
           echo 'The accommodations on the ' . $tavernStoreys . ' consists of ' . $acoommadations1 . $acoommadations2;
           echo '<br/><br/><span class="bold">Innkeeper: </span>' . $innkeeperName . " (" . $innkeeperSpecies . ' ' . $innkeeperGender . ')';
           ?>
       </span>
       


<img src='<?php echo $tavernImage ?>' id="tavernBackground">


</body>
</html>