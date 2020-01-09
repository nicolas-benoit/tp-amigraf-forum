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
          <div class="row">
            <div class="col-8">
              <div style="padding: 10px;">
                  <p>Ajouter une categorie</p>


              </div>
            </div>
            <div class="col-2  text-right">

            </div>
            <div class="col-2 text-right">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
              Ajouter la catégorie
              </button>
            </div>
          </div>


        </div>

          <div class="row p-25">
<div class="col-2"></div><div class="col-8">
  <input type="text" class="inputlogin" name="" placeholder="Titre de la catégorie" value="">
</div>
<div class="col-2"></div> <div class="col-2"></div><div class="col-8">
  <input type="text" class="inputlogin" name="" placeholder="Description de la catégorie" value="">
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
