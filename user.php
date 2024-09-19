<?php 
require_once 'header.php'
?>        
<div class="pageheader">
  <h2><i class="fa  fa-user"></i> Kullanıçllar </h2>
  <div class="breadcrumb-wrapper">

  </div>
</div>    
<div class="contentpanel"> 
  <div class="panel panel-default">  
    <div class="panel-body">




      <div class="table-responsive">
        <table class="table" id="table1">
          <thead>
           <tr> 
            <th>N</th>
            <th>Kullanici İd</th>
            <th>Kullanici Ad</th>
            <th>Platform(s)</th>
            <th>Bilgileri</th>
            <th>Düzenle</th>
            <th>Sil</th>

          </tr>
        </thead>

        <?php 
    

        $usersor=$db->prepare("SELECT * FROM oyuncular where  ulvl < 10    ");
        $usersor->execute();
        $say=0;
        while( $usercek=$usersor->fetch(PDO::FETCH_ASSOC)){
          $say++;
          ?>
          <tbody>
           <tr class="odd gradeX">
            <td><?php echo $say ?></td>
            <td><?php echo $usercek['id'] ?></td>
            <td><?php echo $usercek['name'] ?></td>
            <td><?php echo $usercek['skorz'] ?></td>
            <td><a href="hediye.php?user_id=<?php echo $usercek['id']; ?>"><button class="btn btn-success btn-xs">Hediye</button></a></td>
          <td><a href="userduzenle.php?user_id=<?php echo $usercek['id']; ?>"><button class="btn btn-primary btn-xs">düzenle</button></a></td>
            <td><a href="panel/islem.php?user_id=<?php echo $usercek['id']; ?>&usersil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></td>

          </tr>          
        </tbody>
      <?php } ?>
    </table>
  </div> 





</div><!-- panel-body -->
</div><!-- panel -->        
</div><!-- contentpanel -->    
</div><!-- mainpanel -->    
</section>

<?php require_once 'footer.php' ?>