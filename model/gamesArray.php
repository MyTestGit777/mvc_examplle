<?php
/* 
*Массив - список компаний $company
*Массив - список игр по компаниям $games
 */
$company=array(
    array("id"=>1, "name"=>"Blizzard"),
    array("id"=>2, "name"=>"Valve"),
    array("id"=>3, "name"=>"Ubisoft"),
    array("id"=>4, "name"=>"Bethesda"),
);
//-----------------------------

$games=array(
    array(
        "id"=>1,
        "idCompany"=>1,
        "title"=>"World of Warcraft",
        "description"=>"wow.html",
        "price"=>59.99,
        "pic"=>"wow.png"
    ),
    array(
        "id"=>2,
        "idCompany"=>1,
        "title"=>"Overwatch",
        "description"=>"ow.html",
        "price"=>39.99,
        "pic"=>"ow.png"
    ),
    array(
        "id"=>3,
        "idCompany"=>1,
        "title"=>"Hearthstone",
        "description"=>"hs.html",
        "price"=>"Free To Play",
        "pic"=>"hs.png"
    ),
    array(
        "id"=>4,
        "idCompany"=>1,
        "title"=>"Starcraft II",
        "description"=>"sc2.html",
        "price"=>"Free To Play",
        "pic"=>"sc2.png"
    ),
    array(
        "id"=>5,
        "idCompany"=>2,
        "title"=>"Dota 2",
        "description"=>"dota2.html",
        "price"=>"Free To Play",
        "pic"=>"dota2.png"
    ),
    array(
        "id"=>6,
        "idCompany"=>2,
        "title"=>"Counter Strike:Global Offensive",
        "description"=>"csgo.html",
        "price"=>"Free To Play",
        "pic"=>"csgo.png"
    ),
    array(
        "id"=>7,
        "idCompany"=>2,
        "title"=>"Half-Life",
        "description"=>"hl.html",
        "price"=>19.99,
        "pic"=>"hl.png"
    ),
    array(
        "id"=>8,
        "idCompany"=>2,
        "title"=>"Portal 2",
        "description"=>"portal2.html",
        "price"=>14.99,
        "pic"=>"portal2.png"
    ),
    array(
        "id"=>9,
        "idCompany"=>3,
        "title"=>"Tom Clancy’s Rainbow Six Siege",
        "description"=>"rss.html",
        "price"=>19.99,
        "pic"=>"rss.png"
    ),
    array(
        "id"=>10,
        "idCompany"=>3,
        "title"=>"Tom Clancy’s The Division 2",
        "description"=>"division2.html",
        "price"=>59.99,
        "pic"=>"division2.png"
    ),
    array(
        "id"=>11,
        "idCompany"=>3,
        "title"=>"Far Cry New Dawn",
        "description"=>"fcnd.html",
        "price"=>59.99,
        "pic"=>"fcnd.png"
    ),
    array(
        "id"=>12,
        "idCompany"=>3,
        "title"=>"Assassin's Creed Odyssey",
        "description"=>"aco.html",
        "price"=>59.99,
        "pic"=>"aco.png"
    ),
    array(
        "id"=>13,
        "idCompany"=>4,
        "title"=>"Fallout 76",
        "description"=>"f76.html",
        "price"=>59.99,
        "pic"=>"f76.png"
    ),
    array(
        "id"=>14,
        "idCompany"=>4,
        "title"=>"The Elder Scrolls V: Skyrim",
        "description"=>"skyrim.html",
        "price"=>29.99,
        "pic"=>"skyrim.png"
    ),
    array(
        "id"=>15,
        "idCompany"=>4,
        "title"=>"Prey",
        "description"=>"prey.html",
        "price"=>39.99,
        "pic"=>"prey.png"
    ),
    array(
        "id"=>16,
        "idCompany"=>4,
        "title"=>"The Elder Scrolls Online",
        "description"=>"tso.html",
        "price"=>29.99,
        "pic"=>"tso.png"
    ),
);