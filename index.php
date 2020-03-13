<html>
  <head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <title>Configurateur Le Pré Fabriqué</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href='style_leprefabrique_01.css' rel='stylesheet'>

  </head>

<body>


        <div id="menu_haut">
              <a href="index.php"><img</a>
                  <img src="images/logo_leprefabrique.png" alt="picture description" width="100" align="middle"> </a>
                  <h1>Configurateur Le Pré Fabriqué</h1>
        </div>


  <hr>
  <hr>

<main role="main">

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-6">
        <p>Le Pré Fabriqué est une solution de matériel modulable pour le travail du sol et les semis. Grâce à différents porte-outils et à une grande gamme d'outil, il est facile d'imaginer et contruire son outil de travail du sol. 
        <br>Avec le configurateur en ligne, vous pouvez modéliser votre outil pour qu'il corresponde à vos objectifs de culture ou pour maîtriser vos coût de mécanisation. 
        <br>Enfin, Le Pré Fabriqué est une solution simple en mécanique qui ne nécessite pas un investissement en outillage. Les outils sont livrés avec les éléments de sécurité pour la personne et pour la route.</p>
      </div>
       <div class="col-md-6">

         <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
             <div class="carousel-inner">
                 <div class="carousel-item active">
                       <img src="images/cultivateur/protoA-01.jpg" class="img-responsive center-block" width="70%">
                 </div>
                 <div class="carousel-item">
                       <img src="images/cultivateur/protoA-02.jpg" class="img-responsive center-block" width="70%">
                 </div>
                 <div class="carousel-item">
                       <img src="images/cultivateur/protoA-03.jpg" class="img-responsive center-block" width="70%">
                 </div>
             </div>
         </div>

       </div>

        <hr>
  </div> <!-- /container -->
</main>







<div id="formulaire">
<form method="post" action="type_machine.php">
  <div id="questionnaire">
      <ul class="list-inline" >
    <li>
      <label for="materiel">cadre</label><br />
       <select name="cadre" id="cadre">
               <option value="A">Cadre 1.20 m</option>
               <option value="B">Cadre 2.00 m</option>
               <option value="C">Cadre 3.50 m</option> 
       </select>
    </li>
    <li>
      <label for="materiel">attelage</label><br />
       <select name="attelage" id="attelage">
               <option value="A">Attelage CAT.1</option>
               <option value="B">Attelage CAT.2</option>
               <option value="C">Attelage CAT.3</option> 
       </select>
    </li>
    <li>
      <label for="materiel">dents</label><br />
       <select name="dents" id="dents">
               <option value="A">Dents carrées 30mm * 650mm</option>
               <option value="B">Dents sécurité ressort</option>
               <option value="C">Disques Agrisem</option> 
       </select>
    </li>
    <li>
      <label for="materiel">semoir</label><br />
       <select name="semoir" id="semoir">
               <option value="A">SANS</option>
               <option value="B">Semoir Delimbe</option>
       </select>
    </li>
    <li>
      <label for="materiel">rouleau</label><br />
       <select name="rouleau" id="rouleau">
               <option value="A">Culti Packer</option>
               <option value="B">Rouleau Cage</option>
       </select>
    </li>
      </ul>
  </div>
    <p><br></p>
      <div id="valider" >
         <input type="submit" value="découvrir la configuration" />
      </div>
</form>
</div>



<main role="main">

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Cadre</h2>
        <p>Les cadres Le Pré Fabriqué sont disponibles dans différentes tailles pour les travaux dans les vignes, les planches en maraichage ou même les travaux du sol et les semis en grande culture. </p>
        <div id="display">
        <p><a class="btn btn-secondary" href="index-01.html" role="button">En savoir plus &raquo;</a></p>
        </div>
      </div>
      <div class="col-md-4">
        <h2>Attelage</h2>
        <p>Les attelages 3 points Le Pré Fabriqué sont disponibles dans différentes catégories. L'attelage est livré avec les éléments de renforts de l'outil, les systèmes d'attelage et de sécurité. </p>
        <div id="display">
        <p><a class="btn btn-secondary" href="index-02.html" role="button">En savoir plus &raquo;</a></p>
        </div>
      </div>
      <div class="col-md-4">
        <h2>Dents</h2>
        <p>Que ce soit pour un travail du sol superficiel ou en profondeur, avec des dents ou des disques, pour les semis ou pour préparer une terre, Le Pré Fabriqué propose tout une gamme de matériel adaptable.</p>
        <div id="display">
        <p><a class="btn btn-secondary" href="index-03.html" role="button">En savoir plus &raquo;</a></p>
        </div>
      </div>
    </div>

  </div> <!-- /container -->

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Semoir</h2>
        <p>Adapter un semoir est simple avec Le Pré Fabriqué. Grâce aux semoirs adaptables, il est possible de semer des couverts végétaux et même de réaliser certains semis de précision. </p>
        <div id="display">
        <p><a class="btn btn-secondary" href="index-04.html" role="button">En savoir plus &raquo;</a></p>
        </div>
      </div>
      <div class="col-md-4">
        <h2>Rouleau</h2>
        <p>Grâce au système modulable Le Pré Fabriqué, il est simple d'imaginer son rouleau, que ce soit pour briser les mottes, préparer le lit de semence ou favoriser le tallage. Vous trouverez un rouleau adapté à votre système dans notre catalogue. </p>
        <div id="display">
        <p><a class="btn btn-secondary" href="index-05.html" role="button">En savoir plus &raquo;</a></p>
        </div>      
    </div>

    <hr>

  </div> <!-- /container -->

</main>

    <hr>
    <hr>
    <hr>
  
  <div id="line">
    <p>Bienvenue sur le configurateur Le Pré Fabriqué</p>
	</div>

    <div id="footer">
        <ul class="list-inline">
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCb97s22T-F5Ces1hiuDK2ng"><i class="fa fa-youtube"></i></a></li>
        </ul>
    </div>

  </body>


</html>
