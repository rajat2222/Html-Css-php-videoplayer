<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'dbcon.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        <a href="logic.php">Videos</a> <br>
        <form method="Post" enctype="multipart/form-data">
            <input type ="file" name="file"/>
            <input type="submit" name="submit" value="upload"/>
            
        </form>
        
        <?php
        if(isset($_POST['submit']))
        {
            $name = $_FILES['file']['name'];
                    $temp =$_FILES['file']['tmp_name'];
        
                    move_uploaded_file($temp, "video_location/".$name);
                    $query = "insert into video values(null,'$name')";
                     if(mysqli_query($con, $query))
                     {
                         echo 'Submitted to database';
                         echo "<br>".$name." has been uploaded successfully";
                     }
                     else
                     {
                         echo 'please try again';
                     }
        }
        // put your code here
        ?>
    </body>
</html>
