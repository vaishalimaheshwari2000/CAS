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

   
    .part_A{
       padding:10%;
    }
    /* #part_A{
        margin-top:10%;
    } */


    .popup {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.popup-content {
  background-color: white;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid black;
  width: 50%;
  border-radius:5px;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


</style>
<link rel="stylesheet" href="css/bootstrap.css">
    <script src="script.js"> </script>

</head>
<body>             
    <div class='part_A'>
<h4 style="text-decoration:underline; text-align: center;" id='part_A'>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</h4>
        <h5 style="text-decoration:underline; text-align: center;"> Information for the Year <input type="text"
                maxlength="4" style="width: 80px;">to<input type="text" maxlength="4"
                style="width:80px; text-decoration: underline;">.</h5><br><br>
        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `personaldetails`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
            //   echo"text1";               
            foreach($data_array1 as $showData1){ 
                // echo"text3"; 
        ?>

     

            <label>1.   Name:   <b><?php echo $showData1['name']?></b></label><br>
            <label>2.	Father’s Name/Mother’s Name:   <b><?php echo $showData1['parentsName']?></b></label><br>
            <label>3.	Department:   <b><?php echo $showData1['department']?></b></label><br>
            <label>4.	Current Designation & Level in Pay Matrix:   <b><?php echo $showData1['matrix']?></b></label><br>
            <label>5.	Date of last Promotion:   <b><?php echo $showData1['promotionlastDate']?></b></label><br>
            <label>6.	Which position and Level are you an applicant under CAS?   <b><?php echo $showData1['position']?></b></label><br>
            <label>7.	Date of eligibility for promotion:   <b><?php echo $showData1['eligibility']?></b></label><br>
            <label>8.	Date and Place of Birth:   <b><?php echo $showData1['dateBirth']?></b></label><br>
            <label>9.	Sex:   <b><?php echo $showData1['gender']?></b></label><br>
            <label>10.	Marital status:   <b><?php echo $showData1['status']?></b></label><br>
            <label>11.	Nationality:   <b><?php echo $showData1['nationality']?></b></label><br>
            <label>12.	Indicate whether belongs to SC/ST/OBC category:   <b><?php echo $showData1['category']?></b></label><br>
            <label>13.	Address for correspondence (with Pin code):   <b><?php echo $showData1['address']?></b></label><br>
            <label>14.  Permanent Address (with Pin code):    <b><?php echo $showData1['tele']?></b></label><br>
            <label>   Mobile Ph. No.:   <b><?php echo $showData1['mobile']?></b></label><br>
            <label>   Email:   <b><?php echo $showData1['mail']?></b></label><br>
         
       
        <?php }?>

    </thead>
<!-- </table>         -->
    <table>
    <br>
                <!-- <label for="#"><b>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</b></label><br> -->
                <label for="#"> <b>1(a) Academic Qualifications (Matric till post-graduation)</b></label>
            </br> 
            <table>
        <thead>
            <th>Qualification</th>
            <th>Name of the Board/University</th>
            <th>Passing Year</th>
            <!-- <th>Passing Year</th> -->
            <th>Marks Obtained</th>
            <th>Division/ Grade</th>
            <th>Subject</th>
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
                       
            foreach($data_array1 as $showData1){ 
               
        ?>

        <tr>

            <td><?php echo $showData1['qualification']?></td>
            <td><?php echo $showData1['board']?></td>
            <td><?php echo $showData1['year']?></td>
            <td><?php echo $showData1['marks']?></td>
            <td><?php echo $showData1['division']?></td>
            <td><?php echo $showData1['subject']?></td>
        </tr>
        <?php }?>
    </table> 
    
    







<table>
  
     
     <br>
     <br>
     <!-- <label for="#"><b>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</b></label><br> -->
     <label for="#"> <b>1(b) Research Degree(s)</b></label>
<br>




        <thead>
            <th>Degrees</th>
            <th>Title</th>
            <th>Date of Reward</th>
            <th>University</th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `research_degree( part_a)`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Degree']?></td>
            <td><?php echo $showData1 ['Title']; ?></td>
            <td><?php echo $showData1 ['Date of Reward']?></td>
            <td><?php echo $showData1 ['university']?></td>
        </tr>
        <?php }?>
    </table>
    
    



    <table>

    <br>
     
     <br>
     <!-- <label for="#"><b>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</b></label><br> -->
     <label for="#"> <b>1(c) Appointment held prior to joining this Institution</b></label>
                
         <br>

         <thead>
            <th>Designation</th>
            <th>Name of the employer</th>
            <th>Date of Joining</th>
            <th>Date of Leaving</th>
            <th>Salary with Grades</th>
            <th>Reason of leaving</th>
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
        </tr>
        <?php }?>
    </table> 








    <table>
    <br>
    <br>
                <!-- <label for="#"><b>PART A: GENERAL INFORMATION AND ACADEMIC BACKGROUND</b></label><br> -->
                <label for="#"> <b>1(d)	Posts held after appointment at this Institute</b></label>
              <br>
        <thead>
            <th>Designation</th>
            <th>Department</th>
            <th>Joining from</th>
            <th>Joining to</th>
            <th>Grade/Level</th>
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
        </tr>
        <?php }?>
    </table> 





<br><br><br><br><br>
    <h4 style="text-decoration:underline; text-align: center;">PART B: ASSESSMENT OF PERFORMANCE</h4>
        <h5 style="text-decoration:underline; text-align: center;"> Information for the Year <input type="text"
                maxlength="4" style="width: 80px;">to<input type="text" maxlength="4"
                style="width:80px; text-decoration: underline;">.</h5><br><br>
        

<!----------------------------------------------------------- CATEGORY I -------------------------------------------->

  <!---------------------------------------------------------- TABLE 1 ----------------------------------------------------------------------------------->


                <b><label for=""; style="text-decoration:underline;" >Category I: Teaching, Learning and Evaluation Related Activates</label><br>
<label for="">1A:	Teaching: (Classes taught include sessions, tutorials, lab., and other teaching related activities)</label>
    <label for="">(Regularity and punctuality in classes, remedial teaching, clarifying doubts, counseling, mentoring, additional teaching etc.) </label>
            </b>
<br>



<table  class="category">
        <thead>
            <th>Course/Paper</th>
            <th>No. of classes Assigned</th>
            <th>No. of Classes Taught</th>
            <th>Percentage of Classes Taught</th>
           
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql3 = "SELECT * FROM `casparta1(a)`";
            $dataArray1 = mysqli_query($conn, $sql3);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['course']?></td>
            <td><?php echo $showData1 ['classes']?></td>
            <td><?php echo $showData1 ['classestaught']?></td>
            <td><?php echo $showData1 ['perecntageClasses']?></td>
          
        </tr>
        <?php }?>
    </table> 







<!--------------------------------------------------------------------------- TABLE 2 (FOR ODD)---------------------------------------------------------------------------------------------------------------- -->





    <br><br><label for=""><b>1B: Examination, Evaluation Activities, Administrative Support and Participation in Students’ Co-curricular & Extra-curricular Activities</label>
            </b>
<br>
<label for=""><b>ODD Semester</b></label><br>
<table>
        <thead>
            <th>Activities</th>
            <th>Role</th>
           
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `categoryoddpartya`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>
         <div class="activity">

             <td class='activity'><?php echo $showData1 ['Activity']?></td>
             <td id='roleacti'><?php echo $showData1 ['Activity & Role']; ?></td>
            </div>
          
        </tr>
        <?php }?>
    </table> 










    <!--------------------------------------------------------------------------- TABLE 2 (FOR EVEN)---------------------------------------------------------------------------------------------------------------- -->









   <br> <label for=""><b>EVEN Semester</b></label><br>

    <table>
        <thead>
            <th>Activities</th>
            <th>Role</th>
           
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `categoryaparta`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>
         <div class="activity">

             <td class='activity'><?php echo $showData1 ['Activity'];?></td>
             <td id='roleacti'><?php echo $showData1 ['Activity & Role']; ?></td>
            </div>
          
        </tr>
        <?php }?>
    </table>















<!-- -------------------------------------------------------------------------------------------------------- -->
<br>
    <label for=""><b>
        1C: Personal Development Related to Teaching and Research Activities: </label>
            </b>
    <br>
    
<label for=""><b>ODD Semester</b></label><br>

<table>
        <thead>
            <th>Activities</th>
            <th>Role</th>
           
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `categoryaparta1odd(c)`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>
         <div class="activity">

             <td class='activity'><?php echo $showData1 ['Activity']?></td>
             <td id='roleacti'><?php echo $showData1 ['Activity & Role']; ?></td>
            </div>
          
        </tr>
        <?php }?>
    </table> 
    <!-- --------------------------------------------------------------------------------------------------------------------------------------------------- -->
              <br><label for=""><b>EVEN semester</b></label>   

              <table>
        <thead>
            <th>Activities</th>
            <th>Role</th>
           
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `categoryaparta1even(c)`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>
         <div class="activity">

             <td class='activity'><?php echo $showData1 ['Activity'];?></td>
             <td id='roleacti'><?php echo $showData1 ['Activity & Role']; ?></td>
            </div>
          
        </tr>
        <?php }?>
    </table>




   
<!-- ------------------------------------------------------------------------------------------------------------------------------------- -->
    <table>
        <br><br><br>
        <label for=""><b>Category II: Research, Publications and Academic Contributions</label>
        <br>
        <label for="">1. Research Papers published in Peer Reviewed or UGC listed Journals</b></label>
        <br>

        <thead>
            <th>Title </th>
            <th>Page No </th>
            <th>Journal </th>
            <th>ISSN / ISBN No.</th>
            <th>Whether Peer Reviewed Impact Factor, if any</th>
            <th>No. of co-authors</th>
            <th>Whether you are the main author</th>
            <th>Year </th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array = array();
            $sql1 = "SELECT * FROM `researchpaper` ORDER BY `Journal` DESC";
            $dataArray = mysqli_query($conn, $sql1);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray)){ 
                $data_array[] = $rows; 
            }
                             
            foreach($data_array as $showData){ 
                 
        ?>

        <tr>
            <td><?php echo $showData ['Title']; ?></td>
            <td><?php echo $showData ['Page No']; ?></td>
            <td><?php echo $showData ['Journal']; ?></td>
            <td><?php echo $showData ['ISSN / ISBN No. of Publication']; ?></td>
            <td><?php echo $showData ['Whether Peer Reviewed Impact Factor, if any']; ?></td>
            <td><?php echo $showData ['No. of co-authors']; ?></td>
            <td><?php echo $showData ['Whether you are the main author']; ?></td>
            <td><?php echo $showData ['Year']; ?></td>
            <td><?php echo $showData ['Score']; ?></td>
        </tr>
        <?php }?>
    </table>


<br><br>
<table>
<label for="#"> <b> 2. Publications (other than Research Papers): </b></label>
                <br>
                <label for="#">2(a). Books authored which are published by International/National Publishers, Chapter in
                    Edited Book, Editor of Book by International/ National Publisher</label>
              
        <thead>
            <th>Chapter</th>
            <th>Title</th>
            <th>Page No</th> 
            <th>Year</th> 
            <th>Publisher</th> 
            <th>ISSN / ISBN No.</th>
            <th>No. of co-authors</th>
            <th>Are you Main author ?</th>
            <th>National / International</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `publicationuser1` order by `ISSN / ISBN No.` DESC";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Chapter']?></td>
            <td><?php echo $showData1 ['Title']; ?></td>
            <td><?php echo $showData1 ['Page No']; ?></td>
            <td><?php echo $showData1 ['Year']; ?></td>
            <td><?php echo $showData1 ['Publisher']; ?></td>
            <td><?php echo $showData1 ['ISSN / ISBN No.']?></td>
            <td><?php echo $showData1 ['No. of co-authors']?></td>
            <td><?php echo $showData1 ['Are you Main author ?']?></td>
            <td><?php echo $showData1 ['National / International']?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table>       

            







<br><br>
<table>
<label for="#"><b>2(b). Translation works in Indian and Foreign Languages by Qualified Faculties</b></label>
    
        <thead>
            <th>Title</th>
            <th>Publisher</th>
            <th>Pages</th>
            <th>Year</th>
            <th>ISSN / ISBN No.</th>
            <th>National / International</th>
            <th>Total Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql3 = "SELECT * FROM `publicationuserpartb` order by `ISSN/ ISBN No.` DESC";
            $dataArray1 = mysqli_query($conn, $sql3);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Title']?></td>
            <td><?php echo $showData1 ['Publisher']?></td>
            <td><?php echo $showData1 ['Pages']?></td>
            <td><?php echo $showData1 ['Year']?></td>
            <td><?php echo $showData1 ['ISSN/ ISBN No.']?></td>
            <td><?php echo $showData1 ['National / International']?></td>
            <td><?php echo $showData1 ['Total Score']?></td>
        </tr>
        <?php }?>
    </table> 




<br><br>
    <table>
    <label for="#"><b>3(a&b) Creation of ICT Mediated Teaching Learning Pedagogy and content development of new and innovative courses and curricula:</b></label><br>
                <label for="#"> <b>3(a) Development of Innovative Pedagogy</b></label>
               
        <thead>
            <th>Publication_Details</th>
            <th>Number of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `development_innovative`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publication_Details']?></td>
            <td><?php echo $showData1 ['Number of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 





   <br><br>        
    <table>
    <label for="#"><b>3(b) Design of New Curricula and Courses</b></label>
                
        <thead>
            <th>Publication_Details</th>
            <th>Number of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `new_curricula`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications_Details']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 


<br><br>
    <table>
    <label for="#"><b>3(c) MOOCS</b></label><br>
                <label for="#"><b>3(c).1 Development of complete MOOCs in 4 Quadrants </b></label>
              
        <thead>
            <th>Publication_Details</th>
            <th>Number of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `moocs(3(c)_ development_of_complete_moocs))`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications_Details']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table>






<br><br>
<table>
<label for="#"><b>3(c).2 MOOCs (developed in 4 Quadrants) per module/ lecture </b></label>
                
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `development_moocs_per_lecture`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 



<br><br>             
    <table>
    <label for="#"><b>3(c).3 Content writer/subject matter expert for each module of MOOCs (at least 1 quadrant)</b> </label>
              
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `moocs_content_writer`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 





    <br><br>
    <table>
    <label for="#"><b>3(c).4 Course Coordinator for MOOCs 
(4 credit course) (In case of MOOCs of lesser credits: 02 marks/credit)</b>		
 </label>
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `course_coordinatofr_moocs`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 






<br><br>
<table>
<label for="#"><b>3(d) e-Content:</b></label><br>
               <label for="#"><b>3(d).1 Development of e-Content in 4 Quadrants for a complete course/e-book</b></label>
                
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `e-content(development_e-content)`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table>




<br><br>
          
<table>
<label for="#"><b>3(d).2 e-Content (developed in 4 Quadrants) per module</b></label>
               
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `e_content_per_module`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 











    <br><br>
                
    <table>
    <label for="#"><b>3(d).3 Editor of e-content for complete course/ paper / e-book</b></label>
                
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `editor_of_e-content`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table> 








<br><br>
           
<table>
<label for="#"><b>3(d).4 Contribution to development of e-content module in complete course/ paper/ e-book (at least one quadrant)</b></label>
              
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
        </thead>

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `e_content_development_contribution`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <tr>

            <td><?php echo $showData1 ['Publications']?></td>
            <td><?php echo $showData1 ['No of Courses']; ?></td>
            <td><?php echo $showData1 ['Score']?></td>
        </tr>
        <?php }?>
    </table>



 
    <div class="input_field">
    <input type="submit" value="Print" name="print" class="button"  id="print" onclick="openPopup()"></input>
        <div id="myPopup" class="popup">
           <div class="popup-content">
             <span class="close" onclick="closePopup()">&times;</span>
                   <h3>Noted:</h3>
                  <p>Please press <b>ctrl + p </b></p>
                  <p>Then,click on <b>Save button</b> which is present on the lower side corner in this popup window , then download/print  </p>
  </div>
</div>

            
        </div>






   </div>

<script>



function openPopup() {
  document.getElementById("myPopup").style.display = "block";
}

function closePopup() {
  document.getElementById("myPopup").style.display = "none";
  document.getElementById("print").style.display = "none";
}



</script>

</body>
</html>
