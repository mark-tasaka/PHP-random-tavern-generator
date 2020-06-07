<?php
/* 
Age Categories:
1 - young adult (17-29)
2 - pre middle age (30-44)
3- middle age (45-55)
4 - late middle age (56+)
*/

function humanAge($category)
{
    switch($category)
    {
        case 1:
            $age = rand(17, 29);
            return $age;
        break;
        
        case 2:
            $age = rand(30, 44);
            return $age;
        break;
        
        case 3:
            $age = rand(45, 55);
            return $age;
        break;
        
        case 4:
            $age = rand(56, 66);
            return $age;
        break;

        default:
        $age = 0;
        return $age;
    }

}

function dwarfAge($category)
{
    switch($category)
    {
        case 1:
            $age = 'a young dwarf';
            return $age;
        break;
        
        case 2:
            $age = 'an adult dwarf';
            return $age;
        break;
        
        case 3:
            $age = 'a middle age dwarf';
            return $age;
        break;
        
        case 4:
            $age = 'an older dwarf';
            return $age;
        break;

        default:
        $age = '';
        return $age;
    }

}



function elfAge($category)
{
    switch($category)
    {
        case 1:
            $age = 'an elven youth';
            return $age;
        break;
        
        case 2:
            $age = 'an dult elf';
            return $age;
        break;
        
        case 3:
            $age = 'an elf of indeterminate age';
            return $age;
        break;
        
        case 4:
            $age = 'an elf of indeterminate age';
            return $age;
        break;

        default:
        $age = '';
        return $age;
    }

}



function halflingAge($category)
{
    switch($category)
    {
        case 1:
            $age = 'a halfling youth';
            return $age;
        break;
        
        case 2:
            $age = 'an adult halfling';
            return $age;
        break;
        
        case 3:
            $age = 'a middle age halfling';
            return $age;
        break;
        
        case 4:
            $age = 'an older halfling';
            return $age;
        break;

        default:
        $age = '';
        return $age;
    }

}



//for inn keeper, bartender
function npcAgeCategory()
{
    $choice = rand(0,9);

    if($choice >= 0 && $choice <=3)
    {
        return 1;
    }
    else if($choice >= 4 && $choice <=6)
    {
        return 2;
    }
    else if($choice >= 7 && $choice <=8)
    {
        return 3;
    }
    else
    {
        return 4;
    }

}

//for barmaids, Cook's apprentice
function npcAgeCategory2()
{
    $choice = rand(0,9);

    if($choice >= 0 && $choice <= 4)
    {
        return 1;
    }
    else if($choice >= 5 && $choice <=7)
    {
        return 2;
    }
    else if($choice >= 8 && $choice <=9)
    {
        return 3;
    }
    
}



function ageDescription($age, $species, $gender)
{
    if($species == 'Human')
    {
        if($gender == 'Male')
        { 
            $genderId = 'man';
            $ageDesc = 'a ' . humanAge($age) . ' year old ' . $genderId;
            return $ageDesc;
        }
        else
        {
            $genderId = 'woman';
            $ageDesc = 'a ' . humanAge($age) . ' year old ' . $genderId;
            return $ageDesc;
        }
    }
    
    if($species == 'Dwarf')
    {
        $ageDesc = dwarfAge($age);
        return $ageDesc;
    }
    
    if($species == 'Elf')
    {
        $ageDesc = elfAge($age);
        return $ageDesc;
    }
    
    if($species == 'Halfling')
    {
        $ageDesc = halflingAge($age);
        return $ageDesc;
    }

}


?>