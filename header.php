<?php 
    $conn =mysqli_connect('localhost','root','','pro'); 
    // $mysqli = new mysqli("localhost", "my_user", "my_password", "db_name");
    // mysqli_connect
    // isset
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course Page</title>
    <link rel="stylesheet" href="MyStyle.css">
</head>

<body>
    <div class="nav">
        <ul>

            <li <?php if(isset($main)){?>class="active" <?php }?>> <a href="Home.php">Personal Information</a> </li>
            <li <?php if(isset($allc)){?>class="active" <?php }?>> <a href="ViewsCourses.php">Courses Information</a>
            </li>
            <li <?php if(isset($allex)){?>class="active" <?php }?>> <a href="ViewExperience.php">Experiences
                    Information</a> </li>
            <li <?php if(isset($addc)){?>class="active" <?php }?>> <a href="addCourse.php">Add Course</a> </li>
            <li <?php if(isset($addex)){?>class="active" <?php }?>> <a href="addExperience.php">Add Experience</a> </li>
            <li class="logo"><img src="img/3.png" alt="logo"></li>
        </ul>
    </div>