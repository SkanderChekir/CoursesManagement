<?php include('header.php'); ?>
<body>


    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">


<?php include('modal_add.php'); ?>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;tableau des données</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;">id du cours</th>
                                    <th style="text-align:center;">titre</th>
                                    <th style="text-align:center;">niveau</th>
									<th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM cours ORDER BY idcours ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['idcours'];
							?>
								<tr>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['idcours']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['titre']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['niveau']; ?></td>
								<td style="text-align:center; width:350px;">
									<a href="edit.php<?php echo '?id='.$id; ?>" class="btn btn-info">modifier</a>
									 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" >supprimer </a>
								</td>
									
										<!-- Modal -->
								<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<h3 id="myModalLabel">supprimer</h3>
								</div>
								<div class="modal-body">
								<p><div style="font-size:larger;" class="alert alert-danger">etes vous sur de vouloir supprimer ce cours <b style="color:red;"><?php echo $row['idcours']." ".$row['titre']." ".$row['niveau'] ; ?></b> Données?</p>
								</div>
								<hr>
								<div class="modal-footer">
								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">non</button>
								<a href="delete.php<?php echo '?idcours='.$id; ?>" class="btn btn-danger">oui</a>
								</div>
								</div>
								</div>
								</tr>
								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>


</body>
</html>


