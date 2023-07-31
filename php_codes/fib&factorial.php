<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calculate Factorial and Fibonacci</h2>
    <form method="POST">
        <label>Enter a number</label>
        <input type="text" name="number" required />
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?php 
    /*Recursive function*/
    function factorial($n)
    {
        if($n <= 1)
        {
            return 1;
        } else {
            return $n * factorial($n-1);
        }
    }

    if(!empty($_POST['number']))
    {
        $n = $_POST["number"];
         /* Define a variable and assign a value to it to find the factorial.*/
        if($_POST['submit'] == "Submit")
        {
            echo "<hr>";
            echo "Factorial of $n is " . factorial($n) . "<br>"; /*Call the Function */ 
            if($n == 0)
            {
                echo $n. "! = " . factorial($n) . "<br>";
            } 
            else 
            {
                for($i=0; $i<$n+1; $i++)
                {
                    echo $i. "! = " . factorial($i) . "<br>";
                }
            }
        }
    }
   
    /*Recursive function*/
    function fibonacci($n)
    {
        if($n == 0)
        {
            return 0;
        } else if($n == 1) {
            return 1;
        } else {
            return (fibonacci($n-1) + fibonacci($n-2));
        }
    }

    if(!empty($_POST['number']))
    {
        if($_POST['submit'] == "Submit")
        {
        echo "<hr>";
        echo "Fibonacci of $n terms <br>";
            if($n < 1)
            {
                echo fibonacci($n) . ", ";
            } else {
                for($i=0; $i<$n; $i++)
                {
                    echo fibonacci($i) . ", ";
                }
            }
        }
    }
    
    ?>
</body>
</html>
