<?php

include 'panel/baglan.php';





?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Ayyıldız Hırsız Polis Panel</title>

  <link href="css/style.default.css" rel="stylesheet">
</head>

<body class="signin">





    <section>
      
        <div class="signinpanel">
            
            <div class="row">
                
                <div class="col-md-7">
                    
                    <div class="signin-info">
                        <div class="logopanel">
                            <h1><span>[</span> Ayyıldız HP <span>]</span></h1>
                        </div>
                        
                        <div class="mb20"></div>
                        
                        <h5><strong>Ayyıldız Hırsız Polis</strong></h5>
                        <div class="mb20"></div>
                    </div>
                    
                </div>
                
                <div class="col-md-5">
                    
                    <form action="panel/islem.php" method="POST">
                        <h4 class="nomargin">Bilgilerinizi Doğru Giriniz</h4>
                        
                        <input type="text" name="name" class="form-control uname" placeholder="Kullanıcı Adı" />
                        <input type="password" name="sifre" class="form-control pword" placeholder="Şifre" />
                        <button type="submit" name="kgiris" class="btn btn-success btn-block">Giriş Yap</button>
                        

                        <?php 

                        if ($_GET['durum']=="no") {
                           
                           echo "Kullanıcı Bulunamadı...";

                       } elseif ($_GET['durum']=="exit") {
                           
                           echo "Başarıyla Çıkış Yaptınız.";

                       }

                       ?>


                       
                   </form>
               </div>
               
           </div>
           
           <div class="signup-footer">
            <div class="pull-left">
                &copy; 2017. Ayyıldız Hırsız Polis
            </div>
            <div class="pull-right">
                Created By: <a href="http://ayyildiz-hp.com/" target="_blank">Ayyıldız HP</a>
            </div>
        </div>
        
    </div>
</section>


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/jquery.cookies.js"></script>

<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>

<script src="js/custom.js"></script>
<script>
    jQuery(document).ready(function(){
        
        
        var c = jQuery.cookie('change-skin');
        if (c && c == 'greyjoy') {
            jQuery('.btn-success').addClass('btn-orange').removeClass('btn-success');
        } else if(c && c == 'dodgerblue') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        } else if (c && c == 'katniss') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        }


        
    });

▬▬▬.◙.▬▬▬ 
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩══ 
╬═╬ 
╬═╬ 
╬═╬ 
╬═╬ 
╬═╬ 
╬═╬ 
╬═╬ Hırsızlar giremez!! :)
╬═╬☻/ 
╬═╬/▌ 
╬═╬/ \

</script>


</body>
</html>
