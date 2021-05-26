<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Validation</title>
</head>

<body>
    <h1>Customer Validation</h1>
    <form method="post">
        <input type="number" id="age" name="age" placeholder="Enter Age : ">
        <input type="submit" value="submit" />
    </form>
    <?php
    if (isset($_POST['age'])) {
        $age = $_POST['age'];
        if ($age < 18) {
            echo "<h2>You Are Not Eligible For Driving Licence";
        } else {
            echo "<h2>You Are Eligible For Driving Licence";
        }
    }
    ?>
</body>

</html>