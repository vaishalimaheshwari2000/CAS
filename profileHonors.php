<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit0'])){
         
            $honors = $_POST['honors'];
       

            $sql = "INSERT INTO `profilehonors`(`input`)
                     VALUES ('$honors')";
 
            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: profile.php");
        }
    ?> 