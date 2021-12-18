<?php
session_start();
$server="localhost";
$userna="root";
$password="";
$db="online_admission";

$conn=mysqli_connect($server,$userna,$password,$db);
if(!$conn)
{
    echo "connection failed";
}

if(isset($_POST["submit_form"]))
        {
            $user=$_SESSION['user'];
            $f_stud_name=$_SESSION["f_stud_name"];
            $m_name=$_SESSION['m_name'];
            $l_name=$_SESSION['l_name'];
$gender=$_SESSION['gender'];
$email=$_SESSION['email'];
$pn=$_SESSION['pn'];
$pn2=$_SESSION['pn2'];
$dob=$_SESSION['dob'];
$adhar_no=$_SESSION['adhar_no'];
$Parmanent_address=$_SESSION['Parmanent_address'];
$Current_Address=$_SESSION['Current_Address'];
$ffname=$_SESSION['ffname'];
$fmname=$_SESSION['fmname'];
$flname=$_SESSION['flname'];
$mfname=$_SESSION['mfname'];
$mmname=$_SESSION['mmname'];
$mlname=$_SESSION['mlname'];
$ppn=$_SESSION["ppn"];
$ppn2=$_SESSION["ppn2"];
$foccupation=$_SESSION['foccupation'];
$moccupation=$_SESSION['moccupation'];
$school=$_SESSION['school'];
$board=$_SESSION['board'];
$stream=$_SESSION['stream'];
$passout_10=$_SESSION['passout_10'];
$per=$_SESSION['per'];
$school_12=$_SESSION['school_12'];
$board2=$_SESSION['board2'];
$stream2=$_SESSION['stream2'];
$passout_12=$_SESSION['passout_12'];
$per_12=$_SESSION['per_12'];
$course=$_SESSION['course'];
$branch=$_SESSION['branch'];
$bech_clg=$_SESSION['bech_clg'];
$postgcourse=$_SESSION['postgcourse'];
$postgbranch=$_SESSION['postgbranch'];
$postgyear=$_SESSION['postgyear'];
               $sq="select * from form_details where username='$user'";
               $result=mysqli_query($conn,$sq);
               $num=mysqli_num_rows($result);
               if($num==1)
               {
                  //echo "username already taken";
                //  echo '<script>alert("you have already submitted the form ");</script>';
                 header('location:show_form.php');
               }
               else
               { 
                $upload_photo=$_POST['photo'];
                $marksheet_10=$_POST['10th_Marksheet'];
                $marksheet_12=$_POST['12th_Marksheet'];
                $adhaar_card=$_POST['Adhaar_card'];
                $tmc=$_POST['tmc'];         
                $sql="insert into form_details(student_first_name,student_middle_name,student_last_name,gender,email,phone1,phone2,dob,adhaar_no,permanent_address,present_address,father_first_name,father_mid_name,father_last_name,mother_first_name,mother_mid_name,mother_last_name,p_phone1,p_phone2,father_occupation,mother_occupation,10_sachool_name,10_board,10_stream,10_passout_year,10_percentage,12_school_name,12_board,12_stream,12_passout_year,12_percentage,course,branch,university_name,b_course,year_g_b,b_branch,candidate_photo,10_marksheet,12_marksheet,adhaar_card,tc_mig_character,username) values('$f_stud_name','$m_name','$l_name','$gender','$email','$pn','$pn2','$dob','$adhar_no','$Parmanent_address','$Current_Address','$ffname','$fmname','$flname','$mfname','$mmname','$mlname','$ppn','$ppn2','$foccupation','$moccupation','$school','$board','$stream','$passout_10','$per','$school_12','$board2','$stream2','$passout_12','$per_12','$course','$branch','$bech_clg','$postgcourse','$postgyear','$postgbranch','$upload_photo','$marksheet_10','$marksheet_12','$adhaar_card','$tmc','$user')";
                $rs= mysqli_query($conn,$sql);
                if($rs)
                {
                    echo "form succesfully submitted";
                    header('location:show_form.php');
                }
                else
                {
                    echo "problem";
                }
            }
        }

        ?>