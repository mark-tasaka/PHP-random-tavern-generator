<?php

function getTavern()
{
    $number = rand(0,5);

    switch($number)
    {
            case 0:
                return 'images/tavern0.png';
            break;

            case 1:
                return 'images/tavern1.png';
            break;

            case 2:
                return 'images/tavern2.png';
            break;

            case 3:
                return 'images/tavern3.png';
            break;

            case 4:
                return 'images/tavern4.png';
            break;

            case 5:
                return 'images/tavern5.png';
            break;

            default:
            return ' ';
     }
}


?>