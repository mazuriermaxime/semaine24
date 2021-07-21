<!-- <!doctype html> -->

<?php
//include("connexion_bdd.php");
include("header.php");
// <!-- titre de la page -->
?>


<div class="row shadow mt-3 mb-3 mx-0 p-3 rounded bg-dark">
  <div class="col-md-2 text white-50 text-right"></div>
  <div class="col-md-8 h2 text-white-50 text-center">Tableau</div>
  <div class="col-2 text-center">
  <a class="text-white-50 nav-link" href="produits_ajout.php">Ajouter un produit</a>
  </div>
</div>


<!-- Tableau -->
            <div class="row">
                <div class="col-12 col-md-12">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <tr class="table-secondary">
                        <th class="w-25">Photo</th>
                        <th>ID</th>
                        <th>Réference</th>
                        <th>Libellé</th>
                        <th>Prix</th>
                        <th>Stock</th>
                        <th>Couleur</th>
                        <th>Ajout</th>
                        <th>Modif</th>
                        <th>Bloqué</th>
                    </tr>   
                    </thead>
                    <tbody> 
            </div>
                </div>
                    </div>
                    <?php
    require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
    $db = connexionBase(); // Appel de la fonction de connexion
    $requete = "SELECT * FROM produits";

    $result = $db->query($requete);

    if (!$result) 
    {
        $tableauErreurs = $db->errorInfo();
        echo $tableauErreur[2]; 
        die("Erreur dans la requête");
    }

    if ($result->rowCount() == 0) 
    {
       // Pas d'enregistrement
       die("La table est vide");
    }
    while ($row = $result->fetch(PDO::FETCH_OBJ))
    {
        // echo"<tr>";
        // echo"<td>".$row->pro_id."</td>";
        // echo"<td>".$row->pro_cat_id."</td>";
        // echo"<td>".$row->pro_ref."</td>";
        // echo '<td><a href="detail.php?id='.$row->pro_id.'" title='.$row->pro_libelle.'>'.$row->pro_libelle.'</a></td>';
        // echo"</tr>";


        echo '<tr class="bg-warning">';
        echo '<td><img src="images/produits/png'.$row->pro_id.'.png" class="img-fluid" alt="Image responsive"></td>';
        echo "<td>".$row->pro_id."</td>";
        echo "<td>".$row->pro_ref."</td>";
        echo '<td><a href="detail.php?id='.$row->pro_id.'" title='.$row->pro_libelle.'>'.$row->pro_libelle.'</a></td>';
        echo "<td>".$row->pro_prix."</td>";
        echo "<td>".$row->pro_stock."</td>";
        echo "<td>".$row->pro_couleur."</td>";
        echo "<td>".$row->pro_d_ajout."</td>";
        echo "<td>".$row->pro_d_modif."</td>";
        $bloque = "";
        if(($row->pro_bloque)==1)
        {
            $bloque="bloqué";
            echo '<td><p class="bg-danger text-white">'.$bloque."</p></td>";
        }
        else
        {
            echo "<td>".$bloque."</td>";
        }
        
        // <td>7</td>
        // <td>Barbecues</td>
        // <td>Aramis</td>
        // <td>110.00€</td>
        // <td>Brun</td>
    echo "</tr>";









    }

     
    ?>



                    










                   
                    </tbody>        
                    </table>
                  </div>
                </div>            
            </div>
<?php 
    include("footer.php");
?> 
 