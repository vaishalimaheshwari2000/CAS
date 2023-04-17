<?php
         session_start();
         include("connection.php");
         error_reporting(0);
         if(isset($_POST['submit10']) ){
            $image = $_FILES['userImage']['name'];
            $error = $_FILES['userImage']['error']; 
            $tmp_name = $_FILES['userImage']['tmp_name']; 
            $size = $_FILES['userImage']['size']; 
            $name = $_POST['userName'];
            $position = $_POST['position'];
            $Specialization = $_POST['Specialization'];
            $qualification = $_POST['qualification'];
            $department = $_POST['department'];
            $faculty = $_POST['faculty'];
            $address = $_POST['address'];
            $mail = $_POST['mail'];
            $phone = $_POST['phone'];
            $biosketch = $_POST['biosketch'];
            $img_upload_path = "./imgFolder/".$image;
            if(move_uploaded_file( $tmp_name , $img_upload_path)){
                header("Location: profile.php");
             }
            else{
                echo "<h3> Failed to upload image!</h3>";
               
            }
            
            $sql = "INSERT INTO `profile`(`image`, `name`, `position`, `area`, `qualification`, `department`, `faculty`, `address`, `email`, `phone`, `biosketch`)
                    VALUES ('$image','$name','$position','$Specialization','$qualification','$department','$faculty','$address','$mail','$phone','$biosketch')";
 
            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: profile.php");
        }
    ?> 