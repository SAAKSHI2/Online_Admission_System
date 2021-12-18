<?php
 $server="localhost";
 $username="root";
 $password="";
 $db="online_admission";
 session_start();
 $conn=mysqli_connect($server,$username,$password,$db);
 if(!$conn)
 {
     echo "connection failed";
 }


       $user=$_SESSION['user'];
        $sql="delete from form_details where username='$user'";
        $result=mysqli_query($conn,$sql);
        header('location:admission.html');


?>