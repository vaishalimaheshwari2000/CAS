<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submiteven'])){
           $activity = $_POST["activity"];
         
          $role = $_POST["role"];
          foreach($activity as $index => $activities){
                 $s_activity = $activities[$index];
                 $s_role = $role[$index];
               
            if($s_role!= null && $s_activity!=null){
            $sql = "INSERT INTO `categoryaparta`(`Activity`, `Activity & Role`)
                    VALUES ('$activities','$s_role')";

            $data = mysqli_query($conn, $sql); } }
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        }
    ?> 