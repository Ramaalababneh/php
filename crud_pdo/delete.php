<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<center>
    <br>
    <br>
    <br>

    <?php
    // Include the database connection configuration file
    include("conect.php");

    try {
        // Establish a PDO database connection
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Get the "id" parameter from the URL (assumes it's passed as a query parameter)
        $idToDelete = $_GET["id"];

        // Prepare and execute a SQL DELETE statement to remove a record with the specified id
        $sql = "DELETE FROM ppl WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $idToDelete);

        // Check if the deletion was successful and display a message accordingly
        if ($stmt->execute()) {
            echo "Deleted successfully";
        } else {
            echo "Error: " . $stmt->errorInfo()[2];
        }
    } catch (PDOException $e) {
        // Handle any exceptions that occur during the database operation
        echo "Error: " . $e->getMessage();
    }

    // Close the PDO connection
    $pdo = null;
    ?>

    <br>
    <br>
    <br>
    <!-- Link to go back to the index.php page -->
    <div><a href="index.php" class="btn btn-primary">Back</a></div>
</center>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
