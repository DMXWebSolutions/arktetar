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

    <link href="https://fonts.googleapis.com/css?family=Raleway|Nunito|Sintony:200,300,400,500,600,700,800" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">
    
    <link href="http://arktetar.com.br/contact.php" rel="canonical">

    <meta name="author" content="DMX WEB SOLUTIONS">
    <meta name="robots" content="index, follow">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>

  </head>
  <body>
    
    <?php include 'templates/header.php'; ?>

    <main>
        
          <section class="pt-5" id="content">
            <div class="container mt-3">

                <div align="center">
                    <h1 class="mb-0 font-raleway">Contato</h1>
                    <hr class="mt-0 border border-dark w-150px w-xs-100" />
                </div>

              <form method="POST" action="sendMail.php" class="mt-3" id="content">
                  
                
                <div class="row">

                  <div class="col-md-6">

                    <div class="mb-2">
                      <label for="name" class="d-block mb-0 font-sintony">Nome</label>
                      <input type="text" name="name" id="name" class="form-control p-3-5" placeholder="Seu nome" required>
                    </div>
                    <div class="mb-2">
                      <label for="email" class="d-block mb-0 font-sintony">Email</label>
                      <input type="email" name="email" id="email" class="form-control p-3-5" placeholder="Seu email" required>
                    </div>
                    <div class="mb-2">
                      <label for="subject" class="d-block mb-0 font-sintony">Assunto</label>
                      <input type="text" name="subject" id="subject" class="form-control p-3-5" placeholder="Assunto do email" required>
                    </div>
                    <div class="mb-2">
                      <label for="message" class="d-block mb-0 font-sintony">Mensagem</label>
                      <textarea name="message" id="message" class="h-min-125 form-control" placeholder="Sua mensagem"></textarea>
                    </div>

                    <button type="submit" name="btnSend" value="btnSend" class="btn btn-dark text-white font-raleway weight-600 ls-1 fs-16 mt-2 mb-md-5">
                      Enviar
                    </button>

                  </div>
                  <div class="col-md-6 mt-2 mb-5 mt-md-0">

                    <address class="mb-2 mt-4 fs-18">
                      <i class="fa fa-map-marker-alt"></i>
                      Av. das Américas, 1981 - Espaço 86 Barra da Tijuca, Rio de Janeiro
                    </address>

                    <a href="tel:552132449599" class="text-dark weight-600">
                      <i class="fa fa-phone"></i>
                      (21) 3244-9599
                    </a>
                    <div class="d-block my-2">
                        <a href="tel:+5521994039663" class="text-dark weight-600">
                          <i class="fa fa-phone"></i>
                          (21) 99403-9663
                        </a>
                    </div>

                  </div>

                </div>

              </form>

            </div>
        </section>

    </main>

    <?php include 'templates/footer.php'; ?>

</body>
</html>