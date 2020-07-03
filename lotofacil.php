<?php
    include "Pages.php";
    include "Loto.php";
    class lotofacil implements Pages{
        public function Geral(){
            $loto = new Loto();
            $loto->requests();
        }
    }

?>