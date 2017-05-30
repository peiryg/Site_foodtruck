<!DOCTYPE html>
﻿<?php
require_once 'fonctions.php';

?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet" type="text/css"/>

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Index</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <!-- Modal -->
        <div class="modal fade" id="drinkModal" tabindex="-1" role="dialog" aria-labelledby="drinkModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h1 style="font-size: 40pt;text-align:center;">Ajouter</h1>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <?php
                            $dbb = getConnection();
                            $q = $dbb->prepare("SET NAMES utf8");
                            $q->execute();
                            $result = $dbb->prepare("SELECT * FROM nourriture WHERE categorie = 'Boisson'");
                            $result->execute();
                            while ($row = $result->fetchAll(PDO::FETCH_ASSOC)) {
                                foreach ($row as $ligne) {
                                    echo'<input type="radio" name="Boisson" value="' . $ligne["nomPlat"] . '">' . $ligne["nomPlat"] . '<br>';
                                }
                            }
                            ?>



                            <input type="hidden" id="meal" name="repas" value=""/>
   <!--                          <input type="text" name="username" placeholder="Nom pour la commande"></input><br><br>
                           <p>Heure désirée</p>
                            <select>
                                <option value="0">12:00 am</option>
                                <option value="1">1:00 am</option>
                                <option value="2">2:00 am</option>
                                <option value="3">3:00 am</option>
                                <option value="4">4:00 am</option>
                                <option value="5">5:00 am</option>
                                <option value="6">6:00 am</option>
                                <option value="7">7:00 am</option>
                                <option value="8">8:00 am</option>
                                <option value="9">9:00 am</option>
                                <option value="10">10:00 am</option>
                                <option value="11">11:00 am</option>
                                <option value="12">12:00 pm</option>
                                <option value="13">1:00 pm</option>
                                <option value="14">2:00 pm</option>
                                <option value="15">3:00 pm</option>
                                <option value="16">4:00 pm</option>
                                <option value="17">5:00 pm</option>
                                <option value="18">6:00 pm</option>
                                <option value="19">7:00 pm</option>
                                <option value="20">8:00 pm</option>
                                <option value="21">9:00 pm</option>
                                <option value="22">10:00 pm</option>
                                <option value="23">11:00 pm</option>
                            </select>-->
                            <input type="submit" name="confirmer" class="btn" value="Confirmer"></input>
                        </form>
<?php
if (isset($_POST['confirmer'])) {
    
}
?>

                    </div>
                    <div class="modal-footer" style="text-align: center;">

                        &copy Foodriders

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>