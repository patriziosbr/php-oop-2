<?php 

    class User {
        public $username;
        public $password;
        public $mail;

        function __construct($username, $password, $mail) {
            $this->username = $username;
            $this->password = $password;
            $this->mail = $mail;
        }


    }

?>
