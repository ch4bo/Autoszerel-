<?php
require_once 'config.php';
$stmt=$db->query("SELECT szerelok.nev as sznev,sum(javitasok.javido) as osszido FROM szerelok,javitasok WHERE szerelok.szerelo_id=javitasok.szerelo_id GROUP BY szerelok.nev ORDER BY osszido desc");
$lista="";

while($row=$stmt->fetch()){
$lista.="<tr><td>{$row['sznev']}</td><td>{$row['osszido']}</td></tr>";}
?>

<table class="table table-striped">
<thead>
<th>Szerelő:</th>
<th>Össz.idő:</th>
</thead>
<tbody>
 <?=$lista?>
</tbody>
</table>