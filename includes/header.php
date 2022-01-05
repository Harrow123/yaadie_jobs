<?php
//This includes the session file. File contains code starts/resumes a session
//By having it in the header file, it will be included on every page, allowing session capability to be used on every page across website
include_once 'includes/session.php'?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="css/site.css" />

    <title>attendance - <?php echo $title?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">IT Conference</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse container" id="navbarNav">
          <div class="navbar-nav mr-auto">
            
              <a class="btn btn-primary" aria-current="page" href="index.php">Home</a>            
              <a class="btn btn-primary" href="viewrecords.php" role="button">View Attendees</a>
              <a class="btn btn-primary" href="#" role="button">About Us</a>
              <a class="btn btn-primary" href="#" role="button">Link</a>
</div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="navbar-nav ml-auto">
            <?php 
              if(!isset($_SESSION['userid'])){

            ?>
              <a class="btn btn-primary" aria-current="page" href="login.php">Login</a>            
            <?php } else{ ?>
              <spa>Hello <?php echo $_SESSION['username'] ?>! </span>
              <a class="btn btn-primary" aria-current="page" href="logout.php">Logout</a>   
                <?php } ?>            
</div>
        </div>
      </div>
    </nav>
    <div class="container">
      
    
    <br/>