<?php
    session_start();
    $sex=($_SESSION["sex"]=="M" ? "F":"M");
    $offset =$_POST["offset"];
    $connection = mysqli_connect("127.0.0.1" , "root" , "" , "afalagi");
    
    $sql="SELECT images , username , email , id  FROM datingusers where sex='$sex' LIMIT $offset , 5;";
    $result =mysqli_query($connection , $sql);
    
    $count=0;
    if($result){
        $json_array=array();
        while($row=mysqli_fetch_assoc($result)){
            $json_array[]=$row;
        }
        echo json_encode($json_array);
    }

    mysqli_close($connection);
?>