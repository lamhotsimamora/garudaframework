<?php
/* ############################################################################
          ================== garudaFramework v.1.4 ================== 
   ############################################################################
                Update Released 29 April 2017 / Jambi, Indonesia
                        Written by Lamhot Simamora 
                        lamhotsimamora36@gmail.com  
                https://github.com/lamhotsimamora/garudaFramework
                        OPEN SOURCE & FREE LICENSE    
                  YOU CAN USE THIS FRAMEWORK FOR EVERYTHING 
  ############################################################################
*/


defined('__LOAD__') OR exit('403 You dont have permission to access / on this server.');		           



?>


<script type="text/javascript">
 // directory for javascript 
  var directory = "<?= $directory_path; ?>";
</script>


<div id="body">
<button type="button" class="btn btn-info"    onclick="loadHome();">        <?= (__HOME__) ; ?></button>
<button type="button" class="btn btn-default" onclick="loadFeature();">     <?= (__FITURE__) ; ?></button>
<button type="button" class="btn btn-default" onclick="loadFunction();">   <?= (__xFUNCTION__) ; ?></button>
<button type="button" class="btn btn-default" onclick="loadAbout();" >     <?= (__ABOUT__) ; ?></button>
<button type="button" class="btn btn-default" onclick="loadView();">       <?= (__VIEW__) ; ?></button>
<button type="button" class="btn btn-default" onclick="loadUpload();">       <?= (__UPLOAD__) ; ?></button>
<button type="button" class="btn btn-default" onclick="refreshEx();">       <?= (__B3__) ; ?></button>
<button type="button" class="btn btn-warning" onclick="refreshDownload();"> <?= (__DOWNLOAD__) ; ?></button>
<?= 
( '<img src="'.$dir_view.'gf.png" class="img-rounded" alt="Logo" width="55" height="55">');
?>
</br>
</br>
</div>
</div>


<div id="container">
<div id="body"></br>

<button id="<?= ($result_cookie); ?>" 
type="button" class="btn btn-primary" 
onclick="changeLanguange(this.id)"><?= (__CHANGETO__." : ". $lang) ;?></button> </br> </br>
</div></div>
