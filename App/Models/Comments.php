<?php
    
    
    namespace App\Models;
    
    
    use App\Utils\Database;
    use PDO;

    class Comments extends CoreModel
    {
        protected $author;
        protected $content;
        protected $created_at;
        protected $updated_at;
        protected $article_id;
    
        /**
         * @return mixed
         */
        public function getCreatedAt()
        {
            return $this->created_at;
        }
    
        /**
         * @return mixed
         */
        public function getArticleId()
        {
            return $this->article_id;
        }
    
        /**
         * @return mixed
         */
        public function getAuthor()
        {
            return $this->author;
        }
    
        /**
         * @return mixed
         */
        public function getContent()
        {
            return $this->content;
        }
    
        /**
         * @param mixed $content
         */
        public function setContent($content): void
        {
            $this->content = $content;
        }
    
        /**
         * @return mixed
         */
        public function getUpdatedAt()
        {
            return $this->updated_at;
        }
    
        /**
         * @param mixed $updated_at
         */
        public function setUpdatedAt($updated_at): void
        {
            $this->updated_at = $updated_at;
        }
        
        public static function findAllForArticle($id)
        {
            $pdo= Database::getPDO();
            $sql = '
                SELECT *
                FROM `comments`
                WHERE article_id =' . $id .'
                ORDER BY `created_at` DESC
                ';
            $pdoStatement = $pdo->query($sql);
            return $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        }
    }