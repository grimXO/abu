<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Login Page</title>
</head>

<body>

    <div class="login-card-header">
        <h1>Sign In</h1>
        <div>Please login to use the platform</div>
    </div>
    <div>
        <form action="login_process.php" method="post">
            <div>
                <span>EMail</span>
                <input type="email" id="email" name="email" placeholder="Enter Email" autofocus required>
            </div>
            <div>
                <span>Password</span>
                <input type="password" placeholder="Enter Password" id="password" name="password" required>
            </div>
            <input type="submit" name="login" value="Login">
        </form>
    </div>

</body>

</html>