<?php
session_start();

include_once "src/user.php";
include_once "src/utils.php";

if (isset($_GET["page"])) {
  $page = intval($_GET["page"]);
  if ($page <= 0) $page = 1;
} else $page = 1;

$userlist = pullUserList(20, ($page * 20) - 20);
$userCount = pullUserCount();
$lastpage = ceil($userCount / 20);

if ($page > $lastpage) redirect("members.php?page=" . $lastpage);

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
            <p>Liste des membres</p>


          </div>

        </div>
        <div class="row align-items-center m-0 p-0">
          <div class="col-12 pt-20">
            <ul class="font-13">
              <?php foreach ($userlist as $user) { ?>
                <li><a href="profilepage.php?id=<?= $user["id"] ?>"><?= $user["username"] ?></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <!-- <div class="row align-items-center p-0 m-0">
          <div class="col-12 pt-20">
            <?php if ($page > 1) { ?>
              <a href="members.php?page=<?= $page - 1 ?>" type="button" class="btn btn-primary">Page Précédent</a>
            <?php }
            if ($page < $lastpage) { ?>
              <a href="members.php?page=<?= $page + 1 ?>" type="button" class="btn btn-primary">Page Suivant</a>
            <?php } ?>
          </div>
        </div> -->

        <nav class="paginationBlock" aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <?php if ($page > 1) { ?>
              <li class="page-item"><a class="page-link" href="members.php?page=<?= $page - 1 ?>">Previous</a></li>
              <?php }

            for ($i = 1; $i <= $lastpage; $i++) {
              if ($i == $page) { ?>

                <li class="page-item active"><a class="page-link" href="members.php?page=<?= $i ?>"><?= $i ?></a></li>
              <?php } else { ?>
                <li class="page-item"><a class="page-link" href="members.php?page=<?= $i ?>"><?= $i ?></a></li>
              <?php  } ?>
            <?php }
            if ($page < $lastpage) { ?>
              <li class="page-item"><a class="page-link" href="members.php?page=<?= $page + 1 ?>">Next</a></li>
            <?php } ?>
          </ul>
        </nav>


      </div>
    </main>
  </div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>