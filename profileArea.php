<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit5'])){
            $researcgASrea = $_POST['researcgASrea'];
            echo "tesst";
       

            $sql = "INSERT INTO `profilresearch`(`input`) VALUES ('$researcgASrea')";
 
            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: profile.php");
        }
    ?> 