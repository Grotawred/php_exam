<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Input Form</title>
</head>
<body>

<form action="process_date.php" method="post">
    <label for="year">Year:</label>
    <input type="text" id="year" name="year" required>

    <label for="month">Month:</label>
    <input type="text" id="month" name="month" required>

    <label for="day">Day:</label>
    <input type="text" id="day" name="day" required>

    <input type="submit" value="Create Date">
</form>

</body>
</html>
