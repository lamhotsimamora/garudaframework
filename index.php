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

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

$time_start = microtime_float();

//     require file "GF_Prepare.php" 
$app = require_once "GF_Prepare.php";

if (file_exists($app))
 
    return $app;
    
    ! isset($prepare) ? $prepare = new GF_Prepare("______LOAD______") : false ;


    $time_end = microtime_float();
    $time = $time_end - $time_start;

echo '<div id="body"> <code> <h4> Rendering Page : '.$time.' seconds </h4> </code></div>';
