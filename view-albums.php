<div class="row">
  <div class="col">
<h1><strong>Albums</strong></h1>
      </div>
  <div class="col-auto">
<?php
include "view-albums-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table style="width:100%; border-collapse: collapse;">
    <thead style="background: linear-gradient(to right, #e91e63, #2196F3); color: black;">
      <tr>
        <th><b>ID</b></th>
        <th><b>Title</b></th>
        <th><b>Year</b></th>
        <th></th>
        <th></th>
 
 

      </tr>
    </thead>
    <tbody style="background-color: #484343; color: black;">

      
<?php
while ($album = $albums->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $album['album_id']; ?></td>
    <td><?php echo $album['title']; ?></td>
    <td><?php echo $album['year']; ?></td>
    <td>
<?php
include "view-albums-editform.php";
?>
              
    </td>
    <td>
      <form method="post" action="">
        <input type="hidden" name="aid" value="<?php echo $album['album_id']; ?>">
        <input type="hidden" name="actionType" value="Delete">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
          </svg>
        </button>
      </form>
      
    </td>
   
  </tr>
<?php
}
?> 
    </tbody>
  </table>
</div>
