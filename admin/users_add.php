<?php
	include 'includes/session.php';

	//This calls the method post methos to add the user.
	if(isset($_POST['add'])){
		//Defining the values for the post method input saving values.
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];

		//Creating the conection between the database and the webpage,
		$conn = $pdo->open();

		//Using the SQL injection method to prepare the database for exprected values.
		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		//If the same email is resigtered in the databse, the message 'Email already taken' will be shown.
		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Email already taken';
		}
		//When checking for same email is negative, then the input values will be sote to the database.
		else{
			//then the pasow that was entered by the user will be hased so that no can crack their password.
			$password = password_hash($password, PASSWORD_DEFAULT);
			$filename = $_FILES['photo']['name'];
			$now = date('Y-m-d');
			if(!empty($filename)){
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
			}
			try{
				//adding the value to the database though mysql injection method.
				$stmt = $conn->prepare("INSERT INTO users (email, password, firstname, lastname, address, contact_info, photo, status, created_on) VALUES (:email, :password, :firstname, :lastname, :address, :contact, :photo, :status, :created_on)");
				$stmt->execute(['email'=>$email, 'password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname, 'address'=>$address, 'contact'=>$contact, 'photo'=>$filename, 'status'=>1, 'created_on'=>$now]);
				$_SESSION['success'] = 'User added successfully';

			}
			//If there are any problems faces then this will indicated on where the probe is located at.
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		//closing the database connection
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up user form first';
	}

	header('location: users.php');

?>