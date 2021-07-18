<?php
	require_once 'connect-inc.php';

	
		           if  (isset($_POST['submit'])){
                                $firstname = $_POST['firstname'];  
				$surname = $_POST['surname'];
				$Email   = $_POST['inputEmail4'];
                                $Pass    = $_POST['inputPassword4'];				
				$Address=$_POST['inputAddress'];

			
			if ($conn) {
				
				$stmt = $conn->prepare("insert into record(firstname,surname,email,password,address)
					values(?, ?, ?, ?, ?)");
				//
				$stmt->bind_param("sssss", $firstname, $surname,$Email,$Pass,$Address);
				$stmt->execute();
				$stmt->close();
				$conn->close();
				exit();
			}
		}
		
	
?>
