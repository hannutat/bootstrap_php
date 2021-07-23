    
<?php

        //create array holding products
        $products = array("prod1" => "m#Miesten vyö 40mm#19#kuva1.jpg", 
                            "prod2" => "m#Miesten harmaa t-paita#29#kuva3.jpg", 
                            "prod3" => 'm#Miesten t-paita "gazelio"#37#kuva5.jpg', 
                            "prod4" => "m#Miesten valkoinen t-paita#29#kuva7.jpg",
                            "prod5" => "m#Miesten punainen t-paita#34#kuva8.jpg", 
                            "prod6" => 'm#Miesten t-paita "bookshelf"#39#kuva9.jpg',
                            "prod7" => "n#Naisten vaalea paita#39#kuva2.jpg", 
                            "prod8" => "n#Naisten raidallinen paita#45#kuva4.jpg",
                            "prod9" => "n#Naisten juhlava mekko#119#kuva6.jpg", 
                            "prod10" => "n#Naisten talvitakki#129#kuva10.jpg",
                            "prod11" => "n#Naisten farkkutakki#89#kuva11.jpg");
    
    //function to print header incl. navigation
    function printHeaderMenu() {
        echo '
            <header class="p-3 bg-light text-dark">
                    <div class="container">
                        
                        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                            <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0">
                                <img src="img/suit-logo.png" alt="Kaupan logo" class="img-fluid img-logo me-5"/>
                            </a>
                            
                            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                                <li><a href="index.php" class="nav-link px-2 link-primary">Etusivu</a></li>
                                <li><a href="tuotteet.php" class="nav-link px-2 link-primary">Tuotteet</a></li>
                                <li><a href="blogi.php" class="nav-link px-2 link-primary">Blogi</a></li>
                                <li><a href="yhteys.php" class="nav-link px-2 link-primary">Yhteydenotto</a></li>
                            </ul>
                            
                            <div class="nav text-end">
                                <a href="kori.php" class="d-inline nav-link link-primary">Ostoskori</a>
                            </div>
                            
                            <div class="text-end">
                                <button type="button" class="btn btn-outline-dark me-2" data-bs-toggle="modal" data-bs-target="#login">Kirjaudu</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup">Rekisteröidy</button>
                            </div>
                            
                            <!-- SIGNUP / LOGIN MODALS -->
                            
                            <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginlabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="loginlabel">Sisäänkirjautuminen</h5>
                                        </div>
                                        <div class="modal-body">
                                            Tervetuloa takaisin!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Kiitos!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="signuplabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="signuplabel">Uusi asiakas</h5>
                                        </div>
                                        <div class="modal-body">
                                            Tervetuloa asiakkaaksi!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Kiitos!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </header> ';
    }
    
    //function to print a single product
    function printProduct($product, $prod_id) {
        //split product string
        $string_arr = explode("#", $product);
        
        //print product box
        echo '
                    <div class="col">
                        <div class="card shadow-sm">

                            <img class="product-pic mt-2 w-50 mx-auto" src="img/' . $string_arr[3] . '" alt="vaate"/>
                            
                            <div class="card-body">
                                <p class="card-text">' . $string_arr[1] . '</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small>' . $string_arr[2] . ' EUR</small>
                                    <div>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#' . $prod_id . '">Katso</button>
                                        <form method="post" action="kori.php">
                                            
                                            <button type="submit" class="btn btn-sm btn-primary">OSTA</button>
                                            <input type="hidden" name="act" value="buy"/>
                                            <input type="hidden" name="product" value="' . $prod_id . '"/>
                                            
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div> ';
                    
        //print product modal
        echo '
                <div class="modal fade" id="' . $prod_id . '" tabindex="-1" aria-labelledby="' . $prod_id . 'label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        
                            <div class="modal-header">
                                <h5 class="modal-title" id="' . $prod_id . 'label">Tuotetiedot</h5>
                            </div>
                            
                            <div class="modal-body">
                                <img class="mt-2 w-50 mx-auto d-block" src="img/' . $string_arr[3] . '" alt="vaate"/>
                                
                                <div class="card-body">
                                    <p class="card-text">' . $string_arr[1] . '</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small>' . $string_arr[2] . ' EUR</small>
                                        <div>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Sulje</button>
                                            <form method="post" action="kori.php">
                                                
                                                <button type="submit" class="btn btn-sm btn-primary">OSTA</button>
                                                <input type="hidden" name="act" value="buy"/>
                                                <input type="hidden" name="product" value="' . $prod_id . '"/>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> ';
    }
    
    //function to print 6 random (different) products on the front page
    function printFrontPageProducts($products) {
        $numbers = array(1,2,3,4,5,6,7,8,9,10,11);
                    
        $index = 0;
        while ($index < 6) {

            $random = rand(1,11);
            $found = false;
            
            for ($i = 0; $i < count($numbers); $i++) {
                if ($numbers[$i] == $random) {
                    $found = true;
                }
            }
            
            if (!$found) {
                continue;
            }
            
            $numbers[$random - 1] = null;                            
            printProduct($products["prod$random"], "prod$random");
            $index++;
        }
    }
    
    //function to print products based on category
    //0 = all, 1 = men, 2 = women
    function printProducts($products, $category) {
        //if category is 0, print all products
        if ($category == 0) {
        
            foreach ($products as $id => $product) {
                printProduct($product, $id);
            }
            
        //if category is 1, print all beginning with "m"
        } else if ($category == 1) {
        
            foreach ($products as $id => $product) {
                $string_arr = explode("#", $product);
                
                if ($string_arr[0] == "m") {
                    printProduct($product, $id);
                }
            }

        //if category is 2, print all beginning with "n"
        } else if ($category == 2) {
        
            foreach ($products as $id => $product) {
                $string_arr = explode("#", $product);
                
                if ($string_arr[0] == "n") {
                    printProduct($product, $id);
                }
            }
        }
    }
    
    //function to add a product id to cart
    function addToCart($prod_id) {
        $cart = &$_SESSION["cart"];
    
        //check if product is already in cart
        $incart = false;
        foreach ($cart as $id => $qty) {
            if ($prod_id == $id) {
                $incart = true;
            }
        }
        
        //if product is already in cart, raise quantity by one
        //if not, place it in cart with quantity 1
        if ($incart) {
            $cart[$prod_id]++;
        } else {
            $cart[$prod_id] = 1;
        }
    }
    
    //function to print one product line in cart view
    function printCartLine($products, $prod_id, $qty) {
        $string_arr = array();
     
        //find correct product by id and split the string
        foreach ($products as $id => $product) {
            if ($prod_id == $id) {
                $string_arr = explode("#", $product);
            }
        }
        
        //echo actual cart line with data placed in
        echo '
            <li class="row">
                
                    <div class="col-8 p-2 pb-3 cart-heading">
                        <h6 class="my-0">' . $string_arr[1] . '</h6>
                        <form action="kori.php" method="post">
                            <input class="text-muted del-button" type="submit" value="Poista"/>
                            <input type="hidden" name="act" value="del"/>
                            <input type="hidden" name="product" value="' . $prod_id . '"/>
                        </form>
                    </div>
                    
                    <div class="col-2 p-2 pb-3">
                        <span class="text-muted ml-5">' . $qty . ' kpl</span>
                    </div>
                    
                    <div class="col-2 p-2 pb-3">
                        <span class="text-muted">' . $string_arr[2] . ' EUR</span>
                    </div>
                    <hr/>
            </li> ';
    }
    
    //function to print total amount, empty cart and checkout buttons
    function printTotal($products) {
        $cart = &$_SESSION["cart"];
        $total = 0;
        
        //calculate total
        foreach ($cart as $id => $qty) {
        
            foreach ($products as $prod_id => $product) {
                
                if ($prod_id == $id) {
                    $split = explode("#", $product);
                    $total += ($split[2] * $qty);
                }
            }
        }
        
        //echo total line, empty and checkout buttons, and a checkout modal window
        echo '
            <li class="row">
                
                <div class="col-8 p-2 pb-3">
                    <h6 class="my-0">YHTEENSÄ</h6>
                    
                    <form action="kori.php" method="post">
                        <input class="text-muted del-button" type="submit" value="Tyhjennä ostoskori"/>
                        <input type="hidden" name="act" value="del_all"/>
                    </form> 
                </div>
                
                <div class="col-2 p-2 pb-3"></div>
                
                <div class="col-2 p-2 pb-3">
                    <span class="font-weight-bold">' . $total . ' EUR</span>
                </div>
            </li> 
            
            <li class="row align-items-end">
                <div class="col-sm-9"></div>
                <div class="col-sm-3 text-center">
                    <button type="button" class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#checkout">Kassalle >>></button>
                </div>
            </li> 
            
            <div class="modal fade" id="checkout" tabindex="-1" aria-labelledby="checkoutlabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="checkoutlabel">Tilauksenne</h5>
                        </div>
                        <div class="modal-body">
                            Tilauksenne on vastaanotettu ja käsittelyssä. Kiitos!
                        </div>
                        <div class="modal-footer">
                            <form method="post" action="index.php">
                                <button type="submit" class="btn btn-sm btn-primary">Kiitos!</button>
                                <input type="hidden" name="act" value="completed"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div> ';
    }
    
    //function to remove a product id from cart
    function removeFromCart($products, $prod_id) {
        $cart = &$_SESSION["cart"];
        $subtract = false;
    
        //check if amount of products of this id is >1
        foreach ($cart as $id => $qty) {
            if ($id == $prod_id) {
                if ($qty > 1) {
                    $subtract = true;
                }
            }
        }
        
        //if amount >1, subtract one, otherwise remove completely from cart
        if ($subtract) {
            $cart[$prod_id]--;
        } else {
            unset($cart[$prod_id]);
        }
    }
    
    //function to empty the shopping cart
    function removeAll() {
        $_SESSION["cart"] = array();
    }
    
?>
