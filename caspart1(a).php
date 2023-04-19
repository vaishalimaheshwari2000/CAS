<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submitA'])){
           $course = $_POST["course"];
            $classes = $_POST["classes"];
             $classestaught = $_POST["classestaught"];
             $perecntageClasses = $_POST["perecntageClasses"];
            
          

            $sql = "INSERT INTO `casparta1(a)`(`course`, `classes`, `classestaught`, `perecntageClasses`)
                        VALUES ('$course','$classes','$classestaught','$perecntageClasses')";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartA(new).php");
        }
    ?> 