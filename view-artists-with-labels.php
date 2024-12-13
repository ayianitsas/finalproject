<div class="row">
  <div class="col">
<h1>Artists with Labels</h1>
  </div>
  <div class="col-auto">
<?php
include "view-artists-with-labels-newform.php";
?>
  </div>
</div>
  <div class="card-group">


    
  
  <div class="card-group">
    <?php while ($artist = $artists->fetch_assoc()) { ?>
  <div class="card m-2">
        <!-- Card Header with Gradient -->
  <div class="card-header" style="background: linear-gradient(to right, #e91e63, #2196F3); color: black;"> </div>
     <div class="card-body" style="background-color: #716969; color: white;">
      <h5 class="card-title"><?php echo $artist['artist_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $labels = selectLabelsForArtists($artist['artist_id']);
  while ($label = $labels->fetch_assoc()) {
?>
      <div class="row">
  <div class="col">
    <li class="list-group-item"><?php echo $label['label_name']; ?> - <?php echo $label['label_yearestablished']; ?>

  </div>
  <div class="col-auto ms-3">
    <?php
  include "view-labels-editform.php";  
    ?>
  </div>
  <div class="col-auto ms-3">

 
    
      <form method="post" action="">
        <input type="hidden" name="cid" value="<?php echo $label['label_id']; ?>">
        <input type="hidden" name="actionType" value="Delete">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
          </svg>
        </button>
      </form>
      </div>
</div>
    </li>
<?php    
  }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Genre: <?php echo $artist['artist_genre']; ?></small></p>
    </div>
  </div>



        
   </td> 
  



  </tr> 
 

<?php
}
?>





          
        
