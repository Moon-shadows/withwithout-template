<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<html>
  <head><title>Uppgift 2b</title>
    <style>.error {color: #FF0000;}</style>
  </head>
  <body>
      <h2>Contact Us</h2>
      <p><span class="error">* required field</span></p>
      <form id="form" name="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

          <label for="Name">Name:</label><br>
          <input type="text" size="50" name="name" id="name" value="<?php echo $name;?>">
          <span class="error">* <?php echo $nameErr;?></span><br><br>

          <label for="E-post">E-mail:</label><br>
          <input type="text" size="50" name="email" id="email" value="<?php echo $email;?>">
          <span class="error">* <?php echo $emailErr;?></span><br><br>
          
          <label for="Comment">Comment:</label><br>
          <textarea name="comment" rows="5" cols="47" ><?php echo $comment;?></textarea><br><br>
          <input type="submit" name="skicka" value="Submit">
      </form>
  </body>
</html>




