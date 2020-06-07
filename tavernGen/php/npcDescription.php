<?php

function humanBuildMale($age)
{
    if($age == 1 || $age == 2)
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
                return 'a tall stinky build';
            break;
            
            case 4:
                return 'a small man with a medium build';
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