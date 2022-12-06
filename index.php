<?php include'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <h2>LOGIN<h2>
            
            <label> Email </label>
            <input type ="email" name="email" placeholder="johndoe@mail.com"><br>
            <label>Password</label>
            <input type ="password" name="password" placeholder="Password"><br>

            <button type="submit"> Login </button>
        </form>
    </div>

</body>
</html>