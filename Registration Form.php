<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="css/register style.css">
</head>
<body>
	<div class="container">
		<h2>Resume Registration Form</h2>

		<form action="index.php" method="post">
			<label ><strong>Name:</strong></label><br><br>
			<input type="text" id="fname" name="fname" placeholder="Fullname" required><br><br>

			<label ><strong>Student Number:</strong></label><br><br>
			<input type="text" id="sn" name="sn" placeholder="Student Number" required><br><br>

			<label ><strong>Objectives:</strong></label><br><br>
			<input type="text" id="obj" name="obj" placeholder="Objectives"><br><br>

			<label ><strong>Educational Background:</strong></label><br><br>
			<input type="text" id="educ1" name="educ1" ><br><br>
			<input type="text" id="educ2" name="educ2" ><br><br>
			<input type="text" id="educ3" name="educ3" ><br><br>

			<label > <strong>Professional Skills:</strong></label><br><br>
			<input type="text" id="ps" name="ps1" ><br><br>
			<input type="text" id="ps" name="ps2" ><br><br>
			<input type="text" id="ps" name="ps3" ><br><br>

			<label ><strong>Trainings / Seminar:</strong></label><br><br>
			<input type="text" id="train" name="train1" ><br><br>
			<input type="text" id="train" name="train2" ><br><br>
			<input type="text" id="train" name="train3" ><br><br>

			<label ><strong>Personal Information:</strong></label><br><br>
				<label >Name:</label>
			<input type="text" id="pi" name="name" placeholder="Name"><br><br>
			<label >Email:</label>
			<input type="email" id="pi" name="email" placeholder="Email"><br><br>
			<label >Mobile No.:</label>
			<input type="number" id="pi" name="mobile" placeholder="Your no."><br><br>
			<label >Address:</label>
			<input type="text" id="pi" name="address" placeholder="Where do you live?"><br><br>
			<label >Birthday:</label>
			<input type="date" id="pi" name="bday" placeholder="When is your Birthday"><br><br>
			<label >Birth Place:</label>
			<input type="text" id="pi" name="bplace"><br><br>
			<button class="btn" name="reg">Register</button>
			<input  type="submit"  name="reg" value="Register">
		</form>
	</div>
</body>
</html>