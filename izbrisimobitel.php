<?php
    require ('baza.php');
    require('nav.php');

    $id=$_GET["id"];
    $sql="DELETE FROM proizvod WHERE id=".$id;
    $result = $con->query($sql);
    header("Location: listamobitela.php");

?>



<?php require('footer.php')?>
