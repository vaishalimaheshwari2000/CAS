<?php
        //  session_start();
        include("connection.php");
        if(isset($_GET['deleteid'])){
            $id = $_GET['deleteid']; 
            

            $sql = "DELETE FROM `appointment_held(part-(a))` WHERE id=$id";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartA(new).php");
        }
    ?>