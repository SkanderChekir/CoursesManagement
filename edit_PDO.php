<?php
include 'db.php';

$get_id=$_REQUEST['idcours'];

$idcours= $_POST['idcours'];
$titre= $_POST['titre'];
$niveau= $_POST['niveau'];

$sql = "UPDATE cours SET idcours ='$idcours', titre ='$titre', niveau ='$niveau' WHERE idcours = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('succes de modification'); window.location='index.php'</script>";


?>

