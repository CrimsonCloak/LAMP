
<?php

$Feedback = "";

if ($_SERVER["REQUEST_METHOD"] === "POST"){ 



$Feedback .=  '<h4>You submitted a form!!</h4> <br>';



if(!empty($_POST["Name"]) && !empty($_POST["Email"]))
{
    function checkEmail($Email){
        $regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        return preg_match($regex, $Email);
        }
    $Name = $_POST["Name"];
    $Email= $_POST["Email"];
    $UpdatesText = "not";
    if (isset($_POST["Updates"])){
        $UpdatesText = "";
    }
  

    if(checkEmail($Email))
    {
        $Feedback .=  "<h4>Your name is: $Name</h4>";
        $Feedback .=  "<h4>Your email is: $Email</h4>";
        $Feedback .=  "<h4>You have decided to $UpdatesText receive updates and news related to your PHP skills!</h4>";
    }
    else $Feedback .=  "<h4>Your email-address is not valid!</h4>";
}
else $Feedback .=  "<h4>Some of your information wasn't given! </h4>";
echo  
"<div id='Feedback'>$Feedback </div>"; // Feedback ID used to style using CSS
}




// $Feedback .=  'Your name is: $_POST["Name"]';
// $Feedback .=  'Your email address is: $_POST["Email"]';
// $Feedback .=  "You have decided *NOT* to receive updates."



?>

