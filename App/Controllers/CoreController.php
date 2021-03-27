<?php
    
    
    namespace App\Controllers;
    
    
    class CoreController
    {
        protected function show(string $viewName)
        {
            require_once __DIR__.'/../views/layout/header.tpl.php';
            require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
            require_once __DIR__.'/../views/layout/footer.tpl.php';
        }
    }