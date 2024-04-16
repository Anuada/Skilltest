<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Job Form</title>
</head>
<body>

<h2>Add Job</h2>

<form action="../logic/jobsposter_process.php" method="POST">
    <label for="JobposterId">Job Poster ID:</label><br>
    <input type="text" id="JobposterId" name="JobposterId"><br>
    
    <label for="JobName">Job Name:</label><br>
    <input type="text" id="JobName" name="JobName"><br><br>
    
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
