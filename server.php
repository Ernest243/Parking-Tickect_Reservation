<?php
// Iniatilizing variable we will use to collect data from the form
  $firstName = "";
  $lastName = "";
  $emailAddress = "";
  $passwordOne = "";
  $passwordTwo = "";
  $phoneNumber = "";

  //Array "errors" will hold different type of error from the validation form
  $errors = array();

  // Establish connection to the database
  $db = mysqli_connect('localhost', 'root', '', 'Project_4');

  // Verification after the submit button has been clicked
  if(isset($_POST['submit_user']))
  {
    $firstName = mysqli_real_escape_string($db, $_POST['first_name']);
    $lastName = mysqli_real_escape_string($db, $_POST['last_name']);
    $emailAddress = mysqli_real_escape_string($db, $_POST['email_address']);
    $passwordOne = mysqli_real_escape_string($db, $_POST['password_1']);
    $passwordTwo = mysqli_real_escape_string($db, $_POST['password_2']);
    $phoneNumber = mysqli_real_escape_string($db, $_POST['phone_number']);

    // Verification for each field. Has to be filled correctly
    if(empty($firstName))
    {
      // Error: Require first name
      array_push($errors, "First name is required.");
    }

    if(empty($lastName))
    {
      //Error: Require last name
      array_push($errors, "Last name is required.");
    }

    if(empty($emailAddress))
    {
      //Error: Require email address
      array_push($errors, "Email address is required.");
    }

    if(empty($passwordOne))
    {
      //Error: Require password
      array_push($errors, "Password is required.");
    }

    if(empty($passwordTwo))
    {
      //Error: Require password confirmation
      array_push($errors, "Password confirmation is required.");
    }

    if(empty($phoneNumber))
    {
      //Error: Require phone number
      array_push($errors, "Phone number is required.");
    }

    // Check if both password entered match
    if($passwordOne != $passwordTwo)
    {
      array_push($errors, "The two password do not match");
    }

    // If no error(s), proceed to save the user to database
    if(count($errors) == 0)
    {
      // Hash the password before saving it for security purposes
      $passwordOne = md5($passwordOne);
      // Query to insert the new user into the database
      $sql = "INSERT INTO customer(fname, lname, email, password, pnumber)
              VALUES ('$firstName', '$lastName', '$emailAddress', '$passwordOne', '$phoneNumber')";

      mysqli_query($db, $sql);
    }

    // Close the connection
    mysqli_close($db);
  }
 ?>
