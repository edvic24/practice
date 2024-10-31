<?php 
if (isset($_POST['reg'])){
	$fname = $_POST['fname'];
	$sn = $_POST['sn'];
	$obj = $_POST['obj'];
	$educ1 = $_POST['educ1'];
	$educ2 = $_POST['educ2'];
	$educ3 = $_POST['educ3'];
	$ps1 = $_POST['ps1'];
	$ps2 = $_POST['ps2'];
	$ps3 = $_POST['ps3'];
	$train1 = $_POST['train1'];
	$train2 = $_POST['train2'];
	$train3 = $_POST['train3'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$bday = $_POST['bday'];
	$bplace = $_POST['bplace'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>
	<link rel="stylesheet" href="css/indexstyle.css">
</head>
<body>
	<nav class="nav-index">
		<a href="#educ" class="link">Educational Background</a>
        <a href="#ps" class="link">Professional Skills</a>
        <a href="#train" class="link">Trainings / Seminar</a>
        <a href="#pi" class="link">Personal Information:</a>
        
	</nav>

<div class="container">
	<h1>Your Information</h1>
	<h2><?php echo $fname; ?> <?php echo $sn; ?></h2>
	<label><strong>objectives:</strong><?php echo $obj; ?></label><br><br>

	<section class="educ">
		<div>
			<label><strong>Educational Background:</strong></label><br><br>
			<?php echo $educ1; ?><br><br>
			<?php echo $educ2; ?><br><br>
			<?php echo $educ3; ?><br><br>
		</div>
	</section>

	<section class="ps">
		<div>
			<label><strong>Professional Skills:</strong></label><br><br>
			<?php echo $ps1; ?><br><br>
			<?php echo $ps1; ?><br><br>
			<?php echo $ps1; ?><br><br>
		</div>
	</section>

	<section class="train">
		<div>
			<label><strong>Trainings / Seminar:</strong></label><br><br>
			<?php echo $train1; ?><br><br>
			<?php echo $train2; ?><br><br>
			<?php echo $train3; ?><br><br>
		<div>
	</section>

	<section class="pi">
		<div>
			<label><strong>Personal Information:</strong></label><br><br>
			<?php echo $name; ?><br><br>
			<?php echo $email; ?><br><br>
			<?php echo $mobile; ?><br><br>
			<?php echo $address; ?><br><br>
			<?php echo $bday; ?><br><br>
			<?php echo $bplace; ?><br><br>
		</div>
	</section>
</div>
</body>
</html>