<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicaldb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($name != "" && $email != "" && $password !="") {
        // Prepare an SQL statement
        //$stmt = $conn->prepare("INSERT INTO da (`name`, `email`, `password`) VALUES (?, ?, ?, ?, ?, ?)");
        //$stmt->bind_param("ssssss", $name, $email, $password);

	$sql="INSERT INTO register (`name`, `email`, `password`)  VALUES ('$name','$email','$password')";

        //if ($stmt->execute()) {
            // Successful insertion
            //header('Location: http://localhost/Medical-Website-SwiftCare108-main');
//echo "hi";
  //          exit(); // Ensure no further code is executed after redirection
    //    } else {
            // Insertion failed
      //      echo "Insert failed: " . $stmt->error;
        //}

if(mysqli_query($conn,"$sql")){
	header('Location:http://localhost/Medical-Website-SwiftCare108-main/apoint.php');
echo "hi";
}else{
echo "Failed";
}

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "All fields are required.";
    }
}

// Close the database connection
$conn->close();

?>
