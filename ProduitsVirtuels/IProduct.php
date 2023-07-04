<?php

namespace ProduitsVirtuels;

interface IProduct
{
    public function getPrixTTC();
    public function getPrixHT();
    public function displayProduct();
}

?>