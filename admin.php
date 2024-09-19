<?php 
require_once 'header.php'
?>        
<div class="pageheader">
  <h2><i class="fa  fa-user"></i> Adminler </h2>
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
            <th>Admin İd</th>
            <th>Admin İd</th>
            <th>Admin Ad</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>

          </tr>
        </thead>

        <?php 
        $adminsor=$db->prepare("SELECT * FROM oyuncular where ulvl=:ulvl");
        $adminsor->execute(array(
          'ulvl' => 10
        ));
        $say=0;
        while( $admincek=$adminsor->fetch(PDO::FETCH_ASSOC)){
          $say++;
          ?>
          <tbody>
           <tr class="odd gradeX">
            <td><?php echo $say ?></td>
            <td><?php echo $admincek['id'] ?></td>
            <td><?php echo $admincek['name'] ?></td>
            <td><?php echo $admincek['name'] ?></td>
            <td> 4</td>
            <td>X</td>
       
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