<html>
<body>
<?php
$fichier=("fichier.txt");
$fd=fopen($fichier,"r");
while(!feof($fd)) {
$ligne = fgets($fd,255);
if (!empty($ligne)) {
$tabligne=explode("|",$ligne);
echo "<br>Id: $tabligne[0]";
echo "<br>Code: $tabligne[1]";
echo "<br>Date : $tabligne[2]";
echo "<br>Nom: $tabligne[3]";
echo "<br>Qt : $tabligne[4]";
echo "<br>Prix : $tabligne[5]";
}
echo "<br>";
}
fclose($fd);
?>
</body>
</html>
