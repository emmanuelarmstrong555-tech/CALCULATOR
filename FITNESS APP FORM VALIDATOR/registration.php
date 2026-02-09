<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fitness Membership Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css-dump.css">
   <?php

  # Initializing Entries

  $firstnameError = '';
  $lastnameError = '';

  # Value For Firstname

  $firstname = '';



  # Validating Entries

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    # Capturing Entries

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    # Validating FirstName

    if (empty($firstname)) {
      $firstnameError = 'First Name Is Empty';
    } else if (empty($lastname)) {
      $lastnameError = 'Last Name Is Empty';
    }
  }
  ?>
</head>
<body>

  <div class="container">

    <!-- LEFT PANEL (IMAGE SIDE) -->
    <div class="left-panel">
      <div>
        <h1>Elevate Your Fitness</h1>
        <p>
          Join our professional fitness program and take control of your health
          with structured training and expert guidance.
        </p>
      </div>
    </div>

    <!-- RIGHT PANEL (FORM SIDE) -->
    <div class="right-panel">

      <div class="form-card">

        <h2>Membership Registration</h2>
        <span>Please fill in your details to get started</span>

        <form method="POST" action="">

          <!-- PERSONAL INFORMATION -->
          <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" placeholder="John Doe">
          </div>

          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="example@email.com">
          </div>

          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" placeholder="08012345678">
          </div>

          <div class="form-group">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" placeholder="18">
          </div>

          <!-- FITNESS INFORMATION -->
          <div class="form-group">
            <label for="height">Height (cm)</label>
            <input type="text" id="height" name="height" placeholder="170">
          </div>

          <div class="form-group">
            <label for="weight">Weight (kg)</label>
            <input type="text" id="weight" name="weight" placeholder="65">
          </div>

          <div class="form-group">
            <label for="goal">Fitness Goal</label>
            <select id="goal" name="goal">
              <option value="">-- Select goal --</option>
              <option value="lose_weight">Lose Weight</option>
              <option value="gain_muscle">Gain Muscle</option>
              <option value="stay_fit">Stay Fit</option>
            </select>
          </div>

          <!-- ACCOUNT SETUP -->
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
          </div>

          <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password">
          </div>

          <button type="submit">Create Account</button>

        </form>

      </div>
    </div>

  </div>

</body>
</html>
