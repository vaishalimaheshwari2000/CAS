<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit10'])){
            $image = $_FILES['submit10'];
            $name = $_POST['userName'];
            $position = $_POST['position'];
            $Specialization = $_POST['Specialization'];
            $mail = $_POST['mail'];
            $biosketch = $_POST['biosketch'];

            $sql = "INSERT INTO `profile`(`image`, `name`, `position`, `area`, `email`, `biosketch`)
                     VALUES ('$image','$name','$position','$Specialization','$mail','$biosketch')";
 
            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: profile.php");
        }
    ?> 