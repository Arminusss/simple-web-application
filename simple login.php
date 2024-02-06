<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        const labels= document.querySelectorAll(".form-control label");

        labels.forEach((label) =>{
            label.innerHTML = label.innerText
            .split("")
            .map(
                (letter, idx) =>
                '<span style="transition-delay:${idx * 50}ms">${letter}</span>'
            )
            .join("");
        });
    </script>
    <link rel="stylesheet" href="simple login form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Simple login form </title>
    <meta charset="utf-8">
</head>
<body>
    <div class="container">
        <h1> Sign In</h1>
        <form name="login" method="post" action="simple_login_server.php">
            <div class="form-control">
                <label>Username :</label>
                <input name="txtUsername" type="text" id="txtUsername" required />
            </div>
            <div class="form-control">
                <label>Password :</label>
                <input name="txtPassword" type="password" id="txtPassword" required />
            </div>
            <p>&nbsp;</p>
        <input  type="submit" name="Submit" id="Submit" value="Submit">
            <p class="text">Don't have an account ?<a href="simple registration.php">Create Account</a></p>
        </form>
    </div>
    <footer>
        <p>
            <a href="https://github.com/Arminusss">Visit our website</a>
        </p>
        <p class="footer">MADE WITH ❤ DESIGNED BY ARMINUSS</p>
      </footer>
</body>
</html>