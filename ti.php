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
  <title>News | The International</title>
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
              url('./images/blogs/ti-blog.png');
          "></div>

      <?php
        include 'includes/header.php';
      ?>

    </div>
    <div class="featured">
      <div class="container">
        <a href="#">
          <div class="title">
            An Important Update on TI10: The International - Dota 2
            Championships in Sweden
          </div>
        </a>
      </div>
    </div>
  </header>

  <section id="news">
    <div id="latest">
      <div class="container">
        <div class="latest-content">
          <div class="date">JUNE 22, 2021</div>

          <p>
            We started working with Sweden back in 2019 to get everything in
            place to hold TI10 there in 2020. When the global pandemic
            necessitated a postponement, we doubled our efforts to work in
            tandem with officials there to make sure we provided them with
            everything they needed to make this a safe and successful event
            for everyone.
          </p>
          <p>
            Over the course of the past year, Stockholm Live and Visit
            Stockholm continued to reassure us in our regular and constant
            communications with them that The International - Dota 2
            Championships qualified for the same exemptions other elite
            sporting events there received.
          </p>
          <p>
            However, despite previous reassurances, we were informed two weeks
            ago that the Swedish Sports Federation had just voted not to
            accept esports into the sports federation.
          </p>
          <p>
            In subsequent (and immediate) meetings with the Swedish Esports
            Federation (SESF) and Visit Stockholm we discovered our only
            remaining option was to ask Sweden's Minister of the Interior to
            reclassify The International - Dota 2 Championships as an elite
            sporting event. Our request was immediately denied.
          </p>
          <p>
            With the Minister of the Interior failing to recognize The
            International - Dota 2 Championships as an elite sporting event,
            anyone attempting to procure a visa for travel into Sweden for
            TI10 (including players, talent, and staff) would be denied. The
            absence of this official recognition also means individual border
            agents would be making decisions about entry for those traveling
            to the event from countries outside the EU who do not typically
            need a visa to enter Sweden.
          </p>
          <p>
            We filed an appeal directly with the Swedish government on June 9,
            but they were unable to provide assistance. On June 14 we followed
            up asking them to reconsider, and they have so far been unable to
            offer a resolution. As a result, and in light of the current
            political situation in Sweden, we have started looking for
            possible alternatives elsewhere in Europe to host the event this
            year, in case the Swedish government is unable to accommodate The
            International - Dota 2 Championships as planned. We feel confident
            that in either instance we will have a solution that allows us to
            hold TI10 in Europe this year, and that we will be able to
            announce an updated plan in the very near future.
          </p>
          <p>
            We remain committed to hosting The International this year in a
            way that is both safe for all involved, and properly celebrates
            the players and fans of Dota 2. We will be communicating what we
            find out as soon as we are able. In the meantime, TI qualifiers
            will still be happening on the originally scheduled dates starting
            June 23. And later this week, the all-new summer event Nemestice
            will arrive.
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