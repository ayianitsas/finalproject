<h1><strong>Artists</strong></h1>
<div class="table-responsive">
  <table style="width:100%; border-collapse: collapse;">
    <thead style="background: linear-gradient(to right, #e91e63, #2196F3); color: black;">
      <tr>
        <th><b>ID</b></th>
        <th><b>Name</b></th>
        <th><b>Genre</b></th>
        <th><b>Click here to view labels!</b></th>
      </tr>
    </thead>
    <tbody style="background-color: #484343; color: black;">
      <?php
      while ($artist = $artists->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $artist['artist_id']; ?></td>
          <td><?php echo $artist['artist_name']; ?></td>
          <td><?php echo $artist['artist_genre']; ?></td>
          <td><a href="labels-for-artists.php?id=<?php echo $artist['artist_id']; ?>">Labels</a></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>


