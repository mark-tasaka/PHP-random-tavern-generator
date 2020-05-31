<?php




function getHalflingSurname()
{
    $surnames = array(
        "Brownlock",
        "Goodbarrel",
        "Heathertoe",
        "Milliciny",
        "Thorngage",
        "Brushgather",
        "Leagallow",
        "Quettory",
        "Bandawax",
        "Bullroarer",
        "Greenbottle",
        "Lindenbrook",
        "Shortwick",
        "Tosscobble",
        "Boffin ",
        "Gammidge",
        "Hornblower",
        "Marmidas",
        "Bolger",
        "Burrows",
        "Underbough",
        "Jallisall",
        "Gamwich",
        "Orgulas",
        "Weatherbee",
        "Millbridge",
        "Hamson",
        "Tealeaf",
        "Bracegirdle"
    );
        
    $numberNames = count($surnames);
    
    $randomName = rand (0, ($numberNames) );
    
    return $surnames[$randomName];
}


function getHalflingName ($sex)
{
    if($sex == 'Female')
    {
        
        $femaleNames = array(
        "Adaldrida",
        "Belladonna",
        "Eglantine",
        "Mimosa",
        "Amranth",
        "Berylla",
        "Marigold",
        "Mirabella",
        "Elanor",
        "Amaryllis",
        "Camellia",
        "Daisy",
        "Esmerelda",
        "Seraphina",
        "Angelica",
        "Carissa",
        "Euphemia",
        "Pansy",
        "Susannah",
        "Aspodel",
        "Donamira",
        "Pearl",
        "Verna",
        "Belba",
        "Charmaine",
        "Lobelia",
        "Pedderee"
        );
        
        $numberNames = count($femaleNames);
        
        $randomName = rand (0, ($numberNames) );
        
        return $femaleNames[$randomName];
        
    }
    else
    {
        
        $maleNames = array(
        "Adalgrim",
        "Bandobras",
        "Fosco",
        "Pervince",
        "Saradac",
        "Adelard",
        "Holman",
        "Pimpernell",
        "Genrill",
        "Osborn",
        "Theadric",
        "Andwise",
        "Fastolph",
        "Anson",
        "Filibert",
        "Halfred",
        "Flambard",
        "Hildigrim",
        "Peregrin",
        "Lotho",
        "Sancho",
        "Wilcome"
        );
        
        $numberNames = count($maleNames);
        
        $randomName = rand (0, ($numberNames) );
        
        return $maleNames[$randomName];
    }
}




?>