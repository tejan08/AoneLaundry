<?php
session_start();

include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM info");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin pannel</title>
        <link rel="stylesheet" type="text/css" href="css\admin.css">
    </head>
<body>
<table class="tabl">
	<tr>
    	<th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone no</th>
        <th>Type</th>
        <th>Services</th>
        <th>Date</th>
        <th>Time</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Done</th>
	</tr>

	<?php
	    $i=0;
         while($row = mysqli_fetch_array($result)) 
        {
    ?>
            <tr class="<?php if(isset($classname)) echo $classname;?>">
            <td><?php echo $row["ID"]; ?></td>
            <td><?php echo $row["Name"]; ?></td>
            <td><?php echo $row["Address"]; ?></td>
            <td><?php echo $row["Email"]; ?></td>
            <td><?php echo $row["phone_no"]; ?></td>
            <td><?php echo $row["Type"]; ?></td>
            <td><?php echo $row["Services"]; ?></td>
            <td><?php echo $row["Date"]; ?></td>
            <td><?php echo $row["Time"]; ?></td>
            <td><a href="update.php?ID=<?php echo $row["ID"]; ?>">Update</a></td>
            <td><a href="delete-process.php?ID=<?php echo $row["ID"]; ?>">Delete</a></td>
            <td><a href="done.php?ID=<?php echo $row["ID"]; ?>">Done</a></td>
            </tr>
            <?php
                $i++;
        }
            ?>

</table>

<div class="btn">
    <form action="" name="formA">
        Out of service:<br>
        <input type="radio" id="yes" name="y" value="Yes">
        <label> Yes </label><br>
        <input type="radio" id="no" name="y" value="No">
        <label> No </label><br>
    </form>
</div>

<!-- <script>
    if(document.getElementById('yes').checked != true) {   
        <?php $_SESSION['order'] = 'no' ?>
    }
    else if((document.getElementById('no').checked == true) { ){
        <?php $_SESSION['order'] = 'no' ?>
    } 
    else{
        <?php $_SESSION['order'] = 'yes' ?>

    } -->

<!-- </script> -->
</body>
</html>