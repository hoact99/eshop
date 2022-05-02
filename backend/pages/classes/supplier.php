<?php 
    class Supplier extends Person {
        public string $company_name;
        public int $person_id;
        public string $fax;
        public string $website;

        public function __construct(object $obj) {
            $this->company_name = $obj->company_name;
            $this->person_id = $obj->person_id;
            $this->fax = $obj->fax;
            $this->website = $obj->website;
        }
    }
?>