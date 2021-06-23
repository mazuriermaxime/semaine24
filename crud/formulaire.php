<?php
    include 'fonctionmysql.php' ;
    include 'fonctiontable.php' ;

    $pro_id = $_GET["id"];
    if ($pro_id == 0) {
        $user = getNewProduct();
        $action = "CREATE";
        $libelle = "Creer";
    } else {
        $user = readProduct($pro_id);
        $action = "UPDATE";
        $libelle = "Mettre à jour";
    }
?>

<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="C:\wamp64\www\jarditou">
    <link rel="stylsheet" media="screen and (max-widht: 576px)" href="jarditou.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>jarditou</title>
</head>
<body>
<div class="container-fluid">
        <header>
            <!--Balise sémantiques organise et controle son code(header)-->
            <div class="d-none d-md-block">
                <div class="row justify-content-between">
                    <div class="col-sm-0 col-md-4">
                        <img src="..\jarditou_photos\jarditou_logo" alt="logo" class="img-fluid" title="logo">
                    </div>
                    <div class="col-sm-0 col-md-4">
                        <h1 class="align-text-bottom" style="color:darkgreen">Tout le jardin</h1>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Jarditou.com</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                        <li class="nav-item">
                            <a class="nav-link" href="tableau.php">Tableau</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
                        </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="Votre promotion" placeholder="Votre promotion" aria-label="Votre promotion">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
            </div>
        </nav>

        <img src="../jarditou_photos/promotion.jpg" class="Promotion" height="auto" width="1900" alt="Promotion">

<form action="createUpdate.php" method="get">
<p>
    <a href="index.php">Liste des produits</a>

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
</p>
</form>
</body>
</html>