<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $email_repeated = $_POST["email_repeated"];
    $country = $_POST["country"];
    $language = $_POST["language"];
    $password = $_POST["password"];
    $password_repeated = $_POST["password_repeated"];

    //Password rules
    $uppercase = preg_match("@[A-Z]@", $password);
    $lowercase = preg_match("@[a-z]@", $password);
    $number    = preg_match("@[0-9]@", $password);
    $specialChars = preg_match("@[^\w]@", $password);

    //if validation is successful
    if(
    (!empty($full_name) && is_string($full_name)) && 
    (!empty($email) && is_string($email)) && 
    (!empty($email_repeated) && is_string($email_repeated)) && 
    (!empty($country) && is_string($country)) && 
    (!empty($language) && is_string($language)) && 
    (!empty($password) && is_string($password)) && 
    (!empty($password_repeated) && is_string($password_repeated) && $password === $password_repeated) &&
    ($uppercase  &&  $lowercase  &&  $number  &&  $specialChars  &&  strlen($password) > 10)

    ){
        echo "Validation successful."; 

    }
    //Check if not empty
    if(empty($full_name)){
    echo "Please fill in your full name\n";
    }

    if(empty($email)){
        echo "Please fill in you email\n";
    }

    if(empty($email_repeated)){
        echo "Please repeat your email\n";
    }

    if(empty($country)){
        echo "Please enter a country\n";
    }

    if(empty($language)){
        echo "Please enter a language\n";
    }

    if(empty($password)){
        echo "Please enter a password\n";
    }

    if(empty($password_repeated)){
        echo "Please repeat your password\n";
    }

    //Checking for valid password
    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 10) {
        echo "Password should be at least 10 characters in length and should include at least one upper case letter, one number, and one special character.\n";
    }

    //Check if password matches
    if ($password != $password_repeated) {
        echo "Password do not match\n";
    }
}
?>
