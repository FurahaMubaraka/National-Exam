
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/content.css">
    <link rel="stylesheet" href="../css/display.css">
</head>
<body>
    <section>
        <nav>
            <h1>F<span>M</span></h1>
            <ul>
                <li><a href="../view/content.php">Home</a></li>
                <li><a href="../users/display.php">User</a></li>
                <li><a href="../Trade/display.php">Trade</a></li>
                <li><a href="../Trainer/display.php">Trainer</a></li>
                <li><a href="../Trainee/display.php">Trainee</a></li>
                <li><a href="../Module/display.php">Module</a></li>
                <li><a href="../Assessment/display.php">Assessment</a></li>
                <li><a href="../users/login.php">Logout</a></li>
            </ul>
        </nav>
    </section>
    <section>
        <div class="main">
            <div class="goaw">

                <a href="insert.php" class="button"><button>Add New User</button></a>
                <table>
                    <tr>
                        <th>Trainer_id</th>
                        <th>Module_id</th>
                        <th>Trade_id</th>
                        <th>Trainer_id</th>
                        <th>Ass_Date</th>
            <th colspan="2">Operation</th>
        </tr>
        <?php
        include("connect.php");
        $select=mysqli_query($conn,"SELECT * FROM assessment");
        $count=1;
        while($row=mysqli_fetch_array($select))
        {
        ?>
        <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['module_id'] ?></td>
            <td><?php echo $row['trade_id'] ?></td>
            <td><?php echo $row['trainer_id'] ?></td>
            <td><?php echo $row['ass'] ?></td>
            <td><a href="update.php?upd=<?php echo $row['ass_id'] ?>"><button class="update">Update</button></a></td>
            <td><a href="delete.php?dlt=<?php echo $row['ass_id'] ?>"><button class="delete">Delete</button></a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>
        </div>
    </section>
    <section>
        <div class="footer">
            <h1>Copyright@ <a href="">Furah</a></h1>
        </div>
    </section>
</body>
</html>