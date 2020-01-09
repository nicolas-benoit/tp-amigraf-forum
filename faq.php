<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php include("includes/header.php") ?>

    <div class="d-flex">

      <?php include("includes/sidebar.php") ?>
    <main>

      <div class="blocategorie">
        <div class="titrecat">
          <div style="padding: 10px;">
              <p>FAQ</p>


          </div>

        </div>
        <div class="row align-items-center">
          <div class="col-2">

          </div>
          <div class="col-8 pt-20">
                <div class="row">
                  <div class="col-12">
                    <p><strong>Question : Par qui à était créer ce forum?</strong></p>
                    <p class="mb-30">Reponse : Par la team secrète des avengers d'amigraf.. impossible de retrouver ces héros..</p>
                  </div>
                  <div class="col-12">
                    <p><strong>Question : Quand à était créer ce site ? </strong></p>
                    <p class="mb-30">Reponse : En février 2020</p>
                  </div>
                  <div class="col-12">
                    <p><strong>Question : Pourquoi ce site existe?</strong></p>
                    <p class="mb-30">Reponse : J'en sais rien</p>

                  </div>
                </div>
          </div>


        </div>


      </div>
    </main>
        </div>
        <?php include("includes/footer.php") ?>


  </body>
</html>
