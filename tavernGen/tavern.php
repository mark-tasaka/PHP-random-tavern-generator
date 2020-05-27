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

$background = 0;
$tavernImageFront = getTavernTop($background);



?>

<img src= "images/tavern1.png" id="tavernBackground">

<img src='<?php echo $tavernImageFront ?>' id="tavernTop">

<!--
<img id="tavernBackground"/>

<script>
    
    let imgData = "images/tavern1.png";
      
      $("#tavernBackground").attr("src", imgData);

</script>-->

</body>
</html>