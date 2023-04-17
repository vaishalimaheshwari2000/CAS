<?php
         session_start();
        include("connection.php");
        if(isset($_POST['submit4'])){
            $author = $_POST['author'];
            $title = $_POST['title'];
            $journal = $_POST['journal'];
            $volume = $_POST['volume'];
            $pages = $_POST['pages'];
            $year = $_POST['year'];

            $sql = "INSERT INTO `profilejournal`(`author`, `title`, `name`, `volume`, `page`, `year`)
                     VALUES ('$author','$title','$journal','$volume','$pages','$year')";
 
            $data = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: profile.php");
        }
    ?> 