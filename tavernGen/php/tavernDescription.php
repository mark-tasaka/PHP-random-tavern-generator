<?php

function storeys ()
{
    $choice = rand(0, 1);

    if($choice == 0)
    {
        return 'two-storey';
    }
    else
    {
        return 'three-storey';
    }
}

function buildingConstruct ()
{
    $choice = rand(0, 6);

    switch($choice)
    {
        case 0:
            return 'brick and wood building';
        break;

        case 1:
            return 'tudor-style building';
        break;

        case 2:
            return 'half-timber building';
        break;

        case 3:
            return 'stone-walled building';
        break;

        case 4:
             return 'simple wood building';
        break;
             
        case 5:
            return 'timber and brick building';
        break;

        case 6:
            return 'brick building';
        break;

        default:
            return '';

    }
    
}


function floorDescr()
{
    $choice = rand(0,4);

    switch($choice)
    {
        case 0:
            return 'worn wood floors';
        break;

        case 1:
            return 'hardwood floors';
        break;

        case 2:
            return 'tile floors';
        break;

        case 3:
            return 'smooth stone floors';
        break;

        case 4:
            return 'faded wood floors';
        break;

        default:
        return '';
    }
}


function roofDesc()
{
    $choice = rand(0,4);

    switch($choice)
    {
        case 0:
            return 'a cedar shingle roof';
        break;

        case 1:
            return 'a thatch roof';
        break;

        case 2:
            return 'a slate tiled roof';
        break;

        case 3:
            return 'a wooden shingle roof';
        break;

        case 4:
            return 'a terracotta tile roof';
        break;

        default:
        return '';
    }

}



function roomDescr1()
{
    $choice = rand(0,4);

    switch($choice)
    {
        case 0:
            return 'Well-crafted wooden tables and chairs fill the tavern';
        break;

        case 1:
            return 'The tables and chairs are of a simple design';
        break;

        case 2:
            return 'The scent of strong spices fills the air';
        break;

        case 3:
            return 'A mismatched collection of tables and chairs fills the tavern';
        break;

        case 4:
            return 'Outside light enters the tavern through stained glass windows';
        break;

        default:
        return '';
    }

}



function roomDescr2()
{
    $choice = rand(0,4);

    switch($choice)
    {
        case 0:
            return 'simple canvas paintings decorate the walls.';
        break;

        case 1:
            return 'a battled damaged shield hangs on one of the walls.';
        break;

        case 2:
            return 'a mighty battle axe hangs over the hearth.';
        break;

        case 3:
            return 'a frame map hangs on one of the walls.';
        break;

        case 4:
            return 'the skull of a fantastic creature hangs over the hearth.';
        break;

        default:
        return '';
    }

}


function tavernStorey($storeys)
{
    if($storeys == 'two-storey')
    {
        return 'second storey';
    }
    else
    {
        return 'second and third storeys';
    }

}

function accommodationDescr1()
{
    $choice = rand(0,4);

    switch($choice)
    {
        case 0:
            return 'small rooms, with two plain wood framed beds in each room';
        break;

        case 1:
            return 'comfortable rooms, with a pair of fancy oak framed beds in each room';
        break;

        case 2:
            return 'consists of small rooms, with a pair of simple, yet sturdy, wood framed beds in each room';
        break;

        case 3:
            return 'spacious rooms, with four simple wood framed beds in each room';
        break;

        case 4:
            return 'small, yet comfortable rooms, with a pair of sturdy oak framed beds in each room';
        break;

        default:
        return '';
    }

}


function accommodationDescr2()
{
    $choice = rand(0,4);

    switch($choice)
    {
        case 0:
            return '; faded velvet sheets, made from old curtains, covers each bed.';
        break;

        case 1:
            return '; covering each bed are moth eaten wool blankets and cloth covered pillows.';
        break;

        case 2:
            return '; brightly coloured quilts and comfortable pillows covers each bed.';
        break;

        case 3:
            return '; warm wool blankets and cloth covered pillows rests upon each bed.';
        break;

        case 4:
            return '; warm cloth sheets and a pair of comfortable pillows covers each bed.';
        break;

        default:
        return '';
    }

}



?>