 <!DOCTYPE html>
<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">
        
<style>
h2{
    color:#008b8b;
    font-family: serif;
    text-align: center;
    font-size: 25px;
    
}
h1{
        font-family: serif;

    
}
.container{
    background-color:#fffacd;
}

 
</style> 

    
    
</head>
<body>
    
    


    <form action="userregisterphp.php" method="post">
        <div>
         
         <img src="Frame12.png"  style="width: 10%;height: 100px;">
 <img src="Frame14.png"  style="width: 70%;height: 100px;">
   
   
     
     </div>

<ul>
    <li><a   href="index.php">Home</a></li>
    <li><a  href="adminlogin.php">Admin</a></li>
    
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Chef</a>
    <div class="dropdown-content">
        <a href="indexregister.php">Register</a>
        <a href="indexlogin.php">Login</a>
        
    </div>
   </li>
    
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">User</a>
    <div class="dropdown-content">
        <a href="userregister.php">Register</a>
        <a href="userlogin.php">Login</a>
    </li>
        
    </div>
        

 
   
</ul>
         
         <div class="container">
    <h2>REGISTRATION FROM</h2>
     <hr>

    
    <input type="Date" placeholder="Enter date of birth" name="dob" id="dob" required><br><br>
    

    <label for="password"><b>Password</b></label>
    <input type="text" placeholder="Enter password" name="password" id="password" required>
    <input type="password" placeholder="Enter repassword" name="repass"   required>
    <hr>
    <p>Already have an account  <a href="userlogin.php">SignIn</a></p>

   <button type="submit" name="reg" class="registerbtn">Register</button>
  </div>

         

   
   
</form>

</body>
</html>
<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" id="name" required><br>

    <label for="phoneno"><b>Phone number</b></label>
    <input type="text" placeholder="Enter phone number" name="phno" id="phoneno" required><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter your email" name="email" id="email" required><br>
    

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter your address" name="address" id="address" required><br>
    

    <label for="dob"><b>DOB</b></label>