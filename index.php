<?php
$pageTitle = "Home";
include "view-header.php";
?>

<body style="margin:0; padding:0; background-color:#484343; font-family:Arial, sans-serif; color:#fff;">

    <header style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://pbs.twimg.com/media/GF9wTFjacAADJ8G.jpg') center/cover no-repeat; padding:100px 20px; text-align:center;">
        <h1 style="margin:0; font-weight: bold; font-size:48px;">Music Entertainment</h1>
        <p style="margin:20px 0; font-size:20px; font-weight:300;"><b>Your Music, Your Way</b></p>
        <p style="font-size:16px; max-width:500px; margin:0 auto 40px auto;">
            <b>Explore the music you love — favorite artists, top genres, and beyond.</b>
        </p>
        <a href="artists.php" 
           style="display:inline-block; margin:10px; padding:15px 30px; background:#e91e63; color:#fff; text-decoration:none; border-radius:4px; font-weight:bold;">
           Get Started
        </a>
        <a href="albums.php" 
           style="display:inline-block; margin:10px; padding:15px 30px; background:#2196F3; color:#fff; text-decoration:none; border-radius:4px; font-weight:bold;">
           Browse Music
        </a>
    </header>
    
   
    <section style="padding:60px 20px; text-align:center; background:#716969;">
        <h2 style="font-size:32px; margin-bottom:40px;"><strong>Organize, Discover & Explore</strong></h2>
        <div style="display:flex; flex-wrap:wrap; justify-content:center; max-width:1000px; margin:0 auto;">
            
            <div style="flex:1; min-width:200px; max-width:250px; margin:20px;">
                <img src="https://www.svgrepo.com/show/456453/music-folder.svg" alt="Favorites Icon" style="width:60px; margin-bottom:10px;">
                <h3 style="font-size:20px; margin:10px 0;"><strong>Organize Your Favorites</strong></h3>
                <p style="font-size:14px; line-height:1.5;">
                    <b>Document and learn more about your go-to artists.</b>
                </p>
            </div>
            
            <div style="flex:1; min-width:200px; max-width:250px; margin:20px;">
                <img src="https://www.svgrepo.com/show/13240/music-disc.svg" alt="Discover Icon" style="width:60px; margin-bottom:10px;">
                <h3 style="font-size:20px; margin:10px 0;"><strong>Discover New Music & Genres</strong></h3>
                <p style="font-size:14px; line-height:1.5;">
                    <b>Explore new album releases and trending genres.</b>
                </p>
            </div>
            
        
            
        </div>
    </section>

<?php
include "view-footer.php";
?>
</body>

