<?php
    
    
    namespace App\Controllers;
    
    
    use App\Models\Articles;

    class ArticleController extends CoreController
    {
        public function article($params)
        {
            $article = Articles::find($params);
            
            $this->show('articles/page', ['article'=>$article]);
        }
    }