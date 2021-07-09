<?php 

    class User {
        private $username;
        private $password;
        private $mail;

        function __construct($username, $password, $mail) {
            $this->username = $username;
            $this->password = $password;
            $this->mail = $mail;
        }


    }

?>
