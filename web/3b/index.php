<html>
    <head> <title>Uppgift 3b</title></head>

    <?php
    if(isset($_GET['color']))
    echo '<body style= "background-color:'. $_GET['color'] . '">';

    else{
    echo "<body>";
    }
    ?>

    <body>
        <h1>Vilken är din favorit färg?</h1>
        <form id="form" name="get" method="get" action="index.php">

            <label for="backgroundColor">Ange din favoritfärg här:</label><br>
            <input type="text" size="50" name="color"  /> <br><br>
            
            <input type="submit" name="skicka"  value="Skicka svar" />
            </form>
    </body>
</html>







