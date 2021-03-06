<?php

use function PHPSTORM_META\type;

class Database
    {
        private $host=DB_HOST;
        private $user=DB_USER;
        private $pass=DB_PASS;
        private $database=DB_NAME;
        
        private $dbh;
        private $error;
        private $stmt;
        function __construct()
        {
            $dsn='mysql:host='.$this->host .';dbname='.$this->database;

            $option=array(
                PDO::ATTR_PERSISTENT=>true,
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
            );
            
            try
            {
                $this->dbh=new PDO($dsn,$this->user,$this->pass,$option);
            }
            catch(PDOException $exception)
            {
                $this->error=$exception->getMessage();
            }
        }

        public function query($query)
        {
            $this->stmt=$this->dbh->prepare($query);
        }

        public function bind($param,$value,$type=null)
        {
            if(is_null($type))
            {
                switch(true)
                {
                    case is_int($value):
                        $type=PDO::PARAM_INT;
                    break;
                    case is_bool($value):
                        $type=PDO::PARAM_BOOL;
                    break;
                    case is_null($value):
                        $type=PDO::PARAM_NULL;
                    break;
                    default:
                        $type=PDO::PARAM_STR;
                }
            }

            $this->stmt->bindvalue($param,$value,$type);
        } 
        public function execute()
        {
            return $this->stmt->execute();
        }

        public function resultset()
        {
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function single()
        {
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }
    }
?>