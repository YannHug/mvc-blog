<?php
    
    
    namespace App\Controllers;
    
    
    use App\Models\Articles;
    
    class MainController extends CoreController
    {
        public function home()
        {
            $articleToDisplay = Articles::findAll();
            $this->show('main/home', ['articlesToDisplay' => $articleToDisplay]);
        }
        
    }