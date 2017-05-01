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
include "host.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= ( __FRAMEWORK_TITLE__ ); ?></title>

	<?php 
	echo ( '<link href="'.$dir_view.'assets/default.css" rel="stylesheet" rel="stylesheet">');
	echo ( '<link href="'.$dir_view.'assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet" rel="stylesheet">');
	?>	
</head>
<body>
<div id="__BODY__">
<div id="container">
<h3><?= (__ABOUT__) ;?></h3>

<?php
include __VIEW_PATH__."header.php";
?>



<div id="container">
<div id="body"> 
	<div id="body"> 

	<textStr>
	 <h4>
	Name 		: <b>GarudaFramework</b> </br>
	Version 	: <b>v.1.4</b>	</br>
	Released 	: <b>1 Maret 2017</b></br>
	License 	: <b>FREE</b> </br>
	Status 		: Open Source </br>
    </h4>
	</textStr>

	<textStr> <h4>
	Programmer  : <b>Lamhot Simamora</b> </br>
	Email 		: <b>lamhotsimamora36@gmail.com</b>	</br>
	Location 	: <b>Jambi, Indonesia</b></br>
	Paypal 		: <b>https://www.paypal.me/lamhotsimamora</b> </br>
	</h4>
	</textStr>
    
	<textStr> <h4><b>
	"If You Control <font color="red">the CODE</font> , You Control <font color="blue">the WORLD</font>"</b> 
	  </h4>
	</textStr>
	
</div>
</div>
</div>
<?php

include 'modal/insert-data.php';
include 'modal/update-data.php';

echo ( '<script src="'.$dir_view.'assets/js/jquery.js"></script>');
echo ( '<script src="'.$dir_view.'assets/js/jquery.min.js"></script>');
echo ( '<script src="'.$dir_view.'assets/default.js"></script>');
echo ( '<script src="'.$dir_view.'assets/js/bootstrap.min.js"></script>');

?>
</body>
</html>
