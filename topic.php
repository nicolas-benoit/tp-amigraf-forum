<?php
session_start();

include_once "src/topic.php";
include_once "src/comment.php";
include_once "src/user.php";
include_once "src/utils.php";

if (!isset($_GET["id"]) || intval($_GET["id"]) <= 0)
    redirect("404.php");

$topic = pullTopic($_GET["id"]);
$topicUser = pullUser($topic["user_id"]);
$commentList = pullCommentList($_GET["id"]);

if (empty($topic))
    redirect("404.php");

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
          <div class="row">
            <div class="col-8">
              <div style="padding: 10px;">
                  <p><?= $topic["name"] ?></p>


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

              <div class="">
             <p class="tittresouscat">Par <a href="profilepage.php?id=<?= $topicUser["id"] ?>"><?= $topicUser["username"] ?></a></p>
            <p><?= $topic["date"] ?></p>

        </div>
        <p><?= $topic["content"] ?></p>
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
          <p class="font-13"><?= $comment["content"] ?></p>
          <div class="row">
            <div class="col-12 text-right">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Supprimer le commentaire</button>
            </div>
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
        <?php include("includes/footer.php") ?>

  </body>
</html>
