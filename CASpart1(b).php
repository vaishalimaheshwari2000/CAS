<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit6'])){
            $degree = $_POST['degree'];
            $title = $_POST['title'];
            $year = $_POST['dateReward'];
            $university = $_POST['university'];
            
          

            $sql = "INSERT INTO `researchdegree`(`degree`, `title`, `date`, `university`)
            VALUES ('$degree','$title','$year','$university')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartA(new).php");
        }
    ?> 