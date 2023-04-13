<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit4'])){
            // $image = $_FILES['submit10'];
            $author = $_POST['author'];
            $title = $_POST['title'];
            $journal = $_POST['journal'];
            $volume = $_POST['volume'];
            $pages = $_POST['pages'];
            $year = $_POST['year'];

            $sql = "INSERT INTO `profile`(`image`, `name`, `position`, `area`, `email`, `biosketch`)
                     VALUES ('$author','$title','$journal','$volume','$pages','$year')";
 
            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: profile.php");
        }
    ?> 