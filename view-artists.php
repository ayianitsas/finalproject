<div class="row">
  <div class="col">
    <h1>Artists with Labels</h1>
  </div>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Genre</th>
      <th>Click here to view labels!</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($artist = $artists->fetch_assoc()) { ?>
      <tr id="row-<?php echo $artist['artist_id']; ?>">
        <td><?php echo $artist['artist_id']; ?></td>
        <td><?php echo $artist['artist_name']; ?></td>
        <td><?php echo $artist['artist_genre']; ?></td>
        <td>
          <div id="labels-<?php echo $artist['artist_id']; ?>" class="labels-section">
            <ul>
              <?php
              $labels = selectLabelsForArtists($artist['artist_id']);
              while ($label = $labels->fetch_assoc()) { ?>
                <li><?php echo $label['label_name']; ?> - <?php echo $label['label_yearestablished']; ?></li>
              <?php } ?>
            </ul>
          </div>
        </td>
        <td>
          <button class="btn btn-primary" type="button" 
            onclick="document.getElementById('labels-<?php echo $artist['artist_id']; ?>').style.display='none'">
            Hide
          </button>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

