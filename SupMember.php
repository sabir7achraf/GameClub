<?php 
$id=$_GET['id'];
echo"$id";

include '../signup/connect.php';
$sql=$conn->prepare("DELETE FROM membres where id=?");
$R=$sql->execute([$id]);
if($R){
    header ('location:homeadmin.php');
}
else{
echo"ther is something wrong about your data base";
}

