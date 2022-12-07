
<?php session_start();
	

	if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])){

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
        $role = $_POST['role'];
		
		$conn = mysqli_connect('localhost', 'root', '', 'dolphin_crm');
		if($conn === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}

		$sql = "INSERT INTO userstable (firstname, lastname, password, email, role) VALUES
            ('$firstname', '$lastname', '$password', '$email', '$role')";

		if(mysqli_query($conn, $sql)){
			echo "New User added Successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
	
	mysqli_close($conn);
	}

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Dolphin CRM</title>
		<conn rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  	<conn rel="stylesheet" href="dashboard.css">
		</head>
	<body>
		<?php include 'header.php';?>
		<div class="container">
			<div class="back">
				<div class="buttons">
					<div><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></div>
					<div><a href="newcontact.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>New Contact</a></div>
					<div><a href="users.php"><i class="fa fa-users" aria-hidden="true"></i>Users</a></div>
					<hr>
					<div><a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></div>
				</div>
			</div>	
			<div class="background">
				<div class="records">
					<h1>New User</h1>
					<div class="record2">
						
							<form method = "post" action = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
							<div class="table">
								<div class="cell">
									<label for="firstname">First Name</label>
									<input type="text" placeholder= "Jack" name="firstname" id="firstname" required/>
								</div>
								<div class="cell">
									<label for="lastname">Last Name</label>
									<input type="text" placeholder= "Doe" name="lastname" id="lastname" required/>
								</div>
							</div>
							<div class="table">
								<div class="cell">
									<label for="email">Email</label>
									<input type="email" placeholder= "jackdoe@gmail.com" name="email" id="email" required/>
								</div>
								<div class="cell">
									<label>Password</label>
									<input type="text" name="password" id="password" required/>
								</div>
							</div>
                            <div class="table">
								<div class="cell">
								<label for="role"> Role</label><br>
								<select id="role" name="role">
									<option value="Admin">Admin</option>
									<option value="Member">Member</option>
								</select>
							</div><br>
							</div>
							<div class="save-button">
								<button type="submit" id="save">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
