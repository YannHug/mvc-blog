<?php
    
    
    namespace App\Models;
    
    
    class Users extends CoreModel
    {
        protected $first_name;
        protected $last_name;
        protected $email;
    
        /**
         * @return mixed
         */
        public function getFirstName()
        {
            return $this->first_name;
        }
    
        /**
         * @return mixed
         */
        public function getLastName()
        {
            return $this->last_name;
        }
    
        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }
        
        
    }