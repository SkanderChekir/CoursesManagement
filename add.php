<?php
require_once('db.php');

$idcours= $_POST['idcours'];
$titre= $_POST['titre'];
$niveau= $_POST['niveau'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO cours (idcours, titre, niveau)
VALUES ('$idcours', '$titre', '$niveau')";

$conn->exec($sql);
echo "<script>alert('cours ajouté avec succees'); window.location='index.php'</script>";
?>