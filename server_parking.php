<?php

// Initializing variables that we will use
  $dateFrom = "";
  $dateTo = "";
  $timeFrom = "";
  $timeTo = "";
  $parkingSpace = "";

  // Creatig an error array that will hold different type of error(s)
  $errors_parking = array();

  // Form submission validation
  if(isset($_POST['check_submit']))
  {
    if(empty($dateFrom))
    {
      array_push($errors_parking, "Starting date is required.");
    }

    if(empty($dateTo))
    {
      array_push($errors_parking, "Due date is required.");
    }

    if(empty($timeFrom))
    {
      array_push($errors_parking, "Starting time is required.");
    }

    if(empty($timeTo))
    {
      array_push($errors_parking, "Due time is required.");
    }

    if(empty($parkingSpace))
    {
      array_push($errors_parking, "Number of parking space is required.");
    }
  }

  // Connection to the database to retreive info of availabitlity

  // Connection to db
  $db = mysqli_connect('localhost', 'root', '', 'Proejct_4');

  // Query
  $sql;

 ?>
