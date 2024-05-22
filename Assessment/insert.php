<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/trainee.css">
</head>
<body>
    <fieldset>
        <form action="create.php" method="post">
        <h1>Insert New User</h1><br>
            <label>Module_id</label><br>
            <input type="number" name="module_id" id=""><br><br>
            <label>Trade_id</label><br>
            <input type="number" name="trade_id" id=""><br><br>
            <label>Trainer_id</label><br>
            <input type="number" name="trainer_id" id=""><br><br>
            <label>Ass Date</label><br>
            <input type="date" name="ass_date" id=""><br><br>
            <input type="submit" name="submit" value="submit">
            <br><br>
            <h3>
                Learn More About adding user? <a href="">Learn More...</a>
            </h3>
        </form>
    </fieldset>
</body>
</html>