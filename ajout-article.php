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
          <div class="row">
            <div class="col-8">
              <div style="padding: 10px;">
                  <p>Titre de la sous-catégorie</p>


              </div>
            </div>
            <div class="col-2  text-right">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Modifier l'article
  </button>
            </div>
            <div class="col-2 text-right">
              <button type="button" class="btn btn-danger">
    Supprimer l'article
  </button>
            </div>
          </div>


        </div>

          <div class="row p-25">

            <h1>Titre de l'article </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <b>reprehenderit in voluptate</b> velit esse cillum dolore eu fugiat nulla pariatur. <u>Excepteur</u> sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <img src="http://www.redigeons.com/wp-content/uploads/2012/09/ecrire-un-article.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="blocategorie">
      <div class="titrecat">
        <div style="padding: 10px;">
            <p>Commentaires</p>

        </div>
      </div>

        <div class="row nopadding">

          <div class="col-12 blocsouscat">
            <p class="tittresouscat">Ton pseudo: Archouma</p>

          <div class="row">
            <div class="col-12">
              <textarea class="message" maxlength="255" placeholder="Écrire un commentaire public.." ></textarea>
            </div>
            <div class="col-12">
              <input type="submit" class="inputsubmit2" name="register" value="Envoyer le commentaire">
            </div>

          </div>

          </div>
        <div class="col-12 blocsouscat">
          <div class="row">
            <div class="col-6">
              <p class="tittresouscat">Par Inoxz</p>
            </div>
            <div class="col-6">
              <p class="text-right">Le 22/03/19</p>
            </div>
          </div>
          <p class="font-13">Wesh c'est de la grosse merde.</p>
          <div class="row">
            <div class="col-12 text-right">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Supprimer le commentaire</button>
            </div>
          </div>
        </div>
        <div class="col-12 blocsouscat">
          <div class="row">
            <div class="col-6">
              <p class="tittresouscat">Par Inoxz</p>
            </div>
            <div class="col-6">
              <p class="text-right">Le 22/03/19</p>
            </div>
          </div>
          <p class="font-13">Lorem ipsum dolor sit amet, labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <div class="row">
            <div class="col-12 text-right">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Supprimer le commentaire</button>
            </div>
          </div>
        </div>
        <div class="col-12 blocsouscat">
          <div class="row">
            <div class="col-6">
              <p class="tittresouscat">Par Inoxz</p>
            </div>
            <div class="col-6">
              <p class="text-right">Le 20/03/19</p>
            </div>
          </div>
          <p class="font-13">Lorem ipsum dolor sit amet, labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <div class="row">
            <div class="col-12 text-right">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Supprimer le commentaire</button>
            </div>
          </div>

        </div>

        </div>

    </div>

    </main>
        </div>
        <?php include("includes/footer.php") ?>

  </body>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 <script>tinymce.init({selector:'textarea'});</script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
  </script>
</html>
