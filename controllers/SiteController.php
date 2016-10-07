<?php

/* 
 *
 */

class SiteController{
        /*
         * 
         * вывод главной страницы
         * 
         */
    public function actionIndex(){ 
        
        $categories = array(); //инициализируем переменную для вывода списка категорий
        $categories = Category::getCategoriesList(); // вызываем метод получения массива категорий из модели категории
        /* выводим дерево категорий
        $x = new Category(); // вызываем класс
        $a = $x->treeCategory(); // выбираем из базы список категорий и подкатегорий
        $categories2 = category::create_tree($a, 0); // вызываем функцию и строим дерево
         * 
         */
        
        $latestProduct = array();
        $latestProduct = Product::getLatestProducts();
        
        require_once(ROOT . TMPL .'index.php');
        
        return true;
    }
    
    public function actionContact(){
        
        $userEmail = '';
        $userText = '';
        $result = false;
       
        if(isset($_POST['submit'])){
            
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
            
            $errors = false;
            
            if(!user::checkEmail($userEmail)){
                $errors[] = 'Not valid E-mail';
            }
            
            if($errors == false){
                $adminEmail = 'yaslonane@yandex.ru';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'subject mail TEST';
                $result = mail($adminEmail, $subject, $message, "From: System message from zaa46.xyz <info@zaa46.xyz>"); /* {$userEmail} */
                $result = true;
            }
        }
        
        require (ROOT . TMPL . 'contact.php');
        
        return true;
    }
        /* 
         * конец вывода главной страницы 
         */
}
