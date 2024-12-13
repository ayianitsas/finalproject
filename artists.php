<?php
require_once("connection-db.php");
require_once("model-artists.php");

$pageTitle = "Artists";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertArtist($_POST['aAName'], $_POST['aGenre'])) {
        echo '<div class="alert alert-success" role="alert">Artist added!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  case "Edit":
      if (updateArtist($_POST['aAName'], $_POST['aGenre'], $_POST['aid'])) {
        echo '<div class="alert alert-success" role="alert">Artist edited!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  case "Delete":
      if (deleteArtist($_POST['aid'])) {
        echo '<div class="alert alert-success" role="alert">Artist deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}


$artists = selectArtists();
include "view-artists.php";
include "view-footer.php";

?>
