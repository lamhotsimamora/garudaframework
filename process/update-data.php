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

// check seesion start is TRUE or FALSE
( session_status() == PHP_SESSION_NONE) ? session_start() : "";

// check session public access is already SET or NOT
! isset($_SESSION["public_access"]) ? exit("403 You dont have permission to access / on this server.") : "";

include '../'.$_SESSION['___GF_Prepare___'].'.php';
// create new object
$GF_Prepare = new GF_Prepare("?");

// create new object for GF_Function and GF_String
$GF_Function = new GF_Function();
$GF_String   = new GF_String();

if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['phone']) && isset($_GET['address']) && isset($_GET['id']) )
{
    // get id , get name , get email , get phone , get address
    // and then replace single quote , this is important for sql injection

    $id         = $GF_String->strReplaceSq($_GET['id']);     
    $name       = $GF_String->strReplaceSq($_GET['name']); 
    $email      = $GF_String->strReplaceSq($_GET['email']); 
    $phone      = $GF_String->strReplaceSq($_GET['phone']); 
    $address    = $GF_String->strReplaceSq($_GET['address']); 

    if (empty($id)) { exit("F"); } 
    if (empty($name)) { exit("F"); } 
    if (empty($email)) { exit("F"); } 
    if (empty($phone)) { exit("F"); } 
    if (empty($address)) { exit("F"); } 

  
    
    ! isset($db_obj) ? $db_obj = new db() : ""; 

    // update data by id
    $update_data = $db_obj->
    UpDelData("update t_example set username='$name',email='$email',phone='$phone',address='$address' where id='$id'"); 

    if ($update_data)
    { 
        // check result
        echo "T";  // echo T
    }
    else
    {
        echo "F";  // echo F
    }

}

else { exit("404 Page Not Found"); }

