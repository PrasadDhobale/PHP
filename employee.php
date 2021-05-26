<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Post</title>
</head>
<body>
    <h1>Employee Post By Salary</h1>
    <form method="post">
        <input type="number" id="sal" name="sal" placeholder="Enter Your Salary :  " value="<?php echo isset($_POST['sal']) ? $_POST['sal'] : '' ?>" >
        <input type="number" placeholder="Addition Is : <?php echo isset($_POST['n1']) ? $_POST['n1']+$_POST['n2'] : ''  ?>">
        <input type="submit" value="submit"/>
    </form>    
    <?php
        if(isset($_POST['sal'])){
            $sal = $_POST['sal'];
            if($sal <= 5000){
                echo "<h2>Clerk</h2>";
            }
            elseif($sal >5000 and $sal <10000){
                echo "<h2>Manager</h2>";
            }
            elseif($sal <=20000 and $sal >=10000){
                echo "<h2>System Analyst</h2>";
            }
        }        
    ?>
</body>
</html>