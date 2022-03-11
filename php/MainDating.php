<?php
session_start();
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

  <!-- <link  rel = "stylesheet" href = "../css/date.css"> -->
  <link rel="icon" type="image/png" href="localhost/AfalagiSystem/images/dat.png"/>
  <!-- <link rel="stylesheet" type="text/css" href="localhost/AfalagiSystem/css/member.css"> -->
  <link rel="stylesheet" type="text/css" href="../css/MainAdjustor.css">


<style>

body{
  background: url("../images/bat.png");
}
</style>





<script>
$(document).ready(
  
  function(){
    
    var count = parseInt($('#NumberResponsesblabla').text().trim(), 10);
   

    if(count < 10){
      console.log(count);
    $(".container").children("#previous").hide();
  }}
);



function previousPage(){
  var count = parseInt($('#NumberResponsesblabla').text().trim(), 10);
  console.log("Inside the previousPage() Method ");
    if(count <=10){
      
      count=0;
    }
    else{
      count=count-10;
    }
    loader(count);
}

function nextPage(){
  var count = parseInt($('#NumberResponsesblabla').text().trim(), 10);
  console.log("Inside the NextPage() Method ");
  console.log(count);
    loader(count);

}

function loader(ount){
  var count =ount;
    $.ajax({
        url:"AsynchroniousLoadPage.php",
             type:"POST",
             data:{"offset":count},
             dataType:"JSON",
            
             success: function(data)
             {
                var amount=0;
                while(  data[amount] !=null ){
                  
                  var divo = document.querySelector('#ab'+amount) ;//document.querySelector('.'+count);
                  console.log(divo);
                  var theData=data[amount]; 
                  var id=theData["id"];
                  
                  
                  
                  document.querySelector("a#cd"+amount).setAttribute("href" ,"http://showUser.php?id="+id );
                  document.querySelector("img#ef"+amount).setAttribute('src' , theData.images);
                  console.log(theData.images);
                  
                  //Adding the P username for the paragraph tag 
                  document.querySelector("p#gh"+amount).innerHTML=""+theData["username"];
                  amount++;
                }
                document.querySelector("#NumberResponsesblabla").innerHTML=count+amount;
                if(count+amount >5){
                $(".container").children("#previous").show();
                }
                else{
                  $(".container").children("#previous").hide();
                }
 
             },
             error:function(rt ,re){
               console.log(re);
             }
    });
}


</script>
</head>
<body>

<?php
global $username;
global $email;
global $image;
global $sex;
global  $continue;
global $password;
global $imageDirectory;
global $id;
global $sex;



$email=$_SESSION['email'];
$password=$_SESSION['passwordOfUser'];
$message=$_SESSION['message'];




$con = mysqli_connect('127.0.0.1','root','','afalagi');
if ($con->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

$sql="SELECT * from datingusers WHERE email='$email' and password='$password' limit 1";
$result=mysqli_query($con ,$sql);
$continue=true;  
if( mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
        $image=$row["images"];
        $_SESSION["image"]=$image;
        $username=$row["username"];
        $email=$row["email"];
        $sex=$row["sex"];
        $_SESSION["sex"]=$sex;
        $id=$row["id"];
 }
 else{
     echo "<h1>No Record Is Found By this input </h1>";
     $continue=false;
 }
 mysqli_close($con);
?>

<nav>
      <div id="nav" style="padding-top:0px; padding-bottom:0px">
          <ul style="width:85%" >
            
            <li ><a   href= "../html/login.php">Log Out</a></li>
            
          </ul>
      </div> 
</nav>

<img  src='<?php echo"$image" ?>' id="afalagiLogo" width="130" height="70"> <h1>Afalagi Datings</h1><p>date</p>
<!-- <a id="changeProfile"><img class="slider"src="" id="theProfilePicture" style="float:right"  ></a> -->

<div id="container">
      
</div>

<?php


$intendedSex= ($sex=="M"  ? "F":"M");
$con = mysqli_connect('127.0.0.1','root','','afalagi');


$sql="SELECT * from datingusers WHERE sex='$intendedSex' LIMIT 5;";
$result=mysqli_query($con ,$sql);
$continue=true; 
echo "<div class='TheMainDiv'   style='z-index:1'>";
$count=0; 
if( mysqli_num_rows($result) > 0){
  echo "<h1 style='font-weight:bold ;  color: #eac117 '>ReCommended For You ..</h1>";
    while($row = mysqli_fetch_assoc($result)){
        $imageFound=$row["images"];
        $usernameFound=$row["username"];
        $emailFound=$row["email"];
        $sexFound=$row["biography"];
        $countryFound=$row["country"];
        $idFound=$row["id"];
      
      
      echo "<div style='float:left;width:200px ;color:#FFF; height:200px' id='ab$count'  class='img-circle userHolder'  >
        <a class='img-circle theanchor' id='cd$count' width='100%' height='100%'  href='showUser?id=$idFound'>
        <img class ='slider' width='100%' height='100%' id='ef$count' src='$imageFound'>
        <p id='gh$count'  style='font-weight:bold ; text-size:40px ; color:#000 ; box-shadow:3px 3xp 3px'>
        $usernameFound
        </p>
        
        </a>
      </div>";
    
      $count++;
    }
    echo "<p id='NumberResponsesblabla' style='display:None' >".$count."</p>";
    $_SESSION["count"]=$count;
  
  }
 
 else{
     echo "<h1>No Record Is Found By this input </h1>";
     $continue=false;
 }
 echo "<div class='TheMainDiv'   style='z-index:1'>";
 mysqli_close($con);
?>

<!-- <section class="box">

</section> -->

<div class="container">
 <button id="previous" class="navigate" style="float:left" onclick="previousPage()" ><< Previous</button>
 <button id="Next" class="navigate" style="float:right" onclick="nextPage()">Next >></button> 
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