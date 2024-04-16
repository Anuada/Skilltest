<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body>
    <form action="./logic/signup.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <p>Choose account type:</p>
        <input type="radio" id="admin" name="account_type" value="admin">
        <label for="admin">Admin</label><br>
        <input type="radio" id="employee" name="account_type" value="employee">
        <label for="employee">Employee</label><br>
        <input type="radio" id="jobposter" name="account_type" value="jobposter">
        <label for="employee">Job poster</label><br>

        <input type="submit" value="Signup" name="signup">
    </form>
</body>

</html>
