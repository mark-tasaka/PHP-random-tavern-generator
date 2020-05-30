<?php

function getTavernImage()
{
    $number = rand(0,11);

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
            
            case 6:
                return 'images/tavern6.png';
            break;

            case 7:
                return 'images/tavern7.png';
            break;

            case 8:
                return 'images/tavern8.png';
            break;

            case 9:
                return 'images/tavern9.png';
            break;

            case 10:
                return 'images/tavern10.png';
            break;

            case 11:
                return 'images/tavern11.png';
            break;

            default:
            return ' ';
     }

}


?>