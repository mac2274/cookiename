<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $user_name = $_POST['benutzername']; //hier wird name="benutzername" gebraucht!
    setcookie('username', $user_name, time()+3600);
#echo $user_name;
};

if (isset($_COOKIE['username'])){
    echo "<p>Willkommen rurück, <strong>" . htmlspecialchars($_COOKIE['username']). "</strong>!</p>";
};

#setcookie("username","",-1);

//var_dump($_COOKIE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Test</title>
</head>
<body>
 


<form method="post" action="cookie_name.php">
    <label for="username">Name</label>
    <input type="text" name="benutzername" id="username">
    <input type="submit" value="Absenden">
</form>
</body>
</html>