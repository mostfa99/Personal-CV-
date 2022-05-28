<?php 
$allex=1;

    include 'header.php';
?>

<h1>All Experiences Information </h1>
<?php 
            $sql = "SELECT * FROM `experiences` ";
            $result = mysqli_query($conn, $sql);
            while($ex = mysqli_fetch_assoc($result)){
        ?>
<p class="title">
    <b><?php echo $ex['name'] ?><sub><?php echo $ex['Institution'] ?></sub><br><?php echo $ex['start_date'] ?></b>
</p>

<p class="web"><?php echo $ex['description'] ?></p>
<?php } ?>
</body>

</html>