<?php   
include "class/nu_class.php";
$nu = new nu;
if (!isset($_GET['nu_id']) || $_GET['nu_id']==NULL ) {
    echo"<script>window.location = 'nulist.php'</script>";
}
else{
    $nu_id = $_GET['nu_id'];
}
$delete_nu = $nu->delete_nu($nu_id);


?>