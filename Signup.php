<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="signup.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Signup Page</title>
</head>
<body>
<?php
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true")
{
  echo '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
  <strong>Yay!</strong> You have successfully created an account! You can now <a href = "index.php">login</a>.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else if(isset($_GET['error']))
{
    echo '<div class="alert alert-danger my-0 alert-dismissible fade show" role="alert">
    <strong>Oops..</strong>'.$_GET['error'].'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>
    <h1>
        Sign up
    </h1>
    <div class="form-container">
        <form action="/AahanLogin/partials/_handleSignup.php" method = "post">
            <div class="innerform">
                <div class="username" style="margin-bottom:1rem;">
                <label for="username">Enter Username:</label>
                <input type="text" name="username" id="username" placeholder="Username">
                </div>

                <div class="email" style="margin-bottom:1rem;">
                <label for="email">Enter Email:</label>
                <input type="text" name="email" id="email" placeholder="xyz@gmail.com">
                </div>

                

                <div class="age" style="margin-bottom:1rem;">
                    <h4>Date Of Birth</h4>
                    <input type="text" name="dob" id="age" placeholder="dd/mm/yy">
                </div>

                <div class="gender" style="margin-bottom:1rem;">
                    <h4>Gender</h4>
                    <label for="gender">Male</label>
                    <input type="radio" name="gender" id="gender" value="male">
                    <label for="gender">femle</label>
                    <input type="radio" name="gender" id="gender" value="female">
                    <label for="gender">Other</label>
                    <input type="radio" name="gender" id="gender" value="other">
                </div>

                <div class="password" style="margin-bottom:1rem;">
                   <h4>Passwoord</h4>
                    <input type="password" name="password" id="password">
                </div>
            
                <div class="confirmpassword" style="margin-bottom:1rem;">
                    <h4>Confirm Passwoord</h4>
                     <input type="confirmpassword" name="cpassword" id="confirmpassword">
                 </div>
                 <button>Submit</button>
            
            </div>
        </form>
    </div>
</body>
</html>