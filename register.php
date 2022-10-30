<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <style>
    * {
        text-align: center;
        font-size: 30pt;
    }
    </style>
</head>

<body>
    <form action="insert.php" method="POST">
        username:<input type="text" name="username" />
        <br><br>
        email:<input type="email" name="email" />
        <br><br>
        password:<input type="password" name="password" />
        <br><br>
        <button name="button">signup</button>
    </form>
    <br>
    <a href="login.php">already have account</a>
</body>

</html>