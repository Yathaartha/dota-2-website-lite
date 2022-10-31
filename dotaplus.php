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
  <title>News | Dota Plus</title>
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
              url('./images/blogs/dotaplus-blog.jpg');
          "></div>

      <?php
        include 'includes/header.php';
      ?>

    </div>
    <div class="featured">
      <div class="container">
        <a href="#">
          <div class="title">Dota Plus Update - Summer 2021</div>
        </a>
      </div>
    </div>
  </header>

  <section id="news">
    <div id="latest">
      <div class="container">
        <div class="latest-content">
          <div class="date">JUNE 2, 2021</div>

          <div class="image">
            <img src="images/blogs/dotaplus.jpg" alt="" />
          </div>

          <p>
            As the blossoms of spring fade in the face of the onset of summer,
            today's patch welcomes an accompanying seasonal update for Dota
            Plus, featuring the return of High Fives and Guild Banners for
            everyone, along with a new seasonal treasure and refreshed guild
            quests & rewards.
          </p>

          <h4>High Five & Guild Banners</h4>

          <p>
            Back again, and available to all players, the High Five ability is
            here to help everyone celebrate the joys of Dota with both friends
            and foes. Because nothing accentuates the highs of a good play —
            or immortalizes a silly one — like a timely hand-to-hand
            salutation.
          </p>
          <p>
            We've also granted the Guild Banner ability to all members of a
            guild, allowing them to show off the guild's status and logo
            wherever they want during a game.
          </p>

          <h4>Dota Plus Seasonal Treasure</h4>

          <p>
            The Summer 2021 Seasonal Treasure is here, available for purchase
            with shards. Exclusive to Dota Plus members, this treasure
            features all new sets for Chaos Knight, Phantom Assassin, Outworld
            Destroyer, Wraith King, Sven, Treant Protector, Huskar,
            Brewmaster, Storm Spirit, and Naga Siren. There's also a chance to
            unlock the Trod & Cheddar courier, which comes preloaded with
            random prismatic and kinetic gems.
          </p>

          <h4>Updated Seasonal Quests & Guild Rewards</h4>

          <p>
            Today’s update also comes with a new set of Dota Plus quests to
            help reel in some extra shards for new relics and the Seasonal
            Treasure — offering up to 115,200 shards over the course of the
            season.
          </p>
          <p>
            Not to be forgotten, in addition to the rest of today's changes,
            the guild rewards for silver, gold, and platinum tier guilds have
            been switched for summer.
          </p>

          <h4>The WePlay AniMajor & the Road to the International</h4>

          <p>
            There's only one Major left standing between the top teams in the
            world and the ultimate showdown at The International. Tune in June
            2 - 13 to catch all the action in Kyiv, available to watch and
            follow in the Dota client. Witness the final clash on the way to
            Stockholm that will decide the 12 invited teams. The remaining 6
            teams will be, as usual, determined by the Regional Qualifiers,
            where each region will compete for one final slot. The Regional
            qualifiers will be distributed over a longer period of time to
            allow for teams competing in the major to respect their respective
            countries' quarantine processes.
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