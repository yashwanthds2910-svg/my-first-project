<?php

 if(isset($_POST['reg']))
 {
     $cname=$_POST['nopeople'];
     $name=$_POST['date'];
     $phno=$_POST['location'];
     $exp=$_POST['dish'];
     $sid=$_POST['sid'];
     $uid=$_POST['uid'];
     $phno1=$_POST['phno'];

     
     
      include 'dbconfig.php';
      $sql="insert into book1(id,chef_id,user_id,phno,people,date,location,dish,status) values (null,'$sid','$uid','$phno1',  '$cname','$name','$phno','$exp','Requested')";
      
      if($conn->query($sql))
      {
          echo "<script>alert('Order placed sucessfully. Confirmation message will coming soon..')</script>";
          echo "<meta http-equiv='refresh' content='0;userfindchef.php'/>";
              
          
      }
      else{
         echo "<script>alert('Error! please check the details')</script>";
          echo "<meta http-equiv='refresh' content='0;userbookingform.php'/>"; 
          
      }
     }
      
 else {
           echo "<meta http-equiv='refresh' content='0;userbookingform.php'/>";
     
}
 ?>
