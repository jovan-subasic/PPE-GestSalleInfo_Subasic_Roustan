<?php
  //var_dump($titre);
?>
  <h1><?= $titre ?></h1>
  <table class='SalleInfo'>
			
		<tr>
			<th>Id</th>
			<th>NSalle</th>
			<th>NomSalle</th>
			<th>NbPoste</th>
			<th>IndIP</th>
			<th>Room_name</th>
      <th>Sort_key</th>
      <th>Description</th>
      <th>Capacity</th>
		</tr>
	
		<?php
			foreach ($salleinfos as $salleinfo)
			{
		?> 
		<tr>
			<td><?= $instrument->getId() ?></td>
			<td><?= $instrument->getNSalle() ?></td>
			<td><?= $instrument->getNomSalle() ?></td>
			<td><?= $instrument->getNbPoste() ?></td>
			<td><?= $instrument->getIndIP() ?></td>
			
		
		<?php } ?>
		</tr>	
								
			
	</table>