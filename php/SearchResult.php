<?php
session_start();
    
    
    $age=$_POST["age"];
    $ageto=$_POST["ageto"];
    $country=$_POST["country"];
    $connection = mysqli_connect("127.0.0.1" , "root" , "" , "afalagi");
    
    $sql="SELECT images , username , email , id  FROM datingusers where  age between $age and $ageto  and country='$country';";
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