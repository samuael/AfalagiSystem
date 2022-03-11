<!DOCTYPE html>
<html>

<head>
  <meta charset=" 8-utf">
   <title>AFALAGI</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link  rel = "stylesheet" href = "../css/registor.css">
	<link rel="icon" type="image/png" href="../icon/logo2.png"/>
  <link href="https://fonts.googleapis.com/css?family=Ranga&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	 


	
</head>
<body>
  <div>
    <?php
    if(isset($_POST['create'])){
    echo "info submitd";
  }
  


    ?>
    



  </div>

	<nav>
      <div id="nav" style="padding-top:0px; padding-bottom:0px">
          
          <ul style="width:85%" >
            <li ><a  href= "main.html">Main</a></li>
            <li ><a href= "dating.html">Home</a></li>
            <li ><a  href= "login.html">login</a></li>
            <li ><a class="active" href= "registor.html">Registor</a></li>
          </ul>
      </div>
      
  </nav>
<div id="sexy">
 <img src="../images/ring3.jpg" width="60" height="60"> <h1>be my sexy</h1><p>date</p>

</div>
<div id="container">
      

      <img class =  "slider" src="../images/ppp8.jpeg">
      </div>

      <section class="box">
 
  
  
</section>
<section class="log">
  <div id="lo">
    <h1>Registor</h1>
    

  </div>
  <form action="registore.php" method="POST">

  <div id="name">
    <label for="username">user name</label><br>
    <input type="text" id="fname" name="username">

    <label for="firstname">first name</label><br>
    <input type="text" id="fname" name="firstname">


    <label for="lastname">last name</label><br>
    <input type="text" id="fname" name="lastname">

    
    




    <label for="password">password</label><br>
    <input type="password" id="lname" name="password">


    <label for="confirm">confirm password</label><br>
    <input type="password" id="lname" name="confirmpassword">

    <label for="email">email</label><br>
    <input type="text" id="lname" name="email">
<input type = "FILE" name = image>

   <input type="Submit" name="create" value="Submit">
   

    


  </div>
</form>
  


</section>
<section class="log2">
  <div id="lo">
    <h1>Login</h1>
    

  </div>
  <form>

  <div id="name">
   <label for="username">user name</label><br>
    <input type="text" id="fname" name="username">

    <label for="password">password</label><br>
    <input type="password" id="lname" name="password"><br>

    <input type = "checkbox"/>Remember me<br>



    <button>login</button>
    <p>forgot password</p>


  </div>
</form>
  
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
