<?php 

    require_once __DIR__ . "/User.php";

    class Staff extends User {
        public $name;
        public $surname;
        public $phone;
        public $department;
        public $gender;
        private $wage;

        function __construct($username, $password, $mail, $name, $surname, $phone) {
            parent::__construct($username, $password, $mail);
            $this->name = $name;
            $this->surname = $surname;
            $this->phone = $phone;
        }

        public function getPrefix($gender) {
            if ( $gender == "M") {
                $this->gender = "M";
                return "Mr " . $this->surname . " " . $this->name . " " . $this-> department;
            } elseif ( $gender == "F" ) {
                $this->gender = "F";
                return "Mss " . $this->surname . " " . $this->name . " " . $this-> department;
            } else {
                return "Mx " . $this->surname . " " . $this->name . " " . $this-> department;
            }
        } // togliere ultimo else e fare ternario

        public function getWage($department) {
            switch ($department) {
                case "picker":
                    $this->department = "picker";
                    $this->wage = 1000;
                    break;
                case "manager":
                    $this->department = "manager";
                    $this->wage = 1500;
                    break;
                case "driver":
                    $this->department = "driver";
                    $this->wage = 1200;
                    break;
            }
        }



    }

?>