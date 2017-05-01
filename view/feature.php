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
echo ( '<link href="'.$dir_view.'assets/css/bootstrap.css" rel="stylesheet" rel="stylesheet">');
echo ( '<link href="'.$dir_view.'assets/css/bootstrap.min.css" rel="stylesheet" rel="stylesheet">');
?>  
</head>
<body>

<div id="__BODY__">
<div id="container">
<h3><?= (__FITURE__) ;?></h3>


<?php
include __VIEW_PATH__."header.php";
?>



<div id="container">
<div id="body"> 

<textStr><h4>
<font color="red"><?= (__TITTLE__);?></font> Feature : </br></br>
1. Enable/Disable Maintenance Web</br>
2. Enable/Disable Database </br>
3. Select PDO or MySqli for Connect to Database</br>
4. Enable/Disable Log File</br>
5. Select One Language or Multi Language </br>
6. Hidden/Show Error or Notice Reporting PHP</br></br>

* Include important function</br> 
* Example view with Bootstrap & Ajax (No Reload Page)</br>
* Example CRUD with Javascript </br> 
* Example Upload File</h4>
</textStr>




<textStr><h4>
@Change Log</br></br>

# Update v.1.4 </br>
- New Class GF_Prepare </br>
- New Class GF_String </br>
- New Class GF_Function </br>
- Fix MySqli OOP (Select, Insert, Delete ) </br>
- & More... </br></br>


# Update v.1.3.2 </br>
- Add Function Error or Notice Reporting PHP  </br>
- Change name of file "GF_Function.php" & "GF_String.php" </br>
- New example view with Bootstrap & Ajax (No Reload Page)
- OOP Fixed </br>
- Bug Fixed </br>
- & More...</br> </br>

# Update v.1.3.1</br>
- OOP Fixed </br>
- Bug Fixed</br>
- & More...</br> </br>

# Update v.1.3 </br>
- Add PDO Class </br>
- Enable/Disable writting log </br>
- Enable/Disable multi Language  </br>
- Bug Fixed</br>
- & More...</br> </br>

# Update v.1.2 : </br>
- OOP Fixed </br>
- Direct Language file Fixed</br>
- Logic Framework Fixed</br>
- Speed & Performance Fixed </br>
- & More...</br></h4>
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
