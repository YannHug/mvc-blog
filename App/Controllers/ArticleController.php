<?php
    
    
    namespace App\Controllers;
    
    
    use App\Models\Articles;
    use App\Models\Comments;

    class ArticleController extends CoreController
    {
        public function article($params)
        {
            $article = Articles::find($params);
            $comments = Comments::findAllForArticle($params);
            
            $this->show('articles/page', ['article'=>$article, 'comments'=>$comments]);
        }
    }