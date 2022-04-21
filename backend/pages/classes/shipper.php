<?php 
    class Shipper extends Person {
        private $person_id;
        private $motor_license_plates_number;
        private $motor_name;

        public function getPersonId() {
            return $this->person_id;
        }

        public function setPersonId($person_id) {
            $this->person_id = $person_id;
        }

        public function getMotorLicensePlatesNumber() {
            return $this->motor_license_plates_number;
        }

        public function setMotorLicensePlatesNumber($motor_license_plates_number) {
            $this->motor_license_plates_number = $motor_license_plates_number;
        }

        public function getMotorName() {
            return $this->motor_name;
        }

        public function setMotorName($motor_name) {
            $this->motor_name = $motor_name;
        }
    }
?>