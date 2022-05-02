<?php 
    class Shipper extends Person {
        public int $person_id;
        public string $motor_license_plates_number;
        public string $motor_name;

        public function __construct(object $obj) {
            $person_id = $obj->person_id;
            $motor_license_plates_number = $obj->motor_license_plates_number;
            $motor_name = $obj->motor_name;
        }
    }
?>