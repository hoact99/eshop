<?php 
    class Customer extends Person {
        public int $person_id;

        public function __construct(object $obj) {
            $this->person_id = $obj->person_id;
        }
    }
?>