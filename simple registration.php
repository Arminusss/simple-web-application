<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="simple registration form.css">

</head>
<body>

    <div class="container">
    <h1>sign up</h1>
    <form name="register" method="post" action="t1.php">
        <div class="form-control">
            <label>Username:</label>
            <input name="txtUsername" type="text" id="txtUsername" required/>
        </div>
        <div class="form-control">
            <label>Email:</label>
            <input name="txtEmail" type="email" id="txtEmail" required/>
        </div>
        <div class="form-control">
            <label>Password:</label>
            <input name="txtPassword" type="password" id="txtPassword" required/>
        </div>
        <div class="form-control">
            <label>Profile Pic</label>
            <input type="file"/>
        </div>
        <p>&nbsp;</p>
        <input  type="submit" name="Submit" id="Submit" value="Submit">
    <p class="text">Already have an account  ?<a href="simple login.php">sign in here</a></p>
   </form>
</div>
</body>
</html>