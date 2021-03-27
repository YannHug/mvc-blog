<?php
    
    
    namespace App\Models;
    
    
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
        
        
    }