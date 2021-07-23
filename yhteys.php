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
          <div class="container-fluid bg-white mt-5 float-md-end">
          
            <!-- CONTACT INFO -->
        
            <h4 class="text-center mb-5">Yhteydenotto</h4>
            
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative contact-box">
                        <div class="col p-4">
                            <h5 class="mb-5">Yhteystiedot</h5>
                            <p class="mb-0">Vaatekauppa Oy</p>
                            <p class="mb-0">Vaatekuja 4</p>
                            <p class="mb-4">12345 Ankkalinna</p>
                            <p class="mb-0">Puhelin: 02 321 123 1</p>
                            <p class="mb-4">Email: vaatturi@vaatekauppa.org</p>
                            <p class="mb-4">Y-tunnus 987654321</p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative contact-box">
                        <div class="col p-4">
                            <h5 class="mb-0">Yhteydenottolomake</h5>
                            <form>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Sähköpostiosoite</label>
                                    <input type="email" class="form-control" id="email" placeholder="erkki@esimerkki.com">
                                    </div>
                                    <div class="mb-3">
                                    <label for="viesti" class="form-label">Viestisi</label>
                                    <textarea class="form-control" id="viesti" rows="6"></textarea>
                                    <button type="button" class="btn btn-primary mt-2 float-end" data-bs-toggle="modal" data-bs-target="#message">Lähetä</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        </div>
                    </div>
                    
                    <!-- THANK YOU MODAL -->
                    
                    <div class="modal fade" id="message" tabindex="-1" aria-labelledby="messagelabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="messagelabel">Yhteydenotto</h5>
                                </div>
                                <div class="modal-body">
                                    <p>Kiitos viestistänne! Palaamme asiaan mahdollisimman pian.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                </div>
                            </div>
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
