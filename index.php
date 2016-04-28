<?php

$fname="";
$lname="";
$email="";
$mob="";
$cname="";
$dname="";
$tname="";
$website="";
$Address="";

?>
<!Doctype>
<html>
	<head>
		<title>Business Cards</title>

		<style>
			.box{
				position: absolute;
				left: 100%;
			}

		</style>
	</head>


	<body style="background-color:grey;">
		<div style="text-align:center; position:absolute;  margin:50px 35px 30px 35px;">
			<form method="POST" action="dashboard.php">
				
				<label  for="fname">First name&nbsp;&nbsp;&nbsp;</label>
				<input class="box" style="width:200px; height:30px; border-radius:5%;" type="text" name="fname" id="fname" value="<?php echo $fname; ?>" placeholder="First Name"><br><br><br>
				
				<label for-="lname">Last name&nbsp;&nbsp;&nbsp;</label>
				<input class="box" style="width:200px; height:30px; border-radius:5%;" type="text" name="lname" id="lname" value="<?php echo $lname; ?>"placeholder="Last Name"><br><br><br>
				
				<label for="email">Email ID&nbsp;&nbsp;&nbsp;</label>
				<input class="box" style="width:200px; height:30px; border-radius:5%;" type="email" name="email" id="email" value="<?php echo $email; ?>"placeholder="Email ID"><br><br><br>
				
				<label for="mob">Mobile No.&nbsp;&nbsp;&nbsp;</label>
				<input class="box" style="width:200px; height:30px; border-radius:5%;" type="text" name="mob" id="mob" value="<?php echo $mob; ?>"placeholder="Mobile No."><br><br><br>
				
				<label for="cname">Company Info&nbsp;&nbsp;&nbsp;</label>
				<input class="box" style="width:200px; height:30px; border-radius:5%;" type="text" name="cname" id="cname" value="<?php echo $cname; ?>"placeholder="Company Name"><br><br><br>
				
				<label foe="dname">Department&nbsp;&nbsp;&nbsp;</label>
				<input class="box" style="width:200px; height:30px; border-radius:5%;" type="text" name="dname" id="dname" value="<?php echo $dname; ?>"placeholder="Department"><br><br><br>
				
				<label for="tname">Title&nbsp;&nbsp;&nbsp;</label>
				<input class="box" style="width:200px; height:30px; border-radius:5%;" type="text" name="tname" id="tname" value="<?php echo $tname; ?>"placeholder="Title"><br><br><br>

				<label for="website">Website&nbsp;&nbsp;&nbsp;</label>
				<input class="box" style="width:200px; height:30px; border-radius:5%;" type="text" name="website" id="website" value="<?php echo $website; ?>"placeholder="Website"><br><br><br>

				<label for="Address">Address&nbsp;&nbsp;&nbsp;</label>
				<input class="box" style="width:200px; height:30px; border-radius:5%;" type="text" name="Address" id="Address" value="<?php echo $Address; ?>"placeholder="Address"><br><br><br>

				<input type="submit"> 
			</form>
		</div>
	</body>
</html>