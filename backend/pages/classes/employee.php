<?php 
    class Employee extends Person {
        private $person_id;
        private $position_id;
        private $hire_date;

        public function getPersonId() {
            return $this->person_id;
        }

        public function setPersonId($person_id) {
            $this->person_id = $person_id;
        }

        public function getPositionId() {
            return $this->position_id;
        }

        public function setPositionId($position_id) {
            $this->position_id = $position_id;
        }

        public function getHireDate() {
            return $this->hire_date;
        }

        public function setHireDate($hire_date) {
            $this->hire_date = $hire_date;
        }
    }
?>