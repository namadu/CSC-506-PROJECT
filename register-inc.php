<?php 
	if (isset($_POST['save'])){
		//we add database connection
		require 'datebase.php';
		
		        $firstname = $_POST['firstname'];  
				$surname = $_POST['surname'];
				$Email   = $_POST['inputEmail4'];
                $Pass    = $_POST['inputPassword4'];				
				$Address=$_POST['inputAddress'];
		
		if (empty($firstname) || empty$surname) || empty($Email ) || empty( $Pass ) || empty($Address)) { 
		header("locaton: ");
		exit();
		}elseif(!pre_match("/^[a-zA-Z0-9]*/", $Email)){
			header("locaton: "):
			exit();
		}elseif($Pass !== $Pass){                  
			header("location: ");
			exit();
		}else{
			$sql ="SELECT email FROM record WHERE email = ?";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)){
				header("locaton: ");
				exit();
			}else {
				mysqli_stmt_bind_param($stmt, "sssss",  $firstname, $surname,$Email,$Pass,$Address);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$rowCount = mysqli_stmt_num_rows($stmt);
				
				if ($rowCount > 0) {
					header("location : ");
					exit();
				}else {
					$sql = "INSERT INTO record(firstname,surname,email,password,address) VALUES (?,?,?,?,?)";
					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)){
						header("locaton:index.php");
						exit();
					}else{
						$hashedpass =  password_hash($password, PASSWORD_DEFAULT);
						
						mysqli_stmt_bind_param($stmt, "sssss", $firstname, $surname,$Email,$Pass,$Address);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_store_result($stmt);
							header("location: ");
							exit();
					}
						
				}
			}
			
		}
		
		
	}	
			
?>

