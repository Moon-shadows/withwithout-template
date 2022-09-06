<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Kontakta oss</h2>


    <form id="form" name="form" method="post" action="index.php">

        <label for="fname">Förnamn *</label><br>
        <input type="text" size="50" name="name" id="name" /> <br><br>
            
        <label for="lname">Efternamn *</label><br>
        <input type="text" size="50" name="name" id="name" /> <br><br>
            
        <label for="fname">E-postadress *</label><br>
        <input type="text" size="50" name="email" id="email" /> <br><br>

        <label for="Meddelande">Meddelande *</label><br>
        <textarea name="meddelande" id="meddelande" cols="47" rows="5"></textarea> <br><br>
            
        <input type="submit" name="skicka" id="skicka" value="Skicka meddelandet" />
        </form>
</body>
</html>

<?php
   
    if(empty($_POST['name']) && empty($_POST['email'])){
        # If the fields are empty, display a message to the user
        echo " <br/> Please fill in the fields";
    # Process the form data if the input fields are not empty
    }else{
        $name= $_POST['name'];
        $email= $_POST['email'];
        echo ('Your Name is:     '. $name. '<br/>');
        echo ('Your Email is:'   . $email. '<br/>');
    }
?>



