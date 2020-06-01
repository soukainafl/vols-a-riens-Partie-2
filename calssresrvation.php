<?php 
include('classconx.php');
class reservation extends connex
{ 

  private  $idReservation;        
  private  $idClient;           
  private  $idvol;               
  private  $idlogin;              
  private  $dateResr;

public function volreserve()
{
   $connex=$this->connection();
   
        $idvol=$_GET["idvol"];
        $query="select * from vol where idvol='$idvol'";
        $result=$connex->query($query);
        $data=$result->fetchAll();
        return $data;
}

public function reservation($nom,$prenom,$adress,$telephone,$email,$passport)
{

    $connex=$this->connection();
    $query2="insert into client values(NULL,'".$nom."','".$prenom."','".$adress."','$telephone','".$email."','".$passport."')";
    $connex->exec($query2);

    $id = $connex->lastInsertId();
    $query="select nombreplace from vol where idvol='$idvol'";
    $result=$connex->query($query);
    $data=$result->fetchAll();
  $nombreplace=$data[0]['nombreplace'];
    $query4="update vol set nombreplace=$nombreplace-1 where idvol='$idvol'";
$conn->exec($query4);

$query3="insert into reservation values(NULL,$id,'$idvol','".date("Y/m/d")."')";
   $connex->exec($query3);
   $idResevation = $connex->lastInsertId();
   header("location:confirmation.php?idReservation=".$idResevation."");  

}
  

}