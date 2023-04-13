<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit9'])){
         
            $interests = $_POST['interests'];
       

            $sql = "INSERT INTO `profileinterests`(`input`) 
                     VALUES ('$interests')";
 
            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: profile.php");
        }
    ?> 