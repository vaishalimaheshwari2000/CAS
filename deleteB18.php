<?php
        //  session_start();
        include("connection.php");
        if(isset($_GET['deleteid'])){
            $id = $_GET['deleteid']; 
            

            $sql = "DELETE FROM `casparta1(a)` WHERE id=$id";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        }
    ?>