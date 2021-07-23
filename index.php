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
    
    //empty cart if returning to front page after completing checkout
    if (isset($_POST["act"])) {
        if ($_POST["act"] == "completed") {
            removeAll();
        }
    }
  ?>
  
    <main class="bg-white container-xl">
    
        <!-- CAROUSEL -->
        
        <div id="topcarousel" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#topcarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#topcarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#topcarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="white"/></svg>

                    <div class="container">
                        <div class="carousel-caption text-start text-dark">
                            <h3>Kanta-asiakasohjelma</h3>
                            <p>Kanta-asiakkaillemme jopa 50% alennuksia normaalihinnoista!</p>
                            <p><a class="btn btn-outline-primary" href="#" data-bs-toggle="modal" data-bs-target="#signup">Rekisteröidy nyt</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="white"/></svg>

                    <div class="container">
                        <div class="carousel-caption text-dark">
                            <h3>Kevään trendit</h3>
                            <p>Lue kevään kuumimmat pukeutumisvinkit blogistamme!</p>
                            <p><a class="btn btn-outline-primary" href="blogi.php">Blogiin</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="white"/></svg>

                    <div class="container">
                        <div class="carousel-caption text-end text-dark">
                            <h3>Uusia tuotteita varastossa</h3>
                            <p>Varastomme pursuaa nyt kevään uutuuksia joka makuun!</p>
                            <p><a class="btn btn-outline-primary" href="tuotteet.php">Tuotteisiin</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#topcarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#topcarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <!-- PRODUCTS -->
  
        <div class="album py-2 bg-white float-md-start">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-3">
                
                    <?php
                        printFrontPageProducts($products);
                    ?>

                </div>
            </div>
        </div>
        
        <!-- BLOG POSTS -->
        
        <div class="blog-cont container-fluid bg-white mt-3 float-md-end">
        
            <h4 class="text-center mb-3">Uusimmat blogipostaukset</h4>
            
            <div class="row mb-2">
                <div class="col-md-1">
                </div>
                
                <div class="col-md-10">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h5 class="mb-0">Efficitur in lorem a volutpat. Phasellus non sem molestie, semper lectus at, malesuada ipsum.</h5>
                            <div class="mb-1 text-muted">23.03.2016</div>
                            <p class="card-text mb-auto">Fusce et risus ut justo volutpat feugiat. Sed leo ipsum, porta eget dolor dapibus, blandit vestibulum risus. Pellentesque eu faucibus est. Vestibulum ac sodales velit, vitae tincidunt leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse in malesuada ante.</p>
                            <a href="blogi.php#post1" class="stretched-link">Jatka lukemista</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-2">
                <div class="col-md-1">
                </div>
                
                <div class="col-md-10">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h5 class="mb-0">Pellentesque pulvinar sapien tellus, mollis gravida magna fringilla sed.</h5>
                            <div class="mb-1 text-muted">16.03.2016</div>
                            <p class="card-text mb-auto">Fusce ornare semper nulla eget varius. Nulla auctor turpis in nisi bibendum dignissim. Maecenas in fermentum justo. Nullam eget erat id velit fermentum suscipit. Fusce porta magna vitae felis tempor, eget bibendum justo mollis.</p>
                            <a href="blogi.php#post2" class="stretched-link">Jatka lukemista</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        </div>
                    </div>
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
