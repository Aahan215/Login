<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php include 'partials/_dbconnect.php'?>
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form action="/AahanLogin/partials/_handleLogin.php" method="post">
            <div class="user">
                <input type="text" required placeholder="Username" name = "loginEmail">
            </div>
            <div class="user">
                <input type="password" required placeholder="Password" name = "loginPass">
            </div>
            <div class="forgot">Forgot Password?</div>
            <input type="submit" value="Login">
            <div class="signup">Not A Member?<a href="Signup.php">SignUp</a>
            </div>
        </form>
    </div>
</body>
</html>
