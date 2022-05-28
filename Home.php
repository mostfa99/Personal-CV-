<?php
  $main=1;
  include 'header.php';
  $sql = "SELECT * FROM `personal_info`";
  $result = mysqli_query($conn, $sql);
  $info = mysqli_fetch_array($result);
?>
<h1>Personal information </h1>
<div class="personal">
    <p>
        <img src="img/1.png" alt="">
    <div class="line">
        <div class="detailss">Full Name:</div>
        <div class="details"><b> <?php echo $info['full_name'] ?></b></div>
    </div>

    <div class="line">
        <div class="detailss">Gender:</div>
        <div class="details"><b><?php echo $info['gender'] ?></b></div>
    </div>

    <div class="line">
        <div class="detailss">Birth Date: </div>
        <div class="details"><b><?php echo $info['date_birth'] ?></b></div>
    </div>

    <div class="line">
        <div class="detailss">Nationality: </div>
        <div class="details"><b> <?php echo $info['nationality'] ?></b></div>
    </div>

    <div class="line">
        <div class="detailss">Place of Birth: </div>
        <div class="details"><b><?php echo $info['birth_place'] ?></b></div>
    </div>

    <div class="line">
        <div class="detailss">Job title: </div>
        <div class="details"><b><?php echo $info['job_title'] ?></b></div>
    </div>

    <div class="line">
        <div class="detailss">Year of experience: </div>
        <div class="details"><b><?php echo $info['ex_year'] ?></b></div>
    </div>

    </p>
</div>
</body>

</html>