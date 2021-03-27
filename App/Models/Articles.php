<?php
    
    
    namespace App\Models;
    
    
    use App\Utils\Database;

    class Articles extends CoreModel
    {
        protected $title;
        protected $slug;
        protected $introduction;
        protected $content;
        protected $created_at;
        protected $updated_at;
    
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
        public function getTitle()
        {
            return $this->title;
        }
    
        /**
         * @param mixed $title
         */
        public function setTitle($title): void
        {
            $this->title = $title;
        }
    
        /**
         * @return mixed
         */
        public function getSlug()
        {
            return $this->slug;
        }
    
        /**
         * @param mixed $slug
         */
        public function setSlug($slug): void
        {
            $this->slug = $slug;
        }
    
        /**
         * @return mixed
         */
        public function getIntroduction()
        {
            return $this->introduction;
        }
    
        /**
         * @param mixed $introduction
         */
        public function setIntroduction($introduction): void
        {
            $this->introduction = $introduction;
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
    
        public static function findAll(): array
        {
            // connection BDD via PDO
            $pdo= Database::getPDO();
            // creation de la requete sql
            $sql = '
                SELECT *
                FROM `articles`
            ';
            $pdoStatement = $pdo->query($sql);
            return $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);
        }
        
    }