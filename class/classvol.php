<?php
include_once('classConnexion.php');
class vol extends connexion{
    private $idVol;
    private $lieuDepart;
    private $destination;
    private $dateVole;
    private $prix;
    private $nombrePlace;
    private $statut;

public function recherche($lieuD,$destination){
    $query="select * from vol where lieuDepart='".$lieuD."' and destination='".$destination."' and nombreplace>0 and statut='active'";
    $result=$this->getConnect()->query($query);
  $row=array();
    while($data=$result->fetch()){
      $row[]=$data;
}
return $row;
}
public function sessionUser(){
  $query="select nom from compte where email='".$_SESSION['user']."'";
  $result=$this->getConnect()->query($query);
  $data=$result->fetchAll();
  return $data;
 }
 public function getVole(){
  $idvol=$_GET["idvol"];
  $query="select * from vol where idvol='$idvol'";
  $result=$this->getConnect()->query($query);
  $data=$result->fetchAll();
  return $data;
}
public function getVol(){
  $query="select * from vol where  nombreplace>0";
  $result=$this->getConnect()->query($query);
  while($data=$result->fetch())
{
  $row[]=$data;
}
return $row;
}
public function insertVol($ld,$d,$dt,$p,$np){
  $query="insert into vol values(NULL,'".$ld."','".$d."','".$dt."','$p','$np','active')";
  $this->getConnect()->exec($query);
}
public function annulerVole(){
  $id=$_GET["idvol"];
  $query="update vol set statut='annuler' where idvol=$id";
  $this->getConnect()->exec($query);
header('location:ajoutervol.php');
}
}
?>