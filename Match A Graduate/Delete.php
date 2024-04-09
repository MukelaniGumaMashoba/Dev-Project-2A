<?php

$connection = new mysqli("localhost","root","","eclectic");
if(isset($_GET["ID"])){
    $id = $_GET["ID"];
    $sql = "DELETE FROM `jobs` WHERE ID=$id";
    $result = $connection->query($sql);
    if(!$result){
        echo "failed";
    }else{
        header("Location:jobPosts.php");
    }
    echo "working";

}else{
    echo mysqli_error($connection);
}


?>