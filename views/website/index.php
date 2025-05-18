<?php

use Models\Game;

session_start();
require_once '../../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GAMERZ KART</title>
  <link rel="stylesheet" href="css/home.css" />
</head>

<body>
  <!-- Navigation Bar -->
  <?php
  include 'nav.php';
  ?>

  <header class="banner">
    <img src="images/Ikon.jpg" alt="Banner Image" class="banner-img" />
    <div class="banner-flash"></div>
    <h1 class="banner-title">Welcome to GAMERZ KART</h1>
  </header>
  <?php if (isset($_SESSION['success'])): ?>
    <div id="toast-success" style="position: fixed; top: 20px; right: 20px; background: #4BB543; color: #fff; padding: 16px 24px; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); z-index: 9999;">
      <?php echo htmlspecialchars($_SESSION['success']); ?>
    </div>
    <script>
      setTimeout(function() {
        var toast = document.getElementById('toast-success');
        if (toast) toast.style.display = 'none';
      }, 3000);
    </script>
  <?php endif; ?>
  <?php
  $games = (new Game)->selectAll();
  ?>
  <!-- Carousel Section -->
  <section class="carousel">
    <div class="carousel-viewport">
      <div class="carousel-track">
        <?php
        foreach ($games as $game) {
        ?>
          <div class="carousel-slide">
            <img src="images/<?php echo $game['thumbnail'] ?>" alt="Game 1 Thumbnail" class="carousel-thumb" />
            <div class="carousel-caption">
              <h3><?php echo $game['title'] ?></h3>
              <p><?php echo $game['genre'] ?></p>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
</body>

</html>
<?php
unset($_SESSION['success']);
?>