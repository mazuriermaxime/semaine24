<?php

function getDatabaseConnexion(){
    try {
        $user = "root";
        $pass = "";
        $pdo = new PDO('mysql:host=localhost;dbname=jarditou', $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;

    }catch (PDOExecption $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    function getAllProduct(){
    $con = getDatabaseConnexion();
    $requete = 'SELECT * FROM produits';
    $rows = $con->query($requete);
    


    }   
}

function readProduct($pro_id){
    $con = getDatabaseConnexion();
    $requete = "SELECT * FROM produits where pro_id = '$pro_id'";
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    if(!empty($row)) {
        return $row[0];
    }
}

function createProduct($pro_id, $pro_cat_id, $pro_ref, $pro_libelle, $pro_description, $pro_prix, $pro_stock, $pro_couleur, $pro_photo, $pro_d_ajout, $pro_d_modif, $pro_bloque){
    try{
    $con = getDatabaseConnexion();
    $sql = "INSERT INTO produits (pro_id, pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_photo, pro_d_ajout, pro_d_modif, pro_bloque)
            VALUE ('$pro_id', '$pro_cat_id', '$pro_ref', '$pro_libelle', '$pro_description', '$pro_prix', '$pro_stock', '$pro_couleur', '$pro_photo', '$pro_d_ajout', '$pro_d_modif', '$pro_bloque')";
            $con->exec($sql);
    }
    catch(PDOExecption $e) {
    echo $sql . "<br>" . $e->getMessage();
}
}
function updateProduct($pro_id, $pro_cat_id, $pro_ref, $pro_libelle, $pro_description, $pro_prix, $pro_stock, $pro_couleur, $pro_photo, $pro_d_ajout, $pro_d_modif, $pro_bloque){
    try{
        $con = getDatabaseConnexion();
        $requete = "UPDATE produits set
                    pro_id = '$pro_id',
                    pro_cat_id = '$pro_cat_id',
                    pro_ref = '$pro_ref',
                    pro_libelle = '$pro_libelle',
                    pro_description = '$pro_description',
                    pro_stock = '$pro_stock',
                    pro_couleur = '$pro_couleur',
                    pro_photo = '$pro_photo',
                    pro_d_ajout = '$pro_d_ajout',
                    pro_d_modif = '$pro_d_modif',
                    pro_bloque = '$pro_bloque' ";
        $stmt = $con->query($requete);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

}

function deleteUser($pro_id){
    try{
        $con = getDatabaseConnexion();
        $requete = "DELETE from produits where pro_id = '$pro_id' ";
        $stmt = $con->query($requete);
    }
    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    } 
}

function getNewProduct() {
    $product['id'] = "";
    $product['Réference'] = "";
    $product['Libelle'] = "";
    $product['Déscription'] = "";
    $product['Prix'] = "";
    $product['Stock'] = ""; 
    $product['Couleur'] = "";
    $product['Image'] = "";
    $product['Date ajout'] = "";
    $product['Date de Modification'] = "";
    $product['Bloque'] = "";
}
?>
