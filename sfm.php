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
  <title>News | Short Film Contest</title>
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
              url('./images/blogs/sfm-blog.png');
          "></div>

      <?php
        include 'includes/header.php';
      ?>

    </div>
    <div class="featured">
      <div class="container">
        <a href="#">
          <div class="title">Dota 2 Short Film Contest</div>
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
            <iframe width="853" height="480" src="https://www.youtube.com/embed/1CkxxwQS8xg"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>

          <p>
            After an unexpected hiatus, we are pleased to announce the return
            of the Dota 2 Short Film Contest -- and that we're now accepting
            submissions for this year's event. Filmmakers have until 3:00pm
            PDT on July 25, 2021 to submit their short film creations of 90
            seconds or less to the Dota 2 Steam Workshop to be eligible for
            consideration.
          </p>

          <p>
            As before, we invite all fans to visit the Workshop to participate
            in the voting and discussion process to help us select the best
            entries to be showcased as part of The International 10 broadcast.
            Upon review of the Workshop ratings and discussions, Valve will
            nominate the top entries to be featured in the Dota client for a
            final voting process by the community to determine the winners.
          </p>
          <p>
            Each finalist that places in the top ten will be guaranteed to win
            $500, and the top three selections will reap prizes of $25,000,
            $10,000, and $5,000 in recognition of their contributions to the
            Dota community.
          </p>

          <p>
            Check out the Dota 2 Short Film Contest site for more information
            and guidelines on the submission process. And be sure to stop by
            the Workshop page regularly to help review the submissions you
            would like to see showcased at The International 10, live from
            Stockholm in August.
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