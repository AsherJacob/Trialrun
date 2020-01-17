<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <div class="container">
            <div class="header">
                <h2> Register </h2>

            </div>

            <form action="register.php" method="POST">

                <div>
                    <label for="username">Username</label>
                    <input type="text"  name="username" required>
                </div>

                <div>
                    <label for="email">Email</label>
                    <input type="text"  name="email" required>
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password"  name="password1" required>
                </div>

                <div>
                    <label for="password">Re-enter Password</label>
                    <input type="password"  name="password2" required>
                </div>
               
                <button type="submit" name="reg_btn">Submit</button>

                <p>Already a user? <a href="login.php"><b>Login</b></a></p>


            </form>

    </div>
</body>
</html>