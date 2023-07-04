<!DOCTYPE html>

<html>

<head>
    <title> E-Commerce </title>
    <link rel='stylesheet' href='style.css'>
    <meta charset="utf-8" />
</head>

<body>

    <?php

    include_once __DIR__ . "/ProduitsPhysiques/VideoGames.php";
    include_once __DIR__ . "/ProduitsPhysiques/Book.php";
    include_once __DIR__ . "/ProduitsPhysiques/Product.php";
    include_once __DIR__ . "/ProduitsVirtuels/Product.php";
    use ProduitsPhysiques\Book as Book;
    use ProduitsPhysiques\VideoGames as VideoGames;
    use ProduitsVirtuels\Product as VirtualProduct; ?>
    <header>
        <div class="titre">
            <h1 class="titre">MON SITE E-COMMERCE</h1>

            <br>

            <p>Entrez les informations produit ci-après :</p>
        </div>
    </header>

    <div class="selector">

        <div class="container">

            <form action="index.php" method="POST">

                <span id="categorieId" class="form-item" name="categorie">Nouveau Produit</span>

                <input type="hidden" name="categorie" value="VirtualProduct" />

                <input id="prixHTId" class="form-item" name="prixHT" placeholder="Prix HT" />

                <input id="tvaId" class="form-item" name="tva" placeholder="TVA" />

                <input id="nomId" class="form-item" name="nom" placeholder="Nom" />

                <input id="descriptionId" class="form-item" name="description" placeholder="Description" />

                <input class="button" type="submit" name="submit" />

            </form>

        </div>

        <div class="container">

            <form action="index.php" method="POST">

                <span id="categorieId" class="form-item" name="categorie">Livre</span>

                <input type="hidden" name="categorie" value="Book" />

                <input id="prixHTId" class="form-item" name="prixHT" placeholder="Prix HT" />

                <input id="nomId" class="form-item" name="nom" placeholder="Titre" />

                <input id="auteurId" class="form-item" name="auteur" placeholder="Auteur.e" />

                <select id="formatId" class="form-item" name="format" value="">
                    <option value="Petit Format">Petit Format</option>
                    <option value="Grand Format">Grand Format</option>
                </select>

                <input id="stockId" class="form-item" name="stock" placeholder="Stock" />

                <input id="descriptionId" class="form-item" name="description" placeholder="Description" />

                <input class="button" type="submit" name="submit" />

            </form>

        </div>

        <div class="container">

            <form action="index.php" method="POST">

                <span id="categorieId" class="form-item" name="categorie">Jeux Vidéos</span>

                <input type="hidden" name="categorie" value="VideoGames" />

                <input id="prixHTId" class="form-item" name="prixHT" placeholder="Prix HT" />

                <input id="nomId" class="form-item" name="nom" placeholder="Titre" />

                <select id="typeId" class="form-item" name="type" value="">
                    <option value="RPG">RPG</option>
                    <option value="FPS">FPS</option>
                </select>

                <select id="ageMinId" class="form-item" name="ageMin" value="">
                    <option value="12">PEGI 12</option>
                    <option value="16">PEGI 16</option>
                </select>

                <input id="ageClientId" class="form-item" name="ageClient" placeholder="Votre Âge" />

                <input id="moyenneCritId" class="form-item" name="moyenneCrit" placeholder="Moyenne Critiques" />

                <input id="stockId" class="form-item" name="stock" placeholder="Stock" />

                <input id="descriptionId" class="form-item" name="description" placeholder="Description" />

                <input class="button" type="submit" name="submit" />

            </form>

        </div>

    </div>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if ($_POST["categorie"] == "Book") {

            $myProduct = new Book($_POST["prixHT"], $_POST["nom"], $_POST["auteur"], $_POST["format"], $_POST["categorie"], $_POST["stock"], $_POST["description"]);

            $myProduct->displayBook();
            $myProduct->displayBook2();
        }


        if ($_POST["categorie"] == "VideoGames") {

            $myProduct = new VideoGames($_POST["prixHT"], $_POST["nom"], $_POST["type"], $_POST["ageMin"], $_POST["ageClient"], $_POST["moyenneCrit"], $_POST["categorie"], $_POST["stock"], $_POST["description"]);

            echo $myProduct->canBuy($_POST["ageClient"]);
            $myProduct->displayVideoGames();
        }

        if ($_POST["categorie"] == "VirtualProduct") {

            $myProduct = new VirtualProduct($_POST["prixHT"], $_POST["tva"], $_POST["nom"], $_POST["categorie"], $_POST["description"]);

            $myProduct->displayProduct();
        }
    }

    // $myNewProduct = Product::cloneProduct($myProduct, "Produit cloné");
    // $myNewProduct->displayProduct();
    ; ?>

    <footer>
        <p>© Hel 2023</p>
    </footer>

</body>

</html>