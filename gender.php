<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gender</title>
</head>

<body>
    <form method="post">
        <input type="text" name="g" placeholder="Enter Gender : " />
        <input type="submit" name="submit" value="Submit" />

    </form>
    <?php
    if (isset($_POST['g'])) {

        $g = $_POST['g'];
        if ($g == 'male') {
            echo "<h1>Hello..</h1>";
        }
    }
    ?>

</body>

</html>