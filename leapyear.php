<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year</title>
</head>

<body>
    <h1>Leap Year</h1>
    <form method="post">
        <input type="number" id="n" name="n" placeholder="Enter Number : ">
        <input type="submit" value="submit" />
    </form>
    <?php
        if (isset($_POST['n'])) {
            $n = $_POST['n'];
            if((($n%4==0) && (($n%400==0) || ($n%100!== 0)))){                
                printf("<h1>%d Is a Leap Year</h1>",$n);
            }
            else{
                printf("<h1>%d Is Not a Leap Year</h1>",$n);
            }
        }
    ?>
</body>
</html>