<?php
session_start();

include_once "src/user.php";
include_once "src/utils.php";

if (isset($_GET["page"]))
{
    $page = intval($_GET["page"]);
    if ($page == 0) $page = 1;
}
else $page = 1;

$userlist = pullUserList(20, ($page * 20) - 20);
$userCount = pullUserCount();
$lastpage = ceil($userCount / 20);

if ($page > $lastpage) redirect("/members.php?page=" . $lastpage);

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="utf-8">
    <title>Liste des membres</title>
  </head>
  <body>
      <?php include("includes/header.php") ?>
    <div class="d-flex">
      <?php include("includes/sidebar.php") ?>
    <main>

      <div class="blocategorie">
        <div class="titrecat">
          <div style="padding: 10px;">
              <p>Liste des membres (Page <?= $page ?>/<?= $lastpage ?>)</p>


          </div>

        </div>
        <div class="row align-items-center">
          <div class="col-12 pt-20">
            <ul class="font-13">
                <?php foreach ($userlist as $user) { ?>
                    <li><a href="profilepage.php?id=<?= $user["id"] ?>"><?= $user["username"] ?></a></li>
                <?php } ?>
            </ul>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-12 pt-20">
            <div>
                <?php if ($page > 1) { ?>
                    <a href="/members.php?page=<?= $page - 1 ?>" type="button" class="btn btn-primary">Page Précédent</a>
                <?php }
                if ($page < $lastpage) { ?>
                    <a href="/members.php?page=<?= $page + 1 ?>" type="button" class="btn btn-primary">Page Suivant</a>
                <?php } ?>
            </div>
          </div>
        </div>


      </div>
    </main>
        </div>
        <?php include("includes/footer.php") ?>


  </body>
</html>
