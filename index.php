<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="styles.php"> -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>



<form action="#" method="post">
<?php
 $Name = $email = $message = "";
?>
<label for="Name">Name:</label> <br>
<input type="text" id="Name" name="Name" required>
<br>

<label for="Email">Email address:</label> <br>
<input type="text" name="Email" id="Email" required> <br>

<label for="Updates">I would like to receive updates and news related to my PHP skills.</label> <br>
<input type="checkbox" name="Updates" id="Updates"><br>

<input type="submit" value="Send">
</form>

<?php
require 'contact_form.php';
?>


</div>
</body>
</html>