<div class="row">
  <div class="col">
<h1><strong>Albums by Label</strong></h1>
      </div>
  <div class="col-auto">
<?php
include "view-albums-by-label-newform.php";
?>
 </div>
</div>
<div class="table-responsive">
  <table style="width:100%; border-collapse: collapse;">
    <thead style="background: linear-gradient(to right, #e91e63, #2196F3); color: black;">
      <tr>
       <th><b>ID</b></th>
      <th><b>Name</b></th>
      <th><b>Year Established</b></th>
      <th><b>Album Title</b></th>
      <th><b>Year</b></th>
      <th></th>
      <th></th>
      <th></th>
      </tr>
    </thead>
    <tbody style="background-color: #484343; color: black;">
     

<?php
while ($album = $albums->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $album['label_id']; ?></td>
    <td><?php echo $album['label_name']; ?></td>
    <td><?php echo $album['label_yearestablished']; ?></td>
    <td><?php echo $album['title']; ?></td>
    <td><?php echo $album['year']; ?></td>
  </tr>
<?php
}
?>
      
    </tbody>
  </table>
</div>
