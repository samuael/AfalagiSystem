<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset=" 8-utf">
   <title>AFALAGI</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link  rel = "stylesheet" href = "../css/login.css">
	<link rel="icon" type="image/png" href="../images/dat.png"/>
  <link href="https://fonts.googleapis.com/css?family=Ranga&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	 

</head>
<body>
	<nav>
      <div id="nav" style="padding-top:0px; padding-bottom:0px">
          
          <ul style="width:85%" >
            <li ><a  href= "main.html">Main</a></li>
            <li ><a href= "dating.html">Home</a></li>
            <li ><a class="active" href= "login.php">login</a></li>
            <li ><a href= "registor.php">Registor</a></li>
          </ul>
      </div>      
  </nav>
<div id="sexy">
 <img src="../images/afalagi.png" width="60" height="60"> <h1>Afalagi Datings</h1><p>date</p>

</div>
<div id="container">
      

      <img class =  "slider" src="../images/ppp8.jpeg">
      </div>

      <section class="box">
 
  
  
</section>
<section class="log">
  <div id="lo">
    <h1>Login</h1>
    

  </div>
   <div id="name">
   <label for="username">Email :</label><br>
    <input type="text"  class="theemail" id="fname" name="username">

    <label for="password">password</label><br>
    <input type="password" class="thepassword"  id="lname" name="password"><br>

    <input type ="checkbox" id="check"  />Remember me<br>
    <p id="savecoockie"></p>
    <button  class="loginButton" onclick="logIn()">login :</button>

<script>
 
  function logIn(){
    var email=$(".theemail").val();
    var password =$(".thepassword").val();

   console.log(email+"  "+password);
    $.ajax({
             
             url:"../php/LoginValidate.php",
             method:"POST",
             data:{"password":password,"email":email},
             dataType:"json",
             
             success:function(data)
             {
               console.log("Ajax Response Is Recieved ......")
               if(data.result ==="yes")
               {

               
                if($("#check").find(":checkbox").is(":checked")){
                        
                    setcookie("theemail",$("#fname").val() , 3000000000000000000);
                    setcookie("thepassword" , $("#lname").val() , 3000000000000000);
                    
                }
                document.getElementById("submitting").click(); 

               }
               else{
            
                    $('#savecoockie').text("The Login page is not fully filled !");
                    $("#savecoockie").css("color" , "#f00");
               }

 
             },
             error:function(){
               console.log("Error");
             }
           }
    );
};
</script>


<form action="../php/MainDating.php" method="POST" style="display:None" >
    <input name="check"  type="email" >
    <input   name="password" type="password">
    <button  id="submitting" name="button"    type="submit">
</form>
    <!-- <p>forgot password</p> -->


  </div>
  <img src="../images/heart2.jpg">



</section>
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

  
</div>

</body>
</html>

  