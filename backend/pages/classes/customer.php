<?php 
    class Customer extends Person {
        private $person_id;

        public function getPersonId() {
            return $this->person_id;
        }

        public function setPersonId($person_id) {
            $this->person_id = $person_id;
        }
    }
?>