<?php
    
    
    namespace App\Controllers;
    
    
    class CoreController
    {
        protected function show(string $viewName, $viewData = [])
        {
            global $router;
            // Comme $viewVars est déclarée comme paramètre de la méthode show()
            // les vues y ont accès
            // ici une valeur dont on a besoin sur TOUTES les vues
            // donc on la définit dans show()
            $viewData['currentPage'] = $viewName;
            
            // Extraction du tableau sous forme de variable pour exploitation
            extract($viewData);
            
            require_once __DIR__ . '/../views/layout/header.tpl.php';
            require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
            require_once __DIR__ . '/../views/layout/footer.tpl.php';
        }
    }