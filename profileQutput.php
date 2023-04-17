<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        .main {
            display: flex;
            margin-bottom: 20px;
        }
        .image {
            width: 200px;
            margin-right: 20px;
        }
        .info {
            width: 300px;
        }
        img{
            width:11rem;
            height:15rem;
            margin-top:15%;
            margin-left:4%;
            border: 1px solid;
            padding: 5px;
      
        }
        h2{
            text-align: center;
            font-size:2rem;
        }
        span{
            font-weight: bold;
        }
        #mail{
            font-weight:normal;
            font-style: italic;
            color:blue;
        }

        .info{
            margin-top:1%;
        }
        .size{
            font-size:1.5rem;
            font-weight:bold;
        }

        table {
           border-collapse: collapse;
         }
    td, th {
      border: 1px solid black;
     }
     td{
        padding:20px;
     }
     #journalInfo{
        width:100%;
     }
     
    </style>
</head>
<body>
    <h2><em>Faculty of Engineering</em></h2><hr>
    <div class="container">
        <?php 
        include("connection.php");
        $sql = "SELECT * FROM `profile`";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
          
        while($row = mysqli_fetch_assoc($result)){ 
        ?>
        <div class="main">
            <div class="image">
                <img src="./imgFolder/<?php echo $row['image'];?>" alt="<?php echo $row['name']; ?>">
            </div>
            <div class="info">
            <span><?php echo $row['name']; ?></span><br><em><?php echo $row['position']; ?> </em>
<p><span>Educational Qualification- </span><?php echo $row['qualification']; ?></p><p><span>Area of Specialization- </span><?php echo $row['area']; ?></p>
                <p><span>CONTACT</span><br>
                Department of <?php echo $row['department']; ?><br>
                Faculty of <?php echo $row['faculty']; ?><br>
                <?php echo $row['address']; ?><br>

               
                   <span>Tele: </span><?php echo $row['phone']; ?><span><br>
                
                    <span>Email: </span><span id='mail'><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a><span></p>
               
            </div>
            
        </div>
        <br><p><Span class='size'>BioSketch</Span><br><br><?php echo $row['biosketch']; ?></p> 
        <?php } ?>
    </div>


          
    <table>
       <p class='size'>  Area(s)Research</p>
          
   

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT `input` FROM `profilresearch`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <ul>

            <li><?php echo $showData1 ['input']?></li>
         
        </ul>
        <?php }?>
    </table>


  
      <table>
       <p class='size'>  Research Interests</p>
          
   

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `profileinterests`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <ul>

            <li><?php echo $showData1 ['input']?></li>
         
        </ul>
        <?php }?>
    </table>













    
      <table>
       <p class='size'>  Honors and Recoginitionss</p>
          
   

        <?php 
            include("connection.php");
            $data_array1 = array();
            $sql = "SELECT * FROM `profilehonors`";
            $dataArray1 = mysqli_query($conn, $sql);
            mysqli_close($conn);

            
            while($rows = mysqli_fetch_assoc($dataArray1)){ 
                $data_array1[] = $rows; 
            }
                             
            foreach($data_array1 as $showData1){ 
                 
        ?>

        <ul>

            <li><?php echo $showData1 ['input']?></li>
         
        </ul>
        <?php }?>
    </table>








   
   
   
   
   
  















    <?php
    echo "<p class='size'>Selected Publications</p>";
    echo "<h3>Journal Publications</h3>";?>


     
   
   <?php 
   include("connection.php");
   $data_array = array();
   $sql1 = "SELECT * FROM `researchpaper` ORDER BY `Journal` DESC";
   $dataArray = mysqli_query($conn, $sql1);
   mysqli_close($conn);

   echo "<p>";
   while($rows = mysqli_fetch_assoc($dataArray)){ 
       $data_array[] = $rows; 
   }
                    
   foreach($data_array as $showData){ 
        
?>
   <?php echo $showData ['namecoauthors']. ","; ?>
 
<?php }?>


<?php
    include("connection.php");
    $data_array1 = array();
    $sql3 = "SELECT * FROM `profilejournal`";
    $dataArray1 = mysqli_query($conn, $sql3);
    mysqli_close($conn);
    
    
    while($rows = mysqli_fetch_assoc($dataArray1)){ 
        $data_array1[] = $rows; 
    }
                     
    foreach($data_array1 as $showData1){ 
       
        echo $showData1['author'] . ",";
        echo $showData1['title'] . ",";
        echo $showData1['name'] . "<br>";
        echo  $showData1['volume'] . ",";
        echo $showData1['page'] . ",";
        echo $showData1['year'] ;
        echo "</p>";
    }
?>








    

</body>
</html>
