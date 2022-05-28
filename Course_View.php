<?php 
    include 'header.php';
    if(isset($_GET['course_id'])){
        $id       = htmlspecialchars($_GET['course_id']);
    }
?>

<!-- <h1>Course " "</h1> -->
<?php 
            $sql = "SELECT * FROM `courses` WHERE id =$id";
            $result = mysqli_query($conn, $sql);
            $ex = mysqli_fetch_assoc($result);
            ?>
<div style="margin-left:50px ;">
    <h1>Course " <?php echo $ex['name'] ?> "</h1>
    <p>from <?php echo $ex['start_date'] ?> to <?php echo $ex['end_date'] ?> and total hours is
        <?php echo $ex['hours_no'] ?></p>
    <p>Institution was " <?php echo $ex['Institution'] ?> "</p>
    <img src="img/267614542_509614640094137_5465686080650526579_n.png" alt="">
</div>
</body>

</html>