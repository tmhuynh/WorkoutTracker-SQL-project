<head>
  <meta charset="utf-8">
  <title>Workout Tracker</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,400" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="screen">
  <link rel="stylesheet" href="./style.css">
</head>

<header>
  <center><h1 class="site-title">Workout Tracker</h1></center>
</header>

<?php
	include 'connectvarsEECS.php';
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if(!$conn){
		die('Could not connect: ' . mysql_error());
	}

   $routine_id = mysqli_real_escape_string($conn, $_POST['routine_id']);
	$routine = mysqli_real_escape_string($conn, $_POST['routine']);
   $type = mysqli_real_escape_string($conn, $_POST['type']);
	$calories = mysqli_real_escape_string($conn, $_POST['calories']);
	$author = mysqli_real_escape_string($conn, $_POST['author']);

	$query = "INSERT INTO Routine (routine_id, routine, type, calories, author) VALUES ('$routine_id','$routine', '$type','$calories', '$author')";
	if(mysqli_query($conn, $query)){
		echo "recorded successfully";
	}else{
		echo "ERROR: couldn't preform $query. ". mysqli_error($conn);
	}

	mysqli_close($conn);
?>

<center><nav class="navbar">
   <ul class="navlist">
     <li class="navitem"><a href="./">Home</a></li>
     <li class="navitem"><a href="./mypage.php">My Page</a></li>
     <li class="navitem"><a href="./account.php">Account</a></li>
     <li class="navitem"><a href="./about.php">About</a></li>
  </ul>
</center>

<main class="home-page">
  <div class="title-container">
     <h2>Entered Successfully!</h2>
</div>
</main>
