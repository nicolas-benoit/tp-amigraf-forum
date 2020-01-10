<?php session_start();

include_once "src/user.php";
include_once "src/subcategory.php";
include_once "src/topic.php";
include_once "src/session.php";
include_once "src/utils.php";

if (!checkIfConnected()) {
    redirect("index.php");
}

if (isset($_POST['subject']) && !empty($_POST['subject'])) {
  $subject = htmlspecialchars($_POST['subject']);
  if (isset($_POST['content']) && !empty($_POST['content'])) {
    $content = htmlspecialchars($_POST['content']);

    $createTopic = createTopic($subject, $content, date("Y-m-d H:i:s"));

    $createTopic = linkSubcategoryToTopic($createTopic, pullSubcategory($_GET['id']));
    $createTopic = linkUserToTopic($createTopic, getConnectedUser());
    pushTopic($createTopic);
    redirect("sub-categories.php?id=" . $_GET["id"]);
  }
}


?>
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
          <div class="row m-0 p-0">
            <div class="col-12 addArticle_Block">
              <p>Ajouter un article</p>
            </div>
          </div>
        </div>

        <div class="row p-25">
          <div class="col-12">
            <form class="addTopic" action="ajout-article.php?id=<?= $_GET['id'] ?>" method="post">
              <div class="col-12 col-md-6 my-3">
                <label for="topic">Nom du Sujet :</label>
                <input type="text" class="form-control" name="subject" placeholder="Nom du Topic">
              </div>
              <div class="col-12 col-md-6 my-3">
                <label for="content">Le contenu du Sujet :</label>
                <textarea class="form-control" maxlength="255" rows="10" cols="5" name="content" placeholder="Votre commentaire"></textarea>
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
