<?php
         session_start();
         include("connection.php");
         
         if(isset($_POST['submit10']) ){
            $image = $_FILES['userImage']['name'];
            $error = $_FILES['userImage']['error']; 
            $tmp_name = $_FILES['userImage']['tmp_name']; 
            $size = $_FILES['userImage']['size']; 
            $name = $_POST['userName'];
            $position = $_POST['position'];
            $Specialization = $_POST['Specialization'];
            $mail = $_POST['mail'];
            $biosketch = $_POST['biosketch'];
            
           
            if($error === 0){
               if($size>125000){
                $em = "Sorry, your file is too large";
                header("Location: profile.php");
                exit;

            }
            else{
                    // $img_ex = pathinfo($image,PATHINFO_EXTENSION);
                    // echo "\n";
                    // echo "testing image";
                    // echo "\n";
                    // var_dump($img_ex);
                    // $img_ex_lc = strtolower($img_ex);
                    // echo "\n";
                    // var_dump($img_ex_lc);
                       
                    // $allowed_exs = array("jpg", "png", "jpeg");
                    // if(in_array($img_ex_lc,$allowed_exs)){
                        $img_upload_path = "./imgFolder/".$image;
                    if(move_uploaded_file( $tmp_name , $img_upload_path)){
                        // $unique_id = uniqid('IMG-', true);
                        // $unique_id = str_replace('.', '', $unique_id);
                        // $unique_id = str_replace('-', '', $unique_id);

                        // $new_img_name = $unique_id . '.' . $img_ex_lc;
                        // var_dump($new_img_name);
                        // echo "\n";
                        // var_dump($img_upload_path);
                        // move_uploaded_file( $tmp_name , $img_upload_path);
                        // if (!move_uploaded_file($tmp_name, $img_upload_path)) {
                        //     var_dump(error_reporting(E_ALL));
                        // }    
                        // echo "\n";
                        // var_dump(move_uploaded_file( $tmp_name , $img_upload_path));
                        header("Location: profile.php");
                     }
                    else{
                        $em = "You can't upload this type of file";
                        header("Location: profile.php");

                    }
                }
            }
            $sql = "INSERT INTO `profile`(`image`, `name`, `position`, `area`, `email`, `biosketch`)
                     VALUES ('$image','$name','$position','$Specialization','$mail','$biosketch')";
 
            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: profile.php");
        }
    ?> 