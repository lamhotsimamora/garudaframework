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
! isset($_SESSION["public_access"]) ? exit("403s You dont have permission to access / on this server.") : "";



// include GF_Prepare with Session ___GF_Prepare___
include '../'.$_SESSION['___GF_Prepare___'].'.php';
// create new object
$GF_Prepare = new GF_Prepare("?");


// create new object for  GF_String
$GF_String = new GF_String();


if (isset($_GET['id']))// check if GET ID is already set or not
{
    $id = $GF_String->strReplaceSq($_GET['id']); // trim and replace single quote  

    if (empty($id)) { exit("F"); } // if ID is empty then echo F and exit

  
    
    $file_obj = new db(); 

   
    $check_file = $file_obj->checkId("id","t_file","id",$id);

    if ($check_file)
    {
        $file_obj->checkGetId("filename","t_file","id",$id);

        $filename = $file_obj->getId();
      
        // then delete from tabel

      
        $delete_file = $file_obj->delete("t_file","id",$id);
        if ($delete_file)
        { 
            $filename        = $GF_String->decrypt_64($filename);
            // and last delete from directory
            unlink("../data/".$filename);

            echo "T"; 
        }
        else
        {
            echo "F"; 
        }

    }


  

}

else { exit("404 Page Not Found"); }


