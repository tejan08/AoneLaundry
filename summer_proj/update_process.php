<html>
    
    <head>
        <title>Update Employee Data</title>
    </head>

    <body>

        <?php
            include_once 'database.php';
            if(count($_POST)>0) {
            mysqli_query($conn,"UPDATE info set Name='" . $_POST['nam'] . "', Address='" . $_POST['add'] . "', phone_no='" . $_POST['ph'] . "', Email='" . $_POST['mail'] . "' , Type='" . $_POST['typ'] . "', Services='" . $_POST['serv'] . "', Date='" . $_POST['dt'] . "', Time='" . $_POST['tim'] . "' WHERE ID='" . $_GET['ID'] . "'");
            $message = "Record Modified Successfully";
            }
            $result = mysqli_query($conn,"SELECT * FROM info WHERE ID='" . $_GET['ID'] . "'");
            $row= mysqli_fetch_array($result);
        ?>


        <form name="frmUser" method="post" action="">

            <div><?php if(isset($message)) { echo $message; } ?>
            </div>
            <div style="padding-bottom:5px;">
            <a href="admin.php">Info</a>
            </div>

            Name: <br>

            <input type="text" name="nam"  value="<?php echo $row['Name']; ?>">
            <br>
            Address: <br>
            <input type="text" name="add" class="txtField" value="<?php echo $row['Address']; ?>">
            <br>
            Phone no :<br>
            <input type="text" name="ph" class="txtField" value="<?php echo $row['phone_no']; ?>">
            <br>
            Email :<br>
            <input type="text" name="mail" class="txtField" value="<?php echo $row['Email']; ?>">
            <br>
            Type:<br>
            <input type="text" name="typ" class="txtField" value="<?php echo $row['Type']; ?>">
            <br>

            Service:<br>
            <input type="text" name="serv" class="txtField" value="<?php echo $row['Services']; ?>">
            <br>

            Date and time:<br>
            <input type="date" name="dt" class="txtField" value="<?php echo $row['Date']; ?>">
            <input type="time" name="tim" class="txtField" value="<?php echo $row['Time']; ?>">
            <br>

            <input type="submit" name="submit" value="Update" class="buttom">

        </form>
    </body>
</html>