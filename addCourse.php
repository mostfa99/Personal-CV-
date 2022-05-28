<?php 
$addc=1;
  include 'header.php';

  if(isset($_GET['submit'])){
    $name       = htmlspecialchars($_GET['name']);
    $hours_no    = htmlspecialchars($_GET['hour_no']);
    $start_date = htmlspecialchars($_GET['start_date']);
    $end_date   = htmlspecialchars($_GET['end_date']);
    $institution= htmlspecialchars($_GET['institution']);
  
    $notes      = htmlspecialchars($_GET['notes']);

    if(empty($url)){
      $file        = htmlspecialchars($_GET['file']);
    }else{
      $url        = htmlspecialchars($_GET['url']);
    }

    $sql = "INSERT INTO `courses` (name,hours_no,start_date,end_date,Institution,url,file,Notes) VALUES ('$name',$hours_no,'$start_date','$end_date','$institution', '$url', '$file',  '$notes')";
    if(mysqli_query($conn, $sql)){
      header('Location:http://localhost/aaaa/ViewsCourses.php');
    }else{
        echo 'faild...';
    }
  }
?>
<div class="course">
    <img src="img/4.jpg" alt="">
    <form method="get">
        <div class="line">
            <div class="detailss"><label>Course name:</label></div>
            <div class="details"><input type="text" name="name" style="width: 170px; border-radius: 8px;height: 25px; ">
            </div>
        </div>

        <div class="line">
            <div class="detailss"><label>Number of Hours:</label></div>
            <div class="details"><input type="number" name="hour_no" min="0"
                    style="width: 170px;border-radius: 8px; height: 25px; "></div>
        </div>

        <div class="line">
            <div class="detailss"><label for="3">Start Date :</label></div>
            <div class="details"><input type="text" name="start_date"
                    style="width: 170px;border-radius: 8px;height: 25px; "></div>
        </div>

        <div class="line">
            <div class="detailss"><label for="4">End Date :</label></div>
            <div class="details"><input type="text" name="end_date"
                    style="width: 170px; border-radius: 8px; height: 25px; "></div>
        </div>

        <div class="line">
            <div class="detailss"><label for="5">Institution :</label></div>
            <div class="details"><input type="text" name="institution"
                    style="width: 170px; border-radius: 8px;height: 25px;"></div>
        </div>

        <div class="line">

            <div class="detailss"> <label for="6"> Attachment:</label></div>
            <div class="details" width="100px">
                <input type="radio" name="os" value="file" id="g1" onclick="calValue1()">
                <label for="os2">File</label>
                <input type="radio" name="os" value="url" id="g2" onclick="calValue2()">
                <label for="os1">URL</label>
            </div>
        </div>

        <div class="line" id="URLONE">
            <div class="detailss"><label>URL:</label></div>
            <div class="details"><input type="url" name="url" id="FILEONE"
                    style="width: 170px; border-radius: 8px; height: 25px; ">
            </div>
        </div>

        <div class="line">
            <div class="detailss"><label>File:</label></div>
            <div class="details"><input type="file" name="file" id="file"></div>
        </div>

        <div class="line">
            <div class="detailss" style="position: absolute;"><label>Notes:</label></div>
            <div class="details" style="margin-left: 160px;"><textarea name="notes" cols="27" rows="5"
                    style="border-radius: 8px; resize: none;"></textarea></div>
        </div>

        <div class="line">
            <div class="detailss"><input name="submit" type="submit" value="Save"></div>
            <div class="details"><input type="reset"></div>
        </div>

    </form>
</div>

<script>
function calValue1() {
    document.getElementById("FILEONE").disabled = true;
    document.getElementById("file").disabled = false;
}

function calValue2() {
    document.getElementById("file").disabled = true;
    document.getElementById("FILEONE").disabled = false;
}
</script>
</body>

</html>