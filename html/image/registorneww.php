<?php


include("dbb.php");

     if($_SERVER['REQUEST_METHOD']=='POST'){
      //if(isset("POST")){}
      $username = $_POST['username'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $Age = $_POST['Age'];
      $Sex = $_POST['Sex'];
      $Country = $_POST['Country'];
      $State = $_POST['State'];
      $Religion = $_POST['Religion'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $phonenumber = $_POST['phonenumber'];
      $image = $_POST['image'];
      $Biography = $_POST['Biography'];
     

    $query= "INSERT INTO datinguser(username , firstname,lastname,Age,Sex , Country ,State, Religion,password ,email,phonenumber,image , Biography)
   VALUES ('$username' ,'$firstname', '$lastname','$Age',  '$Sex',  '$Country', '$State' , '$Religion' ,'$password',  '$email', '$phonenumber',  '$image'
    ,  '$Biography')";
       // $result= mysqli_query($db, $query);

    if(mysqli_query($db,$query)) {
       echo "connected";
    }else {
       echo "failed";
       
    }
     mysqli_close($db);

  } else{
      echo "whats hapnning";
  }













   ?>














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
  <form  action="registorneww.php" method="POST">

  <div id="name">
    <label for="username">username</label><br>
    <input type="text" id="username" name="username" required="">

    <label for="firstname">first name</label><br>
    <input type="text" id="fname" name="firstname" required="">


    <label for="lastname">last name</label><br>
    <input type="text" id="fname" name="lastname" required="">

    <label for="Age">Age</label><br>
    <input type="text" id="Age" name="Age" required="">

    <label for="Sex">Sex</label><br>
     <select id="Sex" name="Sex">
      <option value="men">men</option>
      <option value="women">women</option>
    </select>



    <label for="Country">Country</label><br>
    <!--<input type="text" id="Country" name="Country">-->
      <select id="Country" name="Country">
      <option value="Ethiopia">Ethiopia</option>
      <option value="Eritra">Eritra</option>
      <option value="Indea">Indea</option>
      <option value="china">china</option>
      <option value="usa">usa</option>
      <option value="Australia">Australia</option>
      <option value="Coria">Coria</option>
      <option value="Gana">Gana</option>
      <option value="Uganda">Uganda</option>
      <option value="jida">jida</option>
      <option value="nayirobi">nayirobi</option>
      <option value="sudan">sudan</option>
      <option value="nigeria">nigeria</option>
      <option value="America">America</option>
      <option value="soria">soria</option>
      <option value="germen">germen</option>
      <option value="Iran">Iran</option>
      <option value="North koria">North koria</option>
      <option value="South koria">South koria</option>
      <option value="Japan">Japan</option>
      <option value="Esrael">Esrael</option>
    </select>






     <label for="State">State</label><br>
    <input type="text" id="State" name="State">


     <label for="Religion">Religion</label><br>
    <input type="text" id="Religion" name="Religion">



    
    




    <label for="password">password</label><br>
    <input type="password" id="lname" name="password" required="">


    <label for="confirm">confirm password</label><br>
    <input type="password" id="lname" name="confirmpassword" required="">

    <label for="email">email</label><br>
    <input type="text" id="lname" name="email" required="">


     <label for="phonenumber">Phone Number</label><br>
    <input type="text" id="phonenumber" name="phonenumber" required="">




   
   <input type = "FILE" name = image> <br>

    <label for="Biography">Biography</label><br>
    <input type="text" id="Biography" name="Biography" required="">

    <input type="Submit" name="submit">


    <button type="Submit">Submit</button>
    


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

  