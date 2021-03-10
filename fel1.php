<?php
require_once 'config.php';
$stmt=$db->query("SELECT szerelok.nev,javitasok.datum,javitasok.javido,javitasok.iranyar,autosok.rendszam from szerelok
inner join javitasok on szerelok.szerelo_id = javitasok.szerelo_id
inner join autosok on javitasok.autos_id = autosok.autos_id
order by javitasok.datum ");
$lista="";

while($row=$stmt->fetch()){
$lista.="<tr><td>{$row['nev']}</td><td>{$row['datum']}</td><td>{$row['javido']}</td><td>{$row['iranyar']}</td><td>{$row['rendszam']}</td></tr>";}
?>




<table class="table table-striped">
<thead>
<th>Név</th>
<th>Dátum</th>
<th>Javidő</th>
<th>Irányár</th>
<th>Rendszám</th>
</thead>
<tbody>
 <?=$lista?>
</tbody>
</table>