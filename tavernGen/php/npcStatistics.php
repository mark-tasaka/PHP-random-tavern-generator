<?php

function innKeeperStats($ruleSet)
{
    switch($ruleSet)
    {
        case 0:
            $stats = array('', 'Init +0; Atk +0 melee (by weapon); AC 9; HD 1d8; ', ' MV 20; Act 1d20; SV Fort +0, Ref +0, Will +0; AL ');
            return $stats;
        break;
        
        case 1:
            $stats = array('AL ', '; MV 120 (40); AC 9; HD 1; ', ' Att 1; Dmg: by weapon; Save 0th level human');
            return $stats;
        break;
        
        case 2:
            $stats = array('', 'AC 11; HD 1; ', ' No Att 1; Dmg: by weapon; MV 30; Save as NM');
            return $stats;
        break;
        
        case 3:
            $stats = array('', 'AC 9 [10]; HD 1; ', ' Attack: by weapon; MV 12');
            return $stats;
        break;

        default:
            $stats = array('', '', '');
            return $stats;
    }

}


function innKeeperHitPoints($ruleSet)
{
    switch($ruleSet)
    {
        case 0:
            $hp = rand(4, 8);
            return $hp;
        break;
        
        case 1:
            $hp = rand(4, 8);
            return $hp;
        break;
        
        case 2:
            $hp = rand(4, 8);
            return $hp;
        break;
        
        case 3:
            $hp = rand(4, 6);
            return $hp;
        break;

        default:
            $hp = 0;
            return $hp;
    }

}


function getAlignment()
{
    $choice = rand(0, 6);

    if($choice >= 0 && $choice <= 2)
    {
        return 'Law';
    }
    else if($choice >= 3 && $choice <= 5)
    {
        return 'Neutral';
    }
    else
    {
        return 'Chaos';
    }
}


function statLine ($ruleSet, $npcArray, $hp)
{
    $alignment = getAlignment();


    switch($ruleSet)
    {
        case 0:
            $stats = $npcArray[1] .  $hp . ' hp;' . $npcArray[2] . $alignment;
            return $stats;
        break;
        
        case 1:
            $stats = $npcArray[0] . $alignment .  $npcArray[1] .  $hp . ' hp;' . $npcArray[2];
            return $stats;
        break;
        
        case 2:
            $stats = $npcArray[1] .  $hp . ' hp;' . $npcArray[2];
            return $stats;
        break;
        
        case 3:
            $stats = $npcArray[1] .  $hp . ' hp;' . $npcArray[2];
            return $stats;
        break;

        default:
            $stats = '';
            return $stats;

    }

}



?>