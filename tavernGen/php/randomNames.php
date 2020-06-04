<?php



function getDwarfSurname()
{
    $surnames = array(
        "Copperpots",
        "Mithril-born",
        "Silverbeard",
        "Ironhelm",
        "Ashenforge",
        "Birchstone",
        "Elderbeard",
        "Oakenshield",
        "Yewhammer",
        "Dûnhark",
        "Firebeard",
        "Gnarlbeard",
        "Grimsleeper",
        "Forgeworn",
        "Stormhammer",
        "Frostbeard",
        "Hammerdasher",
        "Goldbrewer",
        "Stormpeak",
        "Hammerkeeper",
        "Blackhammer",
        "Blackbanner",
        "Longbeard"
    );
        
    $numberNames = count($surnames);
    
    $randomName = rand (0, ($numberNames - 1) );
    
    return $surnames[$randomName];
}



function getDwarfName ($sex)
{
    if($sex == 'Female')
    {
        
        $femaleNames = array(
        "Haria",
        "Dimgrima",
        "Dwingari",
        "Thrgoli",
        "Morala",
        "Bofgrima",
        "Bolundi",
        "Rungini",
        "Mormina",
        "Chaldria",
        "Farona",
        "Barrimi",
        "Groona",
        "Calgari",
        "Belunni",
        "Gombari",
        "Belrundi",
        "Dwzadi",
        "Nordria",
        "Fimgini",
        "Farrundi",
        "Rungari",
        "Dortria",
        "Thinala",
        "Dwingrima",
        "Gomala"
        );
        
        $numberNames = count($femaleNames);
        
        $randomName = rand (0, ($numberNames - 1) );
        
        return $femaleNames[$randomName];
        
    }
    else
    {

        $maleNames = array(
        "Gilol",
        "Gindli",
        "Dariol",
        "Dolvor",
        "Rundur",
        "Dolan",
        "Gilin",
        "Aigran",
        "Mandor",
        "Dalgon",
        "Ginli",
        "Thrond",
        "Barrim",
        "Thgrim",
        "Druum",
        "Dalmin",
        "Garain",
        "Bulbur",
        "Dwinund",
        "Gilgin",
        "Fimlin",
        "Storum",
        "Belkon",
        "Ketkon"
        );
        
        $numberNames = count($maleNames);
        
        $randomName = rand (0, ($numberNames - 1) );
        
        return $maleNames[$randomName];
    }
}



function getElfSurname()
{
    $surnames = array(
        "Aeravansel",
        "Brightwing",
        "Elaéyadar",
        "Erladden",
        "Evanara",
        "Donnathlascen",
        "Ellarian",
        "Gwaelon",
        "Fenmarel",
        "Ereuvyn",
        "Eveningfall",
        "Fellmirr",
        "Ildacer",
        "Laelithar",
        "Lhoril",
        "Maendellyn",
        "Kelerandri",
        "Nightstar",
        "Nharimlur",
        "Raedrimn",
        "Sharrith",
        "Tamlyranth",
        "Uirthur",
        "Tarnruth",
        "Ortauré",
        "Selakiir",
        "Talesspur",
        "Kadelaryn"
    );
        
    $numberNames = count($surnames);
    
    $randomName = rand (0, ($numberNames - 1) );
    
    return $surnames[$randomName];
}



function getElfName ($sex)
{
    if($sex == 'Female')
    {
        
        $femaleNames = array(
        "Arlavana",
        "Cedena",
        "Anathia",
        "Aermadriel",
        "Garlavella",
        "Aenabeth",
        "Firnavorna",
        "Herlavana",
        "Aermavana",
        "Aernadriel",
        "Gallebren",
        "Gamadriel",
        "Firthathia",
        "Firredriel",
        "Aerallia",
        "Ganathia",
        "Garathia",
        "Aermavorna",
        "Caernavana",
        "Firthavorna",
        "Cemadriel",
        "Cellevella",
        "Caelvadriel",
        "Arredena",
        "Garrevorna",
        "Garovorna",
        "Caermalorna",
        "Amathia",
        "Gerlabeth"
        );
        
        $numberNames = count($femaleNames);
        
        $randomName = rand (0, ($numberNames - 1) );
        
        return $femaleNames[$randomName];
        
    }
    else
    {
        
        $maleNames = array(
        "Aethafin",
        "Amabryn",
        "Caerodrim",
        "Herthalon",
        "Fithafin",
        "Halvalian",
        "Herthalon",
        "Harlafin",
        "Firmalon",
        "Finavel",
        "Aerlavorn",
        "Caethabryn",
        "Garrebryn",
        "Manavorn",
        "Halvadrim",
        "Harthavel",
        "Cerlalon",
        "Firrebryn",
        "Allevorn",
        "Malvaden",
        "Syrthadrim",
        "Sythalian",
        "Marnalorn",
        "Synalian",
        "Syrthadrim",
        "Hethafin",
        "Ganabryn",
        "Harnavan",
        "Syrnaden",
        "Firadrim",
        "Anadrim",
        "Maravel"
        );
        
        $numberNames = count($maleNames);
        
        $randomName = rand (0, ($numberNames - 1) );
        
        return $maleNames[$randomName];
    }
}



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



function getHumanSurname()
{
    $surnames = array(
        "Hoxha",
        "Shehu",
        "Murad",
        "Brahimi",
        "Halili",
        "Shkodra",
        "Prishtina",
        "Hovhannisyan",
        "Khachatryan",
        "Gruber",
        "Bauer",
        "Pichler",
        "Hofer",
        "Brunner",
        "Wolf",
        "Schuster",
        "Jacobs",
        "Dubois",
        "Lambert",
        "Nielsen",
        "Christensen",
        "Joensen",
        "Korhonen",
        "Laine",
        "Heikkinen",
        "Laitinen",
        "Lahtinen",
        "Thomas",
        "Durand",
        "Roux",
        "André",
        "Martinez",
        "Müller",
        "Schneider",
        "Samaras",
        "Papoutsis",
        "Aivaliotis",
        "Koufos",
        "Russo",
        "Giordano",
        "Mariani",
        "Martinelli",
        "De Angelis",
        "Krasniqi",
        "Dijkstra",
        "Bogdanov",
        "Davidov",
        "Kitanovski",
        "Pereira",
        "Marques",
        "Khan",
        "McLaughlin",
        "Narayan",
        "Maharaj",
        "Lavoie",
        "Reyes",
        "Rosario",
        "Vásquez",
        "Vargas",
        "Trevino",
        "Reyes"
    );
        
    $numberNames = count($surnames);
    
    $randomName = rand (0, ($numberNames - 1) );
    
    return $surnames[$randomName];
}



function getHumanName ($sex)
{
    if($sex == 'Female')
    {
        
        $femaleNames = array(
        "Bella",
        "Luna",
        "Sadie",
        "Chloe",
        "Zoey",
        "Roxy",
        "Gracie",
        "Ruby",
        "Ellie",
        "Abby",
        "Piper",
        "Sasha",
        "Riley",
        "Izzy",
        "Maya",
        "Cali",
        "Millie",
        "Belle",
        "Harley",
        "Charlie",
        "Willow",
        "Marley",
        "Dakota",
        "Callie",
        "Hazel",
        "Shelby",
        "Jasmine",
        "Ava",
        "Fiona",
        "Sydney",
        "Josie",
        "Cleo",
        "Leia",
        "Delilah",
        "Shadow",
        "Macy",
        "Allie",
        "Bonnie",
        "Lacey",
        "Ashes",
        "Misty",
        "Kiki",
        "Gracie",
        "Lakshmi",
        "Tiara",
        "Twinkle",
        "Charlotte",
        "Ade",
        "Anna",
        "Aletona",
        "Branwyn",
        "Aleena",
        "Arlana",
        "Brienna",
        "Diva",
        "Devona",
        "Elsha",
        "Evelina",
        "Gildas",
        "Ginessa",
        "Gwendolen",
        "Gwenyver",
        "Gwynn",
        "Idelisa",
        "Isolda",
        "Isolde",
        "Jennyver",
        "Keelia",
        "Lavena",
        "Linnette",
        "Lyonesse",
        "Melvina",
        "Morrigan",
        "Muriel",
        "Nareena",
        "Oriana",
        "Rowena",
        "Yseult",
        "Abellona",
        "Anneka",
        "Freya",
        "Gisela",
        "Helga",
        "Katarina",
        "Katryn",
        "Linnea",
        "Lisabet",
        "Monika",
        "Petronilla",
        "Rebekka",
        "Thora",
        "Viveka",
        "Alyssandra",
        "Angelique",
        "Arcene",
        "Aubrianne",
        "Celesse",
        "Cendrillon",
        "Chantay",
        "Charmain",
        "Aldona",
        "Allaryce",
        "Delmira",
        "Gabriele",
        "Galiana",
        "Genoveva",
        "Geralynn",
        "Grisella",
        "Heida",
        "Idaia",
        "Isana",
        "Isolda",
        "Johannah",
        "Karlene",
        "Katharina",
        "Rolanda",
        "Rudella",
        "Vanda",
        "Frederica",
        "Juliana",
        "Kendra",
        "Maida",
        "Odelyna",
        "Rowena",
        "Sunniva",
        "Aleezah",
        "Ashira",
        "Atarah",
        "Azelia",
        "Daliyah",
        "Dalya",
        "Darissa",
        "Divsha",
        "Eleora",
        "Evacska",
        "Galenka",
        "Gavriela",
        "Genisia",
        "Katriel",
        "Keiyn",
        "Ksena",
        "Lemuela",
        "Lizbeth",
        "Madalyn",
        "Maribel",
        "Marisha",
        "Matana",
        "Meira",
        "Myriam",
        "Nechama",
        "Reveka",
        "Rinnah"
        );
        
        $numberNames = count($femaleNames);
        
        $randomName = rand (0, ($numberNames - 1) );
        
        return $femaleNames[$randomName];
        
    }
    else
    {
        
        $maleNames = array(
        "Max",
        "Charlie",
        "Cooper",
        "Rocky",
        "Duke",
        "Tucker",
        "Bentley",
        "Milo",
        "Riley",
        "Murphy",
        "Jackson",
        "Gus",
        "Oscar",
        "Baxter",
        "Ollie",
        "Diesel",
        "Bruno",
        "Bandit",
        "Moose",
        "Finn",
        "Marley",
        "Loki",
        "Brody",
        "Jasper",
        "Ace",
        "Shadow",
        "Rocco",
        "Apollo",
        "Roscoe",
        "Scout",
        "Rex",
        "Tyson",
        "Rusty",
        "Otis",
        "Koda",
        "Gunner",
        "Hunter",
        "Joey",
        "Boomer",
        "Ziggy",
        "Copper",
        "Frankie",
        "Benny",
        "Brutus",
        "Ranger",
        "Chase",
        "Chance",
        "Kobe",
        "Chewy",
        "Benji",
        "Rufus",
        "Cash",
        "Baldulf",
        "Balen",
        "Balin",
        "Bertram",
        "Bran",
        "Bryan",
        "Cadwallon",
        "Caerleon",
        "Calibom",
        "Camlann",
        "Carrado",
        "Dagonet",
        "Dinadan",
        "Dristan",
        "Drudwyn",
        "Evalac",
        "Florence",
        "Gahariet",
        "Gaheris",
        "Galahad",
        "Galahault",
        "Garreth",
        "Gawain",
        "Gurgalan",
        "Hellekin",
        "Houdain",
        "Isdemus",
        "Kaherdin",
        "Kanelinqes",
        "Lamorak",
        "Laudegrance",
        "Llacheu",
        "Lohengrin",
        "Lucan",
        "Maheloas",
        "Melechan",
        "Melyon",
        "Mordrain",
        "Pellanor",
        "Pellinore",
        "Percyvelle",
        "Taliesin",
        "Tristan",
        "Tristram",
        "Aksel",
        "Balder",
        "Bjarne",
        "Bjorn",
        "Diederik",
        "Edletd",
        "Aldwyn",
        "Barton",
        "Bertram",
        "Bordan",
        "Cerdic",
        "Creighton",
        "Daegal",
        "Devyn",
        "Durwin",
        "Durwyn",
        "Erol",
        "Gaderian",
        "Godric",
        "Ingram",
        "Ivor",
        "Kendrick",
        "Kenric",
        "Kingsley",
        "Leanian",
        "Lucan",
        "Odin",
        "Ormod",
        "Rowan",
        "Ryce",
        "Selwyn",
        "Sherwyn",
        "Tamar",
        "Tolan",
        "Adalric",
        "Adalwine",
        "Adalwolf",
        "Alphonso",
        "Amaud",
        "Darek",
        "Diederich",
        "Eberhardt",
        "Edwyn",
        "Erich",
        "Frantz",
        "Ghislain",
        "Gregor",
        "Johann",
        "Kuhlbert",
        "Meilyr",
        "Mihangel",
        "Sawyl",
        "Steffan",
        "Talfryn",
        "Tewdwr",
        "Trefor",
        "Tristram",
        "Tudor",
        "Vaughn",
        "Jonathan",
        "Matthias",
        "Micah",
        "Nathanel",
        "Samuel",
        "Gael",
        "Gallagher",
        "Gillean",
        "Greagoir",
        "Hanraoi",
        "Harkin",
        "Jarlath",
        "Kane",
        "Keagan",
        "Kellach",
        "Kerwyn",
        "Killdaire",
        "Kyrell",
        "Korrigan",
        "Laoghaire",
        "Monohan",
        "Peyton",
        "Riddock",
        "Rowan",
        "Ryley"
        );
        
        $numberNames = count($maleNames);
        
        $randomName = rand (0, ($numberNames - 1) );
        
        return $maleNames[$randomName];
    }
}


function getFirstName ($sex, $species)
{
    if($species == 'Human')
    {
        $firstName = getHumanName($sex);
        return $firstName;
    }
    
    if($species == 'Dwarf')
    {
        $firstName = getDwarfName($sex);
        return $firstName;
    }
    
    if($species == 'Elf')
    {
        $firstName = getElfName($sex);
        return $firstName;
    }
    
    if($species == 'Halfling')
    {
        $firstName = getHalflingName($sex);
        return $firstName;
    }

}


function getSurnameName ($species)
{
    if($species == 'Human')
    {
        $lastName = getHumanSurname();
        return $lastName;
    }
    
    if($species == 'Dwarf')
    {
        $lastName = getDwarfSurname();
        return $lastName;
    }
    
    if($species == 'Elf')
    {
        $lastName = getElfSurname();
        return $lastName;
    }
    
    if($species == 'Halfling')
    {
        $lastName = getHalflingSurname();
        return $lastName;
    }

}


?>