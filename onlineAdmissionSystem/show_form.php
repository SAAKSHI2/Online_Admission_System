<link rel="stylesheet" href="admission.css">
<?php
session_start();


     function values($some)
     {

        
        $server="localhost";
$username="root";
$password="";
$db="online_admission";

$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn)
{
    echo "connection failed";
}
         $user=$_SESSION['user'];
        $sql="select $some from form_details where username='$user'";
        $result=mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $f=$row[$some];
        if($f=="" or $f==0)
        echo "_";
        else
        echo "$f";
    
     }
     
?>
<div class="container">
    
    <div class="form_container">
        <form class="f1" action="thanks.html" method="POST">
                <h1>Student's Details </h1>
                <div class="label_container">
                <label>Students's Name </label>
                
                <div class="label_container-input">
        
            <input type="text" placeholder="first name" name="fname" value=<?php values("student_first_name")?> readonly>
            <input type="text" placeholder="Middle name" name="mname" value=<?php values("student_middle_name")?> readonly>
            <input type="text" placeholder="Last name" name="lname" value=<?php values("student_last_name")?> readonly>
            </div>
            </div>
            
            <div class="label_container">
                <label>Gender</label>
                <div>
            <input type="text" name="Gender" value=<?php values("gender")?> readonly>
            </div>
            </div>

            <div class="label_container">
            <label>Email </label>
            <input type="text"  name="email" value=<?php values("email")?> readonly>
            </div>

            <div class="label_container">
            <label>Phone number </label>
            <input type="number"  name="pn" value=<?php values("phone1")?> readonly>
            </div>

            <div class="label_container">
            <label>Phone number 2 </label>
            <input type="number" name="pn2" value=<?php values("phone2")?> readonly>
            </div>
            
            <div class="label_container">
            <label>Date-Of-Birth </label>
            <input type="date" name="DOB" value=<?php values("dob")?> readonly>
            </div>
            
             
            <div class="label_container">
            <label>Adhaar Card number</label>
            <input type="number" name="card_number" value=<?php values("adhaar_no")?> readonly>
            </div>
            
            <div class="label_container">
            <label>Permanent Address </label>
            <input type="text" name="Parmanent_address" value=<?php values("permanent_address")?> readonly>
            </div>

            <div class="label_container">
            <label>Present Address </label>
            <input type="text" name="Current_Address" value=<?php values("present_address")?> readonly></div>
    
            
                <h1>Parent's Details </h1>

                <div class="label_container">
                <label>Father's Name </label>
                <div class="label_container-input">
                <input type="text" placeholder="First name" name="ffname" value=<?php values("father_first_name")?> readonly>
                <input type="text" placeholder="Middle name" name="fmname" value=<?php values("father_mid_name")?> readonly>
                <input type="text" placeholder="Last name" name="flname" value=<?php values("father_last_name")?> readonly>
                </div>
                </div>

                <div class="label_container">
                <label>Mother's Name </label>
                <div class="label_container-input">
                <input type="text" placeholder="First name" name="mfname" value=<?php values("mother_first_name")?> readonly>
                <input type="text" placeholder="Middle name" name="mmname" value=<?php values("mother_mid_name")?> readonly>
                <input type="text" placeholder="Last name" name="mlname" value=<?php values("mother_last_name")?> readonly></div>
                </div>

                <div class="label_container">
                <label>Phone_number </label>
                <input type="number"  name="ppn" value=<?php values("p_phone1")?> readonly>
                </div>

                <div class="label_container">
                <label>Phone_number_2 </label>
                <input type="number" name="ppn2" value=<?php values("p_phone2")?> readonly></div>

                <div class="label_container">
                <label>Father's Occupation </label>
                <input type="text" name="foccupation" value=<?php values("father_occupation")?> readonly></div>
                <div class="label_container">
                <label>Mother's Occupation </label>
                <input type="text" name="moccupation" value=<?php values("mother_occupation")?> readonly></div>
           

                <h1>Educational's Details </h1>

                <h3>10th Board</h3>

                <div class="label_container">
                <label>School name </label>
                <input type="text" placeholder="School name" name="school" value=<?php values("10_sachool_name")?> readonly></div>
                <div class="label_container">
                <label>Board </label>
                <input type="text" placeholder="board" name="board" value=<?php values("10_board")?> readonly></div>

                <div class="label_container">
                <label>Stream </label>
                <input type="text" name="stream" value=<?php values("10_stream")?> readonly></div>
               

                <div class="label_container">
                <label>Passout Year</label>
                <input type="number" name="passout_Year_10" value=<?php values("10_passout_year")?> readonly></div>

                <div class="label_container">
                <label>Percentage </label>
                <input type="number" placeholder="Percentage %" name="per" value=<?php values("10_percentage")?> readonly></div>

                <h3>12th Board</h3>
                 
                <div class="label_container">
                <label>School name </label>
                <input type="text" placeholder="School name" name="12school" value=<?php values("12_school_name")?> readonly></div>
                <div class="label_container">
                <label>Board </label>
                <input type="text" placeholder="board" name="board2" value=<?php values("12_board")?> readonly></div>

                <div class="label_container">
                <label>Stream </label>
                <input type="text" name="stream2" value=<?php values("12_stream")?> readonly></div>

                <div class="label_container">
                <label>Passout Year</label>
                <input type="number" name="passout_Year_12" value=<?php values("12_passout_year")?> readonly></div>

                <div class="label_container">
                <label>Percentage </label>
                <input type="number" placeholder="Percentage %" name="12per" value=<?php values("12_percentage")?> readonly></div>


                <h3>Apply for course</h3>

                <div class="label_container">
                <label>Course </label>
                <input type="text" placeholder="course" name="course" value=<?php values("course")?> readonly></div>
            

                <div class="label_container">
                <label>Branch </label>
                <input type="text" placeholder="branch" name="branch" value=<?php values("branch")?> readonly></div>
    

                <h3>---Only for Postgraduation----</h3>

                <div class="label_container">
                <label>University Name </label>
                <input type="text" name="clg" placeholder="College/University" value=<?php values("university_name")?> readonly></div>

                <div class="label_container">
                <label>Bachelor's course </label>
                <input type="text" placeholder="postgcourse" name="postgcourse" value=<?php values("b_course")?> readonly></div>

                <div class="label_container">
                <label>Branch</label>
                <input type="text" placeholder="postgbranch" name="postgbranch" value=<?php values("b_branch")?> readonly></div>

                <div class="label_container">
                <label>Year of Graduation</label>
                <input type="number" name="postgyear" value=<?php values("year_g_b")?> readonly></div>

                <div class="button">
                <button type='submit' class="submit_btn" name="Next_btn">Next</button></div>
                

               
         </form>
      
    
    </div>
    <div class="button">
    <button class="submit_btn" name="edit_btn_in" onclick="location.href='edit_form.php'">Edit</button></div>
    </div>
    <div class="button">
    <button  class="submit_btn" name="delete" onclick="location.href='delete.php'">Delete</button></div>
    </div>
</div>

