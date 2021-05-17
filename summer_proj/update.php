<!DOCTYPE html>
	<html>
		<head>
			<title>Update</title>
			
				<link rel="stylesheet" type="text/css" href="css\update.css">
				
				<style>
					.formOption div 
					{
						padding-top: 15px;
						display: inline-block;
					}
				</style>
												
		</head>
			<body>
				<header>

					<div class="main">
						<ul>
							<li class="active"> <a href="update.php">Update</a></li>
						</ul>
					</div>

				</header>

					<?php
						include_once 'database.php';
						if(count($_POST)>0) 
						{
							mysqli_query($conn,"UPDATE info set Name='" . $_POST['nam'] . "', Address='" . $_POST['add'] . "', phone_no='" . $_POST['ph'] . "', Email='" . $_POST['mail'] . "' , Type='" . $_POST['typ'] . "', Services='" . $_POST['serv'] . "', Date='" . $_POST['dt'] . "', Time='" . $_POST['tim'] . "' WHERE ID='" . $_GET['ID'] . "'");
							$message = "Record Modified Successfully";
						}
						$result = mysqli_query($conn,"SELECT * FROM info WHERE ID='" . $_GET['ID'] . "'");
						$row= mysqli_fetch_array($result);
					?>

				
					
					<div class="form_div">
						<form action="" method="POST" >

							<div>
								<?php if(isset($message)) { echo $message; } ?>
							</div>

							<div style="padding-bottom:30px;">
								<a href="admin.php">Admin page</a> 
							</div>

								<label for="fname">Name:</label> <input type="text" id="fname" name="nam" value="<?php echo $row['Name']; ?>">
								<br> <label for="address">Address:</label> <input type="text" id="address" name="add" value="<?php echo $row['Address']; ?>">
								<br> <label for="phnum">Phone no:</label> <input type="text" id="phnum" name="ph" value="<?php echo $row['phone_no']; ?>">
								<br> <label for="email_address">Email address:</label> <input type="text" id="email" name="mail" value="<?php echo $row['Email']; ?>">
								<div>
									<div class="formOption">
										<div>
											<label for="laundry_type">Choose your laundry type:</label><br>
											<input list="laundry_types" name="typ" id="laundry_type" value="<?php echo $row['Type']; ?>">
											<datalist id="laundry_types">
											<option value="Cotton">
											<option value="Silicone">
											<option value="Downjacket">
											<option value="Blankets">
											<option value="Boots">
											</datalist>
										</div>
											<div>
												<label for="choose_service">Choose services:</label><br>
												<input list="choose_services" name="serv" id="choose_service" value="<?php echo $row['Services']; ?>">
												<datalist id="choose_services">
												<option value="Wash only">
												<option value="Wash and iron">			
												</datalist>
											</div>
									</div>

									<div style="padding-top: 15px;">
										<label for="pick_up_date">Pick date and time:</label><br> <input type="date" id="pick_up_date" name="dt" value="<?php echo $row['Date']; ?>">
										<input type="time" id="pick_time" name="tim" value="<?php echo $row['Time']; ?>">
									</div>

								<br> <button name="submit" type="submit">Update</button>
						</form>
						
					</div>	

			</body>

	</html>