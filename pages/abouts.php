<!DOCTYPE html>
<html lang="en">
<head>
  <title>King-Cobra</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  
<!--Title icon-->
<link rel="shortcut icon" type="image" href="https://ya-webdesign.com/images250_/resident-evil-snake-png-5.png">

<body class="layout-centered bg-img" style="background-image: url(https://images.unsplash.com/photo-1495195129352-aeb325a55b65?ixlib=rb-1.2.1&auto=format&fit=crop&w=1510&q=80);">

<nav class="navbar navbar-expand-sm bg-warning navbar-light">
  <!-- Brand -->
  <a class="navbar-brand" href="homepage.html"><img src="https://ya-webdesign.com/images250_/resident-evil-snake-png-5.png"width="50" height="42"></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="homepage.html"><b>Home</b></a>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <b>Years</b>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="1year.html">1st Year</a>
        <a class="dropdown-item" href="2year.html">2nd Year</a>
        <a class="dropdown-item" href="3year.html">3rd Year</a>
        <a class="dropdown-item" href="4year.html">4th Year</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contactus.html"><b>Contact</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.html"><b>About</b></a>
    </li>
  </ul>
</nav>
  
<div class="container">

  <!-- Section: Team -->
  <section class="team-section my-5">
    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Our amazing group</h2>
    <!-- Section description -->
    <h5 class="grey-text text-center w-responsive mx-auto mb-5">We are a very expensive group, we break a lot of rules.<br>It's unheard of to combine opera with a rock theme, my dear.</h5><br><br>

    <!-- Grid row-->
    <div class="row text-center text-md-left">

      <!-- Grid column -->
      <div class="col-xl-6 col-lg-12 mb-5 d-md-flex justify-content-between">
        <div class="avatar mb-md-0 mb-4 mx-4">
          <img src="../img/team/mr.jpg" class="rounded z-depth-1" alt="Sample avatar">
        </div>
        <div class="mx-4">
          <h4 class="font-weight-bold mb-3s">Masum Raza</h4>
          <h6 class="font-weight-bold grey-text mb-3">Director and Founder</h6>
          <p class="grey-text"><i>He is Founder of King Cobra. He has 4 years experience to searching solution of assignment and provide to the group.</i></p>
          <!-- Facebook-->
          <a href="https://www.facebook.com/abhijeet.singh.54943" class="p-2 fa-lg fb-ic">
            <i class="fa fa-facebook-f"> </i>
          </a>
          <!-- Twitter -->
          <a href="https://twitter.com" class="p-2 fa-lg tw-ic">
            <i class="fa fa-twitter"> </i>
          </a>
          <!--Instagram -->
          <a href="https://www.instagram.com/might_be_abhijeet/" class="p-2 fa-lg ins-ic">
            <i class="fa fa-instagram" style="color:red"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-xl-6 col-lg-12 mb-5 d-md-flex justify-content-between">
        <div class="avatar mb-md-0 mb-4 mx-4">
          <img src="../img/team/cd.jpeg" class="rounded z-depth-1" alt="Sample avatar">
        </div>
        <div class="mx-4">
          <h4 class="font-weight-bold mb-3">Sudeep Biswas</h4>
          <h6 class="font-weight-bold grey-text mb-3">Senior Dopa</h6>
          <p class="grey-text"><i>He has 4 years of experience in searching solution and uploading.</i></p>
          <!-- Facebook-->
          <a href="https://www.facebook.com/sudeep.biswas.9083" class="p-2 fa-lg fb-ic">
            <i class="fa fa-facebook-f"> </i>
          </a>
          <!-- Twitter -->
          <a href="https://twitter.com" class="p-2 fa-lg tw-ic">
            <i class="fa fa-twitter"> </i>
          </a>
          <!--Instagram -->
          <a href="https://www.instagram.com/biswas_ghaat/" class="p-2 fa-lg ins-ic">
            <i class="fa fa-instagram" style="color:red"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

    <!-- Grid row-->
    <div class="row text-center text-md-left">

      <!-- Grid column -->
      <div class="col-xl-6 col-lg-12 mb-xl-0 mb-5 d-md-flex justify-content-between">
        <div class="avatar mb-md-0 mb-4 mx-4">
          <img src="../img/team/pradeep.jpeg" class="rounded z-depth-1" alt="Sample avatar">
        </div>
        <div class="mx-4">
          <h4 class="To integrate the PHP code into the HTML code, you need to separate the PHP code from the HTML code by using the `<?php ?>` tags. Here's the modified code:

```html
<!-- ... HTML code ... -->

<!-- Grid row -->
<div class="row text-center text-md-left">
  <?php
  $servername = "localhost:3306";
  $username = "root";
  $password = "Root@123";
  $dbname = "mypersonaldata";

  // Create a connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check the connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Define the SQL query
  $sql = "SELECT * FROM profiles";

  // Execute the query
  $result = $conn->query($sql);

  // Check if there are any results
  if ($result->num_rows > 0) {
      // Output data for each row
      while ($row = $result->fetch_assoc()) {
          echo '<!-- Grid column -->';
          echo '<div class="col-xl-6 col-lg-12 mb-xl-0 mb-5 d-md-flex justify-content-between">';
          echo '<div class="avatar mb-md-0 mb-4 mx-4">';
          echo '<img src="../img/team/' . $row['image'] . '" class="rounded z-depth-1" alt="Sample avatar">';
          echo '</div>';
          echo '<div class="mx-4">';
          echo '<h4 class="font-weight-bold mb-3">' . $row['name'] . '</h4>';
          echo '<h6 class="font-weight-bold grey-text mb-3">' . $row['designation'] . '</h6>';
          echo '<p class="grey-text"><i>' . $row['description'] . '</i></p>';
          echo '<!-- Facebook -->';
          echo '<a href="' . $row['facebook'] . '" class="p-2 fa-lg fb-ic">';
          echo '<i class="fa fa-facebook-f"> </i>';
          echo '</a>';
          echo '<!-- Twitter -->';
          echo '<a href="' . $row['twitter'] . '" class="p-2 fa-lg tw-ic">';
          echo '<i class="fa fa-twitter"> </i>';
          echo '</a>';
          echo '<!-- Instagram -->';
          echo '<a href="' . $row['instagram'] . '" class="p-2 fa-lg ins-ic" style="color:red">';
          echo '<i class="fa fa-instagram"> </i>';
          echo '</a>';
          echo '</div>';
          echo '</div>';
      }
  } else {
      echo '<p>No profiles found.</p>';
  }

  // Close the connection
  $conn->close();
  ?>
</div>
<!-- Grid row -->

<!-- ... Continue with the remaining HTML code ... -->
