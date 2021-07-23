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
    
        <!-- BLOG POSTS -->
        
          <div class="container-fluid bg-white mt-5 float-md-end">
        
            <h4 class="text-center mb-5">Vaatekaupan blogi</h4>
            
            <div class="row mb-2" id="post1">
                <div class="col-md-1">
                </div>
                
                <div class="col-md-10">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4">
                            <h5 class="mb-0">Efficitur in lorem a volutpat. Phasellus non sem molestie, semper lectus at, malesuada ipsum.</h5>
                            <div class="mb-3 text-muted">23.03.2020</div>
                            <img src="img/kuva4.jpg" alt="vaate" class="blog-pic float-md-end mx-auto d-block"/>
                            <p class="card-text my-2">Fusce et risus ut justo volutpat feugiat. Sed leo ipsum, porta eget dolor dapibus, blandit vestibulum risus. Pellentesque eu faucibus est. Vestibulum ac sodales velit, vitae tincidunt leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse in malesuada ante.</p>
                            
                            <p class="card-text my-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et leo in ipsum scelerisque imperdiet. Pellentesque posuere tortor vel lorem pulvinar sollicitudin. Proin auctor felis quis felis feugiat ullamcorper. In non ante eu nulla malesuada rutrum ut quis nulla. Quisque ultricies, felis dictum pharetra eleifend, dui lorem interdum ex, vitae laoreet arcu ante non tortor. Nulla nisl nibh, gravida et enim ac, ultricies gravida augue. Sed mauris nibh, posuere vel mi et, suscipit pretium nibh. Curabitur in congue leo. Proin scelerisque ut tellus ac tincidunt. Pellentesque sapien augue, ultricies eu mauris eu, faucibus consequat nulla. Phasellus sagittis malesuada mi. Aenean nec sapien ac nulla egestas convallis.</p>
                            
                            <p class="card-text my-2">Ut tempor elementum hendrerit. Duis ut mi ac purus tincidunt porttitor vitae eu magna. Mauris iaculis velit posuere libero iaculis, vel volutpat urna tincidunt. Ut mattis suscipit finibus. Nullam ultricies turpis ut dui sollicitudin, eget elementum lorem varius. Etiam risus metus, laoreet vel ipsum et, convallis viverra elit. Aenean nisi velit, consequat at dolor eu, vehicula efficitur justo. Maecenas scelerisque odio turpis, in vulputate nibh varius at. Nulla orci diam, ultrices non hendrerit in, pulvinar volutpat lacus. Ut sollicitudin orci purus, eget maximus felis convallis a. Nunc egestas sem vitae elit pharetra accumsan.</p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-2" id="post2">
                <div class="col-md-1">
                </div>
                
                <div class="col-md-10">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4">
                            <h5 class="mb-0">Pellentesque pulvinar sapien tellus, mollis gravida magna fringilla sed. </h5>
                            <div class="mb-3 text-muted">16.03.2020</div>
                            <img src="img/kuva6.jpg" alt="vaate" class="blog-pic float-md-end mx-auto d-block"/>
                            <p class="card-text my-2">Fusce ornare semper nulla eget varius. Nulla auctor turpis in nisi bibendum dignissim. Maecenas in fermentum justo. Nullam eget erat id velit fermentum suscipit. Fusce porta magna vitae felis tempor, eget bibendum justo mollis. </p>
                            <p class="card-text my-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque ullamcorper ipsum, et consectetur mauris malesuada quis. Praesent condimentum eros nec lectus sodales, in suscipit ante imperdiet. Quisque scelerisque, elit in sollicitudin varius, diam mi consequat nisl, eget fringilla libero tellus non neque. Mauris sed scelerisque lacus, a aliquam magna. Sed ac eros id diam dictum elementum in ut dui. Donec in felis ut risus malesuada vestibulum. Phasellus leo massa, varius eu mauris vitae, pretium molestie felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras molestie metus lacus, vel luctus neque fermentum sit amet. Etiam gravida neque nec ipsum semper, at aliquam dui mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam non mattis nunc. Nunc congue malesuada eleifend. Mauris in felis eget ligula imperdiet blandit. Integer quis leo ut lacus condimentum hendrerit.</p>
                            <p class="card-text my-2">Ut convallis purus id venenatis rutrum. Nam ornare felis ac leo dapibus elementum. Donec vitae mauris hendrerit tortor tincidunt iaculis. Nulla rutrum purus sit amet ultricies consequat. Vivamus ligula libero, elementum sed sapien volutpat, convallis molestie orci. Ut molestie justo quam, quis tincidunt ligula suscipit ac. Ut placerat risus sit amet dolor sollicitudin hendrerit. Suspendisse ut sollicitudin enim. Fusce sodales enim consequat tellus accumsan placerat. Sed venenatis felis ut nibh blandit pharetra.</p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-2" id="post3">
                <div class="col-md-1">
                </div>
                
                <div class="col-md-10">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4">
                            <h5 class="mb-0">Mauris et risus purus. Curabitur vestibulum mauris quis enim mattis malesuada.</h5>
                            <div class="mb-3 text-muted">10.02.2020</div>
                            <img src="img/kuva10.jpg" alt="vaate" class="blog-pic float-md-end mx-auto d-block"/>
                            <p class="card-text my-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent ac mauris mollis, porttitor felis auctor, sagittis risus. Donec eu nunc posuere, tempus elit at, varius dui. Maecenas at velit quis ante blandit convallis. Ut vitae leo in ipsum fringilla faucibus. Integer vel urna id turpis facilisis dapibus.</p>
                            <p class="card-text my-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius sem lacus, vitae tempus sapien ultricies non. Maecenas bibendum quam mi, non dignissim lacus finibus sed. Maecenas rutrum purus turpis, ut porta augue interdum ut. Duis cursus laoreet vestibulum. Nullam malesuada quam et nisl dictum vehicula. In in nulla a mauris sodales gravida. Praesent vestibulum, neque blandit tincidunt vehicula, nibh libero aliquet nisi, a feugiat purus dui at odio. Proin tempus enim nec lorem mollis, ut ornare lectus venenatis. Nunc vehicula, quam quis rhoncus lobortis, lectus neque feugiat sem, eget posuere nisi sapien vel nisi. Integer finibus eleifend aliquam.</p>
                            <p class="card-text my-2">Curabitur ac lectus in massa scelerisque vulputate ac in ex. Etiam ut ipsum tortor. Fusce luctus, magna quis porta lobortis, orci lectus porttitor neque, non imperdiet magna massa nec lectus. Etiam nec quam posuere, vehicula libero a, lobortis ligula. Praesent porta imperdiet justo vel venenatis. Suspendisse quis tortor dui. Ut ornare ipsum eu suscipit condimentum. Duis nisi risus, vestibulum eu commodo non, viverra in diam. Pellentesque finibus, felis sed convallis facilisis, arcu augue cursus justo, a bibendum leo arcu eget ante. Vivamus laoreet rhoncus mi, eu ultricies eros ornare eget. Praesent ornare est sit amet orci lobortis volutpat. Phasellus finibus sed lectus eu molestie.</p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-2" id="post4">
                <div class="col-md-1">
                </div>
                
                <div class="col-md-10">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4">
                            <h5 class="mb-0">Maecenas eleifend ex vitae orci luctus. Donec auctor metus sit amet lectus maximus cursus. </h5>
                            <div class="mb-3 text-muted">10.01.2020</div>
                            <img src="img/kuva11.jpg" alt="vaate" class="blog-pic float-md-end mx-auto d-block"/>
                            <p class="card-text my-2">Integer condimentum metus vitae enim mattis, non gravida lacus commodo. Vestibulum nisi massa, placerat quis nisl non, consequat efficitur lorem. Fusce in magna pretium, sagittis felis feugiat, cursus tellus. Duis eros turpis, placerat ut diam non, tempus sodales odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                            <p class="card-text my-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In elit tortor, dictum vel elit eget, pellentesque ullamcorper nunc. Donec in fermentum tellus. Donec nec nisl sit amet lectus porttitor porttitor eget in ante. Quisque eu quam ullamcorper, placerat nisi quis, tristique lectus. Maecenas tristique lectus varius turpis congue, id posuere ipsum placerat. Cras aliquam metus nec elit mattis, convallis sodales ipsum consectetur. Fusce consequat scelerisque libero, a porta sem elementum sit amet. Nam nec nisl pharetra, viverra lectus sit amet, hendrerit justo. Fusce bibendum mauris sit amet dignissim varius. Nunc consectetur purus vehicula sem hendrerit, ut dictum sapien tincidunt. Sed venenatis neque lectus, a ultricies magna mattis quis. Mauris id lacus ultrices, tempus lorem sit amet, fermentum sapien. Suspendisse pulvinar lorem id suscipit elementum. Phasellus blandit metus vel nisi pellentesque iaculis.</p>
                            <p class="card-text my-2">Donec porta nisl ut ultrices faucibus. Morbi non diam ac eros ornare fringilla eget commodo dui. Donec ullamcorper risus a lorem aliquet fringilla. Vestibulum ipsum erat, dapibus a mi cursus, eleifend pretium ipsum. Mauris feugiat turpis feugiat vulputate porttitor. Aliquam faucibus turpis vitae erat tincidunt, eget mollis lacus ullamcorper. Quisque quis ullamcorper magna.</p>
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
