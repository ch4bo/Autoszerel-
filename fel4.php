<?php
$msg="";
require_once "config.php";

   if(isset($_POST['beir'])){
       extract($_POST);
       $sql="insert into tipusok values (null,'{$tipusnev}')";
       $stmt=$db->exec($sql);

if($stmt)
    $msg="Sikeres  az adatbeírás.";
else $msg="Nem sikerült az adatbeírás!!";

}
?>

<div class="col-6">
    <form method="post">
        <label for="">Auto típusa:</label>
        <input type="text" name="tipusnev" id="" class="form-control" required>
        <input type="submit" value="Felvesz" name="beir" class="btn btn-outline-primary">
    </form>
</div>

<div>
<?=$msg?>
</div> 
