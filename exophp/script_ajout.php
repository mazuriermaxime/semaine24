//////////////////////////////////////////////
<?php
var_dump($_POST);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jarditou";

// Récupération des informations passées en POST, nécessaires à la modification
$pro_id=$_POST['id'];
$pro_cat_id=$_POST['cat_id']; ²
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

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
  $stmt = $conn->prepare("INSERT INTO produits (pro_id, pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_photo, pro_d_ajout, pro_d_modif, pro_bloque ) 
  VALUES (:pro_id, :pro_cat_id, :pro_ref, :pro_libelle, :pro_description, :pro_prix, :pro_stock, :pro_couleur, :pro_photo, :pro_d_ajout, :pro_d_modif, :ro_bloque)");
  $stmt->bindParam(':pro_id', $pro_id);
  $stmt->bindParam(':pro_cat_id', $pro_cat_id);
  $stmt->bindParam(':pro_ref', $pro_ref);
  $stmt->bindParam(':pro_libelle', $pro_libelle);
  $stmt->bindParam(':pro_description', $pro_description);
  $stmt->bindParam(':pro_prix', $pro_prix);
  $stmt->bindParam(':pro_stock', $pro_stock);
  $stmt->bindParam(':pro_couleur', $pro_couleur);
  $stmt->bindParam(':pro_photo', $pro_photo);
  $stmt->bindParam(':pro_d_ajout', $pro_d_ajout);
  $stmt->bindParam(':pro_d_modif', $pro_d_modif);
  $stmt->bindParam(':pro_bloque', $pro_bloque);
  $stmt->execute();

  
  echo "ajout bien réaliser!!!";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>

