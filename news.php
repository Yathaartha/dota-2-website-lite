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
    </div>
    <div class="featured">
      <div class="container">
        <a href="nemestice.php">
          <div class="title">Nemestice Falls And New Powers Rise</div>
        </a>
      </div>
    </div>
  </header>

  <section id="news">
    <div id="latest">
      <div class="container">
        <div class="heading">
          <div class="title">News</div>
          <form action="" method="GET" class="search-form">
            <input placeholder="Search title" type="search" name="search" id="search" class="search"
              value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
            <button class="search-btn">Go</button>
          </form>
        </div>
        <!-- create a sort bar which sorts the search results according to date or alphabetically -->
        <div class="sort-bar">
          <div class="sort-left">
            <div class="sort-title">Sort By: </div>
            <div class="sort-btn">
              <a href=<?php 
                  if(isset($_GET['search']) && isset($_GET['order'])){
                    if($_GET['order'] == 'ASC'){
                      echo "news.php?sort=DATE&order=ASC&search=" . $_GET['search'];
                    }else{
                      echo "news.php?sort=DATE&order=DESC&search=" . $_GET['search'];
                    }
                  }else if (isset($_GET['search'])){
                    echo "news.php?sort=DATE&search=" . $_GET['search'];
                  }else if (isset($_GET['order'])){
                    echo "news.php?sort=DATE&order=" . $_GET['order'];
                  }else{
                    echo "news.php?sort=DATE";
                  }
                ?>>Date</a>
            </div>
            <div class="sort-btn">
              <a href=<?php 
                  if(isset($_GET['search']) && isset($_GET['order'])){
                    if($_GET['order'] == 'ASC'){
                      echo "news.php?sort=TITLE&order=ASC&search=" . $_GET['search'];
                    }else{
                      echo "news.php?sort=TITLE&order=DESC&search=" . $_GET['search'];
                    }
                  }else if (isset($_GET['search'])){
                    echo "news.php?sort=TITLE&search=" . $_GET['search'];
                  }else if (isset($_GET['order'])){
                    echo "news.php?sort=TITLE&order=" . $_GET['order'];
                  }else{
                    echo "news.php?sort=TITLE";
                  }
                ?>>Alphabetically</a>
            </div>
          </div>
          <div class="sort-right">
            <div class="sort-title">Order: </div>
            <div class="sort-btn">
              <a href=<?php 
                if(isset($_GET['search']) && isset($_GET['sort'])){
                  if($_GET['sort'] == 'DATE'){
                    echo "news.php?sort=DATE&order=ASC&search=" . $_GET['search'];
                  }else{
                    echo "news.php?sort=TITLE&order=ASC&search=" . $_GET['search'];
                  }
                }else if(isset($_GET['search'])){
                  echo "news.php?order=ASC&search=" . $_GET['search'];
                }else if(isset($_GET['sort'])){
                  echo "news.php?order=ASC&sort=" . $_GET['sort'];
                }else{
                  echo "news.php?order=ASC";
                }
              ?>>Ascending</a>
            </div>
            <div class="sort-btn">
              <a href=<?php 
                if(isset($_GET['search']) && isset($_GET['sort'])){
                  if($_GET['sort'] == 'DATE'){
                    echo "news.php?sort=DATE&order=DESC&search=" . $_GET['search'];
                  }else{
                    echo "news.php?sort=TITLE&order=DESC&search=" . $_GET['search'];
                  }
                }else if(isset($_GET['search'])){
                  echo "news.php?order=DESC&search=" . $_GET['search'];
                }else if(isset($_GET['sort'])){
                  echo "news.php?order=DESC&sort=" . $_GET['sort'];
                }else{
                  echo "news.php?order=DESC";
                }
              ?>>Descending</a>
            </div>
          </div>
        </div>
        <div class="latest-content">
          <ul>
            <?php
              if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
                include "includes/connection.php";
                $search = isset($_GET['search']) ? $_GET['search'] : '';
                $sort = isset($_GET['sort']) ? $_GET['sort'] : 'BLOG_ID';
                $order = isset($_GET['order']) ? $_GET['order'] : 'ASC';
                $query = "SELECT * FROM BLOGS WHERE TITLE LIKE '%$search%' ORDER BY $sort $order";
                $result = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($result)){
                  echo "<li>
                  <a href='" . $row['LINK'] . "'>
                    <div class='post post-" . $row['BLOG_ID'] ."'>
                      <div class='text'>
                        <div class='date'>" . $row['DATE'] . "</div>
                        <div class='title'>"
                          . $row['TITLE'] .
                        "</div>
                        <div class='content'>"
                          . $row['sub_title'] .
                        "</div>
                      </div>
                    </div>
                  </a>
                </li>";
                }
              }else{
                echo "<div class='authorization-msg'>
                  <h1>You must be logged in to view this content</h1>
                  <a href='login.php'>Login</a>
                </div>";
              }
            ?>
            <!-- <li>
              <a href="nemestice.php">
                <div class="post post-1">
                  <div class="text">
                    <div class="date">JUNE 24, 2021</div>
                    <div class="title">
                      Nemestice Falls And New Powers Rise
                    </div>
                    <div class="content">
                      New Event Mode & Battle Pass In the wake of the Mad
                      Moon's destruction, willful fragments of Radiant Ore and
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
                      As the blossoms of spring fade in the face of the onset
                      of summer, today's patch welcomes an accompanying
                      seasonal update for Dota Plus, featuring the return of
                      High Fives and...
                    </div>
                  </div>
                </div>
              </a>
            </li>

            <li>
              <a href="sfm.php">
                <div class="post post-4">
                  <div class="text">
                    <div class="date">MAY 15, 2021</div>
                    <div class="title">Dota 2 Short Film Contest</div>
                    <div class="content">
                      After an unexpected hiatus, we are pleased to announce
                      the return of the Dota 2 Short Film Contest -- and that
                      we're now accepting submissions for this year's event.
                    </div>
                  </div>
                </div>
              </a>
            </li> -->
          </ul>
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