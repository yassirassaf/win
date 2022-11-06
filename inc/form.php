<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$errors =[ 'firstNameError'=>'' 
,'lastNameError'=>'' 
,'emailError'=>'' ];

if (isset($_POST['submit'])) {

   
    



 
//check  first name 
if(empty($firstName)){
    $errors['firstNameError']='Please insert your  first name';
}
//check last name 
if(empty($lastName)){
    $errors['lastNameError']='Please insert your  last name';
}

//check email 
if(empty($email)){
    $errors['emailError']='Please insert your  email';
}
if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $errors['emailError']='Please insert your  Correct email';
}

// check no errors 
if(!array_filter($errors)){

 $firstName =  mysqli_real_escape_string($conn, $_POST['firstName']);
$lastName =   mysqli_real_escape_string($conn,$_POST['lastName'] ); 
$email =      mysqli_real_escape_string($conn,$_POST['email'] ); 

$sql = "INSERT INTO users(firstName, lastName, email)
         VALUES ('$firstName','$lastName','$email')";

if(mysqli_query($conn, $sql)){
    header('Location: ' .   $_SERVER['PHP_SELF']);
 }else{
     echo 'Error:' . mysqli_error($conn);
 }

}

}



