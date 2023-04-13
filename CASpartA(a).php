<?php
        //  session_start(

        // );  
        include("connection.php");
        if(isset($_POST['submit8'])){
            $qualification = $_POST['qualificationpart'];
            $board = $_POST['boardpart'];
            $year = $_POST['yearpart'];
            $marks = $_POST['markspart'];
            $division = $_POST['divisionpart'];
            $subject = $_POST['subjectpart'];
          

            $sql = "INSERT INTO `academics`(`qualification`, `board`, `year`, `marks`, `division`, `subject`) 
                        VALUES ('$qualification','$board','$year','$marks','$division','$subject')";

            $data = mysqli_query($conn, $sql);
            //  echo"success!";
   
            mysqli_close($conn);
            header("Location: CASpartA(new).php");
        }
    ?>   