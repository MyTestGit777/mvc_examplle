<?php

/* 
 1.Проверка URL адреса
 2. находим маршрут
 * отправляем в controller
 */
$host= explode('?', $_SERVER['REQUEST_URI'])[0];
$num= substr_count($host,'/');//сколько вложений от корня
$path= explode('/', $host)[$num];//имя маршрута
//---------------------------
if($path=='' || $path=='index.php' || $path=='home'){
    
    $response= controllerGames::startSite();
}
//----------------list games
elseif($path=='games'){
    $response= controllerGames::gamesList();
}
//-----------------detail game
elseif($path=='detailGame'){
    if(isset($_GET['title'])){
        $title=$_GET['title'];
        $response= controllerGames::detailGame($title);
    }
    
}

else{
    $response= controllerGames::error404();
    
}