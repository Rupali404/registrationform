<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>

</head>
<body>
	<div class="container">
		<form action="connection.php" method="POST">
			<h1>Registration Page</h1>
			<h4>Registration form</h4>
			<label>Username</label>
			<input type="username" name="username" placeholder="You Nmae"><br><br>
			<label>Email Id</label>
			<input type="email" name="email" placeholder="Your Email Id"><br><br>
			<label>Password</label>
			<input type="password" name="password" placeholder="Your Password"><br><br>
			<label>Confirm Password</label>
			<input type="conf_pass" name="conf_pass" placeholder="Confirm Password"><br><br>
			<h1>Personal Details</h1>
			<label>Frist Name</label>
			<input type="name" name="frist_name" placeholder="Frist Name">
			<label>Middle Name</label>
			<input type="name" name="middle_name" placeholder="Middle Name">
			<label>Last Name</label>
			<input type="name" name="last_name" placeholder="Last Name"><br><br>
			<label>Gender</label>
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked"; ?> value="female">Female
			<input type="radio" name="gender"<?php if(isset($gender) && $gender=="male") echo "checked"; ?>  value="male">Male  <br><br>
		

			<label>Brithday</label>
			<input type="date" name="bday"><br><br>
			<label>Country</label>
				<select>
					<option value="countryname" name="country">India</option>
					<option value="countryname" name="country">Frans</option>
				</select><br><br>
			<label>Address</label>
			<textarea type="name" name="address"></textarea><br><br>
			<label>Phone No.</label>
			<input type="phoneno" name="phoneno"><br><br>
			<label>Status</label>
			<input type="radio" name="status" <?php if (isset($status) && $status=="married") echo "checked"; ?> value="married">Married
			<input type="radio" name="status"<?php if(isset($status) && $status=="unmarried") echo "checked"; ?>  value="unmarried">Unmarried <br><br>
			<label>Hobby</label>
			<input type="hobby" name="hobby"><br><br>
			<label>Skill</label>
			<textarea name="skill"></textarea><br><br>
			<label>Single word you describe yourself</label>
			<input type="describe_self" name="describe_self"><br><br>
			<label>About Yourself</label>
			<textarea name="about_self"></textarea><br><br>
			<label>Whate you think you can do as a programmer</label>
			<textarea name="think"></textarea><br><br>
			<input type="checkbox" name="receive_news" >I want to receive news <br><br>
			<input type="checkbox" name="agree">I am agree term and condition <br><br>
			<input type="submit" name="submit">
		</form>
	</div>
</body>
</html>
