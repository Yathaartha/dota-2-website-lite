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
  <title>Dota 2</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Castoro&family=Noto+Sans+JP&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.css" />
  <script src="scripts/main.js" defer></script>
</head>

<body>
  <header>
    <div class="head-container">
      <video autoplay preload="auto" class="bg-video" muted loop>
        <source type="video/mp4"
          src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/homepage/dota_montage_02.mp4" />
        <source type="video/webm" src="./videos/dota_montage_webm.webm" />
      </video>

      <?php
        include "includes/header.php";
      ?>

      <div class="award">
        <div class="container">
          <q>A MODERN <br />MULTIPLAYER <br />MASTERPIECE</q>
          <div class="author">- DESTRUCTOID</div>
        </div>
      </div>
    </div>
  </header>

  <section id="latest">
    <div class="container">
      <div class="heading">
        <div class="title">Latest News</div>
        <a href="about.php">View All &nbsp; <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="latest-content">
        <ul>
          <li>
            <a href="nemestice.php">
              <div class="post post-1">
                <div class="text">
                  <div class="date">JUNE 24, 2021</div>
                  <div class="title">Nemestice Falls And New Powers Rise</div>
                  <div class="content">
                    New Event Mode & Battle Pass In the wake of the Mad Moon's
                    destruction, willful fragments of Radiant Ore and
                    Direstone crashed upon our world.
                  </div>
                </div>
              </div>
            </a>
          </li>

          <li>
            <a href="ti.php">
              <div class="post post-2">
                <div class="text">
                  <div class="date">JUNE 22, 2021</div>
                  <div class="title">
                    An Important Update On TI10: The International - Dota 2
                    Championships in Sweden
                  </div>
                  <div class="content">
                    We started working with Sweden back in 2019 to get
                    everything in place to hold TI10 there in 2020. When the
                    global pandemic necessitated a postponement, we doubled
                    our efforts to...
                  </div>
                </div>
              </div>
            </a>
          </li>

          <li>
            <a href="dotaplus.php">
              <div class="post post-3">
                <div class="text">
                  <div class="date">JUNE 24, 2021</div>
                  <div class="title">Dota Plus Update - Summer 2021</div>
                  <div class="content">
                    As the blossoms of spring fade in the face of the onset of
                    summer, today's patch welcomes an accompanying seasonal
                    update for Dota Plus, featuring the return of High Fives
                    and...
                  </div>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section id="description">
    <div class="container">
      <div class="title-text">
        <span>JOIN THE</span><br />
        BATTLE OF THE ANCIENTS
      </div>
      <div class="horizontal-divider"></div>
      <div class="content-text">
        Every day, millions of players worldwide enter the battle as one of
        over a hundred Dota Heroes in a 5v5 team clash. Dota is the deepest
        multi-player action RTS game ever made and there's always a new
        strategy or tactic to discover. It's completely free to play and
        always will be – start defending your ancient now.
      </div>

      <a href="news.php" class="btn">
        <h4>SEE WHAT"S NEW</h4>
      </a>
    </div>
  </section>

  <section id="choose">
    <div class="container">
      <div class="title-text">
        <span>WHO WILL YOU</span>
        <br />
        CHOOSE?
      </div>
      <div class="horizontal-divider"></div>

      <div class="content-text">
        From magical tacticians to fierce brutes and cunning rogues, Dota 2's
        hero pool is massive and limitlessly diverse. Unleash incredible
        abilities and devastating ultimates on your way to victory.
      </div>

      <div class="btn">
        <a href="https://www.dota2.com/heroes" target="_blank">VIEW ALL HEROES</a>
      </div>
    </div>
  </section>

  <section id="international">
    <div class="container">
      <div class="aegis">
        <img src="../images/dpc.svg" alt="" />
      </div>
      <div class="title-text">
        <span>THE</span>
        <br />
        DOTA PRO CIRCUIT
      </div>
      <div class="horizontal-divider"></div>
      <div class="content-text">
        When not climbing the ranks, you'll be able to learn from the best.
        The Dota Pro Circuit features ultra-high-level Dota 2 competition
        streaming regularly in the game client, on Twitch and Steam.TV.
        Culminating in the largest e-sports championship in the world, The
        International, professional Dota 2 is an event not to be missed.
      </div>
    </div>
  </section>

  <?php
  include "includes/scrollToTop.php";
  include "includes/footer.php";
  ?>
</body>

</html>