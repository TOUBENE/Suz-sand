
<?php

      $name = $tel = $ville = $quartier = $nombre_plats = $prix ="";
      $nameError = $telError = $villeError = $quartiError = $nombre_platsError = $prixError ="";
      $isSuccess = false;


      if (isset($_POST['name'])) 
      {
        $isSuccess = true;

        if (isset($_POST['name'])) 
        {
          if (preg_match("#^[a-zA-Zàé]([a-zA-Zàé ]){1,}$#", $_POST['name'])) 
          {
            $name = htmlspecialchars($_POST['name']);
          }
          else
          {
            $nameError = "Nom et prénom incorect";
            $isSuccess = false;
          }
   
        }

        if (isset($_POST['tel'])) 
        {
          if (preg_match("#^[0-9]{2}([ ]?[0-9]{2}){3}$#", $_POST['tel'])) 
          {
            $tel = htmlspecialchars($_POST['tel']);
          }
          else
          {
            $telError = "Numéro incorect";
            $isSuccess = false;
          }
   
        }

        if (isset($_POST['ville'])) 
        {
          if (!empty($_POST['ville'])) 
          {
            $ville = htmlspecialchars($_POST['ville']);
          }
          else
          {
            $villeError = "ville incorect";
            $isSuccess = false;
          }
   
        }

        if (isset($_POST['quartier'])) 
        {
          if (!empty($_POST['quartier'])) 
          {
            $quartier = htmlspecialchars($_POST['quartier']);
          }
          else
          {
            $telError = "quartier incorect";
            $isSuccess = false;
          }
   
        }

        if (isset($_POST['nombre_plats'])) 
        {
          if (preg_match("#^[0-9]{1,}$#", $_POST['nombre_plats'])) 
          {
            $nombre_plats = htmlspecialchars($_POST['nombre_plats']);
          }
          else
          {
            $nombre_platsError = "Numéro incorect";
            $isSuccess = false;
          }
   
        }
        if (isset($_POST['prix'])) 
        {
          if (!empty($_POST['prix'])) 
          { 
            $prix = htmlspecialchars($_POST['prix']);
          }
          else
          {
            $prixError = "prix incorect";
            $isSuccess = false;
          }
   
        }

        if ($isSuccess) 
        {
          $name = $tel = $ville = $quartier = $nombre_plats ="";
        }
      }

      
      
      
      
 ?>



<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Suz'sand</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="..css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="commande1.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="top-bar py-3 bg-light" id="home-section" style="height: 50px;">
      <div class="container">
        <div class="row align-items-center">
         
          <div class="col-6 text-left">
            <ul class="social-media">
              <li><a href="#" class=""><span class="icon-facebook"></span></a></li>
              <li><a href="#" class=""><span class="icon-twitter"></span></a></li>
              <li><a href="#" class=""><span class="icon-instagram"></span></a></li>
              <li><a href="#" class=""><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-6">
            <p class="mb-0 float-right">
              <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">(+225)  08 59 91 89</span></a></span>
              <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">shop@yourdomain.com</span></a></span>
            </p>
            
          </div>
        </div>
      </div> 
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid" style="height: 80px;">
        <div class="row align-items-center" style="position: relative;">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">
              <img src="../images/suzsand/12.png" style="width: 100px; height: 100px;">
            </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Accueil</a></li>
                <li><a href="#products-section" class="nav-link">Nos produits</a></li>
                <li><a href="#about-section" class="nav-link">A propos de nous</a></li>
                
                <li><a href="#testimonials-section" class="nav-link">Temoignage</a></li>
                
                <li><a href="#contact-section" class="nav-link">Contactez-nous</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    <div style="height: 150px;"></div>

    <div class="container">
    
    
    <div class="row">


      <div class="col-md-6" style="border: 2px solid #DDD; border-radius: 5px;">
        
        <?php 
              if(isset($_GET['menu1'])){
                $menu = htmlspecialchars($_GET['menu1']);
                while ($menu = htmlspecialchars($_GET['menu1'])) 
                {
                  echo '<img src="../images/suzsand/1.jpg" style="height: 400px; width: 100%;" class="img-thumbnail">
                    <div class="px-4">
                      <h3><a href="#">sandwichs1</a></h3>
                      <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                
                    </div>
                  ';
                  break;
                }
                
              }
              if(isset($_GET['menu2'])){
                $menu = htmlspecialchars($_GET['menu2']);
                while ($menu = htmlspecialchars($_GET['menu2'])) 
                {
                  echo '<img src="../images/suzsand/2.jpg" style="height: 400px; width: 100%;" class="img-thumbnail">
                    <div class="px-4">
                      <h3><a href="#">sandwichs2</a></h3>
                      <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                
                    </div>
                  ';
                  break;
                }
                
              }
              if(isset($_GET['menu3'])){
                $menu = htmlspecialchars($_GET['menu3']);
                while ($menu = htmlspecialchars($_GET['menu3'])) 
                {
                  echo '<img src="../images/suzsand/3.jpg" style="height: 400px; width: 100%;" class="img-thumbnail">
                    <div class="px-4">
                      <h3><a href="#">sandwichs3</a></h3>
                      <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                
                    </div>
                  ';
                  break;
                }
                
              }
              if(isset($_GET['menu4'])){
                $menu = htmlspecialchars($_GET['menu4']);
                while ($menu = htmlspecialchars($_GET['menu4'])) 
                {
                  echo '<img src="../images/suzsand/4.jpg" style="height: 400px; width: 100%;" class="img-thumbnail">
                    <div class="px-4">
                      <h3><a href="#">sandwichs4</a></h3>
                      <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                
                    </div>
                  ';
                  break;
                }
                
              }
              if(isset($_GET['menu5'])){
                $menu = htmlspecialchars($_GET['menu5']);
                while ($menu = htmlspecialchars($_GET['menu5'])) 
                {
                  echo '<img src="../images/suzsand/5.jpg" style="height: 400px; width: 100%;" class="img-thumbnail">
                    <div class="px-4">
                      <h3><a href="#">sandwichs5</a></h3>
                      <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                
                    </div>
                  ';
                  break;
                }
                
              }
              if(isset($_GET['menu6'])){
                $menu = htmlspecialchars($_GET['menu6']);
                while ($menu = htmlspecialchars($_GET['menu6'])) 
                {
                  echo '<img src="../images/suzsand/6.jpg" style="height: 400px; width: 100%;" class="img-thumbnail">
                    <div class="px-4">
                      <h3><a href="#">sandwichs6</a></h3>
                      <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                
                    </div>
                  ';
                  break;
                }
                
              }
        ?>
        
        
      </div>

      <div class="col-md-1"></div>

      <div class="col-md-5">
        <div class="heading" style="display: <?php if($isSuccess) echo "none"; else echo "block"; ?>;">
          <h2>Commandez et vous serez livré !</h2>
        </div>

      
        <form id="contact-form" method="post" style="display: <?php if($isSuccess) echo "none"; else echo "block"; ?>;" action="


          <?php if(isset($_GET['menu1']))
                {
                  echo 'commande1.php?menu1=sandwichs1';
                }
                if(isset($_GET['menu2']))
                {
                  echo 'commande1.php?menu2=sandwichs1';
                }
                if(isset($_GET['menu3']))
                {
                  echo 'commande1.php?menu3=sandwichs1';
                }
                if(isset($_GET['menu4']))
                {
                  echo 'commande1.php?menu4=sandwichs1';
                }
                if(isset($_GET['menu5']))
                {
                  echo 'commande1.php?menu5=sandwichs1';
                }
                if(isset($_GET['menu6']))
                {
                  echo 'commande1.php?menu6=sandwichs1';
                }

         ?> " role="form">
          <div class="row">
            <div class="col-md-12">
              <label for="name">Nom et prénom <span class="blue">*</span></label>
              <input type="text" class="form-control" id="name" placeholder="Votre prénom" name="name" value="<?php echo $name; ?>">
              <p class="comments"><?php echo $nameError; ?></p>
            </div>

            <div class="col-md-12">
              <label for="tel">Téléphone</label>
              <input type="tel" class="form-control" id="tel" placeholder="Votre téléphone" name="tel" value="<?php echo $tel; ?>">
              <p class="comments"><?php echo $telError; ?></p>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleFormControlSelectAbidjan">Lieu de livraison <span class="blue">*</span></label><br>
                <div class="row">
                  <div class="col-md-6">
                    <label>Ville</label>
                    <select class="form-control" name="ville" id="exampleFormControlSelectAbidjan" name="choixVille">
                      <option>Abidjan</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label>Quartier</label>
                    <select class="form-control is-large" name="quartier" id="exampleFormControlSelectAbidjan" name="choixVille">
                      <option>2 Plateaux - 7ème Tranche</option>
                      <option>2 Plateaux - Agban</option>
                      <option>2 Plateaux - Aghien</option>
                      
                    </select>
                  </div>
                  
               </div>
              </div>
              
              <p class="comments"></p>
            </div>

            <div class="col-md-12">
              <label for="nombre_plats">Nombre de plats <span class="blue">*</span></label>
              
               
              <input type="text" class="form-control" id="nombre_plats" placeholder="Ex: 5" name="nombre_plats" 
              <?php 
                if(isset($_GET['menu1']))
                {
                    echo '
                        onblur="document.getElementById(\'tot1\').value = 1000 * this.value;"
                    ';
                }
                if(isset($_GET['menu2']))
                {
                    echo '
                        onblur="document.getElementById(\'tot2\').value = 2000 * this.value;"
                    ';
                }
                if(isset($_GET['menu3']))
                {
                    echo '
                        onblur="document.getElementById(\'tot3\').value = 3000 * this.value;"
                    ';
                }
                if(isset($_GET['menu4']))
                {
                    echo '
                        onblur="document.getElementById(\'tot4\').value = 4000 * this.value;"
                    ';
                }
                if(isset($_GET['menu5']))
                {
                    echo '
                        onblur="document.getElementById(\'tot5\').value = 5000 * this.value;"
                    ';
                }
                if(isset($_GET['menu6']))
                {
                    echo '
                        onblur="document.getElementById(\'tot6\').value = 6000 * this.value;"
                    ';
                }
                
              ?>
              >
              <p class="comments"><?php echo $nombre_platsError; ?></p>
            </div>


            <div class="col-md-12">
              <input type="hidden" name="prix" style="text-align: center;" 
                <?php 
                 if(isset($_GET['menu1']))
                 {
                  echo "id=\"tot1\"";
                 }
                 if(isset($_GET['menu2']))
                 {
                  echo "id=\"tot2\"";
                 }
                 if(isset($_GET['menu3']))
                 {
                  echo "id=\"tot3\"";
                 }
                 if(isset($_GET['menu4']))
                 {
                  echo "id=\"tot4\"";
                 }
                 if(isset($_GET['menu5']))
                 {
                  echo "id=\"tot5\"";
                 }
                 if(isset($_GET['menu6']))
                 {
                  echo "id=\"tot6\"";
                 }
                 ?>" size="7" value="">
              
            </div>
            <div class="col-md-12">
              <p class="blue"><strong>* Ces informations sont requises</strong></p>
            </div>


            <div class="col-md-12">
              
                    <input type="submit" class="button1" value="Valider la commande">
            </div> 
          </div>
        </form>

        <div style="display: <?php if($isSuccess) echo "block"; else echo "none"; ?>; border: 2px solid #f16821; padding-bottom: 15px;">
          <p class="thank-you" style="text-align: center; font-size: 22px;">Votre commande a bien été enregistrée. Merci pour votre fidélité !
          </p>
          <p class="blue"  style="text-align: center; font-size: 22px"><strong>Nombres de plats : <input type="text" style="text-align: center;" size="7" disabled value="<?php echo $nombre_plats; ?>"></strong>
          </p>
          <p class="blue" style="text-align: center; font-size: 22px"><strong>Prix Total : <input type="text" disabled style="text-align: center;" size="7" value="<?php echo $prix; ?>"> FCFA </strong>
          </p>
        <div style="text-align: center;">
                  <a href="commande1.php?menu1=sandwichs1" style="font-size: 22px; margin-top: 15px;" class="btn btn-black mr-1 rounded-0">Retour au menu</a>
        </div>

        </div>
        
      </div>



    </div>
  </div>
  
    <footer class="site-footer bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">A propos de nous</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 ">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">A propos de nous</a></li>
                  <li><a href="#">Nos services</a></li>
                  <li><a href="#">Temoignage</a></li>
                  <li><a href="#">Contactez-nous</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <h2 class="footer-heading mb-4">Suivez-nous sur</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce modèle est fait avec<i class="icon-heart" aria-hidden="true"></i> par <a href="https://colorlib.com" target="_blank" >SIC design</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/jquery.countdown.min.js"></script>
  <script src="../js/bootstrap-datepicker.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.fancybox.min.js"></script>
  <script src="../js/jquery.sticky.js"></script>

  
  <script src="../js/main.js"></script>
    
  </body>
</html>