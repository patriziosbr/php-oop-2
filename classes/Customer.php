<?php 

    require_once __DIR__ . "/User.php";

    class Customer extends User {
        
        private $country;
        private $city;
        private $zipCode;
        private $address;

        function __construct($username, $password, $mail, $country, $city, $zipCode, $address ) {
            parent::__construct($username, $password, $mail);
            $this->country = $country;
            $this->city = $city;
            $this->zipCode = $zipCode;
            $this->address = $address;
        }
    }

?>
