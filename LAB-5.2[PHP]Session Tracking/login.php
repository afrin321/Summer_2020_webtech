<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
        <table>
        <tr>
            <td><img src="logo.png"></td>
            <td size="50%"></td>
            <td align="right"><a href="home.php">Home |</a>  <a href="login.html"> Login |</a>  <a href="reg.php"> Registration </a>
</td>
        </tr>
    </table>
</head>
<body>
    <fieldset>
    <legend><b>LOGIN</b></legend>
    <form method="post" action="log_check.php">
        <table>
            <tr>
                <td>User Name</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
        <hr />
        <input name="remember" type="checkbox">Remember Me
        <br/><br/>
        <input type="submit" value="Submit" name="submit">        
        <a href="forgot_password.php">Forgot Password?</a>
    </form>
</fieldset>

</body>
</html>
<footer>Copyright @ 2017</footer>

