<h1><strong>Labels for Artists</strong></h1>
<div class="table-responsive">
  <table style="width:100%; border-collapse: collapse;">
    <thead style="background: linear-gradient(to right, #e91e63, #2196F3); color: black;">
      <tr>
    <th><b>ID</b></th>
    <th><b>Name</b></th>
    <th><b>Year Established</b></th>
      </tr>
    </thead>
    <tbody style="background-color: #484343; color: black;">
<?php
while ($label = $labels->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $label['label_id']; ?></td>
    <td><?php echo $label['label_name']; ?></td>
    <td><?php echo $label['label_yearestablished']; ?></td>
  </tr>
<?php
}
?>
      
    </tbody>
  </table>
</div>


