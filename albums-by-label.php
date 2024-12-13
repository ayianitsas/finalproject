<?php
require_once("connection-db.php");
require_once("model-albums-by-label.php");

$pageTitle = "Albums by Label";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertAlbum($_POST['title'], $_POST['year'])) {
        echo '<div class="alert alert-success" role="alert">Album added!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}


$albums = selectAlbumsByLabel($_POST['cid']);
include "view-albums-by-label.php";
include "view-footer.php";
?>
