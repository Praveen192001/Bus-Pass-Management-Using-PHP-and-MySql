<?php

include('includes/dbconnection.php');

$eid=$_GET['editid'];
echo $eid;
$sql="DELETE FROM tblpass WHERE id=$eid";
$query = $dbh -> prepare($sql);
$query->execute();

if($query){

    echo '<script>alert("successfully removed.")</script>';
    echo "<script>window.location.href ='manage-pass.php'</script>";
    
}else{
    echo '<script>alert("failed to removed.")</script>';
}

?>