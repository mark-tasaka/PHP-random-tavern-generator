<!DOCTYPE html>
<html>
<head>
<title>Launch Page: Tavern Generator</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2020">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="css/githubMCC.css"/> 
	<link rel="stylesheet" href="css/bf_additions.css"/> 
	<link rel="stylesheet" href="css/additions2.css"/> 
	<link rel="stylesheet" href="css/general.css"/> 
	<link rel="stylesheet" href="css/basic_style.css"/> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="images/title.png" alt="Tavern Generator" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>Designed primarily with PHP, the PHP-random-tavern-generator is used to create randomly generated taverns for various Old School Revival (OSR) role-playing systems. These RPG systems includes Dungeon Crawl Classics, White Box RPG, Basic Fantasy RPG and Labyrinth Lord. On the Generator’s Launch Page, the user has options for selecting which role-playing system the randomly generated Tavern is tailored for. The options are sent, via POST requests, and are used as input values for the parameters of the various functions. Whenever possible, separate PHP files have been created, comprised of related functions. This has been done to achieve high cohesion and low coupling, a key principle in object-oriented design.</p>    

        <br/>
        <br/>
            
  

       
		<form action="" id ="TavernForm"  target="_blank" method="post">
    
    <div class="content9">
	
                           
	<span class="formIputDescription">Rule Set:</span>	
			  <select id="ruleSet" name="theRuleSet" class="tavernBox">	
				<option value="0" selected>Dungeon Crawl Classics</option>
				<option value="1">Labyrinth Lord</option>
				<option value="2">Basic Fantasy RPG</option>
				<option value="3">White Box RPG</option>
        </select>
        
        <br/>
        <br/>


		<div class="content8">
            
			  
        <div class="generatorButtonA2">
			
            <span class="generatorbuttonsC1">

           
               <input type="submit" value="" id="generate_characters2"/>
            
           </span>
           
            <span class="generatorbuttonsC1">
           
                <input type="reset"  value="" id="reset_generator2"/>
   
           </span>
                
		
            </div>
            </div>
            
				
            </div>
            
            </form>
            
            
            
                
                
                	
                <script>
        
                    $("#generate_characters2").click(function(){
         
    
                        $("#TavernForm").attr('action', "tavernGen/tavern.php");
    
                    });
                    
                </script>
        
                
 
                
    </section>


</body>
</html>