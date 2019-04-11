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
      
       <section class="pt-md-4 pt-3">
        <div class="container mt-md-3">

            <div align="center">
                <img src="images/logo.png" class="img-fluid" width="200">
            </div>

            <div class="d-lg-flex mt-4">

                <a href="paisagismo.php#content" class="hover-d-none w-100 text-dark mx-md-4">
                    <div class="aarktetar7 shadow-25 rounded">

                        <p class="text-center bg-light-opacity p-3 font-anton ls-1 fs-20">
                            PAISAGISMO
                        </p>

                    </div>
                </a>

                <a href="https://www.najlamartinsfotografia.com.br/" target="_blank" class="hover-d-none w-100 text-dark">
                    <div class="aarktetar8 shadow-25 rounded">

                        <p class="text-center bg-light-opacity p-3 font-anton ls-1 fs-20">
                            FOTOGRAFIA
                        </p>

                    </div>
                </a>

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