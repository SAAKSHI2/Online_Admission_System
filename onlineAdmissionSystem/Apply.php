<?php
$server="localhost";
$username="root";
$password="";
$db="online_admission";

$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn)
{
    echo "connection failed";
}

    $name=$_POST["apply_name"];
    $username=$_POST["apply_username"];
    $email=$_POST["apply_email"];
    $password=$_POST["apply_password"];
    $confirm_password=$_POST["apply_confirm_password"];
    if($confirm_password!=$password)
    {
        print'<script>alert("please enter the right password");</script>';
    }
    else
    {
        if(isset($_POST["apply"]))
        {
               $sq="select * from apply_now where username='$username'";
               $result=mysqli_query($conn,$sq);
               $num=mysqli_num_rows($result);
               if($num==1)
               {
                  //echo "username already taken";
                  echo '<script>alert("username already taken please enter another username");</script>';
            
               }
               else
               {
                $sql="insert into apply_now(name,username,email,password) values('$name','$username','$email','$password')";
                $rs= mysqli_query($conn,$sql);
                if($rs)
                {
                    header('location:login.html');
                }
                else
                {
                    echo "problem";
                }
            }
        }
        else
        {
            header('location:Apply_now.html');
        }
       
    }

?>