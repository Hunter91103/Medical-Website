<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doctor";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['Fullname'];
    $email = $_POST['Email Address'];
    $phone_number = $_POST['Phone Number'];
    $preferred_date = $_POST['Preferred Date'];
    $preferred_time = $_POST['Preferred Time'];
    $reason_for_visit = $_POST['Reason for Visit'];

    if ($name != "" && $email != "" && $phone_number != "" && $preferred_date != "" && $preferred_time != "" && $reason_for_visit != "") {
        // Prepare an SQL statement
        //$stmt = $conn->prepare("INSERT INTO da (`Full Name`, `Email Address`, `Phone Number`, `Preferred Date`, `Preferred Time`, `Reason for Visit`) VALUES (?, ?, ?, ?, ?, ?)");
        //$stmt->bind_param("ssssss", $name, $email, $phone_number, $preferred_date, $preferred_time, $reason_for_visit);

	$sql="INSERT INTO da (`Full Name`, `Email Address`, `Phone Number`, `Preferred Date`, `Preferred Time`, `Reason for Visit`)  VALUES ('$name','$email','$phone_number','$preferred_date','$preferred_time','$reason_for_visit')";

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
	header('Location: http://localhost/Medical-Website-SwiftCare108-main');
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
