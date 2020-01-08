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
              <p>Inscription</p>


          </div>

        </div>
        <div class="row">
          <div class="col-2">

          </div>
          <div class="col-8">
          <p class="text-center mt-10">  Vous pouvez contactez le staff du forum via ce formulaire</p>
</p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-3">

          </div>
          <div class="col-6 pt-20">
                    <form class="" action="index.html" method="post">
                      <label for="pseudo2">Votre pseudo</label>
                    <input type="text" class="inputlogin" name="pseudo" placeholder="Pseudo" id="pseudo2">
                    <label for="mail">Votre e-mail</label>
                    <input type="mail" class="inputlogin" name="mail" placeholder="Votre adresse e-mail" id="mail">
                    <label for="message">Votre message</label>
                    <textarea class="message" placeholder="Ecrivez nous ici.." id="message"></textarea>

          </div>
          <div class="col-2">
          </div>
        </div>
            <div class="d-flex justify-content-center">
              <input type="submit" class="inputsubmit2" name="register" value="Envoyer le message">
          </div>
        </form>
      </div>
    </main>
        </div>
        <?php include("includes/footer.php") ?>


  </body>
</html>
