<?php
        //  session_start();
        include("connection.php");
        if(isset($_GET['deleteid'])){
            $id = $_GET['deleteid']; 
            

            $sql = "DELETE FROM `moocs_content_writer` WHERE id=$id";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartB22.php");
        }
    ?>