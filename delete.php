<?php
require_once('db.php');

$get_id=$_GET['idcours'];

// sql to delete a record
$sql = "Delete from cours where idcours = '$get_id'";

// use exec() because no results are returned
$conn->exec($sql);
header('location:index.php');
?>