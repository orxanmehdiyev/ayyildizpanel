<?php 
require_once 'header.php'
?>        
<div class="pageheader">
  <h2><i class="fa  fa-car"></i> Araclarim </h2>
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
            <th>Arac Id</th>
            <th>owner</th>
            <th>Marka</th>
            
            
            <th>Sil</th>

          </tr>
        </thead>

        <?php 


        $aracsor=$db->prepare("SELECT * FROM araclar where  owner=:owner");
        $aracsor->execute(array(
          'owner'=>$kullanicicek['id']));
        $say=0;
        while( $araccek=$aracsor->fetch(PDO::FETCH_ASSOC)){
          $say++;
          ?>
          <tbody>
           <tr class="odd gradeX">
            <td><?php echo $say ?></td>
            <td><?php echo $araccek['id'] ?></td>
              <td><?php echo $araccek['owner'] ?></td>
            <td><?php echo $araccek['model'] ?></td>
           


          
            <td><a href="panel/islem.php?aracid_id=<?php echo $araccek['id']; ?>&aracsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></td>

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