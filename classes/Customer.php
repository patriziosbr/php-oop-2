<?php 

    require_once __DIR__ . "/User.php";

    class Customer extends User {
        
        private $country;
        private $city;
        private $zipCode;
        private $address;
        private $age;
        private $delivery; 

        function __construct($username, $password, $mail, $country, $city, $zipCode, $address ) {
            parent::__construct($username, $password, $mail);
            $this->country = $country;
            $this->city = $city;
            $this->zipCode = $zipCode;
            $this->address = $address;
            // $this->age = $age;
            // $this->delivery = $delivery;
            // non ho capito 
        }

        public function setDelivery($age) {
            if($age >= 65) {
                $this->age = $age;
                $this->delivery = 0;
            } else {
                $this->age = $age;
                $this->delivery = 5;
            }
        }
}
?>
