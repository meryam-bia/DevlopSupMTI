<?php
// Start the session
session_start();
// $nom = 
?>
<!doctype html>
<html lang="en">

<head>
  <title>Hello, world!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="style/material-dashboard.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="/DevlopSupMTI/profil.php" class="simple-text logo-mini">
          profil
        </a>
        <a href="/DevlopSupMTI/profil.php" class="simple-text logo-normal">
          info

        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" id="dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- chamge password -->
          <li class="nav-item active  ">
            <a class="nav-link" id="change_in">
              <i class="material-icons">settings_applications</i>
              <p>change info</p>
            </a>
          </li>
          <!-- change info -->
          <li class="nav-item active  ">
            <a class="nav-link" id="change_pss">
              <i class="material-icons">manage_accounts</i>
              <p>change password</p>
            </a>
          </li>
          <!-- list de developer -->
          <li class="nav-item active  ">
            <a class="nav-link" id="list_dev">
              <i class="material-icons">reorder</i>
              <p>list des developer</p>
            </a>
          </li>
          <!-- list de thechno -->
          <li class="nav-item active">
            <a class="nav-link" id="list_thech">
              <i class="material-icons">reorder</i>
              <p>list des thechno</p>
            </a>
          </li>
          <!-- list de html -->
          <li class="nav-item active  ">
            <a class="nav-link" id="list_html_but">
              <i class="material-icons">reorder</i>
              <p>list des html developer</p>
            </a>
          </li>
          <!-- list de developer -1 -->
          <li class="nav-item active  ">
            <a class="nav-link" id="list_1">
              <i class="material-icons">reorder</i>
              <p>list de developer -1</p>
            </a>
          </li>
          <!-- list de developer 0 -->
          <li class="nav-item active  ">
            <a class="nav-link" id="list_0">
              <i class="material-icons">segment</i>
              <p>list de developer 0</p>
            </a>
          </li>
          <!--  -->
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">notifications</i> Notifications
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content">
        <!-- your content here -->
        <div class="container-fluid">
          <div class="statistique">
            <h2>statistique</h2>
            <div class="cards">
              <div class="card_info">
                <div class="info">
                  <p>nomber de developer</p>
                  <p><?php
                      include "method/nomb_deve.php";
                      $test = new nomb_dev();
                      echo $test->rslt;

                      ?></p>
                </div>
                <div class="logo">
                  <!-- <i class="material-icons">segment</i> -->

                </div>
              </div>
              <div class="card_info">
                <div class="info">
                  <p>nomber des expert</p>
                  <p>
                    <?php
                    include "method/nomb_exp.php";
                    $test2 = new  nomb_exp();
                    echo $test2->rslt;
                    ?>
                  </p>
                </div>
                <div class="logo">
                  <!-- <i class="material-icons">segment</i> -->

                </div>
              </div>
              <div class="card_info">
                <div class="info">
                  <p>les technologier</p>
                  <p>
                    <?php
                    include "method/nomb_techno.php";
                    $test3 = new nomb_techno();
                    echo $test3->rslt;
                    ?>
                  </p>
                </div>
                <div class="logo">
                  <!-- <i class="material-icons">segment</i> -->

                </div>
              </div>
              <div class="card_info">
                <div class="info">
                  <p>expert mult</p>
                  <p><?php
                      include "method/nomb_mut.php";
                      $test4 = new nomb_mut();
                      echo $test4->rslt;

                      ?></p>
                </div>
                <div class="logo">
                  <!-- <i class="material-icons">segment</i> -->

                </div>
              </div>

            </div>
          </div>
          <div class="main_live">
            <!-- <p>test</p> -->
            <div id="change_info">
              <?php
              require "pages/change_info.php";
              ?>
            </div>
            <div id="change_password"><?php

                                      require "pages/change_password.php";
                                      ?></div>
            <div id="list_developer"><?php
                                      require "pages/add_dev.php";

                                      require "pages/show_dev.php";
                                      ?></div>
            <div id="list_techno"><?php
                                  // require "pages/add_technologe.php";
                                  ?></div>
            <div id="list_html"><?php
                                include "pages/html_exp.php";
                                ?></div>
            <div id="list_dev_0"><?php
                                  include "pages/list_dev_0.php";
                                  ?></div>
            <div id="list_dev_1"><?php
                                  include "pages/list_dev_1.php";

                                  ?></div>

          </div>
          <div id="list_thechnolo"><?php
                                    require "pages/add_technologe.php";

                                    ?></div>

        </div>
      </div>
      <!-- end content -->
    </div>
    <footer class="footer">
      <div class="container-fluid">
        <nav class="float-left">
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class="material-icons">favorite</i> by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
        </div>
        <!-- your footer here -->
      </div>
    </footer>
  </div>
  </div>
</body>
<script src="script/profil.js"></script>

</html>