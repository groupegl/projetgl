<?php
header("Content-type: text/javascript");
$link = mysql_connect("127.0.0.1", "root", 'akirallorens') or die("Impossible de se connecter : ".mysql_error());
mysql_select_db('gl',$link);
$sql = $sql = 'SELECT lien,reference,type,fournisseur,annee FROM chaudiere';
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
$data = array();

$data1 = "";
$i =0;
if($req){
while($row=mysql_fetch_assoc($req)){
$data[($i)]=$row ;
$data1 =$data1 .",". implode(',', $data[$i]);
$i++ ;
}
}
$data1[0]=" " ;
echo 'var softwares = {
 "firefox": [
"'.$data1.'"
]
};';
mysql_close($link);//fin de connexion à la base de donnée
?>
alert("esdfd");
receiveMessage(softwares);


