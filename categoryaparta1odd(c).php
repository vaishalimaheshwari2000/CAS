<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submitpartodd'])){
           $activity = $_POST["activity"];
            $role = $_POST["role"];
        
          
            $sql = "INSERT INTO `categoryaparta1odd(c)`(`Activity`, `Activity & Role`)
                    VALUES ('$activity','$role')";

            $data = mysqli_query($conn, $sql); }
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        
    ?> 