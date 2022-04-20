<?php 
    class Person {
        private $id;
        private $name;
        private $birthdate;
        private $address;
        private $city;
        private $phone;
        private $email;
        private $identity_card_number;

        public function __construct($id, $name, $birthdate, $address, $city, $phone, $email, $identity_card_number) {
            $this->id = $id;
            $this->name = $name;
            $this->birthdate = $birthdate;
            $this->address = $address;
            $this->city = $city;
            $this->phone = $phone;
            $this->email = $email;
            $this->identity_card_number = $identity_card_number;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getBirthdate() {
            return $this->birthdate;
        }

        public function setBirthdate($birthdate) {
            $this->birthdate = $birthdate;
        }

        public function getAddress() {
            return $this->address;
        }

        public function setAddress($address) {
            $this->address = $address;
        }

        public function getCity() {
            return $this->city;
        }

        public function setCity($city) {
            $this->city = $city;
        }

        public function getPhone() {
            return $this->phone;
        }

        public function setPhone($phone) {
            $this->phone = $phone;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function geIdentityCardNumber() {
            return $this->identity_card_number;
        }

        public function seIdentityCardNumber($identity_card_number) {
            $this->identity_card_number = $identity_card_number;
        }
    }
?>