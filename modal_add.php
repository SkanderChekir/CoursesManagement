	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">cliquez ici pour ajouter un cours</a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">ajoutez</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="add.php"  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">ID du cours</label></td>
							<td width="30"></td>
							<td><input type="text" name="idcours" placeholder="id du cours" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">titre du cours</label></td>
							<td width="30"></td>
							<td><input type="text" name="titre" placeholder="titre du cours" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">niveau du cours</label></td>
							<td width="30"></td>
							<td><input type="text" name="niveau" placeholder="niveau du cours" required /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			