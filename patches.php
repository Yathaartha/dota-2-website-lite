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
  <!-- <script src="scripts/patches.js" defer></script> -->
</head>

<body style="background: url('./images/bg.jpg') center center / cover no-repeat">
  <header id="patches-header">
    <div class="head-container">
      <?php
        include 'includes/header.php';
      ?>
    </div>
  </header>

  <section id="patches-content">
    <div class="title">
      <div class="container">
        <div class="left-content">
          <div class="title-text">
            <span>Gameplay Update</span>
            <br />
            <?php echo isset($_POST['patch-notes']) ? $_POST['patch-notes'] : "7.29d" ?>
          </div>
        </div>
        <div class="right-content">
          <form action="" method="POST">
            <select name="patch-notes" id="patches-notes" onchange="this.form.submit()">
              <option value="7.29d">7.29d</option>
              <option value="7.29c">7.29c</option>
              <option value="7.29b">7.29b</option>
              <option value="7.29a">7.29a</option>
            </select>
            <noscript>
              <input type="submit" value="Submit" />
            </noscript>
          </form>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container">
        <div class="active">
          <?php
            include "includes/connection.php";
            $patchNotes = isset($_POST['patch-notes']) ? $_POST['patch-notes'] : "7.29d";

            $query = "SELECT * FROM PATCHES WHERE PATCH_NAME = '$patchNotes'";
            $result = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($result)){
              echo "<div class='items'>
                <div class='patch-title'>GENERAL UPDATES</div>
                  " . $row['GENERAL_CONTENT'] . "
              </div>
              <div class='items'>
                <div class='patch-title'>ITEM UPDATES</div>
                  " . $row['ITEMS_CONTENT'] . "
              </div>
              <div class='items'>
                <div class='patch-title'>HERO UPDATES</div>
                  " . $row['HEROES_CONTENT'] . "
              </div>";
            }
          ?>
        </div>
        <!-- 
        <div class="c">
          <div class="items">
            <div class="patch-title">GENERAL UPDATES</div>
            <div class="updates">
              <ul>
                <li>
                  <ul>
                    <li>
                      Water Rune restore reduced from 100/80 HP/Mana to 80/80
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="items">
            <div class="patch-title">ITEM UPDATES</div>
            <div class="updates">
              <ul>
                <li>
                  <div class="item-title">
                    <img src="images/patches/solar_crest.png" alt="" />
                    SOLAR CREST
                  </div>
                  <ul>
                    <li>Attack speed bonus reduced from 65 to 55</li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/ring_of_basilius.png" alt="" />
                    RING OF BASILIUS
                  </div>
                  <ul>
                    <li>Self mana regen bonus reduced from +0.6 to +0.5</li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/ward_sentry.png" alt="" />
                    SENTRY WARD
                  </div>
                  <ul>
                    <li>Stock replenish time reduced from 85 to 75</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="items">
            <div class="patch-title">HERO UPDATES</div>
            <div class="updates">
              <ul>
                <li>
                  <div class="item-title">
                    <img src="images/patches/batrider.png" alt="" />
                    BATRIDER
                  </div>
                  <ul>
                    <li>Movement speed increased from 295 to 300</li>
                    <li>Attack range increased from 375 to 400</li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/broodmother.png" alt="" />
                    BROODMOTHER
                  </div>
                  <ul>
                    <li>Scepter no longer unlocks maximum movement speed</li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/grimstroke.png" alt="" />
                    GRIMSTROKE
                  </div>
                  <ul>
                    <li>
                      Level 15 Talent reduced from +20% Ink Swell Movement
                      Speed to +16%
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/invoker.png" alt="" />
                    INVOKER
                  </div>
                  <ul>
                    <li>
                      Attack speed bonus reduced from 2/4/6/8/10/12/14 to
                      1/2/3/4/5/6/7
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="b">
          <div class="items">
            <div class="patch-title">GENERAL UPDATES</div>
            <div class="updates">
              <ul>
                <li>
                  <ul>
                    <li>
                      Small camps XP bounties reduced by 10%
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="items">
            <div class="patch-title">ITEM UPDATES</div>
            <div class="updates">
              <ul>
                <li>
                  <div class="item-title">
                    <img src="images/patches/bfury.png" alt="" />
                    BATTLE FURY
                  </div>
                  <ul>
                    <li>Bonus damage increased from 55 to 60</li>
                    <li>Quell bonus damage reduced from 18 to 15</li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/bottle.png" alt="" />
                    BOTTLE
                  </div>
                  <ul>
                    <li>
                      Rune stored duration reduced from 120 seconds to 90 seconds</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="items">
            <div class="patch-title">HERO UPDATES</div>
            <div class="updates">
              <ul>
                <li>
                  <div class="item-title">
                    <img src="images/patches/antimage.png" alt="" />
                    ANTI-MAGE
                  </div>
                  <ul>
                    <li>Base armor increased by 1</li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/bounty_hunter.png" alt="" />
                    BOUNTY HUNTER
                  </div>
                  <ul>
                    <li>Shard damage reduction reduced from 40% to 35%</li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/dazzle.png" alt="" />
                    DAZZLE
                  </div>
                  <ul>
                    <li>
                      Level 15 Talent reduced from +250 Heal On Shallow Grave
                      End to +225
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/drow_ranger.png" alt="" />
                    DROW RANGER
                  </div>
                  <ul>
                    <li>Slow reduced from 15/30/45/60% to 10/25/40/55%</li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/ember_spirit.png" alt="" />
                    EMBER SPIRIT
                  </div>
                  <ul>
                    <li>Creep damage reduction reduced from 50% to 40%</li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/kunkka.png" alt="" />
                    KUNKKA
                  </div>
                  <ul>
                    <li>Movement speed increased from 300 to 305</li>
                    <li>Base armor increased by 1</li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/lycan.png" alt="" />
                    LYCAN
                  </div>
                  <ul>
                    <li>Base armor increased by 1</li>
                    <li>Agility gain increased from 1.4 to 1.7</li>
                    <li>Intelligence gain increased from 1.4 to 1.7</li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/monkey_king.png" alt="" />
                    MONKEY KING
                  </div>
                  <ul>
                    <li>
                      Level 15 Talent increased from +100 Jingu Mastery Damage
                      to +130
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="a">
          <div class="items">
            <div class="patch-title">GENERAL UPDATES</div>
            <div class="updates">
              <ul>
                <li>
                  <ul>
                    <li>Terrain updated with various changes</li>
                    <li>
                      Added Water Power Rune. Spawns at both Power Rune
                      locations only at minute 2 and 4. Instantly restores 100
                      health and 80 mana when used. Can be used to fill
                      bottles. Starting at 6 minutes, Power Runes spawn as
                      usual on one side.
                    </li>
                    <li>
                      Added +2 Attributes leveling for up to 7 times (for the
                      7 empty levels from 1-26), and can be leveled in any
                      order (via clicking on the talent tree circle). They
                      will automatically be leveled if there are no other
                      options available.
                    </li>
                    <li>
                      Outposts no longer give XP at the 10/20/30/etc minute
                      mark
                    </li>
                    <li>
                      Bounty Runes after the initial set are reduced by 10%
                    </li>
                    <li>
                      Hero kill assist gold now adjusted based on the relative
                      NW difference between the two teams. For example, if
                      your team is down 5,000 gold and the enemy has 50,000
                      total net worth, your assist gold will be worth 10%
                      more.
                    </li>
                    <li>
                      Heroes now start the game with 1 TP scroll rather than 3
                    </li>
                    <li>
                      Aghanim's Scepter: Roshan drop now requires you to
                      activate it to consume it (has no effect until consumed)
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="items">
            <div class="patch-title">ITEM UPDATES</div>
            <div class="updates">
              <ul>
                <li>
                  <div class="item-title">
                    <img src="images/patches/tango.png" alt="" />
                    TANGO
                  </div>
                  <ul>
                    <li>
                      Shared tangos now expire after 40 seconds. Tango pooling
                      has been removed from the Strategy Phase UI.
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/necronomicon.png" alt="" />
                    NECRONOMICON
                  </div>
                  <ul>
                    <li>Removed Item</li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/satanic.png" alt="" />
                    SATANIC
                  </div>
                  <ul>
                    <li>Cooldown reduced from 35 to 25</li>
                    <li>Unholy Rage can no longer be dispelled</li>
                    <li>Unholy Rage now applies a basic dispel on cast</li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/swift_blink.png" alt="" />
                    SWIFT BLINK
                  </div>
                  <ul>
                    <li>No longer ignores movement speed limit</li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/mjollnir.png" alt="" />
                    MJOLLNIR
                  </div>
                  <ul>
                    <li>Chain Lightning damage increased from 170 to 180</li>
                    <li>Static Charge damage increased from 200 to 225</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="items">
            <div class="patch-title">HERO UPDATES</div>
            <div class="updates">
              <ul>
                <li>
                  <div class="item-title">
                    <img src="images/patches/batrider.png" alt="" />
                    BATRIDER
                  </div>
                  <ul>
                    <li>
                      Reworked Shard. Now causes Flamebreak to have two
                      charges and apply a Sticky Napalm charge on impact.
                    </li>
                    <li>Level 10 Talent increased from +4 Armor to +6</li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/broodmother.png" alt="" />
                    BROODMOTHER
                  </div>
                  <ul>
                    <li>Agility increased by 4</li>
                    <li>Incapacitating Bite has been removed.</li>
                    <li>
                      Spawn Spiderling debuff duration increased from 5 to 20
                    </li>
                    <li>
                      Spawn Spiderling debuff stacks (multiple instances of
                      spiders will come out)
                    </li>
                    <li>
                      Reworked Shard. Now causes Silken Bola to be a 550 AoE
                      spell and increases the miss rate to 80%
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/grimstroke.png" alt="" />
                    GRIMSTROKE
                  </div>
                  <ul>
                    <li>
                      Reworked Shard upgrade. Causes Ink Swell to deal 50%
                      more damage and heal the target for 50% of the damage
                      Ink Swell deals. Upon expiration, the target will
                      receive a strong dispel.
                    </li>
                    <li>
                      Level 10 Talent changed from +100 Cast Range to +50
                      Phantom's Embrace DPS
                    </li>
                    <li>
                      Level 10 Talent increased from -4s Ink Swell Cooldown to
                      -6
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="item-title">
                    <img src="images/patches/invoker.png" alt="" />
                    INVOKER
                  </div>
                  <ul>
                    <li>
                      Reworked Shard upgrade. Causes two extra Chaos Meteors
                      to land alongside the primary cast at slight angles.
                      Reduces cooldown by 15 seconds.
                    </li>
                    <li>
                      Level 15 Talent increased from +40 DPS Ice Wall to +60
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <?php
  include "includes/scrollToTop.php";
  include 'includes/footer.php';
  ?>
</body>

</html>