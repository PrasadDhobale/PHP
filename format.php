<?php
if (isset($_POST['no'])) {
    $a = $_POST['no'];
    if ($a < 0) {
        printf("%d is a negative number\n", $a);
    } elseif ($a == 0) {
        printf("%d is a zero\n", $a);
    } elseif ($a > 0) {
        printf("%d is a positive number\n", $a);
    }
    $txt = $_POST['txt'];
        printf("<br>You Entered : %s", $txt);
    $flt = $_POST['flt'];
        printf("<br>You Entered : %f", $flt);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="no" placeholder="Enter Number : " />
        <input type="floatval" name="flt" placeholder="Enter Float : " />
        <input type="text" name="txt" placeholder="Enter text : " />        
        <input type="submit" name="submit" value="Submit" />
    </form>    
</body>

</html>