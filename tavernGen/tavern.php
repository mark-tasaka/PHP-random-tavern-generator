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

$tavernImage = getTavernImage();

$tavernName = getTavernName();

$storeys = storeys();
$outerWalls = buildingConstruct();
$theFloor = floorDescr();
$theRoof = roofDesc();
$innerDescr1 = roomDescr1();
$innerDescr2 = roomDescr2();



?>

<span id="tavernName">
           <?php
           echo $tavernName;
           ?>
       </span>
       
<span id="tavernDescription">
           <?php
           echo $tavernName . ' is a ' . $storeys . ' ' . $outerWalls . ', with ' . $theFloor . ' and ' . $theRoof . '. ' . $innerDescr1 . ' and ' . $innerDescr2;
           ?>
       </span>
       


<img src='<?php echo $tavernImage ?>' id="tavernBackground">


</body>
</html>