<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controllerBooks
 *
 * @author popova
 */
class controllerGames {
    //методы действия, которые надо выполнить!!!
    public static function startSite(){
        
        include_once 'view/main.php';
    }
    //--------------------error404
    public static function error404(){
        include_once 'view/error404.php';
    }
    //----------------------------------books list
    public static function gamesList(){
        //1. Model
        //2. View
        $companyList= modelGames::getCompanyList();
        $gamesList= modelGames::getGamesList();//получить список книг из массива
        include_once 'view/gamesList.php';
        
    }
    
    //------------detailBook
    
    public static function detailGame($game){
        //1.Model - данные одной книги по названию title
        //2.View
        $companyList= modelGames::getCompanyList();
        $result= modelGames::getGame($game);
        if($result[0]==true){
            $game=$result[1];
            include_once 'view/gameDetail.php';
        }else{
            include_once 'view/error404.php';
        }
    }
    
    
    
}//class
