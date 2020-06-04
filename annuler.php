<?php
include('class/classvol.php');

if(isset($_GET["idvol"]))
{
   $vol =new vol();
   $vol->annulerVole();
   
 
}
    ?>
