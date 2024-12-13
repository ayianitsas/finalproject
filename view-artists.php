<h1><strong>Artists</strong></h1>
<div class="table-responsive">
  <table class="table">

    <table style="background-color: linear-gradient(to right, #e91e63, #2196F3); color: black; border-collapse: collapse; width: 100%;">

  <thead>
    <tr>
    <th><b>ID</b></th>
    <th><b>Name</b></th>
    <th><b>Genre</b></th>
    </tr>
  </thead>
    <tbody>
          <table style="background-color: linear-gradient(to right, #e91e63, #2196F3); color: black; width: 100%; border-collapse: collapse;">

        
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
