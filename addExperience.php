<?php
$addex=1;

    include 'header.php' ;

  if(isset($_GET['submit'])){
    $name       = htmlspecialchars($_GET['name']);
    $hours_no    = htmlspecialchars($_GET['hour_no']);
    $start_date = htmlspecialchars($_GET['start_date']);
    $end_date   = htmlspecialchars($_GET['end_date']);
    $institution= htmlspecialchars($_GET['institution']);
    $description      = htmlspecialchars($_GET['description']);
    
    $sql = "INSERT INTO `experiences` (name,hour_no,start_date,end_date,Institution,description) VALUES ('$name',$hours_no,'$start_date','$end_date','$institution', '$description')";
    if(mysqli_query($conn, $sql)){
      echo 'done...';
    }else{
        echo 'faild...';
    }
  }
?>
<div class="experience">
    <img src="img/5.jpg" alt="">
    <form method="get">
        <div class="line">
            <div class="detailss"><label for="1">Course Name:</label></div>
            <div class="details">
                <select name="name" required style=" width: 170px; border-radius: 8px;height: 25px;" id="1">
                    <option></option>
                    <option name="full_stack_course" value="full stack course">full stack course</option>
                    <option name="word_press_course" value="Word press course">Word press course</option>
                    <option name="photoshop_course" value="photoshop course">photoshop course</option>
                    <option name="motion_graphics_course" value="Motion-graphics course">Motion-graphics course</option>
                </select>
            </div>
        </div>

        <div class="line">
            <div class="detailss"><label>Number of Hours:</label></div>
            <div class="details"><input required type="number" name="hour_no" min="0"
                    style="width: 170px;border-radius: 8px;height: 25px; "></div>
        </div>

        <div class="line">
            <div class="detailss"><label for="3">Start Date :</label></div>
            <div class="details"><input required type="month" name="start_date"
                    style="width: 170px;border-radius: 8px; height: 25px; "></div>
        </div>

        <div class="line">
            <div class="detailss"><label for="4">End Date :</label></div>
            <div class="details"><input required type="month" name="end_date"
                    style="width: 170px; border-radius: 8px;height: 25px; "></div>

        </div>

        <div class="line">
            <div class="detailss"><label for="5">Institution :</label></div>
            <div class="details"><input required type="text" name="institution"
                    style="width: 170px; border-radius: 8px;height: 25px;"></div>

        </div>

        <div class="line">
            <div class="detailss" style="position: absolute;"><label>description:</label></div>
            <div class="details" style="margin-left: 160px;"><textarea required name="description" cols="27" rows="5"
                    style="border-radius: 8px; resize: none;"></textarea></div>
        </div>

        <div class="line">
            <div class="detailss"><input name="submit" type="submit" value="Save"></div>
            <div class="details"><input type="reset"></div>
        </div>
    </form>
</div>
</body>

</html>