<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/538af86eaa.js" crossorigin="anonymous"></script>
  <title>News | Nemestice</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Castoro&family=Noto+Sans+JP&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.css" />
  <script src="scripts/main.js" defer></script>
</head>

<body style="background: url('./images/bg.jpg') center center / cover no-repeat">
  <header style="margin-bottom: 0">
    <div class="head-container">
      <div class="header-bg" style="
            background-image: linear-gradient(
                to bottom,
                rgba(0, 0, 0, 0.6) 0%,
                rgba(0, 0, 0, 0.6) 100%
              ),
              url('./images/nemestice.jpg');
          "></div>

      <?php
        include 'includes/header.php';
      ?>

    </div>
    <div class="featured">
      <div class="container">
        <a href="#">
          <div class="title">Nemestice Falls And New Powers Rise</div>
        </a>
      </div>
    </div>
  </header>

  <section id="news">
    <div id="latest">
      <div class="container">
        <div class="latest-content">
          <div class="date">JUNE 24, 2021</div>

          <div class="image">
            <img src="images/blogs/nemestice-blog.jpg" alt="" />
          </div>

          <h4>New Event Mode & Battle Pass</h4>
          <p>
            In the wake of the Mad Moon's destruction, willful fragments of
            Radiant Ore and Direstone crashed upon our world. But a third type
            of stone—Nemestice—was left drifting behind. Now, a prophesied
            Nemestice Storm strikes the heart of the battlefield, and the
            clash of the Ancients has been forgotten. For Nemestice offers
            power over both Ancients, and in this land, there is no greater
            prize.
          </p>
          <p>
            Prepare for impact over at the Nemestice Battle Pass page, where
            you can learn more about the free event game and all the rewards
            in store for those who participate in the Battle Pass—like an
            all-new Dragon Knight Persona, Spectre Arcana, Young Invoker Dark
            Artistry Bundle, Immortal Treasure, and heaps more. And this is
            just the first offering in this year’s cadence of events—we’re
            planning a second Battle Pass later this year.
          </p>
          <h4>AMD FidelityFX Super Resolution</h4>
          <p>
            This update also adds support for AMD's FidelityFX Super
            Resolution. This technique allows the game to render at a lower
            resolution and then upscale the results with improved image
            quality. The result is high quality rendering at a lower
            performance cost than full resolution rendering, which allows for
            higher framerates even on less powerful graphics cards. Players
            can enable this setting in the Video options by turning the "Game
            Screen Render Quality" to less than 100%, and then turning on the
            "FidelityFX Super Resolution" checkbox. FidelityFX Super
            Resolution works on any GPU compatible with DirectX 11 or Vulkan.
          </p>
          <h4>The International Regional 10 Qualifiers</h4>
          <p>
            Regional Qualifiers for The International will begin as scheduled
            on June 23 and run through July 10. View the brackets for each
            region and make predictions in the watch tab of the Dota 2 client.
            More information on The International event itself will be
            available soon.
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php
  include "includes/scrollToTop.php";
  include 'includes/footer.php';
  ?>
</body>

</html>