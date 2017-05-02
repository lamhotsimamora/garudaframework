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



//     require file "GF_Prepare.php" 
$app = require_once "GF_Prepare.php";

if (file_exists($app))
 
    return $app;
    
    ! isset($prepare) ? $prepare = new GF_Prepare("______LOAD______") : false ;

