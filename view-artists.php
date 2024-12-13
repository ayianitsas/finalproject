<div class="row">
  <div class="col">
<h1><strong>Artists</strong></h1>
      </div>
  <div class="col-auto">
<?php
include "view-artists-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table style="width:100%; border-collapse: collapse;">
    <thead style="background: linear-gradient(to right, #e91e63, #2196F3); color: black;">
      <tr>
        <th><b>ID</b></th>
        <th><b>Name</b></th>
        <th><b>Genre</b></th>
        <th><b>Click here to view labels!</b></th>
        <th></th>
        <th></th>
        <th></th>


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


        
          <td><a href="labels-for-artists.php?id=<?php echo $artist['artist_id']; ?>">Labels</a>
        

        <td id="hidelabels">
          <div id="jsfunction1" class="section">
            <button class="btn btn-primary" type="button" onclick="document.getElementById('hidelabels').style.display='none'">Hide</button>
          </div>    

              <td id="hidelabels2">
          <div id="jsfunction2" class="section">
            <button class="btn btn-primary" type="button" onclick="document.getElementById('hidelabels').style.display='none'">Hide</button>
          </div>    

            
         </td>
        </b>
        <td>

          
      <?php
      include "view-artists-editform.php";
      ?>
        </td>
        <td>
           <form method="post" action="">
        <input type="hidden" name="aid" value="<?php echo $artist['artist_id']; ?>">
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
