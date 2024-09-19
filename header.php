
<?php
ob_start();
session_start();
include 'panel/baglan.php';
date_default_timezone_set('Europe/Istanbul');
$kullanicisor=$db->prepare("SELECT * FROM oyuncular where name=:isim");
$kullanicisor->execute(array(
  'isim' => $_SESSION['name']
));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
if ($say==0) {
  Header("Location:giris.php?durum=izinsiz");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>AyYıldız Hırsız Polis</title>

  <link href="css/style.default.css" rel="stylesheet">
  <link href="css/jquery.datatables.css" rel="stylesheet">

</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
  </div>


  <section>

    <div class="leftpanel">

      <div class="logopanel">
        <h1>Ay Yıldız </h1>
      </div>

      <div class="leftpanelinner">

        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">   
          <div class="media userlogged">
            <img alt="" src="images/photos/loggeduser.png" class="media-object">
            <div class="media-body">
              <h4><?php echo $kullanicicek['name'] ?></h4>

            </div>
          </div>
          
          <h5 class="sidebartitle actitle">Account</h5>
          <ul class="nav nav-pills nav-stacked nav-bracket mb30">
            <li><a href="profile.html"><i class="fa fa-user"></i> <span>Profil</span></a></li>
            <li><a href=""><i class="fa fa-cog"></i> <span>Hesab ayarları</span></a></li>
            <li><a href=""><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
            <li><a href="cikisyap.php"><i class="fa fa-sign-out"></i> <span>Çıkış</span></a></li>
          </ul>
        </div>

        <h5 class="sidebartitle">Menuler</h5>
        <ul class="nav nav-pills nav-stacked nav-bracket">
          <li><a href="index.php"><i class="fa fa-home"></i> <span>Ana Sayfa</span></a></li>
          <?php 
          if ($kullanicicek['ulvl']==10) { ?>
           <li class="nav-parent"><a href=""><i class="fa fa-users"></i> <span>Kullaniçılar</span></a>
            <ul class="children">
              <li><a href="admin.php"><i class="fa fa-caret-right"></i> Admin</a></li>
              <li><a href="user.php"><i class="fa fa-caret-right"></i> User</a></li>
              <li><a href="adminuserevler.php"><i class="fa fa-caret-right"></i> User evleri</a></li>
              <li><a href="adminuseraraclar.php"><i class="fa fa-caret-right"></i> User racları</a></li>

            </ul>
          </li>
        <?php } else{ ?>

        <?php }

        ?>
        <li ><a href="evlerim.php"><i class="fa fa-th-list"></i> <span>Evlerim</span></a></li>
        <li ><a href="araclarim.php"><i class="fa fa-car"></i> <span>Araclarim</span></a></li>

        




      </ul>



    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->

  <div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>



      <div class="header-right">
        <ul class="headermenu">

          <?php 
          if ($kullanicicek['ulvl']==10) { ?>
            <li>
              <div class="btn-group">
                <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                  <i class="glyphicon glyphicon-user"></i>
                  <span class="badge">4</span>
                </button>
                <div class="dropdown-menu dropdown-menu-head pull-right">
                  <h5 class="title">Yeni Oyuncular</h5>
                  <ul class="dropdown-list user-list">
                    <li class="new">
                      <div class="thumb"><a href=""><img src="images/photos/user1.png" alt="" /></a></div>
                      <div class="desc">
                        <h5><a href="">Draniem Daamul (@draniem)</a> <span class="badge badge-success">yeni</span></h5>
                      </div>
                    </li>
                    <li class="new"><a href="">Hepsini gör</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="btn-group">
                <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                  <i class="glyphicon glyphicon-envelope"></i>
                  <span class="badge">1</span>
                </button>
                <div class="dropdown-menu dropdown-menu-head pull-right">
                  <h5 class="title">Mesaj</h5>
                  <ul class="dropdown-list gen-list">
                    <li class="new">
                      <a href="">
                        <span class="thumb"><img src="images/photos/user1.png" alt="" /></span>
                        <span class="desc">
                          <span class="name">Draniem Daamul <span class="badge badge-success">yeni</span></span>
                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                        </span>
                      </a>
                    </li>




                    <li class="new"><a href="">Hepsini Oku</a></li>
                  </ul>
                </div>
              </div>
            </li>


            <li>
              <div class="btn-group">
                <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                  <i class="glyphicon glyphicon-globe"></i>
                  <span class="badge">5</span>
                </button>
                <div class="dropdown-menu dropdown-menu-head pull-right">
                  <h5 class="title">Bildirimler</h5>
                  <ul class="dropdown-list gen-list">
                    <li class="new">
                      <a href="">
                        <span class="thumb"><img src="images/photos/user4.png" alt="" /></span>
                        <span class="desc">
                          <span class="name">Zaham Sindilmaca <span class="badge badge-success">yeni</span></span>
                          <span class="msg">is now following you</span>
                        </span>
                      </a>
                    </li>




                    <li class="new"><a href="">Hepsine Bak</a></li>
                  </ul>
                </div>
              </div>
            </li>
          <?php }else{
            echo "";
          } ?>
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="images/photos/loggeduser.png" alt="" />
                <?php echo $kullanicicek ['name'] ?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> Profilim</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Hesab Ayarları</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Yardım</a></li>
                <li><a href="cikisyap.php"><i class="glyphicon glyphicon-log-out"></i> Çıkış</a></li>
              </ul>
            </div>
          </li>

        </ul>
      </div><!-- header-right -->

    </div><!-- headerbar -->