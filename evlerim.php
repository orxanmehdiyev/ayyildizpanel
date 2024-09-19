<?php 
require_once 'header.php'
?>        
<div class="pageheader">
  <h2><i class="fa  fa-home"></i> Evlerim </h2>
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
            <th>Ev İd</th>
            <th>owner</th>
            <th>price</th>
            <th>owned</th>
            <th>zap</th>
            <th>alarm</th>
            <th>title</th>
            <th>password</th>
            <th>arac</th>
            <th>sprice</th>
            <th>getdate</th>
            <th>Sil</th>

          </tr>
        </thead>

        <?php 


        $evsor=$db->prepare("SELECT * FROM evler where  owner=:owner");
        $evsor->execute(array(
          'owner'=>$kullanicicek['id']));
        $say=0;
        while( $evcek=$evsor->fetch(PDO::FETCH_ASSOC)){
          $say++;
          ?>
          <tbody>
           <tr class="odd gradeX">
            <td><?php echo $say ?></td>
            <td><?php echo $evcek['id'] ?></td>
              <td><?php echo $evcek['owner'] ?></td>
            <td><?php echo $evcek['price'] ?></td>
            <td><?php echo $evcek['owned'] ?></td>
            <td><?php echo $evcek['zap'] ?></td>
            <td><?php echo $evcek['alarm'] ?></td>
            <td><?php echo $evcek['title'] ?></td>
            <td><?php echo $evcek['password'] ?></td>
            <td><?php echo $evcek['arac'] ?></td>
            <td><?php echo $evcek['sprice'] ?></td>
            <td><?php echo $evcek['getdate'] ?></td>


          
            <td><a href="panel/islem.php?ev_id=<?php echo $evcek['id']; ?>&evsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></td>

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