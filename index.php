<?php
session_start();
//session_destroy();
require 'modal.php';
  
require_once 'fonctions.php';
if (isset($_GET['Boisson'])) {
  if(isset($_SESSION['commande'])){
      $commande= $_SESSION['commande'];
      $count =count($commande, COUNT_RECURSIVE)+1;
      echo $count;
  }
  $commande['boisson'][$count] = $_GET['Boisson'];
  $commande['repas'][$count] = ($_GET['repas']);
  
  
  $_SESSION['commande'] = $commande;
    // var_dump($commande);
  echo $count;
header('Location:redirectForCommandes.php');
} else
{
    $_GET['Boisson'] = "";
    
    
}
 
    //echo $commande['boisson'][0];
    

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Foodriders</title>      
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function () {
                $('#drinkModal').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget);// Button that triggered the modal
                    var choice = button.data('meal'); // Extract info from data-* attributes                    
                    var modal = $(this);
                    modal.find('#meal').val(choice);
                });
            });



        </script>
    </head>
    <body>

        <div class="header">          
            <img class="img_header" src="img/logo.png" alt=""/>              
        </div>
        <div class="body">
            <div class="container">
                <div class="col-md-5 left">
                    <div class="wrap-menu">
                        <h2 class="category-item">
                            <span> Hamburger</span>
                            <i class="ic-cate"></i>
                        </h2>
                    </div>
                    <?php
                    $dbb = getConnection();
                    $q = $dbb->prepare("SET NAMES utf8");
                    $q->execute();
                    $result = $dbb->prepare("SELECT * FROM nourriture WHERE categorie = 'Menu'");
                    $result->execute();
                    while ($row = $result->fetchAll(PDO::FETCH_ASSOC)) {
                        foreach ($row as $ligne) {
                            ?>

                            <div class="row-menu-wrap">
                                <div class="row-menu">
                                    <?php
                                    echo '<p class="item-menu">' . $ligne["nomPlat"] . '</p>
                                    <span href="#" class="item-prise">10.-</span>
                                    <button class="btn" name="' . $ligne["nomPlat"] . '" data-toggle="modal" data-target="#drinkModal" id="addMenu" data-meal="' . $ligne["nomPlat"] . '">Ajouter</button>';
                                    ?>
                                </div>
                                <span class="red-line"></span>
                            </div>
                            <?php
                        }
                    }
                    ?>



                </div>
            </div>
        </div>

    </div>
</div>
<footer>
    <div class="footer">
        <img class="img_footer" src="img/logo.png" alt=""/>
        test
    </div>
</footer>
</body>
</html>