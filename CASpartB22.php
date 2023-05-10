<?php include("connection.php");  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAS Proforma Part B | I & II</title>
    <style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}
#category input{
    width: 80%;
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
    .bitexInfo{
        width:100%;
       
        border-radius:3px;
    }
    .bib{
       
        font-weight:normal;
    }
    .category{
        margin-left:6.5%;
        
    }

    .activity{
        width:70%;
        padding:10px;
       
    }
    .activity td{
        /* margin-right:40%; */
    }

    #roleacti{
        width:40%;
    }

    .tableCategory{
        width:70%;
        margin-left:6.5%;
    }
    #api, #api1{
    border:none;
    background-color: transparent;
    color:black;
}
a{
   color:black !important;
}
.logOut{
    margin:1rem;
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
















        <!-------------------------------------------------------- nav-bar-------------------------------------------------------- -->
        
       
       
       
       
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
                    <li class="nav-item">
                    <button class="nav-link" id='api' type="submit"><a href='output.php'>API Form</a></button>
               
                        <!-- <a class="nav-link" href="output.php">API Form<span class="sr-only">(current)</span></a> -->
                    </li>
                    <li class="nav-item">
                    <button class="nav-link" id='api1' type="submit"><a href='profile.php'>Profile Info</a></button>
               
                        <!-- <a class="nav-link" href="output.php">API Form<span class="sr-only">(current)</span></a> -->
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">

                    <button class="btn btn-outline-success my-2 my-sm-0 logOut" type="submit" formaction="authorlogin.php">Log
                        Out</button>
                    <button class="btn btn-outline-success my-2 my-sm-0 logOut" type="submit"
                        formaction="home1.php">Back</button>
                </form>
            </div>
        </nav>


        <!-- ------------------------------------------------------------------------------------------------------------------------ -->











        <h4 style="text-decoration:underline; text-align: center;">PART B: ASSESSMENT OF PERFORMANCE</h4>
        <h5 style="text-decoration:underline; text-align: center;"> Information for the Year <input type="text"
                maxlength="4" style="width: 80px;">to<input type="text" maxlength="4"
                style="width:80px; text-decoration: underline;">.</h5><br><br>

    


<!-- <form > -->


<form action="caspart1(a).php" method='post'>
<div class="category">

<b><label for=""; style="text-decoration:underline;" >Category I: Teaching, Learning and Evaluation Related Activates</label></b><br>
<label for="">1A:	Teaching: (Classes taught include sessions, tutorials, lab., and other teaching related activities)</label>
    <label for="">(Regularity and punctuality in classes, remedial teaching, clarifying doubts, counseling, mentoring, additional teaching etc.) </label>

<br>
<label for="">Course/Paper</label><br>
<input type="text" name='course'  class="form-control"><br>
<label for="">No. of classes Assigned</label><br>
<input type="text" name='classes'  class="form-control"><br>
<label for="">No. of Classes Taught</label><br>
<input type="text" name='classestaught'  class="form-control"><br>
<label for="">Percentage of Classes Taught</label><br>
<input type="text" name='perecntageClasses'  class="form-control"><br>


<div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div> 
</div>

<div class="input_field">
            <input type="submit" value="Submit" name="submitA" class="button" id="submitA">
         
        </div>
        <br>


</form>





<table class='tableCategory' >
        <thead>
            <th>Course/Paper</th>
            <th>No. of classes Assigned</th>
            <th>No. of Classes Taught</th>
            <th>Percentage of Classes Taught</th>
            <th>Delete</th>
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
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB18.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 







































<!-------------------------------------------------------------------------- FOR ODD--------------------------------------------------------------------------------- -->



<form action="caspart1oddA(b).php" method='post'>

<div class="category">
<br><br>
    <label for="">1B: Examination, Evaluation Activities, Administrative Support and Participation in Students’ Co-curricular & Extra-curricular Activities</label>

    <br>
<label for=""><b>ODD Semester</b></label><br>
<label for="">Activities</label><br>
<select name="activity" class="form-control">
    <option value="">Select</option>
    <option value="Administrative responsibilities such as Head/ Chairperson /Dean/ Director/ Coordinator, Warden etc.">Administrative responsibilities such as Head/ Chairperson /Dean/ Director/ Coordinator, Warden etc.</option>
    <option value="Examination and evaluation duties assigned by the University or attending the examination paper evaluation.">Examination and evaluation duties assigned by the University or attending the examination paper evaluation.</option>
    <option value="Student related co-curricular, extension and field-based activities such as students’ clubs, career counseling, study visits, students’ seminars and other events, cultural, sports, NCC, NSS and community services.">Student related co-curricular, extension and field-based activities such as students’ clubs, career counseling, study visits, students’ seminars and other events, cultural, sports, NCC, NSS and community services.</option>
    <option value="Organizing seminars/conferences/workshops, other universities activities.">Organizing seminars/conferences/workshops, other universities activities.</option>
    <option value="Evidence of actively involved in guiding Ph.D. students.">Evidence of actively involved in guiding Ph.D. students.</option>
    <option value="Conducting minor or major research project sponsored by national or international agencies.">Conducting minor or major research project sponsored by national or international agencies.</option>
    <option value="At least one single or joint publication in peer reviewed or UGC list of Journals.">At least one single or joint publication in peer reviewed or UGC list of Journals.</option>
    <option value="Presentation of papers and chairing of sessions.">Presentation of papers and chairing of sessions.</option>
    <option value="Guiding and carrying out research projects and publishing the research output in national and international journals.">Guiding and carrying out research projects and publishing the research output in national and international journals.</option>
</select><br>
<label for="">Roles</label><br>
<input type="text" name='role'  class="form-control"><br>

<div class="input_field">
            <input type="submit" value="Submit" name="submitodd" class="button" id="submitodd">
            
        </div>
</div>
</form>




          
<table>
        <thead>
            <th>Activities</th>
            <th>Role</th>
            <th>Delete</th>
           
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
             <td class='activity' ><?php echo $showData1 ['Activity & Role']; ?></td>
             <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB17.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
            </div>
          
        </tr>
        <?php }?>
    </table> 

























<!------------------------------------------------------------------------ FOR EVEN--------------------------------------------------------------------------------- -->






<form action="caspart1a(b).php" method='post'>

<div class="category">
<br><br>
    
    <br>
<label for=""><b>EVEN Semester</b></label><br>

<?php 
            include("connection.php");
            $data_array1 = array();
            $sql3 = "SELECT * FROM `categoryoddpartya`";
            $dataArray1 = mysqli_query($conn, $sql3);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>


<label for="">Activities</label><br>
<select name="activity[]" class="form-control">

  
    <option value="<?php echo $showData1 ['Activity'];?>"><?php echo $showData1 ['Activity'];?></option>
    <option value="Administrative responsibilities such as Head/ Chairperson /Dean/ Director/ Coordinator, Warden etc.">Administrative responsibilities such as Head/ Chairperson /Dean/ Director/ Coordinator, Warden etc.</option>
    <option value="Examination and evaluation duties assigned by the University or attending the examination paper evaluation.">Examination and evaluation duties assigned by the University or attending the examination paper evaluation.</option>
    <option value="Student related co-curricular, extension and field-based activities such as students’ clubs, career counseling, study visits, students’ seminars and other events, cultural, sports, NCC, NSS and community services.">Student related co-curricular, extension and field-based activities such as students’ clubs, career counseling, study visits, students’ seminars and other events, cultural, sports, NCC, NSS and community services.</option>
    <option value="Organizing seminars/conferences/workshops, other universities activities.">Organizing seminars/conferences/workshops, other universities activities.</option>
    <option value="Evidence of actively involved in guiding Ph.D. students.">Evidence of actively involved in guiding Ph.D. students.</option>
    <option value="Conducting minor or major research project sponsored by national or international agencies.">Conducting minor or major research project sponsored by national or international agencies.</option>
    <option value="At least one single or joint publication in peer reviewed or UGC list of Journals.">At least one single or joint publication in peer reviewed or UGC list of Journals.</option>
    <option value="Presentation of papers and chairing of sessions.">Presentation of papers and chairing of sessions.</option>
    <option value="Guiding and carrying out research projects and publishing the research output in national and international journals.">Guiding and carrying out research projects and publishing the research output in national and international journals.</option>
</select><br>

             <label for="">Roles</label><br>
             <input type="text" name='role[]' value="<?php echo $showData1 ['Activity & Role'];?>" class="form-control"><br>
          
      
        <?php }?>

<div class="input_field">
            <input type="submit" value="Submit" name="submiteven" class="button" id="submiteven">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
</div>
</form>




<table>
        <thead>
            <th>Activities</th>
            <th>Role</th>
            <th>Delete</th>
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
             <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB16.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
            </div>
          
        </tr>
        <?php }?>
    </table>










<!------------------------------------------------------- Table 1(c) For ODD----------------------------------------------------------------------------------------- -->

















<form action="categoryaparta1odd(c).php" method='post'>

<div class="category">
<br><br>
    <label for="">1C: Personal Development Related to Teaching and Research Activities: </label>

    <br>
<label for=""><b>ODD Semester</b></label><br>
<label for="">Activities</label><br>
<select name="activity">
    <option value="">Select</option>
  <option value="Orientation/Refresher/Research Methodology course">Orientation/Refresher/Research Methodology course</option>
  <option value="Development of e-contents and MOOCs">Development of e-contents and MOOCs</option>
  <option value="Workshop">Workshop</option>
  <option value="Syllabus up-gradation workshop">Syllabus up-gradation workshop</option>
  <option value="Training Teaching-Learning Evaluation">Training Teaching-Learning Evaluation</option>
  <option value="Technology Programs">Technology Programs</option>
  <option value="Faculty Development Programs">Faculty Development Programs</option>
</select>
<br><br>
<label for="">Roles</label><br>
<input type="text" name='role'  class="form-control"><br>

<div class="input_field">
            <input type="submit" value="Submit" name="submitpartodd" class="button" id="submitpartodd">
            
        </div>
</div>
</form>




          
<table>
        <thead>
            <th>Activities</th>
            <th>Role</th>
            <th>Delete</th>
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
             <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB15.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
            </div>
          
        </tr>
        <?php }?>
    </table> 









<!--------------------------------------------------------------- for even 1(c)------------------------------------------------------------------------------------------------------ -->





<form action="categoryaparta1even(c).php" method='post'>

<div class="category">
<br><br>
    
    <br>
<label for=""><b>EVEN Semester</b></label><br>

<?php 
            include("connection.php");
            $data_array1 = array();
            $sql3 = "SELECT * FROM `categoryaparta1odd(c)`";
            $dataArray1 = mysqli_query($conn, $sql3);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>


<label for="">Activities</label><br>
<select name="activity[]" class="form-control">

  
  <option value="<?php echo $showData1 ['Activity'];?>"><?php echo $showData1 ['Activity'];?></option>
  <option value="Orientation/Refresher/Research Methodology course">Orientation/Refresher/Research Methodology course</option>
  <option value="Development of e-contents and MOOCs">Development of e-contents and MOOCs</option>
  <option value="Workshop">Workshop</option>
  <option value="Syllabus up-gradation workshop">Syllabus up-gradation workshop</option>
  <option value="Training Teaching-Learning Evaluation">Training Teaching-Learning Evaluation</option>
  <option value="Technology Programs">Technology Programs</option>
  <option value="Faculty Development Programs">Faculty Development Programs</option>
</select><br>

             <label for="">Roles</label><br>
             <input type="text" name='role[]' value="<?php echo $showData1 ['Activity & Role'];?>" class="form-control"><br>
          
      
        <?php }?>

<div class="input_field">
            <input type="submit" value="Submit" name="submitparteven" class="button" id="submitparteven">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
</div>
</form>




<table>
        <thead>
            <th>Activities</th>
            <th>Role</th>
            <th>Delete</th>
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
             <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB14.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
            </div>
          
        </tr>
        <?php }?>
    </table>































<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
   
<form action="CASpartB22_submit.php" method="post">
        
        <div style="margin-left: 100px; margin-right: 100px;">
            <div>
                
                <b> <label for="#" ; style="text-decoration:underline;">Category II: Research, Publications and Academic
                        Contributions</label>
                    </b> <br>
                    
                    
                    <!-- <label for="">Category II: Research, Publications and Academic Contributions</label> -->
                    <br>
                    <label for="">1. Research Papers published in Peer Reviewed or UGC listed Journals</label>
                    <br>
                    <label class='bib'><b>BibTex:  </b> </label><br>
                   <input type="text" class="bitexInfo" class="form-control"  onchange="convert()">
<br>
        <label for="">Title</label>
        <br>
        <input type="text" name="title" class="form-control" id="title">
        <br>
        <label for="">Page No</label>
        <br>
        <input type="text" name="pages" class="form-control" id='pages'>
        <br>
        <label for="">Journal</label>
        <br>
        <input type="text" name="journal" class="form-control" id="journal">
        <br>
        <label for="">ISSN / ISBN No. of Publication</label>
        <br>
        <input type="text" name="issn" class="form-control" id="issn">
        <br>
        <label for="">Whether Peer Reviewed Impact Factor,if any</label>
        <br>
        <input type="text" name="review" class="form-control" id="review">
        <br>
        <label for="">No. of co-authors</label>
        <br>
        <input type="text" name="coauthors" class="form-control" id="noAuth">
        <br>
        
        <label for="">Name of authors(Main Author followed by co-authors' name)<label>
        <br>
        <input type="text" name="namecoauthors" class="form-control" id="nameAuth">
        <br>
        <label for="">Whether you are the main author</label>
        <br>
        <input type="text" name="mainauthor" class="form-control" id="main">
        <br>
        <label for="">Year</label>
        <br>
        <input type="text" name="year" class="form-control" id="year">
        <br>
        <label for="">Score</label>
        <br>
        <input type="text" name="score" class="form-control" id="score">
        <br>


       
        <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      


        <div class="input_field">
            <input type="submit" value="Submit" name="submit" class="button" id="submit">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   

    <table>
        <thead>
            <th>Title </th>
            <th>Page No </th>
            <th>Journal </th>
            <th>ISSN / ISBN No.</th>
            <th>Whether Peer Reviewed Impact Factor, if any</th>
            <th>No. of co-authors</th>
            <th>Name of Authors(main author followed by coauthor)</th>
            <th>Whether you are the main author</th>
            <th>Year </th>
            <th>Score </th>
            <th>Delete</th>
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
            <td><?php echo $showData ['No. of co-authors'];?></td>
            <td><?php echo $showData ['namecoauthors'];?></td>
            <td><?php echo $showData ['Whether you are the main author']; ?></td>
            <td><?php echo $showData ['Year']; ?></td>
            <td><?php echo $showData ['Score']; ?></td>
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB13.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table>


<!------------------------------------------------------------------ Table1 Completed----------------------------------------------------------------------------------->

<!------------------------------------------------------------------ Table2 Started---------------------------------------------------------------------------------->

<form action="CASpartB22(a).php" method="post">
 <br>
     
                <label for="#"> <b> 2. Publications (other than Research Papers): </b></label>
                <br>
                <label for="#">2(a). Books authored which are published by International/National Publishers, Chapter in
                    Edited Book, Editor of Book by International/ National Publisher</label>
                <table frame="box">
                    <tr>
                        <br>
                       <!-- <label>S.No.</label>
                       <input type="text" required class="form-control">
                       <br> -->
                       <label class='bib'><b>BibTex:  </b> </label><br>
                   <input type="text" class="bitexInfo" class="form-control"  onchange="convert()">
<br>
                       <label>Chapter</label>
                       <input type="text" name="Chapter1" required class="form-control">
                       <br>
                       <label>Title</label>
                       <input type="text" name="title" required class="form-control">
                       <br>
                       <label>Page No</label>
                       <input type="text" name="pages" required class="form-control">
                       <br>
                       <label>Year</label>
                       <input type="text" name="year" required class="form-control">
                       <br>
                       <label>Publisher</label>
                       <input type="text" name="publisher" required class="form-control">
                       <br>
                       <label>ISSN/
                            ISBN No.
                        </label>
                        <input type="text" name="issn" required class="form-control">
                        <br>
                       <label>No. of co-authors
                        </label>
                        <input type="text" name="Authors1" required class="form-control">
                        <br>
                        <label>Are you Main Author ?</label>
                        <input type="text" name="MainA1" required class="form-control">
                        <br>
                       <label>National / International</label>
                       <input type="text" name="National1" required class="form-control" >
                       <br>
                       <label>Score
            
                        </label>
                  
                        <input type="text" name="S1" required class="form-control" >
                        <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit1" class="button" id="submit1">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   
              
    <table>
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
            <th>Delete</th>
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
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB12.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table>       

            
                  
<!--///////////////////////////////////////////////////////////////////////////////// table 2 part(b)/////////////////////////////////////////////////////////////// -->

<form action="CASpartB22b.php" method="post">
    
    
    <br>
    <label for="#"><b>2(b). Translation works in Indian and Foreign Languages by Qualified Faculties</b></label>
    <br>

    
    <label class='bib'><b>BibTex:  </b> </label><br>
       <input type="text" class="bitexInfo" class="form-control"  onchange="convert()">
            <br>
            <label>Title</label>
            <br>
            <input type="text" name="title" required class="form-control">
            <br>
            <label>Publisher
                </label>
                <input type="text" name="publisher" required class="form-control">
                <br>
                <label>Pages
                </label>
                <input type="text" name="pages" required class="form-control">
                <br>
                <label>Year
                </label>
                <input type="text" name="year" required class="form-control">
                <br>
                <label>ISSN/
                    ISBN No.
                </label>
                <input type="text" name="issn"  required class="form-control">
                   <br>
                <label>National / International</label><br>
                
                <input type="text" name="National4" required  class="form-control"><br>
                <br>
      
      
  
       <label for=""> Total Score</label>
       <input type="text" name="TS1" required class="form-control">
       <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
<div class="input_field">
            <input type="submit" value="Submit" name="submit2" class="button" id="submit1">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>

 </form>
  
 <table>
        <thead>
            <th>Title</th>
            <th>Publisher</th>
            <th>Pages</th>
            <th>Year</th>
            <th>ISSN / ISBN No.</th>
            <th>National / International</th>
            <th>Total Score </th>
            <th>Delete</th>
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
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB11.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 



 





<!--////////////////////////// 3rd Table _ Creation of ICT Mediated Teaching Learning Pedagogy and content development of new and innovative courses and curricula///////// -->







<form action="CASpartB3(a).php" method="post">
    <br>
    
    <br>
    <label for="#"><b>3(a&b) Creation of ICT Mediated Teaching Learning Pedagogy and content development of new and innovative courses and curricula:</b></label><br>
    <label for="#"> <b>3(a) Development of Innovative Pedagogy</b></label>
    <table frame="box">
        <tr>
            <br>
                        <label class='bib'><b>BibTex:  </b> </label><br>
                           <input type="text" class="bitexInfo" class="form-control"  onchange="convert()">
                        <br>
                       <label>Publication_Details</label>
                       <input type="text" name="publicatioInnovative" required class="form-control">
                       <br>
                       <label>Number of Courses</label>
                       <input type="text" name="coursesInnovative" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreInnovative" required class="form-control">
                       <br>
                       
                       <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

                 <input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit3" class="button" id="submit1">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>
   

   
              
    <table>
        <thead>
            <th>Publication_Details</th>
            <th>Number of Courses</th>
            <th>Score </th>
            <th>Delete</th>
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
             <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB10.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 











<!--///////////////////////////////////////////////////////////////// Table 3 part b ((b)	Design of New Curricula and Courses)//////////////////////////////////// -->




<form action="CASpartB3(b).php" method="post">
    <br>
    
    <br>
    <label for="#"><b>3(b) Design of New Curricula and Courses</b></label>
    <table frame="box">
        <tr>
             <br>
                        <label class='bib'><b>BibTex:  </b> </label><br>
                           <input type="text" class="bitexInfo" class="form-control"  onchange="convert()">
                        <br>
                       <label>Publication_Details</label>
                       <input type="text" name="publicatioCurricula" required class="form-control">
                       <br>
                       <label>Number of Courses</label>
                       <input type="text" name="coursesCurricula" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreCurricula" required class="form-control">
                       <br>
                       <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>         
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit4" class="button" id="submit1">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>


   
              
    <table>
        <thead>
            <th>Publication_Details</th>
            <th>Number of Courses</th>
            <th>Score </th>
            <th>Delete</th>
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
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB9.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 






<!-- /////////////////////////////////////////////////////////////////MOOCS///////////////////////////////////////////////////////////////////////////////////// -->




<form action="moocsPart(a).php" method="post">
    <br>
    
    <br>
    <label for="#"><b>3(c) MOOCS</b></label><br>
    <label for="#"><b>3(c).1 Development of complete MOOCs in 4 Quadrants </b></label>
    <table frame="box">
        <tr><br>
                        <label class='bib'><b>BibTex:  </b> </label><br>
                           <input type="text" class="bitexInfo" class="form-control"  onchange="convert()">
                        <br>
                       <label>Publication_Details</label>
                       <input type="text" name="publicatioMoocs" required class="form-control">
                       <br>
                       <label>Number of Courses</label>
                       <input type="text" name="coursesMoocs" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreMoocs" required class="form-control">
                       <br>
                       
                       <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

                 <input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit5" class="button" id="submit1">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>
   

   
              
    <table>
        <thead>
            <th>Publication_Details</th>
            <th>Number of Courses</th>
            <th>Score </th>
            <th>Delete</th>
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
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB8.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 




















<!--////////////////////////////////////////////MOOCs (developed in 4 Quadrants) per module/ lecture//////////////////////////////////////////////////////////////// -->




<form action="moocsPart(b).php" method="post">
    <br>
    <!-- <label for="#"><h2>MOOCS</h2></label><br> -->
    <label for="#"><b>3(c).2 MOOCs (developed in 4 Quadrants) per module/ lecture </b></label>
    <table frame="box">
        <tr><br>
                        <label class='bib'><b>BibTex:  </b> </label><br>
                           <input type="text" class="bitexInfo" class="form-control"  onchange="convert()">
                         
                                    
                        <br>
                       <label>Publications</label>
                       <input type="text" name="publicatioMoocsPerModule" required class="form-control">
                       <br>
                       <label>No of Courses</label>
                       <input type="text" name="coursesMoocsPerModule" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreMoocsPerModule" required class="form-control">
                       <br>
                       
                      
                       <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                       <div class="input_field">
            <input type="submit" value="Submit" name="submit6" class="button" id="submit1">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>
 

   
              
    <table>
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
            <th>Delete</th>
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
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB7.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 











<!--////////////////////////////////////////Content writer/subject matter expert for each module of MOOCs (at least 1 quadrant)////////////////////////////////////// -->



<form action="moocsContentSubmit.php" method="post">
    <br>
    <br>
    <!-- <label for="#"><h2>MOOCS</h2></label><br> -->
    <label for="#"><b>3(c).3 Content writer/subject matter expert for each module of MOOCs (at least 1 quadrant)</b> </label>
    <table frame="box">
        <tr> <br>
            <label class='bib'><b>BibTex:  </b> </label><br>
               <input type="text" class="bitexInfo" class="form-control"  onchange="convert()">
             
            <br>
                       <label>Publications</label>
                       <input type="text" name="publicatioContent" required class="form-control">
                       <br>
                       <label>No of Courses</label>
                       <input type="text" name="coursesContent" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreContent" required class="form-control">
                       <br>
                       
                       <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

                 <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit7" class="button" id="submit1">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   
              
    <table>
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
            <th>Delete</th>
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
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB6.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 





    

<!--//////////////// Course Coordinator for MOOCs (4 credit course) (In case of MOOCs of lesser credits: 02 marks/credit) ///////////////////////////////////////////-->





<form action="moocsCoordinator.php" method="post">
    <br>
    <!-- <label for="#"><h2>MOOCS</h2></label><br> -->
    <label for="#"><b>3(c).4 Course Coordinator for MOOCs 
        (4 credit course) (In case of MOOCs of lesser credits: 02 marks/credit)</b>		
    </label>
    <table frame="box">
        <tr><br>
                        <label class='bib'><b>BibTex:  </b> </label><br>
                           <input type="text" class="bitexInfo" class="form-control"  onchange="convert()">
                         
                                    <!-- <br> -->
                        <br>
                       <label>Publications</label>
                       <input type="text" name="publicatioCorrdinator" required class="form-control">
                       <br>
                       <label>No of Courses</label>
                       <input type="text" name="coursesCorrdinator" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreCorrdinator" required class="form-control">
                       <br>
                       <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit8" class="button" id="submit1">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   
              
    <table>
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
            <th>Delete</th>
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
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB5.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 







<!--////////////////////////////// Development of e-Content in 4 Quadrants for a complete course/e-book/////////////////////////////////////////////// -->







<form action="e-contentpart(a).php" method="post">
    <br>
    <label for="#"><b>3(d) e-Content:</b></label><br>
    <label for="#"><b>3(d).1 Development of e-Content in 4 Quadrants for a complete course/e-book</b></label>
    <table frame="box">
        <tr><br>
                        <label class='bib'><b>BibTex:  </b> </label><br>
                           <input type="text" class="bitexInfo" class="form-control"  onchange="convert()">
                         
                                    <!-- <br> -->
                        <br>
                       <label>Publications</label>
                       <input type="text" name="publicatioE-Content" required class="form-control">
                       <br>
                       <label>No of Courses</label>
                       <input type="text" name="coursesE-Content" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreE-Content" required class="form-control">
                       <br>
                       <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit9" class="button" id="submit1">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   
              
    <table>
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
            <th>Delete</th>
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
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB4.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 





<!--//////////////////////////////e-Content (developed in 4 Quadrants) per module/////////////////////////////////////////////// -->















<form action="e-contentpart(b).php" method="post">
    <br>
    <!-- <label for="#"><h2>E-Content</h2></label><br> -->
    <label for="#"><b>3(d).2 e-Content (developed in 4 Quadrants) per module</b></label>
    <table frame="box">
        <tr><br>
                        <label class='bib'><b>BibTex:  </b> </label><br>
                           <input type="text" class="bitexInfo" class="form-control"  onchange="convert()">
                         
                                    <!-- <br> -->
                        <br>
                       <label>Publications</label>
                       <input type="text" name="publicatioE-ContentPerModule" required class="form-control">
                       <br>
                       <label>No of Courses</label>
                       <input type="text" name="coursesE-ContentPerModule" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreE-ContentPerModule" required class="form-control">
                       <br>
                       <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit10" class="button" id="submit1">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   
              
    <table>
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
            <th>Delete</th>
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
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB3.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 






    

<!--///////////////////////Contribution to development of e-content module in complete course/ paper/ e-book (at least one quadrant)/////////////////////////////////////////////// -->






<form action="e-contentpart(c).php" method="post">
    <br>
  
                <!-- <label for="#"><h2>E-Content</h2></label><br> -->
               <label for="#"><b>3(d).3 Editor of e-content for complete course/ paper / e-book</b></label>
                <table frame="box">
                    <tr><br>
                    <label class='bib'><b>BibTex:  </b> </label><br>
       <input type="text" class="bitexInfo" class="form-control"  onchange="convert()">
     
                <!-- <br> -->
                        <br>
                       <label>Publications</label>
                       <input type="text" name="publicatioEditor" required class="form-control">
                       <br>
                       <label>No of Courses</label>
                       <input type="text" name="coursesEditor" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreEditor" required class="form-control">
                       <br>
                       
                       <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

                 <input required style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit11" class="button" id="submit1">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   
              
    <table>
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
            <th>Delete</th>
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
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB2.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 



















<!--///////////////////////Contribution to development of e-content module in complete course/ paper/ e-book (at least one quadrant)/////////////////////////////////////////////// -->






<form action="e-contentpart(d).php" method="post">
    <br>
   
                <!-- <label for="#"><h2>E-Content</h2></label><br> -->
               <label for="#"><b>3(d).4 Contribution to development of e-content module in complete course/ paper/ e-book (at least one quadrant)</b></label>
                <table frame="box">
                    <tr><br>
                    <label class='bib'><b>BibTex:  </b> </label><br>
       <input type="text" class="bitexInfo" class="form-control"  onchange="convert()">
     
                <!-- <br> -->
                        <br>
                       <label>Publications</label>
                       <input type="text" name="publicatioEditorContributor" required class="form-control">
                       <br>
                       <label>No of Courses</label>
                       <input type="text" name="coursesEditorContributor" required class="form-control">
                       <br>
                       <label>Score</label>
                       <input type="text" name="scoreEditorContributor" required class="form-control">
                       <br>
                       <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>

<input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>      
                      
                        <div class="input_field">
            <input type="submit" value="Submit" name="submit12" class="button" id="submit1">
             <!-- <a href="#" class="btn bth-primary" style="background-color: rgb(124, 223, 236);">
                Export
            </a> -->
        </div>
        <br>
    </form>
    <!-- <div> <label for="formFileMultiple" style="width: 240px; hight:70px;"  class="form-label">Attach Evidences</label>
    <input style="width: 240px; text-align: center;" class="form-control" type="file" id="formFileMultiple" multiple>
</div>  -->

   
              
    <table>
        <thead>
            <th>Publications</th>
            <th>No of Courses</th>
            <th>Score </th>
            <th>Delete</th>
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
            <td>
                <div class="delete">

                 
                <button class="delete"><a href="deleteB1.php?deleteid='<?php echo $showData1 ['id']?>'">Delete</a></button>
            <!-- </form> -->
            <!-- <form action="delete_post.php" method="post">
                <input class='delete' type="submit" value="Edit" >
            </form> -->
        </div>
        </td>
        </tr>
        <?php }?>
    </table> 



    <!-- </form> -->

<script>


function convert() {
let citation = document.querySelector('.bitexInfo').value;
const regex = /([^\s]+)\s*=\s*\{([^}]*)\}/g;
const matches = citation.matchAll(regex);

for (const match of matches) 
 { let key = match[1];
    console.log(key);
    let value = match[2];
  let inputFields = document.querySelectorAll('input[type="text"]');
  let inputArray = Array.from(inputFields);
  for (let i = 0; i < inputArray.length; i++) {
    let inputField = inputArray[i];
let fieldName = inputArray[i].getAttribute('name');
  if (fieldName === key) {
    inputField.value = value;

}
  }


  
  }
}

function saveBitexField() {
  const bitexField = document.querySelector('#bitexfield');
  localStorage.setItem('bitexfieldValue', bitexField.value);
}

function loadBitexField() {
  const bitexField = document.querySelector('#bitexfield');
  const bitexFieldValue = localStorage.getItem('bitexfieldValue');
  if (bitexFieldValue !== null) {
    bitexField.value = bitexFieldValue;
  }
}

window.addEventListener('load', loadBitexField);
window.addEventListener('beforeunload', saveBitexField);
</script>
 

</body>
</html>



























              







 



   

