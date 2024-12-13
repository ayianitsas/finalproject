<?php
require_once("connection-db.php");
require_once("model-artists.php");

$pageTitle = "Artists with Labels";
include "view-header.php";

// Handle form submissions (Add, Edit, Delete actions)
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertArtists($_POST['aAName'], $_POST['aGenre'])) {
        echo '<div class="alert alert-success" role="alert">Artist added!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error adding artist.</div>';
      }
      break;
    case "Edit":
      if (updateArtists($_POST['aAName'], $_POST['aGenre'], $_POST['aid'])) {
        echo '<div class="alert alert-success" role="alert">Artist edited!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error editing artist.</div>';
      }
      break;
    case "Delete":
      if (deleteArtists($_POST['aid'])) {
        echo '<div class="alert alert-success" role="alert">Artist deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error deleting artist.</div>';
      }
      break;
  }
}

$artists = selectArtists();
?>

<div class="container my-4">
  <div class="row mb-4">
    <div class="col">
      <h1>Artists with Labels</h1>
    </div>
    <div class="col-auto">
      <?php include "view-artists-with-labels-newform.php"; ?>
    </div>
  </div>
  
  <div class="card-group">
    <?php while ($artist = $artists->fetch_assoc()) { ?>
      <div class="card m-2">
        <!-- Card Header with Gradient -->
        <div class="card-header" style="background: linear-gradient(to right, #e91e63, #2196F3); color: black;">
          <strong>Artist Information</strong>
        </div>
        
        <!-- Card Body with Background Color -->
        <div class="card-body" style="background-color: #716969; color: white;">
          <h5 class="card-title"><?php echo htmlspecialchars($artist['artist_name']); ?></h5>
          
          <!-- List of Labels -->
          <ul class="list-group mb-3">
            <?php
              $labels = selectLabelsForArtists($artist['artist_id']);
              while ($label = $labels->fetch_assoc()) {
            ?>
              <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #716969; color: white; border: none;">
                <span>
                  <?php echo htmlspecialchars($label['label_name']); ?> - <?php echo htmlspecialchars($label['label_yearestablished']); ?>
                </span>
                <div>
                  <!-- Edit Form -->
                  <?php include "view-labels-editform.php"; ?>
                  
                  <!-- Delete Form -->
                  <form method="post" action="" class="d-inline">
                    <input type="hidden" name="cid" value="<?php echo htmlspecialchars($label['label_id']); ?>">
                    <input type="hidden" name="actionType" value="Delete">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">
                      <!-- Trash Icon -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                      </svg>
                    </button>
                  </form>
                </div>
              </li>
            <?php } ?>
          </ul>
          
          <p class="card-text"><small class="text-body-secondary">Genre: <?php echo htmlspecialchars($artist['artist_genre']); ?></small></p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<?php include "view-footer.php"; ?>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-wWQOk5lP+d36JSM9uJXVa7yX7E7/M3PEasNe6QfWKTb+rq7vFZopfGkm5Dkfk3S5" 
        crossorigin="anonymous"></script>

