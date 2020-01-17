<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>
</head>
<body>
    <div class="container">
            <div class="header">
                <h2> Login </h2>

            </div>

            <form action="login.php" method="POST">

                <div>
                    <label for="username">Username</label>
                    <input type="text"  name="Lusername" required>
                </div>

                

                <div>
                    <label for="password">Password</label>
                    <input type="password"  name="Lpassword1" required>
                </div>

                
               
                <button type="submit" name="login_btn">Submit</button>

                <p>Not a user? <a href="register.php"><b>Register</b></a></p>


            </form>

    </div>
</body>
</html>