<?php

function getSpecies()
{
    $choice = rand(0, 99);
    $species = '';
    
    if($choice >= 0 && $choice <= 69)
    {
        $species = 'Human';
    }
    else if($choice >= 70 && $choice <= 79)
    {
        $species = 'Dwarf';
    }
    else if($choice >= 80 && $choice <= 89)
    {
        $species = 'Elf';
    }
    else if($choice >= 90 && $choice <= 99)
    {
        $species = 'Halfling';
    }

    return $species;
}


?>