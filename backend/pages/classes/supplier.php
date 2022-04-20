<?php 
    class Supplier extends Person {
        private $company_name;
        private $person_id;
        private $fax;
        private $website;

        public function __construct($company_name, $person_id, $fax, $website) {
            $this->company_name = $company_name;
            $this->person_id = $person_id;
            $this->fax = $fax;
            $this->website = $website;
        }

        public function getCompanyName() {
            return $this->company_name;
        }

        public function setCompanyName($company_name) {
            $this->company_name = $company_name;
        }

        public function getPersonId() {
            return $this->person_id;
        }

        public function setPersonId($person_id) {
            $this->person_id = $person_id;
        }

        public function getFax() {
            return $this->fax;
        }

        public function setFax($fax) {
            $this->fax = $fax;
        }

        public function getWebsite() {
            return $this->website;
        }

        public function setWebsite($website) {
            $this->website = $website;
        }
    }
?>