<?php
require_once("connection-db.php");
require_once("model-albums.php");
require_once("model-albums-chart-db.php");

$pageTitle = "Albums";
include "view-header.php";


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertAlbum($_POST['aTitle'], $_POST['aYear'])) {
        echo '<div class="alert alert-success" role="alert">Album added!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  case "Edit":
      if (updateAlbum($_POST['aTitle'], $_POST['aYear'], $_POST['aid'])) {
        echo '<div class="alert alert-success" role="alert">Album edited!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  case "Delete":
      if (deleteAlbum($_POST['aid'])) {
        echo '<div class="alert alert-success" role="alert">Album deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}


$albums = selectAlbums();
include "view-artists-chart.php";
include "view-albums.php";
include "view-footer.php";
?>
