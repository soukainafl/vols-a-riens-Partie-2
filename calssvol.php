<?php
include('classconx.php');
class vol extends connex
{

   private $idvol;                
   private $lieuDepart;         
   private $destination;        
   private $dateVole;            
   private $prix;                 
   private $nombreplace;
   private $statut;   
   

   
   public  function affichage()
   {

   } 
   public function insertvol($Depart,$destination,$datevol,$prix,$nombreplace)
   {
   $connex=$this->connection();
   $requetevol="insert into vol values(NULL,'".$Depart."','".$destination."','".$datevol."','".$prix."','".$nombreplace."')";
   $connex->exec($requitevol);
   }
    public function updatevol($Depart,$destination,$datevol,$prix,$nombreplace)
    { 
        $connex=$this->connection();
        $updatvol= "update `vol` set  `lieuDepart`='$Depart',`destination`='$destination',`prix`='$prix',`nombreplace`='$nombreplace' where `dateVole`='$datevol' ";
        $connex->exec($updatvol);

}