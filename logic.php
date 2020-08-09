<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
$con= mysqli_connect("localhost", "root","");
$res = mysqli_select_db($con, "test");
/*if($res) echo'hey';
else    echo 'bye';*/
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>My list</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <style>
            h1 {
	text-align: center;
	margin-top: 30px;
	background-color: #0059E4;
	padding: 10px,10px,10px,10px;
                       color: #ffffff;
                       border-radius:5px;
}
            li{
                border:2px solid #ff4b2b;
                border-radius:10px;
                margin-top: 10px;
                height: 80px;
                width:auto;
                padding-top:12px;
                padding-left: 10px;
                font-size: 20px;
                margin-right: 10px;
                color: #ffffff;
                background: linear-gradient(-45deg, #3f00ff 0%, #ff4b2b 100%) no-repeat 0 0/200%;
            }
            li:hover{
                background: #ff4b2b;
            }
            
            .myimage{
                height:20px;
                width: 20px;
                border-radius: 100%;
            }
            .description{
                font-size:15px;
               
            }
             .description p{
               padding-left: 30px;
            }
            .viewbtn{
                    float: right;
                    margin-right: 30px;
                    margin-top: 20px;
                    background: white;
                    border: 2px solid white;
                    border-radius: 5px;
                  }
        </style>
    </head>
    <body>
        <h1> Basic Logic </h1>
       <?php
        $query = "select * from video";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_assoc($result)) 
        {
              $id = $row['vid'];
              $name = $row['vname'];
           
        ?>
                    <dl>
                        <li><img  class="myimage" src="images/c.png"/><span>&nbsp; <?php echo "<a style='color:white;' href='watch.php?vid=$id'>$name</a><br/>"; ?></span>
                            
                             <!--?php 
                             echo "<a href='watch.php?vid=$id'>$name</a><br/>";
                            ? -->
                            
                            <span class="description"><p>Description: <?php echo $row['vid'];?></p></span>
                        </li>
                    </dl>        
        <?php
        // put your code here
        }
        ?>
        
     </body>
</html>


