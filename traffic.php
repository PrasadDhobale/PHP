<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Rules</title>
</head>
<body>
    <h1>Traffic Signals</h1>
    <form method="post">
        <input type="text" name="s" placeholder="Enter Color : ">
        <input type="submit" value="submit">
    </form>
    <?php
        if(isset($_POST['s'])){
            $s = $_POST['s'];
            if($s == "red"){
                echo"<h1>RED For STOP</h1>";
            }
            elseif($s == "green"){
                echo "<h1>Green For GO</h1>";
            }
            elseif($s == "yellow"){
                echo "<h1>Yellow For Go Slow</h1>";
            }
            else{
                echo "<h1>Invalid Signal</h1>";
            }
        }
    ?>
</body>
</html>