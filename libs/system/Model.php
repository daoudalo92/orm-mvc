<?php
    namespace libs\system;

    use src\model\RolesDb;

class Model
    {
        protected $entityManager;

        public function __construct()
        {
            require_once "bootstrap.php";
            //$entityManager =RolesDb::class;
            $this -> entityManager = $entityManager;
        }
    }
?>

