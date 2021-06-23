<!DOCTYPE html>
<html>
  <head>
    <title>Ma page de test</title>
  </head>
  <body>
    
    <?php
        include 'fonctionmysql.php';
        include 'fonctiontable.php';
        $rows = array();
        afficherTableau($rows, getHeaderTable());
    ?>

    <a href=formulaire.php?id=0 >ajouter un produit</a>
  </body>
</html>                                                                                                                