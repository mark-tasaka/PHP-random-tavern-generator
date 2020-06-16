<?php

function houseAleColour ()
{
    $houseAle = array("pale gold", "deep gold", "pale amber", "dark amber", "light brown", "golden brown", "amber-brown", "brown", "dark brown");

    $numberColours = count($houseAle);

    $colour = rand(0, ($numberColours - 1));

    return $houseAle[$colour];

}

function houseAleFlavour()
{
    
    $houseAle = array("has a robust flavour and a slightly fruity taste.", 
                    "has a rich flavour and a noticeable aftertaste.", 
                    "is flavoured with a variety of spices and has a slightly nutty taste.", 
                    "is a mild tasting ale, with a fruity flavour.");

    $number = count($houseAle);

    $flavour = rand(0, ($numberColours -1));

    return $houseAle[$flavour];
}



?>