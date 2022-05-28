<?php
$allc=1;

  include 'header.php' ;
?>
<h1> All Courses Information</h1>
<table border="1px" cellspacing="0">
    <thead style="background-color: #606060;" height="50px">
        <tr>
            <th rowspan="2" width="60px" height="50px">#</th>
            <th rowspan="2" width="250px">Course Name</th>
            <th rowspan="2" width="150px">Total Hours</th>
            <th colspan="2" width="190px">Date</th>
            <th rowspan="2" width="200px">Institution</th>
            <th rowspan="2" width="200px">Attachment</th>
            <th rowspan="2" width="250px">Notes</th>
        </tr>

        <tr>


            <th>From</th>
            <th>To</th>


        </tr>
    </thead>

    <tbody style="border:solid black;">
        <?php 
            $sql = "SELECT * FROM `courses` ";
            $result = mysqli_query($conn, $sql);
            while($courses = mysqli_fetch_assoc($result)){
        ?>
        <tr height="70px">
            <th>2</th>
            <td style="text-align: left; padding: 20px;"><?php echo $courses['name'] ?></td>
            <td><?php echo $courses['hours_no'] ?></td>
            <td style="padding:50px 10px;"><?php echo $courses['start_date'] ?></td>
            <td style="padding:50px 10px;"><?php echo $courses['end_date'] ?></td>
            <td> <?php echo $courses['Institution'] ?> </td>
            <td><?php 

            if(isset($courses['file'])){
                
          echo $courses['file']; 
    }else{
                
            echo $courses['url'];
        
            }    

        
            ?></td>
            <td style="text-align: left; padding: 10px;"><?php echo $courses['Notes'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</body>

</html>