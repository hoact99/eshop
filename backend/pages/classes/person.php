<?php 
    abstract class Person {
        public int $id;
        public string $name;
        public string $birthdate;
        public string $address;
        public string $city;
        public string $phone;
        public string $email;
        public string $identity_card_number;

        public function __construct(object $obj) {
            $this->id = $obj->id;
            $this->name = $obj->name;
            $this->birthdate = $obj->birthdate;
            $this->address = $obj->address;
            $this->city = $obj->city;
            $this->phone = $obj->phone;
            $this->email = $obj->email;
            $this->identity_card_number = $obj->identity_card_number;
        }
    }
?>