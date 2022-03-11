
<!DOCTYPE html>
<html>
<head>
  <meta charset=" 8-utf">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <link rel="stylesheet" content="../jqery/jquery-3.4.1.min.js"> -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="icon" type="image/png" href="../images/dat.png"/>
  <link href="https://fonts.googleapis.com/css?family=Ranga&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   <title>Afalagi-Registor</title>
	<link  rel = "stylesheet" href = "../css/registor.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  

   <?php 
   $_SESSION['message'] = '';
   $_SESSION['email'] = '';
   $_SESSION['passwordOfUser'] = '';
   ?>
  

<script>


if(isset($_SESSION["message"])){
  $("#notify").text($_SESSION["message"]);
}</script>


<script>
  function logIn(){
    var email=$(".inputemail").val();
    var password =$(".inputpassword").val();

    $.ajax({
             
             url:"../php/LoginValidate.php",
             method:"POST",
 
             data:{"password":password,"email":email},
             dataType:"JSON",
             
             success:function(data)
             {
               console.log("Ajax Response Is Recieved ......")
               if(data.result ==="yes")
               {
                //var link = $('.usersPageLoader : first');
                //link.click();
                $("#notify").text("Registration Succeed.......");
                $("#notify").css("color" ,"#006699");
                console.log('ajax message Recieved .... Yes');
                //$("#generalemail").text(email);
                //$("#generalpassword").text(password);
               // $("#submitt").click();

               }
               else{
                 console.log('ajax message recieved ...........   No ');
                 $("#notify").text("Registration Failed.......");
                 $("#notify").css("color" , "ff0000");
               }
 
             },
             error:function(){
               console.log("Error");
             }
           }
         )
  }
</script>
<body>
  
<!-- ---------------------------------------------------------------------------------------------------------- -->

  
  <!-- ---------------------------------------------------------------------------------------------------------- -->
  
	<nav>
      <div id="nav" style="padding-top:0px; padding-bottom:0px">
          
          <ul style="width:85%" >
            <li ><a  href= "main.html">Main</a></li>
            <li ><a href= "dating.html">Home</a></li>
            <li ><a  href= "login.php">login</a></li>
            <li ><a class="active" href= "registor.php">Registor</a></li>
          </ul>
      </div>
      
  </nav>
<div id="sexy">
 <img src="../images/afalagi.png" width="60" height="60"> <h1>Afalagi Datings</h1><br><br><br><br><br></p>

</div>
<div id="container">

      <img class =  "slider" src="../images/dat.png">
      </div>

      <section class="box">
 
  
  
</section>
<section class="log">
  <div id="lo">
    <h1>Registor</h1>
    

  </div>
  

  <div id="name">
  <form  class="my_form" action="../php/DatingRegistryListener.php" method="post" enctype="multipart/form-data">
    <label for="username">username</label><br>
    <input type="text" id="username" class="username" name="username" required="">

    <label for="firstname">first name</label><br>
    <input type="text" id="fname" class="firstname" name="firstname" required="">


    <label for="lastname">last name</label><br>
    <input type="text" id="fname" class="lastname" name="lastname" required="">

    <label for="Age">Age</label><br>
    <input type="number"  id="Age" class="age" name="age" required=""><br>

    <label for="Sex">Sex</label><br>
     <select id="Sex" class="sex" name="sex">
      <option value="M">Male</option>
      <option value="F">Female</option>
    </select>



    <label for="Country">Country</label><br>
      <select id="Country" class="country" name="country">
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
    <input type="text" id="State"   class="state" name="state">

     <label for="Religion">Religion</label><br>
    <input type="text" id="Religion" class="religion" name="religion">

    <label >password</label><br>
    <input type="password" id="lname" name="password" class="password" lname="password" required="">

    <label for="confirm">Confirm password</label><br>
    <input type="password" id="lname" class="confirm" name="confirm" required="">

    <label for="email">email</label><br>
    <input type="text" id="lname" class="email" name="email" required="">


     <label for="phonenumber">Phone Number</label><br>
    <input type="text" id="phonenumber" class="phoneno" name="phoneno" required=""/>




<input type="file" name="image" id="images"  onchange="readURL(this)" multiple accept="image/x-png, image/gif, image/jpeg, image/jpg" />

    <label >Biography</label><br>
    <input type="text" id="Biography"   class="biography" name="biography" >


    
    <button type="submit" name="button" >send</button>
    
</form>




  </div>
  <p id="notify"> <?php echo $_SESSION['message']; $_SESSION['message'] = '';?></p>



</section>
<section class="log2">
  <div id="lo">
    <h1>Login</h1>
    

  </div>


   <form >

  <div id="name">
   <label for="username">Email</label><br>
    <input type="text" id="fname username" class="inputemail" name="username">

    <label for="password">password</label><br>
    <input type="password" id="lname password" class="inputpassword" name="password"><br>

    <input type = "checkbox"/>Remember me<br>



    <button onclick="logIn()">LogIn</button>
    <p>forgot password</p>


  </div>
</form
>  

  </section>
  <div class="footer">
   <div class="cont">
     <div class="btn"><i class="fas fa-map-marker-alt"></i>  Ethiopia , Addis Abeba</div>
     <div class="btn"><i class="fas fa-phone"></i>   +251117689</div>
     <div class="btn"><i class="far fa-envelope"></i>   Afalagi@company.com </div>
 





    <div  class = "rightside">
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
