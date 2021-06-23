<!DOCTYPE html>

<html lang=fr>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="jarditou.css">
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
</body>
</html>
<?php
function afficherTableau($rows, $headers) {
    ?>
<table border="1">
    <tr>
    <?php foreach ($headers as $header): ?>
        <th><?php echo $header; ?></th>
    <?php endforeach; ?>
    </tr>

    <?php foreach ($rows as $row): ?>
        <tr>
        <?php for ($k = 0; $k < count($headers); $k++): ?>
            <?php if ($k == 0){ ?>
                <td><?php echo '<a
                href=formulaire.php?id='.$row
                [$k].' >'.$row[$k].'</a>'; ?></td>
            <?php } else { ?>
                <td><?php echo $row[$k]; ?></td>
            <?php } ?>

        <?php endfor; ?>
        </tr>
    <?php endforeach; ?>
</table>
<?php
}
function getHeaderTable() {
    $headers = array();
    $headers [] = "pro_id";
    $headers [] = "pro_cat_id";
    $headers [] = "pro_ref";
    $headers [] = "pro_libelle";
    $headers [] = "pro_description";
    $headers [] = "pro_prix";
    $headers [] = "pro_stock";
    $headers [] = "pro_couleur";
    $headers [] = "pro_photo";
    $headers [] = "pro_d_ajout";
    $headers [] = "pro_d_modif";
    $headers [] = "pro_bloque";
    return $headers;
}
?>
