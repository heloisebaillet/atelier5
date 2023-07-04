<?php

namespace ProduitsPhysiques;

include_once __DIR__ . "/Product.php";
include_once __DIR__ . "/IProduct.php";

class Book extends Product
{

    protected $auteur;
    protected $format;

    public function __construct($prixHT, $nom, $auteur, $format, $categorie, $stock, $description)
    {

        parent::__construct($prixHT, 5.5, $nom, $categorie, $stock, $description);

        $this->auteur = $auteur;
        $this->format = $format;
    }

    public function displayBook()
    {

        echo "<h2 class=\"votreProduit\">Votre Produit :</h2>";

        echo "<div class=\"display\">";

        echo "<p> <u>Titre :</u> " . $this->nom . "</p>";

        echo "<p> <u>Auteur.e :</u> " . $this->auteur . "</p>";

        echo "<p> <u>Description :</u> " . $this->description . "</p>";

        echo "</div>";
    }

    public function displayBook2()
    {

        echo "<h2 class=\"votreProduit\">Votre Produit :</h2>";

        echo "<div class=\"display\">";

        echo "<p> <u>Prix HT :</u> " . $this->getPrixHT() . " €</p>";

        echo "<p> <u>TVA :</u> " . $this->tva . " %</p>";

        echo "<p> <u>Prix TTC :</u> " . $this->getPrixTTC() . " €</p>";

        echo "<p> <u>Titre :</u> " . $this->nom . "</p>";

        echo "<p> <u>Auteur.e :</u> " . $this->auteur . "</p>";

        echo "<p> <u>Format :</u> " . $this->format . "</p>";

        echo "<p> <u>Catégorie :</u> " . $this->categorie . "</p>";

        echo "<p> <u>Stock :</u> " . $this->stock . "</p>";

        echo "<p> <u>Description :</u> " . $this->description . "</p>";

        echo "<p> <u>Valeur du Stock :</u> " . $this->getValorisation() . "</p>";

        echo "</div>";
    }
}

?>