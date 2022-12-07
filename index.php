<?php include'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>

    <div class="container">
        <form action="login.php" method="post">
            <h2>LOGIN<h2>
        
                
                <input type ="email" name="email" placeholder="johndoe@mail.com"><br>
                
                <input type ="password" name="password" placeholder="Password"><br>

            <button id="btn" type="submit"> Login </button>
        </form>
    </div>
    <footer>Copyright @ 2022 Dolphin CRM</footer>
</body>
</html>