<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>

<body>
    <h1>Table</h1>
    <form method="post">
        <input type="number" id="n" name="n" placeholder="Enter Number : ">
        <input type="submit" value="submit" />
    </form>
    <?php
    if (isset($_POST['n'])) {
        $n = $_POST['n'];
        for($i=1;$i<=10;$i++){
            echo "<br>".$n." * ".$i."  = ".($n*$i);
        }
    }
    ?>
</body>

</html>