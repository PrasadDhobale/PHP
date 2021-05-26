<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Integer</title>
</head>
<body>
    <h1>Compare Integer</h1>
    <form method="post">
        <input type="number" id="n1" name="n1" placeholder="Enter Number 1 : "/>
        <input type="number" id="n2" name="n2" placeholder="Enter Number 2 : "/>
        <input type="submit" value="submit" />
    </form>
    
    <?php
        if(isset($_POST['n1']) and isset($_POST['n2'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            
            if($n1 > $n2){
                echo "<h1>".$n1." Is Greater Than ".$n2;
            }
            elseif($n1 < $n2){
                echo "<h1>".$n2." Is Greater Than ".$n1;
            }
        }
    ?>
</body>
</html>