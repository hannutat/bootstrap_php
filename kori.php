<?php
    session_start();

    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }
?>

<!DOCTYPE html>
<html lang="fi">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link href="styles.css" rel="stylesheet" type="text/css">
    
    <title>Vaatekauppa</title>
  </head>
  
  <body>
  
  <?php
    require 'funktiot.php';
    printHeaderMenu();
  ?>
    
    <!-- SHOPPING CART -->
    
    <main class="bg-white container-xl">
        <div class="container cart-cont mt-5">
            <div class="row align-items-center">
                <div class="col-sm-0 col-md-1 col-lg-2"></div>
                <div class="col-lg-8">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">Ostoskori</h4>
                    
                    <?php
                        //handle cart POST actions buy, del & del_all
                        if ($_POST["act"] == "buy") {
                            addToCart($_POST["product"]);
                            echo '<p class="cart-note">Tuote lisättiin ostoskoriin</p>';
                        }
                        
                        if ($_POST["act"] == "del") {
                            removeFromCart($products, $_POST["product"]);
                            echo '<p class="cart-note">Tuote poistettiin ostoskorista</p>';
                        }
                        
                        if ($_POST["act"] == "del_all") {
                            removeAll();
                            echo '<p class="cart-note">Ostoskori tyhjennettiin</p>';
                        }
                        
                        //print message if cart is empty, else print each shopping cart line
                        if (count($_SESSION["cart"]) == 0) {
                            echo "<p>Ostoskori on tyhjä!</p>";
                        } else {
                            echo '<ul class="list-group mb-3">';
                            
                            foreach($_SESSION["cart"] as $prod_id => $qty) {
                                printCartLine($products, $prod_id, $qty);
                            }
                            
                            //print an empty line, and total after that
                            echo '
                                        <li class="row">
                                            <div class="col-8 p-2"></div>
                                            <div class="col-2"></div>
                                            <div class="col-2"></div>
                                        </li> ';
                            
                            printTotal($products);
                            echo "</ul>";
                        }
                    ?>
                
                </div>
                <div class="col-sm-0 col-md-1 col-lg-2"></div>
 
            </div>
        </div>
        
        <div style="clear: both;"></div>
        
    </main>
    
    <footer class="bg-light text-center lh-md fixed-bottom container-fluid">
        <p>Copyright Vaatekauppa 2021</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
  </body>
  
</html>
