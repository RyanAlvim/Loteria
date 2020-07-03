<?php
include "Pages.php";
include "Time.php";
    class timemania implements Pages{
        public function Geral(){
            $a = new Time();
            $a->requests();
        }
    }

?>