<?php

function tavernName1()
{
    $part1 = array('Smelly', 
                'Curious', 
                'Lazy', 
                'Tired', 
                'Drunken', 
                'Crooked',
                'Fearless',
                'Flaming',
               'Happy',
                'Salty',
                'Sleepy',
                'Dirty', 
                'Moody', 
                'Merry',
                'Weary', 
                'Belching', 
                'Dreaming',
                'Yawning',
                'Jolly');

    $arraySizePart1 = count($part1) - 1;

    $part1Element = rand(0, $arraySizePart1);

    $part2 = array('Bard',
                'Dwarf',
                'Orc',
                'Ox',
                'Goblin',
                'Sailor',
                'Soldier',
               'Gnome',
                'Giant',
                'Witch',
                'Wyvern',
               'Monkey',
                'Ranger',
                'Kobold',
                 'Lizardman',
              'Troll',
              'Ogre',
                'Warrior',
                'Brigand',
                'Bandit',
                'Gnoll',
                'Monk');
                
    $arraySizePart2 = count($part2) - 1;

    $part2Element = rand(0, $arraySizePart2);
    
    $part3 = array('Inn',
                'Tavern',
                'Pub');
                
    $arraySizePart3 = count($part3) - 1;

    $part3Element = rand(0, $arraySizePart3);

    $tavernName = 'The ' . $part1[$part1Element] . ' ' . $part2[$part2Element]. ' ' . $part3[$part3Element];

    return $tavernName;
}

function tavernName2()
{
    $part1 = array('Black Barnacle', 
                'Butterhouse ', 
                'Coal Miners', 
                'Cracked Hoof', 
                'Dancing Dryad', 
                'Early Bird', 
                'Firewater', 
                'Flying Flute', 
                'Happy Pedlar', 
                'Hearth and Road', 
                'Last Stop', 
                'Mixwater', 
                'Pewter Mug', 
                'Reveling Wench', 
                'Salt Merchant', 
                'Shaken Flagon', 
                'Sword and Shield', 
                'Stowaway', 
                'Tanger Serpent', 
                'Wanderlust', 
                'Watering Hole', 
                'Battle Axe', 
                'Black Swan', 
                'Boar and Spear', 
                'Bog and Barrel', 
                'Broken Arrow', 
                'Cloak and Dagger', 
                'Deepwater', 
                'Dragon and Flagon', 
                'Drowned Rat', 
                'Eights and Aces', 
                'Empty Pocket', 
                'Eye of the Specter', 
                'Fat Dragon', 
                'Full Moon', 
                'Golden Hammer', 
                'Golden Lady', 
                'Hearthstone Arms', 
                'Hammer and Anvil', 
                'Hen and Apple', 
                'Honest Barrister', 
                'Horn and Hounds', 
                'House of Cards',
                'Lion and Lantern', 
                'Mountain Home', 
                'Pipe and Tobacco', 
                'Pot Belly', 
                'Razorback', 
                'Safe Haven',  
                'Swagger and Swivel', 
                'Three Lions', 
                'Whistling Oyster', 
                'Mead and Magic');

    $arraySizePart1 = count($part1) - 1;

    $part1Element = rand(0, $arraySizePart1);

    $part3 = array('Inn',
                'Tavern',
                'Pub');
                
    $arraySizePart3 = count($part3) - 1;

    $part3Element = rand(0, $arraySizePart3);

    $tavernName = 'The ' . $part1[$part1Element] . ' ' . $part3[$part3Element];

    return $tavernName;
}



function tavernName3()
{
    $part1 = array('Every Man',
                'Fireside Newt', 
                'Flaming Wand',
                'Lost King',
                'Forgotten Wish',
                'Pewter Mug',
                'Silver Sword',
                'Tanger Serpent',
                'Weary Wyvern',
                'Broken Arrow',
                'Dreaming Dragon',
                'Flaming Snake',
                'Golden Dragon',
                'Golden Hammer',
                'Flying Dragon');

    $arraySizePart1 = count($part1) - 1;

    $part1Element = rand(0, $arraySizePart1);


    $tavernName = 'The Inn of the ' . $part1[$part1Element];

    return $tavernName;
}



function tavernName4()
{
    $part1 = array('Flaming',
                'Iron',
                'Golden',
                'Bronze',
                'Silver',
                'Broken',
                'Brass',
                'Copper',
                'Onyx');

    $arraySizePart1 = count($part1) - 1;

    $part1Element = rand(0, $arraySizePart1);

    $part2 = array('Sword',
                'Battle Axe',
                'War Hammer',
                'Shield',
                'Dragon',
                'Wyvern',
                'Gryphon',
                'Hammer');

    $arraySizePart2 = count($part2) - 1;

    $part2Element = rand(0, $arraySizePart2);


    $tavernName = 'The Inn of the ' . $part1[$part1Element] . ' ' . $part2[$part2Element];

    return $tavernName;
}


function getTavernName()
{

  $select = rand(0, 10);

  if($select <= 3)
  {
    return tavernName1();
  }
  else if($select >= 4 && $select <= 7)
  {
    return tavernName2();
  }
  else if($select == 8)
  {
    return tavernName3();
  }
  else
  {
    return tavernName4();
  }


}

?>