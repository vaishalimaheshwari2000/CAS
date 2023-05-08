<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAS Proforma Part A | II</title>
    <style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
        background-color: #dddddd;
    }
    #submit{
       border:none;
       border-radius:3px;
       margin-left:auto;
       text-align:centre;
    }
    .submit{
        align-items:center;
        padding:2px;
       display:flex;
       justify-content:center;
    }
    .input_field> input{
        margin:10px;
        padding: 7.1px;
        border: none;
        border-radius:3px;
        background-color: rgb(124, 223, 236);
        margin-left:40%;
    }
    #bitexInfo {
        margin-left:7%;
        width:80%;
        border-radius:3px;
    }

    .bib {
        margin-left:7%;
    }

    .partA{
        margin-left: 10%;
        margin-right: 10%;
    }
    #part_A{
        margin-top:6%;
    }
    
    .delete{
        display: flex;
        padding:5px;
       margin: 5px;
}
</style>
<link rel="stylesheet" href="css/bootstrap.css">
    <script src="script.js"> </script>

</head>
<body>

<div class="blockquote text-center">
            <h3>Dayalbagh Educational Institute</h3>
            <h4>(Deemed To Be University)</h4>
            <h4>Dayalbagh, Agra</h4>
            <h5>Assessment Criteria and Methodology Proforma for Promotion under CAS </h5>

</div>


<hr style="border-top: 1mm solid black ;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="#" class="navbar-brand"> <img class="svg" src="logo.jpeg" alt="Bootstrap" width="40" height="40"
                    loading="lazy"></a>
            <a class="navbar-brand" href="https://www.dei.ac.in/dei/">DEI Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://admission.dei.ac.in:8085/cms_new/">DEI CMS<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="https://www.dei.ac.in/dei/files/IQAC/2022/CAS_GUIDELINES_2018.pdf">CAS
                            GUIDELINES<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">

                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction="index.html">Log
                        Out</button>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
                        formaction="home.html">Back</button>
                </form>
            </div>
        </nav>


        <h4 style="text-decoration:underline; text-align: center;" id='part_A'>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</h4>
        <h5 style="text-decoration:underline; text-align: center;"> Information for the Year <input type="text"
                maxlength="4" style="width: 80px;">to<input type="text" maxlength="4"
                style="width:80px; text-decoration: underline;">.</h5><br><br>

<div class='partA'>

<form action="CASpartAPersonaldata.php" method="post">


 <br>
     
                <br>
                <!-- <label for="#"><b>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</b></label><br> -->
                <!-- <label for="#"> <b>1(a) Academic Qualifications (Matric till post-graduation)</b></label> -->
                <!-- <table frame="box"> -->
                    <tr>
                        <br>
                       <label>Name(in Block Letters)</label>
                       <input type="text" name="name" required class="form-control">
                       <br>
                       <label>Guardian Name(Mother/Father):</label>
                       <input type="text" name="parentsName" required class="form-control">
                       <br>
                       <label>Department</label>
                       <input type="text" name="depart" required class="form-control">
                       <br>
                       <label>Current Designation & Level in Pay Matrix</label>
                       <input type="text" name="matrix" required class="form-control">
                       <br>
                       <label>Date of last Promotion</label>
                       <input type="text" name="date" required class="form-control">
                       <br>
                       <label>Which position and Level are you an applicant under CAS?</label>
                       <input type="text" name="position" required class="form-control">
                       <br>
                       <label>Date of eligibility for promotion</label>
                       <input type="text" name="promotion" required class="form-control">
                       <br>
                       <label>Date and Place of Birth</label>
                       <input type="text" name="birth" required class="form-control">
                       <br>
                       <label>Gender</label>
                       <input type="text" name="gender" required class="form-control">
                       <br>
                       <label>Marital status</label>
                       <input type="text" name="status" required class="form-control">
                       <br>
                       <label>Nationality</label>
                       <input type="text" name="nationality" required class="form-control">
                       <br>
                       <label>Indicate whether belongs to SC/ST/OBC category</label>
                       <input type="text" name="category" required class="form-control">
                       <br>
                       <label>Address for correspondence (with Pin code)</label>
                       <input type="text" name="code" required class="form-control">
                       <br>
                       <label>Permanent Address (with Pin code)</label>
                       <label for="">Telephone No:</label>
                       <input type="text" name="tele" required class="form-control">
                       <br>
                       <label for="">Mobile Ph. No.:</label>
                       <input type="text" name="mobile" required class="form-control">
                       <br>
                       <label for="">Email:</label>
                       <input type="text" name="email" required class="form-control">
                       <br>

                      
                       
                      
                <div class="input_field">
            <input type="submit" value="Submit" name="submit13" class="button"  id="subm1">
            
        </div>
        <br>
</form>
    <!-- <table>
        <thead>
        
            <th>Subject</th>
        </thead>

       
        //     include("connection.php");
        //     $data_array1 = array();
        //     $sql = "SELECT * FROM `personaldetails`";
        //     $dataArray1 = mysqli_query($conn, $sql);
        //     mysqli_close($conn);

            
        //     while($rows = mysqli_fetch_assoc($dataArray1)){ 
        //         $data_array1[] = $rows; 
        //     }
        //     //   echo"text1";               
        //     foreach($data_array1 as $showData1){ 
        //         // echo"text3"; 
        // ?>

        <tr>

      
          
        </tr>
     
    </table>  -->


 















<!------------------------------------------------------------------------------- table 1(part-a)----------------------------------------------------------------------->


<form action="CASpartA(a).php" method="post">
 <br>
     
                <br>
                <!-- <label for="#"><b>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</b></label><br> -->
                <label for="#"> <b>1(a) Academic Qualifications (Matric till post-graduation)</b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Qualification</label>
                       <input type="text" name="qualificationpart" required class="form-control">
                       <br>
                       <label>Name of the Board/University</label>
                       <input type="text" name="boardpart" required class="form-control">
                       <br>
                       <label>Passing Year</label>
                       <input type="text" name="yearpart" required class="form-control">
                       <br>
                       <label>Marks Obtained</label>
                       <input type="text" name="markspart" required class="form-control">
                       <br>
                       <label>Division/ Grade</label>
                       <input type="text" name="divisionpart" required class="form-control">
                       <br>
                       <label>Subject</label>
                       <input type="text" name="subjectpart" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit8" class="button" id="submit1">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>
   

   
              
    <table>
        <thead>
            <th>Qualification</th>
            <th>Name of the Board/University</th>
            <th>Passing Year</th>
            <!-- <th>Passing Year</th> -->
            <th>Marks Obtained</th>
            <th>Division/ Grade</th>
            <th>Subject</th>
            <th>Delete</th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `academics`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
              echo"text1";               
            foreach($data_array1 as $showData1){ 
                echo"text3"; 
        ?>

        <tr>

            <td><?php echo $showData1['qualification']?></td>
            <td><?php echo $showData1['board']?></td>
            <td><?php echo $showData1['year']?></td>
            <td><?php echo $showData1['marks']?></td>
            <td><?php echo $showData1['division']?></td>
            <td><?php echo $showData1['subject']?></td>
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="delete3.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 





<!---------------------------------------------------------------------- table 2 part(a)-------------------------------------------------------------------------->
<form action="CASpart1(b).php" method="post">
 <br>
     
                <br>
                <!-- <label for="#"><b>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</b></label><br> -->
                <label for="#"> <b>1(b)	Research Degree(s)</b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Degrees</label>
                       <input type="text" name="degree" required class="form-control">
                       <br>
                       <label>Title</label>
                       <input type="text" name="title" required class="form-control">
                       <br>
                       <label>Date of Reward</label>
                       <input type="text" name="dateReward" required class="form-control">
                       <br>
                       <label>University</label>
                       <input type="text" name="university" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit6" class="button" id="submit2">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>
   

   
              
    <table>
        <thead>
            <th>Degrees</th>
            <th>Title</th>
            <th>Date of Reward</th>
            <th>University</th>
            <th>Delete</th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `researchdegree`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['degree']?></td>
            <td><?php echo $showData1 ['title']; ?></td>
            <td><?php echo $showData1 ['date']?></td>
            <td><?php echo $showData1 ['university']?></td>
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="delete2.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 





<!-------------------------------------------------------------------- table 1  part(c)------------------------------------------------------------------------------>

<form action="CASpart1(c).php" method="post">
 <br>
     
                <br>
                <!-- <label for="#"><b>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</b></label><br> -->
                <label for="#"> <b>1(c)	Appointment held prior to joining this Institution</b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Designation</label>
                       <input type="text" name="designationAppointment" required class="form-control">
                       <br>
                       <label>Name of the employer</label>
                       <input type="text" name="employer" required class="form-control">
                       <br>
                       <label>Date of Joining</label>
                       <input type="text" name="joiningDate" required class="form-control">
                       <br>
                       <label>Date of Leaving</label>
                       <input type="text" name="leavingDate" required class="form-control">
                       <br>
                       <label>Salary with Grades</label>
                       <input type="text" name="salary" required class="form-control">
                       <br>
                       <label>Reason of leaving</label>
                       <input type="text" name="reasonLeaving" required class="form-control">
                       <br>
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit7" class="button" id="submit1">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>
   

   
              
    <table>
        <thead>
            <th>Designation</th>
            <th>Name of the employer</th>
            <th>Date of Joining</th>
            <th>Date of Leaving</th>
            <th>Salary with Grades</th>
            <th>Reason of leaving</th>
            <th>Delete</th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `appointment_held(part-(a))`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Designation']?></td>
            <td><?php echo $showData1 ['Name of the employer']; ?></td>
            <td><?php echo $showData1 ['Date of Joining']?></td>
            <td><?php echo $showData1 ['Date of Leaving']?></td>
            <td><?php echo $showData1 ['Salary with Grades']?></td>
            <td><?php echo $showData1 ['Reason of leaving']?></td>
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="delete1.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 




<!------------------------------------------------------------------- table 1 part(d)---------------------------------------------------------------------------------->
    <form action="CASpart1(d).php" method="post">
 <br>
     
                <br>
                <!-- <label for="#"><b>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</b></label><br> -->
                <label for="#"> <b>1(d)	Posts held after appointment at this Institute</b></label>
                <table frame="box">
                    <tr>
                        <br>
                       <label>Designation</label>
                       <input type="text" name="designationPosts" required class="form-control">
                       <br>
                       <label>Department</label>
                       <input type="text" name="departmrntPost" required class="form-control">
                       <br>
                       <label>Joining from</label>
                       <input type="text" name="joiningDatePost" required class="form-control">
                       <br>
                       <label>Joining to</label>
                       <input type="text" name="leavingDatePost" required class="form-control">
                       <br>
                       <label>Grade/Level</label>
                       <input type="text" name="gradePost" required class="form-control">
                       <br>
                       
                       
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit7" class="button" id="submit1">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>
   

   
              
    <table>
        <thead>
            <th>Designation</th>
            <th>Department</th>
            <th>Joining from</th>
            <th>Joining to</th>
            <th>Grade/Level</th>
            <th>Delete</th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `posts_held(part_a)`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Designation']?></td>
            <td><?php echo $showData1 ['Department'] ?></td>
            <td><?php echo $showData1 ['Joining from']?></td>
            <td><?php echo $showData1 ['Joining to']?></td>
            <td><?php echo $showData1 ['Grade/Level']?></td>
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="delete.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 


            </div>



          

</body>
</html>