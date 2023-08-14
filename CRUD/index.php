<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my shop</title>
    <link rel="styleSheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Clients</h2>
        <a class="btn btn-primary" href="create.php" role="button">New Client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>ADDRESS</th>
                    <th>CREATED</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // to connect to the database 
                $servername = "localhost";
                $username   = "root"; // username database
                $password   = ""; 	// password database
                $database   = "myshop";

                // Create connection
                $connection = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                    }

                // Read all row from database table
                $sql = "SELECT * FROM clients";
                $result = $connection -> query($sql);

                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }


                // Read data of each row
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[phone]</td>
                        <td>$row[address]</td>
                        <td>$row[created_at]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='update.php?id=$row[id]'>Update</a>
                            <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
                    </td>
                    </tr>
                    ";
                }
                ?>
                <!-- <tr>
                    <td>10</td>
                    <td>bill</td>
                    <td>bill@gmail.com</td>
                    <td>0157894524</td>
                    <td>usa</td>
                    <td>18/5/2022</td>
                    <td>
                        <a class='btn btn-primary btn-sm'href="/myshop/update.php">Update</a>
                        <a class='btn btn-danger btn-sm'href="/myshop/delete.php">Delete</a>
                    </td>
                </tr> -->
            </tbody>

        </table>

    </div>
    
</body>
</html>