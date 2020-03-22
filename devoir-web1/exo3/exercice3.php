<html>
<head>
	<title> Centrale d'achats - commande clients</title>
</head>
<body>
<br>
	<h1> Centrale d'achats </h1>
	<h2> Commande clients </h2><br><br>
	<?php 
		$fichier= file("fichier.txt"); // on lit le fichier et on le redirige vers un tableau $fichier
		$nbCommandes = count($fichier); // on compte le nombre de lignes (nombre de commandes).
	?>
<table align="center" border="1" width="90%" height="50%">
	<tr>
	<th align="center" bgcolor="#C0C0C0" width="50" height="30"> Numero de commande</th>
	<th align="center" bgcolor="#C0C0C0" width="50" height="30"> Numero du client</th>
	<th align="center" bgcolor="#C0C0C0" width="50" height="30"> Date de commande</th>
	<th align="center" bgcolor="#C0C0C0" width="50" height="30"> Designation de l'article</th>
	<th align="center" bgcolor="#C0C0C0" width="50" height="30"> Quantite</th>
	<th align="center" bgcolor="#C0C0C0" width="50" height="30"> Prix unitaire</th>
	<th align="center" bgcolor="#C0C0C0" width="50" height="30"> Date de livraison</th>
	<th align="center" bgcolor="#C0C0C0" width="50" height="30"> Adresse du client</th>
	</tr>
	<?php 
		$fd=fopen("fichier.txt","r");
		for($i=0;$i<$nbCommandes;$i++) {
		$ligne = fgets($fd,255);
		if (!empty($ligne))
		$tabligne=explode("|",$ligne);
	?>
	<tr>
		<td align="center" width="50" height="30" bgcolor="white"><?php echo $tabligne[0]?></td>
		<td align="center" width="50" height="30" bgcolor="white"><?php echo $tabligne[1]?></td>
		<td align="center" width="50" height="30" bgcolor="white"><?php echo $tabligne[2]?></td>
		<td align="center" width="50" height="30" bgcolor="white"><?php echo $tabligne[3]?></td>
		<td align="center" width="50" height="30" bgcolor="white"><?php echo $tabligne[4]?></td>
		<td align="center" width="50" height="30" bgcolor="white"><?php echo $tabligne[5]?></td>
		<td align="center" width="50" height="30" bgcolor="white"><?php echo $tabligne[6]?></td>
		<td align="center" width="50" height="30" bgcolor="white"><?php echo $tabligne[7]?></td>
	</tr>
		<?php } ?>

</table>	
</body>
</html>














