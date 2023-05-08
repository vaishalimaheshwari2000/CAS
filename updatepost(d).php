<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update pf 1(d) table</title>
</head>

<body>
<form action="updateCASpart1(d).php" method="post">
    <br>
    <label for="#"> <b>1(d)	Posts held after appointment at this Institute</b></label>
    <table frame="box">
        <tr>
            <br>
            <label>Designation</label>
            <input type="text" name="designationPosts" value="<?php echo $showData1['Designation']; ?>" required class="form-control">
            <br>
            <label>Department</label>
            <input type="text" name="departmentPost" value="<?php echo $showData1['Department']; ?>" required class="form-control">
            <br>
            <label>Joining from</label>
            <input type="text" name="joiningDatePost" value="<?php echo $showData1['Joining from']; ?>" required class="form-control">
            <br>
            <label>Joining to</label>
            <input type="text" name="leavingDatePost" value="<?php echo $showData1['Joining to']; ?>" required class="form-control">
            <br>
            <label>Grade/Level</label>
            <input type="text" name="gradePost" value="<?php echo $showData1['Grade/Level']; ?>" required class="form-control">
            <br>
            <input type="hidden" name="id" value="<?php echo $showData1['id']; ?>">
            <div class="input_field">
                <input type="submit" value="Update" name="update" class="button" id="update">
            </div>
            <br>
        </tr>
    </table>
</form>
 
</body>
</html>