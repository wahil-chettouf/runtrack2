<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="user_name">
        <input type="password" name="password">
        <input type="submit" value='submit'>
    </form>
    <?php
        if(isset($_POST["user_name"], $_POST["password"])) {
            $username = $_POST["user_name"];
            $password = $_POST["password"];
            if($username == "John" && $password == "Rambo") {
                echo "C’est pas ma guerre";
            } else {
                echo "Votre pire cauchemar";
            }
        }
    ?>
</body>
</html>