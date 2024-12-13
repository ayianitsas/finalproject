<body style="margin:0; padding:0;">
  <header style="margin:0; padding:30px 8px; text-align:center; background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://pbs.twimg.com/media/GF9wTFjacAADJ8G.jpg') center/cover no-repeat;">
  </header>
</body>


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
         <b>
          <td><?php echo $artist['artist_id']; ?></td>
          <td><?php echo $artist['artist_name']; ?></td>
          <td><?php echo $artist['artist_genre']; ?></td>
          <td><a href="labels-for-artists.php?id=<?php echo $artist['artist_id']; ?>">Labels</a></td>
        </b>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>



