<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age</title>
</head>

<body>
    <form method="post">
        <input type="text" name="age" placeholder="Enter Age : " />
        <input type="submit" name="submit" value="Submit" />

    </form>
    <?php
    if (isset($_POST['age'])) {
        
        $age = $_POST['age'];
        if ($age >= 18) {
            echo "<h1>You Are Selected.</h1>";
        } else {
            echo "<h1>You are Not Selected.</h1>";
        }
    }
    ?>
</body>

</html>