<?php

/**
 * Created on 04.10.2016
 * By NetBeans IDE 8.1
 * Author: Andrey Zashchepkin 
 *
 * 
 * ******** Contacts:*********
 * my e-mails - yaslonane@yandex.ru
 *            - andrey@zashchepkin.ru
 *            - info@zashchepkin.ru
 *  my site     zashchepkin.ru 
 * ********  end contacts *********
 * 
 *
 * Copyright zashchepkin.ru © 2016. All Rights Reserved.
 * License https://opensource.org/licenses/mit-license.php MIT License (MIT)
 *
 *
 * Description of Printer
 *
 * @author andrey
 * */
class Printer {
    //put your code here
    
    public static function getListPrinters(){
        
        $db = Db::getConnection();
        
        if(isset($_POST['submit'])){
            
            $name = "";
            $unit = "";
            $floor = "";
            $department = "";
            $cartrige = "";
            $status = "";
            
            
            
            
        }else {
            
            $result = $db->query('SELECT * FROM print WHERE status = 1');
            $result->setFetchMode(PDO::FETCH_ASSOC);
            //$row = $result->fetch();
            
            //if($result->fetch() == false) $print = 0;

            $i = 0;
            while($row = $result->fetch()){
                $print[$i]['id'] = $row['id'];  
                $print[$i]['name'] = $row['name'];  
                $print[$i]['model'] = $row['model'];  
                $print[$i]['unit'] = $row['unit']; 
                $print[$i]['floor'] = $row['floor']; 
                $print[$i]['department'] = $row['department']; 
                $print[$i]['img'] = $row['img']; 
                $i++;
            }
            
           return $print;
        }
        
        
    }
}
