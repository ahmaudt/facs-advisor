<?php
    class Petition
    {
        public $academic_requests;

        public function __construct($academic_requests) {
            $this->academic_requests = array_values(array_filter(array_map('array_filter', $_POST['petition'])));
        }
    }
?>