<?php
// This will use cookies to record the details when accesing the website.
	include 'includes/session.php';

	if(isset($_SESSION['user'])){
		// This wiil open up the connection to the database
		$conn = $pdo->open();

		// An sql injection satement to prepare the database and letting it know on the expected values that the website needs.
		$stmt = $conn->prepare("SELECT * FROM cart LEFT JOIN products on products.id=cart.product_id WHERE user_id=:user_id");
		$stmt->execute(['user_id'=>$user['id']]);

		$total = 0;
		// Calculation of the total and subtotal
		foreach($stmt as $row){
			$subtotal = $row['price'] * $row['quantity'];
			$total += $subtotal;
		}

		// Closing the connection between database and the website.
		$pdo->close();

		echo json_encode($total);
	}
?>