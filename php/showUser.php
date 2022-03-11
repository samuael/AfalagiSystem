<?php

session_start();
global $userid;
$userid=$_GET['id'];

$connection =mysqli_connect("127.0.0.1" , 'root' , '' , 'afalagi');


$sql="SELECT * from datingusers where id=$userid ;";


$result=mysqli_query($connection  , $sql);



if($result){
    if( mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
            $image=$row["images"];
            $username=$row["username"];
            $email=$row["email"];
            $sex=$row["sex"];
            $age=$row["age"];
            $firstname=$row["firstname"];
            $lastname=$row["lastname"];
            $country=$row["country"];
            $state=$row["states"];
            $religion=$row["religion"];
            $biography=$row["biography"];
     }
}
mysqli_close($connection);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link  rel = "stylesheet" href = "../css/view.css">
	<link rel="icon" type="image/png" href="../images/dat.png"/>
  <link href="https://fonts.googleapis.com/css?family=Ranga&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

   <link rel="stylesheet" type="text/css" href="../css/MainAdjustor.css">
  




</head>
<body>

      
      <img width=100px height=100px style="float:left ; margin-left:12px ; margin-top:20px"  class ="slider" src="../images/afalagi.png">
          
  <nav>
      <div id="nav" style="padding-top:0px; padding-bottom:0px">
          
          <ul style="width:85%" >
            
            <li ><a  href= "../html/login.php">Log Out</a></li>
            
          </ul>
      </div>
      
  </nav>
<!--<div id="sexy">


</div>-->
<a><img src='<?php echo $_SESSION["image"]; ?>'  style="border-radius:50%;" width="130" height="70"> </a> <h1>Afalagi Dating</h1><p>date</p>
<!-- <div id="container">
      
<img class ="slider" src="../images/afalagi.png">
      </div>

      <section class="box">
 
  
  
</section> -->

<div class="container">
<?php

    echo '<style> body{ background-image:href(#006699);
    }
     </style> 
     <div class="UserProfile"  id="profileOfTheUser" width="100%"  height="70%" >
     <a href="'.$image.'" width="100%" height="200px" id="OwnerImage" ><img src="'.$image.'"  height=200px width=200px style="border-radius:50%;" "></a>
     <h3>'.$username.'</h3>
     <p>Email :'.$email.'</p>
     <p>First Name'.$firstname.'</p>
     <p>Last Name '.$lastname.'</p>
     <p>Sex :'.$sex.'</p>
     <p>Country :'.$country.'</p>
     <p>State :'.$state.'</p>
     <p>Religion :'.$religion.'</p>
     <p>Biography :'.$biography.'</p>
     </div>;';
?>
  
</div>


<div class="footer">
   <div class="cont">
     <div class="btn"><i class="fas fa-map-marker-alt"></i>  Ethiopia , Addis Abeba</div>
     <div class="btn"><i class="fas fa-phone"></i>   +251117689</div>
     <div class="btn"><i class="far fa-envelope"></i>   Afalagi@company.com </div>
 

    <div class = "rightside">
      <div id = "title"><h2>About the company</h2> </div>
      <div id = "paragraph">our company is currently working on finding<br>
                      some one</div>
         <div class="icons">
          <div class="icon"><i class="fab fa-facebook"></i></div>
          <div class="icon"><i class="fab fa-twitter-square"></i></div>
          <div class="icon"><i class="fab fa-instagram"></i></div>
          <div class="icon"><i  class="fab fa-viber"></i></div>
         </div>
     </div>
</body>
</html>