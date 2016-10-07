<?php

/**
 * Created on 03.10.2016
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
 * Description of PrintersController
 *
 * @author andrey
 * */
class PrintersController {
    //put your code here
    public function actionIndex(){

        echo 'Printers list';
        
        $printList = Printer::getListPrinters();
        
        if($printList == 0) $error = 1;
       
        require_once (ROOT. TMPL. 'printers.php');
        
        echo "<pre>";
        var_dump($printList);
        echo "</pre>";

        return true;
    }
    
}