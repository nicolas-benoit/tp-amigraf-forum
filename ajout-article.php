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
                <input type="text" class="form-control" name="subject" placeholder="Nom du Topic" required>
              </div>
              <div class="col-12 col-md-6 my-3">
                <label for="content">Le contenu du Sujet :</label>
                <textarea class="form-control" maxlength="255" rows="10" cols="5" name="content" placeholder="Votre commentaire" required></textarea>
              </div>

              <div class="col-12 col-md-3">
                <input type="submit" value="Envoyer" class="btn btn-primary" name="submit" />
              </div>
            </form>
          </div>

        </div>
      </div>

    </main>
  </div>

</body>

</html>
