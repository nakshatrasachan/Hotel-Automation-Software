<!DOCTYPE html>
<html>

<head>
	<title>Admin Found</title>
</head>


<style>
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		font-size: 30px;
		border: 4px solid #009999;
		padding-top: 30px;
		padding-bottom: 30px;
		border-radius: 20px;
	}

	body {
		background-color: #d9d9d9;
		background-position: right top;
		background-attachment: fixed;
		background-size: cover;
	}
</style>

<body>





	<div style="background-color: #f2f2f2;">
		<br><br>Frequent User added.
		<br><br><br><br>Your token number is :
		<?php
		session_start();
		echo $_SESSION["token"];
		?>
		<br><br>


		<a href="user_payment.php">Redirect to Payment Page</a>
	</div>




</body>

</html>