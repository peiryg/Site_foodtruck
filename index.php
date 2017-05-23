<?php
require 'modal.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Foodriders</title>      
        <!-- Bootstrap -->

        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
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
                            <span>Hamburgers</span>
                            <i class="ic-cate"></i>
                        </h2>
                        <div class="row-menu-wrap">
                            <div class="row-menu">
                                <p class="item-menu">Cheese</p>
                                <span href="#" class="item-prise">10.-</span>
                                <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Ajouter</button>
                            </div>
                            <span class="red-line"></span>
                        </div>
                        <div class="row-menu-wrap">
                            <div class="row-menu">
                                <p class="item-menu">Cheese</p>
                                <span href="#" class="item-prise">10.-</span>
                                <button class="btn">Ajouter</button>
                            </div>
                            <span class="red-line"></span>
                        </div><div class="row-menu-wrap">
                            <div class="row-menu">
                                <p class="item-menu">Cheese</p>
                                <span href="#" class="item-prise">10.-</span>
                                <button class="btn">Ajouter</button>
                            </div>
                            <span class="red-line"></span>
                        </div><div class="row-menu-wrap">
                            <div class="row-menu">
                                <p class="item-menu">Cheese</p>
                                <span href="#" class="item-prise">10.-</span>
                                <button class="btn">Ajouter</button>
                            </div>
                            <span class="red-line"></span>
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