<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            text-align: left;
        }
    </style>
</head>

<body>    
        <h1>
            Arithmetic Operation
        </h1>
        <form method="post">      

                <!-- Taking value 1 in an text box -->
                <input type="text" name="num1" placeholder="Enter value 1" required/>

                <!-- Taking value 1 in an text box -->
                <input type="text" name="num2" placeholder="Enter value 2" required/>
                <br><br><br>
                <p>If You Check More Than 1 Box,Then It Will Be Take Choice Of Last Check</p>
                <!-- Taking option in an text box -->
                <input type="checkbox" name="option" value="add">Addition <br>
                <input type="checkbox" name="option" value="sub">Subtraction <br>
                <input type="checkbox" name="option" value="mul">Multiplication <br>
                <input type="checkbox" name="option" value="div">Division <br>
                <br><br><br>

                <input type="submit" name="submit" value="Submit" />

            </table>
        </form>    
    <?php

    // Checking submit condition
    if (isset($_POST['submit'])) {

        // Taking first number from the
        // form data to variable 'a'
        $a = $_POST['num1'];

        // Taking second number from the
        // form data to a variable 'b'
        $b = $_POST['num2'];

        // Taking option from the form
        // data to a variable 'ch'
        $ch = $_POST['option'];

        switch ($ch) {
            case 'add':

                // Execute addition operation
                // when option 1 is given
                $r = $a + $b;
                echo " Addition of two numbers = " . $r;
                break;

            case 'sub':

                // Executing subtraction operation
                // when option 2 is given
                $r = $a - $b;
                echo " Subtraction of two numbers= " . $r;
                break;

            case 'mul':

                // Executing multiplication operation
                // when option 3 is given
                $r = $a * $b;
                echo " Multiplication of two numbers = " . $r;
                break;

            case 'div':

                // Executing division operation
                // when option 4 is given
                $r = $a / $b;
                echo " Divison of two numbers = " . $r;
                break;

            default:

                // When 1 to 4 option is not given
                // then this condition is executed
                echo ("invalid option\n");
        }

        return 0;
    }
    ?>
</body>

</html>