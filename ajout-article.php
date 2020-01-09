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
        <div class="col-12 titrecat">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div style="padding: 10px;">
                <p>Ajouter un article</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 text-right pr-3">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                Ajouter l'article
              </button>
            </div>
          </div>
        </div>

        <div class="row p-25">
          <div class="col-12">
            <form action="ajout-article.php" method="post">
              <div class="col-12 col-md-3 my-3">
                <label for="topic">Nom du Sujet :</label>
                <input type="text" name="topic" placeholder="Nom du Topic">
              </div>
              <div class="col-12 col-md-6 my-3">
                <label for="content">Le contenu du Sujet :</label>
                <textarea class="message" maxlength="255" rows="15" cols="5" name="content" placeholder="Votre commentaire"></textarea>
              </div>

              <div class="col-12 col-md-3">
                <input type="submit" value="envoyer" class="btn btn-primary" name="submit" />
              </div>
            </form>
          </div>

        </div>
      </div>

    </main>
  </div>
  <?php include("includes/footer.php") ?>

</body>
<!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea'
  });
</script> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- <script>
  $('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
  })
</script> -->

</html>