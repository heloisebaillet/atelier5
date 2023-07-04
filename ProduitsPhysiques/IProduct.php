<?php

namespace ProduitsPhysiques;

interface IProduct
{
    public function getValorisation();
    public function getPrixTTC();
    public function getPrixHT();
    public function displayProduct();
}

?>