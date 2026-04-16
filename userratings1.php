 <html>
    <head>
        <link rel="stylesheet" href="userstyle.css"/>
        <link rel="stylesheet" href="style1.css"/>
        <link rel="stylesheet" href="style.css"/>


        <style>
            h1{
    text-align: center;
    color:white;
    background-color:gray;
    font-family:monospace;
    font-size:40px;

}

.topnav input[type=text] {
  float: right;
  
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
  background-color:wheat;
  
}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
    color:white;
  }
}
  
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
  
  
 h1{
    text-align: center;
    background-color:#008B8B;
    color: #f0e68c;
    height:45px;
    font-size:35px;
    font-family:serif;
}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #6A5A6D;
  color: white;
  text-align:center;
  
}
td{
    text-align: center;
}
body{
        background-color:#fafad2;

}
a.split{
    background-color:#4CAF50;
}

.action-buttons a {
            margin: 0 5px;
            padding: 5px 10px;
            text-decoration: none;
            color: white;
            border-radius: 3px;
            display: inline-block;
        }
        .action-buttons .edit {
            background-color: #4CAF50;
        }
        .action-buttons .delete {
            background-color: #f44336;
        }
        .action-buttons .edit:hover {
            background-color: #45a049;
        }
        .action-buttons .delete:hover {
            background-color: #da190b;
        }


    
  

</style>
    </head>
    <body>
        
        <div class="topnav">
    <a class="active" href="userhome.php">Home</a>
    <a href="userfindchef.php">Find Chefs</a>
    <a href="userdetails.php" >View details</a>
    <a href="userratings1.php">Feedback</a>
      <a href="userlogin.php" class="split">Logout</a>
    <a  href="changepass.php" style="float:right">Change Password</a></li>
    </div> <br> <br> <br> <br> <br> 
         
     


           
    <center>   
        

  <table  id="customers" border="2px" style="width:50%">
  <tr>
     <th>SL NO</th>
    <th>CHEF NAME</th>
     <th>FEEDBACK</th>
           
      
  </tr>
  <?php
    include 'dbconfig.php';
    session_start();
    $uid=$_SESSION['uname'];
    $slno=0;
    $sql="SELECT * FROM `book1` WHERE  user_id='$uid' and status='approved'";
    //echo $sql;
     $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $chefid=$row['chef_id'];
            //echo $chefid;
           $sql1="SELECT * FROM `chef` WHERE phno='$chefid'";
               //echo $sql1;
           $result1=$conn->query($sql1);
           if($result1->num_rows>0)
            {
             while($row1=$result1->fetch_assoc())
             {
                 $cname=$row1['name'];
                 $phno=$row1['phno'];
                 $slno++;
            echo "<tr><td>$slno</td>";
            echo "<td>$cname</td>";
            echo "<td class='action-buttons'>
                  <div>
                  <a href='userfeedback.php?cid=$phno' class='edit'>FEEDBACK</a>
                     </div>
                  </td></tr>";
  
 

             

             }
            }
  
        }
    }
  
  
  ?>
   
</table>
    </center>
        
</body>
</html>
 

          
    