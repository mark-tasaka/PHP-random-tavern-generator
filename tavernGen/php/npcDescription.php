<?php

function humanBuildMale($age)
{
    if($age >= 1 && $age <= 3)
    {
        $choice = rand(0, 4);

        switch($choice)
        {
            case 0:
                return 'a stocky build';
            break;
            
            case 1:
                return 'a stout compact body';
            break;
            
            case 2:
                return 'broad shoulders, a barrel chest';
            break;
            
            case 3:
                return 'a tall slender build';
            break;
            
            case 4:
                return 'a medium build';
            break;

            default:
            return '';
        }
    }
    
    if($age == 4)
    {
        $choice = rand(0, 4);

        switch($choice)
        {
            case 0:
                return 'a frail body';
            break;
            
            case 1:
                return 'a lanky build';
            break;
            
            case 2:
                return 'a slender, almost sickly, build';
            break;
            
            case 3:
                return 'a paunchy build';
            break;
            
            case 4:
                return 'a podgy body, a round pot-belly';
            break;

            default:
            return '';
        }
    }
}


function humanBuildFemale($age)
{
    if($age >= 1 && $age <= 3)
    {
        $choice = rand(0, 4);

        switch($choice)
        {
            case 0:
                return 'a curvy build';
            break;
            
            case 1:
                return 'a petite build';
            break;
            
            case 2:
                return 'a tall slender build';
            break;
            
            case 3:
                return 'an athletic build';
            break;
            
            case 4:
                return 'a full-figured body';
            break;

            default:
            return '';
        }
    }
    
    if($age == 4)
    {
        $choice = rand(0, 4);

        switch($choice)
        {
            case 0:
                return 'a plump body';
            break;
            
            case 1:
                return 'a lanky build';
            break;
            
            case 2:
                return 'a full-figured build';
            break;
            
            case 3:
                return 'a petite body';
            break;
            
            case 4:
                return 'a small compact build';

            default:
            return '';
        }
    }
}


function humanFaceMale($age)
{
    
    $hair = array('sandy blond', 'dirty blond', 'black', 'dark brown', 'auburn');
    $hairSelect = rand(0, (count($hair)-1) );

    $bodyPart = arraY('Left cheek', 'right cheek', 'forehead', 'nose', 'chin');
    $bodyPartSelect = rand(0, (count($bodyPart)-1) );

    $feature = array('birthmark', 'scar', 'wort');
    $featureSelect = rand(0, (count($feature)-1) );

    $eyes = array('dark brown', 'bright blue', 'green', 'grey', 'hazel');
    $eyesSelect = rand(0, (count($eyes)-1) );

    $expression = array('determined', 'curious', 'sad');
    $expressionSelect = rand(0, (count($expression)-1) );

    if($age >= 1 && $age <= 2)
    {
        $choice = rand(0, 3);
        
        switch($choice)
        {
            case 0:
                return ' and a noticeable ' . $feature[$featureSelect] . ' on his ' . $bodyPart[$bodyPartSelect] . '.';
            break;
            
            case 1:
                return ' and an unkept head full of ' . $hair[$hairSelect] . ' hair.';
            break;
            
            case 2:
                return ' and a ' . $expression[$expressionSelect] . ' look in his ' .  $eyes[$eyesSelect] . ' eyes.';
            break;
            
            case 3:
                return ', a thick ' . $hair[$hairSelect] . ' beard and ' . $eyes[$eyesSelect] . ' eyes.';
            break;

            default:
            return '';
        }
    }
    
    if($age >= 3 && $age <= 4)
    {
        $choice = rand(0, 3);

        switch($choice)
        {
            case 0:
                return ', an unkept head of salt and pepper hair and ' . $eyes[$eyesSelect] . ' eyes.';
            break;
            
            case 1:
                return ', a weather worn face and a weary look in his ' . $eyes[$eyesSelect] . ' eyes.';
            break;
            
            case 2:
                return ', a thin greying beard and a large ' . $feature[$featureSelect] . ' on his ' . $bodyPart[$bodyPartSelect] . '.';
            break;
            
            case 3:
                return ', a receding hairline and ' . $expression[$expressionSelect] . ' look in his ' .  $eyes[$eyesSelect] . ' eyes.';
            break;

            default:
            return '';
        }
    }
}



function humanFaceFemale($age)
{
    
    $hair = array('sandy blond', 'dirty blond', 'black', 'dark brown', 'auburn');
    $hairSelect = rand(0, (count($hair)-1) );

    $bodyPart = arraY('Left cheek', 'right cheek', 'forehead', 'nose', 'chin');
    $bodyPartSelect = rand(0, (count($bodyPart)-1) );

    $feature = array('birthmark', 'scar', 'wort');
    $featureSelect = rand(0, (count($feature)-1) );

    $eyes = array('dark brown', 'bright blue', 'green', 'grey', 'hazel');
    $eyesSelect = rand(0, (count($eyes)-1) );

    $expression = array('determined', 'curious', 'sad');
    $expressionSelect = rand(0, (count($expression)-1) );

    if($age >= 1 && $age <= 2)
    {
        $choice = rand(0, 3);
        
        switch($choice)
        {
            case 0:
                return ', shoulder length ' .  $hair[$hairSelect] . ' hair and ' . $eyes[$eyesSelect] . ' eyes.';
            break;
            
            case 1:
                return ', curly ' .  $hair[$hairSelect] . ' hair and ' . $eyes[$eyesSelect] . ' eyes.';
            break;
            
            case 2:
                return ', a kind hearted smile and ' . $eyes[$eyesSelect] . ' eyes.';
            break;
            
            case 3:
                return ', a cheerful expression and ' . $eyes[$eyesSelect] . ' eyes.';
            break;

            default:
            return '';
        }
    }
    
    if($age >= 3 && $age <= 4)
    {
        $choice = rand(0, 3);

        switch($choice)
        {
            case 0:
                return ', a gentle demeanor and a motherly look in her ' . $eyes[$eyesSelect] . ' eyes.';
            break;
            
            case 1:
                return ', greying shoulder length hair and ' . $eyes[$eyesSelect] . ' eyes.';
            break;
            
            case 2:
                return  ', curly ' .  $hair[$hairSelect] . ' hair and ' . $eyes[$eyesSelect] . ' eyes.';
            break;
            
            case 3:
                return ', shoulder length hair and a ' . $expression[$expressionSelect] . ' look in her ' .  $eyes[$eyesSelect] . ' eyes.';
            break;
            
            default:
            return '';
        }
    }
}




function elfHair()
{
    $choice = rand(0,5);

    switch($choice)
    {
        case 0:
            return 'silver hair';
        break;
        
        case 1:
            return 'long golden hair';
        break;
        
        case 2:
            return 'honey coloured hair';
        break;
        
        case 3:
            return 'flowing platinum hair';
        break;
        
        case 4:
            return 'snow white hair';
        break;
        
        case 5:
            return 'auburn brown hair';
        break;

        default:
        return '';
    }
}


function elfEyes()
{
    $choice = rand(0,5);

    switch($choice)
    {
        case 0:
            return 'cold grey eyes';
        break;
        
        case 1:
            return 'bright blue eyes';
        break;
        
        case 2:
            return 'Bright violet eyes';
        break;
        
        case 3:
            return 'green-blue eyes';
        break;
        
        case 4:
            return 'emerald green eyes';
        break;
        
        case 5:
            return 'sky blue eyes';
        break;

        default:
        return '';
    }
}




?>