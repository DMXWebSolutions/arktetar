<!doctype html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/util.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.23/css/uikit.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sintony:200,300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton:200,300,400,500,600,700,800" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">
    
    <link href="http://arktetar.com.br/projects.php" rel="canonical">

    <meta name="author" content="DMX WEB SOLUTIONS">
    <meta name="robots" content="index, follow">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>

</head>
<body>
    
  <?php include 'templates/header.php'; ?>

  <main class="pb-5">
      
      <section class="pt-5" id="content">
        <div class="container-fluid px-md-4 pb-5">

          <div align="center" class="mb-5">
              <h1 class="mb-0 font-anton text-uppercase">upfestas</h1>
              <hr class="mt-0 border border-dark w-200px w-xs-100" />
          </div>

          <div uk-grid uk-lightbox="animation: fade">

            <div class="d-md-flex my-0 py-0">

              <a href="projects/upfestas/4.jpg" class="w-md-75 w-xs-100 d-block mb-2 mb-md-0">
                  <img src="projects/upfestas/4.jpg" class="img-gallery h-md-400">
              </a>
              <a href="projects/upfestas/5.jpg" class="w-100 d-block mb-2 mb-md-0">
                  <img src="projects/upfestas/5.jpg" class="img-gallery h-md-400">
              </a>
              <a href="projects/upfestas/6.jpg" class="w-100 d-block mb-2 mb-md-0">
                  <img src="projects/upfestas/6.jpg" class="img-gallery h-md-400">
              </a>

            </div>

            <div class="d-md-flex my-0 py-0">

              <a href="projects/upfestas/1.jpg" class="w-100 d-block mb-2 mb-md-0">
                  <img src="projects/upfestas/1.jpg" class="img-gallery h-md-600">
              </a>

              <div class="d-md-flex flex-column w-100">

                <a href="projects/upfestas/2.jpg" class="w-100 d-block mb-2 mb-md-0">
                    <img src="projects/upfestas/2.jpg" class="img-gallery h-md-300">
                </a>
                <a href="projects/upfestas/3.jpg" class="w-100 d-block mb-2 mb-md-0">
                    <img src="projects/upfestas/3.jpg" class="img-gallery h-md-300">
                </a>

              </div>

            </div>

            <div class="d-md-flex my-0 py-0">

              <a href="projects/upfestas/9.jpg" class="w-100 d-block mb-2 mb-md-0">
                  <img src="projects/upfestas/9.jpg" class="img-gallery h-md-400">
              </a>
              <a href="projects/upfestas/7.jpg" class="w-100 d-block mb-2 mb-md-0">
                  <img src="projects/upfestas/7.jpg" class="img-gallery h-md-400">
              </a>
              <a href="projects/upfestas/8.jpg" class="w-100 d-block mb-2 mb-md-0">
                  <img src="projects/upfestas/8.jpg" class="img-gallery h-md-400">
              </a>

            </div>

            <div class="d-md-flex my-0 py-0">

              <a href="projects/upfestas/10.jpg" class="w-100 d-block mb-2 mb-md-0">
                  <img src="projects/upfestas/10.jpg" class="img-gallery h-md-400">
              </a>
              <a href="projects/upfestas/11.jpg" class="w-100 d-block mb-2 mb-md-0">
                  <img src="projects/upfestas/11.jpg" class="img-gallery h-md-400">
              </a>

            </div>

          </div>

        </div>
      </section>

  </main>


  <?php include 'templates/footer.php'; ?>

  <script>

    $(".img-gallery").click(function(e) {
      
      e.preventDefault();
      $("#header").hide();

    });

    $(document).scroll(function() {

      if (!$(".uk-lightbox").hasClass("uk-open")) {
        
        $("#header").show();
      } 

    });

  </script>


</body>
</html>