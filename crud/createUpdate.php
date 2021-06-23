<?php
    include 'fonctionmysql.php' ;
    include 'fonctiontable.php' ; 
    $action = $_GET["action"];

    if ($action == "DELETE") {
        $pro_id = $_GET["pro_id"]; 
    }else {
        $pro_id = $_GET["pro_id"];
        $pro_cat_id = $_GET["pro_cat_id"];
        $pro_ref = $_GET["pro_ref"];
        $pro_libelle = $_GET["pro_libelle"];
        $pro_description = $_GET["pro_description"];
        $pro_prix = $_GET["pro_prix"];
        $pro_stock = $_GET["pro_stock"];
        $pro_couleur = $_GET["pro_couleur"];
        $pro_photo = $_GET["pro_photo"];
        $pro_d_ajout = $_GET["pro_d_ajout"];
        $pro_d_modif = $_GET["pro_d_modif"];
        $pro_bloque = $_GET["pro_bloque"];
    }
    
    if($action == "CREATE") {
        createProduct($pro_id, $pro_cat_id, $pro_ref, $pro_libelle, $pro_description, $pro_prix, $pro_stock, $pro_couleur, $pro_photo, $pro_d_ajout, $pro_d_modif, $pro_bloque);

        echo "produit cree <br>";
        echo "<a href='index.php'>Liste des produits</a>";

    
    }
    
    if ($action == "UPDATE") {
        updateProduct($pro_id, $pro_cat_id, $pro_ref, $pro_libelle, $pro_description, $pro_prix, $pro_stock, $pro_couleur, $pro_photo, $pro_d_ajout, $pro_d_modif, $pro_bloque);
        echo "Produit modifier <br>";
        echo "<a href='index.php'>Liste des produits</a>";
    }

    if ($action == "DELETE") {
        deleteUser($pro_id);
        echo "Produit supprimer <br>";
        echo "<a href='index.php'>Liste des produits</a>";
    }
    

?>