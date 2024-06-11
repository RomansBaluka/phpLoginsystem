<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="index-login">
         <div class="wrapper"> 
            <div class="index-login-signup">
                <h4> SIGN UP </h4>
                <p> Don't have an account yet? Sign up here! </P>
                <form action="includes/signup.php" method="post">   
                    <input type="username" placeholder="Enter username" name="uid">
                    <input type="password" placeholder="Enter Password" name="psw">
                    <input type="password" placeholder="Repeat Password" name="pswrepeat">
                    <input type="email" placeholder="Enter Email" name="email">
                    <br>
                    <button type="submit" name="submit">Register</button>
                </form>
            </div> 
        <div class="index-login-login">
            <h4>LOGIN</h4>
            <p>Don't have an account yet? Sign up here!</p>
            <form action="includes/login.php" method="post">   
                <input type="username" placeholder="Enter username" name="uid">
                <input type="password" placeholder="Enter Password" name="psw">
                <br>
                <button type="submit" name="submit">LOGIN</button>
            </form>
            </div>
        </div> 
    </section>
</body>
</html>