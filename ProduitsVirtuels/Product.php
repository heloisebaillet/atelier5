<?php

namespace ProduitsVirtuels;

include_once __DIR__ . "/IProduct.php";

use ProduitsVirtuels\IProduct;

class Product implements IProduct
{
    protected $prixHT;
    public $tva;
    protected $prixTTC;
    public $nom;
    public $categorie;
    public $description;

    public function __construct($prixHT, $tva, $nom, $categorie, $description)
    {
        $this->prixHT = $prixHT;
        $this->tva = $tva;
        $this->nom = $nom;
        $this->categorie = $categorie;
        $this->description = $description;

    }

    public function getPrixHT()
    {
        return ($this->prixHT);
    }

    public function getPrixTTC()
    {
        return ($this->prixTTC = ($this->prixHT * (1 + ($this->tva / 100))));
    }

    public function displayProduct()
    {

        echo "<h2 class=\"votreProduit\">Votre Produit :</h2>";

        echo "<div class=\"display\">";

        echo "<p> <u>Prix HT :</u> " . $this->getPrixHT() . " €</p>";

        echo "<p> <u>TVA :</u> " . $this->tva . " %</p>";

        echo "<p> <u>Prix TTC :</u> " . $this->getPrixTTC() . " €</p>";

        echo "<p> <u>Nom :</u> " . $this->nom . "</p>";

        echo "<p> <u>Catégorie :</u> " . $this->categorie . "</p>";

        echo "<p> <u>Description :</u> " . $this->description . "</p>";

        echo "</div>";
    }
}

?>