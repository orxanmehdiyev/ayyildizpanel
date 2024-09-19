<?php 
require_once 'header.php'
?>        
<div class="pageheader">
  <h2><i class="fa  fa-user"></i> Kullanıçllar düzenle </h2>
  <div class="breadcrumb-wrapper">

  </div>
</div>    
<div class="contentpanel"> 
  <div class="panel panel-default">  
    <div class="panel-body">

      <div class="row">
        <div class="col-md-12">
          <form id="basicForm" method="POST" action="panel/islem.php" class="form-horizontal">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <p>
<?php if ($_GET['durum']=='ok'){?>

<p style="color:green;">Yenilenme Uğurlu</p>
<?php }elseif ($_GET['durum']=='no'){?>
<p style="color:red;">Yenilenmedi</p>
<?php }else{
  echo "";
} ?>
  




                  </p>
                </div>
                <div class="panel-body">


                  <?php 

                  $userduzenlesor=$db->prepare("SELECT * FROM oyuncular where  id=:id    ");
                  $userduzenlesor->execute(array(
                    'id'=>$_GET['user_id']));

                  $userduzenlecek=$userduzenlesor->fetch(PDO::FETCH_ASSOC)
                  ?>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Oyuncu adı <span class="asterisk">*</span></label>
                    <div class="col-sm-7">
                      <input type="text" name="name" disabled="" class="form-control" value="<?php echo $userduzenlecek['name']  ?>" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Şifre <span class="asterisk">*</span></label>
                    <div class="col-sm-7">
                      <input type="text" name="sifre" disabled="" class="form-control" value="<?php echo $userduzenlecek['sifre']  ?>" required />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Skorz <span class="asterisk">*</span></label>
                    <div class="col-sm-7">
                      <input type="number" name="skorz"  class="form-control" value="<?php echo $userduzenlecek['skorz']  ?>" required />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">para <span class="asterisk">*</span></label>
                    <div class="col-sm-7">
                      <input type="number" name="para"  class="form-control" value="<?php echo $userduzenlecek['para']  ?>" required />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">bankpara <span class="asterisk">*</span></label>
                    <div class="col-sm-7">
                      <input type="number" name="bankpara"  class="form-control" value="<?php echo $userduzenlecek['bankpara']  ?>" required />
                    </div>
                  </div>

              <input type="hidden" name="id" value="<?php echo $userduzenlecek['id']  ?>">
              


               




                  <div class="form-group">
                    <label class="col-sm-3 control-label">ulvl <span class="asterisk">*</span></label>
                    <div class="col-sm-7">
                      <input type="number" max="10" name="ulvl"  class="form-control" value="<?php echo $userduzenlecek['ulvl']  ?>" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">rehber <span class="asterisk">*</span></label>
                    <div class="col-sm-7">
                      <input type="text" name="rehber"  class="form-control" value="<?php echo $userduzenlecek['rehber']  ?>" required />
                    </div>
                  </div>
               


                </div><!-- panel-body -->
                <div class="panel-footer">
                  <div class="row">
                    <div class="col-sm-7 col-sm-offset-3">
                      <button type="submit" name="userduzenle" class="btn btn-primary btn-xs btn-block">Yenilə</button>
                     
                    </div>
                  </div>
                </div>

              </div><!-- panel -->
            </form>


          </div><!-- col-md-6 -->
        </div>







      </div><!-- panel-body -->
    </div><!-- panel -->        
  </div><!-- contentpanel -->    
</div><!-- mainpanel -->    
</section>

<?php require_once 'footer.php' ?>