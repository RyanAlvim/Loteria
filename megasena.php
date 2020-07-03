<?php
include "Pages.php";
include "Mega.php";
    class megasena implements Pages{
        public function Geral(){
            $a = new Mega();
            $a->requests();
        }
    }

?>