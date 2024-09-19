<?php 
require_once 'header.php'
?>        
<div class="pageheader">
  <h2><i class="fa  fa-user"></i> Hediyeler </h2>
  <div class="breadcrumb-wrapper">

  </div>
</div>    
<div class="contentpanel"> 

  <?php 
  $userduzenlesor=$db->prepare("SELECT * FROM oyuncular where id=:id ");
  $userduzenlesor->execute(array(
    'id'=>$_GET['user_id']));

  $userduzenlecek=$userduzenlesor->fetch(PDO::FETCH_ASSOC);
  ?>
  <div class="row">
    <div class="col-md-6">
      <form id="basicForm" method="POST" action="panel/islem.php" class="form-horizontal">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-btns">
              <p>Buradan Ev hediye Ede bilersiniz</p>
            </div>
            <div class="panel-body">





              <input type="hidden" name="id" value="<?php echo $userduzenlecek['id']  ?>">
            </div><!-- panel-body -->
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-12">
                  <button type="submit" name="evhediye" class="btn btn-primary btn-xs btn-block">Hediye et</button>

                </div>
              </div>
            </div>

          </div><!-- panel -->
        </form>
      </div><!-- panel-body -->





    </div><!-- panel -->    

    <div class="row">
      <div class="col-md-6">
        <form id="basicForm" method="POST" action="panel/islem.php" class="form-horizontal">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-btns">
                <p>Buradan Arac Hediye ede bilersiniz </p>
              </div>
              <div class="panel-body">
              
                <input type="hidden" name="id" value="<?php echo $userduzenlecek['id']  ?>">
              </div><!-- panel-body -->
              <div class="panel-footer">
                <div class="row">
                  <div class="col-sm-12">
                    <button type="submit" name="arachediye" class="btn btn-primary btn-xs btn-block">Hediye et</button>

                  </div>
                </div>
              </div>

            </div><!-- panel -->
          </form>
        </div><!-- panel-body -->





      </div><!-- panel -->      
    </div><!-- contentpanel -->    
  </div><!-- mainpanel -->    
</section>

<?php require_once 'footer.php' ?>