<?php
include "dbh.inc.php";

//Prepare the SQL Statement to log in, bind parameters, execute, and get results.
$stmt = $conn->prepare("SELECT * FROM `users` WHERE username = ?");
$stmt ->bind_param("s", $_POST['username']);
$stmt ->execute();
$result = $stmt->get_result();
// If the number of results stored in result is greater than 0
// Take the result and store it into an associative array so that we may perform actions on the data within.
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        //Check the password to make sure the hashed version matches what the user input.
        $verify_password = password_verify($_POST['password'], $row['password']);
        // If the passwords do not match send back to the login page.
        if($verify_password != TRUE){
            header("Location: /login?invalid_password");
        }
        else {
        // System will allow login if no rows are updated.
        header("Location: /sessions/home");
        }
    }
}  
//If the number of results is 0 then send back to login page. 
else {
    header("Location: /login?invalid_username");
}