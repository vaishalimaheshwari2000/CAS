<?php
        //  session_start();
        include("connection.php");
        if(isset($_GET['deleteid'])){
            $id = $_GET['deleteid']; 
            

            $sql = "DELETE FROM `posts_held(part_a)` WHERE id=$id";

            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: CASpartA(new).php");
        }
    ?>