<?php
session_start();

include_once "src/topic.php";
include_once "src/comment.php";
include_once "src/user.php";
include_once "src/utils.php";
include_once "src/session.php";

if (!isset($_GET["id"]) || intval($_GET["id"]) <= 0)
  redirect("404.php");

$topic = pullTopic($_GET["id"]);
$topicUser = pullUser($topic["user_id"]);
$commentList = pullCommentList($_GET["id"]);

if (empty($topic))
  redirect("404.php");

// Add New comment
if (isset($_POST['submit'])) {
  if (isset($_POST['content']) && !empty($_POST['content'])) {
    $content = htmlspecialchars($_POST['content']);
    $createComment = createComment($content, date("Y-m-d H:i:s"));

    $createComment = linkUserToComment($createComment, getConnectedUser());
    $createComment = linkTopicToComment($createComment, $topic);
    pushComment($createComment);
    header("Location: topic.php?id=" . $topic['id']);
  }
}

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <meta charset="utf-8">
  <title><?= $topic["name"] ?></title>
</head>

<body>
  <?php include("includes/header.php") ?>

  <div class="d-flex">

    <?php include("includes/sidebar.php") ?>
    <main>
      <div class="blocategorie">
        <div class="titrecat">
          <div class="row m-0 p-0">
            <div class="col-12 col-md-6 blockTitle_topic">
              <p><?= $topic["name"] ?></p>
            </div>

            <?php if (isset($connectedUser) && ($connectedUser["id"] == $topic["user_id"] || $connectedUser["role"] == "Admin" || $connectedUser["role"] == "Moderator")) { ?>
            <div class="col-12 col-md-6 row blockButton">
              <div class="button_topic mx-3">
                <a type="button" class="btn btn-warning text-dark" data-toggle="modal" data-target="#exampleModal"> Editer </a>
              </div>
              <div class="button_topic mx-3">
                <a href=" deleteTopic.php?topicId=<?= $topic['id'] ?>&subcategoriesId=<?= $topic['subcategory_id'] ?>" class="btn btn-danger">Supprimer</a>
              </div>
            </div>
            <?php } ?>

          </div>


        </div>

        <div class="row p-25">


          <div class="col-12">
            <p class="tittresouscat">Par <a href="profilepage.php?id=<?= $topicUser["id"] ?>"><?= $topicUser["username"] ?></a></p>
            <p><?= $topic["date"] ?></p>

          </div>
          <div class="col-12">
            <p><?= nl2br($topic["content"]) ?></p>
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
              <div class="col-12 row m-0 p-0">
                <?php if (isset($connectedUser)) { ?>
                <form action="topic.php?id=<?= $topic['id'] ?>" method="post">
                  <div class="form-group">
                    <label for="content">Ecrire un commentaire</label>
                    <textarea class="form-control" maxlength="255" rows="10" cols="50" name="content" placeholder="Écrire un commentaire"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary mt-3" name="submit" value="Envoyer le commentaire">
                  </div>
              </form>
          <?php } else { ?>
              <div class="alert alert-info">
                  <p>Vous devez être connecter pour pouvoir ajouté un commentaire.</p>
              </div>
          <?php } ?>

              </div>

            </div>
            <?php
            foreach ($commentList as $comment) {
              $user = pullUser($comment["user_id"]);

            ?>
              <div class="col-12 blocsouscat">
                <div class="row">
                  <div class="col-6">
                    <p class="tittresouscat">Par <a href="profilepage.php?id=<?= $user["id"] ?>"><?= $user["username"] ?></a></p>
                  </div>
                  <div class="col-6">
                    <p class="text-right"><?= $comment["date"] ?></p>
                  </div>
                </div>
                <p class="font-13"><?= nl2br($comment["content"]) ?></p>
                <?php if (isset($connectedUser) && ($connectedUser["id"] == $comment["user_id"] || $connectedUser["role"] == "Admin" || $connectedUser["role"] == "Moderator")) { ?>
                <div class="row">
                  <div class="col-6 text-right">
                    <a href="deleteComment.php?commentId=<?= $comment['id'] ?>&topicId=<?= $topic['id'] ?>" class="btn btn-danger" name="deleteComment">Supprimer</a>
                  </div>
                </div>
                <?php } ?>
              </div>
          </div>
        <?php } ?>


        </div>

      </div>

  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>
    </main>
        </div>

</html>
