<?php 
    include('person.php');

    class Employee extends Person {
        public int $person_id;
        public int $position_id;
        public string $hire_date;

        public function __construct(object $obj) {
            $this->person_id = $obj->person_id;
            $this->position_id = $obj->position_id;
            $this->hire_date = $obj->hire_date;
        }
    }
?>