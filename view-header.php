<?php
$pageTitle = "Home";
include "view-header.php";
?>
<body style="background-color: #CDACB1;">
  
  <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Music Entertainment</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="artists.php">Artists</a></li>
          <li class="nav-item"><a class="nav-link" href="labels.php">Labels</a></li>
          <li class="nav-item"><a class="nav-link" href="artists-with-labels.php">Artists with Labels</a></li>
          <li class="nav-item"><a class="nav-link" href="albums.php">Albums</a></li>
          <li class="nav-item"><a class="nav-link" href="genres.php">Genres</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <header 
    style="background-image: linear-gradient(to right, #C1979D, #CDACB1, #D7BDC1, #CDACB1, #C1979D); 
           padding: 60px 20px; 
           text-align: center; 
           color: #3B2427;">
    <h1 style="font-weight: bold; font-size: 3rem; margin-bottom: 20px;">Your Music, Your Way</h1>
    <p style="max-width: 600px; margin: 0 auto 30px; font-size: 1.2rem;">
      Discover, organize, and explore the music you love—favorite artists, top genres, and more.
    </p>
    <a href="signup.php" class="btn btn-primary btn-lg me-2" style="background-color: #3B2427; border:none;">
      Get Started
    </a>
    <a href="browse.php" class="btn btn-secondary btn-lg" style="border:none;">
      Browse Music
    </a>
  </header>
  
  <main class="container my-5">
    <div class="row text-center">
      <div class="col-md-3 mb-4">
        <img src="icons/favorites.svg" alt="Favorites" class="mb-3" style="width:60px;">
        <h3 style="font-size:1.25rem; margin-bottom:10px;">Organize Your Favorites</h3>
        <p>Create custom playlists, bookmark your go-to artists, and track the genres you love.</p>
      </div>
      <div class="col-md-3 mb-4">
        <img src="icons/discover.svg" alt="Discover" class="mb-3" style="width:60px;">
        <h3 style="font-size:1.25rem; margin-bottom:10px;">Discover New Artists & Genres</h3>
        <p>Explore fresh talent, trending genres, and broaden your musical horizons.</p>
      </div>
      <div class="col-md-3 mb-4">
        <img src="icons/calendar.svg" alt="Calendar" class="mb-3" style="width:60px;">
        <h3 style="font-size:1.25rem; margin-bottom:10px;">Track Releases & Shows</h3>
        <p>Stay updated with new album drops and never miss your favorite artists’ next live gig.</p>
      </div>

    </div>
  </main>

  <?php include "view-footer.php"; ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-wWQOk5lP+d36JSM9uJXVa7yX7E7/M3PEasNe6QfWKTb+rq7vFZopfGkm5Dkfk3S5" 
          crossorigin="anonymous"></script>
</body>
</html>
