<!-- <?php 
	session_start();
	if($_SESSION['order'] == 'yes'){
		echo "<script>
				alert('Out of service');
			</script>";
	}
?> -->

<!DOCTYPE html>
	<html>
		<head>
			<title>Place Order</title>
			
				<link rel="stylesheet" type="text/css" href="css\order.css">
				
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
							<li> <a href="index.html">index</a></li>
							<li> <a href="pricelist.php">Price List</a></li>
							<li class="active"> <a href="order.php">Place an order</a></li>
							<li> <a href="Contact.php">Contact</a></li>
						</ul>
					</div>

				</header>

					<div class="form_div">
						<form action="connec.php" method="POST" >
							<label for="fname" class="siz">Name:<font color=red>*</font> </label> <input type="text" id="fname" name="fname" class="sizee">

							<br> <label for="address" class="siz">Address:<font color=red>*</font></label> <input type="text" id="address" name="faddress" class="sizee">

							<br> <label for="phnum" class="siz">Phone no:<font color=red>*</font></label> <input type="text" id="phnum" name="phnum" class="sizee">

							<br> <label for="email_address" class="siz">Email address:<font color=red>*</font></label> <input type="text" id="email" name="femail" class="sizee">
							
							<div>
								<div class="formOption">
									<div>
										<label for="laundry_type" class="siz">Choose your laundry type:<font color=red>*</font></label><br>
										<input list="laundry_types" name="ftype" id="laundry_type" class="sizee">
										<datalist id="laundry_types">
										<option value="Cotton">
										<option value="Silicone">
										<option value="Downjacket">
										<option value="Blankets">
										<option value="Boots">
										</datalist>
									</div>

									<div>
										<label for="choose_service" class="siz">Choose services:<font color=red>*</font></label><br>
										<input list="choose_services" name="fservice" id="choose_service" class="sizee">
										<datalist id="choose_services">
										<option value="Wash only">
										<option value="Wash and iron">			
										</datalist>
									</div>
									
								</div>

								<div style="padding-top: 15px;">
									<label for="pick_up_date" class="siz">Pick date and time:<font color=red>*</font></label><br> <input type="date" id="pick_up_date" name="fdate" class="sizee">
									<input type="time" id="pick_time" name="ftime" class="sizee">
								</div>

							<br> <button name="submit" type="submit" class="subz">Submit</button>
						</form>
						
					</div>	

			</body>

	</html>
