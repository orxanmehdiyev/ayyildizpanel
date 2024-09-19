<?php 
require_once 'header.php'
?>        
<div class="pageheader">
  <h2><i class="fa fa-home"></i> Ana Sayfa </h2>
  <div class="breadcrumb-wrapper">
  
  </div>
</div>    
<div class="contentpanel"> 
  <div class="panel panel-default">  
    <div class="panel-body">
     <?php
     if($kullanicicek["ulvl"]>=6){ 
      ?>

      <?php


      $tarih = date("d.m.Y");
      echo'<center><b><i class="fa fa-male" aria-hidden="true"></i>AyYıldız Hırsız Polis - Admin Ekibi  - ';
      echo "".$tarih."<br>";
      echo '
      <table >
      <thead>
      <th></th>
      <tr>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kullanıcı Adı</th>
      <th>Level</th>
      <th>Durum</th>
      <th>Son Giriş</th>
      <th>Günlük Online Süresi</th>       
      <hr>      
      <th>Toplam Görev Süresi</th> 
      </tr>
      </thead>
      <tbody>
      <tr>';
      $ara = $db->prepare("SELECT * FROM oyuncular WHERE ulvl > 0 ORDER BY ulvl DESC LIMIT 30");
      $ara->execute();
      while($a=$ara->fetch(PDO::FETCH_ASSOC))
      {   
        $adminlevel = $a["ulvl"];
        if($adminlevel  < 1) continue;

        @$toplam++;
        $kisi = $a["name"];
        $seviye = $a["ulvl"];
        $durum = $a["oyundurum"];
        $songiris = $a["songiris"];
        $bugunonline = $a["gunlukonline"];
        $odurum ="";
        $hours = ($bugunonline/(60*60))%24;
        $minutes = ($bugunonline/60)%60;
        $ara2 = $db->prepare("SELECT * FROM yonetimkimlik WHERE name = '$kisi'");
        $ara2->execute();
        while($a2=$ara2->fetch(PDO::FETCH_ASSOC))
        {   
          $bugunonline2 = $a2["gorevsuresi"];
          $days2 = ($bugunonline2 / (24 * 60 * 60))%99999999999;
          $hours2 = ($bugunonline2/(60*60))%24;
          $minutes2 = ($bugunonline2/60)%60;
        }
        if($durum == 1)
        {
          if($a != 0 )
          {
            $odurum ='&nbsp;&nbsp;&nbsp;<b><font color=#00ff00>Online</font> </b> ';
            @$sayi++;
          }
        }
        elseif($durum == 0)
        {
          if($a != 0 )
          {
            $odurum ='&nbsp;&nbsp;&nbsp;<b><font color=#ff0000>Offline</font></b>';
          }
        }
        echo "
        <tr>
        <td width='0'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>$kisi</b></td>
        <td width='0'><b><font color=#ffa500>$seviye Level Admin</font></b></td>
        <td width='100'><b>$odurum</b></td>                             
        <td width='200'><b>$songiris</b></td>
        <td width='100'><b><font color=#3399FF> $hours saat $minutes dakika </font></b></td>
        <td width='200'><b><font color=#3399FF> $days2 gün $hours2 saat $minutes2 dakika </font></b></td>

        ";
        echo "
        </tr>
        ";
      }
      echo ' 

      </tr>
      </tbody>
      </table>';
      echo " Toplam $toplam admin bulunmakta, $sayi kişi oyunda online bulunmaktadır.";

      ?>




      <hr>



      <?php

      echo '
      <table >
      <thead>
      <th><i class="fa fa-male" aria-hidden="true"></i>AyYıldız Hırsız Polis - DJ EKIBI</th>
      <tr>
      <th>Kullanıcı Adı</th>
      <th>Durum</th>
      <th>Son Giriş</th>
      <th>Günlük Online Süresi</th>         
      </tr>
      </thead>
      <tbody>
      <tr>';
      $araa = $db->prepare("SELECT * FROM oyuncular WHERE ulvl < 9 ORDER BY dj DESC LIMIT 30");
      $araa->execute();
      while($aa=$araa->fetch(PDO::FETCH_ASSOC))
      { 
        $adminlevel = $aa["dj"];
        if($adminlevel  < 1) continue;

        $kisi = $aa["name"];
        $seviye = $aa["dj"];
        $durum = $aa["oyundurum"];
        $songiris = $aa["songiris"];
        $bugunonline = $aa["gunlukonline"];
        $odurum ="";
        $hours = ($bugunonline/(60*60))%24;
        $minutes = ($bugunonline/60)%60;
        if($durum == 1)
        {
          if($aa != 0 )
          {
            $odurum ='<b><font color=#00ff00>Online</font> </b> ';
            $sayi++;
          }
        }
        elseif($durum == 0)
        {
          if($aa != 0 )
          {
            $odurum ='<b><font color=#ff0000>Offline</font></b>';
          }
        }
        echo "
        <tr>
        <td width='0'><b>$kisi</b></td>
        <td width='100'><b>$odurum</b></td>               
        <td width='200'><b>$songiris</b></td>
        <td width='100'><b><font color=#3399FF> $hours saat $minutes dakika </font></b></td>

        ";
        echo "
        </tr>
        ";
      }
      echo '
      </tr>
      </tbody>
      </table>';
      ?>

      <hr>

      <?php



      echo '
      <table >
      <thead>
      <th><i class="fa fa-male" aria-hidden="true"></i>AyYıldız Hırsız Polis - REHBER EKIBI</th>
      <tr>
      <th>Kullanıcı Adı</th>
      <th>Level</th>
      <th>Durum</th>
      <th>Son Giriş</th>
      <th>Günlük Online Süresi</th>         
      </tr>
      </thead>
      <tbody>
      <tr>';
      $araaa = $db->prepare("SELECT * FROM oyuncular WHERE ulvl < 1 ORDER BY rehber DESC LIMIT 30");
      $araaa->execute();
      while($aaa=$araaa->fetch(PDO::FETCH_ASSOC))
      { 
        $adminlevel = $aaa["rehber"];
        if($adminlevel  < 1) continue;

        $kisi = $aaa["name"];
        $seviye = $aaa["rehber"];
        $durum = $aaa["oyundurum"];
        $songiris = $aaa["songiris"];
        $bugunonline = $aaa["gunlukonline"];
        $odurum ="";
        $hours = ($bugunonline/(60*60))%24;
        $minutes = ($bugunonline/60)%60;
        if($durum == 1)
        {
          if($aaa != 0 )
          {
            $odurum ='&nbsp;&nbsp;&nbsp;<b><font color=#00ff00>Online</font> </b> ';
            $sayi++;
          }
        }
        elseif($durum == 0)
        {
          if($aaa != 0 )
          {
            $odurum ='&nbsp;&nbsp;&nbsp;<b><font color=#ff0000>Offline</font></b>';
          }
        }
        echo "
        <tr>
        <td width='0'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>$kisi</b></td>
        <td width='0'><b><font color=#ffa500>$seviye Level Rehber</font></b></td>
        <td width='100'><b>$odurum</b></td>               
        <td width='200'><b>$songiris</b></td>
        <td width='100'><b><font color=#3399FF> $hours saat $minutes dakika </font></b></td>

        ";
        echo "
        </tr>
        ";
      }
      echo '
      </tr>
      </tbody>
      </table>';



      ?>

      <hr>
      <br>

      <?php



      echo '
      <table >
      <thead>
      <th><i class="fa fa-male" aria-hidden="true"></i>BAN BİLGİSİ ( SON 40 )</th>
      <tr>
      <th>Kullanıcı Adı</th>
      <th>Banlanma Sebebi</th>
      <th>Banlayan Admin</th>
      <th>Banlanma Tarihi</th>
      <th>Açılış Tarihi</th>            
      </tr>
      </thead>
      <tbody>
      <tr>';
      $ban = $db->prepare("SELECT * FROM ban ORDER BY ID DESC LIMIT 0,40");
      $ban->execute();
      while($b=$ban->fetch(PDO::FETCH_ASSOC))
      { 
        $kisi = $b["ban_isim"];
        $banlayan = $b["ban_admin"];
        $sebep = $b["ban_sebep"];
        $banlanmazamani = $b["ban_tarih"];
        $acilacagitarih = $b["ban_acilacak"];
              //ban yedigi tarihi saat ve tarih formatına cevirme
        $tariha = $banlanmazamani;
        $banyedigi = date('d/m/Y H:i',$tariha);
              //Açılacagı tarih
        $tarihb = $acilacagitarih;
        $acilacak = date('d/m/Y H:i',$tarihb);
        echo "
        <tr>
        <td width='30'>$kisi</td>
        <td width='200'>$sebep</td>               
        <td width='30'>$banlayan</td>
        <td width='30'>$banyedigi</td>
        <td width='140'>$acilacak</td>

        ";
        echo "
        </tr>
        ";
      }
      echo '
      </tr>
      </tbody>
      </table>';




      ?>

    <?php } ?>


  </div>





  <!-- deyisilen alan burada bitir-->

</div><!-- panel-body -->
</div><!-- panel -->        
</div><!-- contentpanel -->    
</div><!-- mainpanel -->    
</section>

<?php require_once 'footer.php' ?>