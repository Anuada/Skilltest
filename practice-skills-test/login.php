<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
<div style="width: 100%; max-width: 1200px; margin: 0 auto;">
<form action="./logic/login.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <label for="account_type">Account Type</label>
        <select name="account_type" id="account_type">
            <option value="admin">Admin</option>
            <option value="employee">Employee</option>
            <option value="jobposter">Job poster</option>

        </select>
        
        <input type="submit" value="Login" name="login">
    </form>
</div>   


</body>

</html>
