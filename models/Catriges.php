<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Catriges
 *
 * @author andrey
 */
class Catriges {
    //put your code here
    
    public static function getSumAllCarteiges(){ //получаем сумму всех картриджей(доставленных и замененных) по запросу ниже
        
        /*SELECT c.name as Имя, sum(aC.value) as Сумма FROM actionsCartriges aC
        INNER JOIN cartriges c ON aC.id_cartriges = c.id
        GROUP BY c.name;*/
        
        $sql = "SELECT c.name as name, sum(aC.value) as value FROM actionsCartriges aC
                INNER JOIN cartriges c ON aC.id_cartriges = c.id
                GROUP BY c.name;";
        
        return arr();
    }
    
    public static function addCartriges(){ //добавление действия с картриджеми
        
        
    }
    
    //public static function RemoveCartriges()
    
    public static function AddNewCartriges(){ // добавление нового картриджа
        
        
    }
    
    public static function ReactivCartriges(){ // изменение статуза задействования принтера
        
        
    } 
    
}
