//////////////////////////////////////////////
<?php
var_dump($_POST);

// Récupération des informations passées en POST, nécessaires à la modification
$pro_id=$_POST['id'];
$pro_cat_id=$_POST['cat_id']; 
$pro_ref=$_POST['reference'];
$pro_libelle=$_POST['libelle'];
$pro_description=$_POST['description'];
$pro_prix=$_POST['prix'];
$pro_stock=$_POST['stock'];
$pro_couleur=$_POST['couleur'];
$pro_photo=$_POST['photo'];
$pro_d_ajout=$_POST['date ajout'];
$pro_d_modif=$_POST['date modif'];
$pro_bloque=$_POST['bloque'];

// Connexion à la base de données

require "connexion_bdd.php";


try {
 $requete = $db->prepare("INSERT INTO produits (pro_id, pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_photo, pro_d_ajout, pro_d_modif, pro_bloque ) 
 VALUES (:pro_id, :pro_cat_id, :pro_ref, :pro_libelle, :pro_description, :pro_prix, :pro_stock, :pro_couleur, :pro_photo, :pro_d_ajout, :pro_d_modif, :ro_bloque)");

  
 $requete->bindValue(':pro_id', $pro_id, PDO::PARAM_INT);
 $requete->bindValue(':pro_cat_id', $pro_cat_id, PDO::PARAM_INT);
 $requete->bindValue(':pro_ref', $pro_ref, PDO::PARAM_STR);
 $requete->bindValue(':pro_libelle', $pro_libelle, PDO::PARAM_STR);
 $requete->bindValue(':pro_description', $pro_description, PDO::PARAM_STR);
 $requete->bindValue(':pro_prix', $pro_prix, PDO::PARAM_INT);
 $requete->bindValue(':pro_stock', $pro_stock, PDO::PARAM_INT);
 $requete->bindValue(':pro_couleur', $pro_couleur, PDO::PARAM_STR);
 $requete->bindValue(':pro_photo', $pro_photo, PDO::PARAM_STR);
 $requete->bindValue(':pro_d_ajout', $pro_d_ajout, PDO::PARAM_INT);
 $requete->bindValue(':pro_d_modif', $pro_d_modif, PDO::PARAM_INT);
 $requete->bindValue(':pro_bloque', $pro_bloque, PDO::PARAM_BOOL);
 $requete->execute();


// Exécution de la requête
$requete->execute();

// Libération de la connexion au serveur de BDD
$requete->closeCursor();
}
// Gestion des erreurs
catch (Exception $e) {

  echo "La connexion à la base de données a échoué ! <br>";
  echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
  echo "Erreur : " . $e->getMessage() . "<br>";
  echo "N° : " . $e->getCode();
  die("Fin du script");
}

// Redirection vers la page index.php
header("Location: index.php");
exit;


