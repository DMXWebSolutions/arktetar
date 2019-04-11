<div class="d-flex justify-content-end">
  <div class="logo-mobilea d-lg-none position-absolute">
    <a href="index.php">
      <img src="images/logo.png" width="115" class="mt-1 mx-2 z-index-front">
    </a>
  </div>
</div>

<div class="d-lg-flex justify-content-center p-absolute w-100" id="header">
  <nav class="navbar navbar-expand-lg fixed-xs-top right-xs-0 z-index-front navbar-light mt--lg-60px">

    <div class="container-fluid px-lg-5">
      <a class="d-none d-lg-block pb-4 px-lg-5 shadow rounded-circle bg-light-opacity" href="index.php">
        <img src="images/logo.png" class="mt-3 pt-5" width="100">
      </a>
      <button class="z-index-front mr-auto w-50px h-50px bg-xs-light-opacity rounded-circle navbar-toggler outline-0 border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse mt-md-5 mt-1 px-3 bg-xs-light-opacity  px-lg-0 py-3 py-lg-0 rounded" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> 
            <a class="nav-link
              <?php 
                if($_SERVER['REQUEST_URI'] == '/arktetar/index.php' ||
                  $_SERVER['REQUEST_URI'] == '/arktetar/') { 
              ?>    active <?php } ?> " 
              href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link
            <?php if($_SERVER['REQUEST_URI'] == '/arktetar/a-arktetar.php') { ?> active <?php } ?>
            " href="a-arktetar.php#content">A ARKTETAR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link
            <?php if($_SERVER['REQUEST_URI'] == '/arktetar/projetos.php') { ?> active <?php } ?>" href="projetos.php#content">PROJETOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link
            <?php if($_SERVER['REQUEST_URI'] == '/arktetar/clientes.php') { ?> active <?php } ?>" href="clientes.php#content">CLIENTES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link 
              <?php if($_SERVER['REQUEST_URI'] == '/arktetar/servicos.php') { ?> active <?php } ?>" href="servicos.php#content">SERVIÇOS
            </a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link 
            <?php if($_SERVER['REQUEST_URI'] == '/arktetar/contato.php') { ?> active <?php } ?> " 
            href="contato.php#content">CONTATO</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<img src="images/top.png">