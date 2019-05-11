
<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
      <nav>
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li class="">
            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <img src="<?=$baseurl?>assets/nophoto.png" alt="">
                  <?php
                    $name = $_SESSION['nama'];
                    $name = explode(" ",$name);
                    echo $name[0].' ' . $name[1];
                  ?>
              <span class=" fa fa-angle-down"></span>
            </a>
            <ul class="dropdown-menu dropdown-usermenu pull-right">
              <li><a href="<?=$baseurl?>menu/profile/view.php"> Profile</a></li>
              <li><a href="<?=$baseurl?>logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- /top navigation -->
