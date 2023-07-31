<?php

    if(!isset($_POST['first_num']))
    {
        $first_num = null;
    }
    else
    {
        $first_num = $_POST['first_num'];
    }
    if(!isset($_POST['second_num']))
    {
        $second_num = null;
    }
    else
    {
        $second_num = $_POST['second_num'];
    }
    if(!isset($_POST['operator']))
    {
        $operator = null;
    }
    else
    {
        $operator = $_POST['operator'];
    }
    $result = 0;

        if(is_numeric($first_num) && is_numeric($second_num))
        {
            switch($operator)
            {
                case "Add":
                    $result = $first_num + $second_num;
                    break;
                case "Subtract":
                    $result = $first_num - $second_num;
                    break;
                case "Multiply":
                    $result = $first_num * $second_num;
                    break;
                case "Divide":
                    $result = $first_num / $second_num;
                    break;
                default:
                    break;
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <h1>PHP - Simple Calculator Program</h1>
    <form action="" method="POST" id="form">
        <input type="number" name="first_num" id="first_num" required
        value=<?php echo $first_num;?> />
        <label for="first_num">First Number</label>
        <br>

        <input type="number" name="second_num" id="second_num" required
        value=<?php echo $second_num;?> />
        <label for="second_num">Second Number</label>
        <br>

        <input readonly name="result" id="result"
        value=<?php echo $result;?> />
        <label for="second_num">Result</label>
        <br><br>

        <input type="submit" name="operator" value="Add" />
        <input type="submit" name="operator" value="Subtract" />
        <input type="submit" name="operator" value="Multiply" />
        <input type="submit" name="operator" value="Divide" />
    </form>
</body>
</html>