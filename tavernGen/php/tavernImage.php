<?php

function getTavernTop($background)
{
    if($background == 0)
    {
        $number = rand(0,1);

        switch($number)
        {
            case 0:
                return 'images/config/tavern1a.png';
            break;

            case 1:
                return 'images/config/tavern1b.png';
            break;

            default:
            return ' ';
        }
    }

}


?>