<?php 
include ('header.php'); 
$ID=$_GET['id'];
?>
<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="row-fluid">
<div class="span3"></div>
<div class="span6">


<div class="hero-unit-3">
<center>

<?php
include('db.php');
$result = $conn->prepare("SELECT * FROM cours where idcours='$ID'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$id=$row['idcours'];
?>
<form class="form-horizontal" method="post" action="edit_PDO.php<?php echo '?idcours='.$id; ?>"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Personal Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputidcours">ID du cours:</label>
                                    <div class="controls">
                                        <input type="text" name="idcours" required value=<?php echo $row['idcours']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputtitre">titre du cours:</label>
                                    <div class="controls">
                                        <input type="text" name="titre" required value=<?php echo $row['titre']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputniveau">niveau du cours:</label>
                                    <div class="controls">
                                        <input type="text" name="niveau" required value=<?php echo $row['niveau']; ?>>
                                    </div>
                                </div>
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="index.php" class="btn">Back</a>
                                    </div>
                                </div>
                            </form>
<?php } ?>
								</center>
								</center>

								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
</body>
</html>
								