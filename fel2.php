<?php
require_once "config.php";


//legördülőfeltöltés
$sql="SELECT tipus_id,tipusnev from tipusok";



$tipusok="";
$tipusok2="";
$nincstipus="";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
  $tipusok.="<option value='{$tipus_id}'>{$tipusnev}</option>";
}




//kiválasztott kiirása
if(isset($_POST['btn'])){
    $aid=$_POST['tipusid'];
    $sql="SELECT autosok.nev as anev, autosok.rendszam as rendszam, tipusok.tipusnev FROM autosok,tipusok WHERE autosok.tipuskod=tipusok.tipus_id and tipusok.tipus_id={$aid}"; 
$stmt=$db->query($sql);




if($stmt->rowCount()==0){
    $nincstipus="Nincs neki tulaja";
}
else{
    while($row=$stmt->fetch()){

        extract($row);
        $tipusok2.="<li>{$anev} - {$rendszam}- {$tipusnev} </li>";

        }
    }

}


?>

<form method="post">
        <select name="tipusid">
    <?=$tipusok?>
    </select>

<input type="submit" name="btn" value="Mehet">
</form>


<h1><?=$nincstipus?></h1>
<ol>
<?=$tipusok2?>
</ol>