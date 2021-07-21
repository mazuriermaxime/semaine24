<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification</title>
</head>
<body>
<h1> Modification :</h1>
<?php 
require "connexion_bdd.php";

$pro_id=$_GET['pro_id'];

// Construction de la requête
$requete = "SELECT * FROM produits WHERE pro_id=".$pro_id;
$result = $db->query($requete);

// Si la requête renvoit un seul et unique résultat, on ne fait pas de boucle !
 $row = $result->fetch(PDO::FETCH_OBJ); 

// Libération de la connexion au serveur de BDD
$result->closeCursor();
?>
<a href="modif.php?pro_id=<?php echo $row->pro_id ?>">Modifier</a>
<form action ="script_modif.php" method="post">

<input type="hidden" name="pro_id" value="<?php echo $user['pro_id']; ?>"/>
        <input type="hidden" name="action" value="<?php echo $action; ?>"/>
    <div>
        <label for="name">Réference :</label>
        <input type="text" id="pro_ref" name="pro_ref" value="<?php echo $user['pro_ref']; ?>">
    </div>
    <div>
        <label for="name">Libelle :</label>
        <input type="text" id="pro_libelle" name="pro_libelle" value="<?php echo $user['pro_libelle']; ?>">
    </div>
    <div>
        <label for="name">déscription :</label>
        <input type="text" id="pro_description" name="pro_description" value="<?php echo $user['pro_description']; ?>">
    </div>
    <div>
        <label for="name">Prix :</label>
        <input type="text" id="pro_prix" name="pro_prix" value="<?php echo $user['pro_prix']; ?>">
    </div>
    <div>
        <label for="name">Stock :</label>
        <input type="text" id="pro_stock" name="pro_stock" value="<?php echo $user['pro_stock']; ?>">
    </div>
    <div>
        <label for="name">Couleur :</label>
        <input type="text" id="pro_couleur" name="pro_couleur" value="<?php echo $user['pro_couleur']; ?>">
    </div>
    <div>
        <label for="name">Image :</label>
        <input type="text" id="pro_photo" name="pro_photo" value="<?php echo $user['pro_photo']; ?>">
    </div>
    <div>
        <label for="name">Date d'ajout :</label>
        <input type="text" id="pro_d_ajout" name="pro_d_ajout" value="<?php echo $user['pro_d_ajout']; ?>">
    </div>
    <div>
        <label for="name">Date de Modification :</label>
        <input type="text" id="pro_d_modif" name="pro_d_modif" value="<?php echo $user['pro_d_modif']; ?>">
    </div>
    <div>
        <label for="name">Bloque :</label>
        <input type="text" id="pro_bloque" name="pro_bloque" value="<?php echo $user['pro_bloque']; ?>">
    </div>
    <div>
    <div class="button"></div>
        <button typ="submit"><?php echo $libelle; ?></button>
    </div>
    <br>

    <input type="submit" value="Valider les modifications">
</form>

</body>
</html>