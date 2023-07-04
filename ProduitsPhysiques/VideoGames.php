<?php

namespace ProduitsPhysiques;

include_once __DIR__ . "/Product.php";
include_once __DIR__ . "/IProduct.php";

class VideoGames extends Product
{

    protected $type;
    protected $ageMin;
    protected $ageClient;
    protected $moyenneCrit;

    public function canBuy($ageClient)
    {
        if ($ageClient >= $this->ageMin) {
            return "<span class=\"OK\">Achat Autorisé</span>";
        } else {
            return "<span class=\"NON\">Achat Non Authorisé</span>";
        }
    }

    public function __construct($prixHT, $nom, $type, $ageMin, $ageClient, $moyenneCrit, $categorie, $stock, $description)
    {

        parent::__construct($prixHT, 20, $nom, $categorie, $stock, $description);

        $this->type = $type;
        $this->ageMin = $ageMin;
        $this->ageClient = $ageClient;
        $this->moyenneCrit = $moyenneCrit;

    }
    public function displayVideoGames()
    {

        echo "<h2 class=\"votreProduit\">Votre Produit :</h2>";

        echo "<div class=\"display\">";

        echo "<p> <u>Prix HT :</u> " . $this->getPrixHT() . " €</p>";

        echo "<p> <u>TVA :</u> " . $this->tva . " %</p>";

        echo "<p> <u>Prix TTC :</u> " . $this->getPrixTTC() . " €</p>";

        echo "<p> <u>Titre :</u> " . $this->nom . "</p>";

        echo "<p> <u>Genre :</u> " . $this->type . "</p>";

        echo "<p> <u>Âge Minimum :</u> " . $this->ageMin . "</p>";

        echo "<p> <u>Votre Âge :</u> " . $this->ageClient . "</p>";

        echo "<p> <u>Moyenne Critiques :</u> " . $this->moyenneCrit . "</p>";

        echo "<p> <u>Type :</u> " . $this->type . "</p>";

        echo "<p> <u>Stock :</u> " . $this->stock . "</p>";

        echo "<p> <u>Description :</u> " . $this->description . "</p>";

        echo "<p> <u>Valeur du Stock :</u> " . $this->getValorisation() . "</p>";

        echo "</div>";
    }
}

?>