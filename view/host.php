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


$name     =  $_SERVER['HTTP_HOST'];
$uri      = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

$GF_Function_New = new GF_Function();

$GF_String_New = new GF_String();




$dir_app = __PROTOCOL__.$GF_String_New->getFullUrl();

$dir_view = __PROTOCOL__.$GF_String_New->getFullUrl().'/view/';



$directory_path = $GF_String_New->app_dir;


$check_cookie_obj = new GF_Prepare();



if  ($check_cookie_obj->checkCookie($check_cookie_obj->cookie_lang))
{
    $result_cookie =$_COOKIE[$check_cookie_obj->cookie_lang] ;

    if ($result_cookie=="ENG")
    {
        $lang = "IND";
    }
    else
    {
        $lang = "ENG";
    }
}