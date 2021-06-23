<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jarditou.css">
    <link rel="stylsheet" media="screen and (max-widht: 576px)" href="jarditou.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
         .button {
            background-color: #1c87c9;
            box-shadow: 0 5px 0 #105cad;
            color: white;
           padding: 1em 1.5em;
           position: relative;
           text-decoration: none;
           display: inline-block;
        }
      </style>
</head>
<body>
<div class="container-fluid">
        <div id="header">
            <img src="Jarditou_photos/jarditou_logo.jpg" id="logo" height="80" width="200" alt="Logo jarditou">
            <div class="float-right">
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

    <img src="Jarditou_photos/promotion.jpg" class="img-fluid" height="auto" width="1900" alt="Promotion">  
    <h1>Saisie d'un nouvel enregistrement</h1>

    <a href="tableau.php"><button>Retour à la liste des produits</button></a>

    <br>
    <br>

    <form action ="script_ajout.php" method="post">

    
    <div>
        <label for="name">Réference :</label>
        <input type="text" id="pro_ref" name="pro_ref" value="">
    </div>
    <div>
        <label for="name">Libelle :</label>
        <input type="text" id="pro_libelle" name="pro_libelle" value="">
    </div>
    <div>
        <label for="name">déscription :</label>
        <input type="text" id="pro_description" name="pro_description" value="">
    </div>
    <div>
        <label for="name">Prix :</label>
        <input type="text" id="pro_prix" name="pro_prix" value="">
    </div>
    <div>
        <label for="name">Stock :</label>
        <input type="text" id="pro_stock" name="pro_stock" value="">
    </div>
    <div>
        <label for="name">Couleur :</label>
        <input type="text" id="pro_couleur" name="pro_couleur" value="">
    </div>
    <div>
        <label for="name">Image :</label>
        <input type="text" id="pro_photo" name="pro_photo" value="">
    </div>
    <div>
        <label for="name">Date d'ajout :</label>
        <input type="text" id="pro_d_ajout" name="pro_d_ajout" value="">
    </div>
    <div>
        <label for="name">Date de Modification :</label>
        <input type="text" id="pro_d_modif" name="pro_d_modif" value="">
    </div>
    <div>
        <label for="name">Bloque :</label>
        <input type="text" id="pro_bloque" name="pro_bloque" value="">
    </div>
    <div>

    <button type="submit" class="button">Ajouter un produit</button>
    </form>
</body>
</html>