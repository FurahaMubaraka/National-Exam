
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

                <a href="index.php" class="button"><button>Add New User</button></a>
                <table>
                    <tr>
                        <th>User_id</th>
                        <th>Username</th>
            <th>Password</th>
            <th colspan="2">Operation</th>
        </tr>
        <?php
        include("connect.php");
        $select=mysqli_query($conn,"SELECT * FROM users");
        $count=1;
        while($row=mysqli_fetch_array($select))
        {
        ?>
        <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['user_password'] ?></td>
            <td><a href="update.php?upd=<?php echo $row['user_id'] ?>"><button class="update">Update</button></a></td>
            <td><a href="delete.php?dlt=<?php echo $row['user_id'] ?>"><button class="delete">Delete</button></a></td>
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