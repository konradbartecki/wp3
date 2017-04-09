<?php
  echo'
    <div id="navbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./index.php#top"><img src="img/wp3logos.png" alt="WP3"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="./index.php#home">O nas</a></li>
            <li><a href="./index.php#about">Co robimy</a></li>
            <li><a href="./index.php#contact">Kontakt</a></li>
            <li><a href="/mapa.php">Mapy</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Więcej <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/oprojekcie.php">O projekcie</a></li>
                <li><a href="/slownik.php">Słownik pojęć</a></li>
                <li><a href="/informacje.php">Informacje dodatkowe</a></li>
                <li><a href="/linki.php">Przydatne linki i adresy</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Informacje praktyczne</li>
                <li><a href="/infodlaoperatorow.php">Dla operatorów</a></li>
                <li><a href="/informacjepraktyczne.php">Dla użytkowników</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  ';
?>