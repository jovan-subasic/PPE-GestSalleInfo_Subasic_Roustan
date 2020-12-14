<?php
  //var_dump($salleinfos);
?>
  <h1><?= $titre ?></h1>
  <table class='SalleInfo'>
			
		<tr>
			<th>ID</th>
			<th>NumSalle</th>
			<th>NomSalle</th>
			<th>Nombre de Poste</th>
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
				<td><?= $salleinfo->getId() ?></td>
				<td><?= $salleinfo->getNSalle() ?></td>
				<td><?= $salleinfo->getNomSalle() ?></td>
				<td><?= $salleinfo->getNbPoste() ?></td>
				<td><?= $salleinfo->getIndIP() ?></td>
				<td><?= $salleinfo->getRoom_name()?></td>
				<td><?= $salleinfo->getSort_key() ?></td>
				<td><?= $salleinfo->getDescription() ?></td>
				<td><?= $salleinfo->getCapacity() ?></td>
				
			
			<?php } ?>
			</tr>	
								
			
	</table>