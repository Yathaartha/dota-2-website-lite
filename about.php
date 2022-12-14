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
  <title>Dota 2 | About</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Castoro&family=Noto+Sans+JP&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.css" />
  <script src="scripts/main.js" defer></script>
  <script src="scripts/slideshow.js" defer></script>
</head>

<body style="background: url('./images/bg.jpg') center center / cover no-repeat">
  <header style="margin-bottom: 0" id="about-header">
    <div class="head-container">
      <div class="header-bg">
        <div class="slideshow-container">
          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <img src="images/about/windranger.png" />
          </div>

          <div class="mySlides fade">
            <img src="images/about/tiny.jpg" />
          </div>

          <div class="mySlides fade">
            <img src="images/about/invoker.jpg" />
          </div>
        </div>
      </div>

      <?php
        include 'includes/header.php';
      ?>

    </div>
    <div class="featured">
      <div class="container">
        <a href="#">
          <div class="title">About</div>
        </a>
      </div>
    </div>
  </header>

  <section id="news">
    <div id="latest">
      <div class="container">
        <div class="latest-content">
          <div class="image">
            <img src="images/dpc.svg" alt="" />
          </div>

          <p>
            Dota 2 is a multiplayer online battle arena (MOBA) video game
            developed and published by Valve. The game is a sequel to Defense
            of the Ancients (DotA), which was a community-created mod for
            Blizzard Entertainment's Warcraft III: Reign of Chaos. Dota 2 is
            played in matches between two teams of five players, with each
            team occupying and defending their own separate base on the map.
            Each of the ten players independently controls a powerful
            character, known as a "hero", who all have unique abilities and
            differing styles of play. During a match players collect
            experience points and items for their heroes to successfully
            defeat the opposing team's heroes in player versus player combat.
            A team wins by being the first to destroy the other team's
            "Ancient", a large structure located within their base.
          </p>

          <div class="image">
            <img src="images/about/dota-dragons-blood-artwork.jpg" alt="" />
          </div>

          <p>
            Development of Dota 2 began in 2009 when IceFrog, lead designer of
            Defense of the Ancients, was hired by Valve to create a modernized
            remake for them in the Source game engine. It was released for
            Microsoft Windows, OS X, and Linux via the digital distribution
            platform Steam in July 2013, following a Windows-only open beta
            phase that began two years prior. The game is fully free-to-play
            with no heroes or any other gameplay element needing to be bought
            or otherwise unlocked. To maintain it, Valve supports the game as
            a service, selling loot boxes and a battle pass subscription
            system called Dota Plus that offer non-gameplay altering virtual
            goods in return, such as hero cosmetics and audio replacement
            packs. The game has also been updated with various other features
            since release, such as a port to the Source 2 engine and support
            for virtual reality.
          </p>
          <p>
            Dota 2 has a large esports scene, with teams from around the world
            playing in various professional leagues and tournaments. Valve
            manages an event format known as the Dota Pro Circuit, which are a
            series of tournaments that award qualification points for earning
            direct invitations to The International, the game's premier annual
            tournament. Internationals feature a crowdfunded prize money
            system that has seen amounts in upwards of US$30 million, making
            Dota 2 the most lucrative esports game. Media coverage of most
            tournaments is done by a selection of on-site staff who provide
            commentary and analysis for the ongoing matches, similar to
            traditional sporting events. In addition to playing live to
            audiences in arenas and stadiums, broadcasts of them are also
            streamed over the internet, and sometimes simulcast on television
            networks, with peak viewership numbers in the millions.
          </p>

          <div class="image">
            <img src="images/about/DOTA-dragons-blood-world-explained.jpg" alt="" />
          </div>

          <p>
            Despite some criticism going towards its steep learning curve and
            overall complexity, Dota 2 was praised for its rewarding gameplay,
            production quality, and faithfulness to its predecessor, with many
            considering it to be one of the greatest video games of all time.
            It has been one of the most played games on Steam since its
            release, with over a million concurrent players at its peak. The
            popularity of the game has led to official merchandise and media
            adaptations for it being produced, including comic books and an
            anime series, as well as promotional tie-ins to other games and
            media. The game also allows for the community to create their own
            gamemodes, maps, and cosmetics, which are uploaded to the Steam
            Workshop. Two spinoff games, Artifact and Dota Underlords, were
            also released by Valve. Dota 2 has also been used in machine
            learning experiments, with a team of bots known as the OpenAI Five
            showing the capability to defeat professional players.
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