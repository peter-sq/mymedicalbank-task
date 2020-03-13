<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href ="form.css"> 
    <title>Document</title>
</head>
<body>

<form class="peter" action="process.php" method="post" >
<div class = "firstname">
<label for="firstname">First name:</label><br>

<input type="text" name="firstname" id="firstname" placeholder = "Enter first name"></div><br>
<div class = "lastname">
<label for="lastname">Last name:</label><br>
<input type="text" name="lastname" id="lastname" placeholder = "Enter last name">
</div><br>
<div class = "email">
<label for="email">User email:</label><br>
<input type="email" name="email" id="subject" placeholder = "Enter your email">
</div><br>
<div class = "message">
<label for="message">Message  :</label><br>
<input type="text" name="message" id="message" placeholder = "Enter text here">
</div><br>
<input type = "submit" names ="send" id = 'send'>
</form>
    
</body>
</html>