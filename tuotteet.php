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
    
    <main class="bg-white container-xl">
    
        <div class="prodmenu-cont container-fluid bg-white mt-5 float-md-start border rounded shadow-sm">
        
        <!-- NAVIGATION MENU to filter categories -->
        
            <h5 class="text-left mb-3 mt-3">Kategoriat</h5>

            <nav class="nav flex-column mb-2">
    
                <form action="tuotteet.php" method="post" class="nav-link bg-light my-1">
                    <input class="nav-button bg-light" type="submit" value="Kaikki"/>
                    <input type="hidden" name="category" value="0"/>
                </form>
                
                <form action="tuotteet.php" method="post" class="nav-link bg-light my-1">
                    <input class="nav-button bg-light" type="submit" value="Miehet"/>
                    <input type="hidden" name="category" value="1"/>
                </form>
                
                <form action="tuotteet.php" method="post" class="nav-link bg-light my-1">
                    <input class="nav-button bg-light" type="submit" value="Naiset"/>
                    <input type="hidden" name="category" value="2"/>
                </form>
                
            </nav>
            
        </div>
        
        <!-- PRODUCTS -->
    
        <div class="album py-2 bg-white float-md-start">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-3">
                
                    <?php
                        //if no category chosen, print all products (0)
                        //otherwise print according to category
                        if (!isset($_POST["category"])) {
                            printProducts($products, 0);
                        } else {
                            printProducts($products, $_POST["category"]);
                        }
                    ?>

                </div>
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
