<?php
require_once("connection.php");
require_once("model-labels-chart-db.php");

$pageTitle = "Labels Chart";
include "view-header.php";
$labels = selectLabels();
include "view-labels-chart.php";
include "view-footer.php";
?>
