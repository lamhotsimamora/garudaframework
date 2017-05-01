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


//=======================================================================================
$home  	    =	"home";
$feature    =	"feature";
$about      =	"about";
$view 	    =	"view";
$download   =	"download";
$bootstrap  =  "bootstrap"; // example view bootstrap page
$function   =  "function"; // example view bootstrap page
$upload     =  "upload"; // example view bootstrap page



$GF_Function_New = new GF_Function();

$GF_String_New = new GF_String();



if (! isset($_GET['p'])){
	$GF_Function_New->getpage($home);
	exit();
}
else
{

	$page 	= trim($_GET['p']);
	$page   = strtolower($page);
	
	if (empty($page)){
		$GF_Function_New->getpage($home);
	}else {
		switch ($page) {
		    case $home:
	 			$GF_Function_New->getpage($home);
		        break;
		    case $feature:
		        $GF_Function_New->getpage($feature);
		        break;
		    case $about:
		        $GF_Function_New->getpage($about);
		        break;    
	        case $view:
		        $GF_Function_New->getpage($view);
		        break; 
	      	case $download:
		        $GF_Function_New->getpage($download);
		        break;     
		    case $bootstrap:
		        $GF_Function_New->getpage($bootstrap);
		        break;      
            case $function:
                $GF_Function_New->getpage($function);
                break; 
            case $upload:
                $GF_Function_New->getpage($upload);
                break; 
		    default:
		       	$GF_Function_New->getpage($home);
		        break;
			}
	}
}
