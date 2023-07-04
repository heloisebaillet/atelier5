<?php

namespace ProduitsPhysiques;

include_once __DIR__ . "/IProduct.php";

use ProduitsPhysiques\IProduct;

// On créer un prototype de produit avec ses attributs et leur niveau de confidentialité
abstract class Product implements IProduct
{
    protected $prixHT;
    public $tva;
    protected $prixTTC;
    public $nom;
    public $categorie;
    public $stock;
    public $description;
    protected $valorisation;

    public function __construct($prixHT, $tva, $nom, $categorie, $stock, $description)
    {
        $this->prixHT = $prixHT;
        $this->tva = $tva;
        $this->nom = $nom;
        $this->categorie = $categorie;
        $this->stock = $stock;
        $this->description = $description;

    }

    public function getValorisation()
    {
        if ($this->stock > 0) {

            return ($this->stock * $this->prixHT . "€");
        }
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

        echo "<p> <u>Stock :</u> " . $this->stock . "</p>";

        echo "<p> <u>Description :</u> " . $this->description . "</p>";

        echo "<p> <u>Valeur du Stock :</u> " . $this->getValorisation() . "</p>";

        echo "</div>";
    }

    // public static function cloneProduct($myNewProduct, $cloneProduct)
    // {
    //     return new Product(
    //         $myNewProduct->prixHT * 2,
    //         $myNewProduct->tva,
    //         $cloneProduct,
    //         $myNewProduct->categorie,
    //         $myNewProduct->stock,
    //         ""
    //     );
    // }
}

?>