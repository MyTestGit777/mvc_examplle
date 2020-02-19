<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelBooks
 *
 * @author popova
 */
class modelGames {
    //put your code here
    public static function getGamesList(){
        include 'model/gamesArray.php';
        return $games;              
        
    }
        public static function getCompanyList(){
        include 'model/gamesArray.php';
        return $company;              
        
    }
    //--------------detailBook 
    public static function getGame($title){
        //МАССИВ: 1. получи весь массив, 2. перебрать массив и найди 1 данное по условию
        
        $allGames= modelGames::getGamesList();
        $test=array(false);
        foreach($allGames as $game){
            if($game['title']==$title){
                $test=array(true,$game);
            }//if
        }//foreach
        return $test;
    }//public
    
    
    
    
    
    
    
}
