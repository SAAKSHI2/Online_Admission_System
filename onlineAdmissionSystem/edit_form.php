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
        // if($f=="" or $f==0)
        // echo "_";
        // else
        echo "$f";
    
     }
     
?>
<div class="container">
    
    <div class="form_container">
        <form class="f1" action="form_details_insert.php" method="POST">
                <h1>Student's Details </h1>
                <div class="label_container">
                <label>Students's Name </label>
                
                <div class="label_container-input">
        
            <input type="text" placeholder="first name" name="fname" value=<?php values("student_first_name")?> required>
            <input type="text" placeholder="Middle name" name="mname" value=<?php values("student_middle_name")?>>
            <input type="text" placeholder="Last name" name="lname" value=<?php values("student_last_name")?>>
            </div>
            </div>
            
            <div class="label_container">
                <label>Gender</label>
                <div>
                <input type="radio" name="Gender" value="Male" required>Male
                    <input type="radio" name="Gender" value="Female" required>Female
                    <input type="radio" name="Gender" value="Others" required>Others
            </div>
            </div>

            <div class="label_container">
            <label>Email </label>
            <input type="text"  name="email" value=<?php values("email")?> required>
            </div>

            <div class="label_container">
            <label>Phone number </label>
            <input type="number"  name="pn" value=<?php values("phone1")?> required>
            </div>

            <div class="label_container">
            <label>Phone number 2 </label>
            <input type="number" name="pn2" value=<?php values("phone2")?> >
            </div>
            
            <div class="label_container">
            <label>Date-Of-Birth </label>
            <input type="date" name="DOB" value=<?php values("dob")?> required>
            </div>
            
             
            <div class="label_container">
            <label>Adhaar Card number</label>
            <input type="number" name="card_number" value=<?php values("adhaar_no")?> required>
            </div>
            
            <div class="label_container">
            <label>Permanent Address </label>
            <input type="text" name="Parmanent_address" value=<?php values("permanent_address")?> required>
            </div>

            <div class="label_container">
            <label>Present Address </label>
            <input type="text" name="Current_Address" value=<?php values("present_address")?> ></div>
    
            
                <h1>Parent's Details </h1>

                <div class="label_container">
                <label>Father's Name </label>
                <div class="label_container-input">
                <input type="text" placeholder="First name" name="ffname" value=<?php values("father_first_name")?> required>
                <input type="text" placeholder="Middle name" name="fmname" value=<?php values("father_mid_name")?> >
                <input type="text" placeholder="Last name" name="flname" value=<?php values("father_last_name")?> >
                </div>
                </div>

                <div class="label_container">
                <label>Mother's Name </label>
                <div class="label_container-input">
                <input type="text" placeholder="First name" name="mfname" value=<?php values("mother_first_name")?> required>
                <input type="text" placeholder="Middle name" name="mmname" value=<?php values("mother_mid_name")?> >
                <input type="text" placeholder="Last name" name="mlname" value=<?php values("mother_last_name")?> ></div>
                </div>

                <div class="label_container">
                <label>Phone_number </label>
                <input type="number"  name="ppn" value=<?php values("p_phone1")?> required>
                </div>

                <div class="label_container">
                <label>Phone_number_2 </label>
                <input type="number" name="ppn2" value=<?php values("p_phone2")?>></div>

                <div class="label_container">
                <label>Father's Occupation </label>
                <input type="text" name="foccupation" value=<?php values("father_occupation")?> required></div>
                <div class="label_container">
                <label>Mother's Occupation </label>
                <input type="text" name="moccupation" value=<?php values("mother_occupation")?> required></div>
           

                <h1>Educational's Details </h1>

                <h3>10th Board</h3>

                <div class="label_container">
                <input type="text" placeholder="School name" name="school" value=<?php values("10_board")?> required>
                <select name="board" id="board" required>
                    <option value="">---Board---</option>
                    <option value="ICSE">ICSE</option>
                    <option value="CBSE">CBSE</option>
                </select>
                
                <select name="stream" id="stream" value=<?php values("10_stream")?> required>
                    <option value="">---Stream---</option>
                    <option value="Science with Computer">Science with Computer</option>
                    <option value="Science with Physical Education">Science with Physical Education </option>
                    <option value="Commerce with Computer">Commerce with Computer</option>
                    <option value="Commerce with Physical Education">Commerce with Pysical Education</option>
                </select>
            </div>
                
               

                <div class="label_container">
                <label>Passout Year</label>
                <input type="number" name="passout_Year_10" value=<?php values("10_passout_year")?> required></div>

                <div class="label_container">
                <label>Percentage </label>
                <input type="number" placeholder="Percentage %" name="per" value=<?php values("10_percentage")?> required></div>

                <h3>12th Board</h3>
                 
                <div class="label_container">
                <input type="text" placeholder="school name" name="12School" value='<?php values("12_board")?>' required>
                <select name="board2" id="board2">
                    <option value="">---Board---</option>
                    <option value="ISC">ISC</option>
                    <option value="CBSE">CBSE</option>
                </select>
            </div>
            <div class="label_container">
                <select name="stream2" id="stream2" value=<?php values("12_stream")?>required>
                    <option value="">---Stream---</option>
                    <option value="PCM with Computer">PCM with Computer</option>
                    <option value="PCM with Physical Education">PCM with Physical Education</option>
                    <option value="PCB with Computer">PCB with computer</option>
                    <option value="PCB with Physical Education">PCB with Physical Education</option>
                    <option value="PCB with Physical Education">PCB with Physical Education</option>
                    <option value="Commerce with Computer">Commerce with Computer</option>
                    <Option value="Commerce with Physical Education">Commerce with Physical Education</Option>
                </select>
            </div>

                <div class="label_container">
                <label>Passout Year</label>
                <input type="number" name="passout_Year_12" value=<?php values("12_passout_year")?> required></div>

                <div class="label_container">
                <label>Percentage </label>
                <input type="number" placeholder="Percentage %" name="12per" value=<?php values("12_percentage")?>required ></div>


                <h3>Apply for course</h3>

                <div class="label_container">
                <label>Course </label>
                <select name="course" id="course" value=<?php values("course")?> required>
                  <option value="">---Select---</option>
                  <option value="Bachelor's Of Computer Application">Bachelor's Of Computer Application (BCA)</option>
                  <option value="Btech">Btech</option>
                  <option value="Master's of Computer Application">Master's of Computer Application (MCA)</option>
                  <option value="Mtech">Mtech</option>
                </select>
            </div>

            

            <div class="label_container">
                <label>Branch </label>
                <select name="branch" id="branch" value=<?php values("branch")?> required>
                    <option value="">---Select---</option>
                    <option value="civil Engineering">civil Engineering</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                </select>
            </div>
    

                <h3>---Only for Postgraduation----</h3>

                <div class="label_container">
                <label>University Name </label>
                <input type="text" name="clg" placeholder="College/University" value=<?php values("university_name")?>></div>

                <div class="label_container">
                <label>Bachelor's course </label>
                <select name="postgcourse" id="postgcourse" value=<?php values("b_course")?>>
                    <option value="">---select---</option>
                    <option value="BCA">BCA</option>
                    <option value="Btech">Btech</option>
                    <option value="BSC.IT">BSC.IT</option>
                </select>
            </div>

            <div class="label_container">
                <label>Branch</label>
                <select name="postgbranch" id="postgbranch" value=<?php values("b_branch")?>>
                    <option value="">---Select---</option>
                    <option value="civil Engineering">civil Engineering</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                </select>
            </div>

                <div class="label_container">
                <label>Year of Graduation</label>
                <input type="number" name="postgyear" value=<?php values("year_g_b")?>></div>

                <div class="button">
                <button type='submit' class="submit_btn" name="edit_btn">Apply Changes</button></div>
                <div class="button">
               
         </form>
      
   

