<?php
session_start();
$server="localhost";
$username="root";
$password="";
$db="online_admission";

$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn)
{
    echo "connection failed";
}

        if(isset($_POST['login_btn']))
        {
           $login_name=$_POST["login_name"];
           $pass=$_POST["login_password"];
           $sq="select * from apply_now where username='$login_name' and password='$pass'";
           $result=mysqli_query($conn,$sq);
           $num=mysqli_num_rows($result);
           if($num==1)
           {
               $_SESSION['user']=$login_name;
               $sq="select * from form_details where username='$login_name'";
               $r=mysqli_query($conn,$sq);
               $n=mysqli_num_rows($r);
               if($n==1)
               header('location:show_form.php');
               else
               header('location:admission.html');
           }
           else
           {
           // header('location:login.html');
           include "login.html";
           echo "<script>pop();</script>";
           }
        }
        else{
          header('location:login.html');
        }

?>