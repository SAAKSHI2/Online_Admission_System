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

function update($dbname,$some,$val)
{
$server="localhost";
$userna="root";
$password="";
$db="online_admission";

$conn=mysqli_connect($server,$userna,$password,$db);
if(!$conn)
{
    echo "connection failed";
}

    if($some!=$val)
    {
        $user=$_SESSION['user'];
    $sql="update form_details set $dbname='$val' where username='$user'";
    $result=mysqli_query($conn,$sql);
    }
}

$_SESSION['f_stud_name']=$_POST["fname"];
$_SESSION['m_name']=$_POST['mname'];
$_SESSION['l_name']=$_POST['lname'];
$_SESSION['gender']=$_POST['Gender'];
$_SESSION['email']=$_POST['email'];
$_SESSION['pn']=$_POST['pn'];
$_SESSION['pn2']=$_POST['pn2'];
$_SESSION['dob']=$_POST['DOB'];
$_SESSION['adhar_no']=$_POST['card_number'];
$_SESSION['Parmanent_address']=$_POST['Parmanent_address'];
$_SESSION['Current_Address']=$_POST['Current_Address'];
$_SESSION['ffname']=$_POST['ffname'];
$_SESSION['fmname']=$_POST['fmname'];
$_SESSION['flname']=$_POST['flname'];
$_SESSION['mfname']=$_POST['mfname'];
$_SESSION['mmname']=$_POST['mmname'];
$_SESSION['mlname']=$_POST['mlname'];
$_SESSION['ppn']=$_POST["ppn"];
$_SESSION['ppn2']=$_POST["ppn2"];
$_SESSION['foccupation']=$_POST['foccupation'];
$_SESSION['moccupation']=$_POST['moccupation'];
$_SESSION['school']=$_POST['school'];
$_SESSION['board']=$_POST['board'];
$_SESSION['stream']=$_POST['stream'];
$_SESSION['passout_10']=$_POST['passout_Year_10'];
$_SESSION['per']=$_POST['per'];
$_SESSION['school_12']=$_POST['12School'];
$_SESSION['board2']=$_POST['board2'];
$_SESSION['stream2']=$_POST['stream2'];
$_SESSION['passout_12']=$_POST['passout_Year_12'];
$_SESSION['per_12']=$_POST['12per'];
$_SESSION['course']=$_POST['course'];
$_SESSION['branch']=$_POST['branch'];
$_SESSION['bech_clg']=$_POST['clg'];
$_SESSION['postgcourse']=$_POST['postgcourse'];
$_SESSION['postgbranch']=$_POST['postgbranch'];
$_SESSION['postgyear']=$_POST['postgyear'];
if(isset($_POST["Next_btn"])){
    header('location:upload.html');
}
if(isset($_POST['edit_btn']))
{
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
    $user=$_SESSION['user'];
        $sql="select * from form_details where username='$user'";
        $result=mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($result);

        $dbname_ob=array("student_first_name","student_middle_name","student_last_name","gender","email","phone1","phone2","dob","adhaar_no","permanent_address","present_address","father_first_name","father_mid_name","father_last_name","mother_first_name","mother_mid_name","mother_last_name","p_phone1","p_phone2","father_occupation","mother_occupation","10_sachool_name","10_board","10_stream","10_passout_year","10_percentage","12_school_name","12_board","12_stream","12_passout_year","12_percentage","course","branch","university_name","b_course","year_g_b","b_branch");
         
        $val=array($f_stud_name,$m_name,$l_name,$gender,$email,$pn,$pn2,$dob,$adhar_no,$Parmanent_address,$Current_Address,$ffname,$fmname,$flname,$mfname,$mmname,$mlname,$ppn,$ppn2,$foccupation,$moccupation,$school,$board,$stream,$passout_10,$per,$school_12,$board2,$stream2,$passout_12,$per_12,$course,$branch,$bech_clg,$postgcourse,$postgbranch,$postgyear);
        for($x=0;$x<count($val);$x++)
        {
            echo update($dbname_ob[$x],$data[$dbname_ob[$x]],$val[$x]);
        }
        header('location:show_form.php');
    
}
?>