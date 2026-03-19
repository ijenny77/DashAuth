    <?php
    require "db.php";
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        body {
            background-color: #121212;
        }
        table,tr,td,th {
            background-color: #1f1f1f;
            border : 3px solid black;
            border-collapse: collapse;
            padding: 0.6rem;
            font-size: 1.2rem;
            color:white;
        }
        table {
            margin:2px auto;
            margin-bottom: 3rem;
            box-shadow:1px 3px 5px grey;
        }
        h2 {
            text-align: center;
            font-size: 1.5rem;
            text-decoration: underline;
        }
        #new {
        margin-left: 45rem;
        border:2px solid black;
        text-decoration: none;
        background-color: white;
        color: black;
        padding: 2px 5px;
        border-radius: 5px;
        font-size:1.3rem;
        }
        .sidebar {
        width: 220px;
        height: 100vh;
        background-color: #1a1a1a;
        position: fixed;
        display: flex;
        flex-direction: column;
        padding-top: 20px;
        }
        .sidebar img {
            width: 60px;
            border-radius: 50%;
            margin: 0 auto 10px;
        }
        .sidebar h2 {
            text-align: center;
            font-size: 16px;
            margin-bottom: 30px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            transition: 0.2s;
        }
        .sidebar a.active,
        .sidebar a:hover {
            background-color: #333;
        }
    
        </style>
    </head>
    <body>
        <div class="sidebar">
            <img src="profile.png" alt="Profile Picture">
            <h2>Jenny</h2>
            <a href="admin_dashboard.php" class="active">Dashboard</a>
            <a href="">Accounts</a>
            <a href="">Transactions</a>
            <a href="">Budgets</a>
            <a href="">Reports</a>
            <a href="settings.php">Settings</a>
            <a href="logout.html">Logout</a>
        </div>
        <h2 style = "color:white">Users List</h2>
        <table>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th> 
            </tr>
            <?php
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo"<td>".$row['username']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>
                            <a href='edit.php?id=".$row['id']."'style='font-size:1.2rem ;background-color: black; color: white; border:2px solid black; border-radius: 5px; margin-right: 7px; padding: 2px 5px; text-decoration: none;'>Edit</a>
                            <a href='delete.php?id=".$row['id']."' style='font-size:1.2rem ;background-color: black; color: white; border:2px solid black; border-radius: 5px; padding: 2px 5px; text-decoration: none;'>Delete</a>
                        </td>";
                        echo"</tr>";
                    }
                }else{
                    echo "No users found.";
                }
            ?>
        </table>
        <a href="signup.html" id="new">Add New</a>
    </body>
    </html>