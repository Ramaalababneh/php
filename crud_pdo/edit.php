<!doctype html>
<html lang="en">
<head>
    <title>Add new book</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-between my-4">
        <h1>Edit user</h1>
        <div><a href="index.php" class="btn btn-primary">Back</a></div>
    </header>
    <center>

<?php
// Include the database connection configuration file
include("conect.php");

// Get the 'id' parameter from the URL
$id = $_GET["id"];

try {
    // Establish a PDO database connection
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if form data has been submitted
    if (count($_POST) > 0) {
        // Prepare and execute an SQL UPDATE statement
        $sql = "UPDATE ppl SET fname = :fname, lname = :lname, age = :age, pet = :pet WHERE id = :id";
        $stmt = $pdo->prepare($sql);

        // Bind parameters to the prepared statement
        $stmt->bindParam(':fname', $_POST['fname']);
        $stmt->bindParam(':lname', $_POST['lname']);
        $stmt->bindParam(':age', $_POST['age']);
        $stmt->bindParam(':pet', $_POST['pet']);
        $stmt->bindParam(':id', $id);

        // Execute the statement
        $stmt->execute();
        $message = 'Edit successfully';
    }

    // Check if 'id' parameter is set
    if (isset($_GET["id"])) {
        // Fetch the record corresponding to the 'id'
        $sql = "SELECT * FROM ppl WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Fetch the data into an associative array
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
} catch (PDOException $e) {
    // Handle any exceptions that occur during the database operation
    echo "Error: " . $e->getMessage();
}
$pdo = null;
?>

<!-- Form for editing user data -->
<form action="" method="post">
    <div>
        <?php if (isset($message)) { echo $message;} ?>
    </div>
    <div class="form-element my-4">
        <input type="text"  class="form-control" name="fname" placeholder="First title:" value="<?php echo $row['fname']?>">
    </div>

    <div class="form-element my-4">
        <input type="text"  class="form-control" name="lname" placeholder="Last name:" value="<?php echo $row['lname']?>">
    </div>

    <div class="form-element my-4">
        <input type="number"  class="form-control" name="age" placeholder="Age:" value="<?php echo $row['age']?>">
    </div>

    <div class="form-element my-4">
        <input type="text"  class="form-control" name="pet" placeholder="Pet:" value="<?php echo $row['pet']?>">
    </div>

    <div class="form-element">
        <input type="submit" class="btn btn-success" name="creat" value="submit">
    </div>
</form>
<br>
<br>
<br>
</center>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
